<?
require 'connection.php';
$err = '';
$err = '';
	
	function check($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	
	
	
	
    function user_register ($username, $password, $email){
		global $err;
		global $conn;
		$password = password_hash($password PASSWORD_DEFAULT);
        $register = $conn->prepare("SELECT * FROM Users WHERE Username=:username");
		$register->bindValue(':username', $username);
		$register->execute();
		
		$exist = $register->fetch();
		
		if($exist){
			$err = 'Kasutajanimi või email on juba kasutusel, palun valige uus kasutajanime või emaili';
		}else if(strlen($username && $password) >4 ){
			$err = 'Kasutajanimi ja parool peavad olema vähemalt 4 tähemärki suur';
		}else{
			$string= str_shuffle('123456789qwertyuioplkjhgfdsazxcvbnm');
			$register = $conn->prepare("INSERT INTO `Users`(`Username`, `Password`, `Email`, `Token`) VALUES (:username,:password,:email, :token)");
			
			$register->bindValue(':username', $username);
			$register->bindValue(':password', $password);
			$register->bindValue(':email', $email);
			$register->bindValue(':token', $string);
			$register->execute();
			$err = 'Teie kasutaja on edukalt registeeritud, teid suunatakse 3 sekundi pärast edasi';
			header( "refresh:3;url=login.php" );
			
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			$message ='teie aktiveerimiskood on: http://e-korv.eu/activation.php?token='.$string.'';
			mail($email, "E-korv kasutaja aktiveerimiskood", $message,$headers);
		}
    }
	
	
	
	
	
    function user_login ($username, $password){
		global $err;
		global $conn;
		$login = $conn->prepare("SELECT * FROM Users WHERE Username=:username");
		$login->bindValue(':username', $username);
		$login->execute();

		$exist = $login->fetch();
		if($exist){
			if(password_verify($password, $exist['Password'])){
				$_SESSION['user'] = $exist['id'];
				header ('location: register/index.php');
			}else{
				$err = 'Kasutajanimi või parool on vale';
			}
		}else{
			$err = 'Kasutajanimi või parool on vale';
		}
    }
		
	
	
	
	
	function user_logout(){
		session_destroy();
		header('location: ../index.php');
	}
	
	
	
	

	function activation(){
		global $err;
		global $succ;
		global $conn;
		$token= $_GET['token'];
		$activate = $conn->prepare("SELECT * FROM `Users` WHERE `Token`=:token AND `Activated`=0");
		$activate->bindValue(':token', $token);
		$activate->execute();
			
		$exist = $activate->fetch();
		if($exist){
			$err = 'Teie kasutaja on edukalt aktiveeriud!';
			$activate = $conn->prepare("UPDATE `Users` SET `Activated`=1 WHERE `Token`=:token");
			$activate->bindValue(':token', $token);
			$activate->execute();
		}else{
			$err = 'Teie kasutaja on juba aktiveeritud või teie aktiveerimiskood on aegunud!';
		}
	}	
	
	
	
	
	
	function resetpw($email){
		global $err;
		global $succ;
		global $conn;
		$resetpw = $conn->prepare("SELECT * FROM `Users` WHERE `Email`=:email");
		$resetpw->bindValue(':email', $email);
		$resetpw->execute();
		
		$exist = $resetpw->fetch();
		if($exist){
			$succ = 'Teie meilile on edukalt saadetud parooli taastamis link!';
			$string= str_shuffle('123456789qwertyuioplkjhgfdsazxcvbnm');
			$resetpw = $conn->prepare("UPDATE `Users` SET `Token`=:resetpw WHERE `Email`=:email");
			$resetpw->bindValue(':email', $email);
			$resetpw->bindValue(':resetpw', $string);
			$resetpw->execute();
			
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			mail($email, "E-korv kasutaja parooli taastamine", "http://e-korv.eu/reset.php?token=$string",$headers);
		}else{
			$err = 'Miski läks valesti!';
		}
	}
		
	
	
	
	
	function resets($password1,$password2){
		global $err;
		global $conn;
		$token= $_GET['token'];
		$password1 = password_hash($password1 && $password2, PASSWORD_DEFAULT);
		$reset = $conn->prepare("SELECT * FROM `Users` WHERE `Token`=:token");
		$reset->bindValue(':token', $token);
		$reset->execute();
		
		$exist = $reset->fetch();
		if($exist){
			if($_POST['password1'] == $_POST['password2'] ){
			$err = 'Teie parool on edukalt muudetud';
			$string= str_shuffle('123456789qwertyuioplkjhgfdsazxcvbnm');
			$reset = $conn->prepare("UPDATE `Users` SET `Password`=:password1,`Token`=:newtoken WHERE `Token`=:token");
			$reset->bindValue(':password1', $password1);
			$reset->bindValue(':newtoken', $string);
			$reset->bindValue(':token', $token);
			$reset->execute();
			}else{
				$err = 'Paroolid ei ühti';
			}
		}else{
			$err = 'Teie parool on juba muudetud või teie sessioon on lõppenud!!';
		}
	}
	
	
	

?>
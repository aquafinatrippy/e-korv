<?php
	require_once('function.php');
	$username = check($_POST['username']);
	$password = check($_POST['password']);
	$password1 = check($_POST['password1']);
	$password2 = check($_POST['password2']);
	$email = check($_POST['email']);
	
	//Kasutaja andmed
	$udata = $conn->prepare("SELECT * FROM Users WHERE Id=:id");
	$udata->bindValue(':id', $_SESSION['user']);
	$udata->execute();
	$udatas = $udata->fetch();
	
		$Username = $udatas['Username'];
		$Email = $udatas['Email'];
		$Date = $udatas['Date'];
	
	//Kasutaja registreeerimine
	if(isset($_POST['register'])){
		user_register($username, $password,$email);
	}
	
	//Kasutaja login
	if(isset($_POST['login'])){
		user_login($username, $password);
	}
	if(isset($_POST['resetpw'])){
		resetpw($email);
	}
	if(isset($_POST['reset'])){
		resets($password1, $password2);
	}
	
	
?>
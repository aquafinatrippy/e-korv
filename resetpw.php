<!doctype html>
<?php require('DATA/data.php');?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registerlogin.css">
	
	
    <title>E-KORV</title>
  </head>
  <body>
     <div class="container"  style="margin-top: 10%;">
         <div class="row justify-content-center text-center">
		 <p class='tekst'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <div class="col-md-5 text-center">
                <form class='form-group' method="POST">
					  <?php if($err != ""){
						  echo '<div class="alert alert-danger" role="alert">'.$err. '</div>';
					  }if($succ != ""){
						  echo '<div class="alert alert-success" role="alert">'.$succ. '</div>';
					  } ?>
                  <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Sisestage e-mail">
                  </div>
                  <button type="submit" value="submit" class="button" name="resetpw">Taasta parool</button>
                  <div id="text" class="text">
                        <p><a href="index.php">Naase esilehele</a></p>
                        <p><a href="login.php">Logi sisse</a></p>
                  </div>
                </form>
            </div>
         </div>
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php

	session_start();



    if(array_key_exists('delete',$_GET)){

        include("connection.php");
        $query = "DELETE FROM `users` WHERE id = '".mysqli_real_escape_string($link, $_SESSION['id'])."' LIMIT 1";
        mysqli_query($link, $query);

        header('Location: index.php');
    }
    $error = "";




		if($_POST['submit'] == '1')
		{


			if($_SESSION['pin'] == $_POST['otp']){

				$_SESSION['verify'] = '1';
				header('Location: 106A6C241B8797F52E1E77317B96A201.php');

				// print_r($_SESSION['verify']);

			}
			else{

				$error = '<div class="alert alert-danger" role="alert"><p>OTP was incorrect :( want sign up again?</p></div>';
			}
		}



	// echo $_SESSION['email'];
	// print_r($_POST);



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Book Vaale</title>
  </head>
  <body>

    <div class="container" style="margin-top: 10%;" >
    	<h1>Verify your email!</h1>
    	<div id="error"><? echo $error; ?></div>
		<form class="form-inline" method="post">
		  <div class="form-group mx-sm-3 mb-2">
		    <label for="inputPassword2" class="sr-only">OTP</label>
		    <input type="tel" class="form-control" id="inputPassword2" placeholder="OTP received at email" name="otp" >
		  </div>
		  <button type="submit" name="submit" value="1" class="btn btn-primary mb-2" >Submit</button>
		</form>
		<p>It will take a bit time to receive OTP, so please be patient.....</p>
		<form action="otpConfirmation.php?delete=delete" method="post">
	    	<button class="btn btn-outline-warning my-2 my-sm-0" type="submit" value="delete">Sign up again</button>
	    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<?php 

	session_start();

  $error = "";

  if((array_key_exists("verify", $_SESSION) AND $_SESSION['verify']) OR (array_key_exists("logInEmail", $_SESSION) AND $_SESSION['logInEmail'])){

  	  $msg = "Logout";
      $logValue = '1';
      include("header.php");
?>

	<div class="form-inline my-2 my-lg-0">
        <a href="index.php?logout=<?php echo $logValue; ?>"><button class="btn btn-outline-success my-2 my-sm-0"><?php echo $msg; ?></button></a>
      </div>
        </div>
      </nav>

      <div style="height: 45px;"></div>
	  <div style="height:50px;"></div>

<?php


		include("payment.php");

  }

  else{

      $msg = "Login/Signup";
      $logValue = '0';
      include("header.php");
      include("signupButton.php");
  }

  ?>




  <?php


  include("footer.php");

 ?>

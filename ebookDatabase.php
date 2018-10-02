<?php
  
  session_start();
  
  if((array_key_exists("verify", $_SESSION) AND $_SESSION['verify']) OR (array_key_exists("logInEmail", $_SESSION) AND $_SESSION['logInEmail'])){

      $msg = "Logout";
      $logValue = '1';
  }

  else{

      $msg = "Login/Signup";
      $logValue = '0';
  }

       include("header.php");

?>
      <div class="form-inline my-2 my-lg-0">
        <a href="index.php?logout=<?php echo $logValue; ?>"><button class="btn btn-outline-success my-2 my-sm-0"><?php echo $msg; ?></button></a>
      </div>
        </div>
      </nav>

      <div style="height: 45px;"></div>

    <div style="height:50px;"></div>
	<div class="container" style="min-height: 500px;">
	    <div class="alert alert-danger" role="alert">
		  This service is currently not active!
		</div>
	</div>

<?php
  include("footer.php");

?>    
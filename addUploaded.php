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

  <div class="container" style="height:400px;">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Congratulations!</h4>
      <p>Your add is successfully uploaded on our website.</p>
      <hr>
      <p class="mb-0">Whenever anyone requires your your book we will get in touch with you.</p>
    </div>
  </div>  






<?php include("footer.php");?>
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
<div class="container">
	<button type="button" class="btn btn-info btn-lg btn-block btn-default disabled"><?php echo $_GET['branch']; ?></button>
</div>	

<div style="height:50px;"></div> 
        <div class="container">
        	
          	<div class="row">
              	<div class="flip3D">
				  <div class="back"><a class="btn btn-default btn-reseller" role="button" href="booksDatabase.php?branch=<?php echo $_GET['branch']; ?>&semester=1"><h3 class="sem">1st SEM<br/><h6 style="margin-left: 80px;">click->></h6></h3></a></div>
				  <div class="front"><a class="btn btn-default btn-reseller" role="button"><h3 class="sem">1st SEM</h3></a></div>
				</div>
				<div class="flip3D">
				  <div class="back"><a class="btn btn-default btn-reseller" role="button" href="booksDatabase.php?branch=<?php echo $_GET['branch']; ?>&semester=2"><h3 class="sem">2nd SEM<br/><h6 style="margin-left: 80px;">click->></h6></h3></a></div>
				  <div class="front"><a class="btn btn-default btn-reseller" role="button"><h3 class="sem">2nd SEM</h3></a></div>
				</div>
				<div class="flip3D">
				  <div class="back"><a class="btn btn-default btn-reseller" role="button" href="booksDatabase.php?branch=<?php echo $_GET['branch']; ?>&semester=3"><h3 class="sem">3rd SEM<br/><h6 style="margin-left: 80px;">click->></h6></h3></a></div>
				  <div class="front"><a class="btn btn-default btn-reseller" role="button"><h3 class="sem">3rd SEM</h3></a></div>
				</div>  
				<div class="flip3D">
				  <div class="back"><a class="btn btn-default btn-reseller" role="button" href="booksDatabase.php?branch=<?php echo $_GET['branch']; ?>&semester=4"><h3 class="sem">4th SEM<br/><h6 style="margin-left: 80px;">click->></h6></h3></a></div>
				  <div class="front"><a class="btn btn-default btn-reseller" role="button"><h3 class="sem">4th SEM</h3></a></div>
				</div>      
            </div>

            <div class="row" style="margin-top: 40px;">
              	<div class="flip3D">
				  <div class="back"><a class="btn btn-default" role="button" href="booksDatabase.php?branch=<?php echo $_GET['branch']; ?>&semester=5"><h3 class="sem">5th SEM<br/><h6 style="margin-left: 80px;">click->></h6></h3></a></div>
				  <div class="front"><a class="btn btn-default btn-reseller" role="button"><h3 class="sem">5th SEM</h3></a></div>
				</div>
				<div class="flip3D">
				  <div class="back"><a class="btn btn-default btn-reseller" role="button" href="booksDatabase.php?branch=<?php echo $_GET['branch']; ?>&semester=6"><h3 class="sem">6th SEM<br/><h6 style="margin-left: 80px;">click->></h6></h3></a></div>
				  <div class="front"><a class="btn btn-default btn-reseller" role="button"><h3 class="sem">6th SEM</h3></a></div>
				</div>
				<div class="flip3D">
				  <div class="back"><a class="btn btn-default btn-reseller" role="button" href="booksDatabase.php?branch=<?php echo $_GET['branch']; ?>&semester=7"><h3 class="sem">7th SEM<br/><h6 style="margin-left: 80px;">click->></h6></h3></a></div>
				  <div class="front"><a class="btn btn-default btn-reseller" role="button"><h3 class="sem">7th SEM</h3></a></div>
				</div>  
				<div class="flip3D">
				  <div class="back"><a class="btn btn-default btn-reseller" role="button" href="booksDatabase.php?branch=<?php echo $_GET['branch']; ?>&semester=8"><h3 class="sem">8th SEM<br/><h6 style="margin-left: 80px;">click->></h6></h3></a></div>
				  <div class="front"><a class="btn btn-default btn-reseller" role="button"><h3 class="sem">8th SEM</h3></a></div>
				</div>       
            </div>
          	
          	
        </div>
<?php include("footer.php");?>
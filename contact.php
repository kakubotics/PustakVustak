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

<div id="contactHello">
    
        <h1 id="hello">
          Hello!
        </h1>
      
</div>

<div class="container">
	<br/>
	<h3>Mailing address</h3><br/>
	<div class="row">
		<div class="col-sm-6">
			<p>CMR Institute of Technology 132 AECS Layout<br/>
			 ITPL Main Road, Kundalahalli<br/>
			  Bangalore 560037, India 
			</p>
		</div>
		<div class="col-sm-6">
			<p>B-702, hillside appartment<br/>
			ramtekdi industrial area<br/> 
			near dumping ground, Hadapsar<br/>
			Pune, Maharashtra 411028<br/>
			India 
			</p>
		</div>
	</div>
	<br/>
	<div>
		<h3>Any queries (Customer Care Helpline)</h3><br/>
		<p>Call: +91 8669174383, +91 8427810290</p>

	</div>
	<br/>
	<div>
		<h3>Media queries</h3><br/>
		<p>Email: gautamkhandelwal57@gmail.com<br/>  yashkhandelwal27@gmail.com</p>

	</div>
</div>


  <?php include("footer.php");?>
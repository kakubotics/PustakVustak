	<div class="form-inline my-2 my-lg-0">
	      <a href="index.php?logout=<?php echo $logValue; ?>"><button class="btn btn-outline-success my-2 my-sm-0"><?php echo $msg; ?></button></a>
	</div>
  </div>
</nav>

<div style="height: 45px;"></div>
<div style="height:50px;"></div>
<div class="container" style="height:400px;">
	

	<div class="alert alert-danger" role="alert">
	  <h4 class="alert-heading">I think you are not logged in!</h4>
	  <p>Before buying or selling a book you have to SignUp/Login first.</p>
	  <hr>
	</div>


	<a href="index.php?logout=<?php echo $logValue; ?>"><button type="button" class="btn btn-warning btn-lg">SignUp/Login first</button></a>
</div>	

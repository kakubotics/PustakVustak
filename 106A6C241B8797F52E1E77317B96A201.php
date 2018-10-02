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

      <div class="jumbotron">

          <h1 class="display-4" style="color: white;">Welcome gyz!</h1>
          <p class="lead" style="color: white;">The easiest way to sell/buy books online! Now no more to books market,get your books in college itself.</p>
          <div  id="about"></div>
          <hr class="my-4" style="border-color: white;">
          <p style="color: white;">Ready to buy/sell your next book with us? That's great!</p>

      </div>

            <div id="intro" class="container banner text-center">
        <h1>Sell Books Easily</h1>
        <p>
          We offer a secure  eCommerce service for anyone to sell and buy books quickly and easily. You can get started selling and buying books with bookvale in just a few minutes using our simple and easy platform.
            <a role="button" data-toggle="modal" data-target="#myModal2" data-title="Seller" class="try-it">Sign up now!</a>
        </p>
       </div>
      <div style="height:30px; background-color: #F3F7FA; margin-top: 40px;"></div>
       <div class="conatiner text-center" style="background-color: #F3F7FA;">

         <i class="fas fa-credit-card" style="font-size:30px;">   Safe Payment</i>
         <i class="fas fa-shopping-cart" style="font-size:30px; margin-left: 45px; margin-right: 45px;"> Easy buy &amp; sell</i>
         <i class="fas fa-concierge-bell" style="font-size:30px;"> Best customer service</i>

       </div>
      <div style="height:30px; background-color: #F3F7FA;"></div>



      <!-- cards-->
      <div class="container">
        <div class="card-deck">
            <a class="card" href="novelDatabase.php">
              <img class="card-img-top" src="images/novels.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Novels</h5>
                <p class="card-text">We provide latest and various genres of novels to our customers .</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </a>
            <a class="card" href="refrenceBookDatabase.php">
              <img class="card-img-top" src="images/refrence.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Refrence Books</h5>
                <p class="card-text">We have compiled a list of Best Reference Books on Engineering  Subjects. These books are used by students of top universities, institutes and colleges.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </a>
            <a class="card" href="ebookDatabase.php">
              <img class="card-img-top" src="images/ebook.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">eBooks</h5>
                <p class="card-text">The world's leading online source of ebooks, with a vast range of ebooks from academic, popular and professional publishers.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </a>
          </div>
        </div>
<?php include("footer.php") ?>

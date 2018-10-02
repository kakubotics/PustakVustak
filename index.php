<?php

    session_start();



    $error = "";

    if (isset($_GET['logout'])) {

        // unset($_SESSION);
        // setcookie("id", "", time() - 60*60);
        // $_COOKIE["id"] = "";

        session_unset();

    // } else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])) {

    } else if (array_key_exists("verify", $_SESSION) AND $_SESSION['verify']) {

        header('Location:106A6C241B8797F52E1E77317B96A201.php');

    }





    // ////////////////////////////////////////////////////////////////////////////////////////////////////////////////







    if(array_key_exists("submit", $_POST)){

      include("connection.php");


      if(($_POST['name'] == "") or ($_POST['email'] == "") or ($_POST['password'] == "") or ($_POST['gender'] == "")){

          $error = '<div class="alert alert-danger" role="alert">Some field is missing!</div>';

      }

      else{


        if($_POST['signUp'] == '1'){

          $query = "SELECT id FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

          $result = mysqli_query($link, $query);

          if(mysqli_num_rows($result) > 0){

            $error = '<div class="alert alert-danger" role="alert">That email is already taken.</div>';
          }

          else{

            $query = "INSERT INTO `users` (`name`, `email`, `password`, `gender`) VALUES ('".mysqli_real_escape_string($link, $_POST['name'])."', '".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."', '".mysqli_real_escape_string($link, $_POST['gender'])."')";

            if (!mysqli_query($link, $query)) {

                        $error = '<div class="alert alert-danger" role="alert">Could not sign you up - please try again later.</div>';

            }
            else{


                $id = mysqli_insert_id($link);
                $_SESSION['id'] = $id;/////////////////////////////////*****************************
                $_SESSION['logInEmail'] = $_POST['email'];//////////////////********************************
                $_SESSION['userName'] = $_POST['name'];


                function generatePIN($digits = 4){
                $i = 0; //counter
                $pin = ""; //our default pin is blank.
                while($i < $digits){
                    //generate a random number between 0 and 9.
                    $pin .= mt_rand(0, 9);
                    $i++;
                }
                return $pin;
              }

              $_SESSION['pin'] = generatePIN();

              $emailTo = $_SESSION['logInEmail'];

                $subject = "Email verification";

                $content = "OTP for email verification is: ".$_SESSION['pin'];

                $headers = "From: BookVaale.com";

                mail($emailTo, $subject, $content, $headers);





                // if (isset($_POST['stayLoggedIn'])) {



                //             setcookie("id", $id, time() + 60*60*24*365);

                // }



                 header("Location: 2CB00DCB9BE9A6C7FA2C339268F43E78.php");

            }
          }

        }




      }


    }

    else if($_POST['login'] == '0'){

            // print_r($_POST);
            include("connection.php");
            $query = "SELECT * FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['loginEmail'])."'";
            $result = mysqli_query($link, $query);
            $row = mysqli_fetch_array($result);

            if (isset($row)) {

                        $hashedPassword = $_POST['loginPassword'];
                        $_SESSION['userName'] = $row['name'];

                        if ($hashedPassword == $row['password']) {

                            $_SESSION['verify'] = '1';////////////////////////////////////////************************
                            $_SESSION['logInEmail'] = $_POST['loginEmail']; ////////////////////////*************************


                            header("Location: 106A6C241B8797F52E1E77317B96A201.php");

                        } else {

                            $error = '<div class="alert alert-danger" role="alert"><p><strong>That email/password combination could not be found.</strong></div>';

                        }

                    }

        }





     ?>


      <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <!-- CSS link -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <link rel="pustakvustak" type="image/png" href="favicon.png" /> -->
    <link rel="icon" type="image/png" href="favicon.png" />

    <title>PustakVustak</title>
  </head>
  <body>


      <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd; margin-bottom:40px;">
        <a class="navbar-brand" href="#"><span style="color:#C70039;
            font-family: 'Kaushan Script', cursive;
            font-size: 30px;">Pustak</span><span style="color:#FF9A28;
            font-family: 'Kaushan Script', cursive;
            font-size: 30px;">Vustak</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Branch
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="semester.php?branch=<?php echo "BASIC-SCIENCE"; ?>">BASIC SCIENCE</a>
                <a class="dropdown-item" href="semester.php?branch=<?php echo "CSE"; ?>">CSE</a>
                <a class="dropdown-item" href="semester.php?branch=<?php echo "IS"; ?>">IS</a>
                <a class="dropdown-item" href="semester.php?branch=<?php echo "ECE"; ?>">ECE</a>
                <a class="dropdown-item" href="semester.php?branch=<?php echo "EEE"; ?>">EEE</a>
                <a class="dropdown-item" href="semester.php?branch=<?php echo "CIVIL"; ?>">CIVIL</a>
                <a class="dropdown-item" href="semester.php?branch=<?php echo "MECHANICAL"; ?>">MECHANICAL</a>

              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link " href="F32589DD84AB36581ABBB4135C084348.php">Sell Books</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="post">
            <input class="form-control mr-sm-2" type="email" placeholder="Email" name="loginEmail">
            <input class="form-control mr-sm-2" type="password" placeholder="Password" name="loginPassword">
            <button class="btn btn-success my-2 my-sm-0" type="submit" name="login" value="0">Login</button>
          </form>
        </div>
      </nav>

      <div style="height: 45px;"></div>

      <div class="jumbotron">


        <div class="cotainer">

          <div class="signUpForm">


            <div id="error"><?php echo $error; ?></div>
            <label><h3 style="margin-top:-15px;">Sign Up Now!</h3></label>


            <form method="post">

              <div class="form-group">

                <input type="text" class="form-control" id="exampleInputName" name="name"  placeholder="Enter name" value="<?php echo ($_POST['name']); ?>">

              </div>
              <div class="form-group">

                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo ($_POST['email']); ?>">
                <small id="emailHelp" class="form-text ">We'll never share your email with anyone else.</small>
              </div>



                <!-- <div class="form-inline">

                  <div class="form-group mx-sm-4 mb-2">

                    <input type="tel" class="form-control" id="inputPassword2" name="otp" placeholder="OTP received in email">
                  </div>
                  <button type="submit" name="otpSubmit" class="btn btn-primary mx-sm-4 mb-2">Confirm email(via OTP)</button>
                </div> -->




              <div class="form-group">

                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">

                <select class="form-control" id="exampleFormControlSelect1" name="gender">
                  <option disabled='' selected='' value=''>Select Gender</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Others</option>
                </select>
              </div>
              <div  id="about"></div>
              <!-- <form class="form-inline">

                <div class="form-group mx-sm-5 mb-2">
                  <input type="tel" class="form-control" id="inputMobileNumber" placeholder="Mobile no.">
                </div>
                <div class="form-group mx-sm-5 mb-2">
                  <input type="tel" class="form-control" id="inputOtp" placeholder="OTP">
                </div>
                <button type="submit" class="btn btn-primary mb-2 mx-sm-5">SEND OTP</button>

              </form> -->


              <div class="form-group">
                 <input type="hidden" name="signUp" value="1">
                     <input type="submit" name="submit" value="Sign Up!" class="btn btn-success">
              </div>
            </form>


          </div>
        </div>

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

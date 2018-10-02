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

      <?php


      include("connection.php");


      $semester = $_GET['semester'];
      $branch = $_GET['branch'];



      $query = "SELECT * FROM `engBook` WHERE `semester` = '$semester' AND `bookBranch` = '$branch' ORDER BY id ASC";

            $result = mysqli_query($link, $query);

            if(mysqli_num_rows($result)){

              while($row = mysqli_fetch_array($result)){

       ?>

      <div class="col-md-3" style="margin-top: 20px;">

          <form method="post" action="987CE1890FAE731D404F9F0C428EBE77.php">



            <div style="border:2px solid #333; background-color:white; border-radius:10px;background-color: #F0FFE6; padding:16px;" align="center">

                <img style="border:2px solid #333;" src="engBookImages/resized_<?php echo $row["image"]; ?>" class="img-responsive" /><br />



                <h4 style="color:#787878;margin-top: 10px;"><?php echo ucfirst($row["title"]); ?></h4>

                <h5>₹ <?php echo $row["amount"]; ?> <strike style="color:#C9C9C9"><?php echo (($row["amount"]*.3)+$row["amount"])?></strike><span style="color:#787878"> 30% OFF</span></h5>

                <input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />

                <input type="hidden" name="hidden_email" value="<?php echo $row["email"]; ?>" />

                <input type="hidden" name="hidden_mobile" value="<?php echo $row["mobile"]; ?>" />

                <input type="hidden" name="hidden_price" value="<?php echo $row["amount"]; ?>" />

                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Buy now" />


            </div>

          </form>

      </div>



<?php
              }
            }

?>

    </div>
<?php
  include("footer.php");

?>

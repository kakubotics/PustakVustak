<?php 

  include("connection.php");

  $valueInc = 0;

  
    $query = "SELECT * FROM `twoTimesFree` WHERE `email` = '".mysqli_real_escape_string($link, $_SESSION['logInEmail'])."' LIMIT 1";


    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);

    if($row["valueInc"] == ""){

      $query = "INSERT INTO `twoTimesFree` (`valueInc`, `email`) VALUES ('".mysqli_real_escape_string($link, ($valueInc))."', '".mysqli_real_escape_string($link, $_SESSION['logInEmail'])."')";

      $result = mysqli_query($link, $query);

    }

    $query = "SELECT * FROM `twoTimesFree` WHERE `email` = '".mysqli_real_escape_string($link, $_SESSION['logInEmail'])."' LIMIT 1";


    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);

    $valueInc = $row["valueInc"] + 1;

    $query = "UPDATE `twoTimesFree` SET `valueInc` = '".mysqli_real_escape_string($link, $valueInc)."' WHERE `email` = '".mysqli_real_escape_string($link, $_SESSION['logInEmail'])."' LIMIT 1";

    $result = mysqli_query($link, $query);

    $query = "SELECT * FROM `twoTimesFree` WHERE `email` = '".mysqli_real_escape_string($link, $_SESSION['logInEmail'])."' LIMIT 1";

    $result = mysqli_query($link, $query);

    if(mysqli_num_rows($result)){

      $row = mysqli_fetch_array($result);

      if($row["valueInc"]){

          $title = $_POST['hidden_name'];
          $sellerEmail = $_POST['hidden_email'];
          $sellerMobile = $_POST['hidden_mobile'];
          $price  = $_POST['hidden_price'];
          $userName = $_SESSION['userName'];
          include("sellerDetails.php");
      }

      else{

        include("sellerDetailsNotShared.php");
      }
    }  

?>
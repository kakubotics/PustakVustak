<?php

	session_start();

  $error = "";

  if((array_key_exists("verify", $_SESSION) AND $_SESSION['verify']) OR (array_key_exists("logInEmail", $_SESSION) AND $_SESSION['logInEmail'])){


      if(array_key_exists("submit", $_POST)){

            include("connection.php");

            if((($_POST['customRadioInline1'] == "option2") and ($_POST['bookType'] == "")) or (($_POST['customRadioInline1'] == "option1") and ($_POST['bookSemester'] == "") and ($_POST['bookBranch'] == "")) or (($_POST['customRadioInline1'] == "") and ($_POST['customRadioInline1'] == "")) or (($_POST['bookSemester'] == "") and ($_POST['bookType'] == "") and ($_POST['bookBranch'] == "")) or ($_POST['bookDescription'] == "") or ($_POST['bookTitle'] == "") or ($_POST['mobileNumber'] == "") or ($_POST['bookAmount'] == "")){

                $error = '<div class="alert alert-danger" role="alert">Some field is missing!</div>';


            }

            else{

                if($_POST['submitAdd'] == '1'){




                    if($_POST['customRadioInline1'] == "option1"){

                        //$target = "engBookImages/".basename($_FILES['bookImage']['name']);


                        $query = "INSERT INTO `engBook` (`title`, `semester`, `image`, `description`, `email`,`mobile`, `amount`, `bookBranch`) VALUES ('".mysqli_real_escape_string($link, $_POST['bookTitle'])."', '".mysqli_real_escape_string($link, $_POST['bookSemester'])."', '".mysqli_real_escape_string($link, $_FILES['bookImage']['name'])."', '".mysqli_real_escape_string($link, $_POST['bookDescription'])."', '".mysqli_real_escape_string($link, $_SESSION['logInEmail'])."', '".mysqli_real_escape_string($link, $_POST['mobileNumber'])."', '".mysqli_real_escape_string($link, $_POST['bookAmount'])."', '".mysqli_real_escape_string($link, $_POST['bookBranch'])."')";


                          if (!mysqli_query($link, $query)) {



                        $error = '<div class="alert alert-danger" role="alert">Could not post an add - please try again later.</div>';

                         }
                         else{

                            //move_uploaded_file($_FILES['bookImage']['tmp_name'], $target);
                            include("imageSave.php");

                         }


                    }

                    else if($_POST['customRadioInline1'] == "option2"){

                        if($_POST['bookType'] == "Novel"){

                          $query = "INSERT INTO `novel` (`title`, `image`, `description`, `email`,`mobile`, `amount`) VALUES ('".mysqli_real_escape_string($link, $_POST['bookTitle'])."', '".mysqli_real_escape_string($link, $_FILES['bookImage']["name"])."', '".mysqli_real_escape_string($link, $_POST['bookDescription'])."', '".mysqli_real_escape_string($link, $_SESSION['logInEmail'])."', '".mysqli_real_escape_string($link, $_POST['mobileNumber'])."', '".mysqli_real_escape_string($link, $_POST['bookAmount'])."')";


                          if (!mysqli_query($link, $query)) {

                        $error = '<div class="alert alert-danger" role="alert">Could not post an add - please try again later.</div>';

                         }
                         else{

                            include("imageSaveNovelRefrence.php");
                         }



                        }

                        else if($_POST['bookType'] == "Refrence Book"){

                          $query = "INSERT INTO `refBook` (`title`, `image`, `description`, `email`,`mobile`, `amount`) VALUES ('".mysqli_real_escape_string($link, $_POST['bookTitle'])."', '".mysqli_real_escape_string($link, $_FILES['bookImage']["name"])."', '".mysqli_real_escape_string($link, $_POST['bookDescription'])."', '".mysqli_real_escape_string($link, $_SESSION['logInEmail'])."', '".mysqli_real_escape_string($link, $_POST['mobileNumber'])."', '".mysqli_real_escape_string($link, $_POST['bookAmount'])."')";


                          if (!mysqli_query($link, $query)) {

                        $error = '<div class="alert alert-danger" role="alert">Could not post an add - please try again later.</div>';

                         }
                         else{

                            include("imageSaveNovelRefrence.php");
                         }


                        }

                        else if($_POST['bookType'] == "Ebook"){

                          $query = "INSERT INTO `ebook` (`title`, `image`, `description`, `email`,`mobile`, `amount`) VALUES ('".mysqli_real_escape_string($link, $_POST['bookTitle'])."', '".mysqli_real_escape_string($link, $_FILES['bookImage']["name"])."', '".mysqli_real_escape_string($link, $_POST['bookDescription'])."', '".mysqli_real_escape_string($link, $_SESSION['logInEmail'])."', '".mysqli_real_escape_string($link, $_POST['mobileNumber'])."', '".mysqli_real_escape_string($link, $_POST['bookAmount'])."')";


                          if (!mysqli_query($link, $query)) {

                        $error = '<div class="alert alert-danger" role="alert">Could not post an add - please try again later.</div>';

                         }
                         else{


                         }


                        }

                    }

                }
            }
      }

      $msg = "Logout";
      $logValue = '1';
      include("header.php");
      include("85BAB64001701AF73936B7F8F24C53B7.php");
  }

  else{

      $msg = "Login/Signup";
      $logValue = '0';
      include("header.php");
      include("ACAF3199D8FC6D67B904C8213E2DE0AA.php");
  }


  include("footer.php");

 ?>

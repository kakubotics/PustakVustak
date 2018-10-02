<?php 

     // Access the $_FILES global variable for this specific file being uploaded
    // and create local PHP variables from the $_FILES array of information
    $fileName = $_FILES["bookImage"]["name"]; // The file name
    $fileTmpLoc = $_FILES["bookImage"]["tmp_name"]; // File in the PHP tmp folder
    $fileType = $_FILES["bookImage"]["type"]; // The type of file it is
    $fileSize = $_FILES["bookImage"]["size"]; // File size in bytes
    $fileErrorMsg = $_FILES["bookImage"]["error"]; // 0 for false... and 1 for true
    $kaboom = explode(".", $fileName); // Split file name into an array using the dot
    $fileExt = end($kaboom); // Now target the last array element to get the file extension
    // START PHP Image Upload Error Handling --------------------------------------------------
    if (!$fileTmpLoc) { // if file not chosen
        echo "ERROR: Please browse for a file before clicking the upload button.";
        exit();
    } else if($fileSize > 5242880) { // if file size is larger than 5 Megabytes
        echo "ERROR: Your file was larger than 5 Megabytes in size.";
        unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
        exit();
    } else if (!preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
         // This condition is only if you wish to allow uploading of specific file types    
         echo "ERROR: Your image was not .gif, .jpg, or .png.";
         unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
         exit();
    } else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
        echo "ERROR: An error occured while processing the file. Try again.";
        exit();
    }
    // END PHP Image Upload Error Handling ----------------------------------------------------
    // Place it into your "uploads" folder mow using the move_uploaded_file() function
    $moveResult = move_uploaded_file($fileTmpLoc, "novelreferenceImages/$fileName");
    // Check to make sure the move result is true before continuing
    if ($moveResult != true) {
        echo "ERROR: File not uploaded. Try again.";
        unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
        exit();
    }
    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
    // ---------- Include Universal Image Resizing Function --------
    include_once("ak_php_img_lib_1.0.php");
    $target_file = "novelreferenceImages/$fileName";
    $resized_file = "novelreferenceImages/resized_$fileName";
    $wmax = 200;
    $hmax = 180;
    ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
    // ----------- End Universal Image Resizing Function -----------
    // Display things to the page so you can see what is happening for testing purposes
    //echo "The file named <strong>$fileName</strong> uploaded successfuly.<br /><br />";
    //echo "It is <strong>$fileSize</strong> bytes in size.<br /><br />";
    //echo "It is an <strong>$fileType</strong> type of file.<br /><br />";
    //echo "The file extension is <strong>$fileExt</strong><br /><br />";
    //echo "The Error Message output for this upload is: $fileErrorMsg";
    $URL="http://myfirststartup-com.stackstaging.com/addUploaded.php";
    echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
    echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';



 ?>
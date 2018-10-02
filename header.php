<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="favicon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <!-- CSS link -->
    <link rel="stylesheet" type="text/css" href="style.css">

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

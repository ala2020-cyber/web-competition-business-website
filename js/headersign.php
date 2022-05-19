<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FabLab Soliders</title>
    <script
      src="https://kit.fontawesome.com/d988222789.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Roboto+Mono:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./cssSheet/style.css" />
    <link rel="shortcut icon" href="./images/logo." type="image/x-icon">
  </head>
  <body>
    <!-- landing section  -->
    <div id="head">

      <nav class="wrapper_center slide-left">
        <div class="logo wrapper_center">
          <img src="./images/logo.png" /> <span class="logo-text" >Re-imagine</span>
        </div>
        <ul class="nav_links">
        <li><a href="index.php"><i class="fas icon fa-home"></i>Home</a></li>
        <?php
               if(isset($_SESSION["userid"])){
                echo'<li><a href="interships.inc.php" class="active">Interships</a></li>';
                echo'<li><a href="training.inc.php"class="active">Training</a></li>';
                echo'<li><a href="profile.php"><i class="far icon fa-address-card"></i>Profile</a></li>';
                echo'<li><a href="includes/logout.inc.php"><i class="fas icon fa-sign-out-alt"></i>Logout</a></li>';

               }else{
                 echo'<li><a href="signin.php">Sign Up</a></li>';
                 echo'<li><a href="login.php"><i class="fas icon fa-sign-in"></i>Log In</a></li>';
               }
          
          ?>

        </ul>
        </ul>
      </nav>

<?php

  session_start();


   if(!isset($_SESSION['zalogowany'])){
     header('Location: login.php');
     exit();
   }
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/fontello.css">

    <mete name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    <title>PHP Crud</title>
  </head>
  <body>


    <div class="container">
      <div class="navbar">
        <div class="logo">DB Reader</div>
        <div class="user">John Don</div>
        <div class="setings"><i class="icon-cog"></i></div>
      </div>

      <div class="menubar">

        <a href="http://localhost/php1/proj/system/system.php"><div class="menu">
          <div class="icon"><i class="icon-home"></i>Home</div>
        </div></a>

        <a href="#"><div class="menu">
          <div class="icon"><i class="icon-th-large"></i>My Board</div>
        </div></a>

        <a href="#"><div class="menu">
          <div class="icon"><i class="icon-calendar"></i>Calendar</div>
        </div></a>

        <a href="#"><div class="menu">
          <div class="icon"><i class="icon-list-bullet"></i>Tasks</div>
        </div></a>

        <a href="#"><div class="menu">
          <div class="icon"><i class="icon-chat"></i>Chat</div>
        </div></a>

        <a href="#"><div class="menu">
          <div class="icon"><i class="icon-videocam"></i>Video call</div>
        </div></a>

        <a href="#"><div class="menu">
          <div class="icon"><i class="icon-bell-alt"></i>Report</div>
        </div></a>

        <a href="http://localhost/php1/proj/database/system.php"><div class="menu">
          <div class="icon"><i class="icon-database"></i>Database</div>
        </div></a>

        <a href="#"><div class="menu">
          <div class="icon"><i class="icon-tasks"></i>Statisticks</div>
        </div></a>

        <a href="#"><div class="menu">
          <div class="icon"><i class="icon-box"></i>Project Status</div>
        </div></a>

        <a href="http://localhost/php1/proj/loginpage/logout.php"><div class="menu">
          <div class="iconl"><i class="demo-icon icon-off"></i>Logout</div>
        </div></a>

      </div>


      <div class="content">
        <div class="contentbarT">
          <a href="add.php"><div class="add">Home</div></a>
        </div>

        <div class="contentbarB">


          <div class="data">

          </div>
        </div>

      </div>
    </div>


  </body>
</html>

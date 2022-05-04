<?php
  session_start();

  if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)){
    header('Location: showdata.php');
    exit();
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <mete name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleNA.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Ghosty DB</title>
  </head>
  <body>
    <div class="loader-container">
      <div class="loader"></div>
    </div>
    <div class="container">
      <div class="header">
        <div class="logo"><a href="http://localhost/php1/proj/mainpage/index.html">DB Reader</a></div>
        <div class="login"><a href="login.php">Login</a></div>
      </div>
      <div class="content">
        <div class="content1">
          <h2>
            <?php
            if(isset($_SESSION['wrong'])) echo  $_SESSION['wrong'];
           ?></h2>
          <div class="loginS">


            <form action="zaloguj.php" method="post">

              <h3>Login:<h3><br/> <input type="text" name="login"/><br/>
              <h3>Password:<h3><br/> <input type="password" name="password"/><br/><br/>

              <button type="button">
                <input type="submit" value="Login">
              </button>

            </form>

          </div>

        </div>
      </div>

<!-- Ghost is done below-->
      <div class="ghost-con">
        <div class="ghost">
          <div class="face">
            <div class="eye">
              <span></span><span></span>
            </div>
            <div class="mouth"></div>
          </div>

          <div class="hands">
            <span></span><span></span>
          </div>
          <div class="feet">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div class="ghost1">
          <div class="face1">
            <div class="eye1">
              <span></span><span></span>
            </div>
            <div class="mouth1"></div>
          </div>

          <div class="hands1">
            <span></span><span></span>
          </div>
          <div class="feet1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>


<!-- Ghost is done above-->

    <div class="footer"><div class="footer1">Created by JS &copy;</div></div>
    </div>
    <div class="cursor1"></div>
    <div class="cursor2"></div>

    <script>
      var cursor1 = document.querySelector(".cursor1");
      var cursor2 = document.querySelector(".cursor2");
      document.addEventListener("mousemove",function(e){
        cursor1.style.cssText = cursor2.style.cssText = "left: " + e.clientX
         + "px; top: " + e.clientY + "px;";
      });
    </script>

  </body>
</html>

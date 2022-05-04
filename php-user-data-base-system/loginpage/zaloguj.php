<?php

  session_start();

  if((!isset($_POST['login'])) || (!isset($_POST['password']))){
    header('Location: login.php');
    exit();
  }

  require_once "connect.php";

  $conection = new mysqli($host, $bd_user, $db_password, $db_name);

  if($conection->connect_errno!=0){
    echo "Error: " . $conection->connect_errno;
  }
  else {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    $password = htmlentities($password, ENT_QUOTES, "UTF-8");

    if($resoult = @$conection->query(
    sprintf("SELECT * FROM uzytkownicy WHERE user='%s' AND pass='%s'",
    mysqli_real_escape_string($conection,$login),
    mysqli_real_escape_string($conection,$password))))
    {
      $ilu_users = $resoult->num_rows;
      if($ilu_users>0){

        $_SESSION['zalogowany']=true;

        unset($_SESSION['wrong']);
        $resoult->free_result();
        header('Location: http://localhost/php1/proj/system/system.php');
      }
      else
      {
        $_SESSION['wrong'] = '<div> Wrong! Try Again </div>';
        header('Location: loginNA.php');
      }
    }

    $conection->close();
  }


  ?>

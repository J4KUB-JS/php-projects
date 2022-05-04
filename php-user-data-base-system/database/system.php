<?php

  session_start();
  require_once 'functions.php';

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
    <title>PHP Crud</title>
  </head>
  <body>

<?php
  $mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
  $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
?>

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
          <a href="add.php"><div class="add"><i class="icon-plus"></i>Add user</div></a>
        </div>

        <div class="contentbarB">

<?php while ($row = $result->fetch_assoc()): ?>

          <div class="data">
            <div class="datacontFN"><?php echo $row['fullname'];?></div>
            <div class="datacontID"><?php echo $row['employeeid'];?></div>
            <div class="datacontJ"><?php echo $row['position'];?></div>
            <div class="datacontM"><?php echo $row['email'];?></div>
            <div class="datacontN"><?php echo $row['phonenumber'];?></div>

            <a href="add.php?edit=<?php echo $row['id']; ?>"><div class="edit"><i class="icon-pencil"></i></div></a>
            <a href="functions.php?delete=<?php echo $row['id']; ?>"><div class="delete"><i class="icon-trash-empty"></i></div></a>
          </div>
          <?php endwhile; ?>
        </div>

      </div>
    </div>
<?php
  function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '<pre>';
}
?>
  </body>
</html>

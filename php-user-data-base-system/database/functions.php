<?php
require_once 'connect.php';

$id = 0;
$update = false;

$employeeid = '';
$fullname = '';
$position = '';
$email = '';
$phonenumber = '';

if(isset($_POST['save'])){
  $employeeid = $_POST['employeeid'];
  $fullname = $_POST['fullname'];
  $position = $_POST['position'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];

  $mysqli->query("INSERT INTO data (employeeid, fullname, position, email, phonenumber)
  VALUES('$employeeid', '$fullname', '$position', '$email', '$phonenumber')")
  or die($mysqli->error);

  header('Location: system.php');
}

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM data WHERE id='$id';")or die($mysqli->error);

  header('Location: system.php');
}

if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $update = true;
  $result = $mysqli->query("SELECT * FROM data WHERE id='$id';")or die($mysqli->error);
    $row = $result->fetch_array();

    $employeeid = $row['employeeid'];
    $fullname = $row['fullname'];
    $position = $row['position'];
    $email = $row['email'];
    $phonenumber = $row['phonenumber'];
}
if(isset($_POST['update'])){
  $id = $_POST['id'];
  $employeeid = $_POST['employeeid'];
  $fullname = $_POST['fullname'];
  $position = $_POST['position'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];

  $mysqli->query("UPDATE data SET employeeid='$employeeid', fullname='$fullname', position='$position', email='$email', phonenumber='$phonenumber' WHERE id=$id") or die($mysqli->error);

  header('Location: system.php');
}

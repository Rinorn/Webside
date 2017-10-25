<?php
session_start();
//includes db_conf variables
require_once 'db_conf.php';

//Getting data from post, same names as in the form.
if(isset($_SESSION['uname'])){
  $uname = $_SESSION['uname'];
  $aboutme = $_POST['aboutme'];

  $sql_check = "SELECT * FROM users WHERE uname='$uname'";

  $result_check = mysqli_query($link, $sql_check);

  if(mysqli_fetch_assoc($result_check)){
    $sql = "UPDATE users SET aboutme = '$aboutme' WHERE uname='$uname'";
    $result = mysqli_query($link, $sql);
  } else {
    echo 'User does not exist';
  }
}else{
  header("Location: index.php");
}
$_SESSION['aboutme']=$aboutme;
header("Location: profile.php");
 ?>

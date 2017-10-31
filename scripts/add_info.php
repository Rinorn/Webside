<?php
session_start();
//includes db_conf variables
require_once 'db_conf.php';

//Getting data from post, same names as in the form.
if(isset($_SESSION['uname'])){
  $uname = $_SESSION['uname'];
  $info['aboutme'] = $_POST['aboutme'];
  $info['email'] = $_POST['email'];
  $info['phone'] = $_POST['phone'];
  $info['personalpage'] = $_POST['personalpage'];

  $sql_check = "SELECT * FROM users WHERE uname='$uname'";

  //checking if uname is valid
  $result_check = mysqli_query($link, $sql_check);

//looping through all keys in info array, allows for more info later
  if(mysqli_fetch_assoc($result_check)){
    $sql = "UPDATE users SET aboutme = '".$info['aboutme']."', email='".$info['email']."', phone='"
    .$info['phone']."', personalpage='".$info['personalpage']."' WHERE uname='$uname'";
    $result = mysqli_query($link, $sql);

  } else {
    echo 'User does not exist';
  }
}else{
  header("Location: ../index.php");
}

//setting session variables
$_SESSION['aboutme']=$info['aboutme'];
$_SESSION['email']=$info['email'];
$_SESSION['phone']=$info['phone'];
$_SESSION['personalpage']=$info['personalpage'];



header("Location: ../profile.php");
 ?>

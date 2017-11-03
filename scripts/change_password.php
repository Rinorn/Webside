<?php
  session_start();

  require_once 'db_conf.php';

  $cur_password = $_POST['cur_password'];
  $new_password = $_POST['new_password'];
  $uname = $_SESSION['uname'];

  $sql = "SELECT * FROM users WHERE uname='$uname'";

  $result = mysqli_query($link, $sql);
  //mysqli_fetch_assoc returns an assossiative array with row from result
  if(!$row = mysqli_fetch_assoc($result)){
    echo "No user with that name!";
  } else {
    //verifying if password matches hash
    if(password_verify($cur_password, $row['pwd'])){
      $hash_pwd = password_hash($new_password, PASSWORD_BCRYPT);
      $sql_cpw = "UPDATE users SET pwd = '$hash_pwd' WHERE uname='$uname'";
      $result_cpw = mysqli_query($link, $sql_cpw);
    }
  }

  //return user to index.php
  header("Location: ../index.php");

 ?>

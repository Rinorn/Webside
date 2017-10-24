<?php
session_start();

//includes db_conf variables
require_once 'db_conf.php';

//Getting data from post, same names as in the form.
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

//Creting sql command: SELCTING entire login table, getting rows where username and password matches input
$sql = "SELECT * FROM login WHERE uname='$uname' AND pwd='$pwd'";
//executing query, storing result
$result = mysqli_query($link, $sql);
//mysqli_fetch_assoc returns an assossiative array with row from result
if(!$row = mysqli_fetch_assoc($result)){
  echo "Username and password does not match!";
} else {
  //assossiative array with session id, is unique for all users
  $_SESSION['id'] = $row['id'];
  $_SESSION['uname'] = $row['uname'];
}

//return user to index.php
header("Location: index.php");

 ?>

<?php
session_start();
//includes db_conf variables
require_once 'db_conf.php';

//Getting data from post, same names as in the form.
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

//Creting sql command: INSERT INTO table_name (var1, var2, ...) VALUES (var1 from form, var2 from form, ...)
$sql = "INSERT INTO `login`(`fname`, `lname`, `uname`, `pwd`) VALUES ('$fname', '$lname', '$uname', '$pwd')";
//result returned by DB
$result = mysqli_query($link, $sql);

//return user to index.php
header("Location: index.php");

 ?>

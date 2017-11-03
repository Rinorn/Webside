<?php
session_start();
include 'db_conf.php';

$message = $_POST['message'];
$uname = $_SESSION['uname'];

$sql = "INSERT INTO posts (text, uname) VALUES ('$message', '$uname')";

$result = mysqli_query($link, $sql);

echo $result;

header("Location: ../forum.php#text_post");
 ?>

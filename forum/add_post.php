<?php
session_start();
include 'db_conf.php';

$message = $_POST['message'];

$sql = "INSERT INTO posts (text) VALUES ('$message')";

$result = mysqli_query($link, $sql);

echo $result;

header("Location: index.php");
 ?>

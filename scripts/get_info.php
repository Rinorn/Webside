<?php
require_once 'db_conf.php';

$uname = $_SESSION['uname'];

$sql = "SELECT * FROM users WHERE uname='$uname'";

$result = mysqli_query($link, $sql);

$row = mysqli_fetch_assoc($result);

 ?>

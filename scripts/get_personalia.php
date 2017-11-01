<?php
require_once 'db_conf.php';

$sqlV = "SELECT * FROM users WHERE uname='vegardhe'";
$sqlO = "SELECT * FROM users WHERE uname='olehennu'";
$sqlJ = "SELECT * FROM users WHERE uname='jorgenha'";
$sqlC = "SELECT * FROM users WHERE uname='chr_iss'";




$vegard = mysqli_fetch_assoc(mysqli_query($link, $sqlV));
$ole = mysqli_fetch_assoc(mysqli_query($link, $sqlO));
$jorgen = mysqli_fetch_assoc(mysqli_query($link, $sqlJ));
$chriss = mysqli_fetch_assoc(mysqli_query($link, $sqlC));

 ?>

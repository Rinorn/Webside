<?php
//Defining login details for database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'kollb_hp');

//Connecting to database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Checking for errors
if($link===false){
  die("Could not connect to database: " . mysqli_connect_error());
}

?>

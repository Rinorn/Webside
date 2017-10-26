<?php
//starts session if not started then destroys any session, user is logged out
session_start();
session_destroy();

//return user to index.php
header("Location: ../index.php");
 ?>

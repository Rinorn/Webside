<?php

//Starting session
session_start();

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login system</title>
  </head>
  <body>

    <form action="login.php" method="post">
      <input type="text" name="uname" placeholder="Username">
      <br />
      <input type="password" name="pwd" placeholder="Password">
      <br />
      <button type="submit">Login</button>
    </form>

    <?php
      //if session has been set, print out user id
      if(isset($_SESSION['id'])){
        echo "Logged in as userid: " . $_SESSION['id'];
      } else {
        echo "Not logged in";
      }
     ?>

    <br>
    <br>
    <br>

    <!-- method="post" to hide data -->
    <form action="register.php" method="post">
      <input type="text" name="fname" placeholder="Firstname">
      <br />
      <input type="text" name="lname" placeholder="Lastname">
      <br />
      <input type="text" name="uname" placeholder="Username">
      <br />
      <input type="password" name="pwd" placeholder="Password">
      <br />
      <button type="submit">Register</button>
    </form>

    <br><br><br>

    <form action="logout.php">
      <button type="submit">Log out</button>
    </form>

  </body>
</html>

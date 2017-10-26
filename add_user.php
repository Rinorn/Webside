<?php
//Starting session
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>
    <?php
      //if session has been set, print out user id
      if(isset($_SESSION['id'])){
        echo "Logged in as userid: " . $_SESSION['id'];
      } else {
        header("Location:index.php");
      }
     ?>
     <br />
     <h3>Add new user</h3>
     <!-- method="post" to hide data -->
     <form action="scripts/register.php" method="post">
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
  </body>
</html>

<?php
session_start();
include 'scripts/get_info.php';
if(!isset($_SESSION['id'])){
  header("Location: index.php");
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Kollokvie Best</title>
    <!-- Required meta tags -->
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
    <?php include 'templates/nav.php'; ?>
    <main>
      <div class="row" id="contBox1" style="padding-top:100px">
        <div class="container-fluid col-md-7 centered">
          <div class="row">
            <div class="col-md-8">
              <h3>Settings</h3>
              <br>
              <h5>About me</h5>
              <form action="scripts/add_info.php" method="post">
                <textarea name="aboutme" rows="8" cols="80" maxlength="300"><?php echo $row['aboutme'];?></textarea>
                <br>
                <p>E-mail</p>
                <input type="text" name="email" value=<?php echo '"'.$row['email'].'"';?>>
                <p>Phone</p>
                <input type="text" name="phone" value=<?php echo '"'.$row['phone'].'"';?>>
                <p>Personal page</p>
                <input type="text" name="personalpage" value=<?php echo '"'.$row['personalpage'].'"';?>>
                <br><br>
                <button type="submit">Submit</button>
              </form>
              <br>
              <p>Change password</p>
              <form action="change_password.php" method="post" >
                <input type="password" name="cur_password" placeholder="Current password">
                <input type="password" name="" placeholder="New password">
                <button type="submit">Change</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>

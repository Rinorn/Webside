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
                <textarea name="aboutme" rows="8" cols="80"><?php echo $row['aboutme'];?></textarea>
                <br>
                <button type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>

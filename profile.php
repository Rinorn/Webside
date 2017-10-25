<?php
session_start();

if(!isset($_SESSION['id'])){
  header("Location:index.php");
}
 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Kollikvie Best</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"><!--Legger til Css stylesheet for bootstrap-->
    <link rel="stylesheet" href="webSide.css">
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <main>
      <div class="jumbotron text-center jumbotron-fluid d-none d-md-block">
        <h1>Kollokvie Best</h1>
        <p>We specialize in corn</p>
      </div>
      <div class="row" id="contBox1">
        <div class="container-fluid col-md-7 centered">
          <div class="row">
            <div class="col-md-8">
              <h1><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></h1>
              <p>
                <?php if(!empty($_SESSION['aboutme'])){
                  echo $_SESSION['aboutme'];
                } else {
                  echo 'Nothing here yet!';
                } ?>
              </p>
            </div>
            <div class="col-md-3">
              <div class="float-right">
                <h2>Personalia</h2>
                <ul>
                  <li>E-mail</li>
                  <li>Personal page</li>
                  <li>etc</li>
                  <li>etc</li>
                  <li>etc</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><!--implementerer bootstraps JQuerys lib-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script><!--implementerer bootstraps Popper.js lib-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script><!--implementerer bootstraps javascript plugins-->
  </body>
</html>

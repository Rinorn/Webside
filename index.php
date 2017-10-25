<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Kollokvie Best</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"><!--Legger til Css stylesheet for bootstrap-->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="webSide.css">
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <main>
      <div class="jumbotron text-center jumbotron-fluid d-none d-md-block" id="contBoxJumbo">
        <h1>Kollokvie Best</h1>
        <p>We specialize in corn</p>
          <div class="d-flex justify-content-center">
          <form class="form-inline my-2 my-lg-0"><!--søkefelt og søkeknapp må legges i en form tagg-->
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="search" />
            <button class="btn btnHover my-2 y-sm-0" type="submit"><i class="fa fa-search"></i> Search</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="container-fluid col-md-12 centered">
            <div class="container-fluid text-center" id="contBox1">
              <div class="contText">
                <h1>About </h1>
                <h3>Blablablablablablablabla</h3>
                <a href="index.php">Read more</a>
              </div>
            </div>
            <div class="container-fluid text-center" id="contBox2">
              <div class="contText">
                <h1>Projects</h1>
                <h3>blablablatatatata</h3>
                <a href="index.php"><p class="text-danger">Read more</p></a>
              </div>
            </div>
            <div class="container-fluid text-center" id="contBox3">
              <div class="contText">
                <h1>Portfolias</h1>
                <h3>blablablatatatata</h3>
                <a href="index.php"><p class="text-danger">Read more</p></a>
              </div>
            </div>
            <div class="container-fluid text-center" id="contBox4">
              <div class="contText">
                <h1>Forum</h1>
                <h3>blablablatatatata</h3>
                <a href="index.php"><p class="text-danger">Read more</p></a>
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

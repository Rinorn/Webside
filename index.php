<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Kollokvie Best</title>
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
    <?php include 'templates/nav.php'; ?>
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
    <?php include 'templates/footer.php'; ?>
  </body>
</html>

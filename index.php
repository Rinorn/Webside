<?php
session_start();
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
    <nav class="navbar navbar-expand-md  navbar-light  fixed-top" id="mainNavbar" ><!--oppretter navbar-->
      <div class="container" id="navbarContainer">
        <a id="mainColYlw"class="navbar-brand" href="#contBoxJumbo">Home</a> <!--Home knapp som laster index.html-->
        <a class="navbar-brand" href="#"></a><!--Legger til logo på navbar-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <!--Legger til menytoggel knapp når siden er "liten"/dratt sammen-->
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto"> <!--oppretter navbar Elementer-->
            <li class="nav-item active">
              <a id="mainColYlw" class="nav-link" href="#contBox1">About</a>
            </li>
            <li class="nav-item active">
              <a id="mainColYlw" class="nav-link" href="#contBox2">Projects</a>
            </li>
            <li class="nav-item active">
              <a id="mainColYlw" class="nav-link" href="#contBox3">Portfolias</a>
            </li>
            <li class="nav-item active">
              <a id="mainColYlw" class="nav-link" href="#contBox4">Forum</a>
            </li>
            <?php if(isset($_SESSION['id'])){
              echo '<li class="nav-item active">
                <a id="mainColYlw" class="nav-link" href="#">Calendar</a>
              </li>';
            } ?>
          </ul>
          <div class="pull-right"><!--må ha en ny div for at bruker knappen skal legges helt til høyere på navbar-->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown nav-item-right">
                <a  id="mainColYlw" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php
                  if(isset($_SESSION['uname'])){
                    echo $_SESSION['uname'];
                  } else {
                    echo "User";
                  }
                  ?>
                </a>
                <?php
                  if(isset($_SESSION['id'])){
                    echo '<form action="logout.php" class="dropdown-menu" aria-labelledby="navbarDropdown">';
                    echo '<button type="submit" id="btnLogOut" class="btn btn-block btn-dark">Log out</button>';
                    echo '<a class="nav-link" href="./add_user.php">Add user</a>';
                    echo '</form>';
                  }
                  else{
                    echo '<form action="login.php" method="post" id="loginBgCol" class="dropdown-menu" aria-labelledby="navbarDropdown">';
                    echo '<input id="parentBackGColTest" name="uname" type="text" placeholder="Skriv inn brukernavn" />';
                    echo '<input name="pwd" type="password" placeholder="Skriv inn passord" />';
                    echo '<button type="submit" id="btnLogIn" class="btn btn-block btn-dark">Log in</button>';
                    echo '</form>';
                  }
                ?>
              </li>
            </ul>
          </div><!--slutten av "bruker" dropdown-->
          <form class="form-inline my-2 my-lg-0 d-block d-md-none"><!--søkefelt og søkeknapp må legges i en form tagg-->
            <input class="form-control mr-sm-2" type="search"data-toggle="collapse" placeholder="Search" aria-label="search" />
            <button id="btnSearch"class="btn btn-outline-success my-2 y-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <main>
      <div class="jumbotron text-center jumbotron-fluid d-none d-md-block" id="contBoxJumbo">
        <h1>Kollikvie Best</h1>
        <p>We specialize in corn</p>
          <div class="d-flex justify-content-center">
          <form class="form-inline my-2 my-lg-0"><!--søkefelt og søkeknapp må legges i en form tagg-->
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="search" />
            <button class="btn btn-outline-success my-2 y-sm-0 bg-dark" type="submit">Search</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="container-fluid col-md-10 centered">
          <div class="col-sm-12">
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
      </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><!--implementerer bootstraps JQuerys lib-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script><!--implementerer bootstraps Popper.js lib-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script><!--implementerer bootstraps javascript plugins-->
  </body>
</html>

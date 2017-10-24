<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"><!--Legger til Css stylesheet for bootstrap-->
    <link rel="stylesheet"href="webSide.css"

  </head>
  <body>
   <header>
      <nav class="navbar navbar-expand-md  navbar-light bg-secondary" id="mainNavbar" ><!--oppretter navbar-->
        <div class="container" id="navbarContainer">
        <a class="navbar-brand" href="index.html">Home</a> <!--Home knapp som laster index.html-->
        <a class="navbar-brand" href="#"></a><!--Legger til logo på navbar-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <!--Legger til menytoggel knapp når siden er "liten"/dratt sammen-->
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto"> <!--oppretter navbar Elementer-->
            <li class="nav-item active">
              <a class="nav-link" href="#">Calendari</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Portfolia</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Projects</a>
            </li>
              </ul>
              <div class="pull-right"><!--må ha en ny div for at bruker knappen skal legges helt til høyere på navbar-->
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown nav-item-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>
                      <div class="dropdown-menu bg-info" aria-labelledby="navbarDropdown">
                        <input id="parentBackGColTest" class="" type="text" placeholder="Skriv inn brukernavn" />
                        <input class="" type="password" placeholder="Skriv inn passord" />
                        <button id="btnLoggInn" class="btn btn-block btn-dark">Logg inn</button>
                      </div>
                    </li>
                  </ul>
                </div><!--slutten av "bruker" dropdown-->
                <form class="form-inline my-2 my-lg-0 d-block d-md-none"><!--søkefelt og søkeknapp må legges i en form tagg-->
                  <input class="form-control mr-sm-2" type="search"data-toggle="collapse" placeholder="Search" aria-label="search" />
                  <button class="btn btn-outline-success my-2 ,y-sm-0 bg-dark" type="submit">Search</button>
                </form>
              </div>
            </div>
          </Header><!--Slutt på Headermeny-->
          <div class="jumbotron text-center jumbotron-fluid bg-secondary d-none d-md-block">
            <h1>Kollikvie Best</h1>
            <p>We specialize in corn</p>
              <div class="d-flex justify-content-center">
              <form class="form-inline my-2 my-lg-0"><!--søkefelt og søkeknapp må legges i en form tagg-->
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="search" />
                <button class="btn btn-outline-success my-2 y-sm-0 bg-dark" type="submit">Search</button>
              </form>
            </div>
          </div>
          <h3 class="text-center" id="textFont">Koll<span class="text-danger">B</span></h3><!--bruker JQ til å forandre fargen på "B" for fun-->





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><!--implementerer bootstraps JQuerys lib-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script><!--implementerer bootstraps Popper.js lib-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script><!--implementerer bootstraps javascript plugins-->
  </body>
</html>

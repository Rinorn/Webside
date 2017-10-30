<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Kollokvie Best</title>
    <!-- Adds bootstrap and css. See header.php -->
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
    <!-- Adds the navigation bar to the website. See nav.php -->
    <?php include 'templates/nav.php'; ?>
    <!-- Uniq code starts -->
    <main>
      <div class="jumbotron text-center jumbotron-fluid d-none d-md-block" id="contBoxJumbo">
        <h1>Kollokvie Best</h1>
        <p>We specialize in corn</p>
          <div class="d-flex justify-content-center">
        </div>
      </div>
      <div class="row">
        <div class="container-fluid mainContainer col-md-12 centered">
          <div class="container-fluid mainContainer text-center" id="contBox1">
            <div class="contText">
              <h1>About </h1>
              <h3>Blablablablablablablabla</h3>
              <h5>To read more click<a href="about.php"> here</a></h5>
            </div>
          </div>
          <div class="container-fluid mainContainer text-center" id="contBox2">
            <div class="contText" id="indexProjTextbox">
              <h1>Projects</h1>
              <h3>blablablatatatata</h3>
              <h5>To read more click<a href="projects.php"> here</a></h5>
            </div>
            <div  id="carouselExampleControls" class="carousel slide text-center" data-ride="carousel">
              <div class="container">
                <div class="row">
                  <div class="col-lg-1 col-md-2 col-2 noPadd">
                    <a class="left carousel-control btnCaro" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="fa fa-angle-left pull-right" id="btnLeftCaro" aria-hidden="true"></span>
                    </a>
                  </div>
                  <div class="col-lg-10 col-md-8 col-10 noPadd">
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-4 bg-dark projectSlide">
                            </div>
                            <div class="col-lg-4 col-md-6 col-4 bg-primary projectSlide">
                            </div>
                            <div class="col-lg-4 col-md-6 col-4 bg-danger projectSlide">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 bg-warning projectSlide">
                            </div>
                            <div class="col-lg-4 col-md-6 bg-primary projectSlide">
                            </div>
                            <div class="col-lg-4 col-md-6 bg-success projectSlide">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 bg-danger projectSlide">
                            </div>
                            <div class="col-lg-4 col-md-6 bg-dark projectSlide">
                            </div>
                            <div class="col-lg-4 col-md-6 bg-success projectSlide">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1 col-md-2 col-2 noPadd">
                    <a class="right carousel-control btnCaro" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="fa fa-angle-right pull-left" id="btnRightCaro" aria-hidden="true"></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid mainContainer text-center" id="contBox3">
            <div class="contText">
              <h1>Portfolios</h1>
              <h3>blablablatatatata</h3>
              <h5>To read more click<a href="portfolios.php"> here</a></h5>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Uniq code ends -->
    <!-- Adds scripts/libs. See footer.php-->
    <?php include 'templates/footer.php'; ?>
  </body>
</html>

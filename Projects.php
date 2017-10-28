<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Projects</title>
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
  <?php include 'templates/nav.php'; ?>
  <main>
    <div class="row">
      <div class="container-fluid col-md-12 centered">
        <div class="container-fluid text-center mainContainer" id="projectCont1">
          <div class="contText">
            <h1>Projects </h1>
            <p>
              Lorem ipsum dolor sit amet, cras mollis mauris massa massa pretium, lectus varius gravida amet eu curae, non sem dolor. Purus in nullam, mattis penatibus placerat vitae donec, neque fusce id metus tellus. A sem magna justo nec pellentesque, ac convallis quo quis auctor aliquam est. Suspendisse exercitationem erat, viverra congue ornare dapibus dictum volutpat arcu. Erat faucibus mauris, amet duis elit placerat sed ligula consequat, platea at quam, suspendisse sociis. Ac aenean torquent felis erat, laoreet vitae non, consequat in. Ornare gravida, velit felis, ligula euismod nec proin eu, ante maecenas est lobortis et, feugiat dignissim ultrices malesuada viverra id. Eget quis sodales tellus inceptos commodo, habitasse condimentum excepturi, leo libero platea mus felis lobortis mauris, lobortis dui dignissim eros vitae. Molestie euismod rhoncus rhoncus, augue viverra, tempor vestibulum eu magna non, etiam sed vestibulum. Ut a fusce nullam, mauris at ut, magna pellentesque pulvinar nisl.
              Auctor penatibus amet. Eligendi elit risus unc enim. Wisi ac sodales, a luctus fringilla, maecenas mauris, donec commodo leo curabitur. Congue elit nec lacinia.
            </p>
          </div>
        </div>
      </div>
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
  </main>
  <?php include 'templates/footer.php'; ?>
  </body>
</html>

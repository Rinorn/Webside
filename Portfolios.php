<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Portfolios</title>
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
  <?php include 'templates/nav.php'; ?>
  <div class="row">
    <div class="container-fluid col-md-12 centered">
      <div class="container-fluid text-center mainContainer" id="portoCont1">
        <div class="contText">
          <h1>Portfolios</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id tempus sapien. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis hendrerit ornare aliquet. Morbi nec accumsan metus. Mauris tempus nec metus sed scelerisque. Integer sed cursus sapien, quis dapibus massa.
            <br />
            Donec quis sapien in tortor pulvinar venenatis eu ut metus. Aliquam dignissim ornare felis in convallis. Integer posuere ligula eget tellus lobortis imperdiet. Quisque augue nisi, consectetur nec metus id, tristique feugiat ligula.   Integer scelerisque sodales gravida. Donec congue ultricies magna ut tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec tempor eros velit, at eleifend augue rutrum at. Sed  iaculis feugiat gravida. Etiam vel click the person you want to read about.
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 portoPersBox" id="person1Link">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 personPhoto">
          </div>
        </div>
      </div>
    <div class="col-lg-3 col-md-6 col-sm-6 portoPersBox">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 personPhoto">
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 portoPersBox">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 personPhoto">
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 portoPersBox">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 personPhoto">
        </div>
      </div>
    </div>
  </div>
</div>

  <?php include 'templates/footer.php'; ?>
  </body>
</html>

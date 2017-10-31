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
    <?php include 'templates/header.php'; ?>
  </head>
  <body>
    <?php include 'templates/nav.php'; ?>
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
                  <li><?php if(!empty($_SESSION['email'])){
                    echo $_SESSION['email'];
                  } else {
                    echo 'user@email.com';
                  } ?></li>
                  <li><?php if(!empty($_SESSION['phone'])){
                    echo $_SESSION['phone'];
                  } else {
                    echo '12345678';
                  } ?></li>
                  <li><a href=<?php if(!empty($_SESSION['personalpage'])){
                  echo '"'.$_SESSION['personalpage'].'"';
                } else {
                  echo '"www.me.com"';
                } ?>><?php if(!empty($_SESSION['personalpage'])){
                  echo $_SESSION['personalpage'];
                } else {
                  echo 'www.me.com';
                } ?></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>

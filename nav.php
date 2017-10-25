<?php session_start(); ?>

<nav class="navbar navbar-expand-md  navbar-light  fixed-top" id="mainNavbar" ><!--oppretter navbar-->
  <div class="container" id="navbarContainer">
    <a class="navbar-brand mainColYlw" href="#contBoxJumbo">Home</a> <!--Home knapp som laster index.html-->
    <a class="navbar-brand" href="#"></a><!--Legger til logo på navbar-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <!--Legger til menytoggel knapp når siden er "liten"/dratt sammen-->
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto"> <!--oppretter navbar Elementer-->
        <li class="nav-item active">
          <a class="nav-link mainColYlw" href="#contBox1">About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link mainColYlw" href="#contBox2">Projects</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link mainColYlw" href="#contBox3">Portfolio</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link mainColYlw" href="#contBox4">Forum</a>
        </li>
        <?php if(isset($_SESSION['id'])){
          echo '<li class="nav-item active">
            <a class="nav-link mainColYlw" href="#">Calendar</a>
          </li>';
        } ?>
      </ul>
      <div><!--må ha en ny div for at bruker knappen skal legges helt til høyere på navbar-->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown nav-item-right">
            <a class="nav-link dropdown-toggle mainColYlw" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                echo '<a class="nav-link" href="./settings.php">Settings</a>';
                echo '<button type="submit" id="btnLogOut" class="btn btn-block btn-dark">Log out</button>';
                echo '<a class="nav-link" href="./add_user.php">Add user</a>';
                echo '</form>';
              }
              else{
                echo '<form action="login.php" method="post" id="loginDdMenu" class="dropdown-menu" aria-labelledby="navbarDropdown">';
                echo '<input id="inpUser" class="inpLogin" name="uname" type="text" placeholder="Skriv inn brukernavn" />';
                echo '<input id="inpPwd" class="inpLogin" name="pwd" type="password" placeholder="Skriv inn passord" />';
                echo '<button type="submit" id="btnLogIn" class="btn btn-block btn-dark">Log in <i class="fa fa-sign-in"></i></button>';
                echo '</form>';
              }
            ?>
          </li>
        </ul>
      </div><!--slutten av "bruker" dropdown-->
      <form class="form-inline my-2 my-lg-0 d-block d-md-none"><!--søkefelt og søkeknapp må legges i en form tagg-->
        <input class="form-control mr-sm-2" type="search"data-toggle="collapse" placeholder="Search" aria-label="search" />
        <button id="btnSearch" class="btn btnHover my-2 y-sm-0" type="submit"><i class="fa fa-search"></i> Search</button>
      </form>
    </div>
  </div>
</nav>

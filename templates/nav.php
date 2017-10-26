<nav class="navbar navbar-expand-md  navbar-light  fixed-top" id="mainNavbar" ><!--oppretter navbar-->
  <div class="container" id="navbarContainer">
    <a class="navbar-brand mainColYlw" href="index.php">Home</a> <!--Home knapp som laster index.html-->
    <a class="navbar-brand" href="#"></a><!--Legger til logo på navbar-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <!--Legger til menytoggel knapp når siden er "liten"/dratt sammen-->
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto"> <!--oppretter navbar Elementer-->
        <li class="nav-item active">
          <a class="nav-link mainColYlw" href="About.php">About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link mainColYlw" href="Projects.php">Projects</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link mainColYlw" href="Portfolios.php">Portfolio</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link mainColYlw" href="#contBox4">Forum</a>
        </li>
        <?php if(isset($_SESSION['id'])){
          echo '
          <li class="nav-item active">
            <a class="nav-link mainColYlw" href="profile.php">Profile</a>
          </li>
          <li class="nav-item active">
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
                echo '<form action="scripts/logout.php" class="dropdown-menu loginDdMenu" aria-labelledby="navbarDropdown">';
                echo '<a id="btnSettings" class="btn btn-dark btn-block" href="./settings.php">Settings <i class="fa fa-gear"></i></a>';
                echo '<a id="btnAddUser" class="btn btn-block btn-dark" href="./scripts/add_user.php">Add user <i class="fa fa-user"></i></a>';
                echo '<button type="submit" id="btnLogOut" class="btn btn-block btn-dark">Log out <i class="fa fa-sign-out"></i></button>';
                echo '</form>';
              }
              else{
                echo '<form action="scripts/login.php" method="post" class="dropdown-menu loginDdMenu" aria-labelledby="navbarDropdown">';
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

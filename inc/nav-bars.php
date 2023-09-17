    <!-- ==================Start of Team-Marquee-div================== -->
    <div class="header d-flex align-items-center bg-white">

      <marquee class="marquee">
          <?php 
          $query_logo = "SELECT logo FROM clubs";
          $query_logo_run = mysqli_query($conn, $query_logo);

          while ($logos = mysqli_fetch_assoc($query_logo_run)) {?>
            <a href="#" class="mx-4"> 
          <img style="height: 50px; width: 50px; border-radius: 50%;" 
          src="../assets/img/teams/<?=$logos['logo']; ?>" alt="">
          </a>
          <?php } ?>
      </marquee>

    </div>
    <!-- ==================End of Team-Marquee-div================== -->

    <!-- ==================Start of Navigation div================== -->
    <div class="header d-flex align-items-center bg-white">
      <div class="container d-flex align-items-center justify-content-between  p-1">

        <img style="height: 50px; width: 50px;" class="img-logo" src="../assets/img/logo.png" alt="">

        <!-- <h1 class="logo"><a href="index.html">Dewi</a></h1> -->
        <a href="index.html" class="logo d-flex">

          <span class="d-lg-block text-success">KHOSA LEAGUE</span>
        </a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="../pages/index.php">Home</a></li>
            <li><a class="nav-link scrollto" href="#">Fixtures</a></li>
            <li><a class="nav-link scrollto" href="../pages/table.php">Table</a></li>
            <li><a class="nav-link scrollto " href="../pages/teams.php">Clubs</a></li>
            <li><a class="nav-link scrollto" href="../pages/players.php">Players</a></li>
            <li><a class="nav-link scrollto" href="#">News</a></li>
            <li><a class="nav-link scrollto" href="#">Gallery</a></li>
            <li><a class="nav-link scrollto" href="../pages/about.php">About Us</a></li>

            <a class="getstarted scrollto" href="#">Login</a>
            <a class="getstarted scrollto" href="#">Register</a>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </div>
    <!-- ==================End of Navigation div================== -->
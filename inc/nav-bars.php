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

        <div class="d-flex">
          <img style="height: 50px; width: 50px;" class="img-logo" src="../assets/img/logo.png" alt="">
          <h1><span class="logo-tex text-primary fs-3 fw-bolde"><b>KHOSA LEAGUE</b></span></h1>
        </div>

 
        
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link" href="../pages/index.php">Home</a></li>
            <li><a class="nav-link" href="../pages/fixresults.php">Fixtures & results</a></li>
            <li><a class="nav-link" href="../pages/table.php">Table</a></li>
            <li><a class="nav-link" href="../pages/teams.php">Clubs</a></li>
            <li><a class="nav-link" href="../pages/players.php">Players</a></li>
            <li><a class="nav-link" href="../pages/news.php">News</a></li>
            <li><a class="nav-link" href="#">Gallery</a></li>
            <li><a class="nav-link" href="../pages/about.php">About Us</a></li>

            <!-- <a class="btn getstarted" href="#">Login</a>
            <a class="btn getstarted" href="#">Register</a> -->
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </div>
    <!-- ==================End of Navigation div================== -->

    
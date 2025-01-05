    
    
    <!-- ==================Start of Team-Marquee-div================== -->
    <div class="header d-flex align-items-center bg-white">

      <marquee class="marquee">
          <?php 
          $query_logo = "SELECT logo FROM teams";
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
    <div class="header d-flex align-items-center bg-white" style="border: 2px solid red">
      <div class="d-flex align-items-center justify-content-between  p-1">

        <div class="d-flex my-auto align-items-center justify-content-center">
          <img style="height: 50px; width: 50px;" class="img-logo" src="../assets/img/logo.png" alt="">
          <h1><span class="logo-tex text-black fs-4 ms-2 me-4"><b>KHOSA LEAGUE</b></span></h1>
        </div>
        
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link" href="../pages/index">Home</a></li>
            <li><a class="nav-link" href="../pages/fixresults">Fixtures & results</a></li>
            <li><a class="nav-link" href="../pages/table">Table</a></li>
            <li><a class="nav-link" href="../pages/teams">Clubs</a></li>
            <li class="dropdown"><a href="#"><span>Players</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a class="nav-link" href="../pages/players">Players</a></li>
                <li><a class="nav-link" href="../pages/topscorers">Top Scorers</a></li>
              </ul>
            </li> 

            <li><a class="nav-link" href="../pages/news">News</a></li>
            <li><a class="nav-link" href="../pages/gallery">Gallery</a></li>
            
            <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a class="nav-link" href="../pages/about">About</a></li> 
                <li><a class="nav-link" href="../pages/executive">Executive</a></li> 
              </ul>
            </li> 
            <li><a class="nav-link" href="../pages/products"><b><i data-bs-toggle="tooltip" data-bs-placement="top" title="Products" class="bi bi-box fw-bolder fs-3" style="color: orangered"></i></b></a></li>        
          </ul>
          <i class="bi bi-list mobile-nav-toggle text-secondary"></i>
        </nav>

      </div>
    </div>
    <!-- ==================End of Navigation div================== -->

    
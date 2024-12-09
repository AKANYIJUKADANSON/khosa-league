<?php

include('../admin/config.php');

// Geting clubs data
$query_clubs = "SELECT * FROM teams";
$query_clubs_run = mysqli_query($conn, $query_clubs);

// ~~~~~~Executive
$query_executive = "SELECT * FROM executives WHERE `role` = 'President' ";
$query_executive_run = mysqli_query($conn, $query_executive);
$president = mysqli_fetch_array($query_executive_run);

// ~~~~~~President
$query_bod = "SELECT * FROM executives WHERE `role` != 'President' ";
$query_bod_run = mysqli_query($conn, $query_bod);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <?php include('../inc/header-links.php'); ?>

</head>

<body>

  <div class="hero-mini mb-4">
    <?php include('../inc/nav-bars.php'); ?>

  </div>
  <!-- ==================End of hero div================== -->

  <div id="la-container-about" class="d-flex align-items-center justify-content-center">
    <h1 class="d-flex justify-content-center text-white text-center px-4 fs-1">About</h1>
  </div>

  <!-- ==================End of hero div================== -->
  <div class="row mt-4 mx-1">
    <!-- Left side columns -->
    <div class="col-lg-6 mb-4">
      <div class="row">
        <img src="../assets/img/logo.png" alt="" srcset="">
      </div>
    </div>

    <!-- Right side columns -->
    <div class="col-lg-6">

      <!-- Results Card -->
      <div class="results">
        <!-- <div class="bg-success"> -->
        <h1 class="about-right-heading my-4 ps-4 text-center">KHOSA LEAGUE</h1>

        <div class="mx-4 about-details">
          <p>
            KHOSA (<span class="text-primary">Kigezi High School Old Students Association</span>) is soccer league in
            Uganda, Africa that units teams from Kigezi High School for all the years the school has been in existance,
            100+ years now and every team is formed according to the year of entry.
          </p>
          <p>
            The league acts as a point of networking, sharing knowledge and memories plus having fun as O.Bs and O.Gs
            through sport.
          </p>
        </div>
      </div>

    </div>

  </div>
  <!-- ==================End of hero div================== -->

  <!-- ==================End of hero div================== -->
  <div class="row mt-4 mx-auto la-container-about-teams" style="">
    <!-- <section id="portfolio" class="portfolio"> -->

    <div class="section-title text-center">
      <div class="card-title text-center mt-4 text-white">
        <h1><b>Clubs</b></h1>
      </div>
      <hr class="w-500 mb-4">
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row">

        <?php while ($team = mysqli_fetch_assoc($query_clubs_run)) { ?>

        <div class="col-lg-3">
          <a href="single-team.php?team=<?= $team['name']; ?>">
            <div class="card d-flex" style="background-color: #e9e9e9;">
              <div class="card-header d-flex justify-content-center">
                <img class="m-4 rounded-circle" width="200" height="200" src="../assets/img/teams/<?= $team['logo']; ?>"
                  alt="">
              </div>

              <div class="card-body">
                <div class="text-dark my-4">
                  <h2 class="fs-5 fw-bold">
                    <?= $team['name']; ?> FC
                  </h2>
                  <h5 class="my-4">EST <span><b>
                        <?= $team['est']; ?>
                      </b></span></h5>
                </div>
              </div>
            </div>
          </a>
        </div>
        <?php } ?>

      </div>

    </div>
    <!-- </section> -->

  </div>
  <!-- ==================End of hero div================== -->

  <!-- ======= executive-team ======= -->
  <div>
    <div class="card-title text-center d-block pt-4">
      <h6 class="text-center"><i class="bi bi-people fs-1"></i></h6>
      <h3 class="heading-text-teams text-center fw-bolder">Executive Team</h3>
    </div>


    <section id="executive-team" class="executive-team" style="background-color: lightgrey; border: 2px solid re">
      <div class="album py-5 bg-light">
        <div class="container la-container-exe-team">

          <div class="row mx-2">
              <div class="card pt-4 mx-auto w-auto executive-team-item" style="border: 2px solid orang; ">
                <center>
                  <img src="../assets/img/executive-team/<?=$president['image']?>" alt="Profile" class="rounded-circle" width="150" height="150">
                </center>
                <div class="card-body text-center">
                  <h3 class="my-2"><?=$president['last_name']?> <?=$president['first_name']?></h3>
                  <h4 class="text-secondary my-2"><?=$president['role']?>
                    <?php if($president['role'] == 'Club Rep.'){?>
                      <span class="text-success mx-1 my-1">(<?=$president['team']?>)</span>
                    <?php } ?>
                  </h4>

                  <div class="social-links mt-2">
                    <?php if(!empty($president['link_twitter'])){?>
                      <a href="<?=$president['link_twitter']; ?>" class="twitter"><i class="bi bi-twitter"></i></a>
                    <?php } ?>

                    <?php if(!empty($president['link_facebook'])){?>
                      <a href="<?=$president['link_twitter']; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                    <?php } ?>

                    <?php if(!empty($president['link_instagram'])){?>
                      <a href="<?=$president['link_instagram']; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
                    <?php } ?>

                    <?php if(!empty($president['link_whatsapp'])){?>
                      <a href="<?=$president['link_whatsapp']; ?>" class="whatsapp"><i class="bi bi-whatsapp text-success"></i></a>
                    <?php } ?>

                    <?php if(!empty($president['link_linkedin'])){?>
                      <a href="<?=$president['link_linkedin']; ?>" class="whatsapp"><i class="bi bi-linkedin text-primary"></i></a>
                    <?php } ?>

                  </div>

                </div>
              </div>
          </div>

          <div class="row">

            <?php while($bod_members = mysqli_fetch_assoc($query_bod_run)){?>
              <div class="col-md-3 executive-team-item" style="border: 2px solid red">
                <div class="card mb-4 pt-4 w-auto h-auto" style="border: 2px solid green">
                  <center>
                    <img src="../assets/img/executive-team/<?=$bod_members['image']?>" alt="Profile" class="rounded-circle mx-auto" width="140" height="140">
                  </center>
                  <div class="card-body text-center">
                    <h3 class="my-2"><?=$bod_members['last_name']?> <?=$bod_members['first_name']?></h3>
                    <h4 class="text-secondary my-2"><?=$bod_members['role']?>
                      <?php if($bod_members['role'] == 'Club Rep.'){?>
                        <span class="text-success mx-1 my-1">(<?=$bod_members['team']?>)</span>
                      <?php } ?>
                    </h4>

                    <div class="social-links mt-2">
                      <?php if(!empty($bod_members['link_twitter'])){?>
                        <a href="<?=$bod_members['link_twitter']; ?>" class="twitter"><i class="bi bi-twitter"></i></a>
                      <?php } ?>

                      <?php if(!empty($bod_members['link_facebook'])){?>
                        <a href="<?=$bod_members['link_twitter']; ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                      <?php } ?>

                      <?php if(!empty($bod_members['link_instagram'])){?>
                        <a href="<?=$bod_members['link_instagram']; ?>" class="instagram"><i class="bi bi-instagram"></i></a>
                      <?php } ?>

                      <?php if(!empty($bod_members['link_whatsapp'])){?>
                        <a href="<?=$bod_members['link_whatsapp']; ?>" class="whatsapp"><i class="bi bi-whatsapp text-success"></i></a>
                      <?php } ?>
                    </div>

                  </div>
                </div>
              </div>

            <?php } ?>

          </div>
        </div>
    </section>

  </div>
  <!-- ==================Start of foorter div================== -->
  <hr>
  <?php include('../inc/footer.php'); ?>
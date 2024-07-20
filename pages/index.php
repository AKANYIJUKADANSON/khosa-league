<?php

  include('../admin/config.php');

  // fetch posts/news
  $query_news = "SELECT * FROM news ORDER BY created_on DESC LIMIT 3";
  $query_news_run = mysqli_query($conn, $query_news);

  // fetch results
  $query_results = "SELECT * FROM results LIMIT 2";
  $query_results_run = mysqli_query($conn, $query_results);

  // fetch fixtures
  $query_fixtures = "SELECT * FROM fixtures LIMIT 2";
  $query_fixtures_run = mysqli_query($conn, $query_fixtures);

  // Fetching the table
  $query_KLtable = "SELECT * FROM KLtable LIMIT 6";
  $query_KLtable_run = mysqli_query($conn, $query_KLtable);


  $query_clubs = "SELECT * FROM clubs";
  $query_clubs_run = mysqli_query($conn, $query_clubs);

  // Fetching sponsors
  $query_sponsors = "SELECT * FROM sponsors";
  $query_sponsors_run = mysqli_query($conn, $query_sponsors);

  // Fetching players
  $query_players = "SELECT * FROM players LIMIT 3";
  $query_players_run = mysqli_query($conn, $query_players);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <title>Home - KHOSA LEAGUE</title>

  <?php include('../inc/header-links.php'); ?>


</head>

<body>

  <div class="bg-white">

    <!-- ==================Start of Navigation div================== -->
    <?php include('../inc/nav-bars.php'); ?>
    <!-- ==================End of Navigation div================== -->

    <!-- ==================Start of hero div================== -->
    <div class="row mt-4 mx-1" style="border: 2px solid re;">
      <!-- Left side columns -->
      <div class="col-lg-8 mb-4">
        <div class="row">
          <!-- Corousal -->
          <div class="col-12">
            <!-- Slides with captions -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>

              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../assets/img/hero0.jpg" class="d-block w-100" alt="...">
                  <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>KHOSA LEAGUE is all that matters</h5>
                    <p>Best High School Soccer league in the land</p>
                  </div> -->
                </div>
                <div class="carousel-item">
                  <img src="../assets/img/hero2.jpg" class="d-block w-100" alt="...">
                  <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div> -->
                </div>
                <div class="carousel-item">
                  <img src="../assets/img/hero1.jpg" class="d-block w-100" alt="...">
                  <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div> -->
                </div>
              </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>

              <!-- </div>
            </div> -->
            </div>
          </div>
        </div>
      </div>

      <!-- Right side columns -->
      <div class="col-lg-4">
        <!--===================================== Results Card =============================-->
        <div class="card result-fixture">
          <!-- <div class="bg-success"> -->
          <h5 class="card-title card-title-results text-white ps-4">RESULTS</h5>

          <!-- <div class="card results m-2"> -->

          <?php while ($results = mysqli_fetch_assoc($query_results_run)) { ?>
            <div class="card-body result">
              <div class="float-start pt-2">
                <span class="text-center px-1"><?= $results['team1']; ?> FC</span>
                <span style="align-items: center;"><img class="rounded-circle" style="height: 30px; width: 30px;" src="../assets/img/teams/<?= $results['team1']; ?>.png" alt=""></span>
              </div>

              <div style="border-radius: 5px;" class="float-start  btn-success mt-3 mx-2 px-2">
                <span class=""><?= $results['result_team_1']; ?></span>
                <span>-</span>
                <span class=""><?= $results['result_team_2']; ?></span>
              </div>

              <div class="float-start pt-2">
                <span style="text-align: center;" class="px-1"><?= $results['team2']; ?> FC</span>
                <span style="align-items: center;"><img style="height: 30px; width: 30px; border-radius: 50%;" src="../assets/img/teams/<?= $results['team2']; ?>.png" alt=""></span>
              </div>

            </div>
          <?php } ?>

          <div class="d-flex justify-content-center my-2">
            <a href="fixresults.php" class="btn btn-primary">View All<i class="mx-2 bi bi-arrow-right"></i></a>
          </div>
        </div>

        <!--========================== Fixtures ==================================-->
        <div class="card  result-fixture">
          <!-- <div class="bg-success"> -->
          <h4 class="card-title card-title-fixtures text-white ps-4"><b>FIXTURES</b></h4>

          <?php while ($fixtures = mysqli_fetch_assoc($query_fixtures_run)) { ?>
            <div class="card-body fixture d-flex">




              <div class="float-start pt-2">
                <span style="text-align: center;" class="px-1"><?= $fixtures['team1']; ?> FC</span>
                <span style="align-items: center;"><img style="height: 35px; width: 35px; border-radius: 50%;" src="../assets/img/teams/<?= $fixtures['team1']; ?>.png" alt=""></span>
              </div>

              <div style="border-radius: 5px; height: 25px" class="float-start  btn-danger mt-3 mx-2 px-2 ">
                <span class="pb-2">VS</span>
              </div>

              <div class="float-start pt-2">
                <span style="text-align: center;" class="px-1"><?= $fixtures['team2']; ?> FC</span>
                <span style="align-items: center;"><img style="height: 35px; width: 35px; border-radius: 50%;" src="../assets/img/teams/<?= $fixtures['team2']; ?>.png" alt=""></span>
              </div>


            </div>
          <?php } ?>
          <div class="d-flex justify-content-center my-2">
            <a href="fixresults.php" class="btn btn-primary">View All<i class="mx-2 bi bi-arrow-right"></i></a>
          </div>
        </div>

      </div>

    </div>
    <!-- ==================End of hero div================== -->

  </div>


 
  <div class="table-posts">
    <!-- ==================Start of table & Posts div================== -->
    <div class="row px-1 pt-4">
      <!-- Left side columns -->
      <div class="col-lg-7">
        <div class="row">

          <div class="col-12">
            <!-- table as standing -->
            <div class="card">
              <div class="card-body">
                <h3 class="card-title fs-4 text-decoration-none "><b>Table</b></h3>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Position</th>
                      <th scope="col">Club</th>
                      <th scope="col">W</th>
                      <th scope="col">D</th>
                      <th scope="col">L</th>
                      <th scope="col">GD</th>
                      <th scope="col">Pts</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($query_KLtable_run)) {
                    ?>

                      <tr>
                        <td scope="row"> <?= $row['position']; ?> <span>
                            <img class="league-table-img mx-1" src="../assets/img/teams/<?= $row['club'] ?>.png" alt=""> </span>
                        </td>
                        <td><?= $row['club']; ?></td>
                        <td><?= $row['W']; ?></td>
                        <td><?= $row['D']; ?></td>
                        <td><?= $row['L']; ?></td>
                        <td><?= $row['GD']; ?></td>
                        <td><?= $row['Pts']; ?></td>
                      </tr>

                    <?php
                    }
                    ?>


                  </tbody>
                </table>

                <div class="d-flex justify-content-center">
                  <a href="table.php" class="btn btn-primary">FULL TABLE<i class="mx-2 bi bi-arrow-right"></i></a>
                </div>
                <!-- End Table with hoverable rows -->

              </div>
            </div>
          </div>

          <div class="col-12" style="">
            <div class="card">
                <div class="card-body">
                  <h3 class="card-title fs-4 text-decoration-none "><b>Featured Players</b></h3>
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                  <?php while ($players = mysqli_fetch_assoc($query_players_run)){ ?>
                    <div class="col">
                      <div class="card shadow-sm">
                        <img class="featured-player-img card-img-top" width="100%" height="225" src="../assets/img/players/<?=$players['image'];?>" alt="">
                        <div class="card-body">
                          <div class="my-2">
                            <label class="fs-6"><b>Name:</b> <?=$players['name']?> </label><br>
                            <label class="fs-6"><b>Team:</b> <?=$players['team']?></label><br>
                            <label class="fs-6"><b>Appearences:</b> <?=$players['appearances']?></label><br>
                            <label class="fs-6"><b>Goals:</b> <?=$players['goals']?></label><br>
                          </div>
                          
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <!-- <a href="players.php" type="button" class="btn btn-md btn-outline-secondary">View</a> -->
                            </div>
                            <!-- <small class="text-body-secondary">9 mins</small> -->
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php } ?>

                  </div>
                  

                  <div class="d-flex justify-content-center">
                  <a href="players.php" class="btn btn-primary">All Players<i class="mx-2 bi bi-arrow-right"></i></a>
                </div>

                </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Right side columns -->
      <div class="col-lg-5 home-news">
        <!-- News & Updates Traffic -->
        <div class="card bg-white mb-4">
          <div class="card-body pb-0 my-">
            <h3 class="card-title fs-4 text-decoration-none "><b>News &amp; Updates</b></h3>
            <?php while ($rows = mysqli_fetch_assoc($query_news_run)) { ?>
              <div class="card py-2">
                <div class="card-body">
                  <div class="d-flex">
                    <img style="height: 150px; width: 150" class="me-2 rounded-circle" src='../assets/img/newsAndUpdates/<?= $rows['file_name']; ?>' alt="">
                    <div class="d-block text-black">
                      <h3><b><a href="single-news.php?news_id=<?= $rows['id'] ?>" class="news-title"><?= $rows['title']; ?></a></b></h3>

                      <p><?= $rows['body']; ?></p>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="justifly-content-start">
                      <small>Last updated </small>
                      <small class="text-muted"><?= $rows['created_on']; ?></small>
                      <a href="single-news.php?news_id=<?= $rows['id'] ?>" class="float-end btn">Read</a>
                    </div>
                  </div>
                </div>
              </div>

            <?php } ?>

          </div>

          <div class="d-flex justify-content-center my-4">
            <a href="news.php" class="btn">MORE POSTS<i class="bi bi-arrow-right mx-2"></i></a>
          </div>

        </div>
        <!-- End News & Updates -->
      </div>

    </div>
    <!-- ==================End of hero div================== -->
  </div>


  <!-- ====================LATES VIDEOS SWIPER======================== -->
  <!-- <div class="row col-md-12 mt-4 mx-1">
    <h3 class="card-title fs-4 text-decoration-none "><b>Latest Videos</b></h3>
    <div class="slide-container swiper">
      <div class="slide-content">
        <div class="swiper-wrapper">

          <?php // while ($row = mysqli_fetch_assoc($query_clubs_run)) { ?>

            <div class="card swiper-slide">
              <div class="card-wrapper">
                <video width="100%" controls>
                  <source src="../assets/videos/gwajwa4.mp4" type="video/mp4">
                  <source src="../assets/videos/gwajwa4.0gg" type="video/ogg">
                </video>
                <p><u><?= $row['name']; ?></u></p>
                <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic
                </p>
                <button class="btn btn-swiper">View</button>
              </div>
            </div>
          <?php //} ?>
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn text-primary"></div>
      <div class="swiper-button-prev swiper-navBtntext-primary"></div>
      <div class="swiper-pagination text-primary"></div>
    </div>
  </div> -->


  <!-- ====================Sponsors======================== -->
  <div class="row mt-4">
    <div class="card-title text-center">
      <h1><b>Sponsors</b></h1>
      <hr class="hr mb-4" style="height: 4px; background-color: deepskyblue; margin: 0px 50px ">
    </div>
    
    <div class="slide-container swiper bg-transparent" >
      <div class="slide-content bg-transparent" style="padding-right: 50px; background-color: green">
        <div class="swiper-wrapper mx-4 bg-transparent" style="border: 2px solid deepskyblue">
          <?php while ($sponsor = mysqli_fetch_assoc($query_sponsors_run)) { ?>
            <div class="card swiper-slide bg-transparent">
                  <div class="col">
                    <div class="card-body my-auto pt-4 bg-transparent">
                      <center><img class="rounded-circle" width="100" height="100" src="../assets/img/sponsors/<?= $sponsor['logo']; ?>" alt=""></center>
                        <p class="fs-6 text-center"><?=$sponsor['sponsor'];?> <br> <span class="fs-4"> <?= $sponsor['team'];?> FC </span></p>
                    </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <!-- ============== Footer -->
  <?php include('../inc/footer.php'); ?>
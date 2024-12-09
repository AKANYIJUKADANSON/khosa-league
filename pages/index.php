<?php
  include('../admin/config.php');

  function updateStandings($pdo) {
    // Reset standings
    $pdo->exec("UPDATE kltable SET played = 0, won = 0, drawn = 0, lost = 0, goals_for = 0, goals_against = 0, goal_difference = 0, LP = 0, points = 0");

    // Fetch all match results
    $stmt = $pdo->query("SELECT * FROM match_results");
    $matches = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($matches as $match) {
      $home_team_id = $match['home_team_id'];
      $away_team_id = $match['away_team_id'];
      $home_goals = $match['home_team_goals'];
      $away_goals = $match['away_team_goals'];
      $home_team_lady_played = $match['home_team_lady_played'];
      $away_team_lady_played = $match['away_team_lady_played'];

      // Update standings for home team
      updateTeamStandings($pdo, $home_team_id, $home_goals, $away_goals, $home_team_lady_played);

      // Update standings for away team
      updateTeamStandings($pdo, $away_team_id, $away_goals, $home_goals, $away_team_lady_played);
    }
  }

  function updateTeamStandings($pdo, $team_id, $goals_for, $goals_against, $lady_played) {
      $stmt = $pdo->prepare("SELECT * FROM kltable WHERE team_id = :team_id");
      $stmt->execute(['team_id' => $team_id]);
      $standing = $stmt->fetch(PDO::FETCH_ASSOC);

      if (!$standing) {
          // If the team does not have a standing yet, create one
          $pdo->prepare("INSERT INTO kltable (team_id) VALUES (:team_id)")
              ->execute(['team_id' => $team_id]);
      }

      $result = ($goals_for > $goals_against) ? 'won' : (($goals_for == $goals_against) ? 'drawn' : 'lost');
      $points = ($result == 'won') ? 3 : (($result == 'drawn') ? 1 : 0);

      // Add 1 point if a lady played
      $lady_bonus = $lady_played ? 1 : 0;

      $pdo->prepare("UPDATE kltable 
                  SET played = played + 1, 
                      won = won + IF(:result = 'won', 1, 0), 
                      drawn = drawn + IF(:result = 'drawn', 1, 0), 
                      lost = lost + IF(:result = 'lost', 1, 0), 
                      goals_for = goals_for + :goals_for, 
                      goals_against = goals_against + :goals_against, 
                      goal_difference = goal_difference + (:goals_for - :goals_against),
                      LP = LP + :lady_bonus, 
                      points = points + :points + :lady_bonus 
                  WHERE team_id = :team_id")
          ->execute([
              'team_id' => $team_id,
              'result' => $result,
              'goals_for' => $goals_for,
              'goals_against' => $goals_against,
              'points' => $points,
              'lady_bonus' => $lady_bonus
          ]);
  }

  // Update the standings based on the match results
  updateStandings($pdo);


  // fetch posts/news
  $query_news = "SELECT * FROM news ORDER BY created_on DESC LIMIT 3";
  $query_news_run = mysqli_query($conn, $query_news);

  // fetch results
      $query_results = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type  
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        ORDER BY match_date DESC LIMIT 2";
    $query_results_run = $conn->query($query_results);


  // $query_results = "SELECT * FROM results ORDER BY result_date DESC LIMIT 2";
  // $query_results_run = mysqli_query($conn, $query_results);

  // fetch fixtures
  $query_fixtures = "SELECT * FROM fixtures WHERE `time` > 0 ORDER BY `date` DESC LIMIT 2";
  $query_fixtures_run = mysqli_query($conn, $query_fixtures);


  $query_clubs = "SELECT * FROM teams";
  $query_clubs_run = mysqli_query($conn, $query_clubs);

  // Fetching sponsors
  $query_sponsors = "SELECT * FROM sponsors WHERE status= 'Active'";
  $query_sponsors_run = mysqli_query($conn, $query_sponsors);

  // Fetching players
  $query_players = "SELECT * FROM players ORDER BY goals DESC LIMIT 3";
  $query_players_run = mysqli_query($conn, $query_players);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <title>Home</title>

  <?php include('../inc/header-links.php'); ?>


</head>

<body>

  <div class="bg-white">

    <!-- ==================Start of Navigation div================== -->
    <?php include('../inc/nav-bars.php'); ?>
    <!-- ==================End of Navigation div================== -->

    <!-- ==================Start of hero div================== -->
    <div class="row mt-4 mx-1 hero">
      <!-- Left side columns -->
      <div class="col-lg-8 mb-4" >
        <div class="row">
          <!-- Corousal -->
          <div class="col-12">
            <!-- Slides with captions -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../assets/img/hero0.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../assets/img/hero2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../assets/img/hero1.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../assets/img/hero5.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../assets/img/hero8.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../assets/img/hero6.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../assets/img/hero4.png" class="d-block w-100" alt="...">
                </div>

                <div class="carousel-item">
                  <img src="../assets/img/hero6.png" class="d-block w-100" alt="...">
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
      <div class="col-lg-4" id="home-page-fixres" >
        <!--==================== Results Card =============================-->
        <div class="card result-fixture">
            <h5 class="card-title card-title-results text-white ps-4"><b>RESULTS</b></h5>
            <div class="" style="border: 2px solid re">
              <?php while ($results = mysqli_fetch_assoc($query_results_run)) { ?>
                <div class="card mx-0 shadow py-2" style="border: 2px solid re">
                  <div class="d-flex justify-content-center my-auto p-2">
                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$results['home_team'];?></i></h4>

                    <img class="fix-team-img my-auto ms-1" src="../assets/img/teams/<?=lcfirst($results['home_team']);?>.png" alt="">

                    <button type="button" class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                        <span><?=$results['home_team_goals'];?></span>
                        <strong class="mx-1">-</strong>
                        <span><?=$results['away_team_goals'];?></span>
                    </button>

                    <img class="fix-team-img my-auto me-1" src="../assets/img/teams/<?=lcfirst($results['away_team']);?>.png" alt="">

                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$results['away_team'];?></i></h4>
                  </div>
                </div>
              <?php } ?>

              <div class="d-flex justify-content-center my-2">
                <a href="fixresults.php" class="btn btn-primary">View All<i class="mx-2 bi bi-arrow-right"></i></a>
              </div>
            </div>
        </div>

        <!--===================== Fixtures ==============================-->
        <div class="card  result-fixture">
          <!-- <div class="bg-success"> -->
          <h4 class="card-title card-title-fixtures text-white ps-4"><b>FIXTURES</b></h4>

          <?php while ($fixtures = mysqli_fetch_assoc($query_fixtures_run)) { ?>
            <div class="card mx-0 shadow" style="border: 2px solid re">
              <div class="d-flex justify-content-center my-auto p-2">
                  
                  <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$fixtures['team1'];?></i></h4>

                  <img class="fix-team-img my-auto" src="../assets/img/teams/<?=$fixtures['team1'];?>.png" alt="">

                  <button type="button" class="btn btn-sm btn-secondary text-black bg-transparent  my-auto fixt-btn mx-1"><?= date('h:i a', strtotime($fixtures['time']));?></button>

                  <img class="fix-team-img my-auto me-2" src="../assets/img/teams/<?=$fixtures['team2'];?>.png" alt="">

                  <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$fixtures['team2'];?></i></h4>
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


 
  <div id="kltable mx-1">
    <!-- ==================Start of table & Posts div================== -->
    <div class="row pt-4">
      <!-- Left side columns -->
      <div class="col-lg-7">
        <!-- <div class="row"> -->

          <div class="col-12">
            <!-- table as standing -->
            <div class="card">
              <div class="card-body">
                <h3 class="card-title fs-4 text-decoration-none text-black"><b>Table</b></h3>

                <div class="view">
                  <div class="tbl-wrapper">

                    <!-- Table with hoverable rows -->
                    <table id="kltable" class="table table-border table-hover text-start">
                      <thead>
                        <tr class="text-start text-black bg-transparent">
                          <th class="fw-bolder">Club</th>
                          <th class="fw-bolder">P</th>
                          <th class="fw-bolder">W</th>
                          <th class="fw-bolder">D</th>
                          <th class="fw-bolder">L</th>
                          <th class="fw-bolder">+/-</th>
                          <th class="fw-bolder">GD</th>
                          <th class="fw-bolder">LP</th>
                          <th class="fw-bolder">Pts</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                          $stmt = $pdo->query("SELECT t.name, k.played, k.won, k.drawn, k.lost, k.goals_for, k.goals_against, k.goal_difference, k.LP, k.points 
                            FROM kltable k 
                            JOIN teams t ON k.team_id = t.id 
                            ORDER BY k.points DESC, k.goal_difference DESC, k.goals_for DESC, t.name ASC LIMIT 4");
                          $standings = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                          $position = 0; 
                          // while ($row = mysqli_fetch_assoc($query_KLtable_run)) {
                          foreach ($standings as $row) {
                          $position++; 

                          $club = $row['name'];
                          $clubest = mysqli_fetch_assoc(mysqli_query($conn, "SELECT est FROM teams WHERE `name` = '$club' "));
                          ?>

                          <tr class="text-start">
                            <td>
                              <span><?= $position; ?></span>
                              <span><img  class="tbl-team-img" src="../assets/img/teams/<?= lcfirst($row['name']);?>.png" alt=""></span> <span class="fw-bolder tbl-club-name fs-"><?= $row['name']; ?> - <?= $clubest['est']; ?></span> 
                            </td>
                            
                            <td><?= $row['played']; ?></td>
                            <td><?= $row['won']; ?></td>
                            <td><?= $row['drawn']; ?></td>
                            <td><?= $row['lost']; ?></td>
                            <td><?= $row['goals_for']; ?>:<?= $row['goals_against']; ?></td>
                            <td><?= $row['goal_difference']; ?></td>
                            <td><?= $row['LP']; ?></td>
                            <td><?= $row['points']; ?></td>
                          </tr>

                        <?php } 
                        
                          // Connect to the database
                          $pdo = new PDO('mysql:host=localhost;dbname=khosa', 'root', '');
                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="d-flex justify-content-center">
                  <a href="table.php" class="btn btn-primary">FULL TABLE<i class="mx-2 bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 featured-players">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title fs-4 text-decoration-none text-black"><b>Featured Players</b></h3>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                  <?php while ($players = mysqli_fetch_assoc($query_players_run)){ ?>
                    <div class="col">
                      <div class="card shadow-sm">
                        <img class="featured-player-img card-img-top"   src="../assets/img/players/<?=$players['image'];?>" alt="">
                        <div class="card-body">
                          <div class="my-2">
                            <label class="fs-6"><b>Name:</b> <?=$players['name']?> </label><br>
                            <label class="fs-6"><b>Team:</b> <?=$players['team']?></label><br>
                            <label class="fs-6"><b>Goals:</b> <?=$players['goals']?></label><br>
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

      <!-- Right side columns -->
      <div class="col-lg-5 home-news">
        <div class="card bg-white mb-4">
          <div class="card-body pb-0 my-">
            <h3 class="card-title fs-4 text-decoration-none text-black"><b>News &amp; Updates</b></h3>
            <?php while ($rows = mysqli_fetch_assoc($query_news_run)) { ?>
              <div class="card py-2">
                <div class="card-body">
                  <div class="d-flex">
                    <img style="height: 150px; width: 150" class="me-2 rounded-circle" src='../assets/img/newsAndUpdates/<?= $rows['file_name']; ?>' alt="">
                    <div class="d-block text-black">
                      <h6><b><a href="single-news.php?news_id=<?= $rows['id'] ?>" class="news-title text-decoration-none"><?= $rows['title']; ?></a></b></h6>

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
      </div>

    </div>
  </div>

  <!-- ============== Footer -->
  <?php include('../inc/footer.php'); ?>
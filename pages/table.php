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

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table Standing</title>

  <?php include('../inc/header-links.php'); ?>

</head>

<body>
  <div class="hero-mini mb-4" >
    <?php include('../inc/nav-bars.php'); ?>

  </div>
  <!-- ==================End of hero div================== -->

  <div id="la-container-table" class="d-flex align-items-center justify-content-center">
    <h1 class="d-flex justify-content-center text-white text-center px-4 fs-1">Table</h1>
  </div>

  <div class="row mt-4 kltable" >
    <div class="col-lg-12">
      <!-- table as standing -->
      <div class="card">
        <div class="card-body">
          <div class="view">
            <div class="tbl-wrapper">
              <!-- Table with hoverable rows -->
              <table id="kltable" class="table table-bordered table-hover text-start">
                <thead>
                  <tr class="text-start font-weight-bolder">
                    <th scope="" class="fw-bolder">Club</th>
                    <th scope="" class="fw-bolder text-center">P</th>
                    <th scope="" class="fw-bolder text-center">W</th>
                    <th scope="" class="fw-bolder text-center">D</th>
                    <th scope="" class="fw-bolder text-center">L</th>
                    <th scope="" class="fw-bolder text-center">+/-</th>
                    <th scope="" class="fw-bolder text-center">GD</th>
                    <th scope="" class="fw-bolder text-center">LP</th>
                    <th scope="" class="fw-bolder text-center">Pts</th>
                  </tr>
                </thead>

                <tbody>

                        <?php

                          $stmt = $pdo->query("SELECT t.name, k.played, k.won, k.drawn, k.lost, k.goals_for, k.goals_against, k.goal_difference, k.LP, k.points 
                              FROM kltable k 
                              JOIN teams t ON k.team_id = t.id 
                              ORDER BY k.points DESC, k.goal_difference DESC, k.goals_for DESC, t.name ASC");
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
                              <span><img  class="tbl-team-img" src="../assets/img/teams/<?= lcfirst($row['name']); ?>.png" alt=""></span> <span class="fw-bolder tbl-club-name fs-"><?= $row['name']; ?> - <?= $clubest['est']; ?></span> 
                            </td>
                            
                            <td class="text-center"><?= $row['played']; ?></td>
                            <td class="text-center"><?= $row['won']; ?></td>
                            <td class="text-center"><?= $row['drawn']; ?></td>
                            <td class="text-center"><?= $row['lost']; ?></td>
                            <td class="text-center"><?= $row['goals_for']; ?> : <?= $row['goals_against']; ?></td>
                            <td class="text-center"><?= $row['goal_difference']; ?></td>
                            <td class="text-center"><?= $row['LP']; ?></td>
                            <td class="text-center"><?= $row['points']; ?></td>
                          </tr>

                        <?php }
                        
                          // Connect to the database
                          $pdo = new PDO('mysql:host=localhost;dbname=khosa', 'root', '');
                        ?>

                      </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==================End of hero div================== -->

  <!-- ==================Start of foorter div================== -->
  <?php include("../inc/footer.php"); ?>
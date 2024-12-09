<?php

include('../admin/config.php');



// Fetching the table
$query_KLtable = "SELECT * FROM kltable ORDER BY pts DESC, (GF - GA) DESC, club ASC"; 
$query_KLtable_run = mysqli_query($conn, $query_KLtable);
$num_of_teams = mysqli_num_rows($query_KLtable_run);

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

  <div class="la-container-table d-block m-auto justify-content-center">
    <div class="d-flex justify-content-center">
      <h2 class="text-center text-white heading-text-about mb-4">KHOSA LEAGUE TABLE</h2>
    </div>
    <!-- <h4 class="d-flex justify-content-center text-white">As it stands</h4> -->

  </div>

  <div class="row mt-4 kltable" >
    <div class="col-lg-12">
      <!-- table as standing -->
      <div class="card">
        <div class="card-body">
          <div class="view">
            <div class="tbl-wrapper">
              <!-- Table with hoverable rows -->
              <table id="kltable" class="table table-border table-hover text-start">
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
                  $position = 0;
                  while ($row = mysqli_fetch_assoc($query_KLtable_run)) {
                    $position += 1;

                      $club = $row['club'];
                      $clubest = mysqli_fetch_assoc(mysqli_query($conn, "SELECT est FROM clubs WHERE `name` = '$club' "));
                  ?>

                    <tr class="text-start">
                      <td class=""> 
                        <span class="fw-bolder tbl-position px-1"><?= $position; ?></span>
                        <span><img class="tbl-team-img" src="../assets/img/teams/<?= lcfirst($row['club']);?>.png" alt=""></span> <span class="fw-bolder tbl-club-name"><?= ucwords($row['club']); ?> - <?= $clubest['est']; ?></span>
                      </td>
                      
                      <td class="text-center"><?= $row['MP']; ?></td>
                      <td class="text-center"><?= $row['W']; ?></td>
                      <td class="text-center"><?= $row['D']; ?></td>
                      <td class="text-center"><?= $row['L']; ?></td>
                      <td class="text-center"><?= $row['GF']; ?><strong class="fw-bolder">:</strong><?= $row['GA']; ?></td>
                      <td class="text-center"><?= $row['GD']; ?></td>
                      <td class="text-center"><?= $row['LP']; ?></td>
                      <td class="fw-bolder tbl-pts text-center"><?= $row['Pts']; ?></td>
                    </tr>

                  <?php
                  }
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
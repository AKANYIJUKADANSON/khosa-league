<?php

include('../admin/config.php');



// Fetching the table
$query_KLtable = "SELECT * FROM kltable ORDER BY pts DESC, (Goals_Scored - Goals_Conceded) DESC, club ASC"; 
$query_KLtable_run = mysqli_query($conn, $query_KLtable);
$num_of_teams = mysqli_num_rows($query_KLtable_run);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KHOSA - table</title>

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

  <div class="row mt-4 mx-1 kltable" >
    <div class="col-lg-12">
      <!-- table as standing -->
      <div class="card">
        <div class="card-body">

          <!-- Table with hoverable rows -->
          <table class="table table-border table-hover text-start">
            <thead>
              <tr class="text-start font-weight-bolder">
                <th scope="col" class="fw-bolder text-primary fs-5"></th>
                <th scope="col" class="fw-bolder text-primary fs-5">Club</th>
                <th scope="col" class="fw-bolder text-primary fs-5">MP</th>
                <th scope="col" class="fw-bolder text-primary fs-5">W</th>
                <th scope="col" class="fw-bolder text-primary fs-5">D</th>
                <th scope="col" class="fw-bolder text-primary fs-5">L</th>
                <th scope="col" class="fw-bolder text-primary fs-5">GD</th>
                <th scope="col" class="fw-bolder text-primary fs-5">Pts</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $position = 0;
              while ($row = mysqli_fetch_assoc($query_KLtable_run)) {
                
                $position += 1;
              ?>

                <tr class="text-start">
                  <td class="fw-bolder text-dark fs-5"> <?= $position; ?> </td>
                  <td > 
                    <span><img class="me-2 tbl-team-img" src="../assets/img/teams/<?= $row['club'] ?>.png" alt=""></span> <span class="fw-bolder fs-5"><?= $row['club']; ?></span>
                  </td>
                  <td><?= $row['MP']; ?></td>
                  <td><?= $row['W']; ?></td>
                  <td><?= $row['D']; ?></td>
                  <td><?= $row['L']; ?></td>
                  <td><?= $row['GD']; ?></td>
                  <td class="fw-bolder fs-5"><?= $row['Pts']; ?></td>
                </tr>

              <?php
              }
              ?>


            </tbody>
          </table>
          <!-- End Table with hoverable rows -->

        </div>
      </div>
    </div>
  </div>
  <!-- ==================End of hero div================== -->



  <!-- ==================Start of foorter div================== -->
  <?php include("../inc/footer.php"); ?>
<?php

include('../admin/config.php');

// Fetching the table
$query_KLtable = "SELECT * FROM KLtable";
$query_KLtable_run = mysqli_query($conn, $query_KLtable);

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
  <div class="hero-mini mb-4" style="border: 2px solid green;">
    <?php include('../inc/nav-bars.php'); ?>

  </div>
  <!-- ==================End of hero div================== -->

  <div class="la-container-table d-block m-auto justify-content-center">
    <div class="d-flex justify-content-center">
      <h2 class="text-center text-white heading-text-about mb-4">KHOSA LEAGUE TABLE</h2>
    </div>
    <h4 class="d-flex justify-content-center text-white">As it stands</h4>

  </div>




  <div class="row mt-4 mx-1 kltable" style="border: 2px solid red;">
    <div class="col-lg-12">
      <!-- table as standing -->
      <div class="card">
        <div class="card-body">

          <!-- Table with hoverable rows -->
          <table class="table table-borderless table-hover">
            <thead>
              <tr>
                <th scope="col">Position</th>
                <th scope="col">Club</th>
                <th scope="col">MP</th>
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
                      <img class="league-table-img ms-4" src="../assets/img/teams/<?= $row['club'] ?>.png" alt=""> </span>
                  </td>
                  <td><?= $row['club']; ?></td>
                  <td><?= $row['MP']; ?></td>
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
          <!-- End Table with hoverable rows -->

        </div>
      </div>
    </div>
  </div>
  <!-- ==================End of hero div================== -->



  <!-- ==================Start of foorter div================== -->
  <?php include("../inc/footer.php"); ?>
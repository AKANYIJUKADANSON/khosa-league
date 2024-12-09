<?php

  include('../admin/config.php');

  // Fetching the topscorers table
  $query_topscorers = "SELECT * FROM players WHERE goals > 2 ORDER BY goals DESC";
  $query_topscorers_run = mysqli_query($conn, $query_topscorers);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>topscorers</title>

  <?php include('../inc/header-links.php'); ?>

</head>

<body>
  <div class="hero-mini mb-4">
    <?php include('../inc/nav-bars.php'); ?>

  </div>
  <!-- ==================End of hero div================== -->

  <div id="la-container-topscorers" class="d-flex align-items-center justify-content-center">
    <h1 class="d-flex justify-content-center text-white text-center px-4 fs-1">Topscorers</h1>
  </div>


  <div class="row mt-4 mx-1 players">
        <!-- <section class="section"> -->
          <!-- <div class="row">
            <div class="col-lg-12"> -->

              <div class="card" style="overflow-y: auto">
                <!-- <div class="card-body"> -->
                  <!-- ~~~~~~~~~~~~~Table~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <table class="table datatable table-players">
                    <thead>
                      <tr class="text-start">
                        <th scope="col"><b class="fw-normal text-primary ps-3 float-start-bottom">Player</b></th>
                        <th scope="col"><b class="fw-normal text-primary float-bottom-end">Goals</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (mysqli_num_rows($query_topscorers_run) > 0) {
                        $position = 0; 
                        while ($player = mysqli_fetch_assoc($query_topscorers_run)) { $position++; ?>
                          <tr>
                            <td class="d-flex">
                              <h4 class="player-name m-auto fw-bolder mx-2"><?= $position;?></h4>
                              <div class="d-flex">
                                <img class="rounded-circle player-img mx-1"  src="../assets/img/teams/<?=$player['team'];?>.png" alt="">
                                <h4 class="fw-bolder my-auto player-name"><span class="text-capitalize"><?= $player['name'];?></span></h4>
                              </div>
                            </td>



                            <td class="">
                              <!-- <div class="d-flex"> -->
                                <h4 class="fs-6 pe-4 my-auto fw-bolder float-start"><?= $player['goals'];?></h4>
                              <!-- </div> -->
                            </td>

                          </tr>

                        <?php } } else { echo "Empty repository"; }?>

                    </tbody>
                  </table>
              </div>

        
  </div>




  <!-- ==================Start of foorter div================== -->
  <?php include("../inc/footer.php"); ?>
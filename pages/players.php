<?php

include('../admin/config.php');

// Fetching the players table
$query_players = "SELECT * FROM players";
$query_players_run = mysqli_query($conn, $query_players);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KHOSA | Players</title>

  <?php include('../inc/header-links.php'); ?>

</head>

<body>
  <div class="hero-mini mb-4" style="border: 2px solid green;">
    <?php include('../inc/nav-bars.php'); ?>

  </div>
  <!-- ==================End of hero div================== -->

  <div class="la-container-table d-block m-auto justify-content-center">
    <div class="d-flex justify-content-center">
      <h2 class="text-center text-white heading-text-about mb-4">Players</h2>
    </div>
    <h4 class="d-flex justify-content-center text-white">All players that participate in the league and their profile</h4>

  </div>


  <div class="row mt-4 mx-1">
    <?php
    if (mysqli_num_rows($query_players_run) > 0) {
      while ($player = mysqli_fetch_assoc($query_players_run)) { ?>
        <div class="col-lg-3 players">
          <div class="card card-player">
            <img height="350" class="rounded" src="../assets/img/players/<?= $player['image']; ?>"  alt="...">
            <div class="card-body">
              <div class="details">
                <div class="meta-data">
                  <h2 class="card-title">Name:</h2>
                  <h5 class="card-title text-secondary mx-2"><?= $player['name']; ?></h5>
                </div>

                <div class="meta-data">
                  <h2 class="card-title">Team:</h2>
                  <h5 class="card-title text-secondary mx-2"><?= $player['team']; ?></h5>
                </div>

                <div class="meta-data">
                  <h2 class="card-title">Role:</h2>
                  <h5 class="card-title text-secondary mx-2"><?= $player['role']; ?></h5>
                </div>

              </div>
            </div>
            <button type="button" class="btn m-4" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable<?php echo $player['id'] ?>">
              View Profile <i  class="bi bi-arrow-right"></i>
            </button>
          </div>
        </div>

        <!--==================== Modal Dialog====================-->
        <div class="row col-md-8 modal fade modal-player" id="modalDialogScrollable<?php echo $player['id'] ?>" tabindex="-1">
          <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="card-title">PRAYER PROFILE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body ">
                <div class="row">
                  <div class="col-lg-7">
                    <img width="100%" class="object-fit-none border rounded" height="100%" src="../assets/img/players/<?= $player['image']; ?>" alt=" ">
                  </div>
                  <div class="col-lg-5">
                    <div class="card-body">
                      <div class="modal-details">
                        <div class="meta-data">
                          <h2 class="card-title">Name:</h2>
                          <h5 class="card-title text-secondary mx-2"><?= $player['name']; ?></h5>
                        </div>

                        <div class="meta-data">
                          <h2 class="card-title">Club:</h2>
                          <h5 class="card-title text-secondary mx-2"><?= $player['team']; ?></h5>
                        </div>

                        <div class="meta-data">
                          <h2 class="card-title">Position:</h2>
                          <h5 class="card-title text-secondary mx-2"><?= $player['role']; ?></h5>
                        </div>

                        <div class="meta-data">
                          <h2 class="card-title">Age:</h2>
                          <h5 class="card-title text-secondary mx-2"><?= $player['age']; ?></h5>
                        </div>

                        <div class="meta-data">
                          <h2 class="card-title">Shirt No.:</h2>
                          <h5 class="card-title text-secondary mx-2"><?= $player['shirt_no']; ?></h5>
                        </div>

                        <div class="meta-data">
                          <h2 class="card-title">Appearences::</h2>
                          <h5 class="card-title text-secondary mx-2"><?= $player['appearances']; ?></h5>
                        </div>

                        <div class="meta-data">
                          <h2 class="card-title">Goals:</h2>
                          <h5 class="card-title text-secondary mx-2"><?= $player['goals']; ?></h5>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row player-about">
                      
                      <div class="card-body">
                        <hr class="hr" style="height: 3px; background-color: #012970;">
                        <div class="meta-data d-block">
                        <div>About <b><span><?= $player['name']; ?></span> </b></div>
                          <h5 class="card-title text-secondary mx-2"><?= $player['about']; ?></h5>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div><!-- End Modal Dialog Scrollable-->

    <?php
      }
    } else {
      echo "No players registered here yet";
    }
    ?>
  </div>




  <!-- ==================Start of foorter div================== -->
  <?php include("../inc/footer.php"); ?>
<?php

include('../admin/config.php');
$selectedTeam = $_GET['team'];

$query_clubs = "SELECT * FROM teams";
$query_clubs_run = mysqli_query($conn, $query_clubs);

// $query_gallery = "SELECT * FROM gallery WHERE team LIKE '%$selectedTeam%' LIMIT 8 ";
// $query_gallery_run = mysqli_query($conn, $query_gallery);

// get data for the selected team
$selectedClub = "SELECT * FROM teams WHERE name = '$selectedTeam' ";
$query_selectedClub_run = mysqli_query($conn, $selectedClub);
$selectedClubData = mysqli_fetch_assoc($query_selectedClub_run);

// Fetching the players table
$query_players = "SELECT * FROM players WHERE team = '$selectedTeam' LIMIT 8";
$query_players_run = mysqli_query($conn, $query_players);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club</title>

    <?php include('../inc/header-links.php'); ?>

</head>

<body>
    <div class="hero-mini mb-4">
        <?php include('../inc/nav-bars.php'); ?>

    </div>
    <!-- ==================End of hero div================== -->

    <div class="la-container-single-team d-block m-auto justify-content-center" 
        style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(../assets/img/wallpaper<?=$selectedClubData['name'];?>.png); background-size: cover; background-repeat: no-repeat;">
        
        <div class="d-flex align-items-center justify-content-center">
            <h1 class="text-center text-white heading-text-labout"> <?php echo $selectedTeam." FC" ?></h1>
        </div>
    </div>

    <!-- ==================End of hero div================== -->
    <div class="row mt-4 mx-1">
        <!-- Left side columns -->
        <div class="col-lg-6 mb-4">
            <div class="row d-fles justify-content-center">
                <img id="team-budge-img" src="../assets/img/teams/<?=$selectedClubData['name'];?>.png" alt="" srcset="">
            </div>
        </div>

        <!-- Right side columns -->
        <div class="col-lg-6">

            <!-- Results Card -->
            <div class="results">

                <div class="mx-4 about-details">
                    <p>
                        <b><span style="color: #012970; font-size: 25px;"><?=$selectedClubData['name'];?> Football Club</span></b><br>
                        <?=$selectedClubData['about'];?>

                    </p>
                </div>
            </div>

        </div>

    </div>
    <!-- ==================End of hero div================== -->


    <!-- ======================Start of Players section============== -->
    <div class="row mt-4 mx-1" style="background-color: rg(243, 241, 241);">
        <div class="card-title text-center"><h1><b>Players</b></h1></div>
        <hr>
    <?php
    if (mysqli_num_rows($query_players_run) > 0) {
      while ($player = mysqli_fetch_assoc($query_players_run)) { ?>
        <div class="col-lg-3 players single-team-page">
          <div class="card card-player shadow-lg">
            <img height="450" class="rounded" src="../assets/img/players/<?= $player['image']; ?>"  alt="...">
            <div class="card-body">
              <div class="details">
                <p>
                  <span class="card-title fs-4">Name:</span>
                  <span class="card-title text-secondary mx-2 fs-5"><?= $player['name']; ?></span>
                </p>

                <p>
                  <span class="card-title fs-4">Team:</span>
                  <span class="card-title text-secondary mx-2 fs-5"><?= $player['team']; ?></span>
                </p>

                <p>
                  <span class="card-title fs-4">Role:</span>
                  <span class="card-title text-secondary mx-2 fs-5"><?= $player['role']; ?></span>
                </p>

              </div>
            </div>
            <button type="button" class="btn mx-4 mb-4" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable<?php echo $player['id'] ?>">
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
                          <label class="card-title">Name:</label>
                          <span class="card-title text-secondary mx-2"><?= $player['name']; ?></span>
                        </div>

                        <div class="meta-data">
                          <label class="card-title">Club:</label>
                          <span class="card-title text-secondary mx-2"><?= $player['team']; ?></span>
                        </div>

                        <div class="meta-data">
                          <label class="card-title">Position:</label>
                          <span class="card-title text-secondary mx-2"><?= $player['role']; ?></span>
                        </div>

                        <div class="">
                          <label class="card-title fs-5">Goals:
                          <span class="card-title text-secondary mx-2"><b class="fs-4 text-primary"><?= $player['goals']; ?></b></span>
                          </label>
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
  <!-- ==============================End of players Section=============== -->

    <!-- ==================End of hero div================== -->
    <div class="row mt-4 mx-1" style="border: 2px solid re;">


    </div>
    <!-- ==================End of hero div================== -->

    <!-- ==================Start of foorter div================== -->
    <?php include("../inc/footer.php"); ?>
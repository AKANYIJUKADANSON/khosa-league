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
  <div class="hero-mini mb-4">
    <?php include('../inc/nav-bars.php'); ?>

  </div>
  <!-- ==================End of hero div================== -->

  <div class="la-container-table py-3 d-block m-auto justify-content-center">
    
    <div class="d-flx justify-content-center">
      <h2 class="text-center text-white heading-text-about mb-2 fw-900"><i class="bi bi-people fs-1 text-white"></i> <br>Players</h2>
    </div>

    <div class="search-bar d-flex justify-content-center">
      <!-- <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search for a player" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form> -->
    </div>


    <!-- <h4 class="d-flex justify-content-center text-white">All players that participate in the league and their profile</h4> -->

  </div>


  <div class="row mt-4 px-1 players">
        <section class="section">
          <div class="row">
            <div class="col-lg-12">

              <div class="card">
                <!-- <div class="card-body"> -->
                  <!-- ~~~~~~~~~~~~~Table~~~~~~~~~~~~~~~~~~~~~~~ -->
                  <table class="table datatable table-border table-players">
                    <thead>
                      <tr class="text-start">
                        <th scope="col"><b class="fw-bold text-primary">Player</b></th>
                        <th scope="col"><b class="fw-bold text-primary">Position</b></th>
                        <th scope="col"><b class="fw-bold text-primary">Club</b></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (mysqli_num_rows($query_players_run) > 0) {
                        while ($player = mysqli_fetch_assoc($query_players_run)) { ?>

                        
                          <tr data-bs-toggle="modal" data-bs-target="#modalDialogScrollable<?php echo $player['id'] ?>">
                            <td class="">
                              <div class="d-flex">
                                <img style="" class="rounded player-img" src="../assets/img/players/<?= $player['image'];?>" alt="">
                                <h4 class="fw-bolder my-auto player-name"><span class="text-capitalize"><?= $player['name'];?></span></h4>
                              </div>
                            </td>

                            <td class="text-start">
                              <h4 class="player-name"><?= $player['role'];?></h4>
                            </td>

                            <td>
                              <div class="d-flex">
                                <img class="rounded-circle player-img" src="../assets/img/teams/<?= $player['team'];?>.png" alt="">

                                <h5 class="fw-bolder my-auto ms-2 player-name" ><?= $player['team'];?></h5>
                              </div>
                            </td>

                            <td>
                              <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable<?php echo $player['id'] ?>"><i  class="bi bi-eye"></i>
                              </button>
                            </td>
                              
                          </tr>

                          <!--==================== More details Modal Dialog====================-->
                          <div class="row col-md-8 modal fade modal-player" id="modalDialogScrollable<?php echo $player['id'];?>" tabindex="-1">
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
                                        <div class="">
                                          
                                            <label class="card-title fs-3">Name:
                                            <span class="card-title text-secondary mx-2"><b class="fs-4 text-primary"><?= $player['name']; ?></b></span>
                                            </label><br>

                                            <label class=" fs-3">Club:
                                            <span class="text-secondary mx-2"><b class="fs-4 text-primary"><?= $player['team']; ?></b></span>
                                            </label><br>

                                            <label class="card-title fs-3">Position:
                                            <span class="card-title text-secondary mx-2"><b class="fs-4 text-primary"><?= $player['role']; ?></b></span>
                                            </label><br>

                                            <!-- <label class="card-title fs-3">Age:
                                            <span class="card-title text-secondary mx-2"><b class="fs-4 text-primary"><?php //$player['age']; ?></b></span>
                                            </label> -->
                                          </div>

                                          <div class="">
                                            <label class="card-title fs-3">Shirt No.:
                                            <span class="card-title text-secondary mx-2"><b class="fs-4 text-primary"><?= $player['shirt_no']; ?></b></span>
                                            </label>
                                          </div>

                                          <div class="">

                                          <label class="card-title fs-3">Appearences:
                                            <span class="card-title text-secondary mx-2"><b class="fs-4 text-primary"><?= $player['appearances']; ?></b></span>
                                            </label>
                                          </div>

                                          <div class="">
                                            <label class="card-title fs-3">Goals:
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
                                          <div>About <b class="fs-4"><span><?= $player['name']; ?></span> </b></div>
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
                          </div>
                      <?php } } else { echo "Empty repository"; }?>
                      



                    </tbody>
                  </table>


                <!-- </div> -->
              </div>

            </div>
          </div>
        </section>

        
  </div>




  <!-- ==================Start of foorter div================== -->
  <?php include("../inc/footer.php"); ?>
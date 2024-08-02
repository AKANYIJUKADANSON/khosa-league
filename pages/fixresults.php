<?php

  include('../admin/config.php');

  // ``````````````````` fetch results````````````````````````````

    // ~~~~~> Week 1
  $resultsWeekOne = "SELECT * FROM results WHERE game_week = 'week1' ";
  $resultsWeekOne_run = mysqli_query($conn, $resultsWeekOne);

      // ~~~~~> Week 2
  $resultsWeekTwo = "SELECT * FROM results WHERE game_week = 'week2' ";
  $resultsWeekTwo_run = mysqli_query($conn, $resultsWeekTwo);

      // ~~~~~> Week 3
  $resultsWeekThree = "SELECT * FROM results WHERE game_week = 'week3' ";
  $resultsWeekThree_run = mysqli_query($conn, $resultsWeekThree);

      // ~~~~~> Week 4
  $resultsWeekFour = "SELECT * FROM results WHERE game_week = 'week4' ";
  $resultsWeekFour_run = mysqli_query($conn, $resultsWeekFour);

      // ~~~~~> Week 5
  $resultsWeekFive = "SELECT * FROM results WHERE game_week = 'week5' ";
  $resultsWeekFive_run = mysqli_query($conn, $resultsWeekFive);

      // ~~~~~> Week 6
  $resultsWeekSix = "SELECT * FROM results WHERE game_week = 'week6' ";
  $resultsWeekSix_run = mysqli_query($conn, $resultsWeekSix);

      // ~~~~~> Week 7
  $resultsWeekSecen = "SELECT * FROM results WHERE game_week = 'week7' ";
  $resultsWeekSecen_run = mysqli_query($conn, $resultsWeekSecen);



  // ``````````````````` fetch fixtures ``````````````````````````

    // ~~~~~~~> Week 1
  $fixturesWeekOne = "SELECT * FROM fixtures WHERE week = 'Matchday 1' ";
  $fixturesWeekOne_run = mysqli_query($conn, $fixturesWeekOne);

      // ~~~~~~~> Week 2
  $fixturesWeekTwo = "SELECT * FROM fixtures WHERE week = 'Matchday 2' ";
  $fixturesWeekTwo_run = mysqli_query($conn, $fixturesWeekTwo);

      // ~~~~~~~> Week 3
  $fixturesWeekThree = "SELECT * FROM fixtures WHERE week = 'Matchday 3' ";
  $fixturesWeekThree_run = mysqli_query($conn, $fixturesWeekThree);

      // ~~~~~~~> Week 4
  $fixturesWeekFour = "SELECT * FROM fixtures WHERE week = 'Matchday 4' ";
  $fixturesWeekFour_run = mysqli_query($conn, $fixturesWeekFour);

      // ~~~~~~~> Week 5
  $fixturesWeekFive = "SELECT * FROM fixtures WHERE week = 'Matchday 5' ";
  $fixturesWeekFive_run = mysqli_query($conn, $fixturesWeekFive);

      // ~~~~~~~> Week 6
  $fixturesWeekSix = "SELECT * FROM fixtures WHERE week = 'Matchday 6' ";
  $fixturesWeekSix_run = mysqli_query($conn, $fixturesWeekSix);

      // ~~~~~~~> Week 7
  $fixturesWeekSeven = "SELECT * FROM fixtures WHERE week = 'Matchday 7' ";
  $fixturesWeekSeven_run = mysqli_query($conn, $fixturesWeekSeven);


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

    <div class="row mt-4 mx-1 " style="border: 2px solid re;">

        <!-- ~~~~~~~~~~~~~~ Fixtures Section ~~~~~~~~~~~~~~ -->
        <div class="col-lg-6 p-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title fs-4 text-primary fw-bolder">Fixtures</h4>
                    <div class="accordion" id="accordionFixtures">

                        <!--*******************Week 1 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-one">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-wk-One" aria-expanded="true" aria-controls="collapseOne">
                                <h4 class="fs-5 fw-bolder active-wk">Matchday 1 <span class="text-dark"><i class="ms-4 bi bi-calendar-fill" ></i> 4<sup>th</sup> Aug, 2024</span></h4>
                                </button>
                            </h2>
                            <div id="collapse-wk-One" class="accordion-collapse collapse show" aria-labelledby="week-one" data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">

                                    <?php while ($wkOne_fix = mysqli_fetch_assoc($fixturesWeekOne_run)) { ?>
                                        <div class="card shadow" style="border: 2px solid re">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center my-auto mt-4">
                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkOne_fix['team1'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto me-2 team-text"><i ><?=$wkOne_fix['team1'];?> FC</i></h4>


                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?= date('h:i a', strtotime($wkOne_fix['time']));?></button>

                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkOne_fix['team2'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$wkOne_fix['team2'];?> FC</i></h4>
                                                </div>

                                            
                                            </div>
                                        </div>
                                    <?php } ?>


                                </div>
                            </div>
                        </div>

                        <!--*******************Week 2 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-two">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-wk-two" aria-expanded="false" aria-controls="collapseTwo">
                                <h4 class="fs-5 fw-bolder"><i >Matchday 2</i></h4>
                                </button>
                            </h2>
                            <div id="collapse-wk-two" class="accordion-collapse collapse" aria-labelledby="week-two" data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">
                                    <?php while ($wkTwo_fix = mysqli_fetch_assoc($fixturesWeekTwo_run)) { ?>
                                        <div class="card shadow" style="border: 2px solid re">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center my-auto mt-4">
                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkTwo_fix['team1'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto me-2 team-text"><i ><?=$wkTwo_fix['team1'];?> FC</i></h4>


                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkTwo_fix['time'];?></button>

                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkTwo_fix['team2'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$wkTwo_fix['team2'];?> FC</i></h4>
                                                </div>

                                            
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 3 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-three">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-wk-three" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="fs-5 fw-bolder"><i >Matchday 3</i></h4>
                                </button>
                            </h2>
                            <div id="collapse-wk-three" class="accordion-collapse collapse" aria-labelledby="week-three" data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">
                            <?php while ($wkThree_fix = mysqli_fetch_assoc($fixturesWeekThree_run)) { ?>
                                        <div class="card shadow" style="border: 2px solid re">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center my-auto mt-4">
                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkThree_fix['team1'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto me-2 team-text"><i ><?=$wkThree_fix['team1'];?> FC</i></h4>


                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkThree_fix['time'];?></button>

                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkThree_fix['team2'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$wkThree_fix['team2'];?> FC</i></h4>
                                                </div>

                                            
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 4 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-four">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-wk-four" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="fs-5 fw-bolder"><i >Matchday 4</i></h4>
                                </button>
                            </h2>
                            <div id="collapse-wk-four" class="accordion-collapse collapse" aria-labelledby="week-four" data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">
                                    <?php while ($wkFour_fix = mysqli_fetch_assoc($fixturesWeekFour_run)) { ?>
                                        <div class="card shadow" style="border: 2px solid re">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center my-auto mt-4">
                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkFour_fix['team1'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto me-2 team-text"><i ><?=$wkFour_fix['team1'];?> FC</i></h4>


                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkFour_fix['time'];?></button>

                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkFour_fix['team2'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$wkFour_fix['team2'];?> FC</i></h4>
                                                </div>

                                            
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 5 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-five">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-wk-five" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="fs-5 fw-bolder"><i >Matchday 5</i></h4>
                                </button>
                            </h2>
                            <div id="collapse-wk-five" class="accordion-collapse collapse" aria-labelledby="week-five" data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">
                                    <?php while ($wkFive_fix = mysqli_fetch_assoc($fixturesWeekFive_run)) { ?>
                                        <div class="card shadow" style="border: 2px solid re">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center my-auto mt-4">
                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkFive_fix['team1'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto me-2 team-text"><i ><?=$wkFive_fix['team1'];?> FC</i></h4>


                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkFive_fix['time'];?></button>

                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkFive_fix['team2'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$wkFive_fix['team2'];?> FC</i></h4>
                                                </div>

                                            
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 6 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-six">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-wk-six" aria-expanded="false" aria-controls="collapseThree">
                                <h4 class="fs-5 fw-bolder"><i >Matchday 6</i></h4>
                                </button>
                            </h2>
                            <div id="collapse-wk-six" class="accordion-collapse collapse" aria-labelledby="week-six" data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">
                                    <?php while ($wkSix_fix = mysqli_fetch_assoc($fixturesWeekSix_run)) { ?>
                                        <div class="card shadow" style="border: 2px solid re">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center my-auto mt-4">
                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkSix_fix['team1'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto me-2 team-text"><i ><?=$wkSix_fix['team1'];?> FC</i></h4>


                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkSix_fix['time'];?></button>

                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkSix_fix['team2'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$wkSix_fix['team2'];?> FC</i></h4>
                                                </div>

                                            
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ~~~~~~~~~~~~~ Results section~~~~~~~~~~~~~~~~~~~ -->
        <div class="col-lg-6 p-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title fs-4 text-primary fw-bolder">Results</h4>
                    <div class="accordion" id="accordionResults">

                        <!--*******************Week 1 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="results-week-one">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-results-wk-One" aria-expanded="true" aria-controls="collapse-results-one">
                                <h4 class="fs-5 fw-bolder active-wk"><i >Matchday 1</i></h4>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-One" class="accordion-collapse collapse show" aria-labelledby="results-week-one" data-bs-parent="#accordionResults">
                                <div class="accordion-body">

                                    <?php while ($wkOne_results = mysqli_fetch_assoc($resultsWeekOne_run)) { ?>
                                        <div class="card shadow" style="border: 2px solid re">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center my-auto mt-4">
                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkOne_results['team1'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto me-2 team-text"><i ><?=$wkOne_results['team1'];?> FC</i></h4>


                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkOne_results['result_team_1'];?></button>

                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkOne_results['result_team_2'];?></button>

                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkOne_results['team2'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$wkOne_results['team2'];?> FC</i></h4>
                                                </div>

                                            
                                            </div>
                                        </div>
                                    <?php } ?>


                                </div>
                            </div>
                        </div>

                        <!--*******************Week 2 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-two-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-results-wk-two" aria-expanded="false" aria-controls="collapse-results-two">
                                <h4 class="fs-5 fw-bolder"><i >Matchday 2</i></h4>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-two" class="accordion-collapse collapse" aria-labelledby="week-two-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkTwo_results = mysqli_fetch_assoc($resultsWeekTwo_run)) { ?>
                                        <div class="card shadow" style="border: 2px solid re">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center my-auto mt-4">
                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkTwo_results['team1'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto me-2 team-text"><i ><?=$wkTwo_results['team1'];?> FC</i></h4>


                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkTwo_results['result_team_1'];?></button>

                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkTwo_results['result_team_2'];?></button>

                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkTwo_results['team2'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$wkTwo_results['team2'];?> FC</i></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 3 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-three-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-results-wk-three" aria-expanded="false" aria-controls="collapse-results-three">
                                <h4 class="fs-5 fw-bolder"><i >Matchday 3</i></h4>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-three" class="accordion-collapse collapse" aria-labelledby="week-three-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                <?php while ($wkThree_results = mysqli_fetch_assoc($resultsWeekThree_run)) { ?>
                                        <div class="card shadow" style="border: 2px solid re">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center my-auto mt-4">
                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkThree_results['team1'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto me-2 team-text"><i ><?=$wkThree_results['team1'];?> FC</i></h4>


                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkThree_results['result_team_1'];?></button>

                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkThree_results['result_team_2'];?></button>

                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkThree_results['team2'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$wkThree_results['team2'];?> FC</i></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 4 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-four-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-results-wk-four" aria-expanded="false" aria-controls="collapse-results-four">
                                <h4 class="fs-5 fw-bolder"><i >Matchday 4</i></h4>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-four" class="accordion-collapse collapse" aria-labelledby="week-four-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkFour_results = mysqli_fetch_assoc($resultsWeekFour_run)) { ?>
                                        <div class="card shadow" style="border: 2px solid re">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center my-auto mt-4">
                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkFour_results['team1'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto me-2 team-text"><i ><?=$wkFour_results['team1'];?> FC</i></h4>


                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkFour_results['result_team_1'];?></button>

                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkFour_results['result_team_2'];?></button>

                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkFour_results['team2'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$wkFour_results['team2'];?> FC</i></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 5 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-five-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-results-wk-five" aria-expanded="false" aria-controls="collapse-results-five">
                                <h4 class="fs-5 fw-bolder"><i >Matchday 5</i></h4>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-five" class="accordion-collapse collapse" aria-labelledby="week-five-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                        <?php while ($wkFive_results = mysqli_fetch_assoc($resultsWeekFive_run)) { ?>
                                        <div class="card shadow" style="border: 2px solid re">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center my-auto mt-4">
                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkFive_results['team1'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto me-2 team-text"><i ><?=$wkFive_results['team1'];?> FC</i></h4>


                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkFive_results['result_team_1'];?></button>

                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkFive_results['result_team_2'];?></button>

                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkFive_results['team2'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$wkFive_results['team2'];?> FC</i></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 6 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-six-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-results-wk-six" aria-expanded="false" aria-controls="collapse-results-six">
                                <h4 class="fs-5 fw-bolder"><i >Matchday 6</i></h4>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-six" class="accordion-collapse collapse" aria-labelledby="week-six-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                <?php while ($wkSix_results = mysqli_fetch_assoc($resultsWeekSix_run)) { ?>
                                        <div class="card shadow" style="border: 2px solid re">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-center my-auto mt-4">
                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkSix_results['team1'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto me-2 team-text"><i ><?=$wkSix_results['team1'];?> FC</i></h4>


                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkSix_results['result_team_1'];?></button>

                                                    <button type="button" class="btn btn-secondary my-auto mx-2 fixt-btn"><?=$wkSix_results['result_team_2'];?></button>

                                                    <img class="fix-team-img my-auto mx-2" src="../assets/img/teams/<?=$wkSix_results['team2'];?>.png" alt="">

                                                    <h4 class="fw-bolder active-wk my-auto team-text"><i ><?=$wkSix_results['team2'];?> FC</i></h4>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
  </div>

  <!-- ============== Footer -->
  <?php include('../inc/footer.php'); ?>
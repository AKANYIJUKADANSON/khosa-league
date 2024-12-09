<?php

  include('../admin/config.php');

  // ``````````````````` fetch results````````````````````````````

    // ~~~~~> Week 1
    $resultsWeekOne = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type, m.home_team_lady_played, m.away_team_lady_played
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        WHERE game_week = 'week1' ";
    $resultsWeekOne_run = $result = $conn->query($resultsWeekOne);

      // ~~~~~> Week 2
    $resultsWeekTwo = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type, m.home_team_lady_played, m.away_team_lady_played  
            FROM match_results m
            JOIN teams t1 ON m.home_team_id = t1.id
            JOIN teams t2 ON m.away_team_id = t2.id
            WHERE game_week = 'week2' ";
    $resultsWeekTwo_run = $conn->query($resultsWeekTwo);

      // ~~~~~> Week 3
    $resultsWeekThree = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type, m.home_team_lady_played, m.away_team_lady_played  
            FROM match_results m
            JOIN teams t1 ON m.home_team_id = t1.id
            JOIN teams t2 ON m.away_team_id = t2.id
            WHERE game_week = 'week3' ";
    $resultsWeekThree_run = $conn->query($resultsWeekThree);

      // ~~~~~> Week 4
    $resultsWeekFour = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type  
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        WHERE game_week = 'week4' ";
    $resultsWeekFour_run = $conn->query($resultsWeekFour);


      // ~~~~~> Week 5


    $resultsWeekFive = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type, m.home_team_lady_played, m.away_team_lady_played  
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        WHERE game_week = 'week5' ";
    $resultsWeekFive_run = $conn->query($resultsWeekFive);

      // ~~~~~> Week 6
    $resultsWeekSix = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type, m.home_team_lady_played, m.away_team_lady_played  
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        WHERE game_week = 'week6' ";
    $resultsWeekSix_run = $conn->query($resultsWeekSix);


      // ~~~~~> Week 7

    $resultsWeekSeven = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type, m.home_team_lady_played, m.away_team_lady_played  
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        WHERE game_week = 'week7' ";
    $resultsWeekSeven_run = $conn->query($resultsWeekSeven);

    // ~~~~~> Week 8
    $resultsWeekEight = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type, m.home_team_lady_played, m.away_team_lady_played  
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        WHERE game_week = 'week8' ";
    $resultsWeekEight_run = $conn->query($resultsWeekEight);

    // ~~~~~> Week 9
    $resultsWeekNine = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type, m.home_team_lady_played, m.away_team_lady_played  
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        WHERE game_week = 'week9' ";
    $resultsWeekNine_run = $conn->query($resultsWeekNine);

    // ~~~~~> Week 10
    $resultsWeekTen = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type, m.home_team_lady_played, m.away_team_lady_played  
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        WHERE game_week = 'week10' ";
    $resultsWeekTen_run = $conn->query($resultsWeekTen);

    // ~~~~~> Week 11
    $resultsWeekEleven = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type, m.home_team_lady_played, m.away_team_lady_played  
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        WHERE game_week = 'week11' ";
    $resultsWeekEleven_run = $conn->query($resultsWeekEleven);

    // ~~~~~> Week 12
    $resultsWeekTwelve = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type, m.home_team_lady_played, m.away_team_lady_played  
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        WHERE game_week = 'week12' ";
    $resultsWeekTwelve_run = $conn->query($resultsWeekTwelve);

    // ~~~~~> Week 13
    $resultsWeekThirteen = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.away_team_goals, m.match_date, m.win_type, m.home_team_lady_played, m.away_team_lady_played  
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        WHERE game_week = 'week13' ";
    $resultsWeekThirteen_run = $conn->query($resultsWeekThirteen);



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

        // ~~~~~~~> Week 8
  $fixturesWeekEight = "SELECT * FROM fixtures WHERE week = 'Matchday 8' ";
  $fixturesWeekEight_run = mysqli_query($conn, $fixturesWeekEight);

          // ~~~~~~~> Week 9
  $fixturesWeekNine = "SELECT * FROM fixtures WHERE week = 'Matchday 9' ";
  $fixturesWeekNine_run = mysqli_query($conn, $fixturesWeekNine);

          // ~~~~~~~> Week 10
  $fixturesWeekTen = "SELECT * FROM fixtures WHERE week = 'Matchday 10' ";
  $fixturesWeekTen_run = mysqli_query($conn, $fixturesWeekTen);

          // ~~~~~~~> Week 11
  $fixturesWeekEleven = "SELECT * FROM fixtures WHERE week = 'Matchday 11' ";
  $fixturesWeekEleven_run = mysqli_query($conn, $fixturesWeekEleven);

          // ~~~~~~~> Week 12
  $fixturesWeekTwelve = "SELECT * FROM fixtures WHERE week = 'Matchday 12' ";
  $fixturesWeekTwelve_run = mysqli_query($conn, $fixturesWeekTwelve);

        // ~~~~~~~> Week 13
  $fixturesWeekThirteen = "SELECT * FROM fixtures WHERE week = 'Matchday 13' ";
  $fixturesWeekThirteen_run = mysqli_query($conn, $fixturesWeekThirteen);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>Fixtures&results</title>

    <?php include('../inc/header-links.php'); ?>

</head>

<body>

    <div class="bg-white">

        <!-- ==================Start of Navigation div================== -->
        <?php include('../inc/nav-bars.php'); ?>
        <!-- ==================End of Navigation div================== -->

        <div class="row mt-4 " style="border: 2px solid re;">

            <!-- ~~~~~~~~~~~~~~ Fixtures Section ~~~~~~~~~~~~~~ -->
            <div class="col-lg-6 ">
                <div class="card px-2 mx-2">
                    <h4 class="card-title fs-4 text-primary fw-bolder">Fixtures</h4>
                    <div class="accordion" id="accordionFixtures">

                        <!--*******************Week 1 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-one">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-One" aria-expanded="true" aria-controls="collapseOne">
                                    <h4 class="fw-bolder active-wk fixres-title">
                                        <?php if (date("d/m/Y") == "04/08/2024") {?>
                                        <h6 class="fw-bolder active-wk fixres-title">
                                            <?php } else{?>
                                            <h6 class="fw-bolder  fixres-title">
                                                <?php }?> Matchday 1

                                                <span class="text-dark fs-6"><i
                                                        class="ms-2 bi bi-calendar-fill text-secondary"></i>
                                                    4<sup>th</sup> Aug, 2024</span>
                                            </h6></h6>
                                </button>
                            </h2>
                            <div id="collapse-wk-One" class="accordion-collapse collapse show"
                                aria-labelledby="week-one" data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">

                                    <?php while ($wkOne_fix = mysqli_fetch_assoc($fixturesWeekOne_run)) { ?>

                                    <div class="card mx-0 shadow" style="border: 2px solid gree">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkOne_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkOne_fix['team1']);?>.png" alt="">

                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-0">
                                                <?= date('h:i a', strtotime($wkOne_fix['time']));?>
                                            </button>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkOne_fix['team2']);?>.png" alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkOne_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>


                                </div>
                            </div>
                        </div>

                        <!--*******************Week 2 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-two">

                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-two" aria-expanded="false" aria-controls="collapseTwo">
                                    <?php if (date("d/m/Y") == "18/08/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 2

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 18<sup>th</sup>
                                                Aug, 2024</span>
                                        </h6></h6>
                                </button>


                            </h2>
                            <div id="collapse-wk-two" class="accordion-collapse collapse" aria-labelledby="week-two"
                                data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">

                                    <?php while ($wkTwo_fix = mysqli_fetch_assoc($fixturesWeekTwo_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkTwo_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkTwo_fix['team1']);?>.png" alt="">

                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-1">
                                                <?= date('h:i a', strtotime($wkTwo_fix['time']));?>
                                            </button>

                                            <img class="fix-team-img my-auto me-2 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkTwo_fix['team2']);?>.png" alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkTwo_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                        <!--*******************Week 3 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-three">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-three" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <?php if (date("d/m/Y") == "01/09/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 3

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 1<sup>st</sup>
                                                Sept, 2024</span>
                                        </h6></h6>
                                </button>
                            </h2>
                            <div id="collapse-wk-three" class="accordion-collapse collapse" aria-labelledby="week-three"
                                data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">

                                    <?php while ($wkThree_fix = mysqli_fetch_assoc($fixturesWeekThree_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkThree_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkThree_fix['team1']);?>.png"
                                                alt="">

                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-1">
                                                <?= date('h:i a', strtotime($wkThree_fix['time']));?>
                                            </button>

                                            <img class="fix-team-img my-auto me-2 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkThree_fix['team2']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkThree_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 4 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-four">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-four" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <?php if (date("d/m/Y") == "15/09/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 4

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill fs-6 text-secondary"></i>
                                                15<sup>th</sup> Sept, 2024</span>
                                        </h6>
                                        </h6>
                                </button>
                            </h2>
                            <div id="collapse-wk-four" class="accordion-collapse collapse" aria-labelledby="week-four"
                                data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">

                                    <?php while ($wkFour_fix = mysqli_fetch_assoc($fixturesWeekFour_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkFour_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkFour_fix['team1']);?>.png"
                                                alt="">

                                            <?php if (!empty($wkFour_fix['time'])){?>
                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-1">
                                                <?= date('h:i a', strtotime($wkFour_fix['time']));?>
                                            </button>
                                            <?php }else{?>
                                            <button type="button"
                                                class="btn btn-sm text-danger my-auto fixt-btn mx-1">VS</button>
                                            <?php }?>

                                            <img class="fix-team-img my-auto me-2 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkFour_fix['team2']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkFour_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 5 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-five">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-five" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <?php if (date("d/m/Y") == "29/08/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 5

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill fs-6 text-secondary"></i>
                                                29<sup>th</sup> Sept, 2024</span>
                                        </h6></h6>
                                </button>
                            </h2>
                            <div id="collapse-wk-five" class="accordion-collapse collapse" aria-labelledby="week-five"
                                data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">

                                    <?php while ($wkFive_fix = mysqli_fetch_assoc($fixturesWeekFive_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkFive_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkFive_fix['team1']);?>.png"
                                                alt="">

                                            <?php if (!empty($wkFive_fix['time'])){?>
                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-1">
                                                <?= date('h:i a', strtotime($wkFive_fix['time']));?>
                                            </button>
                                            <?php }else{?>
                                            <button type="button"
                                                class="btn btn-sm text-danger my-auto fixt-btn mx-1">VS</button>
                                            <?php }?>

                                            <img class="fix-team-img my-auto me-1 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkFive_fix['team2']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkFive_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                        <!--*******************Week 6 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-six">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-six" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <?php if (date("d/m/Y") == "13/10/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 6

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill fs-6 text-secondary"></i>
                                                13<sup>th</sup> Oct, 2024</span>
                                        </h6></h6>
                                </button>
                            </h2>
                            <div id="collapse-wk-six" class="accordion-collapse collapse" aria-labelledby="week-six"
                                data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">

                                    <?php while ($wkSix_fix = mysqli_fetch_assoc($fixturesWeekSix_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkSix_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkSix_fix['team1']);?>.png" alt="">

                                            <?php if (!empty($wkSix_fix['time'])){?>
                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-1">
                                                <?= date('h:i a', strtotime($wkSix_fix['time']));?>
                                            </button>
                                            <?php }else{?>
                                            <button type="button"
                                                class="btn btn-sm text-danger my-auto fixt-btn mx-1">VS</button>
                                            <?php }?>

                                            <img class="fix-team-img my-auto me-2 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkSix_fix['team2']);?>.png" alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkSix_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="my-4" style="width: 50%; border: 2px solid blac; margin: auto">
                            <h2 class="text-danger fw-bolder fs-4 f" style="text-align: center">SECOND ROUND</h2>
                        </div>

                        <!--*******************Week 7 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-seven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-seven" aria-expanded="false"
                                    aria-controls="collapseseven">
                                    <?php if (date("d/m/Y") == "08/12/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 7

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill fs-6 text-secondary"></i>
                                                8<sup>th</sup> Dec, 2024</span>
                                        </h6></h6>
                                </button>
                            </h2>
                            <div id="collapse-wk-seven" class="accordion-collapse collapse" aria-labelledby="week-seven"
                                data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">
                                    <?php while ($wkSeven_fix = mysqli_fetch_assoc($fixturesWeekSeven_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkSeven_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkSeven_fix['team1']);?>.png"
                                                alt="">

                                            <?php if (!empty($wkSeven_fix['time'])){?>
                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-1">
                                                <?= date('h:i a', strtotime($wkSeven_fix['time']));?>
                                            </button>
                                            <?php }else{?>
                                            <button type="button"
                                                class="btn btn-sm text-danger my-auto fixt-btn mx-1">VS</button>
                                            <?php }?>

                                            <img class="fix-team-img my-auto me-2 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkSeven_fix['team2']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkSeven_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 8 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-eight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-eight" aria-expanded="false"
                                    aria-controls="collapseeight">
                                    <?php if (date("d/m/Y") == "10/11/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 8

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill fs-6 text-secondary"></i>
                                                10<sup>th</sup> Nov, 2024</span>
                                        </h6></h6>
                                </button>
                            </h2>

                            <div id="collapse-wk-eight" class="accordion-collapse collapse" aria-labelledby="week-eight"
                                data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">

                                    <?php while ($wkEight_fix = mysqli_fetch_assoc($fixturesWeekEight_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkEight_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkEight_fix['team1']);?>.png"
                                                alt="">

                                            <?php if (!empty($wkEight_fix['time'])){?>
                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-1">
                                                <?= date('h:i a', strtotime($wkEight_fix['time']));?>
                                            </button>
                                            <?php }else{?>
                                            <button type="button"
                                                class="btn btn-sm text-danger my-auto fixt-btn mx-1">VS</button>
                                            <?php }?>

                                            <img class="fix-team-img my-auto me-2 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkEight_fix['team2']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkEight_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                        <!--*******************Week 9 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-nine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-nine" aria-expanded="false"
                                    aria-controls="collapsenine">
                                    <?php if (date("d/m/Y") == "24/11/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 9

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill fs-6 text-secondary"></i>
                                                24<sup>th</sup> Nov, 2024</span>
                                        </h6></h6>
                                </button>
                            </h2>
                            <div id="collapse-wk-nine" class="accordion-collapse collapse" aria-labelledby="week-nine"
                                data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">
                                    <?php while ($wkNine_fix = mysqli_fetch_assoc($fixturesWeekNine_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkNine_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkNine_fix['team1']);?>.png"
                                                alt="">

                                            <?php if (!empty($wkNine_fix['time'])){?>
                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-1">
                                                <?= date('h:i a', strtotime($wkNine_fix['time']));?>
                                            </button>
                                            <?php }else{?>
                                            <button type="button"
                                                class="btn btn-sm text-danger my-auto fixt-btn mx-1">VS</button>
                                            <?php }?>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkNine_fix['team2']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkNine_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 10 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-ten">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-ten" aria-expanded="false" aria-controls="collapseten">
                                    <?php if (date("d/m/Y") == "08/12/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 10

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill fs-6 text-secondary"></i>
                                                08<sup>th</sup> Dec, 2024</span>
                                        </h6></h6>
                                </button>
                            </h2>
                            <div id="collapse-wk-ten" class="accordion-collapse collapse" aria-labelledby="week-ten"
                                data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">
                                    <?php while ($wkTen_fix = mysqli_fetch_assoc($fixturesWeekTen_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkTen_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkTen_fix['team1']);?>.png" alt="">

                                            <?php if (!empty($wkTen_fix['time'])){?>
                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-1">
                                                <?= date('h:i a', strtotime($wkTen_fix['time']));?>
                                            </button>
                                            <?php }else{?>
                                            <button type="button"
                                                class="btn btn-sm text-danger my-auto fixt-btn mx-1">VS</button>
                                            <?php }?>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkTen_fix['team2']);?>.png" alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkTen_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 11 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-Eleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-Eleven" aria-expanded="false"
                                    aria-controls="collapseEleven">
                                    <?php if (date("d/m/Y") == "22/12/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 11

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill fs-6 text-secondary"></i>
                                                22<sup>nd</sup> Dec, 2024</span>
                                        </h6></h6>
                                </button>
                            </h2>
                            <div id="collapse-wk-Eleven" class="accordion-collapse collapse"
                                aria-labelledby="week-Eleven" data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">
                                    <?php while ($wkEleven_fix = mysqli_fetch_assoc($fixturesWeekEleven_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkEleven_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkEleven_fix['team1']);?>.png"
                                                alt="">

                                            <?php if (!empty($wkEleven_fix['time'])){?>
                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-1">
                                                <?= date('h:i a', strtotime($wkEleven_fix['time']));?>
                                            </button>
                                            <?php }else{?>
                                            <button type="button"
                                                class="btn btn-sm text-danger my-auto fixt-btn mx-1">VS</button>
                                            <?php }?>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkEleven_fix['team2']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkEleven_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 12 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-Twelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-Twelve" aria-expanded="false"
                                    aria-controls="collapseTwelve">
                                    <?php if (date("d/m/Y") == "05/01/2025") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 12

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill fs-6 text-secondary"></i>
                                                05<sup>th</sup> Jan, 2025</span>
                                        </h6></h6>
                                </button>
                            </h2>
                            <div id="collapse-wk-Twelve" class="accordion-collapse collapse"
                                aria-labelledby="week-Twelve" data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">
                                    <?php while ($wkTwelve_fix = mysqli_fetch_assoc($fixturesWeekTwelve_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkTwelve_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkTwelve_fix['team1']);?>.png"
                                                alt="">

                                            <?php if (!empty($wkTwelve_fix['time'])){?>
                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-1">
                                                <?= date('h:i a', strtotime($wkTwelve_fix['time']));?>
                                            </button>
                                            <?php }else{?>
                                            <button type="button"
                                                class="btn btn-sm text-danger my-auto fixt-btn mx-1">VS</button>
                                            <?php }?>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkTwelve_fix['team2']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkTwelve_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 13 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-Thirteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-wk-Thirteen" aria-expanded="false"
                                    aria-controls="collapseThirteen">
                                    <?php if (date("d/m/Y") == "05/01/2025") {?>
                                    <h6 class="fw-bolder active-wk fixres-title fs-6">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 13

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 19<sup>th</sup>
                                                Jan, 2025</span>

                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-wk-Thirteen" class="accordion-collapse collapse"
                                aria-labelledby="week-Thirteen" data-bs-parent="#accordionFixtures">
                                <div class="accordion-body">
                                    <?php while ($wkThirteen_fix = mysqli_fetch_assoc($fixturesWeekThirteen_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkThirteen_fix['team1'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkThirteen_fix['team1']);?>.png"
                                                alt="">

                                            <?php if (!empty($wkThirteen_fix['time'])){?>
                                            <button type="button"
                                                class="btn btn-sm btn-secondary my-auto fixt-btn mx-1">
                                                <?= date('h:i a', strtotime($wkThirteen_fix['time']));?>
                                            </button>
                                            <?php }else{?>
                                            <button type="button"
                                                class="btn btn-sm text-danger my-auto fixt-btn mx-1">VS</button>
                                            <?php }?>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkThirteen_fix['team2']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkThirteen_fix['team2'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ~~~~~~~~~~~~~ Results section~~~~~~~~~~~~~~~~~~~ -->
            <div class="col-lg-6">
                <div class="card px-2 mx-2">
                    <h4 class="card-title fs-4 text-primary fw-bolder">Results</h4>
                    <div class="accordion" id="accordionResults">

                        <!--*******************Week 1 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-one-results">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-one" aria-expanded="true"
                                    aria-controls="collapse-results-one">
                                    <?php if (date("d/m/Y") == "04/08/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title fs-6">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 1

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 04<sup>th</sup>
                                                Aug, 2024</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>

                            <div id="collapse-results-wk-one" class="accordion-collapse collapse show"
                                aria-labelledby="week-one-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkOne_results = mysqli_fetch_assoc($resultsWeekOne_run)) { ?>

                                        <div class="card mx-0 shadow" data-bs-toggle="modal" data-bs-target="#singleResultModalDialog<?php echo $wkOne_results['id'] ?>">

                                            <div class="d-flex justify-content-center my-auto p-2">
                                                <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                        <?=$wkOne_results['home_team'];?>
                                                    </i></h4>

                                                <img class="fix-team-img my-auto rounded-circle"
                                                    src="../assets/img/teams/<?=lcfirst($wkOne_results['home_team']);?>.png"
                                                    alt="">

                                                <div class="d-block text-center">
                                                    <button type="button"
                                                        class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                        <span>
                                                            <?=$wkOne_results['home_team_goals'];?>
                                                        </span>
                                                        <strong class="mx-1">-</strong>
                                                        <span>
                                                            <?=$wkOne_results['away_team_goals'];?>
                                                        </span>
                                                    </button>

                                                    <?php if($wkOne_results['win_type'] == 'Walkover'){
                                                            ?>
                                                    <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                    <?php } ?>
                                                </div>

                                                <img class="fix-team-img my-auto me-1 rounded-circle"
                                                    src="../assets/img/teams/<?=lcfirst($wkOne_results['away_team']);?>.png"
                                                    alt="">

                                                <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                        <?=$wkOne_results['away_team'];?>
                                                    </i></h4>
                                            </div>
                                        </div>


                                        <!-- Modal -->
                                        <div class="row col-md-8 modal fade modal-player" id="singleResultModalDialog<?php echo $wkOne_results['id'];?>" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="card-title">Result Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>

                                                    <div class="modal-body ">
                                                        <h4 class="mb-2 fw-bolder fs-6">Matchday: <?=$wkOne_results['match_date'];?></h4>
                                                        
                                                        <div class="row">
                                                            <!-- Home team details -->
                                                            <div class="col-lg-6 shadow ps-4" style="border: 2px solid re">
                                                                <img class="mb-2 fix-team-img my-auto rounded-circle" src="../assets/img/teams/<?=lcfirst($wkOne_results['home_team']);?>.png" alt="">

                                                                <h4 class="mb-2 fw-bolder active-wk my-auto team-text">
                                                                    <i><?=$wkOne_results['away_team'];?> FC</i>
                                                                 </h4>

                                                                <h4 class="mb-2 fw-bolder team-text">Goals: <span><b><?=$wkOne_results['home_team_goals'];?></b></span></h4>
                                                                <h4 class="mb-2 fw-bolder team-text">Lady Played: <span><b>
                                                                    <?php
                                                                        if($wkOne_results   ['home_team_lady_played'] == 0){
                                                                            echo "No";
                                                                        }else{
                                                                            echo "Yes";
                                                                        }
                                                                    ?>
                                                                </b></span></h4>

                                                                <!-- <hr>
                                                                <h5 class="text-success">Scorers</h5>
                                                                <label class="ms-4">Herbert 3</label><br>
                                                                <label class="ms-4">Peter 2</label><br>
                                                                <label class="ms-4">Isaac 1</label><br> -->
                                                            </div>
                                                            <!-- away team details -->
                                                            <div class="col-lg-6 shadow" style="border: 2px solid re">
                                                                <img class="mb-2 fix-team-img my-auto rounded-circle" src="../assets/img/teams/<?=lcfirst($wkOne_results['away_team']);?>.png" alt="">
                                                                <h4 class="mb-2 fw-bolder active-wk my-auto team-text">
                                                                    <i><?=$wkOne_results['away_team'];?> FC</i>
                                                                 </h4>
                                                                <h4 class="mb-2 fw-bolder team-text">Goals: <span><b><?=$wkOne_results['away_team_goals'];?></b></span></h4>
                                                                <h4 class="mb-2 fw-bolder team-text">Lady Played: <span><b>
                                                                    <?php
                                                                        if($wkOne_results   ['home_team_lady_played'] == 0){
                                                                            echo "No";
                                                                        }else{
                                                                            echo "Yes";
                                                                        }
                                                                    ?>
                                                                </b></span></h4>
                                                            </div>

                                                            <!-- Scorers -->

                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    </div>
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
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-two" aria-expanded="false"
                                    aria-controls="collapse-results-two">
                                    <?php if (date("d/m/Y") == "18/08/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 2

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 18<sup>th</sup>
                                                Aug, 2024</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-two" class="accordion-collapse collapse"
                                aria-labelledby="week-two-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkTwo_results = mysqli_fetch_assoc($resultsWeekTwo_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">
                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkTwo_results['home_team'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkTwo_results['home_team']);?>.png"
                                                alt="">

                                            <div class="d-block text-center">
                                                <button type="button"
                                                    class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                    <span>
                                                        <?=$wkTwo_results['home_team_goals'];?>
                                                    </span>
                                                    <strong class="mx-1">-</strong>
                                                    <span>
                                                        <?=$wkTwo_results['away_team_goals'];?>
                                                    </span>
                                                </button>

                                                <?php if($wkTwo_results['win_type'] == 'Walkover'){
                                                        ?>
                                                <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                <?php } ?>
                                            </div>

                                            <img class="fix-team-img my-auto me-1 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkTwo_results['away_team']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkTwo_results['away_team'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 3 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-three-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-three" aria-expanded="false"
                                    aria-controls="collapse-results-three">
                                    <?php if (date("d/m/Y") == "01/09/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 3

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 01<sup>st</sup>
                                                Sept, 2024</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-three" class="accordion-collapse collapse"
                                aria-labelledby="week-three-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkThree_results = mysqli_fetch_assoc($resultsWeekThree_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">
                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkThree_results['home_team'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkThree_results['home_team']);?>.png"
                                                alt="">

                                            <div class="d-block text-center">
                                                <button type="button"
                                                    class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                    <span>
                                                        <?=$wkThree_results['home_team_goals'];?>
                                                    </span>
                                                    <strong class="mx-1">-</strong>
                                                    <span>
                                                        <?=$wkThree_results['away_team_goals'];?>
                                                    </span>
                                                </button>

                                                <?php if($wkThree_results['win_type'] == 'Walkover'){
                                                        ?>
                                                <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                <?php } ?>
                                            </div>

                                            <img class="fix-team-img my-auto me-1"
                                                src="../assets/img/teams/<?=lcfirst($wkThree_results['away_team']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkThree_results['away_team'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 4 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-four-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-four" aria-expanded="false"
                                    aria-controls="collapse-results-four">
                                    <?php if (date("d/m/Y") == "15/09/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 4

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 15<sup>th</sup>
                                                Sept, 2024</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-four" class="accordion-collapse collapse"
                                aria-labelledby="week-four-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">

                                    <?php while ($wkFour_results = mysqli_fetch_assoc($resultsWeekFour_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">
                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkFour_results['home_team'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkFour_results['home_team']);?>.png"
                                                alt="">

                                            <div class="d-block text-center">
                                                <button type="button"
                                                    class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                    <span>
                                                        <?=$wkFour_results['home_team_goals'];?>
                                                    </span>
                                                    <strong class="mx-1">-</strong>
                                                    <span>
                                                        <?=$wkFour_results['away_team_goals'];?>
                                                    </span>
                                                </button>

                                                <?php if($wkFour_results['win_type'] == 'Walkover'){
                                                        ?>
                                                <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                <?php } ?>
                                            </div>

                                            <img class="fix-team-img my-auto me-1 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkFour_results['away_team']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkFour_results['away_team'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                        <!--*******************Week 5 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-five-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-five" aria-expanded="false"
                                    aria-controls="collapse-results-five">
                                    <?php if (date("d/m/Y") == "29/09/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 5

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 29<sup>th</sup>
                                                Sept, 2024</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-five" class="accordion-collapse collapse"
                                aria-labelledby="week-five-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkFive_results = mysqli_fetch_assoc($resultsWeekFive_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">
                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkFive_results['home_team'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkFive_results['home_team']);?>.png"
                                                alt="">

                                            <div class="d-block text-center">
                                                <button type="button"
                                                    class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                    <span>
                                                        <?=$wkFive_results['home_team_goals'];?>
                                                    </span>
                                                    <strong class="mx-1">-</strong>
                                                    <span>
                                                        <?=$wkFive_results['away_team_goals'];?>
                                                    </span>
                                                </button>

                                                <?php if($wkFive_results['win_type'] == 'Walkover'){
                                                        ?>
                                                <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                <?php } ?>
                                            </div>

                                            <img class="fix-team-img my-auto me-1 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkFive_results['away_team']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkFive_results['away_team'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 6 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-six-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-six" aria-expanded="false"
                                    aria-controls="collapse-results-six">
                                    <?php if (date("d/m/Y") == "13/10/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 6

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 13<sup>th</sup>
                                                Oct, 2024</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-six" class="accordion-collapse collapse"
                                aria-labelledby="week-six-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkSix_results = mysqli_fetch_assoc($resultsWeekSix_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">
                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkSix_results['home_team'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkSix_results['home_team']);?>.png"
                                                alt="">

                                            <div class="d-block text-center">
                                                <button type="button"
                                                    class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                    <span>
                                                        <?=$wkSix_results['home_team_goals'];?>
                                                    </span>
                                                    <strong class="mx-1">-</strong>
                                                    <span>
                                                        <?=$wkSix_results['away_team_goals'];?>
                                                    </span>
                                                </button>

                                                <?php if($wkSix_results['win_type'] == 'Walkover'){
                                                        ?>
                                                <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                <?php } ?>
                                            </div>

                                            <img class="fix-team-img my-auto me-1 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkSix_results['away_team']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkSix_results['away_team'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="my-4" style="width: 50%; border: 2px solid blac; margin: auto">
                            <h2 class="text-danger fw-bolder fs-4 f" style="text-align: center">SECOND ROUND</h2>
                        </div>

                        <!--*******************Week 7 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-seven-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-seven" aria-expanded="false"
                                    aria-controls="collapse-results-seven">
                                    <?php if (date("d/m/Y") == "08/12/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder fixres-title">
                                            <?php }?> Matchday 7

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 8<sup>th</sup>
                                                Dec, 2024</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-seven" class="accordion-collapse collapse"
                                aria-labelledby="week-seven-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkSeven_results = mysqli_fetch_assoc($resultsWeekSeven_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">
                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkSeven_results['home_team'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkSeven_results['home_team']);?>.png"
                                                alt="">

                                            <div class="d-block text-center">
                                                <button type="button"
                                                    class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                    <span>
                                                        <?=$wkSeven_results['home_team_goals'];?>
                                                    </span>
                                                    <strong class="mx-1">-</strong>
                                                    <span>
                                                        <?=$wkSeven_results['away_team_goals'];?>
                                                    </span>
                                                </button>

                                                <?php if($wkSeven_results['win_type'] == 'Walkover'){
                                                        ?>
                                                <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                <?php } ?>
                                            </div>

                                            <img class="fix-team-img my-auto me-1 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkSeven_results['away_team']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkSeven_results['away_team'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 8 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-eight-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-eight" aria-expanded="false"
                                    aria-controls="collapse-results-eight">
                                    <?php if (date("d/m/Y") == "10/11/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 8

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 10<sup>th</sup>
                                                Nov, 2024</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-eight" class="accordion-collapse collapse"
                                aria-labelledby="week-eight-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkEight_results = mysqli_fetch_assoc($resultsWeekEight_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">
                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkEight_results['home_team'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkEight_results['home_team']);?>.png"
                                                alt="">

                                            <div class="d-block text-center">
                                                <button type="button"
                                                    class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                    <span>
                                                        <?=$wkEight_results['home_team_goals'];?>
                                                    </span>
                                                    <strong class="mx-1">-</strong>
                                                    <span>
                                                        <?=$wkEight_results['away_team_goals'];?>
                                                    </span>
                                                </button>

                                                <?php if($wkEight_results['win_type'] == 'Walkover'){
                                                        ?>
                                                <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                <?php } ?>
                                            </div>

                                            <img class="fix-team-img my-auto me-1 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkEight_results['away_team']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkEight_results['away_team'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 9 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-nine-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-nine" aria-expanded="false"
                                    aria-controls="collapse-results-nine">
                                    <?php if (date("d/m/Y") == "24/11/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 9

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 24<sup>th</sup>
                                                Nov, 2024</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-nine" class="accordion-collapse collapse"
                                aria-labelledby="week-nine-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkNine_results = mysqli_fetch_assoc($resultsWeekNine_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">
                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkNine_results['home_team'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkNine_results['home_team']);?>.png"
                                                alt="">

                                            <div class="d-block text-center">
                                                <button type="button"
                                                    class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                    <span>
                                                        <?=$wkNine_results['home_team_goals'];?>
                                                    </span>
                                                    <strong class="mx-1">-</strong>
                                                    <span>
                                                        <?=$wkNine_results['away_team_goals'];?>
                                                    </span>
                                                </button>

                                                <?php if($wkNine_results['win_type'] == 'Walkover'){
                                                        ?>
                                                <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                <?php } ?>
                                            </div>

                                            <img class="fix-team-img my-auto me-1 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkNine_results['away_team']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkNine_results['away_team'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 10 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-ten-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-ten" aria-expanded="false"
                                    aria-controls="collapse-results-ten">
                                    <?php if (date("d/m/Y") == "08/12/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 10

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 08<sup>th</sup>
                                                Dec, 2024</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-ten" class="accordion-collapse collapse"
                                aria-labelledby="week-ten-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkTen_results = mysqli_fetch_assoc($resultsWeekTen_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">
                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkTen_results['home_team'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkTen_results['home_team']);?>.png"
                                                alt="">

                                            <div class="d-block text-center">
                                                <button type="button"
                                                    class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                    <span>
                                                        <?=$wkTen_results['home_team_goals'];?>
                                                    </span>
                                                    <strong class="mx-1">-</strong>
                                                    <span>
                                                        <?=$wkTen_results['away_team_goals'];?>
                                                    </span>
                                                </button>

                                                <?php if($wkTen_results['win_type'] == 'Walkover'){
                                                        ?>
                                                <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                <?php } ?>
                                            </div>

                                            <img class="fix-team-img my-auto me-1 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkTen_results['away_team']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkTen_results['away_team'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 11 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-eleven-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-eleven" aria-expanded="false"
                                    aria-controls="collapse-results-eleven">
                                    <?php if (date("d/m/Y") == "22/12/2024") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 11

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 22<sup>nd</sup>
                                                Dec, 2024</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-eleven" class="accordion-collapse collapse"
                                aria-labelledby="week-eleven-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkEleven_results = mysqli_fetch_assoc($resultsWeekEleven_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">
                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkEleven_results['home_team'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkEleven_results['home_team']);?>.png"
                                                alt="">

                                            <div class="d-block text-center">
                                                <button type="button"
                                                    class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                    <span>
                                                        <?=$wkEleven_results['home_team_goals'];?>
                                                    </span>
                                                    <strong class="mx-1">-</strong>
                                                    <span>
                                                        <?=$wkEleven_results['away_team_goals'];?>
                                                    </span>
                                                </button>

                                                <?php if($wkEleven_results['win_type'] == 'Walkover'){
                                                        ?>
                                                <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                <?php } ?>
                                            </div>

                                            <img class="fix-team-img my-auto me-1 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkEleven_results['away_team']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkEleven_results['away_team'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 12 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-twelve-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-twelve" aria-expanded="false"
                                    aria-controls="collapse-results-twelve">
                                    <?php if (date("d/m/Y") == "05/01/2025") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 12

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 5<sup>th</sup>
                                                Jan, 2025</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-twelve" class="accordion-collapse collapse"
                                aria-labelledby="week-twelve-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkTwelve_results = mysqli_fetch_assoc($resultsWeekTwelve_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">
                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkTwelve_results['home_team'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkTwelve_results['home_team']);?>.png"
                                                alt="">

                                            <div class="d-block text-center">
                                                <button type="button"
                                                    class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                    <span>
                                                        <?=$wkTwelve_results['home_team_goals'];?>
                                                    </span>
                                                    <strong class="mx-1">-</strong>
                                                    <span>
                                                        <?=$wkTwelve_results['away_team_goals'];?>
                                                    </span>
                                                </button>

                                                <?php if($wkTwelve_results['win_type'] == 'Walkover'){
                                                        ?>
                                                <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                <?php } ?>
                                            </div>

                                            <img class="fix-team-img my-auto me-1 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkTwelve_results['away_team']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkTwelve_results['away_team'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!--*******************Week 13 *************************** -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="week-thirteen-results">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-results-wk-thirteen" aria-expanded="false"
                                    aria-controls="collapse-results-thirteen">
                                    <?php if (date("d/m/Y") == "05/01/2025") {?>
                                    <h6 class="fw-bolder active-wk fixres-title">
                                        <?php } else{?>
                                        <h6 class="fw-bolder  fixres-title">
                                            <?php }?> Matchday 13

                                            <span class="text-dark fs-6"><i
                                                    class="ms-2 bi bi-calendar-fill text-secondary"></i> 19<sup>th</sup>
                                                Jan, 2025</span>
                                        </h6>
                                    </h6>
                                </button>
                            </h2>
                            <div id="collapse-results-wk-thirteen" class="accordion-collapse collapse"
                                aria-labelledby="week-thirteen-results" data-bs-parent="#accordionResults">
                                <div class="accordion-body">
                                    <?php while ($wkThirteen_results = mysqli_fetch_assoc($resultsWeekThirteen_run)) { ?>
                                    <div class="card mx-0 shadow" style="border: 2px solid re">
                                        <div class="d-flex justify-content-center my-auto p-2">
                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkThirteen_results['home_team'];?>
                                                </i></h4>

                                            <img class="fix-team-img my-auto rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkThirteen_results['home_team']);?>.png"
                                                alt="">


                                            <div class="d-block text-center">
                                                <button type="button"
                                                    class="btn btn-sm px-2 bg-success my-auto mx-1 d-flex">
                                                    <span>
                                                        <?=$wkThirteen_results['home_team_goals'];?>
                                                    </span>
                                                    <strong class="mx-1">-</strong>
                                                    <span>
                                                        <?=$wkThirteen_results['away_team_goals'];?>
                                                    </span>
                                                </button>

                                                <?php if($wkThirteen_results['win_type'] == 'Walkover'){
                                                        ?>
                                                <p class="text-danger mt-0 pt-0 text-center">Walkover</p>

                                                <?php } ?>
                                            </div>

                                            <img class="fix-team-img my-auto me-1 rounded-circle"
                                                src="../assets/img/teams/<?=lcfirst($wkThirteen_results['away_team']);?>.png"
                                                alt="">

                                            <h4 class="fw-bolder active-wk my-auto team-text"><i>
                                                    <?=$wkThirteen_results['away_team'];?>
                                                </i></h4>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ~~~~~~~~~~~~~ End of Results section~~~~~~~~~~~~~~~~~~~ -->
        </div>

    </div>

    <!-- ============== Footer -->
    <?php include('../inc/footer.php'); ?>
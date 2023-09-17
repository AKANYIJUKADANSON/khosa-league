<?php

include('../admin/config.php');

$query_clubs = "SELECT * FROM clubs";
$query_clubs_run = mysqli_query($conn, $query_clubs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHOSA | Teams</title>

    <?php include('../inc/header-links.php'); ?>


</head>

<body>
    <div class="hero-mini mb-4" style="border: 2px solid green;">
        <?php include('../inc/nav-bars.php'); ?>

    </div>
    <!-- ==================End of hero div================== -->

    <div class="la-container d-block m-auto justify-content-center">
        <div class="d-flex justify-content-center">
            <h1 class="text-white heading-text-about"> Clubs</h1>
        </div>
        <h4 class="d-flex justify-content-center text-white"> KHOSA League is made up of sixteen clubs</h4>

    </div>

    <div class="row mt-4 mx-1" style="border: 2px solid red;">




            <div class="container" data-aos="fade-up">

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <?php while ($team = mysqli_fetch_assoc($query_clubs_run)) { ?>
                        <div class="col-lg-3">

                            <div class="card teamcard">
                                <div class="cardheader">
                                    <img src="../assets/img/hero1.jpg" alt="">
                                </div>
                                <div class="avatar">
                                    <img alt="" src="../assets/img/teams/<?= $team['logo']; ?>">
                                </div>
                                <div class="info">
                                    <h2><?= $team['name']; ?></h2>
                                    <h3>EST: <span>2012</span></h3>
                                </div>

                                <div style="margin-bottom: 10px;">
                                    <a class="btn btn-danger" href="single-team.php?team=<?= $team['name']; ?>">More</a>
                                </div>
                            </div>

                        </div>
                    <?php } ?>

                </div>

            </div>

    </div>
    <!-- ==================End of hero div================== -->

    <!-- ==================Start of foorter div================== -->
    <?php include("../inc/footer.php"); ?>

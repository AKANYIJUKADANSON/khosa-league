<?php

include('../admin/config.php');

// Geting clubs data
$query_clubs = "SELECT * FROM clubs";
$query_clubs_run = mysqli_query($conn, $query_clubs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHOSA - About</title>

    <?php include('../inc/header-links.php'); ?>

</head>

<body>

    <div class="hero-mini mb-4">
        <?php include('../inc/nav-bars.php'); ?>

    </div>
    <!-- ==================End of hero div================== -->

    <div class="la-container-about">
        <div class="d-flex justify-content-center">
            <h1 class="text-white heading-text-about">About</h1>
        </div>

    </div>

    <!-- ==================End of hero div================== -->
    <div class="row mt-4 mx-1" >
        <!-- Left side columns -->
        <div class="col-lg-6 mb-4">
            <div class="row">
                <img src="../assets/img/logo.png" alt="" srcset="">
            </div>
        </div>

        <!-- Right side columns -->
        <div class="col-lg-6">

            <!-- Results Card -->
            <div class="results">
                <!-- <div class="bg-success"> -->
                <h1 class="about-right-heading my-4 ps-4 text-center">KHOSA LEAGUE</h1>

                <div class="mx-4 about-details">
                    <p>
                        KHOSA (<span class="text-primary">Kigezi High School Old Students Association</span>) is soccer league in Uganda, Africa that units teams from Kigezi High School for all the years the school has been in existance, 100+ years now and every team is formed according to the year of entry.
                    </p>
                    <p>
                        The league acts as a point of networking, sharing knowledge and memories plus having fun as O.Bs and O.Gs through sport.
                    </p>
                </div>
            </div>

        </div>

    </div>
    <!-- ==================End of hero div================== -->

    <!-- ==================End of hero div================== -->
    <div class="row mt-4 mx-1">



        <!-- <section id="portfolio" class="portfolio"> -->

        <div class="section-title text-center">
            <div class="card-title text-center"><h1><b>Clubs</b></h1></div>
            <hr class="w-500 mb-4">
        </div>

        <div class="container" data-aos="fade-up">

            <div class="row">

                <?php while ($team = mysqli_fetch_assoc($query_clubs_run)) { ?>
                    
                        <div class="col-lg-3">
                        <a href="single-team.php?team=<?= $team['name']; ?>">
                            <div class="card d-flex" style="background-color: #e9e9e9;">
                                <div class="card-header d-flex justify-content-center">
                                    <img class="m-4" width="200" height="220" src="../assets/img/teams/<?= $team['logo']; ?>" alt="">
                                </div>

                                <div class="card-body">
                                    <div class="text-dark my-4">
                                        <h2><?= $team['name']; ?> FC</h2>
                                        <h5>EST <span><b><?= $team['est']; ?></b></span></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                <?php } ?>

            </div>

        </div>
        <!-- </section> -->

    </div>
    <!-- ==================End of hero div================== -->


    <!-- ====================Sponsors======================== -->
         
    <div class="row mt-4 mx-1 " >
        <div class="card-title text-center">
            <h4><b>Sponsors</b></h4>
            <hr>
        </div>
        <div class="d-flex justify-content-center bg-white m-2 mb-4">

            <div class="slide-container swiper bg-transparent" >
            <div class="slide-content bg-transparent" style="padding-right: 50px; background-color: green">
                <div class="swiper-wrapper mx-4 bg-transparent" style="border: 2px solid deepskyblue">
                <?php 
                $query_sponsors = "SELECT * FROM sponsors WHERE status = 'Active' ";
                    $query_sponsors_run = mysqli_query($conn, $query_sponsors);
                while ($sponsor = mysqli_fetch_assoc($query_sponsors_run)) { ?>
                    <div class="card swiper-slide bg-transparent">
                        <div class="col">
                            <div class="card-body my-auto pt-4 bg-transparent">
                            <center><img class="rounded-circle" width="100" height="100" src="../assets/img/sponsors/<?= $sponsor['logo']; ?>" alt=""></center>
                                <p class="fs-6 text-center"><?=$sponsor['sponsor'];?> <br> <span class="fs-4"> <?= $sponsor['team'];?> FC </span></p>
                            </div>
                    </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            </div>

        </div>
    </div>


    <!-- ~~~~~~~~~~~~~~~~~~TEAM~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- <div class="row mt-4 mx-1 bg-success" >
        <div class="card-title text-center">
            <h4><b>Sponsors</b></h4>
            <hr>
        </div>
        <div class="d-flex justify-content-center bg-white m-2 mb-4">

            <div class="slide-container swiper bg-transparent" >
                <div class="slide-content bg-transparent" style="padding-right: 50px; background-color: green">
                    <div class="swiper-wrapper mx-4 bg-transparent" style="border: 2px solid deepskyblue">
                    <?php 
                    // $query_mgt = "SELECT * FROM management";
                    //     $query_mgt_run = mysqli_query($conn, $query_mgt);
                    // while ($member = mysqli_fetch_assoc($query_mgt_run)) { ?>
                        <div class="card swiper-slide bg-transparent">
                            <div class="col">
                                <div class="card-body my-auto pt-4 bg-transparent">
                                <center><img class="rounded-circle" width="100" height="100" src="../assets/img/sponsors/<?php // $member['image']; ?>" alt=""></center>
                                    <p class="fs-6 text-center"><?php //$member['name'];?></p>
                                </div>
                        </div>
                        </div>
                    <?php //} ?>
                    </div>
                </div>
            </div>

        </div>
    </div> -->


    <!-- ==================Start of foorter div================== -->
    <?php include('../inc/footer.php'); ?>
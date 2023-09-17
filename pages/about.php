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
    <!-- <div class=" mb-4" style="border: 2px solid green;">
        <?php //include('../inc/nav-bars.php'); ?>
        <div class="la-container-about d-flex justify-content-center">
            <h1 class="text-white heading-text-about">About</h1>
        </div>
    </div> -->

    <div class="hero-mini mb-4" style="border: 2px solid green;">
        <?php include('../inc/nav-bars.php'); ?>

    </div>
    <!-- ==================End of hero div================== -->

    <div class="la-container-about">
        <div class="d-flex justify-content-center">
            <h1 class="text-white heading-text-about">About</h1> 
        </div>
               
    </div>

    <!-- ==================End of hero div================== -->
    <div class="row mt-4 mx-1" style="border: 2px solid red;">
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
                <h1 class="about-right-heading my-4 ps-4">KHOSA LEAGUE</h1>

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
    <div class="row mt-4 mx-1" style="border: 2px solid red;">



    <section id="portfolio" class="portfolio">

        <div class="section-title text-center">
            <h2 class="w-500 my-4">Clubs</h2>
            <hr class="w-500 mb-4">
        </div>

        <div class="container" data-aos="fade-up">

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <?php while($team = mysqli_fetch_assoc($query_clubs_run)){?>
                    <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="../assets/img/teams/<?=$team['logo']; ?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h2 class="text-white"><?=$team['name']; ?></h2>
                                <h5 class="text-white">EST <span><b><?=$team['est']; ?></b></span></h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>
    </section>

    </div>
    <!-- ==================End of hero div================== -->

    <!-- ==================Start of foorter div================== -->
    <?php include('../inc/footer.php'); ?>
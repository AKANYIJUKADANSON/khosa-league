<?php

include('../admin/config.php');
$selectedTeam = $_GET['team'];

$query_clubs = "SELECT * FROM clubs";
$query_clubs_run = mysqli_query($conn, $query_clubs);

$query_gallery = "SELECT * FROM gallery WHERE club LIKE '%$selectedTeam%' ";
$query_gallery_run = mysqli_query($conn, $query_gallery);

// get data for the selected team
$selectedClub = "SELECT * FROM clubs WHERE name = '$selectedTeam' ";
$query_selectedClub_run = mysqli_query($conn, $selectedClub);
$selectedClubData = mysqli_fetch_assoc($query_selectedClub_run);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHOSA - sTeam</title>

    <?php include('../inc/header-links.php'); ?>

</head>

<body>
    <div class="hero-mini mb-4" style="border: 2px solid green;">
        <?php include('../inc/nav-bars.php'); ?>

    </div>
    <!-- ==================End of hero div================== -->

    <div class="la-container-single-team d-block m-auto justify-content-center">
        <div class="d-flex justify-content-center">
            <h1 class="text-center text-white heading-text-about"> <?php echo $selectedTeam." FC" ?></h1>
        </div>
    </div>

    <!-- ==================End of hero div================== -->
    <div class="row mt-4 mx-1" style="border: 2px solid red;">
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
                        <b><span style="color: deepskyblue; font-size: 25px;"><?=$selectedClubData['name'];?> Football Club</span></b>
                        <?=$selectedClubData['about'];?>

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
                <h2 class="w-500 my-4">Gallery</h2>
                <hr class="w-500 mb-4">
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <?php while ($gallery = mysqli_fetch_assoc($query_gallery_run)) { ?>
                        <div class="col-lg-4">

                            <div class="card teamcard">
                                <img src="../assets/img/gallery/<?=$gallery['image'];?> " alt="">
                                <p class="mt-2"><em><?=$gallery['caption'];?></em></p>
                            </div>

                        </div>
                    <?php } ?>
                    

                </div>

            </div>
        </section>

    </div>
    <!-- ==================End of hero div================== -->

    <!-- ==================Start of foorter div================== -->
    <?php include("../inc/footer.php"); ?>
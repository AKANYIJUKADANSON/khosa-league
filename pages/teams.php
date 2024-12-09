<?php

include('../admin/config.php');

$query_clubs = "SELECT * FROM teams";
$query_clubs_run = mysqli_query($conn, $query_clubs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clubs</title>

    <?php include('../inc/header-links.php'); ?>
</head>

<body>
    <div class="hero-mini mb-4">
        <?php include('../inc/nav-bars.php'); ?>
    </div>
    <!-- ==================End of hero div================== -->

    <div class="la-container-team d-flex m-auto align-items-center justify-content-center mb-4">
        <h4 class="text-white heading-text-teams"> Clubs</h4>
    </div>

    <div class="row mt-4 mx-1" style="border: 2px solid re">
            <?php while ($team = mysqli_fetch_assoc($query_clubs_run)) { ?>
                <div class="col-lg-3">

                    <div class="card teamcard">
                        <div class="cardheader mb-4">
                            <img class="team-wallpaper" src="../assets/img/wallpaper<?= $team['name'];?>.png" alt="<?=$team['name'];?> FC">
                            
                        </div>
                        <div class="avatar">
                            <img alt="" src="../assets/img/teams/<?= $team['logo']; ?>">
                        </div>
                        <div class="info">
                            <h3 class="fw-bolder"><?= $team['name']; ?> FC</h3>
                            <h3 class="text-secondary fs-5">EST: <span><?= $team['est']; ?></h3></span></h3>
                        </div>

                        <div style="margin-bottom: 10px;">
                            <a class="btn px-4" href="single-team.php?team=<?= $team['name']; ?>">More</a>
                        </div>
                    </div>

                </div>
            <?php } ?>

    </div>
    <!-- ==================End of hero div================== -->

    <!-- ==================Start of foorter div================== -->
    <?php include("../inc/footer.php"); ?>
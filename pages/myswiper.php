<?php
include('../admin/config.php');
// Fetching the table
$query_clubs = "SELECT * FROM clubs";
$query_clubs_run = mysqli_query($conn, $query_clubs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> -->
    <!-- <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" /> -->

    <?php include('../inc/header-links.php'); ?>


    <!-- Demo styles -->
    <style>
        .swiper-slide {
            border: 4px solid red;
            /* display: flex;
            align-items: center;
            flex-direction: column-reverse; */
        }

        .card-body {
            display: flex;
            align-items: center;
            flex-direction: column-reverse;
        }

        .swiper {
            height: auto;
        }
    </style>
</head>

<body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <span class="slide-content">
            <div class="swiper-wrapper">
                <?php while ($row = mysqli_fetch_assoc($query_clubs_run)) { ?>

                    <div class="card swiper-slide pt-2">
                        <div class="card-body">
                            <video width="50%" controls>
                                <source src="../assets/img/newsAndUpdates/gwajwaVSelites.mp4" type="video/mp4">
                                <source src="../assets/img/newsAndUpdates/gwajwaVSelites.0gg" type="video/ogg">
                            </video>
                            <p><u><?= $row['name']; ?></u></p>
                        </div>
                    </div>

                <?php } ?>


            </div>
                </span>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->
    <script src="../assets/js/swiper-bundle.min.js"></script>

    <!-- ============== Footer -->
    <?php include('../inc/footer.php'); ?>
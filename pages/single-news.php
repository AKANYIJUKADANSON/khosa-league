<?php

include('../admin/config.php');


// Selected news id
$news_id = $_GET['news_id'];

// fetch posts/news
$query_news = "SELECT * FROM news WHERE id != '$news_id' ORDER BY 'created_on'";
$query_news_run = mysqli_query($conn, $query_news);

// fetch results
$single_news = "SELECT * FROM news WHERE id = '$news_id' ";
$single_news_run = mysqli_query($conn, $single_news);
$news_row = mysqli_fetch_assoc($single_news_run);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHOSA|Posts</title>

    <?php include('../inc/header-links.php'); ?>

</head>

<body>

    <div class="hero-mini mb-4" style="border: 2px solid green;">
        <?php include('../inc/nav-bars.php'); ?>

    </div>
    <!-- ==================End of hero div================== -->

    <!-- ==================End of hero div================== -->
    <div class="row mt-4 mx-1" style="border: 2px solid red;">
        <!-- Left side columns -->
        <div class="col-lg-5 mb-4">
            <div class="row">
                <img height="500vh" width="100%" src="../assets/img/newsAndUpdates/<?= $news_row['image_file']; ?>" alt="" srcset="">
            </div>
        </div>

        <!-- Right side columns -->
        <div class="col-lg-4">
            <!-- Results Card -->
            <div class="results">
                <!-- <div class="bg-success"> -->
                <h3 class="ps-4 text-primary"><?= $news_row['title'] ?></h3>

                <div class="mx-4 about-deta">
                    <p>
                        <?= $news_row['body'] ?>
                    </p>
                </div>
            </div>

        </div>

        <div class="col-lg-3">
            <!-- News & Updates Traffic -->
            <div class="card bg-white">
                <div class="card-body pb-0" style="height: 100vh; overflow-y: auto">
                    <h5 class="card-title">News &amp; Updates</h5>
                    <?php while ($rows = mysqli_fetch_assoc($query_news_run)) { ?>
                        <div class="card py-2">
                            <div class="card-body">
                                <div class="">
                                    <img height="90" width="90" class="m-auto rounded-circle" src='../assets/img/newsAndUpdates/<?= $rows['image_file']; ?>' alt="">
                                    <div class="d-block text-black">
                                        <h3><b><span><a class="text-primary" href="single-news.php?news_id=<?= $rows['id'] ?>"><?= $rows['title']; ?></a></span></b></h3>

                                        <p><?= $rows['body']; ?></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="justifly-content-start">
                                        <small>Last updated </small>
                                        <small class="text-muted"><?= $rows['created_on']; ?></small>
                                        <a href="single-news.php?news_id=<?= $rows['id'] ?>" class="float-end btn btn-sm btn-danger">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>

                <div class="d-flex justify-content-center my-4">
                    <a href="news.php" class="btn btn-success">MORE<i class="bi bi-arrow-right mx-2"></i></a>
                </div>
            </div>
            <!-- End News & Updates -->
        </div>

    </div>
    <!-- ==================End of hero div================== -->

    <!-- ====================Sponsors======================== -->
    <div class="row mt-4 mx-1" style="border: 2px solid red;">
        <div class="card-title text-center">
            <h4><b>Our Sponsors</b></h4>
        </div>
        <div class="d-flex justify-content-center bg-white m-2 mb-4">

            <!-- <marquee class="marquee"> -->
            <?php
            $query_sponsors = "SELECT logo FROM sponsors";
            $query_sponsors_run = mysqli_query($conn, $query_sponsors);

            while ($sponsor = mysqli_fetch_assoc($query_sponsors_run)) { ?>
                <a href="#" class="mx-4">
                    <img style="height: 100px; width: 100px; border-radius: 10%;" src="../assets/img/sponsors/<?= $sponsor['logo']; ?>" alt="">
                </a>
            <?php } ?>
            <!-- </marquee> -->

        </div>
    </div>


    <!-- ============== Footer -->
    <?php include('../inc/footer.php');

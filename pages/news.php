<?php

    include('../admin/config.php');

    // fetch posts/news
    $query_news = "SELECT * FROM news ORDER BY created_on DESC";
    $query_news_run = mysqli_query($conn, $query_news);

    // fetch results
    $query_results = "SELECT * FROM results";
    $query_results_run = mysqli_query($conn, $query_results);

    // fetch fixtures
    $query_fixtures = "SELECT * FROM fixtures LIMIT 3";
    $query_fixtures_run = mysqli_query($conn, $query_fixtures);

    // Fetching the table
    $query_KLtable = "SELECT * FROM KLtable LIMIT 6";
    $query_KLtable_run = mysqli_query($conn, $query_KLtable);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHOSA|News</title>

    <?php include('../inc/header-links.php'); ?>

</head>

<body>
  <div class="hero-mini mb-4" style="border: 2px solid green;">
    <?php include('../inc/nav-bars.php'); ?>

  </div>
  <!-- ==================End of hero div================== -->

  <div class="d-block m-auto justify-content-center">
    <div class="d-flex justify-content-center">
      <h2 class="text-center text-dark mb-4 mt-4">Latest News</h2>
    </div>

  </div>


        <!-- <div style="background-color: rgb(199, 236, 204); "> -->
            <!-- ==================Start of table & Posts div================== -->
            <div class="row px-1 pt-4">
                <!-- Left side columns -->
                <div class="col-lg-7 me-1" style="border: 2px solid red;">

                    <!-- table as standing -->
                    <h1 class="card-title">Popular</h1>

                    <!-- <div class="card bg-white">
                        <div class="card-body pb-0"> -->
                            
                            <?php while ($rows = mysqli_fetch_assoc($query_news_run)) { ?>
                                <div class="card py-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <img height="150" width="150" class="me-2 rounded-circle" src='../assets/img/newsAndUpdates/<?= $rows['image_file']; ?>' alt="">
                                            <div class="d-block text-black">
                                                <h4><b><span class="text-primary"><?= $rows['title']; ?></span></b></h4>

                                                <p><?= $rows['body']; ?></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="justifly-content-start">
                                                <small>Last updated </small>
                                                <small class="text-muted"><?= $rows['created_on']; ?></small>
                                                <a href="single-news.php?news_id=<?= $rows['id'] ?>" class="float-end btn btn-danger">Read</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                        <!-- </div>

                        <div class="d-flex justify-content-center mb-4">
                            <a href="table.php" class="btn btn-success">MORE POSTS<i class="bi bi-arrow-right mx-2"></i></a>
                        </div>
                    </div> -->
                    
                </div>

                <!-- Right side columns -->
                <div class="col-lg-4 home-news" style="border: 2px solid red;">
                    <!-- News & Updates Traffic -->

                    <!-- End News & Updates -->
                </div>

            </div>

        <!-- ============== Footer -->
        <?php include('../inc/footer.php');

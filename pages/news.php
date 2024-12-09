<?php

    include('../admin/config.php');

    // fetch posts/news
    $query_news = "SELECT * FROM news ORDER BY created_on DESC";
    $query_news_run = mysqli_query($conn, $query_news);

        // Social links
        $socialNews = "SELECT * FROM socialnews";
        $query_socialNews_run = mysqli_query($conn, $socialNews);

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
    <title>News</title>

    <?php include('../inc/header-links.php'); ?>

</head>

<body>
  <div class="hero-mini mb-4">
    <?php include('../inc/nav-bars.php'); ?>

  </div>
  <!-- ==================End of hero div================== -->


    <div class="bg-dange mb-4">


    <div id="la-container-news" class="d-flex align-items-center justify-content-center" >
        <h1 class="d-flex justify-content-center text-white text-center px-4 fs-1">News</h1>
    </div>

        <!-- ==================Start of table & Posts div================== -->
        <div style="border: 2px solid re;">
            <div class="row mx-1 mt-2">

            
                <div class="col-lg-8 mt-2" style=" border: 2px solid blac">
                    <h3 class="card-title fs-4 text-decoration-none text-primary"><b>Popular</b></h3>
                        
                    <?php while ($rows = mysqli_fetch_assoc($query_news_run)) { ?>
                        <div class="card py-2">
                            <div class="card-body">
                                <div class="d-flex">
                                    <img height="170" width="170" class="me-2 rounded-circle me-2" src='../assets/img/newsAndUpdates/<?= $rows['file_name']; ?>' alt="">
                                    <div class="d-block text-black">
                                        <h4><b><span class="text-primary"><?= $rows['title']; ?></span></b></h4>

                                        <p><?= $rows['body']; ?></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="justifly-content-start">
                                        <small>Last updated </small>
                                        <small class="text-muted"><?= $rows['created_on']; ?></small>
                                        <a type="button" href="single-news.php?news_id=<?= $rows['id'] ?>" class="float-end btn btn-danger btn-outline-primary">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>

                <div class="col-lg-4 bg-warnin mt-2" style=" border: 2px solid whit">
                    <h3 class="card-title fs-4 text-decoration-none ms-4 text-primary"><b><i class="bi bi-twitter me-2"></i>Tweets</b></h3>

                    <div class="card-body overflow-auto shadow-lg pt-2" style="height: 160vh; ">

                        <div class="card shadow">
                            <div class="card-body">
                                <a class="twitter-timeline" data-theme="light" href="https://twitter.com/KhosaTrolls?ref_src=twsrc%5Etfw">Tweets by KhosaTrolls</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            
        </div>
        
    </div>
    <!-- ============== Footer -->
    <?php include('../inc/footer.php');

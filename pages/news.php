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
    <title>KHOSA|News</title>

    <?php include('../inc/header-links.php'); ?>

</head>

<body>
  <div class="hero-mini mb-4">
    <?php include('../inc/nav-bars.php'); ?>

  </div>
  <!-- ==================End of hero div================== -->



    <div class="la-container-news d-block m-auto justify-content-center">
        <div class="d-flex justify-content-center">
        <h2 class="text-center text-white heading-text-about mb-4">Blog</h2>
        </div>
        <h4 class="d-flex justify-content-center text-white">Check on the latest news about the KHOSA League</h4>
    </div>



            <!-- ==================Start of table & Posts div================== -->
            <div class="row px-1 pt-4">
                <!-- Left side columns -->
                <div class="col-lg-8 ps-4 overflow-auto" >

                    <!-- table as standing -->
                     <h3 class="card-title fs-4 text-decoration-none text-primary"><b>Popular</b></h3>

                    <!-- <div class="card bg-white">
                        <div class="card-body pb-0"> -->
                            
                            <?php while ($rows = mysqli_fetch_assoc($query_news_run)) { ?>
                                <div class="card py-2">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <img height="150" width="150" class="me-2 rounded-circle" src='../assets/img/newsAndUpdates/<?= $rows['file_name']; ?>' alt="">
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

                <!-- ~~~~~~~~~~~~Right side Social Media News ~~~~~~~~~~~~~~~~~~ -->
                <div class="col-lg-4 home-news">
                    <h3 class="card-title fs-4 text-decoration-none ms-4 text-primary"><b><i class="bi bi-twitter me-2"></i>Tweets</b></h3>

                        <div class="card-body overflow-auto shadow-lg pt-2" style="height: 160vh">

                            <div class="card shadow">
                                <div class="card-body">
                                    <a type="button" class="twitter-timeline" data-dnt="true" href="https://twitter.com/khosaleague?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </div>
                            </div>

                        </div>
                </div>

            </div>

        <!-- ============== Footer -->
        <?php include('../inc/footer.php');

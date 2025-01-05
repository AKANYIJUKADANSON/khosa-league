<?php

include('../admin/config.php');


// Selected news id
// $news_id = $_GET['update_news_id'];


// fetch results
// $single_news = "SELECT * FROM news WHERE id = '$update_news_id' ";
$single_news = "SELECT * FROM news WHERE id = 1 ";
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

    <!-- ==================End of hero div================== -->
    <div class="row mt-4 mx-1" style="border: 2px solid red;">

        <!-- Left side -->
        <div class="col-lg-6 bg-danger">
            <div class="card bg-success">
                <div class="card-body pb-0" style="height: 80vh;">
                    <h5 class="card-title">Update news</h5>




                </div>
            </div>
            <!-- End News & Updates -->
        </div>

        <!-- Right side columns -->
        <div class="col-lg-6" style="border: 2px solid green;">
            <!-- General Form Elements -->
            <form action="posts.php" method="post" enctype="multipart/form-data">

                <div class="row mb-3">
                    <label for="inputText">Post Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="file" value="../assets/img/newsAndUpdates/<?= $rows['image_file']; ?>">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputText">Post Image</label>

                    <input type="file" name="file" accept="image/*" onchange="loadFile(event)" required>
                    <img class="mt-2" id="output" width="200" />
                    <script>
                        var loadFile = function(event) {
                            var image = document.getElementById('output');
                            image.src = URL.createObjectURL(event.target.files[0]);
                        };
                    </script>
                </div>

                <div class="row mb-3">
                    <label for="inputText">Post Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" value="<?= $news_row['title']; ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="body" style="height: 100px" required></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-success">POST</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->
        </div>

    </div>
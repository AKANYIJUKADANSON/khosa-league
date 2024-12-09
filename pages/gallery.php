<?php

  include('../admin/config.php');

  // Fetching sponsors
  $query_sponsors = "SELECT * FROM sponsors WHERE status= 'Active'";
  $query_sponsors_run = mysqli_query($conn, $query_sponsors);

  $query_gallery = "SELECT * FROM gallery ORDER BY match_date DESC";
  $query_gallery_run = mysqli_query($conn, $query_gallery);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <title>Gallery</title>

  <?php include('../inc/header-links.php'); ?>

</head>

<body>

    <!-- ==================Start of Navigation div================== -->
    <?php include('../inc/nav-bars.php'); ?>
    <!-- ==================End of Navigation div================== -->

    <div class="la-container-team d-flex m-auto align-items-center justify-content-center mb-4">
        <div class="d-block">
            <h6 class="text-center"><i class="bi bi-images fs-1 text-white"></i></h6>
            <h4 class="text-white heading-text-teams">Gallery</h4>
        </div>
    </div>

    <div id="main" style="border: 2px solid re">

        <!-- ======= gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">

                <!-- <div class="section-title">
                    <h2 class="text-center my-2">gallery</h2>
                    <p class="text-center">Check on the latest gallery for different matchdays</p>
                </div> -->

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="gallery-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-week1" id="week1">Week 1</li>
                            <li data-filter=".filter-week2" id="week2">Week 2</li>
                            <li data-filter=".filter-week3" id="week3">Week 3</li>
                            <li data-filter=".filter-week4" id="week4">Week 4</li>
                            <li data-filter=".filter-week5" id="week5">Week 5</li>
                            <li data-filter=".filter-week6" id="week6">Week 6</li>
                            <li data-filter=".filter-week7" id="week7">Week 7</li>
                            <li data-filter=".filter-week8" id="week8">Week 8</li>
                            <li data-filter=".filter-week9" id="week9">Week 9</li>
                            <li data-filter=".filter-week10" id="week10">Week 10</li>
                            <li data-filter=".filter-week11" id="week11">Week 11</li>
                            <li data-filter=".filter-week12" id="week12">Week 12</li>
                        </ul>
                    </div>
                </div>

                <div class="row gallery-container" data-aos="fade-up" data-aos-delay="200">

                    <?php while($img_file = mysqli_fetch_assoc($query_gallery_run)){?>

                    <div class="col-lg-4 col-md-6 gallery-item <?=$img_file['filter_type']; ?>">
                        <div class="gallery-wrap">
                            <img src="../assets/img/gallery/<?=$img_file['file_name']; ?>" class="img-fluid" alt="">
                            <div class="gallery-info">
                                <div class="gallery-links">
                                    <a href="../assets/img/gallery/<?=$img_file['file_name']; ?>" data-gallery="galleryGallery" class="gallery-lightbox" ><i class="bi bi-eye-fill fs-1 text-white"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                </div>

                <div class=" justify-content-center align-items-center">
                    <button onclick="window.location.href='https://drive.google.com/drive/folders/1WvTW7q951H4O7SLEWeHgFF08hj4TOIJT?usp=sharing'" class="btn btn-sm mx-1" id="week1_all">MORE <i class="bi bi-arrow-right"></i></button>

                    <button onclick="window.location.href='https://drive.google.com/drive/folders/1xC3rr_uGPmfsf6RhGPAYiRVv3d2FIQyr?usp=sharing'" class="btn btn-sm mx-1" id="week2_all">MORE <i class="bi bi-arrow-right"></i></button>

                    <button onclick="window.location.href='https://drive.google.com/drive/folders/1T1tk9HW8EzkJ0LDOqG9kp_ksn5iynky_'" class="btn btn-sm mx-1" id="week3_all">MORE <i class="bi bi-arrow-right"></i></button>
                    
                    <button class="btn btn-sm mx-1" id="week4_all">MORE <i class="bi bi-arrow-right"></i></button>
                    <button class="btn btn-sm mx-1" id="week5_all">MORE <i class="bi bi-arrow-right fw-bolder"></i></button>
                    <button class="btn btn-sm mx-1" id="week6_all">MORE <i class="bi bi-arrow-right fw-bolder"></i></button>
                    <button class="btn btn-sm mx-1" id="week7_all">MORE <i class="bi bi-arrow-right fw-bolder"></i></button>
                    <button class="btn btn-sm mx-1" id="week8_all">MORE <i class="bi bi-arrow-right fw-bolder"></i></button>
                    <button class="btn btn-sm mx-1" id="week9_all">MORE <i class="bi bi-arrow-right fw-bolder"></i></button>
                    <button class="btn btn-sm mx-1" id="week10_all">MORE <i class="bi bi-arrow-right fw-bolder"></i></button>
                    <button class="btn btn-sm mx-1" id="week11_all">MORE <i class="bi bi-arrow-right fw-bolder"></i></button>
                    <button class="btn btn-sm mx-1" id="week12_all">MORE12 <i class="bi bi-arrow-right fw-bolder"></i></button>

                </div>

            </div>
        </section>
    </div>

    <script>
        document.getElementById('week1_all').style.visibility = 'hidden';
        document.getElementById('week2_all').style.visibility = 'hidden';
        document.getElementById('week3_all').style.visibility = 'hidden';
        document.getElementById('week4_all').style.visibility = 'hidden';
        document.getElementById('week5_all').style.visibility = 'hidden';
        document.getElementById('week6_all').style.visibility = 'hidden';
        document.getElementById('week7_all').style.visibility = 'hidden';
        document.getElementById('week8_all').style.visibility = 'hidden';
        document.getElementById('week9_all').style.visibility = 'hidden';
        document.getElementById('week10_all').style.visibility = 'hidden';
        document.getElementById('week11_all').style.visibility = 'hidden';
        document.getElementById('week12_all').style.visibility = 'hidden';

        document.querySelector("#week1").addEventListener("click", ()=>{
            document.getElementById('week1_all').style.visibility = 'visible';
            document.getElementById('week2_all').style.visibility = 'hidden';
            document.getElementById('week3_all').style.visibility = 'hidden';
            document.getElementById('week4_all').style.visibility = 'hidden';
            document.getElementById('week5_all').style.visibility = 'hidden';
            document.getElementById('week6_all').style.visibility = 'hidden';
            document.getElementById('week7_all').style.visibility = 'hidden';
            document.getElementById('week8_all').style.visibility = 'hidden';
            document.getElementById('week9_all').style.visibility = 'hidden';
            document.getElementById('week10_all').style.visibility = 'hidden';
            document.getElementById('week11_all').style.visibility = 'hidden';
            document.getElementById('week12_all').style.visibility = 'hidden';
        })

        document.querySelector("#week2").addEventListener("click", ()=>{
            document.getElementById('week1_all').style.visibility = 'hidden';
            document.getElementById('week2_all').style.visibility = 'visible';
            document.getElementById('week3_all').style.visibility = 'hidden';
            document.getElementById('week4_all').style.visibility = 'hidden';
            document.getElementById('week5_all').style.visibility = 'hidden';
            document.getElementById('week6_all').style.visibility = 'hidden';
            document.getElementById('week7_all').style.visibility = 'hidden';
            document.getElementById('week8_all').style.visibility = 'hidden';
            document.getElementById('week9_all').style.visibility = 'hidden';
            document.getElementById('week10_all').style.visibility = 'hidden';
            document.getElementById('week11_all').style.visibility = 'hidden';
            document.getElementById('week12_all').style.visibility = 'hidden';
        })

        document.querySelector("#week3").addEventListener("click", ()=>{
            document.getElementById('week1_all').style.visibility = 'hidden';
            document.getElementById('week2_all').style.visibility = 'hidden';
            document.getElementById('week3_all').style.visibility = 'visible';
            document.getElementById('week4_all').style.visibility = 'hidden';
            document.getElementById('week5_all').style.visibility = 'hidden';
            document.getElementById('week6_all').style.visibility = 'hidden';
            document.getElementById('week7_all').style.visibility = 'hidden';
            document.getElementById('week8_all').style.visibility = 'hidden';
            document.getElementById('week9_all').style.visibility = 'hidden';
            document.getElementById('week10_all').style.visibility = 'hidden';
            document.getElementById('week11_all').style.visibility = 'hidden';
            document.getElementById('week12_all').style.visibility = 'hidden';
        })

        document.querySelector("#week4").addEventListener("click", ()=>{
            document.getElementById('week1_all').style.visibility = 'hidden';
            document.getElementById('week2_all').style.visibility = 'hidden';
            document.getElementById('week3_all').style.visibility = 'hidden';
            document.getElementById('week4_all').style.visibility = 'visible';
            document.getElementById('week5_all').style.visibility = 'hidden';
            document.getElementById('week6_all').style.visibility = 'hidden';
            document.getElementById('week7_all').style.visibility = 'hidden';
            document.getElementById('week8_all').style.visibility = 'hidden';
            document.getElementById('week9_all').style.visibility = 'hidden';
            document.getElementById('week10_all').style.visibility = 'hidden';
            document.getElementById('week11_all').style.visibility = 'hidden';
            document.getElementById('week12_all').style.visibility = 'hidden';
        })

        document.querySelector("#week5").addEventListener("click", ()=>{
            document.getElementById('week1_all').style.visibility = 'hidden';
            document.getElementById('week2_all').style.visibility = 'hidden';
            document.getElementById('week3_all').style.visibility = 'hidden';
            document.getElementById('week4_all').style.visibility = 'hidden';
            document.getElementById('week5_all').style.visibility = 'visible';
            document.getElementById('week6_all').style.visibility = 'hidden';
            document.getElementById('week7_all').style.visibility = 'hidden';
            document.getElementById('week8_all').style.visibility = 'hidden';
            document.getElementById('week9_all').style.visibility = 'hidden';
            document.getElementById('week10_all').style.visibility = 'hidden';
            document.getElementById('week11_all').style.visibility = 'hidden';
            document.getElementById('week12_all').style.visibility = 'hidden';
        })

        document.querySelector("#week6").addEventListener("click", ()=>{
            document.getElementById('week1_all').style.visibility = 'hidden';
            document.getElementById('week2_all').style.visibility = 'hidden';
            document.getElementById('week3_all').style.visibility = 'hidden';
            document.getElementById('week4_all').style.visibility = 'hidden';
            document.getElementById('week5_all').style.visibility = 'hidden';
            document.getElementById('week6_all').style.visibility = 'visible';
            document.getElementById('week7_all').style.visibility = 'hidden';
            document.getElementById('week8_all').style.visibility = 'hidden';
            document.getElementById('week9_all').style.visibility = 'hidden';
            document.getElementById('week10_all').style.visibility = 'hidden';
            document.getElementById('week11_all').style.visibility = 'hidden';
            document.getElementById('week12_all').style.visibility = 'hidden';
        })

        document.querySelector("#week7").addEventListener("click", ()=>{
            document.getElementById('week1_all').style.visibility = 'hidden';
            document.getElementById('week2_all').style.visibility = 'hidden';
            document.getElementById('week3_all').style.visibility = 'hidden';
            document.getElementById('week4_all').style.visibility = 'hidden';
            document.getElementById('week5_all').style.visibility = 'hidden';
            document.getElementById('week6_all').style.visibility = 'hidden';
            document.getElementById('week7_all').style.visibility = 'visible';
            document.getElementById('week8_all').style.visibility = 'hidden';
            document.getElementById('week9_all').style.visibility = 'hidden';
            document.getElementById('week10_all').style.visibility = 'hidden';
            document.getElementById('week11_all').style.visibility = 'hidden';
            document.getElementById('week12_all').style.visibility = 'hidden';
        })

        document.querySelector("#week8").addEventListener("click", ()=>{
            document.getElementById('week1_all').style.visibility = 'hidden';
            document.getElementById('week2_all').style.visibility = 'hidden';
            document.getElementById('week3_all').style.visibility = 'hidden';
            document.getElementById('week4_all').style.visibility = 'hidden';
            document.getElementById('week5_all').style.visibility = 'hidden';
            document.getElementById('week6_all').style.visibility = 'hidden';
            document.getElementById('week7_all').style.visibility = 'hidden';
            document.getElementById('week8_all').style.visibility = 'visible';
            document.getElementById('week9_all').style.visibility = 'hidden';
            document.getElementById('week10_all').style.visibility = 'hidden';
            document.getElementById('week11_all').style.visibility = 'hidden';
            document.getElementById('week12_all').style.visibility = 'hidden';
        })

        document.querySelector("#week9").addEventListener("click", ()=>{
            document.getElementById('week1_all').style.visibility = 'hidden';
            document.getElementById('week2_all').style.visibility = 'hidden';
            document.getElementById('week3_all').style.visibility = 'hidden';
            document.getElementById('week4_all').style.visibility = 'hidden';
            document.getElementById('week5_all').style.visibility = 'hidden';
            document.getElementById('week6_all').style.visibility = 'hidden';
            document.getElementById('week7_all').style.visibility = 'hidden';
            document.getElementById('week8_all').style.visibility = 'hidden';
            document.getElementById('week9_all').style.visibility = 'visible';
            document.getElementById('week10_all').style.visibility = 'hidden';
            document.getElementById('week11_all').style.visibility = 'hidden';
            document.getElementById('week12_all').style.visibility = 'hidden';
        })

        document.querySelector("#week10").addEventListener("click", ()=>{
            document.getElementById('week1_all').style.visibility = 'hidden';
            document.getElementById('week2_all').style.visibility = 'hidden';
            document.getElementById('week3_all').style.visibility = 'hidden';
            document.getElementById('week4_all').style.visibility = 'hidden';
            document.getElementById('week5_all').style.visibility = 'hidden';
            document.getElementById('week6_all').style.visibility = 'hidden';
            document.getElementById('week7_all').style.visibility = 'hidden';
            document.getElementById('week8_all').style.visibility = 'hidden';
            document.getElementById('week9_all').style.visibility = 'hidden';
            document.getElementById('week10_all').style.visibility = 'visible';
            document.getElementById('week11_all').style.visibility = 'hidden';
            document.getElementById('week12_all').style.visibility = 'hidden';
        })

        document.querySelector("#week11").addEventListener("click", ()=>{
            document.getElementById('week1_all').style.visibility = 'hidden';
            document.getElementById('week2_all').style.visibility = 'hidden';
            document.getElementById('week3_all').style.visibility = 'hidden';
            document.getElementById('week4_all').style.visibility = 'hidden';
            document.getElementById('week5_all').style.visibility = 'hidden';
            document.getElementById('week6_all').style.visibility = 'hidden';
            document.getElementById('week7_all').style.visibility = 'hidden';
            document.getElementById('week8_all').style.visibility = 'hidden';
            document.getElementById('week9_all').style.visibility = 'hidden';
            document.getElementById('week10_all').style.visibility = 'hidden';
            document.getElementById('week11_all').style.visibility = 'visible';
            document.getElementById('week12_all').style.visibility = 'hidden';
        })

        document.querySelector("#week12").addEventListener("click", ()=>{
            document.getElementById('week1_all').style.visibility = 'hidden';
            document.getElementById('week2_all').style.visibility = 'hidden';
            document.getElementById('week3_all').style.visibility = 'hidden';
            document.getElementById('week4_all').style.visibility = 'hidden';
            document.getElementById('week5_all').style.visibility = 'hidden';
            document.getElementById('week6_all').style.visibility = 'hidden';
            document.getElementById('week7_all').style.visibility = 'hidden';
            document.getElementById('week8_all').style.visibility = 'hidden';
            document.getElementById('week9_all').style.visibility = 'hidden';
            document.getElementById('week10_all').style.visibility = 'hidden';
            document.getElementById('week11_all').style.visibility = 'hidden';
            document.getElementById('week12_all').style.visibility = 'visible';
        })
    </script>

  <!-- ============== Footer -->
  <?php include('../inc/footer.php'); ?>
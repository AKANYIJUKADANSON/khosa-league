<?php

  include('../admin/config.php');

  // Fetching sponsors
  $query_sponsors = "SELECT * FROM sponsors WHERE status= 'Active'";
  $query_sponsors_run = mysqli_query($conn, $query_sponsors);

  $query_products = "SELECT * FROM products ORDER BY date_posted DESC";
  $query_products_run = mysqli_query($conn, $query_products);

  
  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <title>Products | KHOSA</title>

    <?php include('../inc/header-links.php'); ?>
  </head>

  <body>
    <!-- ==================Start of Navigation div================== -->
    <?php include('../inc/nav-bars.php'); ?>
    <!-- ==================End of Navigation div================== -->

    <div
      class="la-container-team d-flex m-auto align-items-center justify-content-center mb-4"
    >
      <div class="d-block">
        <h6 class="text-center">
          <i class="bi bi-box fs-1 text-white"></i>
        </h6>
        <h4 class="text-white heading-text-teams">Products</h4>
      </div>
    </div>

    <div id="main" style="border: 2px solid red">
      <!-- ======= gallery Section ======= -->
      <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">


          <div class="row gallery-container" data-aos="fade-up" data-aos-delay="200">
            <?php 
            $data = mysqli_num_rows($query_products_run);
            if ($data < 0) {
              echo "Out of stock";
            }else{

            while($product = mysqli_fetch_assoc($query_products_run)){?>

              <!-- Product cards start -->
              <div class="col-lg-4">
                  <div class="card d-flex shadow-lg" style="">
                    <div class="card-header d-flex justify-content-center bg-warning">
                      <img class="" src="../assets/img/products/<?= $product['image']; ?>"
                        alt="">
                    </div>

                    <div class="card-body">
                      <div class="my-2">
                        <h4 class="text-black fw-bolder"><?= $product['product_name']; ?></h4>

                        <p class="text-secondary font-family-algerian fs-6">Category: <?= $product['category']; ?></p>
                        <p class="text-secondary font-family-algerian fs-6">Seller: <?= $product['vendor']; ?></p>

                        <p class="text-secondary fw-bolder fs-6">UGX <span class="text-info"><?= $product['price']; ?></span></p>

                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <a href="single-product.php?pid=<?= $product['id'] ?>" class="text-white" style="background-color: orangered; border: none; border-radius: 5px; padding: 10px"><i class="bi bi-cart fw-bolder me-2 "></i>Add To Cart</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- Product cards end -->

            <?php }} ?>
          </div>

        </div>
      </section>
    </div>

    <script>
      document.getElementById("week1_all").style.visibility = "hidden";
      document.getElementById("week2_all").style.visibility = "hidden";
      document.getElementById("week3_all").style.visibility = "hidden";
      document.getElementById("week4_all").style.visibility = "hidden";
      document.getElementById("week5_all").style.visibility = "hidden";
      document.getElementById("week6_all").style.visibility = "hidden";
      document.getElementById("week7_all").style.visibility = "hidden";
      document.getElementById("week8_all").style.visibility = "hidden";
      document.getElementById("week9_all").style.visibility = "hidden";
      document.getElementById("week10_all").style.visibility = "hidden";
      document.getElementById("week11_all").style.visibility = "hidden";
      document.getElementById("week12_all").style.visibility = "hidden";

      document.querySelector("#week1").addEventListener("click", () => {
        document.getElementById("week1_all").style.visibility = "visible";
        document.getElementById("week2_all").style.visibility = "hidden";
        document.getElementById("week3_all").style.visibility = "hidden";
        document.getElementById("week4_all").style.visibility = "hidden";
        document.getElementById("week5_all").style.visibility = "hidden";
        document.getElementById("week6_all").style.visibility = "hidden";
        document.getElementById("week7_all").style.visibility = "hidden";
        document.getElementById("week8_all").style.visibility = "hidden";
        document.getElementById("week9_all").style.visibility = "hidden";
        document.getElementById("week10_all").style.visibility = "hidden";
        document.getElementById("week11_all").style.visibility = "hidden";
        document.getElementById("week12_all").style.visibility = "hidden";
      });

      document.querySelector("#week2").addEventListener("click", () => {
        document.getElementById("week1_all").style.visibility = "hidden";
        document.getElementById("week2_all").style.visibility = "visible";
        document.getElementById("week3_all").style.visibility = "hidden";
        document.getElementById("week4_all").style.visibility = "hidden";
        document.getElementById("week5_all").style.visibility = "hidden";
        document.getElementById("week6_all").style.visibility = "hidden";
        document.getElementById("week7_all").style.visibility = "hidden";
        document.getElementById("week8_all").style.visibility = "hidden";
        document.getElementById("week9_all").style.visibility = "hidden";
        document.getElementById("week10_all").style.visibility = "hidden";
        document.getElementById("week11_all").style.visibility = "hidden";
        document.getElementById("week12_all").style.visibility = "hidden";
      });

      document.querySelector("#week3").addEventListener("click", () => {
        document.getElementById("week1_all").style.visibility = "hidden";
        document.getElementById("week2_all").style.visibility = "hidden";
        document.getElementById("week3_all").style.visibility = "visible";
        document.getElementById("week4_all").style.visibility = "hidden";
        document.getElementById("week5_all").style.visibility = "hidden";
        document.getElementById("week6_all").style.visibility = "hidden";
        document.getElementById("week7_all").style.visibility = "hidden";
        document.getElementById("week8_all").style.visibility = "hidden";
        document.getElementById("week9_all").style.visibility = "hidden";
        document.getElementById("week10_all").style.visibility = "hidden";
        document.getElementById("week11_all").style.visibility = "hidden";
        document.getElementById("week12_all").style.visibility = "hidden";
      });

      document.querySelector("#week4").addEventListener("click", () => {
        document.getElementById("week1_all").style.visibility = "hidden";
        document.getElementById("week2_all").style.visibility = "hidden";
        document.getElementById("week3_all").style.visibility = "hidden";
        document.getElementById("week4_all").style.visibility = "visible";
        document.getElementById("week5_all").style.visibility = "hidden";
        document.getElementById("week6_all").style.visibility = "hidden";
        document.getElementById("week7_all").style.visibility = "hidden";
        document.getElementById("week8_all").style.visibility = "hidden";
        document.getElementById("week9_all").style.visibility = "hidden";
        document.getElementById("week10_all").style.visibility = "hidden";
        document.getElementById("week11_all").style.visibility = "hidden";
        document.getElementById("week12_all").style.visibility = "hidden";
      });

      document.querySelector("#week5").addEventListener("click", () => {
        document.getElementById("week1_all").style.visibility = "hidden";
        document.getElementById("week2_all").style.visibility = "hidden";
        document.getElementById("week3_all").style.visibility = "hidden";
        document.getElementById("week4_all").style.visibility = "hidden";
        document.getElementById("week5_all").style.visibility = "visible";
        document.getElementById("week6_all").style.visibility = "hidden";
        document.getElementById("week7_all").style.visibility = "hidden";
        document.getElementById("week8_all").style.visibility = "hidden";
        document.getElementById("week9_all").style.visibility = "hidden";
        document.getElementById("week10_all").style.visibility = "hidden";
        document.getElementById("week11_all").style.visibility = "hidden";
        document.getElementById("week12_all").style.visibility = "hidden";
      });

      document.querySelector("#week6").addEventListener("click", () => {
        document.getElementById("week1_all").style.visibility = "hidden";
        document.getElementById("week2_all").style.visibility = "hidden";
        document.getElementById("week3_all").style.visibility = "hidden";
        document.getElementById("week4_all").style.visibility = "hidden";
        document.getElementById("week5_all").style.visibility = "hidden";
        document.getElementById("week6_all").style.visibility = "visible";
        document.getElementById("week7_all").style.visibility = "hidden";
        document.getElementById("week8_all").style.visibility = "hidden";
        document.getElementById("week9_all").style.visibility = "hidden";
        document.getElementById("week10_all").style.visibility = "hidden";
        document.getElementById("week11_all").style.visibility = "hidden";
        document.getElementById("week12_all").style.visibility = "hidden";
      });

      document.querySelector("#week7").addEventListener("click", () => {
        document.getElementById("week1_all").style.visibility = "hidden";
        document.getElementById("week2_all").style.visibility = "hidden";
        document.getElementById("week3_all").style.visibility = "hidden";
        document.getElementById("week4_all").style.visibility = "hidden";
        document.getElementById("week5_all").style.visibility = "hidden";
        document.getElementById("week6_all").style.visibility = "hidden";
        document.getElementById("week7_all").style.visibility = "visible";
        document.getElementById("week8_all").style.visibility = "hidden";
        document.getElementById("week9_all").style.visibility = "hidden";
        document.getElementById("week10_all").style.visibility = "hidden";
        document.getElementById("week11_all").style.visibility = "hidden";
        document.getElementById("week12_all").style.visibility = "hidden";
      });

      document.querySelector("#week8").addEventListener("click", () => {
        document.getElementById("week1_all").style.visibility = "hidden";
        document.getElementById("week2_all").style.visibility = "hidden";
        document.getElementById("week3_all").style.visibility = "hidden";
        document.getElementById("week4_all").style.visibility = "hidden";
        document.getElementById("week5_all").style.visibility = "hidden";
        document.getElementById("week6_all").style.visibility = "hidden";
        document.getElementById("week7_all").style.visibility = "hidden";
        document.getElementById("week8_all").style.visibility = "visible";
        document.getElementById("week9_all").style.visibility = "hidden";
        document.getElementById("week10_all").style.visibility = "hidden";
        document.getElementById("week11_all").style.visibility = "hidden";
        document.getElementById("week12_all").style.visibility = "hidden";
      });

      document.querySelector("#week9").addEventListener("click", () => {
        document.getElementById("week1_all").style.visibility = "hidden";
        document.getElementById("week2_all").style.visibility = "hidden";
        document.getElementById("week3_all").style.visibility = "hidden";
        document.getElementById("week4_all").style.visibility = "hidden";
        document.getElementById("week5_all").style.visibility = "hidden";
        document.getElementById("week6_all").style.visibility = "hidden";
        document.getElementById("week7_all").style.visibility = "hidden";
        document.getElementById("week8_all").style.visibility = "hidden";
        document.getElementById("week9_all").style.visibility = "visible";
        document.getElementById("week10_all").style.visibility = "hidden";
        document.getElementById("week11_all").style.visibility = "hidden";
        document.getElementById("week12_all").style.visibility = "hidden";
      });

      document.querySelector("#week10").addEventListener("click", () => {
        document.getElementById("week1_all").style.visibility = "hidden";
        document.getElementById("week2_all").style.visibility = "hidden";
        document.getElementById("week3_all").style.visibility = "hidden";
        document.getElementById("week4_all").style.visibility = "hidden";
        document.getElementById("week5_all").style.visibility = "hidden";
        document.getElementById("week6_all").style.visibility = "hidden";
        document.getElementById("week7_all").style.visibility = "hidden";
        document.getElementById("week8_all").style.visibility = "hidden";
        document.getElementById("week9_all").style.visibility = "hidden";
        document.getElementById("week10_all").style.visibility = "visible";
        document.getElementById("week11_all").style.visibility = "hidden";
        document.getElementById("week12_all").style.visibility = "hidden";
      });

      document.querySelector("#week11").addEventListener("click", () => {
        document.getElementById("week1_all").style.visibility = "hidden";
        document.getElementById("week2_all").style.visibility = "hidden";
        document.getElementById("week3_all").style.visibility = "hidden";
        document.getElementById("week4_all").style.visibility = "hidden";
        document.getElementById("week5_all").style.visibility = "hidden";
        document.getElementById("week6_all").style.visibility = "hidden";
        document.getElementById("week7_all").style.visibility = "hidden";
        document.getElementById("week8_all").style.visibility = "hidden";
        document.getElementById("week9_all").style.visibility = "hidden";
        document.getElementById("week10_all").style.visibility = "hidden";
        document.getElementById("week11_all").style.visibility = "visible";
        document.getElementById("week12_all").style.visibility = "hidden";
      });

      document.querySelector("#week12").addEventListener("click", () => {
        document.getElementById("week1_all").style.visibility = "hidden";
        document.getElementById("week2_all").style.visibility = "hidden";
        document.getElementById("week3_all").style.visibility = "hidden";
        document.getElementById("week4_all").style.visibility = "hidden";
        document.getElementById("week5_all").style.visibility = "hidden";
        document.getElementById("week6_all").style.visibility = "hidden";
        document.getElementById("week7_all").style.visibility = "hidden";
        document.getElementById("week8_all").style.visibility = "hidden";
        document.getElementById("week9_all").style.visibility = "hidden";
        document.getElementById("week10_all").style.visibility = "hidden";
        document.getElementById("week11_all").style.visibility = "hidden";
        document.getElementById("week12_all").style.visibility = "visible";
      });
    </script>

    <!-- ============== Footer -->
    <?php //include('../inc/footer.php'); ?>
  </body>
</html>

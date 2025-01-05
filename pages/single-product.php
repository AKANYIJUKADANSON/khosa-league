<?php
include "../admin/config.php";
    $product_id = $_GET['pid'];

    // Query products
    $product_query = "SELECT * FROM products WHERE id = $product_id";
    $product_query_run = mysqli_query($conn, $product_query);
    $product = mysqli_fetch_assoc($product_query_run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <?php include('../inc/header-links.php'); ?>


</head>

<body>

  <div class="bg-white">

    <!-- ==================Start of Navigation div================== -->
    <?php include('../inc/nav-bars.php'); ?>
    <!-- ==================End of Navigation div================== -->

    <div style="border: 2px solid black;">
      <!-- ==================Start of hero div================== -->
      <div class="row mt-4 mx-1 hero">

        <!-- Left side columns -->
        <div class="col-lg-4" style="border: 2px solid green;">
            <!-- Corousal -->
            <div class="col-12">
              <!-- Slides with captions -->
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="../assets/img/products/hoodie-black-obuntu.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="../assets/img/products/golden-cup-black.png" class="d-block w-100" alt="...">
                  </div>
                  

                  <div class="carousel-item">
                    <img src="../assets/img/products/cap-grey.png" class="d-block w-100" alt="...">
                  </div>

                </div>

                <button class="carousel-control-prev"  type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon bg-secondary rounded-circle" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon bg-secondary rounded-circle" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
        </div>

        <!-- Right side columns -->
        <div class="col-lg-8" style="border: 2px solid red;">
          <div class="" style="border: 2px solid re">
              <h3 class="fw-bolder fs-1 ff-algerian"><?= $product['product_name']?></h3>

              <p class="fs-5 mb-4"><?= $product['product_description']?></p>

              <p class="fs-5 fw-bold">Category: <br><span class="text-secondary ms-4 fs-5"><?= $product['category']?></span></p><br><br>

              <div class="row">
                <div style="border: 2px solid red" class="col-6">
                <h6 class="fs-5 fw-bold">Vendor: <br> <span class="text-secondary ms-4 fs-5"><?= $product['vendor']?></span></h6><br>
                </div>

                <div style="border: 2px solid blue;" class="col-6">
                  <p class="fs-5"><i class="bi bi-phone me-4"></i><?= $product['contact_phone']?></p>
                  <p class="fs-5"><i class="bi bi-envelope me-4"></i><?= $product['contact_email']?></p>
                </div>
              </div>
              
              <div class="" style="width: 100%; background-color: darkgrey; color: white; padding: 20px 0">
                <label class="fs-3 mt-auto fw-bolder mt-4 ms-4">UGX <?= $product['price']?></label><br>
                <label class="fs-6 mt-auto fw-bolder mt-4 ms-4">Ex TAX: <del>UGX 1000.00</del></label>
              </div>

              <div class="d-flex float-end mt-4">
                <a href="single-product.php?pid=<?= $product['id'] ?>" class="text-white" style="background-color: orangered; border: none; border-radius: 5px; padding: 10px">CHECKOUT</a>
              </div>
              
          </div>
        </div>

      </div>
      <!-- ==================End of hero div================== -->

    </div>

  </div>


<!-- ============== Footer -->
<?php include('../inc/footer.php');
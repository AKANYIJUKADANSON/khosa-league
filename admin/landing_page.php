<?php include('../admin/config.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <title>Admin | KHOSA LEAGUE</title>
  <?php include('../inc/header-links.php'); ?>

</head>

<body>

      <div class="bg-success mb-4" style="height: 70vh">

        <!-- ==================Start of Navigation div================== -->
        <?php //include('../inc/nav-bars.php'); ?>
        <!-- ==================End of Navigation div================== -->

        <div class="card bg-transparent">
          <div class="card-body">
            <h5 class="card-title">ADMIN DASHBOARD</h5>

            <a href="add_results.php" type="button" class="btn btn-primary btn-lg mx-2 my-4"><i class="bi bi-alarm me-1 fs-3"></i> <span class="fs-2">Add Results</span></a>

            <a href="posts.php" type="button" class="btn btn-primary btn-lg mx-2 my-4"><i class="bi bi-book-half me-1 fs-3"></i> <span class="fs-2" >Add Post</span></a>

            <a href="add-fixture.php" type="button" class="btn btn-primary btn-lg mx-2 my-4"><i class="bi bi-plus-square me-1 fs-3"></i> <span class="fs-2" >Add Fixture</span></a>

            <!-- <a href="posts.php" type="button" class="btn btn-primary btn-lg mx-2 my-4"><i class="bi bi-people-fill me-1 fs-3"></i> <span class="fs-2" >Add Club</span></a> -->

            <!-- <a href="posts.php" type="button" class="btn btn-primary btn-lg mx-2 my-4"><i class="bi bi-images me-1 fs-3"></i> <span class="fs-2" >Add To Gallery</span></a> -->

            <a href="add_player.php" type="button" class="btn btn-primary btn-lg mx-2 my-4"><i class="bi bi-people me-1 fs-3"></i> <span class="fs-2" >Add Players</span></a>

          </div>
        </div>
      </div>

  <!-- ============== Footer -->
  <?php //include('../inc/footer.php'); ?>
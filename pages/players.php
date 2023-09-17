<?php

include('../admin/config.php');

// Fetching the table
$query_players = "SELECT * FROM KLtable";
$query_players_run = mysqli_query($conn, $query_players);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KHOSA | Players</title>

  <?php include('../inc/header-links.php'); ?>

</head>

<body>
  <div class="hero-mini mb-4" style="border: 2px solid green;">
    <?php include('../inc/nav-bars.php'); ?>

  </div>
  <!-- ==================End of hero div================== -->

  <div class="la-container-table d-block m-auto justify-content-center">
    <div class="d-flex justify-content-center">
      <h2 class="text-center text-white heading-text-about mb-4">Players</h2>
    </div>
    <h4 class="d-flex justify-content-center text-white">All players that participate in the league and their profile</h4>

  </div>


  </div>
  <!-- ==================End of hero div================== -->

  <!-- ==================Start of foorter div================== -->
  <?php include("../inc/footer.php"); ?>
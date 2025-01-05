<?php
  session_start();
  include('config.php');

  // Prevent unauthorized users from accessing this page
  if($_SESSION['auth_status'] == 0){
    $_SESSION['status'] = "First login to proceed please";
    $_SESSION['color'] = "danger";
    header("location: index");
  }

  // Get points and clubs
  $points_query = "SELECT t.name AS name, k.points AS points FROM kltable k JOIN teams t ON k.team_id = t.id ORDER BY points DESC ";
  $points_query_run = mysqli_query($conn, $points_query);

  // Loop and add the points into the points array
  $points_array = array();
  $teams_array = array();
  while($data = mysqli_fetch_assoc($points_query_run)){
      $points_array[] = $data['points'];
      $teams_array[] = $data['name'];
  }
  // Convert php array into Json format for JS to use it
  $json_points_array = json_encode($points_array);
  $json_teams_array = json_encode($teams_array);

  // echo $json_teams_array;
  // echo "<br>";
  // echo $json_points_array;

  // Count clubs
  $count_clubs = mysqli_num_rows($points_query_run);

  // Count players
  $query_players = mysqli_query($conn, "SELECT * FROM players");
  $players_count = mysqli_num_rows($query_players);
  
  // Get results
  $results_query = "SELECT m.id, 
        t1.name AS home_team, 
        t2.name AS away_team, 
        m.home_team_goals, m.away_team_goals, 
        m.match_date, m.game_week, m.win_type, m.home_team_lady_played,
        m.away_team_lady_played

    FROM match_results m
    JOIN teams t1 ON m.home_team_id = t1.id
    JOIN teams t2 ON m.away_team_id = t2.id
    ORDER BY  match_date DESC";

  $results_query_run = mysqli_query($conn, $results_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('inc/header.php'); ?>
  <title>Admin ~ Dashboard</title>
  </head>
<body>

  <!-- ======= Header & Sidebar ======= -->
  <?php include('inc/navbar.php'); ?>
  <?php include('inc/sidebar.php'); ?>

  <main id="main" class="mai" style="border: 2px solid blu; height: 90vh">

    <div class="pagetitle">
      <h1 class="fs-5">Dashboard</h1>
      <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav> -->
    </div>

    <section class="dashboard" style="border: 1px solid re;">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-7">
          <div class="row">

            <!-- Summary Cards for number of clubs-->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card ps-4">
                <!-- <div class="card-body"> -->
                  <h5 class="card-title">Active Clubs</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-shield text-danger"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$count_clubs; ?></h6>
                    </div>
                  </div>
                <!-- </div> -->
              </div>
            </div>

            <!-- Summary Card for registered players -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card ps-4">
                <!-- <div class="card-body"> -->
                  <h5 class="card-title">Registerd Players</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=$players_count; ?></h6>

                    </div>
                  <!-- </div> -->
                </div>

              </div>
            </div>

            <!-- Performance Card -->
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">General Club Performance</h5>

                  <!-- Bar Chart -->
                  <canvas id="barChart" style="max-height: 250px;"></canvas>
                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new Chart(document.querySelector('#barChart'), {
                        type: 'bar',
                        data: {
                          labels: <?=$json_teams_array;?>,
                          datasets: [{

                            data: <?=$json_points_array;?>,
                            backgroundColor: [
                              'rgba(255, 99, 132, 0.2)',
                              'rgba(255, 159, 64, 0.2)',
                              'rgba(255, 205, 86, 0.2)',
                              'rgba(75, 192, 192, 0.2)',
                              'rgba(54, 162, 235, 0.2)',
                              'rgba(153, 102, 255, 0.2)',
                              'rgba(201, 203, 207, 0.2)'
                            ],
                            borderColor: [
                              'rgb(255, 99, 132)',
                              'rgb(255, 159, 64)',
                              'rgb(255, 205, 86)',
                              'rgb(75, 192, 192)',
                              'rgb(54, 162, 235)',
                              'rgb(153, 102, 255)',
                              'rgb(201, 203, 207)'
                            ],
                            borderWidth: 1
                          }]
                        },
                        options: {
                          scales: {
                            y: {
                              beginAtZero: true,
                              title: {
                                display: true,
                                align: 'center',
                                text: 'Points',
                                color: 'maroon',
                                font: {
                                  family: 'consolas',
                                  size: 18,
                                  weight: 'bold',
                                },
                              },

                              grid: {
                                  display:true
                              }
                            },

                            x: {
                              title: {
                                display: true,
                                align: 'center',
                                text: 'Teams',
                                color: 'maroon',
                                font: {
                                  family: 'consolas',
                                  size: 18,
                                  weight: 'bold',
                                },
                              },

                              grid: {
                                  display:false
                              }
                            },

                          },

                          plugins: {
                            // Display title
                            title: {
                                display: false,
                                text: 'Student Performance',
                                color: 'red',
                                font:{
                                    size: 15,
                                    weight: 'bold'
                                }
                            },

                            legend: {
                              display: false,
                              labels: {
                                  color: 'rgb(255, 99, 132)'
                              }
                            }
                          }
                        }
                        
                      });
                    });
                  </script>
                  <!-- End Bar CHart -->

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-5">
          <!-- News & Updates Traffic -->
          <div class="card pb-2" style="in-height: 500px;">
          <h5 class="card-title ps-4">Latest Results</h5>
            <div class="card-body" style="height: 65vh; overflow: auto">
              

              <table style="border: 2px solid blac; margin: auto; width: 100%;">

              <?php while ($results = mysqli_fetch_assoc($results_query_run)) { ?>


                <!-- <tbody> -->
                  

                  <tr class="pt-4" style="background-color: gra;">
                    <td style="text-align: left; color: #798eb3;" class=" pt-2 pb-2 fs-6 fw-bolder"><?=$results['home_team'];?></td>

                    <td style="text-align: center; color: #ff0000;" class="pt-2 pb-2 fs-6 fw-bolder">
                      <?=$results['home_team_goals'];?>
                    </td>

                    <td class="fs-6 fw-bolder p-2">-</td>

                    <td style="text-align: center; color: #ff0000;" class=" pt-2 pb-2 fs-6 fw-bolder">
                      <?=$results['away_team_goals'];?>
                    </td>

                    <td style="text-align: right; color: #798eb3;" class=" pt-2 pb-2 fs-6 fw-bolder"><?=$results['home_team'];?></td>
                  </tr>
                  <tr>
                    
                    <td colspan="2" class="ps-2 text-success" style="text-align: left; color: #798eb3;">LP: <?=$results['home_team_lady_played'];?></td>
                    <td><span class="" style="font-size: 10px"><?=$results['game_week'];?></span></td>
                    <td><span class="" style="font-size: 10px"></span></td>
                    <td colspan="2" class="pe-2 text-success" style="text-align: right; color: #798eb3;">LP: <?=$results['away_team_lady_played'];?></td>
                  </tr>
                <!-- </tbody> -->

               <?php } ?>
              </table>

            </div>
          </div>
          <!-- End News & Updates -->

        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <?php include('inc/footer-links.php'); ?>

</body>

</html>
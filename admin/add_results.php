<?php
    session_start();

    // Prevent unauthorized users from accessing this page
    if($_SESSION['auth_status'] == 0){
        $_SESSION['status'] = "First login to proceed please";
        $_SESSION['color'] = "danger";
        header("location: index");
    }


    include('config.php');
    $isUpdate = false;

    // Get Club names
    $query_clubs = "SELECT * FROM teams";
    $query_club1_run = mysqli_query($conn, $query_clubs);
    $query_club2_run = mysqli_query($conn, $query_clubs);

    // Get results
    // $results = "SELECT * FROM match_results ORDER BY id DESC LIMIT 12";
    // $results_run = mysqli_query($conn, $results);


    $xults = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, m.home_team_goals, m.home_team_lady_played, m.away_team_goals, m.away_team_lady_played, m.match_date, m.game_week, m.win_type
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id 
        ORDER BY m.id DESC
    LIMIT 20";

    $results_run = mysqli_query($conn, $xults);

    // ~~~~~~~~~~~~~~~~~ Adding results~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (isset($_POST['add_result'])) {
        $home_team = $_POST['home_team'];
        $home_team_goals = $_POST['home_team_goals'];
        $away_team = $_POST['away_team'];
        $away_team_goals = $_POST['away_team_goals'];
        $match_date = $_POST['match_date'];
        $home_team_lady_played = $_POST['home_team_lady_played'];
        $away_team_lady_played = $_POST['away_team_lady_played'];
        $game_week = $_POST['game_week'];
        $win_type = $_POST['win_type'];

        if ($home_team == $away_team){
            echo "<script>alert('A team cannot vs the same team!')</script>";
        }

        // echo $home_team . " <br>";
        // echo $away_team . " <br>";
        // echo $home_team_Goals . " <br>";
        // echo $away_team_Goals . " <br>";
        // echo $match_date . " <br>";
        // echo $home_team_lady_played . " <br>";
        // echo $away_team_lady_played . " <br>";
        // echo $game_week . " <br>";

        $add_result = "INSERT INTO match_results(home_team_id, away_team_id, home_team_goals, away_team_goals, match_date, home_team_lady_played, away_team_lady_played, game_week, win_type)
            VALUES('$home_team', '$away_team', '$home_team_goals', '$away_team_goals', '$match_date', '$home_team_lady_played', '$away_team_lady_played', '$game_week', '$win_type' )";

        $query_run = mysqli_query($conn, $add_result);
        if ($query_run) {
            $_SESSION['status'] = "Match result added successfully";
            $_SESSION['color'] = "success";
            echo "
                <script>
                    setTimeout(() => {
                        window.location.href = 'add_results.php';
                    }, 2000);
                </script>
            ";
        } else {
            $_SESSION['status'] = "Match result load failure".mysqli_erro();
            $_SESSION['color'] = "danger";
            echo "
                <script>
                    setTimeout(() => {
                        window.location.href = 'add_results.php';
                    }, 2000);
                </script>
            ";
        }
    }

    //~~~~~~~~~~~~~~~~~~ UPDATING & DELETING RESULTS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    // Get data for the corresponding results
    if (isset($_GET['update_id'])) {
        // Store the result id in session so that it can be used even when we are off the page where we can nolonger still locate the update id from the url
        $_SESSION['result_id'] = $_GET['update_id'];
        $result_id = $_GET['update_id'];
        $isUpdate = true;
        // Get selected result data
        $stmt = "SELECT * FROM match_results WHERE id = $result_id";



        $query_results = "SELECT m.id, t1.name AS home_team, t2.name AS away_team, 
        m.home_team_id, m.away_team_id,
        m.home_team_goals, m.home_team_lady_played, m.away_team_goals, m.away_team_lady_played, m.match_date, m.game_week, m.win_type
        FROM match_results m
        JOIN teams t1 ON m.home_team_id = t1.id
        JOIN teams t2 ON m.away_team_id = t2.id
        WHERE m.id = '$result_id' ";


        $stmt_run = mysqli_query($conn, $query_results);
        $data = mysqli_fetch_assoc($stmt_run); 
         
    }

    //~~~~~~~~~~~~~~~~~~ UPDATING ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (isset($_POST['update_result'])){
        $update_id = $_SESSION['result_id'];
        $home_team = $_POST['home_team'];
        $home_team_goals = $_POST['home_team_goals'];
        $away_team = $_POST['away_team'];
        $away_team_goals = $_POST['away_team_goals'];
        $match_date = $_POST['match_date'];
        $home_team_lady_played = $_POST['home_team_lady_played'];
        $away_team_lady_played = $_POST['away_team_lady_played'];
        $game_week = $_POST['game_week'];
        $win_type = $_POST['win_type'];

        if ($home_team == $away_team){
            echo "<script>alert('A team cannot vs the same team!')</script>";
        }

        // echo $home_team . " <br>";
        // echo $away_team . " <br>";
        // echo $home_team_goals . " <br>";
        // echo $away_team_goals . " <br>";
        // echo $match_date . " <br>";
        // echo $home_team_lady_played . " <br>";
        // echo $away_team_lady_played . " <br>";
        // echo $game_week . " <br>";

        // echo "<script>alert($match_date)</script>";


        $update_result = "UPDATE `match_results` SET 
        `home_team_id` = '$home_team',
        `away_team_id` = '$away_team',
         `home_team_goals` = '$home_team_goals', 
         `away_team_goals` = '$away_team_goals', 
         `match_date` = '$match_date',
          `home_team_lady_played` = '$home_team_lady_played',
          `away_team_lady_played` = '$away_team_lady_played',
           `game_week` = '$game_week', 
           `win_type` = '$win_type'  
           WHERE id = '$update_id' ";

        $query_run = mysqli_query($conn, $update_result);

        if ($query_run) {
            $_SESSION['status'] = "Record Updated Successfully";
            $_SESSION['color'] = "success";
            echo "
                <script>
                    setTimeout(() => {
                        window.location.href = 'add_results.php';
                    }, 2000);
                </script>
            ";
        } else {
            $_SESSION['status'] = "Ooops, Record Update Failure: " . mysqli_error();
            $_SESSION['color'] = "danger";
            // echo "<script>alert('Ooops, Record Update Failure')</script>";

            echo "
                <script>
                    setTimeout(() => {
                        window.location.href = 'add_results.php';
                    }, 2000);
                </script>
            ";
            
        }
    }


    //~~~~~~~~~~~~~~~~~~ DELETING ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (isset($_GET['del_id'])) {
        // Get delete id for the corresponding record

        $delete_id = $_GET['del_id'];

        $stmt = "DELETE FROM match_results WHERE id = '$delete_id' ";
        $stmt_run = mysqli_query($conn, $stmt);

        if($stmt_run){
            
            $_SESSION['status'] = "Match Result Deleted Successfully ";
            $_SESSION['color'] = "Success";
            // echo "<script>alert('Ooops, Record Update Failure')</script>";

            echo "
                <script>
                    setTimeout(() => {
                        window.location.href = 'add_results.php';
                    }, 2000);
                </script>
            ";
        }else{
            $_SESSION['status'] = "Error while deleting record" . mysqli_error();
            $_SESSION['color'] = "danger";
            // echo "<script>alert('Ooops, Record Update Failure')</script>";

            echo "
                <script>
                    setTimeout(() => {
                        window.location.href = 'add_results.php';
                    }, 2000);
                </script>
            ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('inc/header.php'); ?>
    <title>Admin ~ Manage Results</title>
</head>

    <!-- ======= Header & Sidebar ======= -->
   
    <?php include('inc/navbar.php'); ?>
    <?php include('inc/sidebar.php'); ?>

    <main id="main" class="main" style="height: 89vh">
        <div class="pagetitle">
            <h1 class="fs-5">
                <?php if($isUpdate){ ?> 
                    <span class="">Update Results</span>
                <?php }else{?>
                    <span class="">Add Results</span>
                <?php } ?>
            </h1>

            <?php include('notif.php'); ?>
        </div>

        <div class="row dashboa" style=" height: 76vh;">

            <!-- Left side columns -->
            <div class="col-lg-4">
                <div class="card p-2" style="height: 75vh; overflow: auto;">
                    <!-- <div class="card-body" > -->
                        <form action="add_results.php" method="post" class="row g-3 pt-4 pb-2" enctype="multipart/form-data">

                            <div class="col-12">
                                <label class="form-label text-primary">Home Team</label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="home_team" aria-label="Default select example">
                                        <option selected>
                                            <?php if($isUpdate){echo $data['home_team_id']; ?> 
                                                <?php }else{?>
                                        ---
                                        </option><?php } ?>

                                        <?php while ($club1 = mysqli_fetch_assoc($query_club1_run)) { ?>
                                            <option value="<?= $club1['id']; ?>"><?= $club1['id']; ?>-<?= $club1['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label text-primary">Home_team_Goals</label>
                                <input type="text" name="home_team_goals" class="form-control" required value="<?php if($isUpdate){echo $data['home_team_goals']; ?> <?php }else{?> <?php } ?>">
                            </div>

                            <div class="col-12">
                                <label class="form-label text-primary">Away Team</label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="away_team" aria-label="Default select example">
                                        <option style="color: red" selected>
                                            <?php if($isUpdate){echo $data['away_team_id']; ?> 
                                                <?php }else{?>
                                        ---
                                        </option><?php } ?>

                                        <?php while ($club2 = mysqli_fetch_assoc($query_club2_run)) { ?>

                                            <option value="<?= $club2['id']; ?>"><?= $club2['id']; ?>-<?= $club2['name']; ?></option>

                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label text-primary">Away_team_Goals</label>
                                <input type="text" name="away_team_goals" class="form-control" required value="<?php if($isUpdate){echo $data['away_team_goals']; ?> <?php }else{?> <?php } ?>">
                            </div>

                            <div class="col-12">
                                <label class="form-label text-primary">Match Date |
                                    <span style="color: red; font-size: 10px">
                                    <?php if($isUpdate){echo "Current: ".$data['match_date']; }?>
                                    </span>
                                </label>
                                <input type="date" name="match_date" class="form-control" required >
                            </div>

                            <div class="col-12">
                                <label class="form-label text-primary">Home Team Lady Played</label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="home_team_lady_played" aria-label="Default select example">
                                        <option style="color: red" selected>
                                            <?php if($isUpdate){echo $data['home_team_lady_played']; ?> 
                                                <?php }else{?>
                                        ---
                                        </option><?php } ?>
                                            <option value="0">NO</option>
                                            <option value="1">YES</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label text-primary">Away Team Lady Played</label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="away_team_lady_played" aria-label="Default select example">
                                        <option style="color: red" selected>
                                            <?php if($isUpdate){echo $data['away_team_lady_played']; ?> 
                                                <?php }else{?>
                                        ---
                                        </option><?php } ?>
                                            <option value="0">NO</option>
                                            <option value="1">YES</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label text-primary">Game Week</label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="game_week" aria-label="Default select example">
                                        <option style="color: red" >
                                            <?php if($isUpdate){echo $data['game_week']; ?> 
                                                <?php }else{?>
                                        ---
                                        </option><?php } ?>
                                        <option value="Week1">Week 1</option>
                                        <option value="Week2">Week 2</option>
                                        <option value="Week3">Week 3</option>
                                        <option value="Week4">Week 4</option>
                                        <option value="Week5">Week 5</option>
                                        <option value="Week6">Week 6</option>
                                        <option value="Week7">Week 7</option>
                                        <option value="Week8">Week 8</option>
                                        <option value="Week9">Week 9</option>
                                        <option value="Week10">Week 10</option>
                                        <option value="Week11">Week 11</option>
                                        <option value="Week12">Week 12</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label text-primary">Win Type</label>
                                <div class="col-sm-12">
                                    <select class="form-select" name="win_type" aria-label="Default select example">
                                        <option style="color: red" selected>
                                            <?php if($isUpdate){echo $data['win_type']; ?> 
                                                <?php }else{?>
                                        ---
                                        </option><?php } ?>
                                            <option value="Normal" selected>Normal</option>
                                            <option value="Walkover">Walkover</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <?php if($isUpdate){ ?> 
                                    <button class="btn btn-warning w-100" name="update_result" type="submit">Update</button>
                                <?php }else{?>
                                    <button class="btn btn-success w-100" name="add_result" type="submit">ADD</button>
                                    <?php } ?>
                                
                            </div>

                        </form>
                    <!-- </div> -->
                </div>
            </div>

            <!-- Right side columns -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="table-responsive card-body  rounded shadow-lg" style="border: 5px solid gre; height: 75vh; background-color: white">
                        <h2 class="card-title">Latest Results</h2>
                        <table class="table table-data table-bordered table-sm overflow-auto">
                            <thead style="position: sticky; top: 0;background-color: gray; color: white">
                                <th>#</th>
                                <th>Home Team</th>
                                <th></th>
                                <th>Away Team</th>
                                <th></th>
                                <th>Match Date</th>
                                <th>Home LP</th>
                                <th>Away LP</th>
                                <th>Game Wk</th>
                                <th>Win Type</th>
                                <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                <?php while ($result = mysqli_fetch_assoc($results_run)) { ?>
                                    <tr>
                                        <td><?= $result ['id']; ?></td>
                                        <td><?= $result['home_team']; ?></td>
                                        <td class="text-info fw-bolder"><?= $result['home_team_goals']; ?></td>
                                        <td><?= $result['away_team']; ?></td>
                                        <td class="text-info fw-bolder"><?= $result['away_team_goals']; ?></td>
                                        <td><?= $result['match_date']; ?></td>
                                        <td><?= $result['home_team_lady_played']; ?></td>
                                        <td><?= $result['away_team_lady_played']; ?></td>

                                        <td><?= $result['game_week']; ?></td>
                                        <td><?= $result['win_type']; ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <a data-toggle="toolpit" data-placement="bottom" title="Edit Record" class="me-1" href="add_results.php?update_id=<?= $result['id']; ?>"><i class="bi bi-pencil-square p-2 text-primary"></i></a>

                                                <a data-toggle="toolpit" data-placement="bottom" title="Delete Record" onclick="return confirm('Are you sure, you want to delete the match result selected ?')"  href="add_results.php?del_id=<?= $result['id']; ?>"><i class="bi bi-trash-fill p-2 text-danger"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>

        </div>

    </main>

    <?php include('inc/footer-links.php'); ?>

</body>

</html>

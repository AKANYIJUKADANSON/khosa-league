<?php
session_start();
include('config.php');
$isUpdate = false;

// Get Club names
$query_clubs = "SELECT `name` FROM clubs";
$query_club1_run = mysqli_query($conn, $query_clubs);
$query_club2_run = mysqli_query($conn, $query_clubs);

// Get results
$results = "SELECT * FROM results";
$results_run = mysqli_query($conn, $results);

// ~~~~~~~~~~~~~~~~~ Adding results~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
if (isset($_POST['add_result'])) {
    $team1 = $_POST['team1'];
    $result_team_1 = $_POST['result_team_1'];
    $team2 = $_POST['team2'];
    $result_team_2 = $_POST['result_team_2'];
    $result_date = $_POST['date'];
    $game_week = $_POST['game_week'];

    if ($team1 == $team2){
        echo "<script>alert('A team cannot vs the same team!')</script>";
    }

    // echo $team1 . " <br>";
    // echo $result_team_1 . " <br>";
    // echo $team2 . " <br>";
    // echo $result_team_2 . " <br>";
    // echo $result_date . " <br>";
    // echo $game_week . " <br>";

    $add_result = "INSERT INTO results(team1, result_team_1, team2, result_team_2, result_date, game_week)
        VALUES('$team1', '$result_team_1', '$team2', '$result_team_2', '$result_date', '$game_week' )";

    $query_run = mysqli_query($conn, $add_result);
    if ($query_run) {
        $_SESSION['status'] = "202: Success";
        echo "<script>window.location.href = 'add_results.php'</script>";
    } else {
        $_SESSION['status'] = "505: Server error: " . mysqli_erro();
    }
}

//~~~~~~~~~~~~~~~~~~ UPDATING & DELETING RESULTS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// Get delete and update ids for the corresponding results
    if (isset($_GET['update_id'])) {
        $_SESSION['result_id'] = $_GET['update_id'];
        $result_id = $_GET['update_id'];
        $isUpdate = true;
        // Get selected result data
        $stmt = "SELECT * FROM results WHERE id = $result_id";
        $stmt_run = mysqli_query($conn, $stmt);
        $data = mysqli_fetch_assoc($stmt_run);
    }

    //~~~~~~~~~~~~~~~~~~ UPDATING ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (isset($_POST['update_result'])){
        $update_id = $_SESSION['result_id'];
        $team1 = $_POST['team1'];
        $result_team_1 = $_POST['result_team_1'];
        $team2 = $_POST['team2'];
        $result_team_2 = $_POST['result_team_2'];
        $result_date = $_POST['date'];
        $game_week = $_POST['game_week'];

        if ($team1 == $team2){
            echo "<script>alert('A team cannot vs the same team!')</script>";
        }

        // echo "New data: " . $team1 . " <br>";
        // echo "New data: " . $result_team_1 . " <br>";
        // echo "New data: " . $team2 . " <br>";
        // echo "New data: " . $result_team_2 . " <br>";
        // echo "New data: " . $result_date . " <br>";
        // echo "New data: " . $game_week . " <br>";

        // echo "Update id" . $update_id;

        $update_result = "UPDATE `results` SET `team1` = '$team1', `result_team_1` = '$result_team_1', `team2` = '$team2', `result_team_2` = '$result_team_2', `result_date` = '$result_date', `game_week` = '$game_week' WHERE id = '$update_id' ";


        $query_run = mysqli_query($conn, $update_result);

        if ($query_run) {
            // $_SESSION['status'] = "202: Success";
            echo "<script>alert('202: Success')</script>";
            echo "<script>window.location.href = 'add_results.php'</script>";
        } else {
            // $_SESSION['status'] = "505: Server error: " . mysqli_error();
            echo "<script>alert('505: Error')</script>";
            echo "<script>window.location.href = 'add_results.php'</script>";
            
        }
    }


    //~~~~~~~~~~~~~~~~~~ DELETING ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (isset($_GET['del_id'])) {
        // Get delete id for the corresponding record

        $delete_id = $_GET['del_id'];

        $stmt = "DELETE FROM results WHERE id = '$delete_id' ";
        $stmt_run = mysqli_query($conn, $stmt);

        if($stmt_run){
            echo "<script>alert('Result deleted successfully');</script>";
           echo "<script>window.location.href = 'add_results.php'</script>";
        }else{
             echo "<script>alert('Error while deleting record');</script>";
             echo "<script>window.location.href = 'add_results.php'</script>";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Fixture</title>

    <link href="../assets/logos/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Custom css -->
    <!-- <link rel="stylesheet" href="../assets/css/custom.css"> -->


</head>

<body>

    <main>
        <div class="hero mx-4">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <!-- <div class="container"> -->
                    <div class="row justify-content-center" >
                        <div class="col-lg-4 d-flex flex-column align-items-center justify-content-center overflow-y-auto">

                            <?php include('notif.php'); ?>
                            <!-- <img class="rounded-circle" src="../assets/img/favicon.png" style="height: 80px; width:80px;"> -->
                            <a href="#" class="logo d-flex justify-content-center w-auto">
                                <span class="d-none d-lg-block my-4 text-danger"><b>ADMIN | <span>KHOSA LEAGUE</span></b></span>
                            </a>

                            <a href="#" class="logo d-flex align-items-center w-auto">
                                 <?php if($isUpdate){ ?> 
                                    <span class="d-none d-lg-block text-warning">Update Results</span>
                                <?php }else{?>
                                    <span class="d-none d-lg-block text-success">Add Results</span>
                                    <?php } ?>
                            </a>

                            <div class="card mb-3">
                                <div class="card-body">

                                    <form action="add_results.php" method="post" class="row g-3 pt-4 pb-2" enctype="multipart/form-data">
                                        <div class="col-12">
                                            <label class="form-label text-primary">Team 1</label>
                                            <div class="col-sm-12">
                                                <select class="form-select" name="team1" aria-label="Default select example">
                                                    <option selected>
                                                        <?php if($isUpdate){echo $data['team1']; ?> 
                                                            <?php }else{?>
                                                    ---
                                                    </option><?php } ?>

                                                    <?php while ($club1 = mysqli_fetch_assoc($query_club1_run)) { ?>
                                                        <option value="<?= $club1['name']; ?>"><?= $club1['name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label text-primary">Result Team 1</label>
                                            <input type="text" name="result_team_1" class="form-control" required value="<?php if($isUpdate){echo $data['result_team_1']; ?> <?php }else{?> <?php } ?>">
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label text-primary">Team 2</label>
                                            <div class="col-sm-12">
                                                <select class="form-select" name="team2" aria-label="Default select example">
                                                    <option style="color: red" selected>
                                                        <?php if($isUpdate){echo $data['team2']; ?> 
                                                            <?php }else{?>
                                                    ---
                                                    </option><?php } ?>

                                                    <?php while ($club2 = mysqli_fetch_assoc($query_club2_run)) { ?>
                                                        <option value="<?= $club2['name']; ?>"><?= $club2['name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label text-primary">Result Team 2</label>
                                            <input type="text" name="result_team_2" class="form-control" required value="<?php if($isUpdate){echo $data['result_team_2']; ?> <?php }else{?> <?php } ?>">
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label text-primary">Result Date</label>
                                            <input type="date" name="date" class="form-control" required value="<?php if($isUpdate){echo $data['result_date']; ?> <?php }else{?> <?php } ?>">
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label text-primary">Game Week</label>
                                            <div class="col-sm-12">
                                                <select class="form-select" name="game_week" aria-label="Default select example">
                                                    <option style="color: red" selected>
                                                        <?php if($isUpdate){echo $data['game_week']; ?> 
                                                            <?php }else{?>
                                                    ---
                                                    </option><?php } ?>
                                                    <option value="Week 1">Week 1</option>
                                                    <option value="Week 2">Week 2</option>
                                                    <option value="Week 3">Week 3</option>
                                                    <option value="Week 4">Week 4</option>
                                                    <option value="Week 5">Week 5</option>
                                                    <option value="Week 6">Week 6</option>
                                                    <option value="Week 7">Week 7</option>
                                                    <option value="Week 8">Week 8</option>
                                                    <option value="Week 9">Week 9</option>
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

                                </div>
                            </div>

                        </div>


                        <div class="col-lg-8 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="card-title">Latest Fixtures</h2>
                                    <table class="table table-data table-striped">
                                        <thead>
                                            <th>Team 1</th>
                                            <th></th>
                                            <th>Team 2</th>
                                            <th></th>
                                            <th>Result Date</th>
                                            <th>Game Week</th>
                                            <th class="text-center">Action</th>
                                        </thead>
                                        <tbody>
                                            <?php while ($result = mysqli_fetch_assoc($results_run)) { ?>
                                                <tr>
                                                    <td><?= $result['team1']; ?></td>
                                                    <td><?= $result['result_team_1']; ?></td>
                                                    <td><?= $result['team2']; ?></td>
                                                    <td><?= $result['result_team_2']; ?></td>
                                                    <td><?= $result['result_date']; ?></td>
                                                    <td><?= $result['game_week']; ?></td>
                                                    <td>
                                                        <a class="btn btn-sm btn-primary" href="add_results.php?update_id=<?= $result['id']; ?>">Update</a>

                                                        <a onclick="return confirm('Are you sure, you want to delete the rcord?')" class="btn btn-sm btn-danger" href="add_results.php?del_id=<?= $result['id']; ?>">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->

            </section>

        </div>
    </main>

    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>




    <!-- including the JS from bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>
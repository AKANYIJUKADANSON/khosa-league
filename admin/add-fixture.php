<?php
    session_start();
    include('config.php');

    // Get teams
    $query_clubs = "SELECT `name` FROM clubs";
    $query_club1_run = mysqli_query($conn, $query_clubs);
    $query_club2_run = mysqli_query($conn, $query_clubs);

    // Get fixtures
    $fixtures = "SELECT * FROM fixtures";
    $fix_run = mysqli_query($conn, $fixtures);

    if (isset($_POST['submit'])) {
        $team1 = $_POST['team1'];
        $team2 = $_POST['team2'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $matchday = $_POST['matchday'];
        $pitch = $_POST['pitch'];

        // echo $team1, $team2, $date, $time;

        $addFixture = "INSERT INTO fixtures(team1, team2, date, time, week, pitch)
            VALUES('$team1', '$team2', '$date', '$time', '$matchday', '$pitch')";

        $query_run = mysqli_query($conn, $addFixture);
        if ($query_run) {
            $_SESSION['status'] = "Fixture added successfully";
            header('location:add-fixture.php');
        } else {
            $_SESSION['status'] = "Error while adding the fixture";
        }
    }

    if (isset($_GET['delete_id'])) {

        $fixtureToDeleteId = $_GET['delete_id'];
        if(!empty($fixtureToDeleteId)){
            echo "<script>alert('Are you sure? You want to delete this fixture');</script>";

            $delete = "DELETE FROM fixtures WHERE id= $fixtureToDeleteId ";
            if(mysqli_query($conn, $delete)){
                $_SESSION['status'] = "Fixture deleted successfully";
                echo "<script>window.location.href = 'add-fixture.phpp'</script>";
            }else{
                $_SESSION['status'] = "Error while deleting the fixture";
                echo "<script>window.location.href = 'add-fixture.phpp'</script>";
            }
        }else{
            $_SESSION['status'] = "No fixture was selected";
            echo "<script>window.location.href = 'add-fixture.phpp'</script>";
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

    <!-- <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
    <!-- <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">


    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/custom.css"> -->


</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <?php include('notif.php'); ?>
                            <img class="rounded-circle" src="../assets/img/favicon.png" style="height: 80px; width:80px;">
                            <a href="#" class="logo d-flex justify-content-center w-auto">
                                <span class="d-none d-lg-block mt-4 text-danger"><em><b>ADMIN</b></em></span>
                            </a>

                            <a href="#" class="logo d-flex align-items-center w-auto">
                                <span class="d-none d-lg-block">KHOSA LEAGUE | Add fixture</span>
                            </a>

                            <div class="card mb-3">
                                <div class="card-body">

                                    <form action="add-fixture.php" method="post" class="row g-3 pt-4 pb-2" enctype="multipart/form-data">
                                        <div class="col-12">
                                            <label class="form-label">First Team</label>
                                            <div class="col-sm-12">
                                                <select class="form-select" name="team1" aria-label="Default select example">
                                                    <option selected>---</option>
                                                    <?php while ($club1 = mysqli_fetch_assoc($query_club1_run)) { ?>
                                                        <option value="<?= $club1['name']; ?>"><?= $club1['name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Second Team</label>
                                            <div class="col-sm-12">
                                                <select class="form-select" name="team2" aria-label="Default select example">
                                                    <option selected>---</option>
                                                    <?php while ($club2 = mysqli_fetch_assoc($query_club2_run)) { ?>
                                                        <option value="<?= $club2['name']; ?>"><?= $club2['name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Date</label>
                                            <input type="date" name="date" class="form-control" required>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Time</label>
                                            <input type="time" name="time" class="form-control" required>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Matchday</label>
                                            <select class="form-select" name="matchday" aria-label="Default select example">
                                                    <option selected>---</option>
                                                    <option value="Matchday 1">Matchday 1</option>
                                                    <option value="Matchday 2">Matchday 2</option>
                                                    <option value="Matchday 3">Matchday 3</option>
                                                    <option value="Matchday 4">Matchday 4</option>
                                                    <option value="Matchday 5">Matchday 5</option>
                                                    <option value="Matchday 6">Matchday 6</option>   
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Pitch</label>
                                            <select class="form-select" name="pitch" aria-label="Default select example">
                                                    <option selected>---</option>
                                                    <option value="Pitch 1">Pitch 1</option>
                                                    <option value="Pitch 2">Pitch 2</option>   
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-success w-100" name="submit" type="submit">ADD</button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>


                        <div class="col-md-8 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="card-title">Latest Fixtures</h2>
                                    <table class="table table-data table-striped">
                                        <thead>
                                            <th>Team 1</th>
                                            <th>Team 2</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Matchday</th>
                                            <th>Pitch</th>
                                            <th>Actions</th>
                                        </thead>
                                        <tbody>
                                            <?php while ($fix = mysqli_fetch_assoc($fix_run)) { ?>
                                                <tr>
                                                    <td><?= $fix['team1']; ?></td>
                                                    <td><?= $fix['team2']; ?></td>
                                                    <td><?= $fix['date']; ?></td>
                                                    <td><?= date('h:i a', strtotime($fix['time'])); ?></td>
                                                    <td><?= $fix['week']; ?></td>
                                                    <td><?= $fix['pitch']; ?></td>
                                                    <td>
                                                        <a class="btn btn-sm btn-primary" href="action.php?update_id=<?= $fix['id']; ?>">Update</a>
                                                        <a class="btn btn-sm btn-danger" href="action.php?delete_id=<?= $fix['id']; ?>">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
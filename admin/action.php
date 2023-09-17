<?php
    session_start();
    include('config.php');
    // Get update id
    if (isset($_GET['update_id'])) {
        $fixtureToUpdate = $_GET['update_id'];

        // Get teams
        $query_clubs = "SELECT `name` FROM clubs";
        $query_club1_run = mysqli_query($conn, $query_clubs);
        $query_club2_run = mysqli_query($conn, $query_clubs);

        // Get selected fixture data
        $stmt = "SELECT * FROM fixtures WHERE id = $fixtureToUpdate";
        $stmt_run = mysqli_query($conn, $stmt);
        $data = mysqli_fetch_assoc($stmt_run);
        ?>

        <html lang="en">

            <head>

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            </head>

            <body>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <?php include('notif.php'); ?>
                            <div class="d-flex justify-content-center py-4">
                                <h3 class="logo d-flex align-items-center w-auto">
                                    <span class="d-none d-lg-block text-secondary">KHOSA LEAGUE | Update fixture</span>
                                </h3>
                            </div>

                            <div class="card mb-3">

                                <div class="card-body">

                                    <form action="update-fixture.php" method="post" class="row g-3 pt-4 pb-2" enctype="multipart/form-data">
                                        <div class="col-12">
                                            <input type="hidden" name="editId" value="<?=$fixtureToUpdate;?>">
                                            <label class="form-label">First Team</label>
                                            <div class="col-sm-12">
                                                <select class="form-select" name="team1" aria-label="Default select example">
                                                    <option selected><?=$data['team1']; ?></option>
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
                                                    <option selected><?= $data['team2']; ?></option>
                                                    <?php while ($club2 = mysqli_fetch_assoc($query_club2_run)) { ?>
                                                        <option value="<?= $club2['name']; ?>"><?= $club2['name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Date</label>
                                            <input type="date" name="date" value="<?= $data['date']; ?>" class="form-control" required>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Time</label>
                                            <input type="time" name="time" value="<?= $data['time']; ?>" class="form-control" required>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-success w-100" name="update" type="submit">Update</button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </body>

        </html>

    <?php 
        }else{
            
            $fixtureToDeleteId = $_GET['delete_id'];
            if(!empty($fixtureToDeleteId)){
                echo "<script>alert('Are you sure? You want to delete this fixture');</script>";

                $delete = "DELETE FROM fixtures WHERE id=$fixtureToDeleteId";
                if(mysqli_query($conn, $delete)){
                    $_SESSION['status'] = "Fixture deleted successfully";
                    header('location:add-fixture.php');
                }else{
                    $_SESSION['status'] = "Error while deleting the fixture";
                    header('location:add-fixture.php');
                }
            }else{
                $_SESSION['status'] = "No fixture was selected";
                header('location:add-fixture.php');
            }
        }
    ?>


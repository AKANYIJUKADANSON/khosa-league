<?php
    session_start();
    include('config.php');
    $isUpdate = false;

    // Get Club names
    $query_teams = "SELECT `name` FROM clubs";
    $query_teams_run = mysqli_query($conn, $query_teams);

    // Get players
    $players = "SELECT * FROM players";
    $players_run = mysqli_query($conn, $players);

    // File upload directory 
    $targetDir = "../assets/img/players/";
    $statusMsg = '';

    // ~~~~~~~~~~~~~~~~~ Adding player ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (isset($_POST['add_player'])) {

        if (!empty($_FILES["file"]["name"])) {
            $fileName = basename($_FILES["file"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Allow certain file formats 
            $allowTypes = array('jpg', 'JPG', 'png', 'PNG');
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server 
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    // Insert image file name and post data into database 

                    $player_age = $_POST['age'];
                    $appearances = $_POST['appearances'];
                    $shirt_no = $_POST['shirt_no'];
                    $goals_scored = $_POST['goals_scored'];
                    $about = $_POST['about'];
                    $name = $_POST['name'];
                    $team = $_POST['team'];
                    $role = $_POST['role'];

                    // echo $fileName . " <br>";
                    // echo $player_age . " <br>";
                    // echo $appearances . " <br>";
                    // echo $shirt_no . " <br>";
                    // echo $goals_scored . " <br>";
                    // echo $about . " <br>";
                    // echo $name . " <br>";
                    // echo $team . " <br>";
                    // echo $role . " <br>";

                    $add_player = "INSERT INTO `players`(`image`, `age`, `appearances`, `shirt_no`, `goals`, `about`, `name`, `team`, `role`)
                        VALUES('$fileName', '$player_age', '$appearances', '$shirt_no', '$goals_scored', '$about', '$name', '$team', '$role' )";

                    $query_player_run = mysqli_query($conn, $add_player);
                    if ($query_player_run) {
                        $_SESSION['status'] = "202: Success";
                        // echo "<script>window.location.href = 'add_player.php'</script>";
                        echo "Nkitadeyo";
                    } else {
                        // $_SESSION['status'] = "505: Error->" . mysqli_error();
                        echo "505: Error->" . mysqli_error();
                    }
                } else {
                    // $statusMsg = "Sorry, there was an error uploading file";
                    echo "Sorry, there was an error uploading file";
                }
            } else {
                // $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
                echo 'Sorry, only jpg, JPG, png, PNG files are allowed to upload.';
            }
        } else {
            // $statusMsg = 'Please select a file to upload and all fields are required';
            echo 'Please select a file to upload and all fields are required';
        }    
    }

    //~~~~~~~~~~~~~~~~~~ UPDATING & DELETING RESULTS ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    // Get delete and update ids for the corresponding results
    if (isset($_GET['update_id'])) {
        $_SESSION['player_id'] = $_GET['update_id'];
        $player_id = $_GET['update_id'];
        $isUpdate = true;

        // Get selected result data
        $stmt = "SELECT * FROM players WHERE id = $player_id ";
        $stmt_run = mysqli_query($conn, $stmt);
        $data = mysqli_fetch_assoc($stmt_run);
    }

    //~~~~~~~~~~~~~~~~~~ UPDATING ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (isset($_POST['update_player'])){

        if (!empty($_FILES["file"]["name"])) {
            $fileName = basename($_FILES["file"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Allow certain file formats 
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (in_array($fileType, $allowTypes)) {
                // Upload file to server 
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    // Insert image file name and post data into database 

                    $update_id = $_SESSION['player_id'];
                    $player_age = $_POST['age'];
                    $appearances = $_POST['appearances'];
                    $shirt_no = $_POST['shirt_no'];
                    $goals_scored = $_POST['goals_scored'];
                    $about = $_POST['about'];
                    $name = $_POST['name'];
                    $team = $_POST['team'];
                    $role = $_POST['role'];

                    // echo $fileName . " <br>";
                    // echo $player_age . " <br>";
                    // echo $appearances . " <br>";
                    // echo $shirt_no . " <br>";
                    // echo $goals_scored . " <br>";
                    // echo $about . "<br>";
                    // echo $name . " <br>";
                    // echo $team . " <br>";
                    // echo $role . " <br>";

                    $update_player = "UPDATE `players` SET `image` = '$fileName', `age` = '$player_age', `appearances` = '$appearances', `shirt_no` = '$shirt_no', `goals` = '$goals_scored', `about` = '$about', `name` = '$name', `team` = '$team', `role` = '$role' WHERE id = '$update_id' ";


                    $query_run = mysqli_query($conn, $update_player);

                    if ($query_run) {
                        echo "<script>alert('202: Success')</script>";
                        echo "<script>window.location.href = 'add_player.php'</script>";
                    } else {
                        echo "<script>alert('505: Error')</script>";
                        echo "<script>window.location.href = 'add_player.php'</script>";
                    }

                } else {
                    $statusMsg = "Sorry, there was an error uploading file";
                }
            } 
            else {
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
            }
        } 
        else {
            // If a new image is not selected then use the name of the one on db
            $update_id = $_SESSION['player_id'];

            // Get selected result data esp the image name
            $stmt = "SELECT * FROM players WHERE id = $update_id ";
            $stmt_run = mysqli_query($conn, $stmt);
            $data = mysqli_fetch_assoc($stmt_run);
            $fileName = $data['image'];

    
            $player_age = $_POST['age'];
            $appearances = $_POST['appearances'];
            $shirt_no = $_POST['shirt_no'];
            $goals_scored = $_POST['goals_scored'];
            $about = $_POST['about'];
            $name = $_POST['name'];
            $team = $_POST['team'];
            $role = $_POST['role'];

            // echo $fileName . " <br>";
            // echo $player_age . " <br>";
            // echo $appearances . " <br>";
            // echo $shirt_no . " <br>";
            // echo $goals_scored . " <br>";
            // echo $about . "<br>";
            // echo $name . " <br>";
            // echo $team . " <br>";
            // echo $role . " <br>";

            $update_player = "UPDATE `players` SET `image` = '$fileName', `age` = '$player_age', `appearances` = '$appearances', `shirt_no` = '$shirt_no', `goals` = '$goals_scored', `about` = '$about', `name` = '$name', `team` = '$team', `role` = '$role' WHERE id = '$update_id' ";


            $query_run = mysqli_query($conn, $update_player);

            if ($query_run) {
                echo "<script>alert('Player record updated successfully');</script>";
                echo "<script>window.location.href = 'add_player.php'</script>";
            } else {
                echo "<script>alert('Error while updating player record')</script>";
                echo "<script>window.location.href = 'add_player.php'</script>";
            }

        } 
    }

    //~~~~~~~~~~~~~~~~~~ DELETING ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    if (isset($_GET['del_id'])) {
        // Get delete id for the corresponding record

        $delete_id = $_GET['del_id'];

        $stmt = "DELETE FROM players WHERE id = '$delete_id' ";
        $stmt_run = mysqli_query($conn, $stmt);

        if($stmt_run){
            echo "<script>alert('Player deleted successfully');</script>";
           echo "<script>window.location.href = 'add_player.php'</script>";
        }else{
             echo "<script>alert('Error while deleting record');</script>";
             echo "<script>window.location.href = 'add_player.php'</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Playere</title>

    <!-- <link href="../assets/logos/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- <link href="../assets/css/style.css" rel="stylesheet"> -->

    <?php //include('../inc/header-links.php'); ?>


</head>

<body>

    <main>
        <div class="hero mx-4">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center p-4">
                    <div class="row justify-content-center" >
                        <?php include('notif.php'); ?>
                        <div class="col-lg-4 d-flex flex-column align-items-center justify-content-center overflow-y-auto">

                            
                            <!-- <img class="rounded-circle" src="../assets/img/favicon.png" style="height: 80px; width:80px;"> -->
                            <a href="#" class="logo d-flex justify-content-center w-auto">
                                <span class="d-none d-lg-block my-2 text-danger"><b>ADMIN | <span>KHOSA LEAGUE</span></b></span>
                            </a>

                            <a href="#" class="logo d-flex align-items-center w-auto">
                                 <?php if($isUpdate){ ?> 
                                    <span class="d-none d-lg-block text-warning mb-2">Update Player</span>
                                <?php }else{?>
                                    <span class="d-none d-lg-block text-success mb-2">Add Player</span>
                                    <?php } ?>
                            </a>

                            <div class="card mb-3" style="border: 2px solid red">
                                <div class="card-body">

                                    <form action="add_player.php" method="post" class="row g-3 pt-4 pb-2" enctype="multipart/form-data">
                                        <div class="col-12">
                                            <label class="form-label text-primary">Image</label>
                                            <div class="col-sm-12">
                                                <!-- <input type="file" name="file" required> -->

                                                <input accept="image/*" type='file' name="file" id="imgInp" /><br>
                                                <p><?php if($isUpdate){echo $data['image']; }?></p>
                                                <img style="height: 100px; width: 100px" id="blah" src="../assets/img/players/<?php if($isUpdate){echo $data['image']; ?> <?php }else{?> <?php } ?>" alt=" " />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label text-primary">Age</label>
                                            <input type="text" name="age" class="form-control" required value="<?php if($isUpdate){echo $data['age']; ?> <?php }else{?> <?php } ?>">
                                        </div>

                                        <!-- <div class="col-12">
                                            <label class="form-label text-primary">Appearances</label>
                                            <input type="text" name="appearances" class="form-control" required value="<?php //if($isUpdate){echo $data['appearances']; ?> <?php //}else{?> <?php //} ?>">
                                        </div> -->

                                        <!-- <div class="col-12">
                                            <label class="form-label text-primary">Shirt Number</label>
                                            <input type="text" name="shirt_no" class="form-control" required value="<?php //if($isUpdate){echo $data['shirt_no']; ?> <?php //}else{?> <?php //} ?>">
                                        </div> -->

                                        <!-- <div class="col-12">
                                            <label class="form-label text-primary">Goals Scored</label>
                                            <input type="text" name="goals_scored" class="form-control" required value="<?php //if($isUpdate){echo $data['goals']; ?> <?php //}else{?> <?php //} ?>">
                                        </div> -->

                                        <div class="col-12">
                                            <label class="form-label text-primary">about</label>

                                            <textarea name="about" id=""  rows="2" class="form-control" required><?php if($isUpdate){echo $data['about']; ?> <?php }else{?> <?php } ?></textarea>

                                            
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label text-primary">Name</label>
                                            <input type="text" name="name" class="form-control" required value="<?php if($isUpdate){echo $data['name']; ?> <?php }else{?> <?php } ?>">
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label text-primary">Team</label>
                                            <div class="col-sm-12">
                                                <select class="form-select" name="team" aria-label="Default select example">
                                                    <option style="color: red" selected>
                                                        <?php if($isUpdate){echo $data['team']; ?> 
                                                            <?php }else{?>
                                                    ---
                                                    </option><?php } ?>

                                                    <?php while ($teams = mysqli_fetch_assoc($query_teams_run)) { ?>
                                                        <option value="<?=$teams['name']; ?>"><?= $teams['name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label text-primary">Role</label>
                                            <input type="text" name="role" class="form-control" required value="<?php if($isUpdate){echo $data['role']; ?> <?php }else{?> <?php } ?>">
                                        </div>


                                        <div class="col-12">
                                            <?php if($isUpdate){ ?> 
                                                <button class="btn btn-warning w-100" name="update_player" type="submit">Update</button>
                                            <?php }else{?>
                                                <button class="btn btn-success w-100" name="add_player" type="submit">ADD</button>
                                             <?php } ?>
                                            
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>


                        <div class="col-lg-7 d-flex flex-column align-items-center mt-4" style="border: 2px solid deepskyblue">
                            <h2 class="card-title">Players</h2>
                            <!-- <div class="card mb-3" style="overflow: auto"> -->
                                <div class="card mb-3"  style="height: 90vh; width: 100%; border: 2px solid red; overflow: auto">
                                <div class="card-body">
                                    
                                    <table class="table table-border table-data table-striped datatable overflow-auto">
                                        <thead>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <!-- <th>Apprncs</th> -->
                                            <!-- <th>Shirt No/</th> -->
                                            <!-- <th>GS</th> -->
                                            <th>About</th>
                                            <th>Team</th>
                                            <th>Role</th>
                                            <th>Image</th>
                                            <th class="text-center">Action</th>
                                        </thead>
                                        <tbody>
                                            <?php while ($player = mysqli_fetch_assoc($players_run)) { ?>
                                                <tr>
                                                    <td><span class="text-capitalize"><?php echo $player['name']; ?></span></td>
                                                    <td><?= $player['age']; ?></td>
                                                    <!-- <td><?php //$player['appearances']; ?></td> -->
                                                    <!-- <td><?php //$player['shirt_no']; ?></td> -->
                                                    <!-- <td><?php //$player['goals']; ?></td> -->
                                                    <td style="max-width:100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis"><?= $player['about']; ?></td>
                                                    <td><?= $player['team']; ?></td>
                                                    <td><?= $player['role']; ?></td>
                                                    <td><?= $player['image']; ?></td>
                                                    <td>
                                                        <a class="btn btn-sm btn-primary" href="add_player.php?update_id=<?= $player['id']; ?>">Update</a>

                                                        <a onclick="return confirm('Are you sure, you want to delete the player?')" class="btn btn-sm btn-danger" href="add_player.php?del_id=<?= $player['id']; ?>">Delete</a>
                                                    </td>
                                                    
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

        </div>
    </main>

    <!-- Script to display image on input -->
    <script>
      imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>

    <!-- ============== Footer -->
    <?php //include('../inc/footer.php'); ?>

    <!-- <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script> -->




   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>
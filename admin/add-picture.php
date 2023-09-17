<?php
session_start();
include('config.php');

// Get teams
$query_clubs = "SELECT `name` FROM clubs";
$query_club_run = mysqli_query($conn, $query_clubs);

// Get available images
$query_gallery = "SELECT * FROM gallery ORDER BY date_created DESC";
$gallery_images_run = mysqli_query($conn, $query_gallery);

// File upload directory 
$targetDir = "../assets/img/gallery/";

// Saving image and other related data
if (isset($_POST["submit"])) {
    if (!empty($_FILES["file"]["name"])) {
        $imageName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $imageName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'JPG', 'png', 'PNG', 'gif', 'GIF');
        
        if (in_array($fileType, $allowTypes)) {
            // Upload file to server 
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                // Insert image file name and post data into database 

                $imageCaption = $_POST['caption'];
                $team = $_POST['team'];

                $insert = $conn->query("INSERT INTO gallery (club, image, caption, date_created) 
                VALUES ('" . $team . "', '". $imageName ."', '" . $imageCaption . "', NOW())");
                if ($insert) {
                    $_SESSION['status'] = "image uploaded successfully";
                    header('location:add-picture.php');
                } else {
                    $_SESSION['status'] = "image upload failed, please try again.";
                }
            } else {
                $_SESSION['status'] = "Sorry, there was an error uploading image";
            }
        } else {
            $_SESSION['status'] = 'Sorry, only JPG, JPEG, PNG, & GIF images with only numbers and letters are allowed to upload.';
        }
    } else {
        $_SESSION['status'] = 'Please select an image to upload and all fields are required';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHOSA|Admin - Add picture</title>

    <!-- Favicons -->
    <link href="../assets/logos/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Custom css -->
    <link rel="stylesheet" href="../assets/css/custom.css">


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
                                <span class="d-none d-lg-block my-4">KHOSA LEAGUE | Add Image</span>
                            </a>

                            <div class="card mb-3">

                                <div class="card-body">

                                    <!-- General Form Elements -->
                                    <form action="add-picture.php" class="row g-3 pt-4 pb-2 my-4" method="post" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <label for="inputText">Image</label>

                                            <input type="file" name="file" accept="image/*" onchange="loadFile(event)" required>
                                            <img class="mt-2" id="output" width="200" />
                                            <script>
                                                var loadFile = function(event) {
                                                    var image = document.getElementById('output');
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                            </script>
                                        </div>

                                        <div class="col-12">
                                            <label for="inputPassword">Caption</label>
                                            <textarea class="form-control" name="caption" style="height: 100px" required></textarea>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Team</label>
                                            <div class="col-sm-12">
                                                <select class="form-select" name="team" aria-label="Default select example">
                                                    <option selected>Select team</option>
                                                    <?php while ($club = mysqli_fetch_assoc($query_club_run)) { ?>
                                                        <option value="<?= $club['name']; ?>"><?= $club['name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-success w-100" name="submit" type="submit">ADD</button>
                                        </div>

                                    </form><!-- End General Form Elements -->

                                </div>
                            </div>
                        </div>

                        <div style="height: 80vh; padding-top: 7%; overflow-y:auto;" class="col-md-8 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="card-title">Gallery</h2>
                                    <table class="table table-data table-striped">
                                        <thead>
                                            <th>Image</th>
                                            <th>Caption</th>
                                            <th>Club</th>
                                            <th>Actions</th>
                                        </thead>
                                        <tbody>
                                            <?php while ($gallery_image = mysqli_fetch_assoc($gallery_images_run)) { ?>
                                                <tr>
                                                    <td>
                                                        <img class="rounded-circle" height="50" width="50" src="../assets/img/gallery/<?= $gallery_image['image']; ?>" alt="">
                                                        <br>
                                                        <span><?= $gallery_image['image']; ?></span>
                                                    </td>
                                                    <td><?= $gallery_image['caption']; ?></td>
                                                    <td><?= $gallery_image['club']; ?></td>
                                                    <td>
                                                        <!-- <a class="btn btn-sm btn-primary" href="action.php?update_id=<?php //echo $fix['id']; ?>">Update</a> -->
                                                        <a class="btn btn-sm btn-primary" href="#">Update</a>

                                                        <!-- <a class="btn btn-sm btn-danger" href="action.php?delete_id=<?php //echo $fix['id']; ?>">Delete</a> -->
                                                        <a class="btn btn-sm btn-danger" href="#">Delete</a>
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



















    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.min.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/navbartoggle.js"></script>

</body>

</html>
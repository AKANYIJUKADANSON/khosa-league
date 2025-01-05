<?php
include('config.php');

$statusMsg = '';

// File upload directory 
$targetDir = "../assets/img/newsAndUpdates/";

if (isset($_POST["submit"])) {
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

                $postTitle = $_POST['title'];
                $postBody = $_POST['body'];

                $insert = $conn->query("INSERT INTO news (file_name,title, body, created_on) VALUES ('" . $fileName . "', '" . $postTitle . "', '" . $postBody . "', NOW())");
                if ($insert) {
                    $statusMsg = "Post uploaded successfully";
                } else {
                    $statusMsg = "Post upload failed, please try again.";
                }
            } else {
                $statusMsg = "Sorry, there was an error uploading file";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select a file to upload and all fields are required';
    }
}

// Display status message 
echo $statusMsg;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>

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

    <div class="card m-4 col-lg-8">
    <h2 class="card-title" style="text-align: center;">Add a Post</h2>
    <div class="card-body">
        
        <!-- General Form Elements -->
        <form action="posts.php" method="post" enctype="multipart/form-data">

            <div class="row mb-3">
                <label for="inputText">Post Image</label>
                <div class="col-sm-10">
                    <input type="file" name="file" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText">Post Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="body" style="height: 100px" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-success">POST</button>
                </div>
            </div>

        </form><!-- End General Form Elements -->

    </div>
    </div>


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
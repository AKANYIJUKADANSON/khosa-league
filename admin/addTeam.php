<?php
include('config.php');

if (isset($_POST['submit'])) {
    $position = $_POST['position'];
    $club = $_POST['club'];
    $gd = $_POST['goalDiff'];
    $points = $_POST['points'];

    echo $position, $club, $gd, $points;

    $query = "INSERT INTO ekimeza(position, club, goal_difference, points)
        VALUES('$position', '$club', '$gd', '$points' )";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        echo "Registered successfully";
        header('Location: addTeam.php');
    }
}

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

    <div class="card m-4 col-lg-6">
        <h2 class="card-title" style="text-align: center;">Add Team</h2>
        <div class="card-body">

            <!-- General Form Elements -->
            <form action="addTeam.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputText">Position</label>
                    <div class="col-sm-10">
                        <input type="text" name="position" placeholder="Enter position">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText">Club</label>
                    <div class="col-sm-10">
                        <input type="text" name="club" placeholder="Enter club name" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText">Goal Difference</label>
                    <div class="col-sm-10">
                        <input type="number" name="goalDiff" placeholder="Enter goal difference" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText">Points</label>
                    <div class="col-sm-10">
                        <input type="number" name="points" placeholder="Enter points">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-success">ADD TEAM</button>
                    </div>
                </div>
                </p>
            </form>

        </div>
    </div>
</body>

</html>
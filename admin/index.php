<?php
    session_start();
    include('config.php');
    error_reporting(0);

    if (isset($_POST['login'])) {
        $user_email = $_POST['user_email'];
        $password = $_POST['password'];

        // echo $user_email, $password;

        // Get db user data
        $query = "SELECT * FROM `admin` WHERE `email` = '$user_email'";
        $query_run = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($query_run);

        if ($data['email'] == $user_email && $data['password'] == $password) {
            $_SESSION['status'] = "Login successfully";
            echo "<script>window.location.href = 'landing_page.php'</script>";

            // echo "User email: ". $user_email . " user paswd: ". $password;
            // echo "db email: ". $data['email'] . " db paswd: ". $data['password'];
        } else {
            $_SESSION['status'] = "Wrong email or password, please try again !";
            // echo "Error logging in";
            echo "<script>window.location.href = 'index.php'</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Login</title>

  
    <link href="../assets/logos/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <?php include('notif.php'); ?>
                            <div class="d-flex justify-contents-center">
                                <div class="d-block" style="border: 2px solid re">
                                    <img class="rounded-circle mx-2" src="../assets/img/favicon.png" style="height: 80px; width:80px;">
                                </div>
                                <div class="d-block mt-0" style="border: 2px solid gree">
                                    <h4 href="#" class="logo d-flex justify-content-center w-auto">
                                        <span class="d-none d-lg-block text-danger"><em><b>ADMIN</b></em></span>
                                    </h4>

                                    <h4 class="logo d-flex align-items-center w-auto">
                                        <span class="d-none d-lg-block">LOGIN</span>
                                    </h4>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">

                                    <form action="index.php" method="post" class="row g-3 pt-4 pb-2" enctype="multipart/form-data">
                                        
                                        <div class="col-12">
                                            <label class="form-label"><i class="bi bi-envelope">Email</i></label>
                                            <input type="email" name="user_email" class="form-control" required>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" name="login" type="submit">LOGIN</button>
                                        </div>

                                        <div class="col-12">
                                            Have No Account? <a class="text-decoration-none color-primary" href="create-account.php">Create Account</a>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>

    <!-- including the JS from bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>
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

        // Check if the email exists
        if (mysqli_num_rows($query_run) == 0){
            $_SESSION['status'] = "Email does not exist, check your email and try again!";
            $_SESSION['color'] = "danger";
            echo "
                    <script>
                        setTimeout(() => {
                            window.location.href = 'index';
                        }, 1000);
                    </script>
                ";
        }else{

            if ($data['email'] == $user_email && $data['password'] == $password) {
                // Get the user's data
                $_SESSION['auth_status'] = 1;
                $_SESSION['login_user_name'] = $data['name'];
                $_SESSION['password'] = $data['password'];
                $_SESSION['login_user_email'] = $data['email'];
                $_SESSION['login_user_image'] =  $data['image'];

                $_SESSION['status'] = "Login Successful";
                $_SESSION['color'] = "success";
                echo "
                    <script>
                        setTimeout(() => {
                            window.location.href = 'dashboard';
                        }, 300);
                    </script>
                ";
            } else {
                unset($_SESSION['auth_status']);
                $_SESSION['status'] = "Wrong password, please try again!";
                $_SESSION['color'] = "danger";
                echo "
                    <script>
                        setTimeout(() => {
                            window.location.href = 'index';
                        }, 3000);
                    </script>
                ";
                
            }
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

    <?php include('inc/header.php'); ?>

    <script type="text/javascript">
        // function preventBack(){
        //     window.history.forward()
        // }
        // setTimeout(preventBack(), 0);
        // window.onunload= function(){null};
    </script>

    <style>
        body{
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(assets/img/banner.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            
        }
    </style>

</head>

<body>

    <main>
        <div class="container">
     
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <?php include('notif.php'); ?>
                            <div class="card col-md-12 mb-3 mt-2">
                            
                                <div class="card-body">
                                <p href="#" class="card-title text-center; fs-6 text-center text-primary fw-bolder">ADMIN </p>
                                    <form action="index.php" method="post" class="row g-3  pb-2" enctype="multipart/form-data">
                                        
                                        <div class="col-12">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="user_email" class="form-control" required>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" id="password_input_field" class="form-control" required>
                                            <!-- <input type="checkbox" onclick="togglePassword()" id="toggleIcon"> Show Password -->
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" name="login" type="submit">LOGIN</button>
                                        </div>

                                        <!-- <div class="col-12">
                                            Have No Account? <a class="text-decoration-none color-primary" href="create-account.php">Create Account</a>
                                        </div> -->
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>

    
    <!-- Toggle the password -->
    <script>
        function togglePassword() {
            var toggler = document.getElementById('password_input_field');

            if(toggler.type === "password"){
                toggler.type = "text";
            }else{
                toggler.type = "password";
            }
        }
    </script>
    
    <?php include('inc/footer-links.php'); ?>

</body>

</html>
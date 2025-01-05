<?php
  session_start();
    
  include('config.php');

  // Prevent unauthorized users from accessing this page
  if($_SESSION['auth_status'] == 0){
    $_SESSION['status'] = "First login to proceed please";
    $_SESSION['color'] = "danger";
    header("location: index");
  }

  if(isset($_POST['submit'])){

    $user_email = $_SESSION['login_user_email'];
    $old_password = $_SESSION['password'];

    // echo "Email". $user_email;
    // echo "Old Password". $old_password;

    $currentPassword = $_POST['currentPassword'];
    $newpassword = $_POST['newpassword'];
    $renewpassword = $_POST['renewpassword'];
    // echo $currentPassword ."-". $renewpassword ."-". $newpassword;

    if (!($old_password == $currentPassword)) {
      $_SESSION['status'] = "Wrong current password";
      $_SESSION['color'] = "danger";
    }else if (!($newpassword == $renewpassword)) {
        $_SESSION['status'] = "New Passwords do not match";
        $_SESSION['color'] = "danger";
    }else{

      $query_admin = "UPDATE `admin` SET `password` = '$newpassword' WHERE email = '$user_email' ";
      $query_admin_run = mysqli_query($conn, $query_admin);

      if ($query_admin_run) {
          $_SESSION['status'] = "Password changed Successful";
          $_SESSION['color'] = "success";

          // Change the password in session to new password
          $_SESSION['password'] = $newpassword;
          echo "
              <script>
                  setTimeout(() => {
                      window.location.href = 'settings';
                  }, 1000);
              </script>
          ";
      } else {
          unset($_SESSION['auth_status']);
          $_SESSION['status'] = "Paasword change failure";
          $_SESSION['color'] = "danger";
          echo "
              <script>
                  setTimeout(() => {
                      window.location.href = 'settings';
                  }, 1000);
              </script>
          ";
          
      }
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('inc/header.php'); ?>
  <title>Admin ~ Settings</title>
</head>
<body>

  <!-- ======= Header & Sidebar ======= -->
  <?php //include('inc/navbar.php'); ?>
  <?php // include('inc/sidebar.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Settings</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Settings</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
    
      <div class="row">
        <div class="col-xl-8">
          <?php include('notif.php'); ?>

          <div class="card mt-3">
              <h3 class="card-title text-center fs-3 fw-bolder text-black">Change Password</h3>
            <!-- </div> -->
            <div class="card-body">

              <form class="pt-4" method="POST">
                <div class="row mb-3">
                  <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="currentPassword" type="password" class="form-control" id="currentPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                  <div class="col-md-8 col-lg-9">
                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-danger">Change Password</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include('inc/footer-links.php'); ?>

</body>

</html>
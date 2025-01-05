
<?php
    session_start();
    session_unset();
    // reset the auth status sessions
    $_SESSION['auth_status'] = 0;

    header("location: index");
?>


<?php
session_start();
    include('config.php');
    //Get new data and update fixture
    if (isset($_POST['update'])) {
        $fixtureToEditId = $_POST['editId'];
        $newTeam1 = $_POST['team1'];
        $newTeam2 = $_POST['team2'];
        $newDate =  $_POST['date'];
        $newTime =  $_POST['time'];

        echo $fixtureToEditId, $newTeam1, $newTeam2, $newDate, $newTime;
        $update = "UPDATE fixtures SET team1 = '$newTeam1', team2 = '$newTeam2', date = '$newDate', time = '$newTime' WHERE id=$fixtureToEditId";
        $update_run = mysqli_query($conn, $update);
        if($update){
            $_SESSION['status'] = "Updated successfully";
            header('location:add-fixture.php');
        }else{
            $_SESSION['status'] = "Error while updating fixture";
            header('location:add-fixture.php');
        }
    }

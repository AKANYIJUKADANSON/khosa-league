
<?php


    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ REMOTE DATA
    // $host = "127.0.0.1";
    // $user = "khosalea_admin";
    // $password = "Dnyonyowzi@kiosa1";
    // $db = "khosalea_khosa";

    // // Connection to db
    // $conn = mysqli_connect($host, $user, $password, $db);

    // $pdo = new PDO('mysql:host=127.0.0.1;dbname=khosalea_khosa', 'khosalea_admin', 'Dstar@Khosa1');



    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ LOCAL DATA
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "khosa";

    // Connection to db
    $conn = mysqli_connect($host, $user, $password, $db);


    // Connect to the database with
    $pdo = new PDO('mysql:host=localhost;dbname=khosa', 'root', '');
    
?>
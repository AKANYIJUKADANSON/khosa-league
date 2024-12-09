<?php
include "../admin/config.php";
    $product_id = $_GET['pid'];

    // Query products
    $product_query = "SELECT * FROM products WHERE id = $product_id";
    $product_query_run = mysqli_query($conn, $product_query);
    $product = mysqli_fetch_assoc($product_query_run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Product details</h2>
    <p>Product ID: <?= $product['id']?></p>
    <p>Product Name: <?= $product['product_name']?></p>
    <p>Product Category: <?= $product['category']?></p>
    <p>Product price: <?= $product['price']?></p>
    <p>Product Vendor: <?= $product['vendor']?></p>
</body>
</html>
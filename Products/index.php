<?php
/*
#include 'Products/db_connect.php';
require 'db_connect.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Online Shopping Website</h1>
    <div class="products">
        <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "
                <div class='product'>
                    <img src='images/{$row['image']}' alt='{$row['name']}'>
                    <h2>{$row['name']}</h2>
                    <p>\${$row['price']}</p>
                    <a href='cart.php?action=add&id={$row['id']}'>Add to Cart</a>
                </div>
                ";
            }
        } else {
            echo "No products available";
        }
        ?>
    </div>
</body>
</html> */

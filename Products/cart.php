<?php
/*session_start();
#include 'includes/db_connect.php';

require 'db_connect.php' ;

if (isset($_GET['action']) && $_GET['action'] == "add") {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity']++;
    } else {
        $_SESSION['cart'][$id] = array(
            "name" => $row['name'],
            "price" => $row['price'],
            "quantity" => 1
        );
    }
}

if (isset($_GET['action']) && $_GET['action'] == "remove") {
    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Your Cart</h1>
    <div class="cart-items">
        <?php
        if (!empty($_SESSION['cart'])) {
            $total = 0;
            foreach ($_SESSION['cart'] as $id => $item) {
                echo "
                <div class='cart-item'>
                    <h2>{$item['name']}</h2>
                    <p>Price: \${$item['price']}</p>
                    <p>Quantity: {$item['quantity']}</p>
                    <a href='cart.php?action=remove&id=$id'>Remove</a>
                </div>
                ";
                $total += $item['price'] * $item['quantity'];
            }
            echo "<h2>Total: \$$total</h2>";
            echo "<a href='checkout.php'>Proceed to Checkout</a>";
        } else {
            echo "<p>Your cart is empty</p>";
        }
        ?>
    </div>
</body>
</html> */
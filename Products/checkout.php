<?php
/*
session_start();
#include 'includes/db_connect.php';

require 'db_connect.php' ;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // You can add order saving logic here
    unset($_SESSION['cart']);
    echo "<h2>Order has been placed!</h2>";
} else {
    if (!empty($_SESSION['cart'])) {
        echo "<h2>Checkout</h2>";
        echo "<form method='POST'>";
        echo "<input type='submit' value='Place Order'>";
        echo "</form>";
    } else {
        echo "<h2>No items in your cart.</h2>";
    }
}
?> */

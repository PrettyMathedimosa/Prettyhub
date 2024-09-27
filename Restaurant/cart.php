<?php
//sesssion_start();
@include 'config.php';

//add to cart
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    //check if product is already in the cart
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$prodct_id] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = $quantity;
    }
    header('Location: cart.php');
}

//diplay cart items
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $product_query = "SELECT * FROM products WHERE id = $product_id";
        $result = mysqli_query($conn, $product_query);
        $product = mysqli_fetch_assoc($result);
         echo "Product: ". $product['name'] . " | Price: R ". $product['price'] . " | Quantity: " . $quantity;
         echo "<br>";
    }

    echo "<a href='checkout.php'>Proceed to checkout</a>";
} else {
    echo "your cart is empty";
}

?>
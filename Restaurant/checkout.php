<?php
session_start();
@include 'config.php';
//require 'vendor/autoload.php';

//\Stripe\Stripe::setApiKey('sk_test_your_secret_key');

$products_in_cart = [];
foreach ($_SESSION['cart'] as $product_id => $quantity) {
    $produvt_query = "SELECT * FROM products WHERE id = $product_id";
    $result = mysqli_query($conn, $product_query);
    $product = mysqli_fetch_assoc($result);
    $products_in_cart[] = ['name' =>$product['name'], 'price' => $product['price'], 'quantity' => $quantity];

}
//cal total
$total_price = 0;
foreach ($products_in_cart as $product) {
    $total_price += $product['price'] * $product['quantity'];
}
header('Content-Type: application/json');

$checkout_session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [
        [
            'price_data' => [
                'currency' =>'usd',
                'product_data' => [
                    'name' => 'Total Purchase',
                ],
                'unit_amount' => $total_price * 100, // amount in cents
            ],
            'quantity' => 1,
        ],
    ],
    'mode' => 'payment',
    'success_url' => 'http://localhost/success.php',
    'cancel_url' => 'http://localhost/cancel.php',
]);
echo json_encode(['id => $checkout_session->id']);
/*

<script src="https://js.stripe.com/v3/"></script>
<button id="checkout-button">Checkout</button>

<script type="text/javascript">
var stripe = Stripe('pk_test_your_public_key');
var checkoutButton = document.getElementById('checkout-button');

checkoutButton.addEventListener('click', function(){
    fetch('checkout.php', {
        method: 'POST',
    })
    .then(function (response) {
        return response.json();
    })
    .then(function (sessoin) {
        return stripe.redirectToCheckout({ sessionId: session.id });
    });
});
</script>
*/
?>
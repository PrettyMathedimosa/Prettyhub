<?php
/*
@include 'config.php';

//add to cart logic
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    //insert order into database\
    $order_query = "INSERT INTO orders (product_id, quantity) VALUES ('$product_id', '$quantity')";
    mysqli_query($conn, $order_query);

    echo "<script>alert('Product added to cart successfully')</script>";

}

//fetch products from the database
$select_products = mysqli_query($conn, "SELECT * FROM products");

?>

<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Online Restaurant </title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <h1>Products</h1>
        <div class="products">
            <?php while($row = mysqli_fetch_assoc($select_products)) { ?>
                <div class="product">
                    <img src="uploaded_img/<?php echo $row['image']; ?>" alt="Product Image" height="150">
                    <h2><?php echo $row['name']; ?></h2>
                    <p>R<?php echo $row['price']; ?></p>

                    <form method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="quantity" min="1" value="1">
                        <button type="hidden" name="add_to_cart">Add to Cart</button>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>


</body>
</html>
*/
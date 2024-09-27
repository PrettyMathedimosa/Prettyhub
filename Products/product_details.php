<?php
#include '../includes/db_connect.php';
require 'db_connect.php' ;

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id='$id'";
$result = $conn->query($sql);
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1><?php echo $product['name']; ?></h1>
    <img src="../images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
    <p><?php echo $product['description']; ?></p>
    <p>Price: $<?php echo $product['price']; ?></p>
    <a href="../cart.php?action=add&id=<?php echo $product['id']; ?>">Add to Cart</a>
</body>
</html>
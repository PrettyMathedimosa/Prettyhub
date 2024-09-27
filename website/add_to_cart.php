
<?php
   //database connection parameters
  $db_server = "localhost";
   $db_user = "root";
   $db_pass = "";
   $db_name = "furnituredb";
   $conn = "";

   //create connection
   $conn = new mysqli( $db_server, $db_user, $db_pass, $db_name);
   
   //check connection
   if($conn->connect_error) {
     die("connection failed" .$conn->connect_error);
   }
   
   //check if POST data is received
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //get POST data
      $cart = $_POST['cart'];
      $picture_name = $_POST['picture_name'];
      $price = $_POST['price'];
    

      //sql query to insert the product into the cart
      $sql = "INSERT INTO products_cart (cart, picture_name, price) VALUES (?, ? ,?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssd", $cart,$picture_name, $price);

      //execute statement and check success
      if ($stmt->execute()) {
        echo "product successfully added to cart";
      } else {
        echo "error:" . $sql. "<br>" . $conn->error;
      }

      //close prepared statement
      $stmt->close();


   }
   //close connection
   $conn->close();
      
?> 
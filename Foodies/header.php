<?php

@include 'config.php';

#require 'config.php';

?>

<header class="header">

   <div class="flex">

      <a href="#" class="logo">foodies</a>

      <nav class="navbar">
         <a href="admin.php">add products</a>
         <a href="products.php">view products</a>
      </nav>

      <?php

     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "shopping_db";

      //create connection
      $conn = new mysqli($servername,$username,$password,$dbname);

      //check connection
     if ($conn->connect_error){
        die("connection failed: ". $conn->connect_error);

       }

      $conn = mysqli_connect('localhost','root','','shopping_db') or die('connection failed');

     
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart` ") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header> 

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
   //fetch learn more message from table about_us
   $sql = "SELECT learn_more_message FROM about_us ORDER BY id DESC LIMIT 1";
   $result = $conn->query($sql);
   

    if ($result->num_rows > 0) {
        //output the message
        $row = $result->fetch_assoc();
        echo $row['learn_more_message'];
    } else {
         echo "No information available";
    }


   
   //close connection
   $conn->close();
      
?> 

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
   
   //get form data
   
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
    


      //INSERT DATA INTO contact_us table
      $sql = "INSERT INTO contact_us (name, email, message)
              VALUES ('$name',  '$email', '$message')";

      if ($conn->query($sql) === TRUE) {
         echo "message sent successfully";
      } else {
         echo "error:" . $sql . "<br>" . $conn->error;
      }


   
   //close connection
   $conn->close();
      
?> 
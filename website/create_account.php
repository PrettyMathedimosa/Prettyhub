
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
   
   //check if form is submitted
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //RETRIEVE FORM DATA
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];

      //check if passwords match
      if ($password != $confirm_password) {
         die("Passwords do not match");
      }

      //hash the password for security
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      //INSERT DATA INTO DATABASE
      $sql = "INSERT INTO sign_in (first_name, last_name, email, password, confirm_password)
              VALUES ('$first_name', '$last_name', '$email', '$hashed_password', '$hashed_password')";

      if ($conn->query($sql) === TRUE) {
         echo "account created successfully";
      } else {
         echo "error:" . $sql . "<br>" . $conn->error;
      }


   }
   //close connection
   $conn->close();
      
?> 
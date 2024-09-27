
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
   
   //check if form was submitted
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //get form data
      $user = $_POST['username'];
      $pass = $_POST['password'];
    

      //sql query to check if the username exists
      $sql = "SELECT * FROM log_in WHERE username = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s",$user);
      $stmt->execute();
      $result = $stmt->get_result();

      //if username id found
      if ($result->num_rows > 0) {
        //fetch user data
        $row = $result->fetch_assoc();

        //verify password
        if (password_verify($pass, $row['password'])) {
            echo "lofin successful" . $user;
        } else {
            echo "inavalid password";
        }
      } else {
        echo "no user found with username";
      }
      //close prepared statemnet
      $stmt->close();

   }
   //close connection
   $conn->close();
      
?> 
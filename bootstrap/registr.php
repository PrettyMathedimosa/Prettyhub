<?php
$servername = "localhost";
$username = "root";
$password = " ";
$database = "";

//create connection
$conn = new mysqli($servername,$username,$password,$database);

//check if connected
if($conn->connect_error){
    die("not connected" .$conn->connect_error);
}

echo "connected";

$sql = "CREATE TABLE info(
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(40) NOT NULL,
    lastname VARCHAR(40) NOT NULL,
    email VARCHAR(40) NOT NULL,
    passw  VARCHAR(40) NOT NULL, 
    )";

    if($conn->query($sql) === TRUE){
        echo "Table info created successfully";
    }
    else{
        echo "Error creating table:" .$conn->error; 
    }

    $conn->close();
?>
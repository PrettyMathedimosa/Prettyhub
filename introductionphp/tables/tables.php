<?php

$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "prettyshop";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname );

//check connection
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}

//sql to create table
CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY ,
    firstname VARCHAR(30) NOT NULL,
    lastname  VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT
    CURRENT_TIMESTAMP ON UPDATE
    CURRENT_TIMESTAMP
)

if($conn->query($sql) === TRUE){
    echo"Table created successfully";
}
else{
    echo"error creating table:".$conn->error;
}

$conn->close();

?>
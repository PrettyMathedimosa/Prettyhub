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
?>
<?php

$servername = "localhost";
$username ="root";
$password = " ";
$database = "";

//create connection
$conn = new mysqli($servername,$username,$password,$database);

//create if connected
if($conn->connect_error){
    die("not connected" .$conn->connect_error);
}

echo "connected <br>";

$user_name  =$_POST['email'];
$pasww = $_POST['password'];

//sql insert
$sql = "INSERT INTO ";


$conn->close();
?>
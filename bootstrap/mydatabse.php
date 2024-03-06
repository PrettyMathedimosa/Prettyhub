<?php

//create database
$servername = "localhost";
$username = "root";
$password = " ";

//connecting to sql
$conn = new mysqli($servername,$username,$password);

//checking if connected
if($conn->connect_error)
{
    die("not connected: " .$conn->connect_error);
}
echo "connected";

//creating a database
$sql = "CREATE DATABASE    ";

if($conn->query($sql) === TRUE){
    echo "database created successfully";
}
else{
    echo "error:".$conn->connect_error;
}

$conn->close();
?>
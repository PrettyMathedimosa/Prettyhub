<?php

// Database connection
$host = 'localhost';
$username = 'root';
$password = ' ';
$database = ' myclients';

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update record
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $new_name = $_POST['new_name'];
    
    $sql = "UPDATE peopleclients SET name='$new_name' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Delete record
if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM peopleclients WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Edit record
if(isset($_POST['delete'])) {
    

// Close connection
$conn->close();



?>
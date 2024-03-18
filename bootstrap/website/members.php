<?php

if(isset($_SESSION['username']) && isset($_SESSION['id'])){
   
    $sql ="SELECT * FROM users WHERE username ='$username'
     AND password ='$password'";
     $result = mysqli_query($conn,$sql);
}else{
    header("Location:index.php");
}


?>
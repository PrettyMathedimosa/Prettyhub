<?php
if(isset($_POST['username']) && isset($_POST['password']) && 
   isset($_POST['role'])) {

      function test_input($data){
         $data = trim($data);
         $data = stripcslashes($data);
         $data = htmlspecialchars($data);
         return $data;
      }

      $username = test_input($_POST['username']);
      $password = test_input($_POST['password']);
      $role = test_input($_POST['role']);
      
    
   }else{
      header("Location:../index.php");
   }
?>
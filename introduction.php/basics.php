<?php

//form handling
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //htmlspecialchars --covents predefined characters to hmtl entities
    //"--to avoid injecting code to the form or avoid hacking "
    $FName=htmlspecialchars($_POST["Fname"]);
    $LName= htmlspecialchars($_POST["Lname"]);
    $Email=htmlspecialchars($_POST["email"]);
}
 





//$conn->close();
?>

<?php

$FnameErr =" ";
$LnameErr =" ";
$emailErr =" ";

//form handling
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //htmlspecialchars --covents predefined characters to hmtl entities
    //"--to avoid injecting code to the form or avoid hacking "
    $FName=htmlspecialchars($_POST["Fname"]);
    $LName= htmlspecialchars($_POST["Lname"]);
    $Email=htmlspecialchars($_POST["email"]);
}

if(empty($_POST["Fname"]))
{
    $FnameErr = "Name is required"; 
}
 
 
echo "Data submitted ";
echo $FName;
echo "<br>";

echo $LName;
echo "<br>";

echo $Email;




//$conn->close();
?>

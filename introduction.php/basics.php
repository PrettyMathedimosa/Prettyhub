<?php
// PHP code goes here

//declare variables and data type
$name = "John";
$age = 25;


 echo "My name is $name, and I am $age years old."; 


//if statement
$score = 85;

if ($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} else {
    echo "C";
}



//function
function greet($name) {
    echo "Hello, $name!";
}

greet("Alice");



?>

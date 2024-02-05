<?php
// PHP code goes here

<?php
$name = "John";
$age = 25;
?>

<p><?php echo "My name is $name, and I am $age years old."; ?></p>


<?php
$score = 85;

if ($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} else {
    echo "C";
}
?>


<?php
function greet($name) {
    echo "Hello, $name!";
}

greet("Alice");
?>

?>

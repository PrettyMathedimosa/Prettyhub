<?php
//For loop
for($i = 0; $i <= 10; $i++){
    echo "This is iteration number". $i ."<br";
}

//while loop
$x = 1;
while($x <= 5){
    echo "Hi There <br>";
    $x++; 
}

//do while loop
$y = 1;
do{
    echo "This is Do While loop <br>";
    $y++;
}
while($y <= 5);

//foreach loop
$array = array("Daniel","Jane","Jacob","Nhlalala");
foreach ($array as $loopdata){
    echo "My name is " .$loopdata . "<br>";
}
?>
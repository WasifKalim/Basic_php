<?php
$a = 98; // global variable
$b = 9;
echo "Welcome to scope and local/global vars in php<br>";

function printValue(){
    $a = 96; // local variable
    global $a, $b; // global varible k access milta h
    $a =100;
    $b = 1000;
    echo "The value of your variable a is $a and b is $b<br>";

}

echo $a;
printValue();
echo "The value of your variable a is $a and b is $b<br>";

// echo var_dump($GLOBALS); // sara global variables print krta h
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>
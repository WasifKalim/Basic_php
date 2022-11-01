<?php
echo "Welcome to associative arrays in php<br>";

// These are called indexed arrays
// $arr = array('this', 'that', 'what');
// echo arr[0];
// echo arr[1];
// echo arr[2];

// Associative arrays
// $favCol = array(
//     'shubham' => 'red',
//     'rohan' => 'green',
//     'harry' => 'yellow',
//     8 => 'this' );

foreach ($favCol as $key => $value) {
    echo "<br> Favorite clor of $key is $value"
}

echo $favCol['harry'];
echo "<br>";
echo $favCol['rohan'];
echo "<br>";
echo $favCol[8];
?>
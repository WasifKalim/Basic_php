<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbharry";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successfull
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successfull<br>";
}

// Insertion via variables
$name = "shubham";
$destination = "Japan";

// SQL query executed
$sql = "INSERT INTO `phptrip` (`name`, `tripdes`) VALUES ('$name', '$destination')";
// $sql = "DELETE FROM phptrip WHERE `phptrip`.`sno` = 5";
$result = mysqli_query($conn, $sql);


// Add a new trip to the trip table in the database
if($result){
    echo "The record was inserted successfully<br>";
}
else{
    echo "The record was not inserted in the table successfully because of this error: ". mysqli_error($conn);
}
?>
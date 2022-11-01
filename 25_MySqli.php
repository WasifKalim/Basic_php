<?php
// echo "Welcome to the stage where we are ready to get connected to a database<br>";
/* Ways to connect to a MySQL Database
1. MySQLi extension(Procedural and Object oriented)
2. PDO(PHP Data Object)
*/
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successfull
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successfull<br>";
}


// Create a db
$sql = "CREATE DATABASE dbHarry";
$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db was created successfully<br>";
}
else{
echo "The db was not created successfully because of this error -----> ". mysqli_error($conn);
}

?>
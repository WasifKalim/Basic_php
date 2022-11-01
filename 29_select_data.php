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


$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// find the numbers of records returned
$num = mysqli_num_rows($result);
echo $num;

echo "<br>"; 
// Display the rows returned by the sql query
if($num>0){

    // Ye row by row data fetch krke deta h
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row); 
    // echo "<br>"; 
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row); 
    // echo "<br>"; 
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row); 
    // echo "<br>"; 
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row); 
    // echo "<br>"; 


    // We can fetch in bhetar way using while loop
    while($row = mysqli_fetch_assoc($result)){
        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row); 
        echo $row['sno'] . " Hello ". $row['name'] . " Welcome to " . $row['tripdes'];
        echo "<br>"; 
    }
}
?>
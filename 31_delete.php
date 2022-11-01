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

$sql = "SELECT * FROM `phptrip` WHERE `tripdes` = 'china'";
$result = mysqli_query($conn, $sql);

$sql = "DELETE FROM `phptrip` WHERE `tripdes` = 'Japan' LIMIT = 2"; //Limit will make the operations on only to the given no. 
$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br> ";

// checking the error if not deleted
if($result){
    echo "Deleted Successfully.";
}
else{
    $err = mysqli_error($conn);
    echo "Not Delete successfully due to this error -----> $err";
}
?>
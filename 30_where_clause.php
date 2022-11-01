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

// where clause particular data fetch krne m kam ata h
$num = mysqli_num_rows($result);
echo $num . " records found in the DataBase <br>";
$no =1;

if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        echo $no . " Hello ". $row['name'] . " Welcome to " . $row['tripdes'];
        echo "<br>";
        $no = $no + 1;
    }
}

// Usage of where clause to Update data from the database
$sql = "UPDATE `phptrip` SET `name` = 'water' WHERE  `sno` = 1";
$result = mysqli_query($conn, $sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff";  // function tells how many rows are updated or changed
if($result){
    echo "We updated the recorded Successfully";
}
else{
    echo "We could not update the record successfully";
}
?>
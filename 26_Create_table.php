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


// Create a table in the db
$sql = "CREATE TABLE `phptrip` (`sno` INT(8) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `tripdes` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully<br>";
}
else{
echo "The table was not created successfully because of this error -----> ". mysqli_error($conn);
}

?>
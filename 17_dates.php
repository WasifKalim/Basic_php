<?php
echo "Welcome to the world of dates<br>";
// $d = date("d S F Y");
$d = date("d S F Y, g:i A");
echo "Today date is $d <br>";
// Quick Quiz - Post at least 3 examples of dates in php

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l js \of F Y h:i:s A');

$year = date("Y");
echo "<br>";
echo "Copyright $year | All rights reserved"
?>
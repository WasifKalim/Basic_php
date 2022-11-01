<?php 

$name = "Harry is a good boy";
echo $name;
echo "<br>";

echo "The length of " . "my string is " . strlen($name); // "." is used to concat strings
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name); // reverse a string
echo "<br>";
echo strpos($name, "Harry"); // position
echo "<br>";
echo str_replace("Harry", "Rohan", $name); // replace a string
echo "<br>";
echo str_repeat($name, 4); repeat a word
echo "<br>";
echo "<pre>"; // to give extra space
echo rtrim("    this is a good boy     "); // trim a extra spaces from right
echo "<br>";
echo ltrim("    this is a good boy     "); // trim extra space from left
echo "</pre>";
?>

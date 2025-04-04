<?php

// Concatenation
$name = "shruti";
$age = 23;
echo "My name is " .$name;
echo "<br>";
echo "My name is $name";
echo "<br>";
echo "My name is ".$name. " & my age is ".$age;


// String Length
echo "<br>";
$str2 = "My,Favourite";
echo strlen($str2);

// Substring Extraction
echo "<br>";
$str2 = "My,Favourite";
echo substr($str2, 0,5);

// Find & Replace
echo "<br>";
$str = "I Love apples";
echo str_replace("apples", "banana", $str);

// Case Conversion
$text = "hello world";
echo "<br>";
echo strtoupper($text);
echo "<br>";
echo ucwords($text);

// Trimming
$trim = "     hello   world   ";
echo "<br>";
echo trim($trim);
echo "<br>";
echo ltrim($trim);
echo "<br>";
echo rtrim($trim);
echo "<br>";



?>
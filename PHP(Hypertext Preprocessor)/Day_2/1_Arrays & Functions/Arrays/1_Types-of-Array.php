<?php
// Indexed Array
$names = array("John", "Alice", "Mike");
echo $names[0];
echo "<br>";
echo $names[1];
echo "<br>";
echo $names[2];
echo "<br>";


// Associative Array
$ages = array("John" => 25, "Alice" => 30, "Mike" => 20);
echo $ages["Alice"];
echo "<br>";
echo $ages["John"];
echo "<br>";
echo $ages["Mike"];
echo "<br>";

// MultiDimentional Array
$students = array(
array("John", 25, "A"),
array("Alice", 22, "B"),
array("Mike", 24, "A")
);
$students = array(
array("John", 25, "A"),
array("Alice", 22, "B"),
array("Mike", 24, "A")
);
echo $students[0][0];
echo "<br>";
echo $students[0][1];
echo "<br>";
echo $students[1][0];
echo "<br>";
echo $students[0][2];
echo "<br>";
?>
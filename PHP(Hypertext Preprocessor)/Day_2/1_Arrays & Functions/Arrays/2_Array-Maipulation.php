<?php

// Adding Elements

$fruits = array("Apple", "Banana");
$fruits[] = "Cherry"; // Adds Cherry at the end
array_push($fruits, "Mango"); // Adds Mango at the end
print_r($fruits);

// Updating Elements

$fruits[1] = "Strawberry"; // Updates Banana to Strawberry

// Counting Elements

$fruits = array("Apple", "Banana", "Cherry");
echo count($fruits);

// Deleting Elements

unset($fruits[1]); // Removes Banana
print_r($fruits);

?>
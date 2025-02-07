<?php
$terms = 20;
$first = 0;
$second = 1;
$count = 0;
echo "Fibonacci Series: ";
while ($count < $terms) {
echo $first . " <br>";
$next = $first + $second;
$first = $second;
$second = $next;
$count++;
}
?>
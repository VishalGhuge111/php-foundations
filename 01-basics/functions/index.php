<?php

// learning functions

// simple function
function greet() {
    echo "Hello from function\n";
}

greet();
echo "<br>";

// function with parameter
function showName($name) {
    echo "Name is: " . $name . "\n";
}

showName("Vishal");

echo "\n";


// function with return value
function addNumbers($a, $b) {
    $sum = $a + $b;
    return $sum;
}
echo "<br>";
$result = addNumbers(10, 20);
echo "Sum: " . $result . "\n";

// function with default parameter
function calculateDiscount($price, $discount = 10) {
    $final = $price - ($price * $discount / 100);
    return $final;
}
echo "<br>";

echo "Price after 10% discount: " . calculateDiscount(500) . "<br>";
echo "Price after 20% discount: " . calculateDiscount(500, 20) . "<br>";

?>
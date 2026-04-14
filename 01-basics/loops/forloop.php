<?php

// learning for loop

// printing numbers 1 to 5
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}

echo "\n\n";

// printing even numbers
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . " ";
}

echo "\n\n";

// multiplication table
$num = 5;

for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " . ($num * $i) . "\n";
}

echo "\n";

// looping through array
$subjects = ["DSA", "OS", "DBMS", "CN"];

for ($i = 0; $i < count($subjects); $i++) {
    echo ($i + 1) . ". " . $subjects[$i] . "\n";
}

?>
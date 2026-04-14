<?php

// learning while loop

// counting 1 to 5
$count = 1;

while ($count <= 5) {
    echo $count . " ";
    $count++;
}

echo "\n\n";

// sum of first 10 numbers
$num = 1;
$sum = 0;

while ($num <= 10) {
    $sum += $num;
    $num++;
}

echo "Sum: " . $sum . "\n\n";

// printing array elements
$cities = ["Pune", "Mumbai", "Delhi"];
$i = 0;

while ($i < count($cities)) {
    echo $cities[$i] . "\n";
    $i++;
}

echo "\n";

// checking condition
$balance = 1000;
$withdraw = 200;

while ($balance >= $withdraw) {
    echo "Withdrew: $withdraw, Balance: $balance\n";
    $balance -= $withdraw;
}

echo "Cannot withdraw, Balance: $balance\n";

?>
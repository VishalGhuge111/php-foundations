<?php

// learning do-while loop

// basic example
$i = 1;

do {
    echo $i . " ";
    $i++;
} while ($i <= 5);

echo "\n\n";

// menu system example
$choice = 0;

do {
    echo "Menu:\n";
    echo "1. Start\n";
    echo "2. Stop\n";
    echo "3. Exit\n";
    echo "Your choice: $choice\n\n";
    
    $choice++;
} while ($choice < 3);

echo "Exiting...\n\n";

// difference from while
// this will run at least once even if condition is false
$num = 10;

do {
    echo "This runs once: $num\n";
} while ($num < 5);

?>
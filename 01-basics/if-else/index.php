<?php

// practicing if-else conditions

// simple if
$age = 20;

if ($age >= 18) {
    echo "You can vote\n";
}

echo "<br>";

// if-else
$marks = 35;

if ($marks >= 40) {
    echo "Passed\n";
} else {
    echo "Failed\n";
}

echo "<br>";

// if-else-if ladder
$percentage = 75;

if ($percentage >= 75) {
    echo "Grade: A\n";
} else if ($percentage >= 60) {
    echo "Grade: B\n";
} else if ($percentage >= 40) {
    echo "Grade: C\n";
} else {
    echo "Grade: F\n";
}

echo "<br>";

// nested if
$isLoggedIn = true;
$isPremium = false;

if ($isLoggedIn) {
    if ($isPremium) {
        echo "Access premium content\n";
    } else {
        echo "Access free content only\n";
    }
} else {
    echo "Please login first\n";
}

?>
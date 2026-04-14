<?php

// learning string operations

$firstName = "Vishal";
$lastName = "Ghuge";

// concatenation
$fullName = $firstName . " " . $lastName;
echo "Full name: " . $fullName . "\n\n";
echo "<br>";

// string length
echo "Length: " . strlen($fullName) . "\n\n";
echo "<br>";

// converting case
echo "Uppercase: " . strtoupper($firstName) . "\n";
echo "Lowercase: " . strtolower($firstName) . "\n\n";
echo "<br>";

// substring
$email = "vishal@example.com";
$username = substr($email, 0, strpos($email, "@"));
echo "Username: " . $username . "\n\n";
echo "<br>";

// replacing
$text = "I am learning Python";
$updated = str_replace("Python", "PHP", $text);
echo $updated . "\n\n";
echo "<br>";

// trimming spaces
$input = "  hello world  ";
echo "Before trim: '" . $input . "'\n";
echo "After trim: '" . trim($input) . "'\n\n";
echo "<br>";

// splitting string
$subjects = "DSA,OS,DBMS,CN";
$array = explode(",", $subjects);
echo "First subject: " . $array[0] . "\n";

?>
<?php

// learning different data types in php

// string
$name = "Vishal";
echo "Name: " . $name . "\n";
echo "<br>";

// integer
$age = 21;
echo "Age: " . $age . "\n";
echo "<br>";

// float
$cgpa = 7.57;
echo "CGPA: " . $cgpa . "\n";
echo "<br>";

// boolean
$isPassed = true;
echo "Passed: " . ($isPassed ? "yes" : "no") . "\n";
echo "<br>";

// array
$subjects = ["DSA", "OS", "DBMS"];
echo "First subject: " . $subjects[0] . "\n";
echo "<br>";

// null
$project = null;
echo "Project status: " . ($project ?? "not assigned") . "\n";
echo "<br>";

// checking types
echo "\nChecking types:\n <br>";
echo "Type of age: " . gettype($age) . "\n";
echo "Type of cgpa: " . gettype($cgpa) . "\n";

?>
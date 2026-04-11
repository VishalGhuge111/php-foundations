<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
<?php

//  logical operators


echo "<h3>Logical Operators Practice</h3>";

// AND operator
$age = 20;
$hasLicense = true;

if ($age >= 18 && $hasLicense) {
    echo "Can drive: yes<br>";
} else {
    echo "Can drive: no<br>";
}

echo "<br>";

// OR operator
$isWeekend = false;
$isHoliday = true;

if ($isWeekend || $isHoliday) {
    echo "No college today<br>";
} else {
    echo "College today<br>";
}

echo "<br>";

// NOT operator - reverse the condition
$isRaining = false;

if (!$isRaining) {
    echo "Can go outside<br>";
} else {
    echo "Stay inside<br>";
}

echo "<br>";

// combining operators
$marks = 75;
$attendance = 80;

if ($marks >= 40 && $attendance >= 75) {
    echo "Pass with good attendance<br>";
} else {
    echo "Check marks or attendance<br>";
}

?>
</body>
</html>

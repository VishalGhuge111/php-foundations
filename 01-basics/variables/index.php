<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Variables</title>
</head>
<body>

<?php

// variables

$firstName = "Vishal";
$age = 21;
$height = 6.1;
$isLearning = true;
$skills = ["PHP", "HTML", "CSS"];

echo "<p>First name: " . $firstName . "</p>";
echo "<p>Age: " . $age . "</p>";
echo "<p>Height: " . $height . "</p>";
echo "<p>Learning PHP: " . ($isLearning ? "yes" : "no") . "</p>";
echo "<p>New skill: " . $skills[0] . "</p>";

?>

</body>
</html>
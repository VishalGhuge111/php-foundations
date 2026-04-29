<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vishal";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";

// Create a table in database 
$sql = "CREATE TABLE `forms` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `age` INT(3) NOT NULL , `gender` VARCHAR(8) NOT NULL , `email` VARCHAR(22) NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB";

// check for the table creation
if (mysqli_query($conn, $sql)) {
    echo "Table is Created";
} else {
    echo "ERROR: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
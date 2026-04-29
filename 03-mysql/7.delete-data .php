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

// Run DELETE query
$sql = "DELETE FROM `forms` WHERE `sno` = 4";
$result = mysqli_query($conn, $sql);

// Check if delete worked
if($result){
    echo "We deleted the record successfully";
}
else {
    echo "Could not delete: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
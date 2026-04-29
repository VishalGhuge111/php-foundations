<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";

// Create database safely
$sql = "CREATE DATABASE vishal";

// check for the database creation
if (mysqli_query($conn, $sql)) {
    echo "Database is Created";
} else {
    echo "ERROR: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
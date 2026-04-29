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


//Variable to insert data in table
$name = "vijay";
$age = 19;
$gender = "male";
$email = "vijay@gmail.com";

// Insert Record in Table
$sql = "INSERT INTO `forms` ( `name`, `age`, `gender`, `email`) VALUES ('$name', '$age', '$gender', '$email')";


// check for the data insertion
if (mysqli_query($conn, $sql)) {
    echo "Data Inserted Successfully";
} else {
    echo "ERROR: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
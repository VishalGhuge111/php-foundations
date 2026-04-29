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

//Run the select query 
$sql = "SELECT * FROM `forms`";
$result = mysqli_query($conn, $sql);

//Find the total number of records
$num = mysqli_num_rows($result);
echo $num;

//fetch actual data
while($row = mysqli_fetch_assoc($result)){
    echo var_dump($row);
    echo "<br>";
} 

mysqli_close($conn);
?>
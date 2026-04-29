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

//Run the Where query 
$sql = "SELECT * FROM `forms` WHERE `email` = 'vishal@gmail.com'";
$result = mysqli_query($conn, $sql);

//Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records in database <br>";

// usage of WHERE Clause for fetch data from database
if($num> 0){
    while($row = mysqli_fetch_assoc($result)){
        echo var_dump($row);
        echo "<br>"; 
    }
}

// usage of WHERE Clause to update data
$sql = "UPDATE `forms` SET `name` = 'Vishal2' WHERE `sno` = 4";
$result = mysqli_query($conn, $sql);

if($result){
    echo "We updated data";
}
else {
    echo "COuld not updated";
}

mysqli_close($conn);
?>
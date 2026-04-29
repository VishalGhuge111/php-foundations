<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);


    // Die if connection not successful
    if(!$conn){
        die("Connection failed: ". $mysqli_connect_error());
    }
    else {
        echo"Connection Successful";
    }
?>

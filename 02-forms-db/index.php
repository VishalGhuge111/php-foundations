<?php
$insert = false;
$errorMsg = "";

if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "job";

    // Create connection
    $con = new mysqli($server, $username, $password, $database);

    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }

    // Collect POST data
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    // ✅ Basic validation
    if(empty($name) || empty($email) || empty($phone)){
        $errorMsg = "Please fill all required fields";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorMsg = "Invalid email format";
    }
    else{

        // ✅ Prepared statement (secure)
        $stmt = $con->prepare("INSERT INTO applications (name, age, gender, email, phone, other, dt) VALUES (?, ?, ?, ?, ?, ?, NOW())");

        $stmt->bind_param("sissss", $name, $age, $gender, $email, $phone, $desc);

        if($stmt->execute()){
            $insert = true;
        } else {
            if($con->errno == 1062){
                $errorMsg = "Email already exists";
            } else {
                $errorMsg = "Something went wrong";
            }
        }

        $stmt->close();
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form System</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Application Form</h1>
        <p>Please enter your details and submit the form.</p>

        <?php
        if($insert){
            echo "<p class='submitMsg'>Form submitted successfully!</p>";
        }
        if($errorMsg){
            echo "<p style='color:red;'>$errorMsg</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="number" name="age" placeholder="Enter your age" required>
            <input type="text" name="gender" placeholder="Enter your gender" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="tel" name="phone" placeholder="Enter your phone" required>
            <textarea name="desc" cols="30" rows="10" placeholder="Other info"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
</body>
</html>
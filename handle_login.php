<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handle Login</title>
</head>
<body>
<?php
    $servername = "localhost";
    $username = "azaman3"; //change to your panther id
    $password = "azaman3"; //change to your panther id
    $dbname = "azaman3"; //change to your panther id

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }

    // Get data from "login" page
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $encrypted_pwd = md5($password); // encrypt password using md5

    // Query and get data

    $sql = "SELECT email, role, password FROM users WHERE email='$email' AND password='$encrypted_pwd'";

    if ($conn->query($sql) === TRUE && $role=="seller") {
        header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/seller_dashboard.html"); //change to your seller dashboard url
    } else if ($conn->query($sql) === TRUE && $role=="buyer") {
        header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/buyer_dashboard.html"); //change to your buyer dashboard url
    } else if ($conn->query($sql) === TRUE && $role=="admin") {
        header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/admin_dashboard.html"); //change to your admin dashboard url
    } else {
        header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/login.php"); //change to your login page url
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
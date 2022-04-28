<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handle Sign Up</title>
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

    // Get data from "signup" page
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $role = $_REQUEST["role"];
    $password = $_REQUEST["password"];
    $encrypted_pwd = md5($password); // encrypt password using md5

    // write the sql query in php file to Insert the data into the table

    $sql = "INSERT INTO users (username, email, role, password)
    VALUES('$username', '$email', '$role', '$encrypted_pwd')";

    if ($conn->query($sql) === TRUE) {
        header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/login.html"); //change to your login page url
    } else {
        header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/signup.html"); //change to your signup page url
    }

    // Close connection
    $conn->close();
    ?>
</body>

</html>
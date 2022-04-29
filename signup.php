<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <?php
    require('db.php');

    if (isset($_REQUEST['username'])){ //check if user is logged in
    // Get data from sign up form
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $role = $_REQUEST["role"];
    $password = $_REQUEST["password"];
    $encrypted_pwd = md5($password); // encrypt password using md5

    // write the sql query in php file to Insert the data into the table

    $sql = "INSERT INTO users (username, email, role, password)
    VALUES('$username', '$email', '$role', '$encrypted_pwd')";

    if ($conn->query($sql) === TRUE) {
        header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/login.php"); //change to your login page url
    }} else { //change to your signup page url
    ?>
    <!-- Form validation and page styling required -->
    <table>
        <tr>
            <th>Sign up</th>
        </tr>
        <tr>
            <td>Please fill in this form to create an account</td>
        </tr>
        <form action="" method="POST">
            <tr>
                <td><input type="text" required name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td><input type="email" required name="email" placeholder="Email Address"></td>
            </tr>
            <tr>
                <td>Buyer<input type="radio" required name="role" value="buyer">
                    Seller<input type="radio" name="role" value="seller"></td>
            </tr>
            <tr>
                <td><input type="password" required name="password" placeholder="Password"></td>
            </tr>
            <tr>
                <td><input type="password" required name="confirm_password" placeholder="Confirm Password"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Register"></td>
            </tr>
        </form>
    </table>
    <?php } ?>
</body>

</html>
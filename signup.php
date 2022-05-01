<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/account.css">
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
    <div class="bg"></div>
    <div class="container">
        <form action="" method="POST">
            <fieldset id="signup">
                <center>
                    <h1>Sign Up</h1>
                    <p>Sign up for an account here.</p>

                    <hr>

                    <label for="username"><b>Username</b></label><br>
                    <input type="text" required name="username" placeholder="Username"><br>

                    <label for="email"><b>Email</b></label><br>
                    <input type="email" required name="email" placeholder="Email" /><br>

                    <label for="password"><b>Password</b></label><br>
                    <input type="password" required name="password" placeholder="Password" /><br>

                    <label for="password"><b>Confirm Password</b></label><br>
                    <input type="password" required name="confirm_password" placeholder="Confirm Password"><br>

                    <label for="role"><b>Role: </b></label>
                    <input type="radio" required name="role" value="buyer">Buyer
                    <input type="radio" name="role" value="seller">Seller<br><br>

                    <input type="submit" value="Register">

                    <br><br><hr>
                    <p>
                        Already have an account?<br>
                        <a href="login.php">Log in here.</a>
                    </p>
                </center>
            </fieldset>
        </form>
    </div>
    <?php } ?>
</body>

</html>
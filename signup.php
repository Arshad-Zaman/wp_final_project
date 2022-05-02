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

    if (isset($_REQUEST['username'])) { //check if user is logged in
        // Get data from sign up form
        $username = $_REQUEST["username"];
        $email = $_REQUEST["email"];
        $role = $_REQUEST["role"];
        $password = $_REQUEST["password"];
        $encrypted_pwd = md5($password); // encrypt password using md5

        // check if unique values are taken

        if (isset($_POST['username'])) {
            $sql = "SELECT * FROM users WHERE username='$username'";
            $results = $conn->query($sql);
            if (mysqli_num_rows($results) > 0) {
              echo "taken";	
            }else{
              echo 'not_taken';
            }
            exit();
        }
        if (isset($_POST['email'])) {
            $sql = "SELECT * FROM users WHERE email='$email'";
            $results = $conn->query($sql);
            if (mysqli_num_rows($results) > 0) {
              echo "taken";	
            }else{
              echo 'not_taken';
            }
            exit();
        }

        // check if email is already registered
        $sql = "SELECT FROM users where email='$email'";
        if ($conn->query($sql) === TRUE) {
            // redirect user to login and display email already exists
            header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/login.php");
        }

        // write the sql query in php file to Insert the data into the table

        $sql = "INSERT INTO users (username, email, role, password)
    VALUES('$username', '$email', '$role', '$encrypted_pwd')";

        if ($conn->query($sql) === TRUE) {
            header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/login.php"); //change to your login page url
        }
    } else { //change to your signup page url
    ?>
        <!-- Form validation and page styling required -->
        <script>
            function Validate() {
                var password = document.getElementById("password").value;
                var confirmPassword = document.getElementById("confirm_password").value;
                if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            }
        </script>
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
                        <input type="email" required name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" /><br>

                        <label for="password"><b>Password</b></label><br>
                        <input type="password" required name="password" placeholder="Password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" /><br>

                        <label for="password"><b>Confirm Password</b></label><br>
                        <input type="password" required name="confirm_password" placeholder="Confirm Password" id="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" /><br>

                        <label for="role"><b>Role: </b></label>
                        <input type="radio" required name="role" value="buyer">Buyer
                        <input type="radio" name="role" value="seller">Seller<br><br>

                        <input type="submit" value="Register" onclick="return Validate()">

                        <br><br>
                        <hr>
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
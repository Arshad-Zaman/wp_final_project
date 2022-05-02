<?php
include('process.php');
?>
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
            <form action="signup.php" method="POST">
                <fieldset id="signup">
                    <center>
                        <h1>Sign Up</h1>
                        <p>Sign up for an account here.</p>

                        <hr>

                        <label for="username"><b>Username</b></label><br>
                        <div <?php if (isset($name_error)) : ?>) class="form_error" <?php endif ?>>
                            <input type="text" required name="username" placeholder="Username" value="<?php echo $username; ?>"><br>
                            <?php if (isset($name_error)) : ?>
                                <span><?php echo $name_error; ?></span>
                            <?php endif ?>
                        </div>

                        <label for="email"><b>Email</b></label><br>
                        <div <?php if (isset($email_error)) : ?>) class="form_error" <?php endif ?>>
                            <input type="email" required name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $email; ?>" /><br>
                            <?php if (isset($email_error)) : ?>
                                <span><?php echo $email_error; ?></span>
                            <?php endif ?>
                        </div>
                        <label for="password"><b>Password</b></label><br>
                        <input type="password" required name="password" placeholder="Password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" /><br>

                        <label for="password"><b>Confirm Password</b></label><br>
                        <input type="password" required name="confirm_password" placeholder="Confirm Password" id="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" /><br>

                        <label for="role"><b>Role: </b></label>
                        <input type="radio" required name="role" value="buyer">Buyer
                        <input type="radio" name="role" value="seller">Seller<br><br>

                        <input type="submit" name="register" value="Register" onclick="return Validate()">

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
</body>

</html>
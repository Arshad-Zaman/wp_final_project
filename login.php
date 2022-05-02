<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling/account.css">
    <title>Login</title>
</head>

<body>
    <?php
    require('db.php');
    session_start();

    // //redirects if already logged in
    if ($_SESSION['role'] == "seller") {
        header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/seller_dashboard.php"); //change to your seller dashboard url
    } else if ($_SESSION['role'] == "buyer") {
        header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/buyer_dashboard.php"); //change to your seller dashboard url
    } else if ($_SESSION['role'] == "admin") {
        header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/admin_dashboard.php"); //change to your seller dashboard url
    }


    // Process login form below:
    if (isset($_REQUEST['email'])) { //check if someone submitted login form

        // Get data from "login" page
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $encrypted_pwd = md5($password);

        // Query and get data

        $sql = "SELECT * FROM users WHERE email='$email' and password='$encrypted_pwd'";
        $result = $conn->query($sql);
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $row = mysqli_fetch_assoc($result);
            // set session variables

            $_SESSION['username'] = $row["username"];
            $_SESSION['role'] = $row["role"];
            if ($row["role"] == "seller") {
                header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/seller_dashboard.php"); //change to your seller dashboard url
            } else if ($row["role"] == "buyer") {
                header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/buyer_dashboard.php"); //change to your seller dashboard url
            } else if ($row["role"] == "admin") {
                header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/admin_dashboard.php"); //change to your seller dashboard url
            }
        } else {
        $error = "Invalid credentials!";
        }
    }
    ?>

        <div class="bg"></div>
        <div class="container">
            <form action="login.php" method="POST">
                <fieldset id="login">
                    <center>
                        <h1>Login</h1>
                        <p>Log in to your account here.</p>

                        <hr>

                        <label for="email"><b>Email</b></label><br>
                        <input type="email" required name="email" placeholder="Email" />
                        <br>
                        <label for="password"><b>Password</b></label><br>
                        <input type="password" required name="password" placeholder="Password" />
                        <input type="submit" value="Login">

                        <br><br>
                        <hr>
                        <p>
                        <div <?php if (isset($error)) : ?>) class="form_error" <?php endif ?>>
                            <?php if (isset($error)) : ?>
                                <span><?php echo $error; ?></span>
                            <?php endif ?>
                        </div>
                        Don't have an account?<br>
                        <a href="signup.php">Sign up here.</a>
                        </p>
                    </center>
                </fieldset>
            </form>
        </div>
</body>

</html>
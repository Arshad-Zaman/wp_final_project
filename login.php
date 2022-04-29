<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    require('db.php');
    session_start();

    // //redirects if already logged in
    if($_SESSION['role'] == "seller") {
        header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/seller_dashboard.php"); //change to your seller dashboard url
    }
    else if($_SESSION['role'] == "buyer") {
        header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/buyer_dashboard.php"); //change to your seller dashboard url
    }
    else if($_SESSION['role'] == "admin") {
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

        if ($rows==1) {
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
            echo "<div class='form'>
        <h3>Username/password is incorrect.</h3>
        <br/>Click here to <a href='login.php'>Login</a></div>"; //change to your login page url

        }
    } else {
    ?>
        <h1>Login Here</h1>
        <table>
            <form action="" method="POST">
                <tr>
                    <td><input type="email" required name="email" placeholder="Email" /></td>
                </tr>
                <tr>
                    <td><input type="password" required name="password" placeholder="Password" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </form>
        </table>
    <?php } ?>
</body>

</html>
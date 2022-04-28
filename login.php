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

    // Process login form below:
    if (isset($_POST['username'])) { //check if user is logged in

        // Get data from "login" page
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        $encrypted_pwd = md5($password); // encrypt password using md5

        // Query and get data

        $sql = "SELECT username, email, role, password FROM users WHERE email='$email' AND password='$encrypted_pwd'";

        if ($conn->query($sql) === TRUE) {
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $row["username"];
            $_SESSION['role'] = $row["role"];
            if($row["role"] == "seller") {
                header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/seller_dashboard.html"); //change to your seller dashboard url
            }
            else if($row["role"] == "buyer") {
                header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/buyer_dashboard.html"); //change to your seller dashboard url
            }
            else if($row["role"] == "admin") {
                header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/admin_dashboard.html"); //change to your seller dashboard url
            }
        } else {
            header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/login.php"); //change to your login page url
        }
    } else {
    ?>
        <h1>Login Here</h1>
        <table>
            <form action="./handle_login.php" method="POST">
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Here</h1>
    <table>
        <form action="./handle_login.php" method="POST">
            <tr><td><input type="email" required name="email" placeholder="Email"/></td></tr>
            <tr><td><input type="password" required name="password" placeholder="Password"/></td></tr>
            <tr><td><input type="submit" value="Login" ></td></tr>
        </form>
    </table>
</body>
</html>
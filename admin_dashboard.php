<?php
session_start();
if($_SESSION["role"] != "admin"){
header("Location: ./logout.php");
exit("You are not an authorized to view this page");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    Welcome to the admin dashboard!
</body>
</html>
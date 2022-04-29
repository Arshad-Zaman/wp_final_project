<?php
//include auth.php file on all secure pages
session_start();
if($_SESSION["role"] != "seller"){
header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/logout.php");
exit("You are not an authorized to view this page");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Dashboard</title>
</head>
<body>
    Welcome to the seller dashboard!
</body>
</html>
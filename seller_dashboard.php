<?php
require("db.php");

// need to seller to access dashboard
session_start();
if($_SESSION["role"] != "seller"){
header("Location: ./logout.php");
exit("You are not an authorized to view this page");
}

$username = $_SESSION['username'];

// Query properties of current logged in seller
$sql = "SELECT * from cards WHERE seller='$username'";


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styling/menu.css">
        <link rel="stylesheet" href="styling/dashboard.css">
        <title>Seller Dashboard</title>
    </head>

    <body>
        <!-- Header -->
        <div class="title">
            <h1>MAIV PROPERTY HUB</h1>
            <h3>REIMAGINING REAL ESTATE</h3>
        </div>

        <!-- Menu  -->
        <div class="topnav">
            <div class="topnav-centered">
                <a href="index.html">About</a>
            </div>
            <div class="topnav-right">
                <a href="#" class="active">Dashboard</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>

        <!-- Welcome -->

        <h2>Welcome!</h2>

        <!-- Display Cards: This is just a sample to show off its design. Replace with PHP accordingly. -->
        <a href="display-card-seller.html" id="other">
            <div id="card">
                <img src="house.png" alt="Example House">
                <div class="container">
                    <p id="address">
                        1234 Street Road,<br>
                        City, State Zipcode
                    </p>
                    <p id="details">
                        <b>x bed • y baths • 2000 sq ft.</b>
                    </p>
                </div>
            </div>
        </a>

        <!-- Add new property -->
        <a href="add_card.html" id="other">
            <div id="plus">
                <div class="container">
                    <h4>+</h4>
                </div>
            </div>
        </a>
    </body>

</html>
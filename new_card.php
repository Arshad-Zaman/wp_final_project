<?php
require("db.php");

// need to seller to add new property
// session_start();
// if($_SESSION["role"] != "seller"){
// header("Location: ./logout.php");
// exit("You are not an authorized to view this page");
// }

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styling/menu.css">
        <link rel="stylesheet" href="styling/dashboard.css">
        <title>Add Property</title>
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
                <a href="seller-dashboard.html">Dashboard</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>

        <!-- Title  -->

        <h5>Add New Property</h5>
        <hr>

        <!-- Form -->
        <!-- Include PHP form and DB info implementation -->
        <!-- Currently the submit button does not do anything. -->
        <div class="form">
            <br>
            Please fill out the form to list a new property to our site.
            <br><br>
            <form action="php_scripts/add_cardDB.php" method="post">
                <table>
                    <tr>
                        <td style="width:400px">
                            <label id="bold" for="Street">Street</label>
                            <br>
                            <input type="text" name="street" size="50" maxlength="50" placeholder="Street Address">
                        </td>
                        <td style="width:250px">
                            <label id="bold" for="Street">City</label>
                            <br>
                            <input type="text" name="city" size="25" maxlength="25" placeholder="City">
                        </td>
                        <td style="width:150px">
                            <label id="bold" for="State">State</label>
                            <br>
                            <input type="text" name="state" size="10" maxlength="2" placeholder="State">
                        </td>
                    </tr>
                    <tr>
                        <td style="width:250px">
                            <label id="bold" for="Zip">Zip Code</label>
                            <br>
                            <input type="text" name="zip" size="20" maxlength="5" placeholder="Zip Code">
                        </td>
                        <td colspan="2" style="width:250px">
                            <label id="bold" for="Type">Property Type</label>
                            <br>
                            <input type="text" name="property_type" maxlength="30" placeholder="Residential or Commercial">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label id="bold" for="Price">Price</label>
                            <br>
                            <input type="text" name="price" size="25" maxlength="20" placeholder="in $ (USD)">
                        </td>
                        <td colspan="2">
                            <label id="bold" for="TotalSqFt">Total Square Feet</label>
                            <br>
                            <input type="text" name="totalsqft" size="25" maxlength="20" placeholder="Total sqft.">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label id="bold" for="Bed">No. of Bedrooms</label>
                            <br>
                            <input type="text" name="num_bed" size="10" maxlength="2" placeholder="0-99">
                        </td>
                        <td colspan="2">
                            <label id="bold" for="Bath">No. of Bathrooms</label>
                            <br>
                            <input type="text" name="num_bath" size="10" maxlength="2" placeholder="0-99">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <label id="bold" for="img">Select Image: </label>
                            <br>
                            <label for="fileToUpload" class="custom-file-upload">
                                Upload image
                            </label>
                            <input id="fileToUpload" type="text" name="fileToUpload" value="please_work">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" id="submitcol">
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
            <p>Click <a href="seller-dashboard.html" id="other"><b>here</b></a> to cancel and return to the dashboard.</p>
        </div>
    </body>

</html>
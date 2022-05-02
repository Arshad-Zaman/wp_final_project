<?php
    // Shared script for interacting with database
    $servername = "localhost";
    $username = "root"; // change to panther id if using codd
    $password = ""; // change to panther id if using codd
    $dbname = "azaman3"; // change to panther id if using codd
    // The above used four variables servername,username,password and dbname 
    // are according to my environment setting.

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }
?>
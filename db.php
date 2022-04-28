<?php
    // Shared script for interacting with database
    $servername = "localhost";
    $username = "azaman3";
    $password = "azaman3";
    $dbname = "azaman3";
    // The above used four variables servername,username,password and dbname 
    // are according to my environment setting.

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }
?>
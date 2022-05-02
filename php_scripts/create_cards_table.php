<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create cards table PHP Script</title>
</head>

<body>
    <?php
    require("../db.php");

    // $sql = "CREATE TABLE cards (
    // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    // seller_name VARCHAR(20), 
    // street VARCHAR(50),
    // city VARCHAR(25),
    // state VARCHAR(2),
    // zip VARCHAR(20),
    // property_type VARCHAR(50),
    // price DECIMAL(20,2) UNSIGNED,
    // totalsqft DECIMAL(20,3) UNSIGNED,
    // num_bed INT(2) UNSIGNED,
    // num_bath INT(2) UNSIGNED,
    // img_path VARCHAR(50)
    // )";
    $sql = "CREATE TABLE cards (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    img MEDIUMBLOB NOT NULL,
    location VARCHAR(70),
    age INT(4),
    floorplan MEDIUMBLOB NOT NULL,
    beds INT(4),
    garden VARCHAR(4),
    parking VARCHAR(4),
    facilities VARCHAR(200),
    proxFacil VARCHAR(100),
    proxMR VARCHAR(100),
    tax VARCHAR(200),
    price INT(10)
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table cards created";
    } else {
        echo "Table cards already exists";
    }

    $conn->close();
    ?>
    <div>
        <a href="../index.php"><input type="button" id="btn1" value="Home"></a>
    </div>
</body>

</html>
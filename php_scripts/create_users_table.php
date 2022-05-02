<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create tables PHP Script</title>
</head>

<body>
    <?php
    require("../db.php");

    $sql = "CREATE TABLE users (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(20), email VARCHAR(50), role VARCHAR(6), password VARCHAR(64))";
    if ($conn->query($sql) === TRUE) {
        echo "Table users created";
    } else {
        echo "Table users already exists";
    }

    $conn->close();
    ?>
    <div>
        <a href="../index.php"><input type="button" id="btn1" value="Home"></a>
    </div>
</body>

</html>
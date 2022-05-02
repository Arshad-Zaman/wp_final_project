<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop Users table PHP Script</title>
</head>

<body>
    <?php
    require("../db.php");

    $sql = "DROP Table users";
    if ($conn->query($sql) === TRUE) {
        echo "Table users dropped";
    } else {
        echo "Something went wrong.";
    }

    $conn->close();
    ?>
    <div>
        <a href="../index.php"><input type="button" id="btn1" value="Home"></a>
    </div>
</body>

</html>
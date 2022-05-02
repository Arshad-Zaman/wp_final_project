<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add Card to DB</title>
</head>
<body>
  <?php 
 $servername = "localhost";
 $username = "azaman3";
 $password = "azaman3";
 $dbname = "azaman3";

 $conn = new mysqli($servername, $username, $password, $dbname);

 // Check connection
 if ($conn->connect_error) {
     die("connection failed: " . $conn->connect_error);
 }


//get data from create_card_form
$street = $_POST["street"];
$city = $_POST["city"];
$stt = $_POST["stt"];
$zip = $_POST["zip"];
$res = $_POST["res"];
$com = $_POST["com"];
$price = $_POST["price"];
$totalsqft = $_POST["totalsqft"];
$bed = $_POST["bed"];
$bath = $_POST["bath"];
$img = $_POST["img"];

//add to table
$sql = "INSERT INTO cards ( 
    street,
    city,
    stt,
    zip,
    res,
    com,
    price,
    totalsqft,
    bed,
    bath,
    img
 )";

    if ($conn->query($sql) === TRUE) {
        echo "Table created";
    } else {
        echo "Table already exists";
    }

    $conn->close();


?>  
<a href="seller_dashboard.php"><input type="button" id="btn1" value="OK"></a>
</body>
</html>
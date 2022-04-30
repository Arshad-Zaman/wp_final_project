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

$img = $_POST["img"];
$location= $_POST["location"];
$age= $_POST["age"];
$floorplan= $_POST["floorplan"];
$beds= $_POST["beds"];
$facilities= $_POST["facilities"];
$garden= $_POST["garden"];
$parking= $_POST["parking"];
$proxFacil= $_POST["proxFacil"];
$proxMR= $_POST["proxMR"];
$tax= $_POST["tax"];
$price= $_POST["price"];





 //add to table
 $sql = "INSERT INTO cards ( 
 img.
 location ,
 age ,
 floorplan ,
 beds ,
 facilities ,
 proxFacil ,
 proxMR,
 tax,
garden,
parking,
price

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

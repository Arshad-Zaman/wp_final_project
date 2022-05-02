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
    require('../db.php');


    //get data from create_card_form
    $seller_name = "arshad";
    $street = $_REQUEST['street'];
    $city = $_REQUEST['city'];
    $zip = $_REQUEST['zip'];
    $property_type = $_REQUEST['property_type'];
    $price = $_REQUEST['price'];
    $totalsqft = $_REQUEST['totalsqft'];
    $num_bed = $_REQUEST['num_bed'];
    $num_bath = $_REQUEST['num_bath'];
    $fileToUpload = $_REQUEST['fileToUpload'];


    $sql = "INSERT INTO cards (
    seller_name,
    street,
    city,
    state,
    zip,
    property_type,
    price,
    totalsqft,
    num_bed,
    num_bath,
    img_path
) VALUES (
'$seller_name',
'$street',
'$zip',
'$property_type',
$price,
$totalsqft,
$num_bed,
$num_bath,
'$fileToUpload'
)";


    if ($conn->query($sql) === TRUE) {
        echo "Table created";
    } else {
        echo "Error creating tables";
    }


    ?>
    <a href="../seller_dashboard.php"><input type="button" id="btn1" value="OK"></a>
</body>

</html>
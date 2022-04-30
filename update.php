<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Update</title>
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


?>

<h1>Update</h1>
<form method="post" action="/update.php">
    
			<p>Location: <input name="location" type="text"></p>
            <p>Floor Plan: <input type="file" id="floorplan" name="floorplan" accept="image/*"></p>
			<p>Age: <input name="age" type="number"> yrs</p>
			<p># Bedrooms: <input name="beds" type="number"></p>
			<p>Additional facilities: <input name="facilities" type="text" ></p>
            <p>Presence of Garden: <input name="garden" type="text"></p>
			<p>Parking Availabilty: <input name="parking" type="text"></p>
			<p>Proximity to nearby facilities: <input name="proxFacil" type="text"></p>	
            <p>Proximity to main roads: <input name="proxMR" type="text"></p>
			<p>Property tax records - calculate 7% of value: <input name="tax" type="text"></p>	
            <p>Add an image: <input type="file" id="img" name="img" accept="image/*"></p>
            <p># Bedrooms: <input name="price" type="number"></p>
			<input type="submit" id="btn" value="Submit">
			<!-- Redirect how would you handle user cancel -->
			<a href="seller_dashboard.php"><input type="button" id="btn1"  value="Cancel"></a>
    </form>
<?php







        $sql ="SELECT * FROM cards;";
   
        $results= mysqli_query($conn, $sql);
        $resultsCheck =mysqli_num_rows($results);
        if($resultsCheck > 0){
            while($row = mysqli_fetch_assoc($results)){
                    $sql= "UPDATE cards
                            SET $column = $update
                            WHERE id =$id;";
                                }
        }
?>

</body>
</html>
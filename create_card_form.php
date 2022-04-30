<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Card</title>
</head>
<body>
    <h2>Create A New Property Card</h2>
    <form method="post" action="/add_cardDB.php">
    <h3>New Property</h3>
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
    
</body>
</html>
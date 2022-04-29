<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
<title>Assignment Demo</title>
	<style>
	table {
   border: 1px solid black;
	border-collapse: collapse;
}

th, td {
	border: 1px solid black;
    text-align: center;
    padding: 8px;
}
tr:nth-child(even){background-color: #a0a0a0}
tr:nth-child(odd){background-color: #ffffff}
tr:nth-child(1){font-weight: bold;}
	</style>
</head>

<body>

<?php
require("db.php");
session_start();
if($_SESSION['role'] == 'buyer')
header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/seller_dashboard.php");

//debug
$email = "jared@email.com";
$password = "password123";
$enc_pwd = md5($password);
echo "email ". $email;
echo "password ". $password;
echo "enc_pwd ". $enc_pwd;

$sql = "SELECT * FROM users WHERE email='$email' and password='$enc_pwd'";
$result = $conn->query($sql);
echo "<h3>User</h3>";
$rows = mysqli_num_rows($result);
echo "rows num" . $rows . "<br>";
$one = 1;
echo $one . "<br>";
$row = mysqli_fetch_assoc($result);
echo "row " . $row . "<br>";
echo "email" . $row['email'] . "<br>";
echo "password " . $row['password'] . "<br>";
$_SESSION['username'] = $row["username"];
$_SESSION['role'] = $row["role"];
echo "Favorite color is " . $_SESSION['username'] . ".<br>";
echo "Favorite animal is " . $_SESSION['role'] . ".";
if ($row["role"] == "seller") {
	echo "email" . $row['role'] . "<br>";
} else if ($row["role"] == "buyer") {
	echo "email" . $row['role'] . "<br>";
} else if ($row["role"] == "admin") {
	echo "email" . $row['role'] . "<br>";
}

$conn->close();
?>  

	<div>
		<!-- Redirect the below link where a page will be displayed to add an artist -->
		<a href="./addArtist.php"><input type="button" id="btn1" value="Add new Artist"></a>
		<!-- Redirect the below link where a page will be displayed to add a new alubum -->
		<a href="./addAlbum.php"><input type="button" id="btn1" value="Add new Album"></a>
		<!-- Redirect the below links to login page again as the user clicked logout -->
		<a href="./index.php"><input type="button" id="btn1" onclick="addA.php" value="Logout"></a>
	</div>
</body>

</html>
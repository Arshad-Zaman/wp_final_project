
    <?php
	require('db.php');
	$username = "";
	$email = "";

	if (isset($_REQUEST['register'])) { //check if form is submitted
		// Get data from sign up form
		$username = $_REQUEST["username"];
		$email = $_REQUEST["email"];
		$role = $_REQUEST['role'];
		$password = $_REQUEST['password'];
		$encrypted_pwd = md5($password); // encrypt password using md5

		// check if unique values are taken

		$sql = "SELECT * FROM users WHERE username='$username'";
		$username_results = $conn->query($sql);
		$sql = "SELECT * FROM users WHERE email='$email'";
		$email_results = $conn->query($sql);

		if (mysqli_num_rows($username_results) > 0) { // check if username is taken
			$name_error = "Sorry, Username is already taken";
		} else if (mysqli_num_rows($email_results) > 0) { // check if email is taken
			$email_error = "Sorry, email is already taken, try logging in";
		} else { // else save user and redirect to login
			$sql = "INSERT INTO users (username, email, role, password)
    VALUES('$username', '$email', '$role', '$encrypted_pwd')";

			if ($conn->query($sql) === TRUE) {
				header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/login.php"); //change to your login page url
			}
		}
	}
	?>
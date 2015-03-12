<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php

//check if the form has been submitted

if(isset($_POST['name']) && isset($_POST['password'])) {
	$db = mysqli_connect('localhost', 'root', '', 'php'); // connect to the database
	$sql = sprintf("SELECT * FROM users WHERE name='%s'", // sql statement
		mysqli_real_escape_string($db, $_POST['name'])
	);
	$result = mysqli_query($db, $sql);
	$row = mysqli_fetch_assoc($result); //getting data back
	if ($row) {
		$hash = $row['password'];
		$isAdmin = $row['isAdmin'];

		if (password_verify($_POST['password'], $hash)) {
			echo 'Login successful.';
		} else {
			echo 'Login failed.';
		}
	} else {
		echo 'Login failed.'; // do not tell too much info to the user
	}
	mysqli_close($db);
}

?>
<form method ="post" action="">
	User name <input type="text" name="name"><br>
	Password <input type="password" name="password"><br>
	<input type="submit" value="Login">
</body>
</html>
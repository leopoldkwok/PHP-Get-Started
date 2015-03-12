<!-- do we get an id of the url and consists of only digits-->
<?php
	require 'auth.php';
	
	if(isset($_GET['id']) && ctype_digit($_GET['id'])) {
		$id = $_GET['id']; // store the id
	} else {
		header('Location: select.php'); // redirects to the select page
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php
	readfile('navigation.tmpl.html');

	$db = mysqli_connect('localhost', 'root', '', 'php'); // connect to the db
	$sql = "DELETE FROM users WHERE id=$id"; //a few cases you do not need to escape line
	mysqli_query($db, $sql); // execute the query
	echo '<p>User deleted.</p>';
	mysqli_close($db); // 
	// this script is not secure
?>


</body>
</html>
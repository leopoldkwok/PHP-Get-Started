<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php
	$name = '';
	$password = '';
	$comments = '';
	$gender = '';
	$tc = '';
	$color = '';
	$languages = array();



	//validation

	if(isset($_POST['submit'])) { // out put all the data if the user clicks on submit
		$ok = true;
		
		if(!isset($_POST['name']) || $_POST['name'] === '') {
			$ok = false;
		} else {
			$name = $_POST['name'];
		}

	

		if(!isset($_POST['gender']) || $_POST['gender'] === '') {
			$ok = false;
		}   else {
			$gender = $_POST['gender'];
		}



		if(!isset($_POST['color']) || $_POST['color'] === '') {
			$ok = false;
		} else {
			$color = $_POST['color'];
		}




		
		if($ok) {
			// add database code here
			$db = mysqli_connect('localhost', 'root', '', 'php'); //connect to our database
			$sql = sprintf("INSERT INTO users(name, gender, color) VALUES (
				'%s','%s','%s'
				)", mysqli_real_escape_string($db, $name),
					mysqli_real_escape_string($db, $gender),
					mysqli_real_escape_string($db, $color));
			mysqli_query($db, $sql); // send to database
			mysqli_close($db); //close session to free resources
			echo '<p>User added.</p>';

		}
	}
?>



<form method="post" action="">
	User name: <input type="text" name="name" value="<?php
		echo htmlspecialchars($name); // prefilled the form fields
	?>"><br>
		Gender:
		<input type="radio" name="gender" value="f" <?php
			if ($gender === 'f') {
				echo 'checked';
			}
		?>>female
		<input type="radio" name="gender" value="m" <?php
			if ($gender === 'm') {
				echo 'checked';
			}
		?>>male<br>
	Favourite color:
		<select name="color">
			<option value="">Please select</option>
			<option value="#f00" <?php 
				if($color === '#f00') {
					echo ' selected';
				}
			?>>red</option>
			<option value="#0f0" <?php 
				if($color === '#0f0') {
					echo ' selected';
				}
			?>>green</option>
			<option value="#00f" <?php 
				if($color === '#00f') {
					echo ' selected';
				}
			?>>blue</option>
		</select><br>

	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<form method="post" action="">
	User name: <input type="text" name="name"><br>
	Password: <input type="password" name="password"><br>
	Gender:
		<input type="radio" name="gender" value="f">female
		<input type="radio" name="gender" value="m">male<br>
	Favourite color:
		<select name="color">
			<option value="#f00">red</option>
			<option value="#0f0">green</option>
			<option value="#00f">blue</option>
		</select><br>
	Lanuages spoken:
		<select name="languages[]" multiple size="3">
			<option value="en">English</option>
			<option value="fr">French</option>
			<option value="it">Italian</option>
		</select><br>
	Comments: <textarea name="comments"></textarea><br>
	<input type="checkbox" name="tc" value="ok">I accept the T&C<br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
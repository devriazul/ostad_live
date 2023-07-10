<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<form method="POST" action="register.php">
		<label for="firstname">First name:</label>
		<input type="text" name="firstname" id="firstname" required><br><br>

		<label for="lastname">Last name:</label>
		<input type="text" name="lastname" id="lastname" required><br><br>

		<label for="email">Email address:</label>
		<input type="email" name="email" id="email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required><br><br>

		<label for="confirm_password">Confirm password:</label>
		<input type="password" name="confirm_password" id="confirm_password" required><br><br>

		<input type="submit" name="submit" value="Register">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];

		// Validation
		if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm_password)) {
			echo "All fields are required.";
		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "Invalid email format.";
		} elseif ($password !== $confirm_password) {
			echo "Passwords do not match.";
		} else {
			echo "Registration successful!";
		}
	}
	?>
</body>
</html>

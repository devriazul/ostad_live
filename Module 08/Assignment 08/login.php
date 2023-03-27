<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Login Form</title>
</head>
<body>
	<h1>Login Form</h1>
	<form class="form" method="POST" action="login.php">
		<label for="email">Email address:</label>
		<input class="form-control-text" type="email" name="email" id="email" required><br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required><br><br>

		<input type="submit" name="submit" value="Login">
	</form>

	<?php
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Validation
		if (empty($email) || empty($password)) {
			echo "Both fields are required.";
		} else {
			// Check if email and password are correct (you would need to add your own validation code here)
			$correct_email = "example@example.com";
			$correct_password = "password123";
			if ($email === $correct_email && $password === $correct_password) {
				// Redirect to welcome page
				header("Location: welcome.php?firstname=John");
			} else {
				echo "Invalid email or password.";
			}
		}
	}
	?>
</body>
</html>

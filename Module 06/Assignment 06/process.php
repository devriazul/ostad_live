<?php
session_start();

// Validate form inputs
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_FILES['profile_picture'])) {
  die("Error: All fields are required.");
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  die("Error: Invalid email format.");
}

// Save profile picture to server with unique filename
$uploads_dir = 'uploads/';
$filename = uniqid() . '_' . $_FILES['profile_picture']['name'];
$destination = $uploads_dir . $filename;
move_uploaded_file($_FILES['profile_picture']['tmp_name'], $destination);

// Save user's name, email, and profile picture filename to CSV file
$fp = fopen('users.csv', 'a');
fputcsv($fp, array($name, $email, $filename));
fclose($fp);

// Set cookie with user's name
setcookie('name', $name, time() + (86400 * 30), "/"); // cookie expires in 30 days

// Redirect to success page
header("Location: success.php");
exit();
?>

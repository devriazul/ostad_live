<?php
// Establish connection to database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "small_business_website";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
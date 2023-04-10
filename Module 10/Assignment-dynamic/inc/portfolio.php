<?php
// Establish connection to database
include 'db.php';
// Function to retrieve project data
$query = "SELECT * FROM projects ORDER BY created_at";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Failed to retrieve services: ' . mysqli_error($conn));
}
    $row = $result->fetch_assoc();
?>
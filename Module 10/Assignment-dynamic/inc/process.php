<?php
include "inc/db.php";
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
  $message = mysqli_real_escape_string($conn, $_POST["message"]);

  $sql = "INSERT INTO contact_form_submissions (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
  if ($conn->query($sql) === TRUE) {
    echo "Thank you for contacting us! We will get back to you soon.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close database connection
$conn->close();
?>

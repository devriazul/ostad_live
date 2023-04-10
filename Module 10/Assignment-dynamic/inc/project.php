<?php
// Establish connection to database
$host = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "small_business_website";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Function to retrieve project data
function getProjects() {
  global $conn;
  $sql = "SELECT * FROM projects";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class='col-md-4'>";
      echo "<div class='card mb-4 shadow-sm'>";
      echo "<img class='card-img-top' src='" . $row["image"] . "' alt='Project image'>";
      echo "<div class='card-body'>";
      echo "<h5 class='card-title'>" . $row["title"] . "</h5>";
      echo "<p class='card-text'>" . $row["description"] . "</p>";
      echo "<div class='d-flex justify-content-between align-items-center'>";
      echo "<div class='btn-group'>";
      echo "<a href='" . $row["url"] . "' class='btn btn-sm btn-outline-secondary'>View Project</a>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }
  } else {
    echo "No projects found.";
  }
}

// Close database connection
$conn->close();
?>

project page 
<!-- Project page -->
<div class="container">
  <h2>Projects</h2>
  <div class="row">
    <?php getProjects(); ?>
  </div>
</div>

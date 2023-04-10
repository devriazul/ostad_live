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

// Function to retrieve blog posts
function getBlogPosts() {
  global $conn;
  $sql = "SELECT * FROM blog_posts ORDER BY created_at DESC";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class='blog-post'>";
      echo "<h3>" . $row["title"] . "</h3>";
      echo "<p>" . $row["content"] . "</p>";
      echo "<span class='blog-post-date'>" . $row["created_at"] . "</span>";
      echo "</div>";
    }
  } else {
    echo "No blog posts found.";
  }
}

// Close database connection
$conn->close();
?>



for blog page 
<div class="container">
  <h2>Blog</h2>
  <?php getBlogPosts(); ?>
</div>

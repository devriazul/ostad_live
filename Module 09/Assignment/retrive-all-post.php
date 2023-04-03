<?php
$query = "SELECT * FROM posts ORDER BY created_at";
$result = mysqli_query($conn, $query);

if (!$result) {
    die('Failed to retrieve blog posts: ' . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="post">';
    echo '<img src="' . $row['image'] . '" alt="' . $row['title'] . '">';
    echo '<h2>' . $row['title'] . '</h2>';
    echo '<p>' . $row['content'] . '</p>';
    echo '<a href="post.php?id=' . $row['id'] . '" class="read-more">Read More</a>';
    echo '</div>';
}
?>
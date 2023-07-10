<?php
include 'db_conection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);

    $query = "INSERT INTO posts (title, image, content) VALUES ('$title', '$image', '$content')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Failed to insert new blog post: ' . mysqli_error($conn));
    }

    header('Location: index.php');
    exit();
}
?>

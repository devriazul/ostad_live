<!DOCTYPE html>
<html lang="en">
<?php
    include 'db_conection.php';
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "SELECT * FROM posts WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Failed to retrieve blog post: ' . mysqli_error($conn));
    }

    $row = mysqli_fetch_assoc($result);
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title of Post 1 - My Blog</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="https://devriazul.fastitbd.com/images/riazul.png" alt="Logo" class="logo" width="50px"></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <div class="dropdown">
                    <a href="blog.php">Blog</a>
                        <div class="dropdown-content">
                            <a href="add-post.php">Add Blog</a><br>
                            <a href="blog.php">All Blog</a>
                        </div>
                    </div>
                </li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="featured">
            <div class="post">
                <img src="<?php echo $row['image']; ?>">
                <h1><?php echo $row['title']; ?></h1>
                <div class="content">
                    <p><?php echo $row['content']; ?></p>
                </div>
            </div>
            <div class="social-share">
                <a href="#" class="share-btn facebook"><i class="fab fa-facebook-f"></i> Share on Facebook</a>
                <a href="#" class="share-btn twitter"><i class="fab fa-twitter"></i> Share on Twitter</a>
                <a href="#" class="share-btn pinterest"><i class="fab fa-pinterest"></i> Share on Pinterest</a>
            </div>
        </div>
    </main>
    <footer>
        <p>© 2023 My Blog. All rights reserved.</p>
    </footer>

</body>

</html>
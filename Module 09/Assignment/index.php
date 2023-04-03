<!DOCTYPE html>
<html lang="en">
<?php
    include 'db_conection.php' ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="https://devriazul.fastitbd.com/images/riazul.png" alt="Logo" class="logo" width="50px"></a>
        </div>
        <nav>
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
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

    <section class="featured">
        <div class="container">
            <h1>Latest Blog</h1>
            <div class="post">
                <?php include('retrieve-posts.php'); ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 My Blog</p>
        </div>
    </footer>

</body>

</html>
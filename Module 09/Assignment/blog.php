<!DOCTYPE html>
<html lang="en">
<?php
    include 'db_conection.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog - Blog</title>
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
                <li class="active">
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

        <div class="">
            <section class="featured">

                <h1>Blog</h1>

                <div class="post">
                    <?php include('retrive-all-post.php'); ?>
                </div>
            </section>

            <aside class="sidebar">

                <div class="widget">
                    <h3>Search</h3>
                    <form>
                        <input type="text" placeholder="Search...">
                        <button type="submit">Go</button>
                    </form>
                </div>

                <div class="widget">
                    <h3>Categories</h3>
                    <ul>
                        <li><a href="#">Category 1</a></li>
                        <li><a href="#">Category 2</a></li>
                        <li><a href="#">Category 3</a></li>
                        <li><a href="#">Category 4</a></li>
                    </ul>
                </div>

            </aside>
        </div>

    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 My Blog</p>
        </div>
    </footer>
</body>

</html>
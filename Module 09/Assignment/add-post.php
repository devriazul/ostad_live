<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add blog</title>
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
    <main class="contact-page">
        <h1>Add Blog Post</h1>
        <form method="post" action="process-post.php">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="image">Image URL:</label>
            <input type="text" id="image" name="image" required>

            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="3" required></textarea><br>

            <button type="submit">Submit</button>
        </form>
    </main>
    <footer>
        <p>© 2023 My Blog. All rights reserved.</p>
    </footer>

</body>
</html>
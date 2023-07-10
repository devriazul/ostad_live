<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - My Blog</title>
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
                <li class="active"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="contact-page">
        <h1>Contact Us</h1>
        <p>Fill out the form below to send us a message:</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" id="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="3" required></textarea>
            </div>
            <button type="submit">Send</button>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = test_input($_POST["name"]);
                    $email = test_input($_POST["email"]);
                    $subjects = test_input($_POST["subject"]);
                    $message = test_input($_POST["message"]);
                    $to = "youremail@example.com";
                    $subject = "Contact Form Submission";
                    $headers = "From: $email\n";
                    $headers .= "Reply-To: $email\n";
                    $headers .= "Content-type: text/html; charset=UTF-8\n";
                    $message = "<p>Name: $name</p>\n<p>Email: $email</p>\n <p>Subject: $subjects</p>\n<p>Message: $message</p>";
                    mail($to, $subject, $message, $headers);
                    echo "<p>Thank you for contacting us. We will get back to you soon.</p>";
                }

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                ?>
        </form>
    </main>
    <footer>
        <p>© 2023 My Blog. All rights reserved.</p>
    </footer>

</body>

</html>


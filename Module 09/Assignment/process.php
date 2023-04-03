<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
        <div class="logo">
            <a href="index.html"><img src="https://devriazul.fastitbd.com/images/riazul.png" alt="Logo" class="logo" width="50px"></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="active"><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
      <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        echo "<p>Thank you for contacting us, $name! We'll get back to you soon.</p>";
      ?>
    </main>
  </body>
</html>

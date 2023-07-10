<?php
    include "inc/header.php";
?>

    <!-- Page Content -->
    <div class="container mt-5">

        <!-- Page Heading/Breadcrumbs -->
        <h2 class="text-center mt-4 mb-3">Contact Us
        </h2>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>

        <!-- Contact Form -->
        <div class="row">
            <div class="col-lg-6 mb-4 px-5">
                <form method="post" action="process.php">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>

            <div class="col-lg-6 mb-4 px-5">
                <h3>Contact Details</h3>
                <p>
                    1234 Main Street<br> Suite 500<br> Anytown, USA 12345
                </p>
                <p>
                    <abbr title="Phone">P</abbr>: (123) 456-7890
                </p>
                <p>
                    <abbr title="Email">E</abbr>:
                    <a href="mailto:name@example.com">name@example.com
                    </a>
                </p>
                <p>
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
                </p>
            </div>
        </div>
    </div>
    <!-- Footer Section -->
    <?php
    include "inc/footer.php"
?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'Home || ' : (basename($_SERVER['PHP_SELF']) == 'about.php' ? 'About || ' : (basename($_SERVER['PHP_SELF']) == 'service.php' ? 'Service || ' : (basename($_SERVER['PHP_SELF']) == 'about.php' ? 'About || ' : (basename($_SERVER['PHP_SELF']) == 'blog.php' ? 'Blog || ' : (basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'Portfolio || ' : (basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'Contact || ' :'')))))) ?>Small Business Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Small Business</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo "active"; ?>" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') echo "active"; ?>" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'service.php') echo "active"; ?>" href="service.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'portfolio.php') echo "active"; ?>" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'blog.php') echo "active"; ?>" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo "active"; ?>" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
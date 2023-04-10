<?php
    include "inc/header.php";
?>
    <!-- Image Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/1200/400?random=1" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1200/400?random=2" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1200/400?random=3" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center">About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu nulla vel velit commodo consequat. Ut ac elit non ante hendrerit suscipit. Phasellus euismod, ex vitae tincidunt lacinia, odio tortor fringilla arcu, ut iaculis sapien
                purus vel enim. In sed mi dolor. Suspendisse faucibus malesuada lorem, sit amet tempor magna feugiat vel. Nullam vitae feugiat metus. Proin vel efficitur est.</p>
            <p>Aliquam malesuada nunc vitae nisi convallis, a pretium lorem aliquet. Morbi condimentum sodales massa eget efficitur. Nulla facilisi. Nam non lorem vel velit commodo vulputate nec quis elit. Sed sit amet velit et lorem euismod efficitur. Quisque
                ut ex in enim commodo lobortis ut et sapien. Fusce vitae nisl ex.</p>
        </div>

    </section>
    <!-- Services Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/id/1011/400/250" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Service 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu nulla vel velit commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/id/1012/400/250" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Service 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu nulla vel velit commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/id/1015/400/250" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Service 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu nulla vel velit commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center">Our Portfolio</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/id/1025/400/250" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Project 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu nulla vel velit commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/id/1027/400/250" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Project 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu nulla vel velit commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/id/1031/400/250" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Project 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu nulla vel velit commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Blog Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Our Latest Blog Posts</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/id/1045/400/250" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Post 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu nulla vel velit commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/id/1053/400/250" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Post 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu nulla vel velit commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://picsum.photos/id/1062/400/250" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Post 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu nulla vel velit commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <div class="row px-5">
                <div class="col-md-6 px-md-5">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Send Message</button>
                    </form>
                </div>
                <div class="col-md-6 px-md-5">
                    <h5 class="mt-3">Get in Touch</h5>
                    <p>Feel free to contact us if you have any questions or feedback about our services.</p>
                    <h5 class="mt-3">Office Address</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i>1234 Main St, Suite 1<br>Springfield, CA 12345</li>
                        <li><i class="bi bi-phone-fill"></i>+1 (555) 555-1212</li>
                        <li><i class="bi bi-envelope-fill"></i>info@mybusiness.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php
    include "inc/footer.php"
?>
</body>

</html>
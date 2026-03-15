<?php
    if (isset($_POST['btnLogin']))
    {
        header("Location: Login.php");
    }
    if (isset($_POST['btnSignup']))
    {
        header("Location: Choice.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse Management</title>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- slick css and theme -->
    <link rel="stylesheet" href="asset/css/slick-theme.css">
    <link rel="stylesheet" href="asset/css/slick.css">
    <!-- main css -->
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <form method="post">
    <!-- Header (Navbar) -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Ware Sync</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Warehouses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-light me-2" name="btnLogin">Login</button>
                        <button class="btn btn-light" name="btnSignup">Sign-up</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Our Work Section -->
    <section class="our-work py-5">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <h2 class="section-title  text-center">Our Work</h2>
            <p class="text-center fs-5">
                We excel in warehouse management, providing solutions for efficient
                inventory
                control, distribution, and fulfillment. Our services ensure that your goods are handled with precision
                and care.
            </p>
        </div>
    </section>



    <!-- Testimonial Section -->
    <section class="testimonial-section mb-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">What People Say</h2>
            <div class="quotes">
                <div class="bubble">
                    <blockquote>
                        Store Smart has simplified our warehouse operations immensely. From inventory tracking to order
                        processing, everything is now streamlined. The platform is intuitive, and our team finds it very
                        easy to use. We’re thrilled with the results!
                    </blockquote>
                    <div></div>
                    <cite>– Sarah Thompson, Operations Manager at Global Goods</cite>
                </div>
                <div class="bubble">
                    <blockquote>
                        We’ve been able to optimize our warehouse space and reduce errors thanks to Store Smart. Their
                        system is incredibly user-friendly, and the real-time tracking feature has improved our
                        efficiency. I highly recommend their service!
                    </blockquote>
                    <div></div>
                    <cite>– Mark Henderson, Logistics Director at Alpha Distribution</cite>
                </div>
                <div class="bubble">
                    <blockquote>
                        Store Smart has given us greater control over our inventory management. The platform is
                        reliable, secure, and perfect for scaling our operations. The support team is always helpful,
                        and we’re very satisfied with the service.
                    </blockquote>
                    <div></div>
                    <cite>– Jessica Lee, CEO of Lee & Sons Warehousing</cite>
                </div>
                <div class="bubble">
                    <blockquote>
                        Using Store Smart has been a game-changer for our business. We’ve saved both time and money by
                        optimizing our storage needs. Their flexible pricing and excellent customer support make them
                        the perfect partner for any warehouse!
                    </blockquote>
                    <div></div>
                    <cite>– David Cooper, Founder of Cooper Wholesale Supplies</cite>
                </div>
            </div>
        </div>
    </section>


    <!-- Partners Section -->
<!--    <section class="partners-section my-5">
        <div class="container">
            <h2 class="section-title text-center pt-5">Our Partners</h2>
            <div class="d-flex justify-content-center flex-wrap partners-logo my-5">
                <img src="asset/images/Flipkart.svg" alt="Partner 1" class="mx-3 my-2">
                <img src="asset/images/Grab.svg" alt="Partner 2" class="mx-3 my-2">
                <img src="asset/images/Myntra.svg" alt="Partner 3" class="mx-3 my-2">
                <img src="asset/images/TATAPowerSolar.svg" alt="Partner 4" class="mx-3 my-2">
            </div>
        </div>
    </section>-->



    <!-- Footer Section -->
    <footer class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="fw-bold fs-3 mb-3">Contact Us</h5>
                    <p>
                        <strong>Email:</strong>
                        <a href="mailto:smartstoreinfo@warehouse.com">smartstoreinfo@warehouse.com</a>
                    </p>
                    <p>
                        <strong>Phone:</strong>
                        <a href="tel:+1234567890">+1 234 567 890</a>
                    </p>
                    <p>
                        <strong>Address:</strong>
                        132 My Street, Kingston, New York 12401
                    </p>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold fs-3 mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-1"><a href="index.html" class="text-white">Home</a></li>
                        <li class="mb-1"><a href="warehouse.html" class="text-white">Warehouses</a></li>
                        <li class="mb-1"><a href="about.html" class="text-white">About Us</a></li>
                        <li class="mb-1"><a href="contact.html" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold fs-3 mb-3">Follow Us</h5>
                    <a href="https://www.facebook.com/" class="text-white me-3" target="_blank">
                        <i class="fs-4 fab fa-facebook-f"></i>
                    </a>
                    <a href="https://x.com/" class="text-white me-3" target="_blank">
                        <i class="fs-4 fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/" class="text-white me-3" target="_blank">
                        <i class="fs-4 fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.instagram.com/" class="text-white" target="_blank">
                        <i class="fs-4 fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; 2024 Store Smart Warehouse Management. All Rights Reserved.</p>
            </div>
        </div>
    </footer>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- slick js -->
    <script src="asset/js/slick.min.js"></script>
    <!-- main js -->
    <script src="asset/js/script.js"></script>
    </form>
</body>

</html>
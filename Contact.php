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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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


    <section class="contact-details my-lg-5 pb-5">
        <div class="container">
            <h2 class="heading-font fw-bold fs-1 text-center mt-5 mb-lg-5">Ways to Reach Out Us</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-center h-100 mt-5 mt-lg-0">
                        <div class="text-center">
                            <iconify-icon icon="grommet-icons:map-location" width="40" height="40"
                                style="color: #004080"></iconify-icon>
                            <h2 class="fs-3 heading-font  heading-font">Store Smart Pvt. Ltd.</h2>
                            <p class="fw-medium">
                                132 My Street, Kingston, <br>
                                New York 12401, <br>
                                United States.
                            </p>
                            <div class="mt-5">
                                <span>Email on: </span>
                                <a href="mailto:smartstoreinfo@warehouse.com" class=" text-decoration-none fw-bolder">
                                    smartstoreinfo@warehouse.com
                                </a>
                            </div>
                            <div class="mb-5 mt-1">
                                <span>Call Us on: </span>
                                <a href="tel:+1234567890" class=" text-decoration-none fw-bolder">
                                    +1 234 567 890
                                </a>
                            </div>
                            <div>
                                <h2 class="fs-3 heading-font mt-3 mb-4 heading-font">
                                    Our Social Media Pages
                                </h2>
                                <ul class="d-flex flex-wrap align-items-center justify-content-center list-unstyled ">
                                    <li class="mx-2">
                                        <a href="https://www.facebook.com/" target="_blank"
                                            class="rounded-5 d-flex justify-content-center align-items-center p-2">
                                            <iconify-icon icon="ri:facebook-fill" width="20" height="20"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="https://x.com/" target="_blank"
                                            class="rounded-5 d-flex justify-content-center align-items-center p-2">
                                            <iconify-icon icon="mdi:twitter" width="20" height="20"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="https://www.linkedin.com/" target="_blank"
                                            class="rounded-5 d-flex justify-content-center align-items-center p-2">
                                            <iconify-icon icon="ri:linkedin-fill" width="20" height="20"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="https://www.instagram.com/" target="_blank"
                                            class="rounded-5 d-flex justify-content-center align-items-center p-2">
                                            <iconify-icon icon="mdi:instagram" width="20" height="20"></iconify-icon>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center justify-content-center h-100 my-5 m-lg-0 pb-5 p-lg-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49346.267411137545!2d-74.04195833046874!3d41.93162799999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dd0f0a1cb7da0b%3A0x2e8eefd768bda308!2sUnited%20States%20Postal%20Service!5e1!3m2!1sen!2sin!4v1728635000650!5m2!1sen!2sin"
                            class="w-100" height="400" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>



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



    <!-- Scripts and Closing Body Tag -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="asset/js/script.js"></script>
    </form>
</body>

</html>
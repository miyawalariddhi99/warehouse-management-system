<?php
    if (isset($_POST['btnLogout']))
    {
        header("Location: Login.php");
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
            <a class="navbar-brand" href="index.html">Store Smart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="LogoutHome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ViewCity.php">Warehouses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="LogoutAbout.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="LogoutContact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-light me-2" name="btnLogout">Logout</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero">
                <div class="hero-overlay"></div>
                <div class="hero-content container">
                    <h1 class="fw-bold display-3">Optimize Your Warehouse</h1>
                    <p>
                        Take control of your warehouse operations with our intuitive platform designed to simplify inventory
                        tracking, optimize workflows, and boost productivity. Whether managing stock or streamlining orders, our
                        solution is tailored to meet the demands of your growing business
                    </p>
                    <a href="LogoutAboutUs.php" class="btn btn-custom">Learn More</a>
                </div>
            </section>

            <!-- Counter Section -->
            <section class="counter-section">
                <div class="container">
                    <h2 class="mb-5">Our Achievements</h2> <!-- Added heading -->
                    <div class="row">
                        <!-- Number of Warehouses -->
                        <div class="col-md-3">
                            <div class="counter" data-target="120">0</div>
                            <p class="counter-text">Warehouses</p>
                        </div>
                        <!-- Number of Customers -->
                        <div class="col-md-3">
                            <div class="counter" data-target="5000">0</div>
                            <p class="counter-text">Happy Customers</p>
                        </div>
                        <!-- Number of Companies -->
                        <div class="col-md-3">
                            <div class="counter" data-target="350">0</div>
                            <p class="counter-text">Connected Companies</p>
                        </div>
                        <!-- Yearly Goods Turnover -->
                        <div class="col-md-3">
                            <div class="counter" data-target="5000000">0</div>
                            <p class="counter-text">Yearly Goods Turnover</p>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Service Section with Cards -->
            <section class="services-section py-5">
                <div class="container">
                    <h2 class="text-center mb-5">Our Services</h2> <!-- Section Heading -->
                    <div class="row">
                        <!-- Inventory Management Card -->
                        <div class="col-md-6 col-lg-3">
                            <div class="card service-card text-center">
                                <div class="card-body">
                                    <img src="https://img.icons8.com/ios-filled/100/007bff/warehouse-1.png"
                                         alt="Inventory Management">
                                    <h4 class="mt-3">Inventory Management</h4>
                                    <p>Efficiently track and manage your stock levels in real-time with our advanced solutions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Order Processing Card -->
                        <div class="col-md-6 col-lg-3">
                            <div class="card service-card text-center">
                                <div class="card-body">
                                    <img src="https://img.icons8.com/ios-filled/100/007bff/checkout.png" alt="Order Processing">
                                    <h4 class="mt-3">Order Processing</h4>
                                    <p>Streamline order fulfillment and ensure accurate, timely deliveries to your customers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Warehouse Optimization Card -->
                        <div class="col-md-6 col-lg-3">
                            <div class="card service-card text-center">
                                <div class="card-body">
                                    <img src="https://img.icons8.com/ios-filled/100/007bff/fork-lift.png"
                                         alt="Warehouse Optimization">
                                    <h4 class="mt-3">Warehouse Optimization</h4>
                                    <p>Optimize warehouse layouts and storage for maximum efficiency and productivity.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Shipment Tracking Card -->
                        <div class="col-md-6 col-lg-3">
                            <div class="card service-card text-center">
                                <div class="card-body">
                                    <img src="https://img.icons8.com/ios-filled/100/007bff/delivery.png"
                                         alt="Shipment Tracking">
                                    <h4 class="mt-3">Shipment Tracking</h4>
                                    <p>Track shipments in real-time to provide transparent delivery updates to customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Advantages Section -->
            <section class="advantages-section py-5">
                <div class="container">
                    <h2 class="text-center mb-5">Advantages for Dealers</h2> <!-- Section Heading -->
                    <div class="row">
                        <!-- Advantage 1: Cost-Effective Storage -->
                        <div class="col-md-4 d-flex">
                            <div class="card advantage-card text-center flex-fill">
                                <div class="card-body">
                                    <img src="https://img.icons8.com/ios-filled/100/007bff/money.png"
                                         alt="Cost-Effective Storage">
                                    <h4 class="mt-3">Cost-Effective Storage</h4>
                                    <p>Save costs with our competitive and flexible pricing for long and short-term storage.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Advantage 2: Enhanced Security -->
                        <div class="col-md-4 d-flex">
                            <div class="card advantage-card text-center flex-fill">
                                <div class="card-body">
                                    <img src="https://img.icons8.com/ios-filled/100/007bff/security-shield-green.png"
                                         alt="Enhanced Security">
                                    <h4 class="mt-3">Enhanced Security</h4>
                                    <p>Our warehouses are equipped with 24/7 surveillance and modern security systems to ensure
                                        the safety of your goods.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Advantage 3: Real-Time Tracking -->
                        <div class="col-md-4 d-flex">
                            <div class="card advantage-card text-center flex-fill">
                                <div class="card-body">
                                    <img src="https://img.icons8.com/ios-filled/100/007bff/time-machine.png"
                                         alt="Real-Time Tracking">
                                    <h4 class="mt-3">Real-Time Tracking</h4>
                                    <p>Track your inventory in real-time through our advanced management system for full
                                        transparency.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <!-- Advantage 4: Quick Access -->
                        <div class="col-md-4 d-flex">
                            <div class="card advantage-card text-center flex-fill">
                                <div class="card-body">
                                    <img src="https://img.icons8.com/ios-filled/100/007bff/time.png" alt="Quick Access">
                                    <h4 class="mt-3">Quick Access to Goods</h4>
                                    <p>Ensure fast access to your stored goods with our optimized warehouse layout and
                                        processes.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Advantage 5: Scalable Storage -->
                        <div class="col-md-4 d-flex">
                            <div class="card advantage-card text-center flex-fill">
                                <div class="card-body">
                                    <img src="https://img.icons8.com/ios-filled/100/007bff/expand.png" alt="Scalable Storage">
                                    <h4 class="mt-3">Scalable Storage</h4>
                                    <p>Easily scale your storage needs as your business grows, with flexible space solutions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Advantage 6: Professional Support -->
                        <div class="col-md-4 d-flex">
                            <div class="card advantage-card text-center flex-fill">
                                <div class="card-body">
                                    <img src="https://img.icons8.com/ios-filled/100/007bff/support.png"
                                         alt="Professional Support">
                                    <h4 class="mt-3">Professional Support</h4>
                                    <p>Get round-the-clock assistance from our experienced warehouse management team.</p>
                                </div>
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
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script> -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="asset/js/script.js"></script>
    </form>
</body>

</html>
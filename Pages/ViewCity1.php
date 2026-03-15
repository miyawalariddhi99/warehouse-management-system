
<?php
    if (isset($_POST['btnLogout']))
    {
        header("Location: Home.php");
        exit();
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="asset/css/style.css">
    </head>

    <body>
        <form method="post">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Warehouses</a>
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
                        <li class="nav-item my-3 my-lg-0">
                        <button class="btn btn-outline-light me-2" name="btnLogout" id="btnLogout">Logout</button>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>


        <main class="my-5">
            <section class="warehouses">
                <div class="container text-center">
                    <h2 class="text-center">Our Warehouses</h2>
                    <input type="search" name="search" id="search" class="form-control my-4"
                           placeholder="Search Warehouse by its Location">
                </div>
            </section>
            <section class="warehouses">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-sm-6 my-3 d-flex align-items-stretch custom-width ps-sm-1 ps-0 web-scroll"                                                                                                                                                                                                                                                                                                                                                                                      >
                            <a href="SuratWarehouse.php" class="card text-center p-2 text-decoration-none">
                                <div class="rounded"  id="surat">
                                    <img src="asset/images/surat.png" class="w-100 rounded">
                                </div>
                                <h3 class="mb-0 pt-2 px-5 head-small">
                                    Surat </h3>
                                <p class="mb-0 text-dark">in
                                    8 locations
                                </p>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-3 d-flex align-items-stretch custom-width ps-sm-1 ps-0 web-scroll">
                            <a href="AhmedabadWarehouse.php" class="card text-center p-2 text-decoration-none">
                                <div class="rounded">
                                    <img src="asset/images/ahemdabad.png" class="w-100 rounded">
                                </div>
                                <h3 class="mb-0 pt-2 px-5 head-small">
                                    Ahmedabad </h3>
                                <p class="mb-0 text-dark">in
                                    6 locations
                                </p>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-3 d-flex align-items-stretch custom-width ps-sm-1 ps-0 web-scroll">
                            <a href="RajkotWarehouse.php" class="card text-center p-2 text-decoration-none">
                                <div class="rounded">
                                    <img src="asset/images/rajkot.png" class="w-100 rounded">
                                </div>
                                <h3 class="mb-0 pt-2 px-5 head-small">
                                    Rajkot </h3>
                                <p class="mb-0 text-dark">in
                                    2 locations
                                </p>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-3 d-flex align-items-stretch custom-width ps-sm-1 ps-0 web-scroll">
                            <a href="AmreliWarehouse.php" class="card text-center p-2 text-decoration-none">
                                <div class="rounded">
                                    <img src="asset/images/amreli.png" class="w-100 rounded">
                                </div>
                                <h3 class="mb-0 pt-2 px-5 head-small">
                                    Amreli </h3>
                                <p class="mb-0 text-dark">in
                                    1 locations
                                </p>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-3 d-flex align-items-stretch custom-width ps-sm-1 ps-0 web-scroll">
                            <a href="AnandWarehouse.php" class="card text-center p-2 text-decoration-none">
                                <div class="rounded">
                                    <img src="asset/images/anand.png" class="w-100 rounded">
                                </div>
                                <h3 class="mb-0 pt-2 px-5 head-small">
                                    Anand </h3>
                                <p class="mb-0 text-dark">in
                                    1 locations
                                </p>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-3 d-flex align-items-stretch custom-width ps-sm-1 ps-0 web-scroll">
                            <a href="BhavnagarWarehouse.php" class="card text-center p-2 text-decoration-none">
                                <div class="rounded">
                                    <img src="asset/images/bhavnagar.png" class="w-100 rounded">
                                </div>
                                <h3 class="mb-0 pt-2 px-5 head-small">
                                    Bhavnagar </h3>
                                <p class="mb-0 text-dark">in
                                    1 locations
                                </p>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-3 d-flex align-items-stretch custom-width ps-sm-1 ps-0 web-scroll">
                            <a href="NavsariWarehouse.php" class="card text-center p-2 text-decoration-none">
                                <div class="rounded">
                                    <img src="asset/images/navsari.png" class="w-100 rounded">
                                </div>
                                <h3 class="mb-0 pt-2 px-5 head-small">
                                    Navsari </h3>
                                <p class="mb-0 text-dark">in
                                    1 locations
                                </p>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-3 d-flex align-items-stretch custom-width ps-sm-1 ps-0 web-scroll">
                            <a href="GandhinagarWarehouse.php" class="card text-center p-2 text-decoration-none">
                                <div class="rounded">
                                    <img src="asset/images/gandhinagar.jpg" class="w-100 rounded">
                                </div>
                                <h3 class="mb-0 pt-2 px-5 head-small">
                                    Gandhinagar </h3>
                                <p class="mb-0 text-dark">in
                                    1 locations
                                </p>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 my-3 d-flex align-items-stretch custom-width ps-sm-1 ps-0 web-scroll">
                            <a href="BharuchWarehouse.php" class="card text-center p-2 text-decoration-none">
                                <div class="rounded">
                                    <img src="asset/images/bharuch.jpg" class="w-100 rounded">
                                </div>
                                <h3 class="mb-0 pt-2 px-5 head-small">
                                    Bharuch </h3>
                                <p class="mb-0 text-dark">in
                                    1 locations
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>






        <!-- Footer Section -->
        <footer class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="fw-bold fs-3 mb-3">Contact Us</h5>
                        <p><strong>Email:</strong> info@warehouse.com</p>
                        <p><strong>Phone:</strong> +1 234 567 890</p>
                        <p><strong>Address:</strong> 123 Warehouse St, City, Country</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="fw-bold fs-3 mb-3">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li class="mb-1"><a href="index.html" class="text-white">Home</a></li>
                            <li class="mb-1"><a href="services.html" class="text-white">Services</a></li>
                            <li class="mb-1"><a href="about.html" class="text-white">About Us</a></li>
                            <li class="mb-1"><a href="contact.html" class="text-white">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="fw-bold fs-3 mb-3">Follow Us</h5>
                        <a href="#" class="text-white me-3"><i class="fs-4 fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fs-4 fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fs-4 fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white"><i class="fs-4 fab fa-instagram"></i></a>
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
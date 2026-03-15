<?php
if (isset($_POST['btnLogout']))
{
    header("Location: Home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Warehouse Admin Panel</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="asset/css/style.css">
        <style>

            /* Custom CSS for Hero Section */
            .hero {
                background-image: url('9950253.jpg') no-repeat center center/cover;
                min-height: 100vh;
                color: #fff;
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
                text-align: center;
            }

            .hero-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.8);
                /* Dark overlay */
            }

            .hero-content {
                position: relative;
                z-index: 2;
            }

            .hero h1 {
                font-size: 4rem;
                font-weight: 700;
            }

            .hero p {
                font-size: 1.25rem;
                margin-top: 1rem;
                max-width: 600px;
            }


            /* Blue theme styles */
            .btn-custom {
                background-color: #007bff;
                color: #fff;
                font-size: 1.1rem;
                padding: 0.75rem 1.5rem;
                border-radius: 30px;
                margin-top: 1.5rem;
                border: none;
            }

            .btn-custom:hover {
                background-color: #0056b3;
            }

            /* Header Blue Theme */
            .navbar {
                background-color: #004080;
                /* Dark blue */
            }

            .navbar-brand {
                color: #fff !important;
                font-size: 1.5rem;
                font-weight: bold;
            }

            .navbar-nav .nav-link {
                color: #fff !important;
                margin-right: 1rem;
            }

            .navbar-nav .nav-link:hover {
                color: #d9d9d9 !important;
            }

            .navbar-toggler {
                border-color: #fff;
            }
            .dashboard-cards {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap; /* Allow cards to wrap */
            }
            /* Main content */
            .main-content {
                flex-grow: 1;
                padding: 20px;
                overflow-y: auto; /* Added scroll if content overflows */
            }

            .header {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 5px;
                margin-bottom: 20px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Added shadow */
            }

            .header h1 {
                margin-bottom: 10px;
                font-size: 28px; /* Increased font size */
                color: #333;
            }

            .header p {
                color: #666;
            }



            .card {
                flex: 1 1 22%; /* Responsive card width */
                margin: 10px; /* Margin between cards */
                padding: 20px;
                background-color: white;
                border-radius: 5px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                text-align: center;
                transition: transform 0.3s; /* Animation on hover */
            }

            .card:hover {
                transform: translateY(-5px); /* Lift effect on hover */
            }
            .card h3 {
                font-size: 36px; /* Increased font size */
                margin-bottom: 10px;
                color: #007bff; /* Color change */
            }

            .card p {
                font-size: 18px;
                margin-bottom: 10px;
                color: #666;
            }

            .card a {
                color: #007bff; /* Consistent link color */
                text-decoration: none;
                font-weight: bold;
            }
            /* Card colors */
            .card.green {
                border-top: 4px solid #28a745;
            }

            .card.red {
                border-top: 4px solid #dc3545;
            }

            .card.orange {
                border-top: 4px solid #fd7e14;
            }

            .card.blue {
                border-top: 4px solid #007bff;
            }
            .low-stock {
                background-color: #fff3cd;
                padding:15px;
                margin-top: 20px;
                border: 1px solid #ffeeba;
                border-radius: 5px;
                width: 100%;
            }

            .low-stock h2 {
                font-size: 18px;
                margin-bottom: 10px;
                color: #856404;
            }

            .low-stock p {
                color: #856404;
            }

            /* Counter Section Styles */
            .counter-section {
                padding: 3rem 0;
                background-color: #f8f9fa;
                text-align: center;
            }

            .counter {
                font-size: 3rem;
                font-weight: 700;
                color: #007bff;
            }

            .counter-text {
                font-size: 1.25rem;
                font-weight: 500;
                color: #333;
            }

            /* Service Section Styling */
            /* Service Section Styling */
            .services-section {
                background-color: #f8f9fa;
                /* Light background */
            }

            .services-section h2 {
                color: #004080;
                /* Dark blue heading color */
                font-weight: bold;
            }

            /* Card Styling */
            .service-card {
                border: none;
                /* Remove card border */
                border-radius: 10px;
                /* Rounded corners */
                transition: transform 0.3s, box-shadow 0.3s;
                /* Smooth transition for hover effect */
            }

            .service-card img,
            .community-section img {
                width: 80px;
                /* Size of the icons */
            }

            .service-card h4 {
                color: #007bff;
                /* Blue color for service titles */
                font-weight: bold;
            }

            .service-card p {
                color: #333;
                font-size: 1rem;
            }

            /* Hover effect */
            .service-card:hover,
            .community-section:ho {
                transform: translateY(-10px);
                /* Lift the card up on hover */
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                /* Apply shadow on hover */
            }

            /* Advantages Section Styling */
            .advantages-section {
                background-color: #eef1f7;
                /* Light background */
            }

            h2 {
                color: #004080;
                font-weight: bold;
            }

            /* Card Styling */
            .advantage-card {
                border: none;
                border-radius: 10px;
                transition: transform 0.3s, box-shadow 0.3s;
                display: flex;
                flex-direction: column;
                /* Align items vertically */
                justify-content: space-between;
                /* Space out items */
                width: 100%;
                /* Set to full width */
                height: 250px;
                /* Set fixed height for square shape */
            }

            .advantage-card img {
                width: 80px;
                /* Size of the icons */
            }

            .advantage-card h4 {
                color: #007bff;
                /* Blue color for advantage titles */
                font-weight: bold;
            }

            .advantage-card p {
                color: #333;
                font-size: 1rem;
            }

            /* Hover effect for the cards */
            .advantage-card:hover {
                transform: translateY(-10px);
                /* Slight lift on hover */
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                /* Subtle shadow */
            }

            /* Footer Styling */
            footer {
                background-color: #004080;
                color: white;
            }

            footer a {
                text-decoration: none;
                color: white;
            }

            .no-fouc {
                display: none;
            }

            .quotes {
                width: 60%;
                margin: 24px auto;
            }

            /* Simple Slider */
            .white-back {
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
                background: #004080;
            }

            .simple blockquote p {
                border-top: 1px solid #ccc;
                border-bottom: 1px solid #ccc;
                color: #1e528e;
                padding: 25px;
                font-size: 1.25em;
                font-style: italic;
                text-align: center;
            }

            .simple cite {
                font-size: 1em;
                float: right;
                font-style: normal;
                color: #1e528e;
            }

            .simple cite a {
                color: #2d91c2;
                font-style: italic;
                text-decoration: none;
                font-size: 0.85em;
            }

            .simple cite a:hover {
                color: #00b4cc;
            }

            /* A custom cursor to let folks know they can drag things */

            /* Bubble Slider */

            .bubble blockquote {
                margin: 10px 10px 0;
                background: #004080;
                padding: 60px;
                position: relative;
                border: none;
                border-radius: 8px;
                font-size: 1.25em;
                color: #fff;
            }

            .bubble blockquote:before,
            .bubble blockquote:after {
                content: "\201C";
                position: absolute;
                font-size: 80px;
                padding: 10px;
                line-height: 1;
                color: #fff;
            }

            .bubble blockquote:before {
                top: 0;
                left: 10px;
                color: #004080;
            }

            .bubble blockquote:after {
                content: "\201D";
                right: 10px;
                bottom: -0.5em;
            }

            .bubble div {
                width: 0;
                height: 0;
                border-left: 0 solid transparent;
                border-right: 20px solid transparent;
                border-top: 20px solid #373737;
                margin: 0 0 0 60px;
                margin-bottom: 10px;
            }

            .bubble cite {
                padding-left: 20px;
                font-size: 1.25em;
                color: #004080;
            }

            .partners-section img {
                transition: all 0.3s linear;
                border-radius: 8px;
            }

            .partners-section img:hover {
                transform: translateY(-10px);
                /* Slight lift on hover */
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
                /* Subtle shadow */
            }

            .warehouses a {
                color: #004080;
            }

            .warehouses .web-scroll {
                transition: all 0.3s linear;
            }

            .web-scroll:hover {
                transform: translateY(-10px);
                /* Slight lift on hover */
                /* Subtle shadow */
            }


        </style>
    </head>
    <body>
        <form method="post">
            <header>

                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container">
                        <a class="navbar-brand" href="Admin.php">WareSync</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="Admin.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="TotalWarehouse.php">Warehouses</a>
                                </li>
<!--                                <li class="nav-item">
                                    <a class="nav-link" href="#">Customers & Reviews</a>
                                </li>-->
                                <li class="nav-item my-3 my-lg-0">
                                <button class="btn btn-outline-light me-2" name="btnLogout" >Logout</button>
                            </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- Main Content -->
            <div class="main-content">
                <div class="header">
                    <h1>Welcome to the Administrator's Panel</h1>
                    <p>Welcome, Admin Your ID is : 1</p>
                </div>
                <div class="dashboard-cards">
                    <div class="card green">
                        <?php
                        $con = mysqli_connect('localhost:3307', 'root', '', 'warehouse');
                        $b_c = "select count(*) from tblowner";
                        $b_q = mysqli_query($con, $b_c);
                        $r = mysqli_fetch_row($b_q);
                        $count = $r[0];
                        ?>
                        <h3><?php echo "$count"; ?></h3>
                        <p>Total Owner</p>
                        <a href="ShowOwners.php">View Owners</a>
                    </div>
                    <div class="card red">
                        <?php
                        $req = "select count(*) from tblwarehousereg where Verification='PENDING'";
                        $rq = mysqli_query($con, $req);
                        $ro = mysqli_fetch_row($rq);
                        $count_rq = $ro[0];
                        ?>
                        <h3><?php echo "$count_rq"; ?></h3>
                        <p>Pending Warehouse Request</p>
                        <a href="VerifactionWarehouse.php">Warehouse Request</a>
                    </div>
                    <div class="card orange">
                        <?php
                        $o_c = "select count(*) from tblowner";
                        $c_c = "select count(*) from tblcustomer";
                        $o_q = mysqli_query($con, $o_c);
                        $c_q = mysqli_query($con, $c_c);
                        $re = mysqli_fetch_row($o_q);
                        $re1 = mysqli_fetch_row($c_q);
                        $count_o = $re[0];
                        $count_c = $re1[0];
                        $count1 = $count_o + $count_c;
                       
                        ?>
                        <h3><?php echo $count1; ?></h3>
                        <p>Total Users</p>
                        <a href="ShowUser.php">View Users</a>
                    </div>
                    <div class="card blue">
                        <?php
                        $o_c = "select count(*) from tblwarehousereg";
                        $o_q = mysqli_query($con, $o_c);
                        $ro = mysqli_fetch_row($o_q);
                        $count_o = $ro[0];
                        ?>
                        <h3><?php echo "$count_o"; ?></h3>
                        <p>Total Warehouse</p>
                        <a href="TotalWarehouse.php">View Warehouse</a>
                    </div>
                </div>
        </form>
    </body>
</html>

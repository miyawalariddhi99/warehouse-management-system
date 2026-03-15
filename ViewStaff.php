<?php
if (isset($_POST['btnAddstaff'])) {
    header("Location: StaffInsert.php");
}
if (isset($_POST['btnLogout'])) {
    header("Location: Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Staff Details</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="asset/css/style.css">
        <style>
            /* General Styles */
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                margin: 0;
                padding: 0;
                text-align: center; /* Align content to center */
            }

            /* Navbar Styles */
            
            /* Button Styles */
            button {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                margin-bottom: 20px;
                display: inline-block; /* Center the button */
            }

            button:hover {
                background-color: #0056b3;
            }

            /* Table Styles */
            table {
                width: 90%; /* Reduce width to avoid edge alignment */
                margin: 20px auto; /* Center the table */
                border-collapse: collapse;
            }

            table, th, td {
                border: 1px solid #ddd;
            }

            th, td {
                padding: 10px;
                text-align: center; /* Center-align text in table cells */
            }

            th {
                background-color: #007bff; /* Blue color */
                color: white;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            tr:hover {
                background-color: #f1f1f1;
            }

            a {
                color: #007bff;
                text-decoration: none;
            }

            a:hover {
                text-decoration: underline;
            }
            @media (max-width: 768px) {
                nav .navbar-nav {
                    flex-direction: column;
                    align-items: center;
                }

                table {
                    font-size: 12px;
                }

                th, td {
                    padding: 5px;
                }
            }

        </style>
    </head>

    <body>
        <form method="post"> 
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand" href="index.html">Ware Sync</a>
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
                                <a class="nav-link" href="ShowRequestCustomer.php">Booking</a>
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

            <button type="submit" name="btnAddstaff">Add New Staff</button>
            <?php
            echo '<div id="StaffData">';
                
                $con = mysqli_connect("localhost:3307", "root", "", "warehouse");
                if (!$con) {
                    die("Error in connection");
                }
                $qu = "select * from staff";
                $q = mysqli_query($con, $qu);
                echo '<table>';
                echo '<tr><th>ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>Role</th><th>Email</th><th>Phone Number</th><th>Gender</th><th>Address</th><th>Date Of Birth</th><th>Date Of Joining</th><th>Employment Status</th><th>Emergency Contact No</th><th>Aadharcard Number</th><th>UPDATE</th><th>DELETE</th></tr>';

                while ($r = mysqli_fetch_assoc($q)) {
                    echo '<tr>';
                    echo '<td>' . $r["id"] . '</td>';
                    echo '<td>' . $r["first_name"] . '</td>';
                    echo '<td>' . $r["last_name"] . '</td>';
                    echo '<td>' . $r["role"] . '</td>';
                    echo '<td>' . $r["email"] . '</td>';
                    echo '<td>' . $r["phone_number"] . '</td>';
                    echo '<td>' . $r["gender"] . '</td>';
                    echo '<td>' . $r["address"] . '</td>';
                    echo '<td>' . $r["dob"] . '</td>';
                    echo '<td>' . $r["doj"] . '</td>';
                    echo '<td>' . $r["employment_status"] . '</td>';
                    echo '<td>' . $r["emergency_contact"] . '</td>';
                    echo '<td>' . $r["aadhar_number"] . '</td>';
                    echo '<td><a href="StaffUpdate.php?updateid=' . $r["id"] . '">UPDATE</a></td>';
                    echo '<td><a href="Staffdelete.php?deleteid=' . $r["id"] . '">DELETE</a></td>';
                    echo '</tr>';
                }
                echo '</table>';
                
            echo '</div>';
                ?>
        </form>
    </body>
</html>

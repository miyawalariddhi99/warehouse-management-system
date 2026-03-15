<?php
session_start();
?>
<html lang="en">
    <head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Booking Information</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="asset/css/style.css">
        
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f8f9fa;
                margin: 0;
                padding: 20px;
            }

            h1 {
                text-align: center;
                color: blue;
                margin-top: 30px;
            }

            .form-table {
                margin: 0 auto;
                border-collapse: collapse;
                width: 50%;
                background-color: #ffffff;
                border: 1px solid #dee2e6;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            .form-table th, .form-table td {
                padding: 15px;
                text-align: left;
                border-bottom: 1px solid #dee2e6;

            }

            .form-table th {
                background-color: #007bff;
                color: white;
            }

            .form-table tr:hover {
                background-color: #f1f1f1;
            }

            button {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 10px 15px;
                border-radius: 5px;
                cursor: pointer;
            }

            button:hover {
                background-color: #0056b3;
            }

            .table-container {
                margin-top: 20px;
                width: 80%;
                max-width: 800px;
                margin-left: auto;
                margin-right: auto;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            th, td {
                padding: 10px;
                border-bottom: 1px solid #dee2e6;
                text-align: left;

            }

            th {
                background-color: #007bff;
                color: white;
            }


            tr:hover {
                background-color: #f1f1f1;
            }
        </style>
         
    </head>
    <body>
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
    </body>
</html>
<?php

echo "<h1>BOOKING INFORMATION</h1>";
$con = mysqli_connect("localhost:3307", "root", "", "warehouse");

if (!$con) {
    die("Error in connection: " . mysqli_connect_error());
}


$Email = $_SESSION['cuser'];
$CID = "SELECT ID FROM tblcustomer WHERE EMAIL='$Email'";
$c1 = mysqli_query($con, $CID);
$EID = mysqli_fetch_assoc($c1)['ID'];
$v = "SELECT c.FNAME AS FirstName,c.LNAME AS LastName, b.CustomerID, b.StartDate, b.EndDate, b.Description, b.Status FROM tblbooking AS b JOIN tblcustomer AS c ON b.CustomerID = c.ID WHERE b.CustomerID=$EID";
$vi = mysqli_query($con, $v);

echo "<div class='table-container'>";
echo "<table>";
echo "<tr><th>Customer FName</th><th>Customer LName</th><th>Customer ID</th><th>Start Date</th><th>End Date</th><th>Description</th><th>Status</th></tr>";

while ($row = mysqli_fetch_assoc($vi)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['FirstName']) . "</td>";
    echo "<td>" . htmlspecialchars($row['LastName']) . "</td>";
    echo "<td>" . htmlspecialchars($row['CustomerID']) . "</td>";
    echo "<td>" . htmlspecialchars($row['StartDate']) . "</td>";
    echo "<td>" . htmlspecialchars($row['EndDate']) . "</td>";
    echo "<td>" . htmlspecialchars($row['Description']) . "</td>";
    if ($row['Status'] === "APPROVE") {
        echo "<td>" . htmlspecialchars($row['Status']) . "\n<a href='Payment.php'>CONFORM PAYMENT</a>" . "</td>";
    } else {
        echo "<td>" . htmlspecialchars($row['Status']) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
echo "</div>";
?>
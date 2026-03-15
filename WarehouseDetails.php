<!DOCTYPE html>
<?php
$ID = $_GET['id'];
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Warehouse Data - Full Details</title>
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f0f0f0;
            }

            header {
                background-color: #0d47a1;
                padding: 10px 0;
                color: white;
                text-align: center;
            }

            header nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 15px;
            }

            header nav a {
                color: white;
                margin-left: 20px;
                text-decoration: none;
                font-size: 18px;
            }

            header nav a.logout {
                padding: 10px 20px;
                background-color: #0d47a1;
                border-radius: 5px;
                text-transform: uppercase;
            }

            .container {
                padding: 20px;
                max-width: 1200px;
                margin: 0 auto;
            }

            h1 {
                color: #0d47a1;
                text-align: center;
                margin-bottom: 20px;
            }

            .details-table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
                background-color: #ffffff;
            }

            .details-table,
            th,
            td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            th {
                background-color: #0d47a1;
                color: white;
            }

            .gallery {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 20px;
                margin: 20px 0;
            }

            .gallery img {
                width: 100%;
                height: auto;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease-in-out;
            }

            .gallery img:hover {
                transform: scale(1.05);
            }

            .footer {
                background-color: #0d47a1;
                color: white;
                text-align: center;
                padding: 10px;
                position: absolute;
                width: 100%;
                bottom: 0;
            }
        </style>
    </head>

    <body>

        <header>
            <nav>
            <div>
                <a href="index.html" class="brand-logo" style="font-size: 22px; font-weight: bold;">Ware Sync</a>
            </div>
            <div>
                <a href="index.html">Home</a>
                <a href="ViewCity.php">Warehouses</a>
                <a href="LogoutAbout.php">About Us</a>
                <a href="LogoutContact.php">Contact Us</a>
                <a href="LogoutWarehouse.php" class="logout">Logout</a>
            </div>
        </nav>
        </header>

        <div class="container">
            <h1>Warehouse Full Details</h1>
            <?php
            $con = mysqli_connect("localhost:3307", "root", "", "warehouse");
            if (!$con) {
                die("Connection Error !!");
            } else {
                $query = "SELECT * FROM tblwarehousereg WHERE ID = $ID";
                $result = mysqli_query($con, $query);
                if ($result) {
                    $row = mysqli_fetch_assoc($result);

                    $ownerQuery = "SELECT FNAME FROM tblowner WHERE ID = " . $row["OwnerID"];
                    $ownerResult = mysqli_query($con, $ownerQuery);
                    $ownerName = mysqli_fetch_assoc($ownerResult)['FNAME'];

                    echo "<h2>Warehouse Images</h2>";
                    echo "<div class='gallery'>";
                    for ($i = 1; $i <= 3; $i++) {
                        $imageColumn = "image" . $i;
                        if (!empty($row[$imageColumn])) {
                            echo "<div><img src='images/" . $row[$imageColumn] . "' alt='Warehouse Image'></div>";
                        }
                    }
                    echo "</div>";
                    
                    echo "<table class='details-table'>";
                    echo "<tr><th>OWNER NAME</th><td>" . $ownerName . "</td></tr>";
                    echo "<tr><th>EMAIL</th><td>" . $row["Email"] . "</td></tr>";
                    echo "<tr><th>WAREHOUSE NAME</th><td>" . $row["WarehouseName"] . "</td></tr>";
                    echo "<tr><th>TYPE</th><td>" . $row["Type"] . "</td></tr>";
                    echo "<tr><th>REGISTRATION NUMBER</th><td>" . $row["RegistrationNumber"] . "</td></tr>";
                    echo "<tr><th>ADDRESS</th><td>" . $row["Address"] . "</td></tr>";
                    echo "<tr><th>GST Number</th><td>" . $row["GSTNumber"] . "</td></tr>";
                    echo "<tr><th>RENT</th><td>" . $row["RENT"] . "</td></tr>";
                    echo "<tr><th>SIZE</th><td>" . $row["SIZE"] . "</td></tr>";
                    echo "<tr><th>WASHROOM</th><td>" . $row["Washroom"] . "</td></tr>";
                    echo "<tr><th>FIRE SAFETY</th><td>" . $row["FireSafety"] . "</td></tr>";
                    echo "<tr><th>PARKING</th><td>" . $row["Parking"] . "</td></tr>";
                    echo "<tr><th>STAFF</th><td>" . $row["Staff"] . "</td></tr>";
                    echo "<tr><th>WATER STORAGE</th><td>" . $row["WaterStorage"] . "</td></tr>";
                    echo "<tr><th>WASTE DISPOSAL</th><td>" . $row["WasteDisposal"] . "</td></tr>";
                    echo "<tr><th>BOOKING</th><td><a href='BookingCustomer.php?warehouseid=" . $row["ID"] . "&ownerid=" . $row["OwnerID"] . "'>BOOK</a></td></tr>";

                    echo "</table>";
                    
                } else {
                    echo "Error retrieving data.";
                }
            }
            ?>
        </div>

    </body>

</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Warehouse Data</title>
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
                background-color: #1e88e5;
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
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
                background-color: #ffffff;
            }
            table, th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: #0d47a1;
                color: white;
            }
            td img {
                display: block;
                margin: 0 auto;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
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

        <!-- Header section similar to the provided screenshot -->
        <header>
            <nav>
                <div>
                    <a href="#" class="brand-logo" style="font-size: 22px; font-weight: bold;">Store Smart</a>
                </div>
                <div>
                    <a href="#">Home</a>
                    <a href="#">Warehouses</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                    <a href="LogoutWarehouse.php" class="logout">Logout</a>
                </div>
            </nav>
        </header>

        <div class="container">
            <h1>Warehouse Data for Gandhinagar</h1>
            <?php
            $con = mysqli_connect("localhost:3307", "root", "", "warehouse");
            if (!$con) {
                die("Connection Error !!");
            } else {

                $gandhinagar = "SELECT * FROM tblwarehousereg WHERE CityID = 15 AND Verification='APPROVE' AND Availability='AVAILABLE'";
                $q_gandhinagar = mysqli_query($con, $gandhinagar);
                if ($q_gandhinagar) {
                    echo "<table border=1>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>OWNER NAME</th>";
                    echo "<th>EMAIL</th>";
                    echo "<th>WAREHOUSE NAME</th>";
                    echo "<th>TYPE</th>";
                    echo "<th>REGISTRATION NUMBER</th>";
                    echo "<th>ADDRESS</th>";
                    //echo "<th>CITY ID</th>";
                    echo "<th>GSTNumber</th>";
                    echo "<th>Images</th>";
                    echo "<th>RENT</th>";
                    echo "<th>SIZE</th>";
                    echo "<th>WASHROOM</th>";
                    echo "<th>Fire Safety</th>";
                    echo "<th>Parking</th>";
                    echo "<th>Staff</th>";
                    echo "<th>Water Storage</th>";
                    echo "<th>Waste Disposal</th>";
                    echo "<th>View</th>";
                    echo "</tr>";

                    while ($r = mysqli_fetch_assoc($q_gandhinagar)) {
                        $Owner = "select * from tblowner where ID=" . $r["OwnerID"] . "";
                        $q1 = mysqli_query($con, $Owner);
                        $o1 = mysqli_fetch_assoc($q1)['FNAME'];
                        echo '<tr>';
                        echo '<td>' . $r["ID"] . '</td>';
                        echo '<td>' . $o1 . '</td>';
                        echo '<td>' . $r["Email"] . '</td>';
                        echo '<td>' . $r["WarehouseName"] . '</td>';
                        echo '<td>' . $r["Type"] . '</td>';
                        echo '<td>' . $r["RegistrationNumber"] . '</td>';
                        echo '<td>' . $r["Address"] . '</td>';
                        //echo '<td>' . $r["CityID"] . '</td>';
                        echo '<td>' . $r["GSTNumber"] . '</td>';
                        echo '<td>
                    <img src="images/' . $r["image1"] . '" width="100" height="100" alt="Warehouse Image 1">
                    </td>';
                        echo '<td>' . $r["RENT"] . '</td>';
                        echo '<td>' . $r["SIZE"] . '</td>';
                        echo '<td>' . $r["Washroom"] . '</td>';
                        echo '<td>' . $r["FireSafety"] . '</td>';
                        echo '<td>' . $r["Parking"] . '</td>';
                        echo '<td>' . $r["Staff"] . '</td>';
                        echo '<td>' . $r["WaterStorage"] . '</td>';
                        echo '<td>' . $r["WasteDisposal"] . '</td>';
                        echo '<td><a href="BookingCustomer.php?warehouseid='.$r["ID"].'&ownerid='.$r["OwnerID"].'">SHOW</a></td>';
                        echo '</tr>';
                    }

                    echo "</table>";
                } else {
                    echo "Error retrieving data.";
                }
            }
            ?>

        </div>
    </body>
    <html>
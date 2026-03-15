<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Warehouse Data</title>
        <style>
            /* General body styling */
            body {
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 0;
           
            }

            /* Header styles */
            header {
                background-color: #0d47a1;
                color: white;
                padding: 15px 0;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            header nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
                
            }

            header nav a {
                color: white;
                margin-left: 20px;
                text-decoration: none;
                font-size: 18px;
                transition: color 0.3s;
            }

            header nav a:hover {
                color: #90caf9;
            }

            header nav a.logout {
                padding: 10px 20px;
                background-color: #1e88e5;
                border-radius: 5px;
                text-transform: uppercase;
                font-weight: bold;
            }

            /* Main container */
            .container {
                padding: 20px;
                
                
                background-color: #fff;
                border-radius: 10px;
            }

            h1 {
                color: #0d47a1;
                text-align: center;
                margin-bottom: 20px;
            }

            /* Table styles */
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px 0;
                background-color: #ffffff;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            }

            th, td {
                border: 1px solid #dddddd;
                text-align: center;
                padding: 5px;
                vertical-align: middle;
                font-size: 16px;
            }

            th {
                background-color: #0d47a1;
                color: white;
                font-weight: bold;
                text-transform: uppercase;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            tr:hover {
                background-color: #e0f7fa;
                cursor: pointer;
            }

            td img {
                display: block;
                margin: 0 auto;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            td {
                color: #333;
                font-size: 15px;
            }

            /* For responsiveness */
            @media screen and (max-width: 1024px) {
                .container {
                    padding: 15px;
                }

                table {
                    font-size: 14px;
                }
            }

            @media screen and (max-width: 768px) {
                header nav {
                    flex-direction: column;
                    text-align: center;
                }

                header nav a {
                    margin: 5px 0;
                }

                .container {
                    margin: 10px;
                }

                table {
                    font-size: 10px;
                }

                td img {
                    width: 80px;
                    height: 80px;
                }
            }

            @media screen and (max-width: 480px) {
                table, th, td {
                    font-size: 10px;
                    padding: 8px;
                }

                td img {
                    width: 60px;
                    height: 60px;
                }

                .container {
                    padding: 10px;
                    margin: 5px;
                }

                header nav a {
                    font-size: 14px;
                }
            }
        </style>
    </head>
    <body>
        <!-- Header section -->
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
                    <a href="Login.php" class="logout">Logout</a>
                </div>
            </nav>
        </header>

        <!-- Main container -->
        <div class="container">
            <h1>Warehouse Data</h1>
            <?php
            $con = mysqli_connect("localhost:3307", "root", "", "warehouse");
            if (!$con) {
                die("Connection Error !!");
            }
            $Email = $_SESSION['ouser'];
            $OID = "SELECT ID FROM tblowner WHERE EMAIL='$Email'";
            $o1 = mysqli_query($con, $OID);
            $EID = mysqli_fetch_assoc($o1)['ID'];

            $TWarehouse = "SELECT * FROM tblwarehousereg where OwnerID=$EID";
            $q_Total = mysqli_query($con, $TWarehouse);
            if ($q_Total) {
                echo "<table>";
                echo "<tr>";
                echo "<th>INDEX</th>";
                echo "<th>WAREHOUSE NAME</th>";
                echo "<th>TYPE</th>";
                echo "<th>REG. NUMBER</th>";
                echo "<th>ADDRESS</th>";
                echo "<th>CITY</th>";
                echo "<th>Images</th>";
                echo "<th>RENT</th>";
                echo "<th>SIZE</th>";
                echo "<th>WASHROOM</th>";
                echo "<th>Fire Safety</th>";
                echo "<th>Parking</th>";
                echo "<th>Staff</th>";
                echo "<th>Water Storage</th>";
                echo "<th>Waste Disposal</th>";
                echo "<th>ACTION</th>";
                echo "</tr>";
                $i = 1;
                while ($r = mysqli_fetch_assoc($q_Total)) {
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    $i++;
                    echo '<td>' . $r["WarehouseName"] . '</td>';
                    echo '<td>' . $r["Type"] . '</td>';
                    echo '<td>' . $r["RegistrationNumber"] . '</td>';
                    echo '<td>' . $r["Address"] . '</td>';
                    $c1 = "SELECT Name FROM tblCity WHERE ID=" . $r["CityID"];
                    $cq = mysqli_query($con, $c1);
                    $City = mysqli_fetch_assoc($cq)['Name'];
                    echo '<td>' . $City . '</td>';
                    echo '<td><img src="images/' . $r["image1"] . '" width="100" height="100" alt="Warehouse Image 1"></td>';
                    echo '<td>' . $r["RENT"] . '</td>';
                    echo '<td>' . $r["SIZE"] . '</td>';
                    echo '<td>' . $r["Washroom"] . '</td>';
                    echo '<td>' . $r["FireSafety"] . '</td>';
                    echo '<td>' . $r["Parking"] . '</td>';
                    echo '<td>' . $r["Staff"] . '</td>';
                    echo '<td>' . $r["WaterStorage"] . '</td>';
                    echo '<td>' . $r["WasteDisposal"] . '</td>';
                    echo '<td><a href="UpdateWarehouse.php?id='.$r['ID'].'">UPDATE</a></td>';
                    echo '</tr>';
                }
                echo "</table>";
            }
            ?>
        </div>
    </body>
</html>

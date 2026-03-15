<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Warehouse Data</title>

        <!-- Internal CSS for styling -->
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            .container {
                width: 90%;
                margin: 20px auto;
                /*background: white;*/
                padding: 20px;
                border-radius: 8px;
                /*box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);*/
            }

            h1 {
                text-align: right;
                color: #333;
                margin-bottom: 20px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            table, th, td {
                border: 1px solid #ccc;
                text-align: center;
                padding: 10px;
            }

            th {
                background-color: #333;
                color: white;
            }

            td {
                background-color: #f9f9f9;
            }

            td img {
                border-radius: 8px;
                object-fit: cover;
                max-width: 100px;
                height: 100px;
            }

            a {
                color: #3498db;
                text-decoration: none;
                font-weight: bold;
            }

            a:hover {
                text-decoration: underline;
            }

            
        </style>
    </head> 
    <body>

        <div class="container">
            <h1>Warehouse Data</h1>
            <?php
            session_start();
            
            $con = mysqli_connect("localhost:3307", "root", "", "warehouse");
            
            if (!$con) {
                die("Connection Error !!");
            } else {
                $TWarehouse = "SELECT * FROM tblwarehousereg";
                $q_Total = mysqli_query($con, $TWarehouse);
             
                if ($q_Total) {
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>ID</th>";
                    echo "<th>OWNER NAME</th>";
                    echo "<th>EMAIL</th>";
                    echo "<th>WAREHOUSE NAME</th>";
                    echo "<th>TYPE</th>";
                    echo "<th>REGISTRATION NUMBER</th>";
                    echo "<th>ADDRESS</th>";
                    echo "<th>CITY ID</th>";
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

                    while ($r = mysqli_fetch_assoc($q_Total)) {
                        $Owner = "SELECT * FROM tblowner WHERE ID=" . $r["OwnerID"];
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
                        echo '<td>' . $r["CityID"] . '</td>';
                        echo '<td>' . $r["GSTNumber"] . '</td>';
                        echo '<td><img src="images/' . $r["image1"] . '" alt="Warehouse Image"></td>';
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
                }
            }
            ?>
        </div>
    </body>
</html>

<!DOCTYPE html>
<?php
$ID = $_GET['id'];
?>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #ffffff;
        }

        table,
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
        <h1>Warehouse Data for City</h1>
        <?php
        $con = mysqli_connect("localhost:3307", "root", "", "warehouse");
        if (!$con) {
            die("Connection Error !!");
        } else {
            $query = "SELECT * FROM tblwarehousereg WHERE CityID = $ID AND Verification = 'APPROVE' AND Availability = 'AVAILABLE'";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo "<table>";
                echo "<tr>";
                echo "<th>INDEX</th>";
                echo "<th>OWNER NAME</th>";
                echo "<th>WAREHOUSE NAME</th>";
                echo "<th>IMAGE</th>";
                echo "<th>SHOW MORE</th>";
                echo "</tr>";
                $i=1;
                while ($row = mysqli_fetch_assoc($result)) {

                    $ownerQuery = "SELECT FNAME FROM tblowner WHERE ID = " . $row["OwnerID"];
                    $ownerResult = mysqli_query($con, $ownerQuery);
                    $ownerName = mysqli_fetch_assoc($ownerResult)['FNAME'];

                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    $i++;
                    echo '<td>' . $ownerName . '</td>';
                    echo '<td>' . $row["WarehouseName"] . '</td>';
                    echo '<td><img src="images/' . $row["image1"] . '" width="100" height="100" alt="Warehouse Image"></td>';
                    echo '<td><a href="WarehouseDetails.php?id=' . $row["ID"] . '">Show More</a></td>';
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

</html>

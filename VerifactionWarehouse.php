<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Warehouse Verification Requests</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            h1 {
                text-align: center;
                color: white;
                margin-top: 30px;
                font-size: 2.5em;
                padding: 15px 0;
                background: linear-gradient(to right, #007bff, #00c6ff);
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                width: 80%;
                margin: 30px auto;
            }


            .data-table {
                width: 80%;
                margin: 30px auto;
                border-collapse: collapse;
                background-color: #fff;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }

            .data-table th, .data-table td {
                text-align: left;
                padding: 12px;
                font-size: 1em;
                border: 1px solid #ddd;
            }

            .data-table th {
                background-color: #007bff;
                text-transform: uppercase;
                color: white;
            }

            .data-table tr:hover {
                background-color: #f9f9f9;
            }

            .data-table td img {
                width: 100px;
                height: 100px;
                object-fit: cover;
            }

            table.form-table {
                width: 50%;
                margin: 30px auto;
                background-color: #fff;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                padding: 20px;
                border-collapse: collapse;
            }

            table.form-table th, table.form-table td {
                padding: 15px;
                font-size: 1em;
            }

            label {
                font-weight: bold;
                color: #333;
            }

            select {
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 1em;
                margin-bottom: 15px;
            }

            button {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 10px 20px;
                font-size: 1em;
                cursor: pointer;
                border-radius: 4px;
                width: 100%;
            }

            button:hover {
                background-color: grey;
            }

            /* Responsive Design */
            @media screen and (max-width: 600px) {
                .data-table, table.form-table {
                    width: 100%;
                    margin: 20px;
                }
            }
        </style>
    </head>
    <body>
        <h1>Warehouse Verification Requests</h1>
        <?php
        $con = mysqli_connect("localhost:3307", "root", "", "warehouse");

        if (!$con) {
            die("Error in connection: " . mysqli_connect_error());
        }
        $vi = "SELECT ID,OwnerID, Email, WarehouseName, Type, RegistrationNumber, Address, CityID, GSTNumber, NOCDocument, image1, image2, image3, RENT, SIZE, Verification FROM tblwarehousereg WHERE Verification='PENDING'";
        $v = mysqli_query($con, $vi);
        echo "<table class='data-table'>";
        echo "<tr><th>INDEX</th><th>Owner</th><th>Email</th><th>WarehouseName</th><th>Type</th><th>REG No.</th><th>NOC</th><th>image1</th><th>image2</th><th>image3</th><th>RENT</th><th>SIZE</th><th>VIEW</th></tr>";
        $i = 1;
        while ($row = mysqli_fetch_assoc($v)) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            $i++;
            $Owner = "SELECT FNAME FROM tblowner WHERE ID=" . $row['OwnerID'];
            $q1 = mysqli_query($con, $Owner);
            if ($q1 && mysqli_num_rows($q1) > 0) {
                $o1 = mysqli_fetch_assoc($q1)['FNAME'];
                echo "<td>$o1</td>";
            } else {
                echo "<td>Unknown Owner</td>";
            }
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['WarehouseName'] . "</td>";
            echo "<td>" . $row['Type'] . "</td>";
            echo "<td>" . $row['RegistrationNumber'] . "</td>";
            echo '<td><img src="NocDoc/' . $row['NOCDocument'] . '" alt="NOC Document"></td>';
            echo '<td><img src="images/' . $row["image1"] . '" alt="Warehouse Image 1"></td>';
            echo '<td><img src="images/' . $row["image2"] . '" alt="Warehouse Image 2"></td>';
            echo '<td><img src="images/' . $row["image3"] . '" alt="Warehouse Image 3"></td>';
            echo "<td>" . $row['RENT'] . "</td>";
            echo "<td>" . $row['SIZE'] . "</td>";
            echo "<td><a href='ShowVerifactionRequest.php?updateid=" . $row['ID'] . "'>VIEW</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        ?>
    </body>
</html>

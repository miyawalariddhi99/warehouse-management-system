<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GRANT REQUEST</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            table.form-table {
                background-color: #fff;
                margin: 30px auto;
                padding: 20px;
                width: 50%;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }

            h1 {
                text-align: center;
                color: blue;
                margin-top: 30px;
            }

            table.form-table th, table.form-table td {
                padding: 15px;
                text-align: left;
                font-size: 1em;
            }

            input[type="text"] {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 1em;
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

            label {
                font-weight: bold;
                color: #333;
            }

            /* Table for displaying booking requests */
            table.data-table {
                width: 80%;
                margin: 30px auto;
                border-collapse: collapse;
                background-color: #fff;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }

            table.data-table th, table.data-table td {
                padding: 12px;
                text-align: left;
                font-size: 1em;
                border: 1px solid #ddd;
            }

            table.data-table th {
                background-color: #007bff;
                ;
                text-transform: uppercase;
                color: white;
            }

            table.data-table tr:hover {
                background-color: #f9f9f9;
            }

            table.data-table a {
                color: #007BFF;
                text-decoration: none;
            }

            table.data-table a:hover {
                text-decoration: underline;
            }

            /* Responsive Design */
            @media screen and (max-width: 600px) {
                table.form-table, table.data-table {
                    width: 100%;
                    margin: 20px;
                }
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <h1>WAREHOUSE BOOKING OWNER</h1>
<!--            <table class="form-table" align="center">
                <tr>
                    <th>
                        <label>Enter Owner ID:</label>
                    </th>
                    <td>
                        <input type="text" name="txtOID" required>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <button type="submit" name="btnShow" value="show">Show Request</button>
                    </th>
                </tr>
            </table>-->
            <?php
            
        
            $con = mysqli_connect("localhost:3307", "root", "", "warehouse");
            if (!$con) {
                die("Error in connection: " . mysqli_connect_error());
            }
            $Email = $_SESSION['ouser'];
            $OID = "SELECT ID FROM tblowner WHERE EMAIL='$Email'";
            $o1 = mysqli_query($con, $OID);
            $EID = mysqli_fetch_assoc($o1)['ID'];

            $vi = "SELECT ID, CustomerID, StartDate, EndDate, Status FROM tblbooking WHERE OwnerID=$EID";
            $v = mysqli_query($con, $vi);

            echo "<table class='data-table'>";
            echo "<tr><th>BOOKING ID</th><th>CUSTOMER NAME</th><th>START DATE</th><th>END DATE</th><th>STATUS</th><th>ACTION</th></tr>";

            while ($r = mysqli_fetch_assoc($v)) {
                $Customer = "select * from tblcustomer where ID=" . $r["CustomerID"] . "";
                $q1 = mysqli_query($con, $Customer);
                $o1 = mysqli_fetch_assoc($q1)['FNAME'];
                echo "<tr>";
                echo "<td>" . $r['ID'] . "</td>";
                echo "<td>" . $o1 . "</td>";
                echo "<td>" . $r['StartDate'] . "</td>";
                echo "<td>" . $r['EndDate'] . "</td>";
                echo "<td>" . $r['Status'] . "</td>";
                echo "<td><a href='ShowRequest.php?updateid=" . $r['ID'] . "'>VIEW</a></td>";
                echo "</tr>";
            }

            echo "</table>";
            mysqli_close($con);
            ?>
        </form>
    </body>
</html>

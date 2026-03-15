<!DOCTYPE html>
<?php
$ID = $_REQUEST['updateid'];
$con = mysqli_connect("localhost:3307", "root", "", "warehouse");
if (!$con) {
    die("Error in connection: " . mysqli_connect_error());
}
$vi = "SELECT CustomerID,WareHouseID, StartDate, EndDate, Status FROM tblbooking WHERE ID=$ID";
$v = mysqli_query($con, $vi);

echo "<table class='data-table'>";
echo "<tr><th>CUSTOMER ID</th><th>START DATE</th><th>END DATE</th><th>STATUS</th></tr>";
while ($r = mysqli_fetch_assoc($v)) {
    echo "<tr>";
    $Customer = "select * from tblcustomer where ID=" . $r["CustomerID"] . "";
    $q1 = mysqli_query($con, $Customer);
    $o1 = mysqli_fetch_assoc($q1)['FNAME'];
    echo "<td>".$o1."</td>";
    $WID=$r['WareHouseID'];
    echo "<td>" . $r['StartDate'] . "</td>";
    echo "<td>" . $r['EndDate'] . "</td>";
    echo "<td>" . $r['Status'] . "</td>";
    echo "</tr>";
}
echo "</table>";

if (isset($_POST['btnSubmit'])) {
    $Status = $_POST['sStatus'];
    $up = "UPDATE tblbooking SET Status='$Status' WHERE ID=$ID";
    $u = mysqli_query($con, $up);

    if (!$u) {
        echo "<script>alert('Error updating booking status: " . mysqli_error($con) . "');</script>";
    } else {
        if ($Status === "APPROVE" && !empty($WID)) {
            $up1 = "UPDATE tblwarehousereg SET Availability='UNAVAILABLE' WHERE ID=$WID";
            $u1 = mysqli_query($con, $up1);
            if (!$u1) {
                echo "<script>alert('Error updating warehouse availability: " . mysqli_error($con) . "');</script>";
            }
        }
        echo "<script>alert('Status updated successfully');</script>";
    }
}


if (isset($_POST['btnBack'])) {
    header("Location: BookingOwner.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Show Request</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            h1 {
                text-align: center;
                color: #333;
                margin-top: 30px;
                font-size: 2.5em;
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
                background-color: #007bff;;
                text-transform: uppercase;
                color: white;
            }

            .data-table tr:hover {
                background-color: #f9f9f9;
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
        <form method="POST">
            <table class="form-table" align="center">
                <tr>
                    <th>
                        <label>CHANGE STATUS:</label>
                    </th>
                    <td>
                        <select name="sStatus">
                            <option value="">--select--</option>
                            <option value="APPROVE">APPROVE</option>
                            <option value="REJECT">REJECT</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>SUBMIT:</th>
                    <td>
                        <button type="submit" name="btnSubmit">SUBMIT</button>
                    </td>
                </tr>
                <tr>
                    <th>BACK:</th>
                    <td>
                        <button type="submit" name="btnBack">BACK</button>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

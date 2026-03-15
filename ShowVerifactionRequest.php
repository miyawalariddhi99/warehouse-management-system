<!DOCTYPE html>
<?php
$ID = $_REQUEST['updateid'];

$con = mysqli_connect("localhost:3307", "root", "", "warehouse");
if (!$con) {
    die("Error in connection: " . mysqli_connect_error());
}
$vi = "SELECT OwnerID, WarehouseName, Verification FROM tblwarehousereg WHERE ID=$ID";
$v = mysqli_query($con, $vi);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Warehouse Verification</title>
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
        <h1>Warehouse Verification</h1>
        <table class="data-table">
            <tr>
                <th>OwnerID</th>
                <th>WarehouseName</th>
                <th>OWNER NAME</th>
                <th>Verification</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($v)) {
                echo "<tr>";
                echo "<td>" . $row['OwnerID'] . "</td>";
                echo "<td>" . $row['WarehouseName'] . "</td>";
                $Owner = "SELECT FNAME FROM tblowner WHERE ID=" . $row['OwnerID'];
                $q1 = mysqli_query($con, $Owner);
                if ($q1 && mysqli_num_rows($q1) > 0) {
                    $o1 = mysqli_fetch_assoc($q1)['FNAME'];
                    echo "<td>$o1</td>";
                } else {
                    echo "<td>Unknown Owner</td>";
                }
                echo "<td>" . $row['Verification'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <form method="POST">
            <table class="form-table">
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

        <?php
        if (isset($_POST['btnSubmit'])) {
            $Status = $_POST['sStatus'];
            if (!empty($Status)) {
                $up = "UPDATE tblwarehousereg SET Verification='$Status' WHERE ID=$ID";
                $u = mysqli_query($con, $up);
                if ($u) {
                    echo "<script>alert('Status updated successfully');</script>";
                } else {
                    echo "<script>alert('Error updating status');</script>";
                }
            } else {
                echo "<script>alert('Please select a status');</script>";
            }
        }
        if (isset($_POST['btnBack'])) {
            header("Location: VerificationWarehouse.php");
        }
        ?>
    </body>
</html>

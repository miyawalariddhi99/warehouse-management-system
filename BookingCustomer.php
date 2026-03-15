<!DOCTYPE html>
<?php
session_start();
$WID = $_REQUEST["warehouseid"];
$OID = $_REQUEST["ownerid"];
$Email=$_SESSION['cuser'];
$con = mysqli_connect("localhost:3307", "root", "", "warehouse");
if (!$con) {
    die("Error in connection: " . mysqli_connect_error());
}

$CID="SELECT ID FROM tblcustomer WHERE EMAIL='$Email'";
$c1= mysqli_query($con, $CID);
$EID=mysqli_fetch_assoc($c1)['ID'];

$Owner = "SELECT FNAME FROM tblowner WHERE ID=" . $OID;
$q1 = mysqli_query($con, $Owner);
if ($q1 && mysqli_num_rows($q1) > 0) {
    $o1 = mysqli_fetch_assoc($q1)['FNAME'];
}
$Ware = "SELECT WarehouseName FROM tblwarehousereg WHERE ID=" . $WID;
$q2 = mysqli_query($con, $Ware);
if ($q2 && mysqli_num_rows($q2) > 0) {
    $w1 = mysqli_fetch_assoc($q2)['WarehouseName'];
}

$currentDate = date('Y-m-d');
if (isset($_POST['btnShow'])) {
    header("Location: ShowRequestCustomer.php");
}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Warehouse Booking</title>
        <style>
            body {
                font-family: Poppins, sans-serif;
                background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('9950253.jpg');
                background-position: center;
                background-size: cover;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            h2 {
                text-align: center;
                margin-bottom: 5px;
                color: blue;
            }
            h2::after {
                content: '';
                display: block;
                width: 120px;
                height: 4px;
                background-color: #007bff;
                margin: 10px auto 0;
                border-radius: 5px;
            }

            form {
                background-color: white;
                padding: 100px;
                border-radius: 8px;
                box-shadow: -2px 2px 15px rgba(0, 0, 0, 0.5);
                max-width: 400px;
                width: 200%;
            }


            th, td {
                padding: 10px;
                text-align: left;
                font-size: 1em;
            }


            input[type="text"], input[type="date"], textarea {

                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 10px;
                font-size: 16px;
            }

            textarea {
                resize: vertical;

            }


            textarea {
                resize: none;
                height: 80px;
            }

            button {
                background-color:blue;
                color: white;
                border: none;
                padding: 12px;
                font-size: 1em;
                cursor: pointer;
                border-radius: 10px;
                width: 100%;
            }

            button:hover {
                background-color: grey;
            }

            label {
                font-weight: bold;
                color: black;
            }
            th, td {
                text-align: left;
                padding: 12px;
                font-size: 1em;
                border: 1px solid #ddd;
            }

            th {
                background-color:white;
                font-weight: bold;
                text-transform: uppercase;

            }
            @media screen and (max-width: 600px) {
                form {
                    width: 90%;
                    margin: 20px;
                    padding: 15px;
                }


            }
        </style>
        <script>
            function validateForm(event) {
                // Get the button that was clicked
                var clickedButton = event.submitter.name;

                // Apply required fields only if btnApply was clicked
                if (clickedButton === "btnApply") {
                    document.getElementById("txtWID").setAttribute("required", "");
                    document.getElementById("txtCID").setAttribute("required", "");
                    document.getElementById("txtOID").setAttribute("required", "");
                    document.getElementById("DateStart").setAttribute("required", "");
                    document.getElementById("EndStart").setAttribute("required", "");
                    document.getElementById("txtDesc").setAttribute("required", "");
                } else {
                    // Remove required attribute for all fields if btnShow is clicked
                    document.getElementById("txtWID").removeAttribute("required");
                    document.getElementById("txtCID").removeAttribute("required");
                    document.getElementById("txtOID").removeAttribute("required");
                    document.getElementById("DateStart").removeAttribute("required");
                    document.getElementById("EndStart").removeAttribute("required");
                    document.getElementById("txtDesc").removeAttribute("required");
                }
            }
        </script>
    </head>
    <body>
        <form method="POST" onsubmit="validateForm(event)">
            <h2>BOOK WAREHOUSE</h2>
            <table>
                <tr>
                    <th>
                        <label for="txtWID">Warehouse Name:</label>
                    </th>
                    <td>
                        <input type="text" name="txtWID" id="txtWID" value="<?php echo "$w1"; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="txtCID">Customer ID:</label>
                    </th>
                    <td>
                        <input type="text" name="txtCID" id="txtCID" value="<?php echo "$EID"; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="txtOID">Owner Name:</label>
                    </th>
                    <td>
                        <input type="text" name="txtOID" id="txtOID" value="<?php echo "$o1"; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="DateStart">Enter Start Date:</label>
                    </th>
                    <td>
                        <input type="date" name="DateStart" id="DateStart" min="<?php echo $currentDate; ?>">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="EndStart">Enter End Date:</label>
                    </th>
                    <td>
                        <input type="date" name="EndStart" id="EndStart" min="<?php echo $currentDate; ?>">
                    </td>
                </tr>
                <tr>
                    <th>
                        <label for="txtDesc">Enter Description:</label>
                    </th>
                    <td>
                        <textarea name="txtDesc" id="txtDesc"></textarea>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <button type="submit" name="btnApply" value="apply">APPLY</button>
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <button type="submit" name="btnShow" value="show">SHOW</button>
                    </th>
                </tr>
            </table>

            <?php
            if (isset($_POST['btnApply'])) {
                $con = mysqli_connect("localhost:3307", "root", "", "warehouse");

                if (!$con) {
                    die("Error in connection: " . mysqli_connect_error());
                }

                $CID = $_POST['txtCID'];
                //$OID = $_POST['txtOID'];
                $StartDate = $_POST['DateStart'];
                $EndDate = $_POST['EndStart'];
                $Desc = $_POST['txtDesc'];

                $q = "INSERT INTO tblbooking (WareHouseID, CustomerID, OwnerID, StartDate, EndDate, Description, Status) VALUES ('$WID', '$CID', '$OID', '$StartDate', '$EndDate', '$Desc','PENDING')";
                $qu = mysqli_query($con, $q);

                if ($qu) {
                    echo "<script>alert('BOOKING REQUEST APPLIED');</script>";
                } else {
                    echo "<script>alert('Error in booking request');</script>";
                }

                mysqli_close($con);
            }
            ?>
            <script>
                function validateForm(event) {
                    // Get the button that was clicked
                    var clickedButton = event.submitter.name;

                    // Apply required fields only if btnApply was clicked
                    if (clickedButton === "btnApply") {
                        // Get input values
                        var startDate = document.getElementById("DateStart").value;
                        var endDate = document.getElementById("EndStart").value;

                        // Convert to date objects
                        var start = new Date(startDate);
                        var end = new Date(endDate);

                        // Check if EndStart is later than DateStart
                        if (end <= start) {
                            alert('End date must be later than Start date.');
                            event.preventDefault(); // Prevent form submission
                            return false;
                        }

                        // Apply required attribute to the fields
                        document.getElementById("txtWID").setAttribute("required", "");
                        document.getElementById("txtCID").setAttribute("required", "");
                        document.getElementById("txtOID").setAttribute("required", "");
                        document.getElementById("DateStart").setAttribute("required", "");
                        document.getElementById("EndStart").setAttribute("required", "");
                        document.getElementById("txtDesc").setAttribute("required", "");

                    } else {
                        // Remove required attribute for all fields if btnShow is clicked
                        document.getElementById("txtWID").removeAttribute("required");
                        document.getElementById("txtCID").removeAttribute("required");
                        document.getElementById("txtOID").removeAttribute("required");
                        document.getElementById("DateStart").removeAttribute("required");
                        document.getElementById("EndStart").removeAttribute("required");
                        document.getElementById("txtDesc").removeAttribute("required");
                    }
                }
            </script>
        </form>
    </body>
</html>
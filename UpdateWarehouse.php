<?php
$ID = $_REQUEST['id'];
$con = mysqli_connect("localhost:3307", "root", "", "warehouse");
if (!$con) {
    die("Connection Error !!");
}

$se = "select * from tblwarehousereg where ID=$ID";
$q = mysqli_query($con, $se);
$r = mysqli_fetch_assoc($q);

    $WarehouseName1 = $r['txtWarehouseName'];
    $Class = $r['sType'];
    $Address1 = $r['address'];
    $City1 = $r['city'];
    $Rent1 = $r['txtRent'];
    $Size1 = $r['txtSize'];
    $Washroom1 = $r['rbWashroom'];
    $FireSafety1 = $r['rbFireSafety'];
    $Parking1 = $r['rbParking'];
    $Staff1 = $r['rbStaff'];
    $WaterStorage1 = $r['rbWaterStorage'];
    $WasteDisposal1 = $r['rbWasteDisposal'];


if (isset($_POST['btnSubmit'])) {
    $WarehouseName = $_POST['txtWarehouseName'];
    $WType = $_POST['sType'];
    $Address = $_POST['address'];
    $City = $_POST['city'];
    $Rent = $_POST['txtRent'];
    $Size = $_POST['txtSize'];
    $Washroom = $_POST['rbWashroom'];
    $FireSafety = $_POST['rbFireSafety'];
    $Parking = $_POST['rbParking'];
    $Staff = $_POST['rbStaff'];
    $WaterStorage = $_POST['rbWaterStorage'];
    $WasteDisposal = $_POST['rbWasteDisposal'];

    $up = "update tblwarehousereg set WarehouseName='$WarehouseName',Type='$WType',Address='$Address',City=$City,RENT=$Rent,SIZE=$Size,Washroom='$Washroom',FireSafety='$FireSafety',Parking='$Parking',Staff='$Staff',WaterSorage='$WaterStorage',WasteDisposal='$WasteDisposal' where ID=$ID";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Details</title>
        <style>
            /* General styling */
            body {
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f9;
            }

            h1 {
                text-align: center;
                color: #0d47a1;
                margin-top: 20px;
            }

            form {
                max-width: 800px;
                margin: 20px auto;
                background-color: #ffffff;
                padding: 20px 30px;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            label {
                display: block;
                font-weight: bold;
                color: #333;
                margin: 10px 0 5px;
            }

            input[type="text"],
            textarea,
            select {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }

            textarea {
                resize: none;
            }

            button[type="submit"] {
                background-color: #0d47a1;
                color: white;
                padding: 10px 20px;
                font-size: 16px;
                font-weight: bold;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
                display: block;
                width: 100%;
            }

            button[type="submit"]:hover {
                background-color: #1e88e5;
            }

            .select-container {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .info-btn {
                background-color: #1e88e5;
                color: white;
                border: none;
                border-radius: 5px;
                padding: 10px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .info-btn:hover {
                background-color: #90caf9;
            }

            .radio-group {
                display: table;
                width: 100%;
                margin-bottom: 20px;
            }
            .radio-group-title {
                display: table-cell;
                width: 60%;
                padding-right: 20px;
                font-weight: bold;
                font-size: 16px;
                color: #333;
                vertical-align: middle;
            }

            .radio-group input[type="radio"] {
                margin-right: 10px;
                font-size: 16px;
                font-weight: bold;
            }

            .radio-group label {
                display: table-cell;
                width: 20%;
                font-size: 16px;
                vertical-align: middle;
                padding-left: 5px;
                cursor: pointer;
            }

            .radio-group input[type="radio"] + label {
                padding-right: 20px;
                display: inline-block;
                vertical-align: middle;
            }

            /* Additional Styling for Radio Buttons */
            input[type="radio"] {
                appearance: none;
                width: 18px;
                height: 18px;
                border-radius: 50%;
                border: 2px solid #007bff;
                position: relative;
                background-color: white;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            input[type="radio"]:checked {
                background-color: #007bff;
                border-color: #007bff;
            }

            input[type="radio"]:checked + label::after {
                content: '';
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                width: 10px;
                height: 10px;
                background-color: white;
                border-radius: 50%;
            }

            /* Responsiveness */
            @media screen and (max-width: 768px) {
                form {
                    padding: 15px 20px;
                }

                button[type="submit"] {
                    font-size: 14px;
                }

                input[type="text"],
                textarea,
                select {
                    font-size: 14px;
                }
            }

            @media screen and (max-width: 480px) {
                form {
                    padding: 10px 15px;
                }

                label,
                .radio-group-title {
                    font-size: 14px;
                }

                button[type="submit"] {
                    font-size: 12px;
                }
            }
        </style>
    </head>
    <body>
        <h1>Update Warehouse Details</h1>
        <form method="post">
            <label for="warehouseName">Warehouse Name:</label>
            <input type="text" id="warehouseName" name="txtWarehouseName" value="<?php echo $WarehouseName1?>"required>

            <label for="warehouseType">Warehouse Type:</label>
            <div class="select-container">
                <select name="sType" id="warehouseType" required>
                    <option value="General" <?php if ($Class == 'General') {echo 'selected'; }?>>General Warehouse</option>
                    <option value="Cold Storage" <?php if ($Class == 'Cold Storage') {echo 'selected'; }?>>Cold Storage Warehouse</option>
                    <option value="Bonded" <?php if ($Class == 'Bonded') {echo 'selected'; }?>>Bonded Warehouse</option>
                    <option value="E-commerce" <?php if ($Class == 'E-commerce') {echo 'selected'; }?>>E-commerce Warehouse</option>
                    <option value="Agricultural" <?php if ($Class == 'Agricultural') {echo 'selected'; }?>>Agricultural Warehouse</option>
                    <option value="Climate-Controlled"  <?php if ($Class == 'Climate-Controlled') {echo 'selected'; }?>>Climate-Controlled Warehouse</option>
                    <option value="Industrial"  <?php if ($Class == 'Industrial') {echo 'selected'; }?>>Industrial Warehouse</option>
                    <option value="Hazardous Material"  <?php if ($Class == 'Hazardous Material') {echo 'selected'; }?>>Hazardous Material Warehouse</option>
                    <option value="Public"  <?php if ($Class == 'Public') {echo 'selected'; }?>>Public Warehouse</option>
                    <option value="Private"  <?php if ($Class == 'Private') {echo 'selected'; }?>>Private Warehouse</option>
                </select>
                <button type="button" class="info-btn" onclick="showPopup()">Info</button>
            </div>

            <label for="address">Warehouse Address:</label>
            <textarea id="address" name="address" rows="3" required></textarea>

            <label for="city">City:</label>
            <select id="city" name="city" required>
                <?php
                $c = "select * from tblcity";
                $city = mysqli_query($con, $c);
                ?>
                <option value="" disabled selected>select City</option>
                <?php
                while ($r = mysqli_fetch_row($city)) {
                    echo "<option value = " . $r[0] . ">" . $r[1] . "</option>";
                }
                ?>
            </select>

            <label for="rent">RENT:</label>
            <input type="text" id="rent" name="txtRent" required>

            <label for="size">SIZE:</label>
            <input type="text" id="size" name="txtSize" required>

            <!-- warehouse features -->
            <h3>Select Warehouse Features (YES / NO)</h3>
            <?php
            $features = [
                "Washrooms" => "rbWashroom",
                "Fire Safety" => "rbFireSafety",
                "Parking" => "rbParking",
                "Management Staff" => "rbStaff",
                "Water Storage" => "rbWaterStorage",
                "Waste Disposal" => "rbWasteDisposal"
            ];

            foreach ($features as $label => $name) {
                echo '<div class="radio-group">
                        <span class="radio-group-title">' . $label . ':</span>
                        <input type="radio" id="' . $name . 'Yes" name="' . $name . '" value="YES" required>
                        <label for="' . $name . 'Yes">YES</label>
                        <input type="radio" id="' . $name . 'No" name="' . $name . '" value="NO" required>
                        <label for="' . $name . 'No">NO</label>
                    </div>';
            }
            ?>

            <button type="submit" name="btnSubmit">Update</button>
        </form>
    </body>
</html>

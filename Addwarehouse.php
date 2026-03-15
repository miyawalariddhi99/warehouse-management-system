<?php
if (isset($_POST['btnSubmit'])) {
    $con = mysqli_connect("localhost:3307", "root", "", "warehouse");
    $OwnerName = $_POST['OwnerName'];
    $Email = $_POST['OwnerEmail'];
    $WarehouseName = $_POST['txtWarehouseName'];
    $WType = $_POST['sType'];
    $RegNo = $_POST['txtRegNo'];
    $Address = $_POST['address'];
    $City = $_POST['city'];
    $GSTNo = $_POST['GSTNo'];
    $Rent = $_POST['txtRent'];
    $Size = $_POST['txtSize'];
    $Washroom = $_POST['rbWashroom'];
    $FireSafety = $_POST['rbFireSafety'];
    $Parking = $_POST['rbParking'];
    $Staff = $_POST['rbStaff'];
    $WaterStorage = $_POST['rbWaterStorage'];
    $WasteDisposal = $_POST['rbWasteDisposal'];

    $DocNoc = $_FILES["DocNoc"]["name"];
    $tempfile = $_FILES["DocNoc"]["tmp_name"];
    $folder = "NocDoc/" . $DocNoc;

    $image1 = $_FILES["Wimage1"]["name"];
    $tmp1 = $_FILES["Wimage1"]["tmp_name"];
    $folder1 = "images/" . $image1;

    $image2 = $_FILES["Wimage2"]["name"];
    $tmp2 = $_FILES["Wimage2"]["tmp_name"];
    $folder2 = "images/" . $image2;

    $image3 = $_FILES["Wimage3"]["name"];
    $tmp3 = $_FILES["Wimage3"]["tmp_name"];
    $folder3 = "images/" . $image3;
    
    $Emailquery = "SELECT * FROM tblowner WHERE EMAIL='$Email'";
    $qu1 = mysqli_query($con, $Emailquery);
 
    if (!$qu1) {
        echo "<script>alert('Email Not Found in our Records.. Please Check it !!');</script>";
    } else {
        if (empty($DocNoc) || empty($image1)) {
            echo "<script>alert('Please upload all required files');</script>";
        } else {
            $qu = "INSERT INTO tblwarehousereg (OwnerID,Email, WarehouseName,Type, RegistrationNumber, Address, CityID, GSTNumber, NOCDocument, image1, image2, image3, RENT, SIZE, Washroom, FireSafety, Parking, Staff, WaterStorage, WasteDisposal, Verification, Availability) 
                           VALUES ($OwnerName, '$Email', '$WarehouseName','$WType', '$RegNo', '$Address', $City, '$GSTNo', '$DocNoc', '$image1', '$image2', '$image3', $Rent, $Size, '$Washroom', '$FireSafety', '$Parking', '$Staff', '$WaterStorage', '$WasteDisposal' ,'PENDING' ,'AVAILABLE')";
            $a = mysqli_query($con, $qu);

            if ($a) {
                move_uploaded_file($tempfile, $folder);
                move_uploaded_file($tmp1, $folder1);
                move_uploaded_file($tmp2, $folder2);
                move_uploaded_file($tmp3, $folder3);
                echo "<script>alert('Warehouse registered successfully');</script>";
            } else {
                echo "<script>alert('Error in registration');</script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Warehouse Registration Form</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                font-family: 'Arial', sans-serif;
                background-color: lightskyblue;
                background-position: center;
                background-size: cover;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .container {
                width: 100%;
                max-width: 700px;
                padding: 20px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                opacity: 0.95;
                transition: opacity 0.3s;
            }

            .container:hover {
                opacity: 1;
            }

            h2 {
                text-align: center;
                margin-bottom: 30px;
                font-size: 24px;
                color: blue;
            }

            h3 {
                text-align: center;
                margin-bottom: 30px;
                font-size: 20px;
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

            label {
                display: block;
                margin-bottom: 8px;
                font-size: 14px;
                font-weight: bold;
                color: #555;
            }

            input[type="text"],
            input[type="email"],
            input[type="file"],
            textarea,
            select {
                width: calc(100% - 50px);
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-bottom: 20px;
                font-size: 14px;
                color: black;
                transition: border-color 0.3s ease;
                display: inline-block;
                vertical-align: middle;
            }

            button {
                width: 100%;
                padding: 12px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            button:hover {
                background-color: #0056b3;
            }

            .row {
                display: flex;
                justify-content: space-between;
            }

            .col-lg-3 {
                flex: 1;
                max-width: 30%;
            }

            .col-lg-9 {
                flex: 2;
                max-width: 65%;
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

            .form-group {
                margin-bottom: 15px;
            }

            /* Popup Styles */
            .modal {
                display: none; /* Hidden by default */
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(0,0,0);
                background-color: rgba(0,0,0,0.4);
            }

            .modal-content {
                background-color: #fefefe;
                margin: 15% auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
                max-width: 600px;
                border-radius: 5px;
            }

            .close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: black;
                text-decoration: none;
                cursor: pointer;
            }

            /* Styles for Info Button */
            .info-btn {
                width: auto; /* Adjust width to fit content */
                padding: 15px 10px ; /* Smaller padding */
                font-size: 12px; /* Smaller font size */
                position: relative; /* Required for positioning */
                top: -10px; /* Slightly lift button to align */
                left: -1px; /* Adjust the left position */
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .info-btn:hover {
                background-color: #0056b3;
            }

            .select-container {
                display: flex;
                align-items: center; /* Aligns the button vertically with the select */
                margin-bottom: 20px; /* Space below this row */
            }

            .select-container select {
                flex: 1; /* Allows select to take remaining space */
                margin-right: 10px; /* Space between select and button */
            }
        </style>
    </head>
    <body>

        <div class="container">
            <h2>Warehouse Registration Form</h2>
            <form method="post" enctype="multipart/form-data">
                <label for="ownerName">Warehouse Owner Name:</label>
                <input type="text" id="OwnerName" name="OwnerName" required>
                
                <label for="email">Warehouse Owner Email ID:</label>
                <input type="email" id="email" name="OwnerEmail" required>

                <label for="warehouseName">Warehouse Name:</label>
                <input type="text" id="warehouseName" name="txtWarehouseName" required>

                <label for="warehouseType">Warehouse Type:</label>
                <div class="select-container">
                    <select name="sType" id="warehouseType" required>
                        <option value="General">General Warehouse</option>
                        <option value="Cold Storage">Cold Storage Warehouse</option>
                        <option value="Bonded">Bonded Warehouse</option>
                        <option value="E-commerce">E-commerce Warehouse</option>
                        <option value="Agricultural">Agricultural Warehouse</option>
                        <option value="Climate-Controlled">Climate-Controlled Warehouse</option>
                        <option value="Industrial">Industrial Warehouse</option>
                        <option value="Hazardous Material">Hazardous Material Warehouse</option>
                        <option value="Public">Public Warehouse</option>
                        <option value="Private">Private Warehouse</option>
                    </select>
                    <button type="button" class="info-btn" onclick="showPopup()">Info</button>
                </div>

                <label for="registrationNumber">Warehouse Registration Number:</label>
                <input type="text" id="registrationNumber" name="txtRegNo" required>

                <label for="address">Warehouse Address:</label>
                <textarea id="address" name="address" rows="3" required></textarea>

                <label for="city">City:</label>
                <select id="city" name="city" required>
                <?php
                    $con = mysqli_connect("localhost:3307", "root", "", "warehouse");
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
                <label for="DocNoc">NOC Document (PDF/DOC):</label>
                <input type="file" id="DocNoc" name="DocNoc" accept=".pdf,.doc,.docx" required>

                <label for="Wimage1">Warehouse Image 1 (JPG/PNG):</label>
                <input type="file" id="Wimage1" name="Wimage1" accept=".jpg,.jpeg,.png" required>

                <label for="Wimage2">Warehouse Image 2 (JPG/PNG):</label>
                <input type="file" id="Wimage2" name="Wimage2" accept=".jpg,.jpeg,.png">

                <label for="Wimage3">Warehouse Image 3 (JPG/PNG):</label>
                <input type="file" id="Wimage3" name="Wimage3" accept=".jpg,.jpeg,.png">

                <label for="rent">RENT:</label>
                <input type="text" id="rent" name="txtRent" required>

                <label for="size">SIZE:</label>
                <input type="text" id="size" name="txtSize" required>

                <label for="gstNumber">GST Number:</label>
                <input type="text" id="gstNumber" name="GSTNo" required>

                <!-- warehouse features-->
                <h3>Select Warehouse Features (YES / NO)</h3>
                <div class="radio-group">
                    <span class="radio-group-title">Washrooms:</span>
                    <input type="radio" id="WashroomYes" name="rbWashroom" value="YES" required>
                    <label for="WashroomYes">YES</label>

                    <input type="radio" id="WashroomNo" name="rbWashroom" value="NO" required>
                    <label for="WashroomNo">NO</label>
                </div>

                <div class="radio-group">
                    <span class="radio-group-title">Fire Safety:</span>
                    <input type="radio" id="FireSafetyYes" name="rbFireSafety" value="YES" required>
                    <label for="FireSafetyYes">YES</label>

                    <input type="radio" id="FireSafetyNo" name="rbFireSafety" value="NO" required>
                    <label for="FireSafetyNo">NO</label>
                </div>
                <div class="radio-group">
                    <span class="radio-group-title">Parking:</span>
                    <input type="radio" id="ParkingYes" name="rbParking" value="YES" required>
                    <label for="ParkingYes">YES</label>

                    <input type="radio" id="ParkingNo" name="rbParking" value="NO" required>
                    <label for="ParkingNo">NO</label>
                </div>

                <div class="radio-group">
                    <span class="radio-group-title">Management Staff:</span>
                    <input type="radio" id="StaffYes" name="rbStaff" value="YES" required>
                    <label for="StaffYes">YES</label>

                    <input type="radio" id="StaffNo" name="rbStaff" value="NO" required>
                    <label for="StaffNo">NO</label>
                </div>

                <div class="radio-group">
                    <span class="radio-group-title">Water Storage:</span>
                    <input type="radio" id="WaterStorageYes" name="rbWaterStorage" value="YES" required>
                    <label for="WaterStorageYes">YES</label>

                    <input type="radio" id="WaterStorageNo" name="rbWaterStorage" value="NO" required>
                    <label for="WaterStorageNo">NO</label>
                </div>

                <div class="radio-group">
                    <span class="radio-group-title">Waste Disposal:</span>
                    <input type="radio" id="WasteDisposalYes" name="rbWasteDisposal" value="YES" required>
                    <label for="WasteDisposalYes">YES</label>

                    <input type="radio" id="WasteDisposalNo" name="rbWasteDisposal" value="NO" required>
                    <label for="WasteDisposalNo">NO</label>
                </div>



                <button type="submit" name="btnSubmit">Submit</button>
            </form>
        </div>

        <!-- Popup Modal -->
        <div id="infoModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closePopup()">&times;</span>
                <h3>Warehouse Type Information</h3>
                <p>Choose the type of warehouse that best describes your facility. Each type has specific features and regulations.</p>
                <ul>
                    <li><strong>General Warehouse:</strong> Suitable for various goods.</li>
                    <li><strong>Cold Storage:</strong> Ideal for perishable items.</li>
                    <li><strong>Bonded:</strong> Used for storing goods until duties are paid.</li>
                    <li><strong>E-commerce:</strong> Designed for online retail operations.</li>
                    <li><strong>Agricultural:</strong> Specifically for agricultural products.</li>
                    <li><strong>Climate-Controlled:</strong> Maintains specific temperature and humidity levels.</li>
                    <li><strong>Industrial:</strong> For manufacturing and industrial purposes.</li>
                    <li><strong>Hazardous Material:</strong> Specially equipped for hazardous goods.</li>
                    <li><strong>Public:</strong> Open to all businesses.</li>
                    <li><strong>Private:</strong> Owned and operated by a single entity.</li>
                </ul>
            </div>
        </div>

        <script>
            // Show the popup
            function showPopup() {
                document.getElementById('infoModal').style.display = 'block';
            }

            // Close the popup
            function closePopup() {
                document.getElementById('infoModal').style.display = 'none';
            }

            // Close the modal when clicking anywhere outside of it
            window.onclick = function (event) {
                const modal = document.getElementById('infoModal');
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            }
        </script>
    </body>
</html>

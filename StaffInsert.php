<?php
if (isset($_POST["btnInsert"])) 
{
    $con = mysqli_connect("localhost:3307", "root", "", "warehouse");
    $Fname = $_POST["Fname"];
    $Lname = $_POST["Lname"];
    $Role = $_POST["Role"];
    $Email = $_POST["Email"];
    $PhNO = $_POST["PhNO"];
    $Gender = $_POST["Gender"];
    $Address = $_POST["Address"];
    $DOB = $_POST["DOB"];
    $DOJ = $_POST["DOJ"];
    $Emp_status = $_POST["Emp_status"];
    $EMG_con = $_POST["EMG_con"];
    $AadharcardNO = $_POST["AadharcardNO"];
    
    $in = "insert into staff values(NULL,'$Fname','$Lname','$Role','$Email','$PhNO','$Gender','$Address','$DOB','$DOJ','$Emp_status','$EMG_con','$AadharcardNO')";
    $i = mysqli_query($con, $in);
    header("Location: ViewStaff.php");
    mysqli_close($con);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Staff Details</title>
        <script src="script.js" defer></script>
    </head>
    <body>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('9950253.jpg');
                background-position: center;
                background-size: cover;
                margin: 0;
                padding: 0;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }

            form {
                background: #ffffff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                max-width: 500px;
                margin: 0 auto;
            }
            h2 {
                text-align: center;
                margin-bottom: 10px;
                color: blue;
            }
            .underline {
                width: 100px;
                height: 4px;
                background-color: blue;
                margin: 10px auto 20px auto;
                border-radius: 5px;
            }

            table {
                width: 100%;
            }

            label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

            input[type="text"],
            input[type="tel"],
            input[type="date"],
            textarea,
            select {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;

            }

            input[type="text"]:focus,
            input[type="tel"]:focus,
            input[type="date"]:focus,
            textarea:focus,
            select:focus {
                border-color: #007BFF;
                outline: none;
            }

            button {
                width: 100%;
                padding: 10px;
                background-color: blue;
                border: none;
                border-radius: 10px;
                color: white;
                font-size: 16px;
                cursor: pointer;
                margin-top: -10px;
            }
            button:hover {
                background-color: grey;
            }

        </style>
        <form method="post">
            <h2 align="center"> Staff Registration</h2>
            <table border="-1" align="center">
                <div class="underline"></div>
                <label>First Name</label>
                <input type="text" name="Fname"required><br>

                <label>Last Name</label>
                <input type="text" name="Lname"required><br>

                <label>Role</label>
                <select id="roletitle" name="Role">
                    <option value=""disabled selected>Select your Role</option>
                    <option value="warehouse-manager">Warehouse Manager</option>
                    <option value="inventory-specialist">Inventory Specialist</option>
                    <option value="forklift-operator">Forklift Operator</option>
                    <option value="loader-unloader">Loader/Unloader</option>
                    <option value="security-guard">Security Guard</option>
                </select>
                <label>Email</label>
                <input type="text" name="Email" required><br>

                <label>Phone Number</label>

                <input type="tel" name="PhNO" required><br>

                <label> Gender</label>

                <select id="gender" name="Gender" required>
                    <option value=""disabled selected>Select your Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select><br>

                <label>Address</label>
                <textarea id="address" name="Address" rows="4" required></textarea><br>


                <label>Date Of Birth</label><br>

                <input type="date" id="dob" name="DOB" required><br>

                <label>Date Of Joining</label>

                <input type="date" id="doj" name="DOJ" required><br>


                <label> Employement Status</label> 
                <select id="employmentStatus" name="Emp_status">
                    <option value="" disabled selected>Select employment status</option>
                    <option value="full-time">Full-Time</option>
                    <option value="part-time">Part-Time</option>
                    <option value="contract">Contract</option>
                </select><br>

                <label>Emergency ConatactNo</label>

                <input type="tel" name="EMG_con" required><br>

                <label>Aadharcard Number</label>
                <input type="text" name="AadharcardNO" required><br>
                <button type="submit" name="btnInsert">INSERT</button>                
            </table>
        </form>
        
    </body>
</html>
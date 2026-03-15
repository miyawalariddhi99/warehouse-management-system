<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
$con = mysqli_connect("localhost:3307", "root", "", "kaushal");
$id = $_REQUEST['updateid'];
$se = "select * from staff where id=$id";
$s = mysqli_query($con, $se);
$r = mysqli_fetch_assoc($s);
$Fname = $r["first_name"];
$Lname = $r["last_name"];
$Role = $r["role"];
$Email = $r["email"];
$PhNO = $r["phone_number"];
$Gender = $r["gender"];
$Address = $r["address"];
$DOB = $r["dob"];
$DOJ = $r["doj"];
$Emp_status = $r["employment_status"];
$EMG_con = $r["emergency_contact"];
$AadharcardNO = $r["aadhar_number"];

if (isset($_POST['btnUpdate'])) {
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
    $up = "Update staff set first_name='$Fname', last_name='$Lname',role='$Role',email='$Email', phone_number='$PhNO',gender='$Gender',address='$Address',dob='$DOB',doj='$DOJ', employment_status='$Emp_status',emergency_contact='$EMG_con', aadhar_number='$AadharcardNO' where id=$id";
    $u = mysqli_query($con, $up);
    if ($u) {
        header("location: ViewStaff.php");
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="styles.css">
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
                width: 95%;
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
                <input type="text" name="Fname"  value="<?php echo $Fname ?>"required><br><!-- comment -->

                <label>Last Name</label>
                <input type="text" name="Lname"  value="<?php echo $Lname ?>"required><br><!-- comment -->

                <label>Role</label>
                <select id="roletitle" name="Role" value="" required>
                    <option value=""disabled selected>Select your Role</option>
                    <option value="warehouse-manager" <?php if ($Role == 'warehouse-manager') echo 'selected'; ?>>Warehouse Manager</option>
                    <option value="inventory-specialist" <?php if ($Role == 'inventory-specialist') echo 'selected'; ?>>Inventory Specialist</option>
                    <option value="forklift-operator" <?php if ($Role == 'forklift-operator') echo 'selected'; ?>>Forklift Operator</option>
                    <option value="loader-unloader" <?php if ($Role == 'loader-unloader') echo 'selected'; ?>>Loader/Unloader</option>
                    <option value="security-guard" <?php if ($Role == 'security-guard') echo 'selected'; ?>>Security Guard</option>
                </select>
                <label>Email</label><!-- comment -->

                <input type="text" name="Email"  value="<?php echo $Email ?>" required><br>


                <label>Phone Number</label>

                <input type="tel" name="PhNO" value="<?php echo $PhNO ?>" required><br>

                <label> Gender</label>

                <select id="gender" name="Gender"value="" required>
                    <option value=""disabled selected>Select your Gender</option>
                    <option value="male" <?php if ($Gender == 'male') echo 'selected'; ?>>Male</option>
                    <option value="female" <?php if ($Gender == 'female') echo 'selected'; ?> >Female</option>
                    <option value="other" <?php if ($Gender == 'other') echo 'selected'; ?>>Other</option>
                </select><br>

                <label>Address</label>
                 <textarea id="address" name="Address" rows="4" value="" required><?php echo $Address ?></textarea><br>


                    <label>Date Of Birth</label><br>

                    <input type="date" id="dob" name="DOB" value="<?php echo $DOB ?>" required><br>

                    <label>Date Of Joining</label>

                    <input type="date" id="doj" name="DOJ" value="<?php echo $DOJ ?>" required><br>


                    <label> Employement Status</label> 
                    <select id="employmentStatus" name="Emp_status" required>
                        <option value="" disabled selected>Select employment status</option>
                        <option value="full-time" <?php if ($Emp_status == 'full-time') echo 'selected'; ?> >Full-Time</option>
                        <option value="part-time" <?php if ($Emp_status == 'part-time') echo 'selected'; ?>>Part-Time</option>
                        <option value="contract" <?php if ($Emp_status == 'contract') echo 'selected'; ?>>Contract</option>
                    </select><br>

                    <label>Emergency ConatactNo</label><!-- comment -->

                    <input type="tel" name="EMG_con" value="<?php echo $EMG_con ?>" required><br>

                    <label>Aadharcard Number</label>
                    <input type="text" name="AadharcardNO"value="<?php echo $AadharcardNO ?>" required><br><!-- comment -->
                    <button type="submit" name="btnUpdate">UPDATE</button>                
            </table>
        </form>
</body>
</html>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
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

            .container {
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: -2px 2px 15px rgba(0 , 0, 0, 0.5);
                max-width: 400px;
                width: 100%;
                margin-top: -85px;
            }

            h2 {
                text-align: center;
                margin-bottom: 10px;
                color: blue;
            }

            .form-group .underline {
                width: 100px;
                height: 4px;
                background-color: blue;
                margin: 10px auto 20px auto;
                border-radius: 5px;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .form-group label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }

            .form-group input,
            .form-group textarea {
                width: 95%;
                padding: 6px;
                background: #eaeaea;
                background: transparent;
                border: 1px solid #ccc;
                border-radius: 10px;
            }

            .form-group textarea {
                resize: vertical;
            }

            /* Styling for the city listbox */
            .form-group select {
                width: 100%;
                padding: 6px;
                background: #eaeaea;
                background: transparent;
                border: 1px solid #ccc;
                border-radius: 10px;
                font-size: 16px;
            }

            .form-group button {
                width: 100%;
                padding: 10px;
                background-color: blue;
                border: none;
                border-radius: 10px;
                color: white;
                font-size: 16px;
                cursor: pointer;
            }

            .form-group button:hover {
                background-color: grey;
            }

            .popup {
                background: rgba(0, 0, 0, 0.5);
                width: 100%;
                height: 100%;
                position: fixed;
                top: 0;
                left: 0;
                display: none;
                justify-content: center;
                align-items: center;
                text-align: center;
                font-weight: bold;
            }

            .popup-content {
                background: #fff;
                padding: 17px;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            }

            .popup input {
                width: 90%;
                padding: 10px;
                background: transparent;
                border: 1px solid #ccc;
                border-radius: 10px;
                cursor: pointer;
            }

            .popup button {
                width: 100%;
                padding: 10px;
                background-color: blue;
                border: none;
                border-radius: 10px;
                color: white;
                font-size: 16px;
                cursor: pointer;
                margin-top: -30px;
            }

            .popup button:hover {
                background-color: grey;
            }

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
            .container {
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: -2px 2px 15px rgba(0 , 0, 0, 0.5);
                max-width: 400px;
                width: 100%;
                margin-top: -85px;
            }
            h2 {
                text-align: center;
                margin-bottom: 10px;
                color: blue;
            }
            .form-group .underline {
                width: 100px;
                height: 4px;
                background-color: blue;
                margin: 10px auto 20px auto;
                border-radius: 5px;
            }
            .form-group {
                margin-bottom: 15px;
            }
            .form-group label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }
            .form-group input,
            .form-group textarea {
                width: 95%;
                padding: 6px;
                background: #eaeaea;
                background: transparent;
                border: 1px solid #ccc;
                border-radius: 10px;
            }
            .form-group textarea {
                resize: vertical;
            }
            .form-group button {
                width: 100%;
                padding: 10px;
                background-color: blue;
                border: none;
                border-radius: 10px;
                color: white;
                font-size: 16px;
                cursor: pointer;
            }
            .form-group button:hover {
                background-color: grey;
            }
            .popup {
                background: rgba(0, 0, 0, 0.5);
                width: 100%;
                height: 100%;
                position: fixed;
                top: 0;
                left: 0;
                display: none;
                justify-content: center;
                align-items: center;
                text-align: center;
                font-weight: bold;
            }
            .popup-content {
                background: #fff;
                padding: 17px;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            }
            .popup input {
                width: 90%;
                padding: 10px;
                background: transparent;
                border: 1px solid #ccc;
                border-radius: 10px;
                cursor: pointer;
            }
            .popup button {
                width: 100%;
                padding: 10px;
                background-color: blue;
                border: none;
                border-radius: 10px;
                color: white;
                font-size: 16px;
                cursor: pointer;
                margin-top: -30px;
            }
            .popup button:hover {
                background-color: grey;
            }

        </style>
    <body>
        <body>
        <div class="container"><br><br><br><br><br>
            <h2>Update Details</h2>
            <form id="registrationForm" method="post">
                <div class="form-group">
                    <div class="underline"></div>
                    <label for="first_name"> First Name</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Abc--"  pattern="[A-Z or a-z]{2,15}" title="Only letters ara allow " required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Abc--"  pattern="[A-Z or a-z]{2,15}" title="Only letters ara allow " required>
                </div>
                <div class="input-radio">
                    <label for="gender" style="font-weight: bold;">Gender : </label>
                    <input type="radio" id="male" name="gender" value="male" required> Male
                    <input type="radio" id="female" name="gender" value="female" required> Female
                    <input type="radio" id="other" name="gender" value="other" required> Other
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" pattern="[6789][0-9]{9}" maxlength="10" minlength="10" placeholder="98765 43210" title="Only Numeric 10 digit require it must start from 6,7,8,9" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" rows="1" required></textarea>
                </div>
                <div class="form-group">
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
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" maxlength="16" minlength="8" placeholder="8-16 characters" title="1 numeric 1 special character 1 Upper Latter Require" required>
                    <label for="reenterpassword">Re-enter Password</label>
                    <input type="password" id="reenterpassword" name="reenterpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" maxlength="16" minlength="8" placeholder="8-16 characters" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email"  pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$" placeholder="xyz@email.com" required>
                </div>
                <div class="form-group">
                    <button type="submit" id="verifyEmailButton" name="verifyEmail">Verify Email</button>
                </div>
            </form>
    </body>
</html>

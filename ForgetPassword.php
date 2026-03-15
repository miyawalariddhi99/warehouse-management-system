<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>
        <style>
            body {
                font-family: Poppins, sans-serif;
                background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url('9950253.jpg');
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
                font-size: larger;
                text-align: center;
                font-weight: bold;
                font-family: Poppins, sans-serif;
                color: blue;
                position: relative;
            }
            h2::after {
                content: '';
                display: block;
                width: 80px;
                height: 4px;
                background-color: blue;
                margin: 5px auto 20px auto;
                border-radius: 5px;
            }
            form {
                background-color: white;
                padding: 25px;
                border-radius: 10px;
                box-shadow: -2px 2px 15px rgba(0, 0, 0, 0.5);
                max-width: 320px;
                width: 100%;
            }
            table {
                width: 100%;
                border-spacing: 0 10px;
            }
            label {
                display: block;
                font-weight: bold;
                margin-bottom: 8px;
                color: #333;
            }
            input[type="email"],
            input[type="text"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                background: transparent;
                border: 1px solid #ccc;
                border-radius: 10px;
                margin-bottom: 10px;
                box-sizing: border-box;
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
            p {
                text-align: center;
                color: red;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <h2>Forgot Password</h2>
            <?php
            session_start();

            // Connect to the database
            $con = mysqli_connect("localhost:3307", "root", "", "warehouse");

            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }

            if (isset($_POST['btnsubmit'])) {
                // Get the email from the form
                $email = $_POST['email'];

                // Query to check if email exists
                $q = "SELECT * FROM tblcustomer WHERE EMAIL='$email'";
                $result = mysqli_query($con, $q);
                $q1 = "SELECT * FROM tblowner WHERE EMAIL='$email'";
                $result1 = mysqli_query($con, $q1);

                if (mysqli_num_rows($result) > 0 || mysqli_num_rows($result1) > 0) {

                    $otp = rand(100000, 999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['email'] = $email;

                    // Send OTP email
                    $subject = "Your OTP Code";
                    $message = "Your OTP code is $otp";
                    $headers = "From: abcx10542@gmail.com";

                    if (mail($email, $subject, $message, $headers)) {
                        echo "<p>OTP has been sent to your email. Please check your inbox.</p>";
                        echo "<table>";
                        echo '<tr>';
                        echo "<td><label for='OTP'>Enter OTP : </label></td>";
                        echo "<td><input type='text' name='txtOTP' placeholder='Enter OTP' required maxlength='6'></td>";
                        echo '</tr><br><br>';
                        echo "<tr><td colspan='2'>";
                        echo "<button type='submit' name='btnvalidate'>Validate OTP</button></td></tr>";
                        echo "</table>";
                    } else {
                        echo "<p>Failed to send OTP. Please try again.</p>";
                    }
                } else {

                    echo "<p>Email not found in our records. Please check and try again.</p>";
                }
            } elseif (isset($_POST['btnvalidate'])) {
                $otp1 = $_POST['txtOTP'];

                if ($_SESSION['otp'] == $otp1) {
                    // OTP is correct, allow password reset
                    echo "<table>";
                    echo "<tr><td><br><br></td></tr>";
                    echo "<tr><td>";
                    echo "<label for='password'>New Password: </label></td>";
                    echo "<td><input type='password' name='password' required></td></tr>";
                    echo "<tr><td><br></td></tr>";
                    echo "<tr><td>";
                    echo "<label for='conpassword'>Confirm New Password:</label></td>";
                    echo "<td><input type='password' name='conpassword' required></td></tr>";
                    echo "<tr><td><br></td></tr>";
                    echo "<tr><td>";
                    echo "<button type='submit' name='btnreset'>Reset Password</button></td></tr>";
                    echo "</table>";
                } else {
                    // Invalid OTP, show the OTP form again
                    echo "<p>Invalid OTP. Please try again.</p>";
                    echo "<table>";
                    echo '<tr>';
                    echo "<td><label for='OTP'>Enter OTP : </label></td>";
                    echo "<td><input type='text' name='txtOTP' placeholder='Enter OTP' required maxlength='6'></td>";
                    echo '</tr><br><br>';
                    echo "<tr><td colspan='2'>";
                    echo "<button type='submit' name='btnvalidate'>Validate OTP</button></td></tr>";
                    echo "</table>";
                }
            }

            // Password reset logic
            elseif (isset($_POST['btnreset'])) {
                $password = $_POST['password'];
                $conpassword = $_POST['conpassword'];

                if ($password == $conpassword) {
                    $email = $_SESSION['email'];
                    $hashed_password = md5($password);  // Using MD5 for password hashing
                    // Update the password in the database
                    $query = "UPDATE tblowner SET PASSWORD='$hashed_password' WHERE EMAIL='$email'";
                    $result = mysqli_query($con, $query);
                    $query1 = "UPDATE tblcustomer SET PASSWORD='$hashed_password' WHERE EMAIL='$email'";
                    $result1 = mysqli_query($con, $query1);
                    
                    if ($result || $result1) {
                        echo "<p>Password has been reset successfully.</p>";
                        header("Location: Login.php");
                        exit();
                    } else {
                        echo "<p>Failed to reset password. Please try again.</p>";
                    }
                } else {
                    // Passwords do not match, show the reset form again
                    echo "<p>Passwords do not match. Please try again.</p>";
                    echo "<table>";
                    echo "<tr><td><br><br></td></tr>";
                    echo "<tr><td>";
                    echo "<label for='password'>New Password: </label></td>";
                    echo "<td><input type='password' name='password' required></td></tr>";
                    echo "<tr><td><br></td></tr>";
                    echo "<tr><td>";
                    echo "<label for='conpassword'>Confirm New Password:</label></td>";
                    echo "<td><input type='password' name='conpassword' required></td></tr>";
                    echo "<tr><td><br></td></tr>";
                    echo "<tr><td>";
                    echo "<button type='submit' name='btnreset'>Reset Password</button></td></tr>";
                    echo "</table>";
                }
            }

            // Initial email input form
            else {
                ?>
                <table>
                    <tr>
                        <td> <label for="email">Email: </label> </td>
                        <td> <input type="email" name="email" required> </td>
                    </tr>
                    <tr>
                        <td> <br> </td>
                    </tr>
                    <tr>
                        <td colspan="2"> <button type="submit" name="btnsubmit">Send OTP</button> </td>
                    </tr>
                </table>
    <?php
}
?>
        </form>
    </body>
</html>

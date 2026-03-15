<?php
session_start();
$con = mysqli_connect("localhost:3307", "root", "", "warehouse");
if (!$con) {
    echo "Connection Lost !!!";
}

    $rfname = $_SESSION['fname'];
    $rlname = $_SESSION['lname'];
    $rgender = $_SESSION['gender'];
    $radd = $_SESSION['add'];
    $rcity = $_SESSION['city'];
    $rphone = $_SESSION['phone'];
    $remail = $_SESSION['email'];
    $rpass = $_SESSION['pass'];
    $rrepass = $_SESSION['repass'];
    
    if (isset($_POST['verifyOTP'])) {
    $otp1 = $_POST['votp'];

    if ($_SESSION['otp'] == $otp1) {
        $hash = md5($rrepass);
            $query = "insert into tblowner(FNAME,LNAME,GENDER,ADDRESS,CityID,PHNO,EMAIL,PASSWORD) values ('$rfname','$rlname','$rgender','$radd',$rcity,$rphone,'$remail','$hash')";
            $q = mysqli_query($con, $query);
            echo "<script>alert('Account Registered')</script>";
            if($q)
            {
                header("Location: Login.php");
            }
        session_destroy();
        
        exit();
    } else {
        echo "<script>alert('Invalid OTP. Please try again.')</script>";
        
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>OTP verification</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <style>
            body
            {
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

            .container
            {
                background-color: white;
                padding: 25px;
                border-radius: 10px;
                box-shadow: -2px 2px 15px rgba(0 , 0, 0, 0.5);
                max-width: 250px;
                width: 100%;
                height: 20vh;
            }
            .otp {
                font-size: larger;
                text-align: center;
                font-weight: bold;
                font-family: Poppins, sans-serif;
                ;
                color: blue;
            }
            .otp .underline {
                width: 75px;
                height: 4px;
                background-color: blue;
                margin: 5px auto 20px auto;
                border-radius: 5px;

            }

            .otp input {
                width: 90%;
                padding: 10px;
                background: transparent;
                border: 1px solid #ccc;
                border-radius: 10px;
                cursor: pointer;
                margin-bottom: 10px;

            }
            .otp button
            {
                width: 100%;
                padding: 10px;
                background-color: blue;
                border: none;
                border-radius: 10px;
                color: white;
                font-size: 16px;
                cursor: pointer;
                margin-bottom: 20px;
            }
            .otp button:hover {
                background-color: grey;
            }
        </style>
    </head>
    <body>
                <form method="post">
                    <div class="container">  
                        <div class="otp">
                            <div class="otp-content">

                                <label for="otp" >OTP</label>
                                <div class="underline"></div>
                                <input type="text" id="otp" name="votp" maxlength="6" required><br>
                                <button type="submit" id="button1" name="verifyOTP">Verify OTP</button>    
                            </div>
                        </div>
                </form>
       
    </body>
</html>
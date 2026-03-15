<?php
session_start();

$connect = mysqli_connect("localhost:3307", "root", "", "warehouse");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST["Email"];
    $input_password = $_POST["password"];

    $q = "SELECT * FROM tblcustomer WHERE EMAIL='$input_username'";
    $qu = mysqli_query($connect, $q);

    $q1 = "SELECT * FROM tblowner WHERE EMAIL='$input_username'";
    $qu1 = mysqli_query($connect, $q1);

    $admin = "select * from tbladmin where EMAIL = '$input_username'";
    $query = mysqli_query($connect, $admin);

    $user = $pass = $user1 = $pass1 = $user2 = $pass2 = null;

    if ($r = mysqli_fetch_assoc($qu)) {
        $user = $r['EMAIL'];
        $pass = $r['PASSWORD'];
    }

    if ($r1 = mysqli_fetch_assoc($qu1)) {
        $user1 = $r1['EMAIL'];
        $pass1 = $r1['PASSWORD'];
    }

    if ($r2 = mysqli_fetch_assoc($query)) {
        $user2 = $r2['EMAIL'];
        $pass2 = $r2['PASSWORD'];
    }
    if ($input_username == $user2 && $input_password === $pass2) {
            $_SESSION['luser'] = $input_username;
            $_SESSION['lpassword'] = $input_password;
            header("Location: Admin.php");
            exit;
        }
    

    if (empty($user) && empty($user1)) {
        $uperror = "Invalid Username Or Password";
        echo "<script>alert('Wrong ID or Password')</script>";
    } else {
        $newpass = md5($input_password);

        if ($input_username == $user && $newpass === $pass) {
            $_SESSION['cuser'] = $input_username;
            $_SESSION['cpassword'] = $input_password;
            header("Location: ViewCity.php");
            exit;
        }
        else if ($input_username == $user1 && $newpass === $pass1) {
            $_SESSION['ouser'] = $input_username;
            $_SESSION['opassword'] = $input_password;
            header("Location: OwnerHome.php");
            exit;
        } else {
            $uperror = "Invalid Username Or Password";
            echo "<script>alert('Wrong ID or Password')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login form</title>
        <link rel="stylesheet" href ="Style.css">
        <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Poppins">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    </head>
    <body>
        <div class="container">
            <div class="form-box">
                <h1>Login</h1>
                <div class="underline"></div>
                <form method="post">
                    <div class="input-group">


                        <div class="input-fields">
                            <i class="fa-solid fa-envelope"></i>   
                            <input type="email" placeholder="Email Id" name="Email">
                        </div>

                        <div class="input-fields">
                            <i class="fa-solid fa-lock"></i>   
                            <input type="password" placeholder="Password" name="password">
                        </div>

                        <div class="forgot-password">
                            <a href = "ForgetPassword.php">forgot password?</a>
                        </div>

                    </div>
                    <div class="btn-field">
                        <button type="submit" name="btnLogin">login</button>
                        <p>Don't have an account?? <a href="Choice.php"> Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
        <?php
        $apiKey = "rzp_test_lloXwwtu7sAIPU";
        $amount0 = $_SESSION['amount'];
        $amount = $amount0 * 100;
        $oid = 'OID' . rand(10, 20) . 'END';
        $name = $_SESSION['vname'];
        $email = $_SESSION['email'];
        ?>
        <form action="vendor.php" method="POST">
            <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="<?php echo $apiKey; ?>"; 
                data-amount="<?php echo $amount; ?>";
                data-currency="INR";
                data-id="<?php echo $oid; ?>";
                data-buttontext="Pay with Razorpay";
                data-name="Wood-Land Wonder";
                data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami";
                data-image="https://example.com/your_logo.jpg";
                data-prefill.name="<?php echo $name; ?>";
                data-prefill.email="<?php echo $email; ?>";
                data-theme.color="#F37254";
            ></script>
            <input type="hidden" custom="Hidden Element" name="hidden">
        </form>

    </body>
</html>

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
    <body>
        <?php
        $con = mysqli_connect("localhost:3307", "root", "", "warehouse");
        
        if (isset($_REQUEST['deleteid'])) {
            $id = $_REQUEST["deleteid"];
            $de = "delete from staff where id=$id";
            $d = mysqli_query($con, $de);
            if($d)
            {
                header("location: ViewStaff.php");
            }
        }
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customers Details</title>
        <style>

                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                    }

                    body {
                        font-family: 'Arial', sans-serif;
                        background-color: #f4f4f4;
                        color: #333;
                        padding: 20px;
                    }

                    /* Form styling */
                    form {
                        margin-bottom: 20px;
                    }

                    button {
                        background-color: #004080;
                        color: #fff;
                        border: none;
                        padding: 10px 20px;
                        cursor: pointer;
                        font-size: 16px;
                        border-radius: 5px;
                        transition: background-color 0.3s ease;
                    }

                    button:hover {
                        background-color: #218838;
                    }


                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 20px;
                        background-color: #fff;
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    }

                    th, td {
                        padding: 12px 15px;
                        text-align: left;
                    }

                    th {
                        background-color: #004080;
                        color: #fff;
                        text-transform: uppercase;
                        font-size: 14px;
                        border-bottom: 3px solid #ddd;
                    }

                    td {
                        border-bottom: 1px solid #ddd;
                    }


                    tr:hover {
                        background-color: #f1f1f1;
                    }

                    /* Links for update and delete */
                    a {
                        color: #007bff;
                        text-decoration: none;
                        font-weight: bold;
                    }

                    a:hover {
                        text-decoration: underline;
                    }

                    /* Button styling for update/delete links */
                    td a {
                        background-color: #004080;
                        padding: 5px 10px;
                        border-radius: 5px;
                        color: #fff;
                        margin-right: 5px;
                        display: inline-block;
                    }

                    td a:hover {
                        background-color: #e0a800;
                    }

                    td a:last-child {
                        background-color: #dc3545;
                    }

                    td a:last-child:hover {
                        background-color: #c82333;
                    }
                </style>
    </head>
    <body>
        <div class="container">
            <h1>Customer's Details</h1>
            <?php
            $con = mysqli_connect("localhost:3307","root","","warehouse");
            if(!$con)
            {
                echo "Connection error !!!";
            }
            else
            {
                $se = "select * from tblcustomer";
                $q = mysqli_query($con, $se);
                echo "<table>";
                echo "<tr>";
                echo "<th>INDEX</th>";
                echo "<th>FIRST NAME</th>";
                echo "<th>LAST NAME</th>";
                //echo "<th>DATE OF BIRTH</th>";
                echo "<th>GENDER</th>";
                echo "<th>PHONE NO.</th>";
                echo "<th>ADDRESS</th>";
                echo "<th>EMAIL</th>";
                echo "</tr>";
                $i=1;
                while($r = mysqli_fetch_assoc($q))
                {
                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    $i++;
                    echo "<td>".$r["FNAME"]."</td>";
                    echo "<td>".$r["LNAME"]."</td>";
                    //echo "<td>".$r["DOB"]."</td>";
                    echo "<td>".$r["GENDER"]."</td>";
                    echo "<td>".$r["PHNO"]."</td>";
                    echo "<td>".$r["ADDRESS"]."</td>";
                    echo "<td>".$r["EMAIL"]."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            mysqli_close($con);
            ?>
        </div>
    </body>
</html>

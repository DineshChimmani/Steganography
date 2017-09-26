<!doctype>
<html>
<head>
    <style>
        .error {
            font-family:Arial, Helvetica, sans-serif;
            font-size:17px;
            font-weight: bold;
            color: #D8000C;
            background-color: #FFBABA;

        }
    </style>
</head>
<body>
<?php
include "header.php";
include "connection.php";
$query="select * from admin";
$result=mysqli_query($conn,$query);
?>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="well">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center><h2>List of admin accounts</h2></center></div>
                    </div>
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_array($result))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row[3] ?></a></td>
                                <td><?php echo $row[1] ?></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <?php
                    if(isset($_REQUEST['q']))
                    {
                        ?>
                        <div class="error">
                            <?php
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                                echo "<span style='color:red;'>Admin account created</span>";
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==2)
                                echo "<span style='color:red;'>Admin account deleted</span>";

                            ?>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

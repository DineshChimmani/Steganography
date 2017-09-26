<!doctype>
<html>
<head>
</head>
<body>
<?php
include "header.php";
include "connection.php";
$query="select * from student_accounts";
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
                        <div class="panel-heading"><center><h2>List of student accounts</h2></center></div>
                    </div>
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row=mysqli_fetch_array($result))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row[1] ?></a></td>
                                <td><?php echo $row[2] ?></a></td>
                                <td><?php echo $row[3] ?></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>


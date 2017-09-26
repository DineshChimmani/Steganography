<!doctype>
<html>
<head>
</head>
<body>
<?php
include "student_header.php";
include "connection.php";
$username=$_SESSION['username'];
$query10="select * from student_accounts where username='$username'";
$result10=mysqli_query($conn,$query10);
$row10=mysqli_fetch_array($result10);
$student_id=$row10[1];

$query9="select * from personal where student_id='$student_id'";
$result9=mysqli_query($conn,$query9);
$row9=mysqli_fetch_array($result9);


    $query1 = "select * from personal where student_id='$student_id'";
    $result1 = mysqli_query($conn, $query1);
    ?>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="well">
                        <div class="row">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <center><h2>Student Information</h2></center>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <span class="badge"></span>&nbsp;<label><h3><strong>Personal Information</strong></h3>
                            </label>
                        </div>
                        <?php
                        while ($row1 = mysqli_fetch_array($result1)) {
                            ?>
                            <table class="table table-condensed">
                                <thead></thead>
                                <tbody>
                                <tr>
                                    <td>Student ID</td>
                                    <td></td>
                                    <td><?php echo $row1[2] ?></td>
                                </tr>
                                <tr>
                                    <td>First name</td>
                                    <td></td>
                                    <td><?php echo $row1[3] ?></td>
                                </tr>
                                <tr>
                                    <td>Middle name</td>
                                    <td></td>
                                    <td><?php echo $row1[4] ?></td>
                                </tr>
                                <tr>
                                    <td>Last name</td>
                                    <td></td>
                                    <td><?php echo $row1[5] ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td></td>
                                    <td><?php echo $row1[6] ?></td>
                                </tr>
                                <tr>
                                    <td>Telephone</td>
                                    <td></td>
                                    <td><?php echo $row1[7] ?></td>
                                </tr>
                                <?php
                                if($row1[8]=='international student') {
                                    ?>
                                    <tr>
                                        <td>Country</td>
                                        <td></td>
                                        <td><?php echo $row1[10] ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <td>Gender</td>
                                    <td></td>
                                    <td><?php echo $row1[9] ?></td>
                                </tr>
                                </tbody>
                            </table>
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




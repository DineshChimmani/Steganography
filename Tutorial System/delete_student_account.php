<!DOCTYPE html>
<html lang="en">
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
?>
<div>
    <div class="container">
        <form action="delete_student_account_action.php" method="get">
            <div class="form-group col-md-5">
                <div class="well">
                    <div class="row">
                        <label>Student ID or Username</label>
                        <input type="text" name="student_id"class="form-control" placeholder="Enter student id or username you want to delete">
                    </div>
                    <br>
                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                    <br>
                    <?php
                    if(isset($_REQUEST['q']))
                    {
                        ?>
                        <div class="error">
                            <?php
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                                echo "<span style='color:red;'>Student account deleted</span>";
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==2)
                                echo "<span style='color:red;'>Student account does not exists</span>";
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
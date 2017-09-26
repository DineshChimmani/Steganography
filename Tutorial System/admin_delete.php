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
        <form action="admin_delete_action.php" method="get">
            <div class="form-group col-md-5">
                <div class="well">
                    <div class="row">
                        <label>Admin email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email id">
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
                            if(isset($_REQUEST['q']) && $_REQUEST['q']==2)
                                echo "<span style='color:red;'>Admin account deleted</span>";
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
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
include "connection.php";
include "header.php";

?>
<div>
    <div class="container">
        <div class="row">
            <div >
            </div>
            <div class="col-md-4">
                <?php
                if(isset($_REQUEST['q']))
                {
                    ?>
                    <div class="error">
                        <?php
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                            echo "<span style='color:red;'>Admin account already exists</span>";
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==2)
                            echo "<span style='color:red;'>Admin account created</span>";
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==3)
                            echo "<span style='color:red;'>Admin account deleted</span>";

                        ?>
                    </div>
                    <?php
                }
                ?>
                <div class="well">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h2>Create admin account</h2></div>
                        </div>
                    </div>
                    <form action="admin_create_action.php" method="get">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Admin name</label>
                                <input type="text"class="form-control"name="name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Admin email</label>
                                <input type="email"class="form-control"name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Password</label>
                                <input type="text"class="form-control"name="password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">

                                <span style='color:red;'>Note: Admin email will be used for login</span>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary btn-md">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>






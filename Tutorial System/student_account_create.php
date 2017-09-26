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

    <script type="text/javascript">
        function go()
        {
            var student_id=document.getElementById("student_id").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp1").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "student_account_create2.php?student_id=" +student_id,true);
            xmlhttp.send();
        }

    </script>

</head>
<body>
<?php
include "connection.php";
include "header.php";
$query="select student_id from personal order by student_id asc";
$result=mysqli_query($conn,$query);

?>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <?php
                if(isset($_REQUEST['q']))
                {
                    ?>
                    <div class="error">
                        <?php
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                            echo "<span style='color:red;'>Student account already exists</span>";
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==2)
                            echo "<span style='color:red;'>Student account created</span>";
                        if(isset($_REQUEST['q']) && $_REQUEST['q']==3)
                            echo "<span style='color:red;'>Student account deleted</span>";

                        ?>
                    </div>
                    <?php
                }
                ?>
                <div class="well">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h2>Create student account</h2></div>
                        </div>
                    </div>
                    <form action="student_account_create_action.php" method="get">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Student ID</label>
                                <input type="text"class="form-control"name="student_id" required>

                            </div>
                        </div>
                        <span id="sp1"></span>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Username</label>
                                <input type="text"class="form-control"name="username" required>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Password</label>
                                <input type="text"class="form-control"name="password" id="password" required>
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






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
session_start();
if(isset($_SESSION['username']))
{
    include "s_header.php";
}
else
{
    header("location:index.php");
}
?>
<div>
<div class="container">

    <div class="row">
        <div class="col-md-8">
        </div>
        <div class="col-md-4">




            </div>
    </div>
    <div class="row">

    <?php
    echo "
    <span style='float:right;'>Welcome   <b>".ucfirst($_SESSION['username'])."</b></span>
    <br><br>";
    ?>
        </div>
</div>
</div>
</body>
</html>

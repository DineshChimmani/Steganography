<?php
include "header.php";
include "connection.php";

$email=$_REQUEST['email'];
$query = "delete from admin where email='$email'";
mysqli_query($conn, $query);
header("location:admin_delete.php?q=2");

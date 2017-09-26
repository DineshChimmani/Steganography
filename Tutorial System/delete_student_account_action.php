<?php
include "header.php";
include "connection.php";

$student_id=$_REQUEST['student_id'];
$query = "delete from student_accounts where student_id='$student_id' or username='$student_id'";
mysqli_query($conn, $query);
header("location:delete_student_account.php?q=1");

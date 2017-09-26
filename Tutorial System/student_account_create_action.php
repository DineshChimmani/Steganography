<?php
include "connection.php";

$student_id=$_REQUEST['student_id'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$query="select * from student_accounts";
$res=mysqli_query($conn,$query);
$flag=0;
while($row=mysqli_fetch_array($res))
{
    if($student_id==$row[1])
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    header("location:student_account_create.php?q=1");
}
else {

    $query = "insert into student_accounts values('','" . $student_id . "','" . $username . "','" . $password . "')";
//echo $query;
    mysqli_query($conn, $query);
    header("location:student_account_create.php?q=2");
}

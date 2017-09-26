<?php
include "connection.php";

session_start();

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$query="select * from student_accounts";
$result=mysqli_query($conn,$query);
$flag=0;


while($row=mysqli_fetch_array($result))

{
    if($username==$row[2] && $password==$row[3]) {
        $flag=1;
        break;
    }
}

if($flag==1)
{
    $_SESSION['username']=$username;
    header("location:student_header.php");
}
else
{
    header("location:index.php?q=2");
}




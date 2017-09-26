<?php
include "connection.php";

session_start();

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

$query="select * from admin";
$result=mysqli_query($conn,$query);
$flag=0;




while($row=mysqli_fetch_array($result))

{
    if($email==$row[1] && $password==$row[2]) {
        echo $row[0]." ".$row[1];
        $flag=1;
        break;
    }
}

if($flag==1)
{
    $_SESSION['admin']=$email;
    header("location:homepage.php");
}
else
{
    header("location:index.php?q=1");
}




<?php
include "connection.php";

$email=$_REQUEST['email'];
$name=$_REQUEST['name'];
$password=$_REQUEST['password'];

$query="select * from admin";
$res=mysqli_query($conn,$query);
$flag=0;
while($row=mysqli_fetch_array($res))
{
    if($email==$row[1])
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    header("location:admin_create.php?q=1");
}
else {

    $query = "insert into admin values('','" . $email . "','" . $password . "','" . $name . "')";
//echo $query;
    mysqli_query($conn, $query);
    header("location:admin_view.php?q=1");
}

<?php
	include('connection.php');
	$id=$_GET['id'];
$query = "DELETE FROM vid_entry WHERE id= '$id'";
mysqli_query($conn, $query);
	header("location: Delete_lectures.php");
?>
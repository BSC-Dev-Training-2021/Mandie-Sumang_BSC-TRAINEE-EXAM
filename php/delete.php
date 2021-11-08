<?php
	$id=$_GET['id'];
	include('Connection.php');
	mysqli_query($conn,"delete from `db_image` where ID='$id'");
	header('location:data.php');
?>
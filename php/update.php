<?php
	include('Connection.php');
	$id=$_GET['id'];
 
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
 
	mysqli_query($conn,"update `db_image` set Price='$price', Quantity='$quantity' where ID='$id'");
	header('location:data.php');
?>
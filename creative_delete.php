<?php
	include('C:\xampp\htdocs\E-shop\process\connection.php');

	$id=$_GET['id'];


	$querry="Delete from creative where id='$id'";
	$result=mysqli_query($conn,$querry);

header("Location: ./creative_view.php");
?>
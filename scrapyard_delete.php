<?php
	include('C:\xampp\htdocs\E-shop\process\connection.php');

	$id=$_GET['id'];


	$querry="Delete from scrapyard where id='$id'";
	$result=mysqli_query($conn,$querry);

header("Location: ./scrapyard_view.php");
?>
<?php 
	$user_id = $_POST['user_id'];
	include("./db/connection.php");
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/adminLogin.php');
	if($_SESSION['username'] != "admin")
		header('location:http://localhost/Vivah.com/index.php');

	$query = mysqli_query($con,"DELETE from user WHERE user_id='$user_id'");
	header('location:http://localhost/Vivah.com/existingUsers.php');
	

?>
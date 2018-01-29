<?php 
	include("./db/connection.php");
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	//database operations
	$query = mysqli_query($con,"SELECT * from admin where username ='$username' && password='$password'");
	$rows = mysqli_num_rows($query);

	if($rows == 1)
	{
		$results = mysqli_fetch_array($query);
		$_SESSION['username'] = $results['username'];
		header('location:http://localhost/Vivah.com/adminHome.php');
	}
	else
		header('location:http://localhost/Vivah.com/adminLogin.php');
	




 ?>
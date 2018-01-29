<?php 
	include("./db/connection.php");
	
	$user_from = $GET['user_from'];
	$user_to = $_GET['user_to'];
	$date = $_GET['date'];

	$query = $query = mysqli_query($con,"INSERT INTO request VALUES('','$user_from','$user_to','$date')");
	if($query)
		echo "interest send";
	else
		echo "inerest can't be send";
 ?>
<?php 
	include("./db/connection.php");
	$username = $_GET['username'];

	$query = mysqli_query($con,"SELECT username FROM user WHERE username='$username' and deleted ='no'");
	$num_rows = mysqli_num_rows($query);

	if($num_rows == 1)
		echo "Exists";
	else
		echo "Not Exists";
 ?>
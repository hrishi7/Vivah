<?php 
$user_id = $_GET['id'];
	include("./db/connection.php");
	 $query = mysqli_query($con,"UPDATE user SET approve='yes' WHERE user_id='$user_id'");
	 header('location:http://localhost/Vivah.com/approveAccountList.php');

 ?>
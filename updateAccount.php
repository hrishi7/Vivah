<?php 
	include("./db/connection.php");
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/userLogin.php');
	if($_SESSION['username'] == "admin")
		header('location:http://localhost/Vivah.com/index.php');

	$username = $_SESSION['username'];
	if(isset($_POST['update']))
	{
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$pincode = $_POST['pincode'];
		$country = $_POST['country'];
		$contact_no = $_POST['contact_no'];
		//upload photo
		//$image = $_FILES['image']['name'];
		$f = $_FILES['image'];
		$image = $f['name'];
		move_uploaded_file($f['tmp_name'], "images/".$f['name']);

		$query = mysqli_query($con,"UPDATE user SET 
					first_name = '$first_name',
					last_name = '$last_name',
					address = '$address',
					city = '$city',
					state = '$state',
					pincode = '$pincode',
					country = '$country',
					contact_no = '$contact_no',
					photo = '$image',
					age ='$age'
					WHERE username ='$username'");

		echo "<script>
			alert('Updation SuccessFully Done!!!');
			window.location='http://localhost/Vivah.com/userHome.php';
		</script>";

	}
 ?>
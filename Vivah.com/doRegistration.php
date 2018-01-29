<?php 
	include("./db/connection.php");
	if(isset($_POST['register']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$height = $_POST['height'];
		$weight = $_POST['weight'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$pincode = $_POST['pincode'];
		$country = $_POST['country'];
		$contact_no = $_POST['contact_no'];
		$looking_for = $_POST['looking_for'];
		//photo
		$f = $_FILES['image'];
		$image = $f['name'];
		move_uploaded_file($f['tmp_name'], "images/".$f['name']);

		$complexion = $_POST['complexion'];
		$age = $_POST['age'];
		$education = $_POST['education'];
		$marital_status = $_POST['marital_status'];
		$religion = $_POST['religion'];
		$mother_tounge = $_POST['mother_tounge'];
		$caste = $_POST['caste'];
		$profession = $_POST['profession'];
		$profile_summary = $_POST['profile_summary'];
		
		
		
		$query = mysqli_query($con,"INSERT INTO user VALUES (
			'',
			'$username',
			'$password',
			'$first_name',
			'$last_name',
			'$gender',
			'$height',
			'$weight',
			'$address',
			'$city',
			'$state',
			'$pincode',
			'$country',
			'$contact_no',
			'$looking_for',
			'$image',
			'$complexion',
			'$age',
			'no',
			'no',
			'$education',
			'$marital_status',
			'$religion',
			'$mother_tounge',
			'$caste',
			'$profession',
			'$profile_summary')");

		

		echo "<script>
			alert('Registration SuccessFully Done Please Login and enjoy Our Services!!!');
			window.location='http://localhost/Vivah.com/userLogin.php';
		</script>";
		



		

	}


	


 ?>
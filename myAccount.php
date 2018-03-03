<?php 
	include("./db/connection.php");
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/userLogin.php');
	if($_SESSION['username'] == "admin")
		header('location:http://localhost/Vivah.com/index.php');


	$username = $_SESSION['username'];

	$query = mysqli_query($con,"SELECT * from user WHERE username='$username'");
 	$result = mysqli_fetch_array($query);

 ?>

 <!DOCTYPE html>



<html>
<head>
	<title>User Home</title>
	<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<style type="text/css">
		body{
			background-color: #f2f2f2;
		}
		#form{
			background-color: beige;
			min-height: 700px;
			padding: 5px 40px 40px 40px;
			border-radius: 10px;
		}
		.registration{
			font-size: 42px;
			font-family: Agency FB;
			font-weight: 700;
			border-bottom-style: ridge;
		}
		.text{
			height: 45px;
		}
		label{
			font-size: 16px;
		}
		.btn-primary{
			border-radius: 0px;
			padding: 5px;
			width: 48%;
		}
		.btn-danger{
			border-radius: 0px;
			padding: 5px;
			width: 48%;
			float: right;
		}
		.footer{
		text-align: center;
		background-color: black;
		font-size: 25px;
		margin-bottom: 10px;
		color: #ecf0f1;
		}
		.reg-form{
			margin-top: 10px;
			margin-bottom: 10px;

		}
		.links a{
		text-align: center;
		}
		.link-user{
		margin-top: 141px;
		}
	</style>
</head>
<body>
	<!--top fixed navigation bar-->
	<div class="container">
		<div class="page-header header">
      		<div class="row">
      		<div class="col-md-4 offset-md-8">
      			<a class="navbar-brand" href="http://localhost/Vivah.com/index.php">Vivah</a>
        
      		</div>
      		<div class="col-md-4 pull-right">
      			<h4 class="float-right">Hello <?php echo $_SESSION['username']; ?>!</h4>
      		</div>
      	</div>
      	</div>
	</div>
      	
      	

        
      

    <!-- end of top fixed navigation bar-->
	<div class="container">
		<div class="row main-contain">
			<div class="col-md-4 ">
				<h1 style="text-align: center;">Menu</h1>
				<ul class="nav nav-pills nav-stacked links link-user">
					<li><a href="http://localhost/Vivah.com/myaccount.php">Manage my Account <br></a></li>
					<li><a href="http://localhost/Vivah.com/searchPartner.php">find partners <br></a></li>
					<li><a href="http://localhost/Vivah.com/logout.php">Logout</a></li>
				</ul>
			</div>

			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6 col-md-offset-3" id="form">
						<center><b class="registration">Update Information</b></center>
						<form action="updateAccount.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>First Name:</label>
							<input type="text" name="first_name" value ="<?php echo $result['first_name'] ?>" required class="form-control text">
						</div>
						<div class="form-group">
							<label>Last Name:</label>
							<input type="text" name="last_name" value ="<?php echo $result['last_name'] ?>" required class="form-control text">
						</div>
					
						<div class="form-group">
							<label>Age</label>
							<input type="text" name="age" value ="<?php echo $result['age'] ?>" required class="form-control text"/>
						</div>

						<div class="form-group">
							<label>Update Address</label>
							<textarea class="form-control" rows="6" placeholder="Enter new address" name="address" required ></textarea>
						</div>

						<div class="form-group">
							<label>City</label>
							<input type="text" name="city" value ="<?php echo $result['city'] ?>" required class="form-control text"/>
						</div>

						<div class="form-group">
							<label>State</label>
							<input type="text" name="state" value ="<?php echo $result['state'] ?>" required class="form-control text"/>
						</div>

						<div class="form-group">
							<label>Pincode</label>
							<input type="text" name="pincode" value ="<?php echo $result['pincode'] ?>" required class="form-control text"/>
						</div>

						<div class="form-group">
							<label>Country</label>
							<input type="text" name="country" value ="<?php echo $result['country'] ?>" required class="form-control text"/>
						</div>

						<div class="form-group">
							<label>Contact Number</label>
							<input type="text" name="contact_no" value ="<?php echo $result['contact_no'] ?>" required class="form-control text"/>
						</div>

						<div class="form-group">
							<label>Photo</label>
							<input type="file" name="image" value ="<?php echo $result['photo'] ?>" class="form-control text" />
						</div>

						<div class="form-group">
							<input type="submit" id="submit" value="Update" name="update" class="btn btn-primary" />
							
						</div>

						</form>
					</div>
			
				</div>
				
			</div>
			
		</div>
	</div>
		
	<footer class="footer">
			Copyright &copy; Hrishikesh 2017
	</footer>

</body>
</html>
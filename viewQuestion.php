<?php 
	include("./db/connection.php");
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/adminLogin.php');
	if($_SESSION['username'] != "admin")
		header('location:http://localhost/Vivah.com/index.html');

 ?>

 <?php 

	$query = mysqli_query($con,"SELECT * FROM question");
	$info = mysqli_fetch_array($query);

	$user_id = $info['user_id'];

	$query = mysqli_query($con,"SELECT * FROM user WHERE user_id='$user_id'");
	$resultUser = mysqli_fetch_array($query);


  ?>




 <!DOCTYPE html>
<html>
<head>
	<title>User Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="./css/layout.css">
	<link rel="stylesheet" type="text/css" href="./css/theme.css" />
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<!--top fixed navigation bar-->
	<div class="container">
		<div class="page-header header">
      		<div class="row">
      		<div class="col-md-4 offset-md-8">
      			<a class="navbar-brand" href="http://localhost/Vivah.com/index.html">Vivah</a>
        
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
					<li><a href="http://localhost/Vivah.com/approveAccountList.php">Approve the new Accounts <br></a></li>
					<li><a href="http://localhost/Vivah.com/existingUsers.php">Existing registered users <br></a></li>
					<li><a href="http://localhost/Vivah.com/helpSection.php">User's Queries<br></a></li>
					<li><a href="http://localhost/Vivah.com/logout.php">Logout</a></li>
				</ul>
			</div>

			<div class="col-md-8">

				<div class="row">
					<div class="col-md-12">
						<table class="table table-dark">
							<thead class="thead-dark">
							<tr>
								<th>Topic</th>
								<th>Query</th>
							</tr>
							</thead>									
							<tr>
								<td><?php echo $info['subject']?> </td>
								<td><?php echo $info['question'] ?></td>
							</tr>
						</table>
					</div>
				</div>
				<hr><hr>

				<div class="row">
					<div class="col-md-12">
						<table class="table table-dark">
							<tr>
								<td><label>Name</label></td>
								<td><?php echo $resultUser['first_name'] ." ". $resultUser['last_name'] ?></td>
							</tr>
							<tr>
								<td><label>Gender</label></td>
								<td><?php echo $resultUser['gender'] ?></td>
							</tr>
							<tr>
								<td><label>Contact Number</label></td>
								<td><?php echo $resultUser['contact_no'] ?></td>
							</tr>
							<tr>
								<td><label>Looking For</label></td>
								<td><?php echo $resultUser['looking_for'] ?></td>
							</tr>

							<tr>
								<td><label>Address</label></td>
								<td><?php echo $result['address'] ." ".$resultUser['state']." ". $resultUser['city']. "-". $resultUser['pincode']. " ". $resultUser['country']; ?></td>
							</tr>


						</table>
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
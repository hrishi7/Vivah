<?php 
	include("./db/connection.php");
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/adminLogin.php');
	if($_SESSION['username'] != "admin")
		header('location:http://localhost/Vivah.com/index.php');

 ?>

 <?php
 //getting all information of user using user id 
 $query = mysqli_query($con,"SELECT * from user WHERE approve ='yes'");
 $numrows = mysqli_num_rows($query);

 ?>

 <!DOCTYPE html>



 <!DOCTYPE html>
<html>
<head>
	<title>User Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style type="text/css">
		.links a{
			text-align: center;
		}
		.link-user{
			margin-top: 141px;
		}
		.footer{
			text-align: center;
			background-color: black;
			font-size: 25px;
			margin-bottom: 10px;
			color: #ecf0f1;
		}
		.main-contain{
		background-color: #f2f2f2;
		margin-top: 10px;
		margin-bottom: 20px;
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
	<div class="container" style="min-height: 450px;">
		<div class="row main-contain">
			<div class="col-md-2">
				<h1 style="text-align: center;">Menu</h1>
				<ul class="nav nav-pills nav-stacked links link-user">
					<li><a href="http://localhost/Vivah.com/approveAccountList.php">Approve the new Accounts <br></a></li>
					<li><a href="http://localhost/Vivah.com/existingUsers.php">Existing registered users <br></a></li>
					<li><a href="http://localhost/Vivah.com/helpSection.php">User's Queries<br></a></li>
					<li><a href="http://localhost/Vivah.com/logout.php">Logout</a></li>
				</ul>
			</div>

			<div class="col-md-10">

				<div class="row" style="text-align: center;">
					<div class="col-md-12">
						<h1>Existing Registered Users of the website</h1>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<table class="table">
							<tr>
								<th>Profile Pic</th>
								<th>Username</th>
								<th>Gender</th>
								<th>Looking For</th>
								<th>Complexion</th>
								<th>Address</th>
								<th>Contact No</th>
								<th>View Information</th>
								<th>Delete Account</th>
							</tr>

<?php  
							for ($i=1; $i <= $numrows; $i++)
							{ 
								$result = mysqli_fetch_array($query);
								$user_id = $result['user_id'];
								$img = $result['photo'];
?>
								
									<tr>
										<td><?php echo "<img src='images/$img' style='height:40px; width:40px;'/>" ?></td>
										<td><?php echo $result['username']  ?></td>	
										<td><?php echo $result['gender']  ?> </td>
										<td><?php echo $result['looking_for']  ?> </td>
										<td><?php echo $result['complexion']  ?> </td>
										<td style="width: 100px;"><?php echo $result['address'] ." ".$result['state']." ". $result['city']. "-". $result['pincode']. " ". $result['country']; ?> </td>
										<td><?php echo $result['contact_no']  ?></td>

										<form action="http://localhost/Vivah.com/viewAccount.php" method="POST">
											<td><input type="submit" name="view" value="View" class="btn btn-success"></a></td>

											<input type="hidden" name="fromPage" value="existingUser">
											<input type="hidden" name="user_id" value="<?php echo $result['user_id'] ?>">
										</form>

										<form action="http://localhost/Vivah.com/deleteAndUpdateAccount.php" method="POST">
											<td><input type="submit" name="delete" value="Delete account" class="btn btn-danger"></a></td>

											<input type="hidden" name="user_id" value="<?php echo $result['user_id'] ?>">
										</form>
									</tr>
								

<?php
							}


?>

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
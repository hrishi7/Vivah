<?php 
	include("./db/connection.php");
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/adminLogin.php');
	if($_SESSION['username'] != "admin")
		header('location:http://localhost/Vivah.com/index.php');

	$query = mysqli_query($con,"SELECT * from user where approve='no' && deleted='no'");
	$numrows = mysqli_num_rows($query);
	

 ?>


 <!DOCTYPE html>
<html>
<head>
	<title>User Home</title>
	<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
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
					<div class="col-md-12" style="text-align: center;">
						<h3>Pending accounts To confirm</h3><br>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<table class="table table-hovered">
							<tr>
								<th>User Id</th>
								<th>Name</th>
								<th>Gender</th>
								<th>View Profile</th>
							</tr>
<?php  
							for ($i=1; $i <= $numrows; $i++)
							{ 
								$info = mysqli_fetch_array($query);
								$user_id = $info['user_id'];
?>
								<form action="http://localhost/Vivah.com/viewAccount.php" method="POST">
									<tr>
										<td><?php echo $user_id  ?></td>	
										<td><?php echo $info['first_name'] ?> </td>
										<td><?php echo $info['gender']?> </td>
										<input type="hidden" name="user_id" value="<?php echo $info['user_id'] ?>">
										<td><input type="submit" value="view" class="btn btn-success"></td>
									</tr>
								</form>
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
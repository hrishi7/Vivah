<?php 
	include("./db/connection.php");
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/adminLogin.php');
	if($_SESSION['username'] != "admin")
		header('location:http://localhost/Vivah.com/index.php');

 ?>

 <?php 
 	$query = mysqli_query($con,"SELECT * FROM question");
 	$numrows = mysqli_num_rows($query);


  ?>



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
						<h1>List of Queries</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-hovered">
							<tr>
								<th>Question Id</th>
								<th>user</th>
								<th>Topic</th>
								<th>Query</th>
								<th>Details</th>
							</tr>

<?php  
							for ($i=1; $i <= $numrows; $i++) 
							{ 
								$info = mysqli_fetch_array($query);
								$user_id = $info['user_id'];
								//get the username
								$query = mysqli_query($con,"SELECT username FROM user WHERE user_id='$user_id'");
								$result = mysqli_fetch_array($query);
								$username = $result['username'];
?>
							<form action="http://localhost/Vivah.com/viewQuestion.php" method="POST">
							<tr>
								<td><?php echo $info['question_id']  ?></td>	
								<td><?php echo $username ?> </td>
								<td><?php echo $info['subject']?> </td>
								<td><?php echo $info['question'] ?></td>
								<td><input type="submit" value="Details" class="btn btn-primary"></td>
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
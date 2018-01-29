<?php 
	include("./db/connection.php");
	$user_id = $_POST['user_id'];
	$fromPage = $_POST['fromPage'];

	//session checking
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/adminLogin.php');
	if($_SESSION['username'] != "admin")
		header('location:http://localhost/Vivah.com/index.php');

 ?>
 <?php
 //getting all information of user using user id 
 $query = mysqli_query($con,"SELECT * from user WHERE user_id='$user_id'");
 $result = mysqli_fetch_array($query);
 $img = $result['photo'];


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
		label{
			font-size: 20px;
		}
	</style>
</head>
<body>
	<!--top fixed navigation bar-->
	<div class="container" >
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
					<div class="col-md-5">
						<hr>
						<label>User:</label><?php echo $result['first_name'] ." ". $result['last_name'];?>
						<?php echo "<img src='images/$img' class='img-responsive'/>" ?>
					</div>
					<div class="col-md-7">
						<hr>
						<label>Username:</label> <?php echo $result['username']  ?><br>
						<label>Gender:</label> <?php echo $result['gender']  ?><br>
						<label>Looking for:</label> <?php echo $result['looking_for']  ?><br>
						<label>Complexion:</label> <?php echo $result['complexion']  ?><br>
						<label>Address:</label> <?php echo $result['address']  ?><br>
						<label>Contact Number:</label> <?php echo $result['contact_no']  ?><br>
					</div>
				</div>
				<hr>

				<div class="row">
					<div class="col-md-12">
<?php 					if($fromPage != "existingUser") 
						{
?>
						<a href="http://localhost/Vivah.com/approveSuccesfull.php?id=<?php echo $user_id ?>"><input type="submit" value="Approve this account" class="btn btn-sucess"></a>
						<input type="submit" value="Don't Approve" class="btn btn-sucess" >
<?php
						}
						else
 ?>
							<br><a href="http://localhost/Vivah.com/existingUsers.php">Back To User's List</a>
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
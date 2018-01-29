<?php 
	include("./db/connection.php");
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/userLogin.php');
	if($_SESSION['username'] == "admin")
		header('location:http://localhost/Vivah.com/index.php');
	$username = $_SESSION['username'];

	$query = mysqli_query($con,"SELECT * FROM user WHERE username='$username'");
	$result = mysqli_fetch_array($query);
	$img = $result['photo'];
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
					<li><a href="http://localhost/Vivah.com/interestProfile.php">See Who Interested in you! <br></a></li>
					<li><a href="http://localhost/Vivah.com/logout.php">Logout</a></li>
				</ul>
			</div>

			<div class="col-md-8">
				<div class="jumbotron user-info">
					<h2> Hello <?php echo $result['first_name']. " " .$result['last_name'] ; ?></h2>
					<?php echo "<img src='images/$img' />" ?>
				<p>
					Welcome to Your Homepage , <?php echo $result['first_name'] ?>
				</p>
					
				</div>
				
			</div>
			
		</div>
	</div>
		
	<footer class="footer">
			Copyright &copy; Hrishikesh 2017
	</footer>

</body>
</html>
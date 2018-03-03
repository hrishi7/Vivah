<?php 
	include("./db/connection.php");
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/userLogin.php');
	if($_SESSION['username'] == "admin")
		header('location:http://localhost/Vivah.com/index.php');



	//getting search profile information
	$username = $_GET['username'];
	$query = mysqli_query($con,"SELECT * FROM user WHERE username='$username'");
	$result = mysqli_fetch_array($query);
	$img = $result['photo'];

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
		
		label{
			font-size: 16px;
		}
		
		
		.footer{
		text-align: center;
		background-color: black;
		font-size: 25px;
		margin-bottom: 10px;
		color: #ecf0f1;
		}
		.viewUser{
			margin-left: auto;
			margin-right: auto;
			margin-top: 10px;
			margin-bottom: 10px;
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
    <div class="container">
    	<div class="row">
    		<div class="col-md-5">
    			<div class="row">
    				<div class="col-md-12">
    					<h3><?php echo $result['first_name']." ".$result['last_name'] ?></h3>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-12">
    					<?php echo "<img src='images/$img' />" ?>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-12">
    					<label>In My Own Words</label><br>
    					<?php echo $result['profile_summary'] ?><br><br>
    				</div>
    			</div>
    			
    		</div>
    		<div class="col-md-7">
    			<div class="row">
    				<div class="col-md-12" style="font-size: 20px;font-weight: 500px;">
    					<?php echo $result['age'] ?>&nbsp years &nbsp 
						<?php echo $result['height'] ?> &nbsp ft &nbsp <br>
						<?php echo $result['religion'] ?>&nbsp&nbsp&nbsp
						<?php echo $result['caste'] ?><br>
						<?php echo $result['address'] . " " .$result['state']. " " .$result['city']. " " .$result['country'] ?><br>
						<?php echo $result['education'] ?><br>
						<?php echo $result['profession'] ?><br>
    				</div>
    			</div><hr>
    			<div class="row">
    				<div class="col-md-12">
    					<h2>Basic Details</h2>
    					<label>Age:</label> <?php echo $result['age'] ?> &nbsp&nbsp years &nbsp <br>
				    	<label>Height:</label> <?php echo $result['height'] ?> &nbsp ft &nbsp<br>
				    	<label>Weight:</label> <?php echo $result['weight'] ?> &nbsp&nbsp Kg &nbsp
				    	<label>Mother Tounge:</label> <?php echo $result['mother_tounge'] ?><br>
				    	<label>Religion:</label> <?php echo $result['religion'] ?> <br>
				    	<label>Marital Status:</label> <?php echo $result['marital_status'] ?><br>
				    	<label>Education:</label> <?php echo $result['education'] ?><br>
				      	<label>Profession:</label> <?php echo $result['profession'] ?><br>
    				</div>
    			</div><hr>
    			<div class="row">
    				<div class="col-md-12">
    					<h2>Contact Details</h2>
    					<label>Location:</label> <?php echo $result['address'] .$result['state'].$result['city']. $result['country'] ?><br>
    					<label>Contact Number:</label> <?php echo $result['contact_no'] ?><br>
    				</div>
    			</div><hr>
    			
    		</div>
    	</div>
    	
    </div>




    <!--footer part-->
    <footer class="footer">
			Copyright &copy; Hrishikesh 2017
	</footer>

</body>
</html>
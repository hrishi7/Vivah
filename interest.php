<?php 
	date_default_timezone_set('Asia/Kolkata');
	include("./db/connection.php");
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/userLogin.php');
	if($_SESSION['username'] == "admin")
		header('location:http://localhost/Vivah.com/index.php');
	$username = $_SESSION['username'];

	$request_by = $_SESSION['username'];
	$request_to = $_GET['username'];
	$request_date = date("Y-m-d H:i:s");

	$query_exist_check = mysqli_query($con,"SELECT * FROM request WHERE request_to ='$request_to'");

	$num_rows = mysqli_num_rows($query_exist_check);

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
		.btn-primary{
			border-radius: 0px;
			padding: 5px;
			width: 48%;
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
			min-height: 300px;
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


    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12" style="min-height: 350px;">

    			<!-- Main logic has to be written here-->

    			<?php 
    			if($num_rows ==0)
    			{

    	$query = mysqli_query($con,"INSERT INTO request VALUES ('','$request_by','$request_to','$request_date')");
    				if($query)
    					echo "<h4>Dear User You have Successfully Send your interest ....</h4>";
    				else
    					echo "<h4>Sorry !! Unable to Precess The request Please Try Again after Sometimes...</h4>";
    			}
    			else
    				echo "<h4>Sorry !! You Have Already Send interest...</h4>";
    			 ?>


    			<!-- end of main logic-->
    			
    		</div><!--end of col-->
    		
    	</div><!--end of row-->
    	
    </div><!-- end of container fluid-->




    <footer class="footer">
			Copyright &copy; Hrishikesh 2017
	</footer>

</body>
</html>
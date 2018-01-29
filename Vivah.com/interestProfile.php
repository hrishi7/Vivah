<?php 
	include("./db/connection.php");
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/userLogin.php');
	if($_SESSION['username'] == "admin")
		header('location:http://localhost/Vivah.com/index.php');
	$username = $_SESSION['username'];

?>

<?php 
//getting data of interest send profiles

$query_for_request_to = mysqli_query($con,"SELECT * FROM request WHERE request_to ='$username'");
$num_rows = mysqli_num_rows($query_for_request_to);

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
	</div><!-- end of top fixed navigation bar-->

<!-- main list of contain-->
	<div class="row">
		<div class="col-md-12">
			<h4 style="text-align: center;">List Of Persons Who are realy interested in you </h4>
		</div>
	</div><!--end of heading-->



	<?php 
	$query_get_username = mysqli_query($con,"SELECT * FROM request WHERE request_to = '$username'");
	?>
	<hr>
	<?php
	for($i=0; $i<$num_rows;$i++ )
	{
		

		$result_username = mysqli_fetch_array($query_get_username);

		$get_username = $result_username['request_by'];

		$query_get_info = mysqli_query($con,"SELECT * FROM user WHERE username = '$get_username'");

		$get_info = mysqli_fetch_array($query_get_info);

		$img = $get_info['photo'];

?>


	<div class="row">
		<div class="col-md-2" style="text-align: center;">
			<!--image-->
			<?php echo "<img src='images/$img' style='width:60px; height:60px;'/> "  ?>
		</div>
		<div class="col-md-8">
			<!--name and short details-->
			<b><?php echo $get_info['first_name']. " ". $get_info['last_name'] ?>	<br></b>	
			<?php echo $get_info['profile_summary']; ?>
		</div>
		<div class="col-md-2">
			<a href="http://localhost/Vivah.com/resultViewProfileBoot.php?username=<?php echo $get_info['username'] ?>" target="_blank"><button class="bnt-btn-success"> Click here</button></a>
		</div>
	</div>
	<hr>
<?php 
	}
 ?>

<!--end of list-->


		
	<footer class="footer">
			Copyright &copy; Hrishikesh 2017
	</footer>

</body>
</html>
<?php 
	include("./db/connection.php");
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/userLogin.php');
	if($_SESSION['username'] == "admin")
		header('location:http://localhost/Vivah.com/index.php');
	$username = $_SESSION['username'];

 //collecting data 

 if (isset($_POST['search'])) 
 {
 	$min_age = $_POST['min_age'];
 	$max_age = $_POST['max_age'];
 	$min_height = $_POST['min_height'];
 	$max_height = $_POST['max_height'];
 	$marital_status = $_POST['marital_status'];
 	$religion = $_POST['religion'];
 	$mother_tounge = $_POST['mother_tounge'];
 	$caste = $_POST['caste'];
 	$country = $_POST['country'];
 	$state = $_POST['state'];
 	$education = $_POST['education'];

 	$gender_check_query = mysqli_query($con,"SELECT gender FROM user WHERE username='$username'") ;
 	$result_gender_check = mysqli_fetch_array($gender_check_query);
 	$gender = $result_gender_check['gender']; 


 	$query = mysqli_query($con,"SELECT * FROM user WHERE 
 		(age >= '$min_age' OR age <= '$max_age') AND
 		(height >= '$min_height' OR height <= '$max_height') AND
 		marital_status = '$marital_status' AND
 		religion = '$religion' AND
 		mother_tounge = '$mother_tounge' AND
 		caste = '$caste' AND
 		country = '$country' AND
 		state = '$state' AND
 		education = '$education' AND 
 		(approve='yes' OR deleted='no') AND 
 		gender !='$gender' ");

 	$numrows = mysqli_num_rows($query);
 	
 }


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



<?php  
		if($numrows != 0)
		{
				
			for ($i=1; $i <= $numrows; $i++)
			{ 
				$result = mysqli_fetch_array($query);
				if($_SESSION['username']!= $result['username'])
				{			
					$img = $result['photo'];							
?>
					<!--information of search-->
				    <div class="container viewUser">
				      	<div class="row">
				      		<div class="col-md-12">
				      			<h3><?php echo $result['first_name']." ".$result['last_name'] ?></h3>
				      		</div>      		
				      	</div>
				      	<div class="row">
				      		<div class="col-md-4">
				      			<div class="row">
				      				<div class="col-md-6">
				      					<?php echo "<img src='images/$img' />" ?>
				      				</div>
				      				<div class="col-md-6">
				      					<?php echo $result['profile_summary'] ?><br><br>
				      				</div>
				      				
				      			</div>
				      			
				      		</div>
				      		<div class="col-md-8">
				      			<label>Age:</label> <?php echo $result['age'] ?> &nbsp&nbsp years &nbsp
				    			<label>Height:</label> <?php echo $result['height'] ?> &nbsp ft &nbsp<br>
				      			<label>Religion:</label> <?php echo $result['religion'] ?>&nbsp&nbsp&nbsp
				      			<label>Caste:</label> <?php echo $result['caste'] ?><br>
				      			<label>Location:</label> <?php echo $result['address'] .$result['state'].$result['city']. $result['country'] ?><br>
				      			<label>Education:</label> <?php echo $result['education'] ?><br>
				      			<label>Profession:</label> <?php echo $result['profession'] ?><br>
				      			<a href="http://localhost/Vivah.com/resultViewProfileBoot.php?username=<?php echo $result['username'] ?>" target="_blank" class="btn btn-default">View Profile</a>&nbsp&nbsp&nbsp
				      			<a href="http://localhost/Vivah.com/interest.php?username=<?php echo $result['username'] ?>" target="_blank" class="btn btn-primary" style="width: 80px;">Interest</a><br>
				      		</div>		      		
				      	</div>
	    	
	    			</div>
	    			<hr>

<?php 			
				}
				
				else
					echo "<h2 align='center'> Sorry No record matching your choice!!!</h2>";

			}

		}
		else
			echo "<h2 align='center'> Sorry No record matching your choice!!!</h2>";

?>


	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3><a href="http://localhost/Vivah.com/userHome.php">back to homepage</a></h3>
		</div>
	</div>
	</div>

    <footer class="footer">
			Copyright &copy; Hrishikesh 2017
	</footer>

</body>
</html>

	

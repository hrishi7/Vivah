<?php 
	session_start();
	if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/userLogin.php');
	if($_SESSION['username'] == "admin")
		header('location:http://localhost/Vivah.com/index.php');

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
		#form{
			background-color: beige;
			min-height: 700px;
			padding: 5px 40px 40px 40px;
			border-radius: 10px;
		}
		.registration{
			font-size: 42px;
			font-family: Agency FB;
			font-weight: 700;
			border-bottom-style: ridge;
		}
		.text{
			height: 45px;
		}
		label{
			font-size: 16px;
		}
		.btn-primary{
			border-radius: 0px;
			padding: 5px;
			width: 48%;
		}
		.btn-danger{
			border-radius: 0px;
			padding: 5px;
			width: 48%;
			float: right;
		}
		.footer{
		text-align: center;
		background-color: black;
		font-size: 25px;
		margin-bottom: 10px;
		color: #ecf0f1;
		}
		.reg-form{
			margin-top: 10px;
			margin-bottom: 10px;

		}
		.links a{
		text-align: center;
		}
		.link-user{
		margin-top: 141px;
		}
		.age{
			margin-top: 8px;
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
	<div class="container">
		<div class="row main-contain">
			<div class="col-md-4 ">
				<h1 style="text-align: center;">Menu</h1>
				<ul class="nav nav-pills nav-stacked links link-user">
					<li><a href="http://localhost/Vivah.com/myaccount.php">Manage my Account <br></a></li>
					<li><a href="http://localhost/Vivah.com/searchPartner.php">find partners <br></a></li>
					<li><a href="http://localhost/Vivah.com/logout.php">Logout</a></li>
				</ul>
			</div>

			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6 col-md-offset-3" id="form">
					<center><b class="registration">Find pertner</b></center>
					<form action="http://localhost/Vivah.com/searchResultView.php" method="post">
						<div class="form-group age">
							<label>Age</label><br>
							<input type="number" name="min_age" min="18" max="70" style="width: 45%;height: 39px;" />
							&nbspTo 
							<input type="number" name="max_age" min="18" max="70" style="width: 45%;height: 39px; float: right;"/>
						</div>
						<div class="form-group age">
							<label>Height</label><br>
							<input type="number" name="min_height" style="width: 45%;height: 39px;" />
							&nbspTo 
							<input type="number" name="max_height" style="width: 45%;height: 39px; float: right;"/>
						</div>
						<div class="form-group">
							<label>Marital Status</label>
							<input type="radio" name="marital_status" value="never married"> Never Married
							<input type="radio" name="marital_status" value="widowed"> Widowed
							<input type="radio" name="marital_status" value="divorced"> Divorced
						</div>
						<div class="form-group">
						<label>Religion</label>
							<select name="religion" class="form-control text">
								<option value="hindu">Hindu</option>
								<option value="muslim">Muslim</option>
								<option value="christian">Christian</option>
								<option value="sikh">Sikh</option>
								<option value="jain">Jain</option>
							</select>
						</div>
						<div class="form-group">
						<label>Mother Toung</label>
							<select name="mother_tounge" class="form-control text">
								<option value="bengali">Bengali</option>
								<option value="gujarati">Gujarati</option>
								<option value="hindi">Hindi</option>
								<option value="oriya">Oriya</option>
								<option value="punjabi">Punjabi</option>
								<option value="tamil">Tamil</option>
								<option value="urdu">Urdu</option>
							</select>
						</div>
						<div class="form-group">
						<label>Caste</label>
							<select name="caste" class="form-control text">
								<option value="General">General</option>
								<option value="SC">SC</option>
								<option value="ST">ST</option>
								<option value="OBC">OBC</option>
							</select>
						</div>
						<div class="form-group">
							<label>State</label>
							<input type="text" name="state" required class="form-control text"/>
						</div>
						<div class="form-group">
							<label>Country</label>
							<input type="text" name="country" required class="form-control text"/>
						</div>
						<div class="form-group">
						<label>Education</label>
							<select name="education" class="form-control text">
								<option value="10th">10th </option>
								<option value="12th">12th</option>
								<option value="Graduation">Graduation</option>
								<option value="Post Graduation"> Post Graduation</option>
							</select>
						</div>

						

						<div class="form-group">
							<input type="submit" id="submit" value="Search" name="search" class="btn btn-primary" />
							
						</div>

					</form>
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
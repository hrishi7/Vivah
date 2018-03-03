<?php 
	include("./db/connection.php");
	session_start();
	/*if(!isset($_SESSION['username']))
		header('location:http://localhost/Vivah.com/userLogin.php');
	if($_SESSION['username'] == "admin")
		header('location:http://localhost/Vivah.com/index.php');*/
	$username = $_SESSION['username'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Vivah:Online Partner Finding Plateform</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<!--top fixed navigation bar-->
	<div class="navbar  navbar-inverse navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href="http://localhost/Vivah.com/index.php">Vivah</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target  =".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="http://localhost/Vivah.com/userHome.php"><?php  echo  $_SESSION['username'];?></a></li>
            <li class="active"><a href="http://localhost/Vivah.com/index.php">Home</a></li>
            <li><a href="http://localhost/Vivah.com/adminLogin.php">Admin Login <br></a></li>
            <li><a href="http://localhost/Vivah.com/userLogin.php">User Login <br></a></li>
            <li><a href="http://localhost/Vivah.com/signUp.php">New User Registration <br></a></li>
            <li><a href="#">About us</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- end of top fixed navigation bar-->

    <!--main content of the homepage-->

    <div class="container wrapper">
    	<div class="row">
			<div class="col-md-12">
				<div id="myslide" class="carousel-slide">
					
						<ol class="carousel-indicators">
						    <li  data-target="#myslide" data-slide-to="0"></li>
						    <li  data-target="#myslide" data-slide-to="1"></li>
						    <li  data-target="#myslide" data-slide-to="2"></li>
						    <li  data-target="#myslide" data-slide-to="3"></li>
		     			</ol>
					<div class="carousel-inner">
				        <div class="item active">
				          <img src="img/slide1.jpg" class="img-responsive">
				        </div>

				        <div class="item">
				          <img src="img/slide2.jpg" class="img-responsive">
				        </div>

				        <div class="item ">
				          <img src="img/slide3.jpg" class="img-responsive">
				        </div>
				        <div class="item ">
				          <img src="img/slide4.jpg" class="img-responsive">
				        </div>
				    </div>
				        <a class="left carousel-control" href="#myslide" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myslide" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			      				
				</div>
			</div>
		</div>
		<div class="row about">
			<div class="col-md-12">
				<h2>Vivah.com</h2> 
			<p>
				BengaliMatrimony, pioneered by BharatMatrimony, is one of the most trusted matrimony brands. Bengal has always been the cultural epicentre of the country, and boasts of a wedding culture that is rich in heritage and tradition. A Bengali wedding includes several rituals, spread over a few days. The wedding begins with the Kabin ceremony and comes to a close with the Bou Bhat ceremony.During the Kabin ceremony, the marriage of the bride and groom is officially registered. Bou Bhat is the wedding reception usually hosted by the groom's side and involves dinner and dance.
				User Registration is free. So join now and find your partner we will help you in your finding with all our possibilities we can.
			</p>
				
			</div>			
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<ul class="nav nav-pills nav-stacked links">
					<li><a href="#">About us</a></li>
					<li><a href="#">servies</a></li>
					<li><a href="#">Enquiry</a></li>
					<li><a href="#">Contact us</a></li>
				</ul>
				
			</div>
			<div class="col-md-6">
				<p>
					BengaliMatrimony, pioneered by BharatMatrimony, is one of the most trusted matrimony brands. Bengal has always been the cultural epicentre of the country, and boasts of a wedding culture that is rich in heritage and tradition. A Bengali wedding includes several rituals, spread over a few days. The wedding begins with the Kabin ceremony and comes to a close with
				</p>
				<h2>Address</h2>
				<p>
					BengaliMatrimony, pioneered by BharatMatrimony, is one of the most trusted matrimony brands. Bengal has always been the cultural epicentre of the country,
				</p>
			</div>

			
		</div>
		</div>

		<footer class="footer">
			Copyright &copy; Hrishikesh 2017
		</footer>
    	
    
    <!--end of content of homepage-->



	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>







<!DOCTYPE html>
<html>
<head>
	<title>Vivah:We make the jodi</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="./css/layout.css" />
  	<link rel="stylesheet" type="text/css" href="./css/theme.css" />
 	<!--<link rel="stylesheet" type="text/css" href="./css/login.css" />-->
 	 <script type="text/javascript" src="./js/login.js"></script>
 	 <script type="text/javascript" src="js/bootstrap."></script>

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
    <div class="container wrapper ">
    	<div class="border">
    	<h1 style="margin-left: 47px;margin-top: 20px;">User Login Details</h1>
		<form action="http://localhost/Vivah.com/userValidation.php" method="post">

			<div class="row">
				<div class="col-md-12">
					<label><b>Username</b></label>
				    <input type="text" placeholder="Enter Username" name="username" required><br>
				</div>
				
			</div><br>
			<div class="row">
				<div class="col-md-12">
					<label><b>Password</b></label>
				    <input type="password" placeholder="Enter Password" name="password" required><br>
				</div>
				
			</div>
			 <br>
			<div>
				<div class="col-md-12" button>
					<input type="submit" value="Login" onclick="return loginvalidate()"/>
					<input type="reset" value="Reset"/>
				</div>
			</div>	    
		</form>
		<div id="errormsg"></div>
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





<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/registration.js" ></script>
	<style type="text/css">
		body{
			background-color: #f2f2f2;
		}
		#form{
			background-color: #84e184;
			min-height: 700px;
			padding: 5px 40px 40px 40px;
			border-radius: 10px;
		}
		.registration{
			font-size: 52px;
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
		
	</style>
</head>
<body>
	<div class="container reg-form">
		<div class="row">
		<div class="col-md-6 col-md-offset-3" id="form">
				<center><b class="registration">Registration Form</b></center>
				<form action="doRegistration.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="username" class="form-control text" onkeyup="checkname(this.value)"><span id="spanmsg"></span>
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" placeholder="Enter Password" required class="form-control text">
					</div>
					<div class="form-group">
						<label>First Name:</label>
						<input type="text" name="first_name" placeholder="First Name" required class="form-control text">
					</div>
					<div class="form-group">
						<label>Last Name:</label>
						<input type="text" name="last_name" placeholder="Last Name" required class="form-control text">
					</div>
					<div class="form-group">
						<label>Gender</label>
						<input type="radio" name="gender" value="Male"> Male
						<input type="radio" name="gender" value="Female" > FeMale
					</div>
					<div class="form-group">
						<label>Looking For</label> 
						<input type="radio" name="looking_for" value="Male"> Male
						<input type="radio" name="looking_for" value="Female"> FeMale
					</div>
					<div class="form-group">
						<label>Height</label>
						<input type="text" name="height" placeholder="ft" required class="form-control text"/>
					</div>
					<div class="form-group">
						<label>Weight</label>
							<input type="text" name="weight" placeholder="Kg" required class="form-control text"/>
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
						<label>Caste</label>
						<select name="caste" class="form-control text">
							<option value="General">General</option>
							<option value="SC">SC</option>
							<option value="ST">ST</option>
							<option value="OBC">OBC</option>
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
						<label>Complexion</label>			
						<select name="complexion" class="form-control text">
							<option value="Fair">Fair</option>
							<option value="Medium">Medium</option>
							<option value="Dark">Dark</option>
						</select>
					</div>

					<div class="form-group">
						<label>Age</label>
						<input type="number" name="age" min="18" max="70" placeholder="* Minimum Age 18" class="form-control text" />
					</div>

					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" rows="6" placeholder="Enter Full Address" name="address"></textarea>
					</div>

					<div class="form-group">
						<label>City</label>
						<input type="text" name="city" required class="form-control text"/>
					</div>

					<div class="form-group">
						<label>State</label>
						<input type="text" name="state" required class="form-control text"/>
					</div>

					<div class="form-group">
						<label>Pincode</label>
						<input type="text" name="pincode" required class="form-control text"/>
					</div>

					<div class="form-group">
						<label>Country</label>
						<input type="text" name="country" required class="form-control text"/>
					</div>

					<div class="form-group">
						<label>Contact Number</label>
						<input type="text" name="contact_no" required class="form-control text"/>
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
						<label>Profession</label>
							<select name="profession" class="form-control text">
								<option value="Student">Student </option>
								<option value="Working">Working</option>
								<option value="Not Working">Not Working</option>
							</select>
					</div>

					<div class="form-group">
						<label>Photo</label>
						<input type="file" name="image" />
					</div>

					<div class="form-group">
						<label>Describe Yourself</label>
						<textarea class="form-control" rows="6" placeholder="Description about Yourself" name="profile_summary"></textarea>
					</div>

					<div class="form-group">
						<input type="submit" id="submit"  disabled value="Register" onclick="return uservalidate()" name="register" class="btn btn-primary" />
					<input type="reset" value="Reset" class="btn btn-danger" />
						
					</div>


				</form>
			</div>
			
		</div>
		<div id="errormsg"></div>
	</div>

	<footer class="footer">
			Copyright &copy; Hrishikesh 2017
	</footer>

</body>
</html>
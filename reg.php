<?php require_once "autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create an account</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<?php
	//Reg form set
	if(isset($_POST['reg'])){
		//Get Values
		$name = $_POST['name'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		if(isset($_POST['gender'])){
			$gender = $_POST['gender'];
		}else{
			$gender = NULL;
		}


		//Make hash pass
		$hash_pass = passhash($pass);

		/**
		 * Validation
		 */
		if(empty($name) || empty($email) || empty($cell) || empty($username) || empty($hash_pass) || empty($gender)){

			$msg = validate("All fileds are required");

		}else if(emailCheck($email)==false){
			$msg = validate("Invalid Email Address");

		}else if(cellcheck($cell)==false){
			$msg = validate("Invalid Phone Number");

		}else if(passCheck($pass, $cpass)==false){
			$msg = validate("Confirm Password Does't Match","warning");

		}else if(dataCheck('users','email', $email)==false){
			$msg = validate("Email Already Exist","warning");

		}else if(dataCheck('users','cell', $cell)==false){
			$msg = validate("Cell Already Exist","warning");

		}else if(dataCheck('users','username', $username)==false){
			$msg = validate("Username Already Exist","warning");

		}else{

			create("INSERT INTO users (name,email,cell,username,password,gender)VALUES('$name','$email','$cell','$username','$hash_pass','$gender')");
			$msg = validate('You Registration Successfull','success');

			formClean();


		}


	}

	?>
	

	<div class="wrap shadow-sm">
		<div class="card">
			<div class="card-body">
				<h2>Create an account</h2>
				<?php if(isset($msg)){
					echo $msg;
				} ?>
				<hr>
				<form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text" value="<?php old('name');?>">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text" value="<?php old('email');?>">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text" value="<?php old('cell');?>">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="username" class="form-control" type="text" value="<?php old('username');?>">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input name="pass" class="form-control" type="password">
					</div>
					<div class="form-group">
						<label for="">Confirm Password</label>
						<input name="cpass" class="form-control" type="password">
					</div>
					<div class="form-group">
						<label for="">Gender</label> <br>
						<input type="radio" value="Male" name="gender" id="Male"><label for="Male">Male</label>
						<input type="radio" value="Female" name="gender" id="Female"><label for="Female">Female</label>
					</div>
					
					<div class="form-group">
						<input name="reg" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
				<hr>
				<a href="index.php">Log In</a>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
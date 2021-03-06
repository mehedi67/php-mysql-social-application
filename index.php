<?php require_once "autoload.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<?php

	if(isset($_POST['signup'])){
		//get values
		$login = $_POST['login'];
		$pass = $_POST['password'];

		if(empty($login) || empty($pass)){
			$msg = validate("All fields are required");

		}else{
			$login_user_data = authCheck('users','email',$login);

			if($login_user_data !== false){

				if(passwordCheck($pass,$login_user_data->password)){

					$_SESSION['id']= $login_user_data->id; 
					$_SESSION['name']= $login_user_data->name; 
					$_SESSION['email']= $login_user_data->email; 
					$_SESSION['cell']= $login_user_data->cell; 
					$_SESSION['gender']= $login_user_data->gender; 


					header('location:profile.php');
				}else{
					$msg = validate("Incorrect Password!",'warning');
				}

			}else{
				$msg = validate("Invalid login email");
			}

		}

	}


	?>
	

	<div class="wrap shadow-sm">
		<div class="card">
			<div class="card-body">
				<h2>Login </h2>
				<?php
					if(isset($msg)){
						echo $msg;
					}
				?>
				<hr>
				<form action="" autocomplete="off" method="POST">
					<div class="form-group">
						<label for="">Login info</label>
						<input name="login" class="form-control" type="text" placeholder="Email or Cell or Username" value="<?php old('login')?>">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input name="password" class="form-control" type="password" placeholder="Password">
					</div>
					<div class="form-group">
						<input name="signup" class="btn btn-primary" type="submit" value="Log In">
					</div>
					
				</form>
				<hr>
				<a href="reg.php">Create an account</a>
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
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
	
	
	<nav class="profile-menu bg-light py-2 shadow-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-2">
					<ul class=" nav nav-tab d-flex justify-content-center">
						<li class="nav-item"><a class="nav-link" href="#">My Profile</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Friends</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Edit Profile</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Password Change</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<section class="user-profile w-25 m-auto pt-5">
		<?php if($_SESSION['gender']== 'Male') : ?>
		<img class=" w-50 shadow-sm rounded mx-auto d-block " src="assets/media/img/m.png" alt="">
		<?php else : ?>
		<img class=" w-50 shadow-sm rounded mx-auto d-block " src="assets/media/img/f.jpg" alt="">
		<?php endif; ?>

		<h3 class="text-center display-4 py-4"><?php echo $_SESSION['name']; ?></h3>

		<div class="card shadow p-2">
			<div class="card-body">
				<table class="table table-striped table-bordered ">
					<tr>
						<td>Name</td>
						<td><?php echo $_SESSION['name']; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $_SESSION['email']; ?></td>
					</tr>
					<tr>
						<td>Cell</td>
						<td><?php echo $_SESSION['cell']; ?></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><?php echo $_SESSION['gender']; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</section>

	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
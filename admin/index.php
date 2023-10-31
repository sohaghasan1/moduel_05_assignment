<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Sign In</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Welcome back, Charles</h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="img/avatars/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
									<form method="POST">
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
										</div>
										<div class="text-center mt-3">
											<input type="submit" class="btn btn-primary" value="Login" name="submit">
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>
									
									<p>Don't have any account, <a href="sign-up.php">Sign Up</a></p>

									<?php 
										if(isset($_POST['submit'])){
										$get_email		=	$_POST['email'];
										$get_password 	= sha1($_POST['password']);
											// echo sha1(1234);
										$fp = fopen("./include/db.txt", "r");
										$email = array();
										$name = array();
										$pass = array();
										$role = array();
										$single_data = array();
										while($data = fgets($fp)){
											$single_data = explode(",", $data);
											array_push($role, trim($single_data[0]));
											array_push($name, trim($single_data[1]));
											array_push($email, trim($single_data[2]));
											array_push($pass, trim($single_data[3]));
										}
										
										for($i = 0; $i<count($email); $i++){
											if($email[$i] == $get_email AND $pass[$i] == $get_password){
												session_start();
												$_SESSION['role'] = $role[$i];
												$_SESSION['name'] = $name[$i];
												$_SESSION['email'] = $email[$i];
												header("location:dashboard.php");
											}else{
												echo "wrong email and password";
											}
										}

									


									}
										
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>


id 
name 
email 
phone 
password
address 
designation 
description  
gender 
role 
status 
fb 
twitter 
linkedin 
image
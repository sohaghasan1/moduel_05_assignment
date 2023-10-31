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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Sign Up | AdminKit Demo</title>

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
							<h1 class="h2">Get started</h1>
							<p class="lead">
								Start creating the best possible user experience for you customers.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="POST">
										<div class="mb-3">
											<label class="form-label">Name</label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" />
										</div>
									
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
										</div>
										<div class="text-center mt-3">
											<!-- <a href="" class="">Sign up</a> -->
											<button type="submit" name="submit" class="btn btn-lg btn-primary">Sign up</button>
										</div>
									</form>

									<?php 
										if(isset($_POST['submit'])){
										$name 		=	$_POST['name'];
										$email 		=	trim($_POST['email']);
										$password 	=	sha1($_POST['password']);
										$role = "user";
										$fp = fopen("./include/db.txt", "r");
										$emails = array();
										$trimed_data = "";
										while($line = fgets($fp)){
											$data = explode(",", $line);
											array_push($emails, trim($data[2]));
										}

										if(in_array($email, $emails)){
											echo "$email is already exist. try again with another email";
										}else{
											fclose($fp);
											$open_file = fopen("./include/db.txt", "a");
											$input_data = fwrite($open_file, "$role, $name, $email, $password \n");
											if($input_data){
												echo "SignUp successfully done. <br> Signin From <a href='index.php' class='btn btn-primary'>Singin</a>";
											}
										}
										
										}
									?>
								</div>
								<a href="index.php" class="btn btn-dark">Back</a>
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
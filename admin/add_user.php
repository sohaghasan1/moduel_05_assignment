<?php 
	include('include/header.php');
	if( $_SESSION['role'] != 'admin'){
		header('Location:dashboard.php');
	}
?>

		<div class="main">
			<!-- top header inlcude -->
			<?php include('include/top_header.php')?>
			<!-- top header inlcude -->

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Add a new user</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Add user</h5>
								</div>
								<div class="card-body">

		<!-- <form action="" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<input type="text" name="name" placeholder="Name" class="form-control mb-3">
					<input type="email" name="email" placeholder="Email Address" class="form-control mb-3">
					<input type="text" name="phone" placeholder="Phone Number" class="form-control mb-3">
					<input type="password" name="password" placeholder="Password" class="form-control mb-3">
					<select name="gender" id="" class="form-control mb-3">
						<option value="">Select Gender</option>
						<option value="1">Male</option>
						<option value="2">Female</option>
					</select>
					<select name="role" id="" class="form-control mb-3">
						<option value="">Select Role</option>
						<option value="1">Admin</option>
						<option value="2">Editor</option>
						<option value="3">Author</option>
					</select>
					<select name="status" id="" class="form-control mb-3">
						<option value="">Select Status</option>
						<option value="1">Active</option>
						<option value="2">Inactive</option>
					</select>
					<input type="text" name="address" placeholder="address" class="form-control mb-3">

				</div>
				<div class="col-md-6">
					<input type="text" name="desig" placeholder="Desgnation" class="form-control mb-3">
					<input type="text" name="fb" placeholder="Facebook" class="form-control mb-3">
					<input type="text" name="linkedin" placeholder="Linkedin" class="form-control mb-3">
					<textarea name="desc" class="form-control mb-3" id="" placeholder="Description" cols="30" rows="6"></textarea>
					<input type="file" name="image" class="mb-3"> <br>
					<input type="submit" name="submit" class="btn btn-primary mb-3" value="Add User">
				</div>
			</div>
		</form> -->


		<?php 
			if(isset($_POST['submit'])){
				$name 			=	$_POST['name'];
				$email 			=	$_POST['email'];
				$phone 			=	$_POST['phone'];
				$password 		= 	sha1($_POST['password']);
				$gender 		=	$_POST['gender'];
				$role 			=	$_POST['role'];
				$status 		=	$_POST['status'];
				$address 		=	$_POST['address'];
				$desig 			=	$_POST['desig'];
				$fb 			=	$_POST['fb'];
				$linkedin 		=	$_POST['linkedin'];
				$desc 			=	$_POST['desc'];
				$image 			=	$_FILES['image']['name'];

				$temp_location 	= $_FILES['image']['tmp_name'];

				move_uploaded_file($temp_location, 'img/uploads/users/'.$image);





				$insert = "INSERT INTO user (name, email,phone, password, address, designation, description, gender, role, status, fb, linkedin, image) VALUES ('$name', '$email', '$phone', '$password', '$address', '$desig', '$desc', '$gender', '$role', '$status', '$fb', '$linkedin', '$image')";

				$insert_query = mysqli_query($db, $insert);
				
			}
		?>





								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

		
	<!-- footer inlcude  -->
	<?php include('include/footer.php')?>
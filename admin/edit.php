<?php 
	include('include/header.php');
    $the_email = "";
    if(isset($_GET['email'])){
        $the_email = trim($_GET['email']);
    }

    if(isset($_POST['submit'])){
        $user_role =   $_POST['role'];
         $fp = fopen("./include/db.txt", "r");
            $string = "";
         while($lines = fgets($fp)){
          $user_data =  explode(",", $lines);
            // echo $the_email;
          if(trim($user_data[2]) == $the_email){
            $user_data[0] = $user_role;
            $string .= $user_data[0].",". $user_data[1] . "," . $user_data[2] . "," . $user_data[3];
          }else{
            $string .= "$lines";
          }
         }

         fclose($fp);
         $file_opener = fopen("./include/db.txt", "w");
         $update = fwrite($file_opener, $string);
         fclose($file_opener);
         header("Location:user.php");

        }
?>

		<div class="main">
			<!-- top header inlcude -->
			<?php include('include/top_header.php')?>
			<!-- top header inlcude -->

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Edit Page</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Edit</h5>
								</div>
								<div class="card-body">
									<!-- write content from here -->
                                    
                                    <form action="" method="POST">
                                       <label for="">Change User Role</label>
                                       <select name="role" class="form-control mb-3" id="">
                                        <option value="">Select Option</option>
                                        <option value="admin">Admin</option>
                                        <option value="editor">Editor</option>
                                        <option value="manager">Manager</option>
                                       </select>
                                       <input type="submit" value="Change Role" name="submit" class="btn btn-primary">
                                    </form>

                                    <?php 
                                  
                                    ?>


								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

		
	<!-- footer inlcude  -->
	<?php include('include/footer.php')?>
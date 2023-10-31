<?php 
	include('include/header.php');
	if( $_SESSION['role'] == 'user'){
		header('Location:dashboard.php');
	}
?>

		<div class="main">
			<!-- top header inlcude -->
			<?php include('include/top_header.php')?>
			<!-- top header inlcude -->

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">All Post</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Post</h5>
								</div>
								<div class="card-body">
									<!-- write content from here -->

                                    <div class="row">
						<div class="col-md-12">
						<table class="table">
						<thead>
							<tr>
							<th scope="col">#</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Handle</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							</tr>
							<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
							</tr>
							<tr>
							<th scope="row">3</th>
							<td colspan="2">Larry the Bird</td>
							<td>@twitter</td>
							</tr>
						</tbody>
						</table>
						</div>
					</div>


								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

		
	<!-- footer inlcude  -->
	<?php include('include/footer.php')?>
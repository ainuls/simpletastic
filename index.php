<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'component/head.php';?>
</head>
<body>
	<div id="wrapper">
		<?php include 'component/sidebar.php';?>
		<div id="body">
			<?php include 'component/topbar.php';?>
			<div class="container-fluid" id="content">
				<div class="row">
					<div class="col-12 col-lg-6 col-xl-3">
						<div class="widget">
							<div class="body">
								<div class="title">Monthly Sales</div>
								<div class="content"><h5 class='d-inline'>$1,500,450</h5><i class="icon-arrow-up-circle text-success ml-2"></i></div>
							</div>
							<div class="icon"><i class="icon-graph"></i></div>
						</div>
					</div>
					<div class="col-12 col-lg-6 col-xl-3">
						<div class="widget">
							<div class="body">
								<div class="title">Total Hours</div>
								<div class="content"><h5 class='d-inline'>240.5</h5><i class="icon-arrow-down-circle text-danger ml-2"></i></div>
							</div>
							<div class="icon"><i class="icon-clock"></i></div>
						</div>
					</div>
					<div class="col-12 col-lg-6 col-xl-3">
						<div class="widget">
							<div class="body">
								<div class="title">Total Progress</div>
								<div class="content"><h5 class='d-inline'>85.6%</h5><i class="icon-minus text-warning ml-2"></i></div>
							</div>
							<div class="icon"><i class="icon-reload"></i></div>
						</div>
					</div>
					<div class="col-12 col-lg-6 col-xl-3">
						<div class="widget">
							<div class="body">
								<div class="title">Annual Revenue</div>
								<div class="content"><h5 class='d-inline'>$1,856,500,450</h5><i class="icon-arrow-up-circle text-success ml-2"></i></div>
							</div>
							<div class="icon"><i class="icon-trophy"></i></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="card">
							<div class="card-header">Sales</div>
							<div class="card-body px-0 py-0">
								<table class="table table-striped mb-0">
									<thead>
										<tr>
											<th>Product</th>
											<th>Price</th>
											<th>Date</th>
											<th>Status</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Samsung Galaxy S9</td>
											<td>$800</td>
											<td>July 15, 2019</td>
											<td><span class="text-success">Completed</span></td>
											<td><a href="#"><i class="icon-plus text-muted"></i></a></button></td>
										</tr>
										<tr>
											<td>iPhone X</td>
											<td>$1000</td>
											<td>August 19, 2019</td>
											<td><span class="text-warning">Pending</span></td>
											<td><a href="#"><i class="icon-plus text-muted"></i></a></button></td>
										</tr>
										<tr>
											<td>Sony Xperia ZX</td>
											<td>$850</td>
											<td>July 15, 2019</td>
											<td><span class="text-danger">Cancelled</span></td>
											<td><a href="#"><i class="icon-plus text-muted"></i></a></button></td>
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
	<?php include 'component/js.php';?>
</body>
</html>
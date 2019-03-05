<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'component/head.php';?>
	<style>
	.dropdown-show .dropdown-menu{
		display: inline-block;
		position: relative;
		margin-right: 15px;
	}
</style>
</head>
<body>
	<div id="wrapper">
		<?php include 'component/sidebar.php';?>
		<div id="body">
			<?php include 'component/topbar.php';?>
			<div class="container-fluid" id="content">
				<div class="row">
					<div class="col-12">
						<div class="card dropdown-show">
							<div class="card-header">Dropdows</div>
							<div class="card-body">
								<h6 class="card-title mb-2 ml-1">Basic dropdown</h6>
								<div class="d-flex">
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
									<div class="dropdown-menu dropdown-primary">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
									<div class="dropdown-menu dropdown-success">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
									<div class="dropdown-menu dropdown-warning">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
									<div class="dropdown-menu dropdown-danger">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div>

								<h6 class="card-title mb-2 ml-1 mt-5">Dropdown with icon</h6>
								<div class="d-flex">
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#"><i class="icon-user mr-2"></i>Action</a>
										<a class="dropdown-item" href="#"><i class="icon-settings mr-2"></i>Another action</a>
										<a class="dropdown-item" href="#"><i class="icon-question mr-2"></i>Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="icon-power mr-2"></i>Separated link</a>
									</div>
									<div class="dropdown-menu dropdown-primary">
										<a class="dropdown-item" href="#"><i class="icon-user mr-2"></i>Action</a>
										<a class="dropdown-item" href="#"><i class="icon-settings mr-2"></i>Another action</a>
										<a class="dropdown-item" href="#"><i class="icon-question mr-2"></i>Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="icon-power mr-2"></i>Separated link</a>
									</div>
									<div class="dropdown-menu dropdown-success">
										<a class="dropdown-item" href="#"><i class="icon-user mr-2"></i>Action</a>
										<a class="dropdown-item" href="#"><i class="icon-settings mr-2"></i>Another action</a>
										<a class="dropdown-item" href="#"><i class="icon-question mr-2"></i>Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="icon-power mr-2"></i>Separated link</a>
									</div>
									<div class="dropdown-menu dropdown-warning">
										<a class="dropdown-item" href="#"><i class="icon-user mr-2"></i>Action</a>
										<a class="dropdown-item" href="#"><i class="icon-settings mr-2"></i>Another action</a>
										<a class="dropdown-item" href="#"><i class="icon-question mr-2"></i>Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="icon-power mr-2"></i>Separated link</a>
									</div>
									<div class="dropdown-menu dropdown-danger">
										<a class="dropdown-item" href="#"><i class="icon-user mr-2"></i>Action</a>
										<a class="dropdown-item" href="#"><i class="icon-settings mr-2"></i>Another action</a>
										<a class="dropdown-item" href="#"><i class="icon-question mr-2"></i>Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#"><i class="icon-power mr-2"></i>Separated link</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6">
						<div class="card">
							<div class="card-header">Breadcrumbs</div>
							<div class="card-body">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item active" aria-current="page">Home</li>
									</ol>
								</nav>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Library</li>
									</ol>
								</nav>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item"><a href="#">Library</a></li>
										<li class="breadcrumb-item active" aria-current="page">Data</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6">
						<div class="card">
							<div class="card-header">Badges</div>
							<div class="card-body">
								<h5 class="card-title">Basic badges</h5>
								<span class="badge badge-primary">primary</span>
								<span class="badge badge-secondary">secondary</span>
								<span class="badge badge-success">success</span>
								<span class="badge badge-warning">warning</span>
								<span class="badge badge-danger">danger</span>
								<span class="badge badge-info">info</span>

								<h5 class="card-title mt-4">Pill badges</h5>
								<span class="badge badge-pill badge-primary">primary</span>
								<span class="badge badge-pill badge-secondary">secondary</span>
								<span class="badge badge-pill badge-success">success</span>
								<span class="badge badge-pill badge-warning">warning</span>
								<span class="badge badge-pill badge-danger">danger</span>
								<span class="badge badge-pill badge-info">info</span>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6">
						<div class="card">
							<div class="card-header">Pagination</div>
							<div class="card-body">
								<h5 class="card-title">Basic pagination</h5>
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item active"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a></li>
								</ul>

								<h5 class="card-title mt-4">Pagination size</h5>
								<ul class="pagination pagination-sm">
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a></li>
								</ul>
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a></li>
								</ul>
								<ul class="pagination pagination-lg">
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a></li>
								</ul>

								<h5 class="card-title mt-4">Pagination alignment</h5>
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a></li>
								</ul>
								<ul class="pagination justify-content-center">
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a></li>
								</ul>
								<ul class="pagination justify-content-end">
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-left"></i></a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#"><i class="icon-arrow-right"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6">
						<div class="card">
							<div class="card-header">Progress Bar</div>
							<div class="card-body">
								<div class="progress mb-3">
									<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-3">
									<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-3">
									<div class="progress-bar bg-pp]" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-3">
									<div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress mb-3">
									<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
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
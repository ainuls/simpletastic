<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'component/head.php';?>
	<style>
		.box{
			border: 3px dashed grey;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 60px 0;
			margin-bottom: 20px;
			text-align: center;
			font-size: 1.3em;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<?php include 'component/sidebar.php';?>
		<div id="body">
			<?php include 'component/topbar.php';?>
			<div class="container-fluid" id="content">
				<h4 class="mb-4">Bootstrap Grids</h4>
				<div class="row">
					<div class="col-12 col-sm-2">
						<div class="box text-muted">.col-2</div>
					</div>
					<div class="col-12 col-sm-2">
						<div class="box text-muted">.col-2</div>
					</div>
					<div class="col-12 col-sm-2">
						<div class="box text-muted">.col-2</div>
					</div>
					<div class="col-12 col-sm-2">
						<div class="box text-muted">.col-2</div>
					</div>
					<div class="col-12 col-sm-2">
						<div class="box text-muted">.col-2</div>
					</div>
					<div class="col-12 col-sm-2">
						<div class="box text-muted">.col-2</div>
					</div>
					<div class="col-12 col-sm-3">
						<div class="box text-muted">.col-3</div>
					</div>
					<div class="col-12 col-sm-3">
						<div class="box text-muted">.col-3</div>
					</div>
					<div class="col-12 col-sm-3">
						<div class="box text-muted">.col-3</div>
					</div>
					<div class="col-12 col-sm-3">
						<div class="box text-muted">.col-3</div>
					</div>
					<div class="col-12 col-sm-4">
						<div class="box text-muted">.col-4</div>
					</div>
					<div class="col-12 col-sm-4">
						<div class="box text-muted">.col-4</div>
					</div>
					<div class="col-12 col-sm-4">
						<div class="box text-muted">.col-4</div>
					</div>
					<div class="col-12 col-sm-6">
						<div class="box text-muted">.col-6</div>
					</div>
					<div class="col-12 col-sm-6">
						<div class="box text-muted">.col-6</div>
					</div>
					<div class="col-12">
						<div class="box text-muted">.col-12</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'component/js.php';?>
</body>
</html>
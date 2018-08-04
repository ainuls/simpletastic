<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'component/head.php';?>
	<style type="text/css">
	.btn{margin-bottom: 10px;margin-right: 5px;}
	.btn-group > .btn{margin-right: 0;}
	.btn-group-vertical > .btn, .topbar-search .btn{margin-bottom: 0;}
</style>
</head>
<body>
	<div id="wrapper">
		<?php include 'component/sidebar.php';?>
		<div id="body">
			<?php include 'component/topbar.php';?>
			<div class="container-fluid" id="content">
				<div class="row">
					<div class="col-12 col-xl-6">
						<div class="card">
							<div class="card-header">Deafult Buttons</div>
							<div class="card-body">
								<h6 class="card-title">Basic Buttons</h6>
								<button class="btn btn-primary">Primary</button>
								<button class="btn btn-secondary">secondary</button>
								<button class="btn btn-success">success</button>
								<button class="btn btn-warning">warning</button>
								<button class="btn btn-danger">danger</button>
								<button class="btn btn-info">info</button>
								<h6 class="card-title mt-3">Outline Buttons</h6>
								<button class="btn btn-outline-primary">Primary</button>
								<button class="btn btn-outline-secondary">secondary</button>
								<button class="btn btn-outline-success">success</button>
								<button class="btn btn-outline-warning">warning</button>
								<button class="btn btn-outline-danger">danger</button>
								<button class="btn btn-outline-info">info</button>
								<h6 class="card-title mt-3">Button Sizes</h6>
								<button class="btn btn-primary btn-lg">Large</button>
								<button class="btn btn-primary">Normal</button>
								<button class="btn btn-primary btn-sm">Small</button>
								<h6 class="card-title mt-3">Block Button</h6>
								<button class="btn btn-block btn-primary">Block Button</button>
								<button class="btn btn-block btn-outline-dark">Block Button</button>
								<button class="btn btn-block btn-success btn-rounded">Block Button</button>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6">
						<div class="card">
							<div class="card-header">Button Groups</div>
							<div class="card-body">
								<h6 class="card-title">Standard</h6>
								<div class="btn-group mr-3">
									<button class="btn btn-sm btn-secondary"><i class="icon-envelope"></i></button>
									<button class="btn btn-sm btn-secondary"><i class="icon-bag"></i></button>
									<button class="btn btn-sm btn-secondary"><i class="icon-rocket"></i></button>
									<button class="btn btn-sm btn-secondary"><i class="icon-heart"></i></button>
								</div>
								<div class="btn-group mr-3">
									<button class="btn btn-sm btn-secondary"><i class="icon-tag"></i></button>
									<button class="btn btn-sm btn-secondary"><i class="icon-cup"></i></button>
									<button class="btn btn-sm btn-secondary"><i class="icon-like"></i></button>
								</div>
								<div class="btn-group">
									<button class="btn btn-sm btn-secondary"><i class="icon-bulb"></i></button>
									<button class="btn btn-sm btn-secondary"><i class="icon-settings"></i></button>
								</div>
								<h6 class="card-title mt-3">Default Groups</h6>
								<div class="btn-group mr-3">
									<button class="btn btn-secondary">left</button>
									<button class="btn btn-secondary">middle</button>
									<button class="btn btn-secondary">right</button>
								</div>
								<div class="btn-group mr-3">
									<button class="btn btn-primary">left</button>
									<button class="btn btn-primary">middle</button>
									<button class="btn btn-primary">right</button>
								</div>
								<div class="btn-group">
									<button class="btn btn-warning">left</button>
									<button class="btn btn-warning">middle</button>
									<button class="btn btn-warning">right</button>
								</div>
								<h6 class="card-title mt-3 mb-0">Group With Full Width</h6>
								<p class="text-small">Add class <span class="badge badge-secondary text-loose">.btn-group-block</span> to the button group class to get button group with full width.</p>
								<div class="btn-group btn-group-block">
									<button class="btn btn-secondary">Home</button>
									<button class="btn btn-secondary">Blog</button>
									<button class="btn btn-secondary">Gallery</button>
									<button class="btn btn-secondary">About</button>
									<button class="btn btn-secondary">Contact Us</button>
								</div>
								<h6 class="card-title mt-3">Vertical Groups</h6>
								<div class="btn-group-vertical mr-3">
									<button class="btn btn-secondary">Top</button>
									<button class="btn btn-secondary">middle</button>
									<button class="btn btn-secondary">Bottom</button>
								</div>
								<div class="btn-group-vertical mr-3">
									<button class="btn btn-primary">Top</button>
									<button class="btn btn-primary">middle</button>
									<button class="btn btn-primary">Bottom</button>
								</div>
								<div class="btn-group-vertical">
									<button class="btn btn-warning">Top</button>
									<button class="btn btn-warning">middle</button>
									<button class="btn btn-warning">Bottom</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-xl-6">
						<div class="card">
							<div class="card-header">Icon Buttons</div>
							<div class="card-body">
								<h6 class="card-title">Icon Only</h6>
								<button class="btn btn-primary"><i class="icon-like"></i></button>
								<button class="btn btn-success"><i class="icon-envelope"></i></button>
								<button class="btn btn-warning"><i class="icon-cloud-upload"></i></button>
								<button class="btn btn-danger"><i class="icon-trash"></i></button>
								<button class="btn btn-secondary"><i class="icon-share"></i></button>
								<button class="btn btn-info"><i class="icon-people"></i></button>
								<h6 class="card-title mt-4">Icon With Text</h6>
								<button class="btn btn-primary"><i class="mr-2 icon-like"></i>Like</button>
								<button class="btn btn-warning"><i class="mr-2 icon-cloud-upload"></i>Upload document</button>
								<button class="btn btn-danger"><i class="mr-2 icon-trash"></i>Delete</button>
								<br>
								<button class="btn btn-outline-danger"><i class="mr-2 icon-heart"></i>Favorite</button>
								<button class="btn btn-outline-info"><i class="mr-2 icon-flag"></i>Flag Post</button>
								<button class="btn btn-outline-dark"><i class="mr-2 icon-link"></i>Go to link</button>
								<br>
								<button class="btn btn-rounded btn-dark"><i class="mr-2 icon-share"></i>Share</button>
								<button class="btn btn-rounded btn-warning"><i class="mr-2 icon-bubbles"></i>Open chatroom</button>
								<button class="btn btn-rounded btn-success"><i class="mr-2 icon-basket"></i>Add to cart</button>
								<h6 class="card-title mt-4">Social Button</h6>
								<div class="btn-group mr-3">
									<button class="btn btn-outline-secondary"><i class="icon-social-twitter"></i></button>
									<button class="btn btn-outline-secondary"><i class="icon-social-instagram"></i></button>
									<button class="btn btn-outline-secondary"><i class="icon-social-spotify"></i></button>
								</div>
								<div class="btn-group mr-3">
									<button class="btn btn-info"><i class="icon-social-twitter"></i></button>
									<button class="btn btn-danger"><i class="icon-social-instagram"></i></button>
									<button class="btn btn-success"><i class="icon-social-spotify"></i></button>
								</div>
								<div class="btn-group">
									<button class="btn btn-outline-secondary"><i class="text-info icon-social-twitter"></i></button>
									<button class="btn btn-outline-secondary"><i class="text-danger icon-social-instagram"></i></button>
									<button class="btn btn-outline-secondary"><i class="text-success icon-social-spotify"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6">
						<div class="card">
							<div class="card-header">Rounded Buttons</div>
							<div class="card-body">
								<h6 class="card-title mb-0">Basic Buttons Rounded</h6>
								<p class="text-small">Add <span class="badge badge-secondary text-loose">.btn-rounded</span> to the default button classes to get a rounded corner.</p>
								<button class="btn btn-rounded btn-primary">Primary</button>
								<button class="btn btn-rounded btn-secondary">secondary</button>
								<button class="btn btn-rounded btn-success">success</button>
								<button class="btn btn-rounded btn-warning">warning</button>
								<button class="btn btn-rounded btn-danger">danger</button>
								<button class="btn btn-rounded btn-info">info</button>
								<h6 class="card-title mt-4 mb-0">Basic Buttons Rounded</h6>
								<p class="text-small">Add <span class="badge badge-secondary text-loose">.btn-rounded</span> to the outline button classes to get a outline rounded corner.</p>
								<button class="btn btn-rounded btn-outline-primary">Primary</button>
								<button class="btn btn-rounded btn-outline-secondary">secondary</button>
								<button class="btn btn-rounded btn-outline-success">success</button>
								<button class="btn btn-rounded btn-outline-warning">warning</button>
								<button class="btn btn-rounded btn-outline-danger">danger</button>
								<button class="btn btn-rounded btn-outline-info">info</button>
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
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
					<div class="col-12 col-xl-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									<h5>Default Alerts</h5><small>Default Bootstrap Alerts</small>
								</div>
							</div>
							<div class="card-body">
								<!-- INFO -->
								<div class="alert alert-primary alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-check"></i></div>
									<div class="message"><strong>Primary!</strong> Have a nice day.</div>
								</div>
								<!-- SECONDARY -->
								<div class="alert alert-secondary alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-speech"></i></div>
									<div class="message"><strong>Secondary!</strong> This is just a message</div>
								</div>
								<!-- SUCCESS -->
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-like"></i></div>
									<div class="message"><strong>Success!</strong> Congratulation buddy :)</div>
								</div>
								<!-- WARNING -->
								<div class="alert alert-warning alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-exclamation"></i></div>
									<div class="message"><strong>Warning!</strong> There's something wrong.</div>
								</div>
								<!-- DANGER -->
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-fire"></i></div>
									<div class="message"><strong>Danger!</strong> Something is definitely on fire.</div>
								</div>
								<!-- INFO -->
								<div class="alert alert-info alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-bell"></i></div>
									<div class="message"><strong>Info!</strong> Just kidding.</div>
								</div>
							</div>
							<div class="card-footer">
								No need to add any classes. This will apply automaticly on default bootstrap Alert.
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									<h5>Contrast Alerts</h5><small>Alerts with icon contrast background</small>
								</div>
							</div>
							<div class="card-body">
								<!-- INFO -->
								<div class="alert alert-contrast alert-primary alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-check"></i></div>
									<div class="message"><strong>Primary!</strong> Have a nice day.</div>
								</div>
								<!-- SECONDARY -->
								<div class="alert alert-contrast alert-secondary alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-speech"></i></div>
									<div class="message"><strong>Secondary!</strong> This is just a message</div>
								</div>
								<!-- SUCCESS -->
								<div class="alert alert-contrast alert-success alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-like"></i></div>
									<div class="message"><strong>Success!</strong> Congratulation buddy :)</div>
								</div>
								<!-- WARNING -->
								<div class="alert alert-contrast alert-warning alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-exclamation"></i></div>
									<div class="message"><strong>Warning!</strong> There's something wrong.</div>
								</div>
								<!-- DANGER -->
								<div class="alert alert-contrast alert-danger alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-fire"></i></div>
									<div class="message"><strong>Danger!</strong> Something is definitely on fire.</div>
								</div>
								<!-- INFO -->
								<div class="alert alert-contrast alert-info alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-bell"></i></div>
									<div class="message"><strong>Info!</strong> Just kidding.</div>
								</div>
							</div>
							<div class="card-footer">
								Add additional <span class="badge badge-secondary text-loose font-weight-normal">.alert-contrast</span> class to the alert div.
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-xl-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									<h5>Plain Alerts</h5><small>Alerts with plain background and colored icon</small>
								</div>
							</div>
							<div class="card-body">
								<!-- INFO -->
								<div class="alert alert-plain alert-primary alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-check"></i></div>
									<div class="message"><strong>Primary!</strong> Have a nice day.</div>
								</div>
								<!-- SECONDARY -->
								<div class="alert alert-plain alert-secondary alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-speech"></i></div>
									<div class="message"><strong>Secondary!</strong> This is just a message</div>
								</div>
								<!-- SUCCESS -->
								<div class="alert alert-plain alert-success alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-like"></i></div>
									<div class="message"><strong>Success!</strong> Congratulation buddy :)</div>
								</div>
								<!-- WARNING -->
								<div class="alert alert-plain alert-warning alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-exclamation"></i></div>
									<div class="message"><strong>Warning!</strong> There's something wrong.</div>
								</div>
								<!-- DANGER -->
								<div class="alert alert-plain alert-danger alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-fire"></i></div>
									<div class="message"><strong>Danger!</strong> Something is definitely on fire.</div>
								</div>
								<!-- INFO -->
								<div class="alert alert-plain alert-info alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-bell"></i></div>
									<div class="message"><strong>Info!</strong> Just kidding.</div>
								</div>
							</div>
							<div class="card-footer">
								Add additional <span class="badge badge-secondary text-loose font-weight-normal">.alert-plain</span> class to the alert div.
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title">
									<h5>Contrast Plain Alerts</h5><small>Alerts with plain background and contrast icon background</small>
								</div>
							</div>
							<div class="card-body">
								<!-- INFO -->
								<div class="alert alert-plain alert-contrast alert-primary alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-check"></i></div>
									<div class="message"><strong>Primary!</strong> Have a nice day.</div>
								</div>
								<!-- SECONDARY -->
								<div class="alert alert-plain alert-contrast alert-secondary alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-speech"></i></div>
									<div class="message"><strong>Secondary!</strong> This is just a message</div>
								</div>
								<!-- SUCCESS -->
								<div class="alert alert-plain alert-contrast alert-success alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-like"></i></div>
									<div class="message"><strong>Success!</strong> Congratulation buddy :)</div>
								</div>
								<!-- WARNING -->
								<div class="alert alert-plain alert-contrast alert-warning alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-exclamation"></i></div>
									<div class="message"><strong>Warning!</strong> There's something wrong.</div>
								</div>
								<!-- DANGER -->
								<div class="alert alert-plain alert-contrast alert-danger alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-fire"></i></div>
									<div class="message"><strong>Danger!</strong> Something is definitely on fire.</div>
								</div>
								<!-- INFO -->
								<div class="alert alert-plain alert-contrast alert-info alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<div class="icon"><i class="icon-bell"></i></div>
									<div class="message"><strong>Info!</strong> Just kidding.</div>
								</div>
							</div>
							<div class="card-footer">
								Add additional <span class="badge badge-secondary text-loose font-weight-normal">.alert-plain</span> and <span class="badge badge-secondary text-loose font-weight-normal">.alert-contrast</span> class to the alert div.
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
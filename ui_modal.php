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
					<div class="col-12">
						<div class="card">
							<div class="card-header">Basic Modal</div>
						  <div class="card-body">
						  		<button class="btn btn-primary mr-1 mb-2" data-toggle="modal" data-target="#modal-normal">Standard Modal</button>
						  		<button class="btn btn-primary mr-1 mb-2" data-toggle="modal" data-target="#modal-large">Large Modal</button>
						  		<button class="btn btn-primary mr-1 mb-2" data-toggle="modal" data-target="#modal-small">Small Modal</button>
						  		<button class="btn btn-primary mr-1 mb-2" data-toggle="modal" data-target="#modal-center">Centered Modal</button>
						  </div>
						</div>
					</div>
					<div class="col-12">
						<div class="card">
							<div class="card-header">Colored Modal</div>
						  <div class="card-body">
						  		<button class="btn btn-primary mr-1 mb-2" data-toggle="modal" data-target="#modal-primary">Modal Primary</button>
						  		<button class="btn btn-secondary mr-1 mb-2" data-toggle="modal" data-target="#modal-secondary">Modal Secondary</button>
						  		<button class="btn btn-success mr-1 mb-2" data-toggle="modal" data-target="#modal-success">Modal Success</button>
						  		<button class="btn btn-warning mr-1 mb-2" data-toggle="modal" data-target="#modal-warning">Modal Warning</button>
						  		<button class="btn btn-danger mr-1 mb-2" data-toggle="modal" data-target="#modal-danger">Modal Danger</button>
						  		<button class="btn btn-info mr-1 mb-2" data-toggle="modal" data-target="#modal-info">Modal Info</button>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- NORMAL MODAL -->
	<div class="modal fade" id="modal-normal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h6 class="modal-title">This is the title!</h6>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sequi, veniam quibusdam soluta numquam similique quo eveniet repellat, nesciunt facilis quis! Et eligendi est, pariatur accusamus ducimus ea hic consequuntur!</p>
	      </div>
	      <div class="modal-footer">
	      	<button class="btn btn-secondary" data-dismiss="modal">Close</button>
	      	<button class="btn btn-primary">Save data</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- MODAL LARGE -->
	<div class="modal fade" id="modal-large" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h6 class="modal-title">Large Modal</h6>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">....</div>
	    </div>
	  </div>
	</div>

	<!-- MODAL SMALL -->
	<div class="modal fade" id="modal-small" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h6 class="modal-title">Small Modal</h6>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">...</div>
	      <div class="modal-footer"></div>
	    </div>
	  </div>
	</div>

	<!-- MODAL-CENTER -->
	<div class="modal fade" id="modal-center" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h6 class="modal-title">Centered Modal</h6>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium tenetur dolorem tempore doloribus, in quo dignissimos facere magnam voluptate, aut quas, inventore! Inventore vel, unde ipsum. Expedita, dolorum perspiciatis possimus!
	      </div>
	      <div class="modal-footer">
	      	<button class="btn btn-warning" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- MODAL-PRIMARY -->
	<div class="modal fade" id="modal-primary" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-primary" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h6 class="modal-title">Modal Primary</h6>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium tenetur dolorem tempore doloribus, in quo dignissimos facere magnam voluptate, aut quas, inventore! Inventore vel, unde ipsum. Expedita, dolorum perspiciatis possimus!
	      </div>
	      <div class="modal-footer">
	      	<button class="btn btn-primary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- MODAL-SECONDARY -->
	<div class="modal fade" id="modal-secondary" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-secondary" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h6 class="modal-title">Modal Secondary</h6>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium tenetur dolorem tempore doloribus, in quo dignissimos facere magnam voluptate, aut quas, inventore! Inventore vel, unde ipsum. Expedita, dolorum perspiciatis possimus!
	      </div>
	      <div class="modal-footer">
	      	<button class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- MODAL-SUCCESS -->
	<div class="modal fade" id="modal-success" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-success" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h6 class="modal-title">Modal Success</h6>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium tenetur dolorem tempore doloribus, in quo dignissimos facere magnam voluptate, aut quas, inventore! Inventore vel, unde ipsum. Expedita, dolorum perspiciatis possimus!
	      </div>
	      <div class="modal-footer">
	      	<button class="btn btn-success" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- MODAL-WARNING -->
	<div class="modal fade" id="modal-warning" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-warning" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h6 class="modal-title">Modal Warning</h6>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium tenetur dolorem tempore doloribus, in quo dignissimos facere magnam voluptate, aut quas, inventore! Inventore vel, unde ipsum. Expedita, dolorum perspiciatis possimus!
	      </div>
	      <div class="modal-footer">
	      	<button class="btn btn-warning" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- MODAL-DANGER -->
	<div class="modal fade" id="modal-danger" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-danger" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h6 class="modal-title">Modal Danger</h6>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium tenetur dolorem tempore doloribus, in quo dignissimos facere magnam voluptate, aut quas, inventore! Inventore vel, unde ipsum. Expedita, dolorum perspiciatis possimus!
	      </div>
	      <div class="modal-footer">
	      	<button class="btn btn-danger" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- MODAL-INFO -->
	<div class="modal fade" id="modal-info" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-info" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h6 class="modal-title">Modal Info</h6>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium tenetur dolorem tempore doloribus, in quo dignissimos facere magnam voluptate, aut quas, inventore! Inventore vel, unde ipsum. Expedita, dolorum perspiciatis possimus!
	      </div>
	      <div class="modal-footer">
	      	<button class="btn btn-info" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<?php include 'component/js.php';?>
</body>
</html>
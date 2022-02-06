<!-- <?php
ob_start();
include ('session.php');
include ('config.php');
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>TATA KELOLA KINERJA TEKNOLOGI INFORMASI MENGGUNAKAN
IT BALANCED SCORECARD</title>
	<meta name="description" content="TATA KELOLA KINERJA TEKNOLOGI INFORMASI MENGGUNAKAN
IT BALANCED SCORECARD">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="assets/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="assets/css/style-responsive.css" rel="stylesheet">
	
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="assets/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="assets/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="template.php"><span>IT-BSC</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo $session_id; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								
								<li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
			<?php include "sidebar.php"; ?>
			
			
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<!-- <a href="index.html">Home</a>  -->
					<a href="template.php">Home</a>
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Lihat Data Dimensi</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Dimensi</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No.</th>
								  <th>Dimensi</th>
								  <th>Bobot</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	 <?php
								$query = mysqli_query($koneksi, "select * from tbdimensi ") or die(mysqli_error());
								$j=0;
								while ($row = mysqli_fetch_array($query)) {
									$j++;
                               
                                ?>
							<tr>
								<td><?php echo $j; ?></td>
								<td><?php echo $row['dimensi']; ?></td>
								<td class="center"><?php echo $row['bobot']; ?></td>
								
								<td class="center">
									<a class="btn btn-success" href="#">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" href="#">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							<?php } ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->	

			
						
			
			
			
				
			
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="assets/js/jquery-1.9.1.min.js"></script>
	<script src="assets/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="assets/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="assets/js/jquery.ui.touch-punch.js"></script>
	
		<script src="assets/js/modernizr.js"></script>
	
		<script src="assets/js/bootstrap.min.js"></script>
	
		<script src="assets/js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="assets/js/excanvas.js"></script>
	<script src="assets/js/jquery.flot.js"></script>
	<script src="assets/js/jquery.flot.pie.js"></script>
	<script src="assets/js/jquery.flot.stack.js"></script>
	<script src="assets/js/jquery.flot.resize.min.js"></script>
	
		<script src="assets/js/jquery.chosen.min.js"></script>
	
		<script src="assets/js/jquery.uniform.min.js"></script>
		
		<script src="assets/js/jquery.cleditor.min.js"></script>
	
		<script src="assets/js/jquery.noty.js"></script>
	
		<script src="assets/js/jquery.elfinder.min.js"></script>
	
		<script src="assets/js/jquery.raty.min.js"></script>
	
		<script src="assets/js/jquery.iphone.toggle.js"></script>
	
		<script src="assets/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="assets/js/jquery.gritter.min.js"></script>
	
		<script src="assets/js/jquery.imagesloaded.js"></script>
	
		<script src="assets/js/jquery.masonry.min.js"></script>
	
		<script src="assets/js/jquery.knob.modified.js"></script>
	
		<script src="assets/js/jquery.sparkline.min.js"></script>
	
		<script src="assets/js/counter.js"></script>
	
		<script src="assets/js/retina.js"></script>

		<script src="assets/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>

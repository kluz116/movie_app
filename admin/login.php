<?php
require'config.inc.php';
if(isset($_SESSION['email']) && !empty($_SESSION['email'])){

  header("Location:index.php");
  exit();
  }
$obj = new Config();
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->


<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->

	<link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet" />
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="assets/css/default/style.min.css" rel="stylesheet" />
	<link href="assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.css">
	<!-- ================== END BASE CSS STYLE ================== -->
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin login-cover -->
	<div class="login-cover">
		<div class="login-cover-image" style="background-image: url(assets/img/login-bg/login-bg-13.jpg)" data-id="login-cover-image"></div>
		<div class="login-cover-bg"></div>
	</div>
	<!-- end login-cover -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin login -->
		<div class="login login-v2" data-pageload-addclass="animated fadeIn">
			<!-- begin brand -->
			<div class="login-header">
				<div class="brand">
					 <b class="text-center">Login</b>
					<b><?php $obj->loginUser();?></b>
				</div>
				
			</div>
			<!-- end brand -->
			<!-- begin login-content -->
			<div class="login-content">
				<form action="" method="POST" class="margin-bottom-0">
					<div class="form-group m-b-20">
						<input type="text" name="email" class="form-control form-control-lg" placeholder="Email Address" required />
					</div>
					<div class="form-group m-b-20">
						<input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required />
					</div>
				
					<div class="login-buttons">
						<button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
					</div>
					
				</form>
			</div>
			<!-- end login-content -->
		</div>
		<!-- end login -->
		

		
	
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="assets/js/theme/default.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/d3/d3.min.js"></script>
	<script src="assets/plugins/nvd3/build/nv.d3.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
	<script src="assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
	<script src="assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="assets/js/demo/dashboard-v2.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			LoginV2.init();
		});
	</script>

</body>

</html>

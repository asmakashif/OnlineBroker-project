<!DOCTYPE html>
<html>
<head>
	<title>BrokerOnline. For your needs always...</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

	<!-- External CSS libraries -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/bootstrap-submenu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/bootstrap-select.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/');?>css/leaflet.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/');?>css/map.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>fonts/linearicons/style.css">
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/');?>css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/');?>css/dropzone.css">
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/');?>css/magnific-popup.css">

	<!-- Custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/style.css">
	<link rel="stylesheet" type="text/css" id="style_sheet" href="<?php echo base_url('assets/');?>css/skins/default.css">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/');?>img/favicon.ico" type="image/x-icon" >

	<!-- Google fonts -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/ie10-viewport-bug-workaround.css">

	<script>
		var latitude = '';
		var longitude = '';
		var ip = "::1";
	</script>

	<!-- Need Jquery File -->
	<script src="<?php echo base_url('assets/');?>js/jquery-2.2.0.min.js"></script>

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<script src="<?php echo base_url('assets/');?>js/ie-emulation-modes-warning.js"></script>
	<script src="<?php echo base_url('assets/');?>js/angular.js"></script>
	<script src="<?php echo base_url('assets/');?>js/general.js"></script>
	<script src="<?php echo base_url('assets/');?>js/leaflet.js"></script>
	<script src="<?php echo base_url('assets/');?>js/leaflet-providers.js"></script>
	<script src="<?php echo base_url('assets/');?>js/leaflet.markercluster.js"></script>
</head>
<body>

	<!--<div class="page_loader"></div>-->

	<!-- Top header start -->
	<header class="top-header hidden-xs" id="top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="list-inline">
						<a href="tel:+916362366933"><i class="fa fa-phone"></i>+91 6362366933</a>
						<a href="mailto:writetous@brokeronline.in"><i class="fa fa-envelope"></i>writetous@brokeronline.in</a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<ul class="top-social-media pull-right">
						<li>
							<a href="login" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
						</li>
						<li>
							<a href="user-signup" class="sign-in"><i class="fa fa-user"></i> Register</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<!-- Top header end -->

	<!-- Main header start -->
	<header class="main-header">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index" class="logo">
						<img src="<?php echo base_url('assets/img/logos/logo.png');?>" alt="logo">
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
					<div class="row phone_login_detail">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 remove_pad">
							<div class="top-social-media pull-right">
								<a href="login" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
								<a href="user-signup" class="sign-in"><i class="fa fa-user"></i> Register</a>
							</div>
						</div>
					</div>
					<ul class="nav navbar-nav">
						<li class="active" id="home">
							<a href="index">Home</a>
						</li>
						<li class="dropdown" id="property_search">
							<a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
								Property Search<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="" id="ps1"><a href="advancesearch">Residential Properties</a></li>
								<li class="" id="ps2"><a href="advancesearch">Commercial Properties</a></li>
								<li class="" id="ps3"><a href="advancesearch">Office Space</a></li>
								<li class="" id="ps4"><a href="advancesearch">Plots</a></li>
							</ul>
						</li>
						<li class="dropdown" id="insights">
							<a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
								Insights<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="" id="insight1"><a href="page-not-found">Market Analysis</a></li>
								<li class="" id="insight2"><a href="page-not-found">Demand vs Supply</a></li>
								<li class="" id="insight3"><a href="page-not-found">Our Network</a></li>
							</ul>
						</li>
						<li class="dropdown" id="about_us">
							<a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
								About Us<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-submenu" id="about1">
									<a tabindex="0">Are you Broker</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="enquire-about-our-network">Enquire about our Network</a></li>
										<li><a class="dropdown-item" href="broker-signup">Join Us</a></li>
									</ul>
								</li>
								<li class="" id="about2"><a href="about-us">About BrokerOnline.in</a></li>
								<li class="" id="about3"><a href="our-customer-testimony">Our customer testimony</a></li>
								<li class="" id="about4"><a href="connect-with-us">Connect with us</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!-- Main header end --><br />
	<b>Warning</b>:  mysqli_query() expects parameter 1 to be mysqli, bool given in <b>C:\xampp\htdocs\BrokerOnline\index.php</b> on line <b>20</b><br />
	<br />
	<b>Warning</b>:  mysqli_num_rows() expects parameter 1 to be mysqli_result, null given in <b>C:\xampp\htdocs\BrokerOnline\index.php</b> on line <b>21</b><br />
	<div class="container set-height">
		<div class="row">
			<div class="col-lg-12">
				<!-- Error404 content start -->
				<div class="error404-content">
					<h1>404</h1>
					<h2>Something is wrong</h2>
					<p>The page you are looking for was moved, removed, renamed or might never.</p>
					<form action="index" method="post">
						<button type="submit" class="button-sm out-line-btn">Back to home page</button>
					</form>
				</div>
				<!-- Error404 content end -->
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$('#home').addClass('active');
			$('#home').siblings().removeClass('active');
		});
	</script><script>
		$(document).ready(function () {
			$('#home').addClass('active');
			$('#home').siblings().removeClass('active');
		});
	</script>
	<br />
	<b>Warning</b>:  mysqli_query() expects parameter 1 to be mysqli, bool given in <b>C:\xampp\htdocs\BrokerOnline\footer.php</b> on line <b>4</b><br />
	<br />
	<b>Warning</b>:  mysqli_num_rows() expects parameter 1 to be mysqli_result, null given in <b>C:\xampp\htdocs\BrokerOnline\footer.php</b> on line <b>5</b><br />
	<!-- Copy right start -->
	<div class="copy-right">
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-8 col-sm-12">
					&copy;  2019 <a href="http://ARSCnetwork.com/" target="_blank">ARSC Networks</a>. All rights reserved.
				</div>
				<div class="col-md-4 col-sm-12">
					<ul class="social-list clearfix">
						<li>
							<a href="https://www.facebook.com/ARSCNetworks" target="_blank" class="facebook">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/ARSCNetworks" target="_blank" class="twitter">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/company/ARSCNetworks" target="_blank" class="linkedin">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/user/ARSCNetworks" target="_blank" class="youtube">
								<i class="fa fa-youtube"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Copy end right-->
	<script src="<?php echo base_url('assets/');?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/');?>js/bootstrap-submenu.js"></script>
	<script src="<?php echo base_url('assets/');?>js/rangeslider.js"></script>
	<script src="<?php echo base_url('assets/');?>js/jquery.mb.YTPlayer.js"></script>
	<script src="<?php echo base_url('assets/');?>js/wow.min.js"></script>
	<script src="<?php echo base_url('assets/');?>js/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url('assets/');?>js/jquery.easing.1.3.js"></script>
	<script src="<?php echo base_url('assets/');?>js/jquery.scrollUp.js"></script>
	<script src="<?php echo base_url('assets/');?>js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo base_url('assets/');?>js/dropzone.js"></script>
	<script src="<?php echo base_url('assets/');?>js/jquery.filterizr.js"></script>
	<script src="<?php echo base_url('assets/');?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url('assets/');?>js/maps.js"></script>
	<script src="<?php echo base_url('assets/');?>js/app.js"></script>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="<?php echo base_url('assets/');?>js/ie10-viewport-bug-workaround.js"></script>
	<!-- Custom javascript -->
	<script src="<?php echo base_url('assets/');?>js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
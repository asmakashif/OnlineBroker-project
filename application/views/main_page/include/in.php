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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/editor.css">

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
		var ip = "115.99.246.197";
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
	<script src="<?php echo base_url('assets/');?>js/editor.js"></script>
</head>
<body style="margin-top: 120px;">
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
							<img src="<?php echo base_url('assets/');?>img/logos/logo.png" alt="logo">
						</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
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
										</ul>
									</li>
									<li class="" id="about2"><a href="about-us">About BrokerOnline.in</a></li>
									<li class="" id="about3"><a href="our-customer-testimony">Our customer testimony</a></li>
									<li class="" id="about4"><a href="connect-with-us">Connect with us</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown" id="userdata">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<img src="<?php echo base_url('assets/');?>img/user.png" class="profile-image img-circle">
									Asma<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li id="userdata1" class=""><a href="user-detail"><i class="fa fa-cog"></i> Account Detail</a></li>
									<li class=""><a onclick="user_logout()"><i class="fa fa-sign-out"></i> Sign-out</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!-- Main header end --><!-- Banner start -->
		<div class="banner">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item banner-max-height active">
						<img src="<?php echo base_url();?>upload/slider/slider1.jpg" alt="banner-slider-1">
						<div class="carousel-caption banner-slider-inner">
							<div class="banner-content">
								<h1 data-animation="animated fadeInDown delay-05s">FIND THE RIGHT PROPERTY OF YOUR NEEDS</h1>
								<p data-animation="animated fadeInUp delay-1s">BrokerOnline.in, where you property search ends. We have the largest collection of properties across India, to match your specific requirements </p>
								<a href="advancesearch" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Get Started Now</a>
								<a href="about-us" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-15s">Learn More</a>
							</div>
						</div>
					</div><div class="item banner-max-height ">
						<img src="<?php echo base_url();?>upload/slider/slider2.jpg" alt="banner-slider-1">
						<div class="carousel-caption banner-slider-inner">
							<div class="banner-content">
								<h1 data-animation="animated fadeInDown delay-05s">OUR BROKER NETWORK IS LIKE NO OTHER</h1>
								<p data-animation="animated fadeInUp delay-1s">BrokerOnline.in helps you connects with the best REAL ESTATE AGENTS, you do the search with us and we will connect with you with the best brokers based on your search, with the best possible match of properties. All this service comes to you for no charge</p>
								<a href="advancesearch" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Get Started Now</a>
								<a href="about-us" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-15s">Learn More</a>
							</div>
						</div>
					</div><div class="item banner-max-height ">
						<img src="<?php echo base_url();?>upload/slider/slider3.jpg" alt="banner-slider-1">
						<div class="carousel-caption banner-slider-inner">
							<div class="banner-content">
								<h1 data-animation="animated fadeInDown delay-05s">BEST BROKER NETWORK ACROSS THE COUNTRY</h1>
								<p data-animation="animated fadeInUp delay-1s">BrokerOnline.in is largest community of REAL ESTATE AGENTS across the country, getting you the largest collection of properties based on your requirement</p>
								<a href="advancesearch" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Get Started Now</a>
								<a href="about-us" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-15s">Learn More</a>
							</div>
						</div>
					</div>        
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="slider-mover-left" aria-hidden="true">
						<i class="fa fa-angle-left"></i>
					</span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="slider-mover-right" aria-hidden="true">
						<i class="fa fa-angle-right"></i>
					</span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<!-- Banner end -->
		<!-- Search area start -->
		<div class="search-area">
			<div class="container">
				<div class="search-area-inner">
					<div class="search-contents ">
						<form method="GET">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<div class="form-group">
										<select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value">
											<option>Area From</option>
											<option>1000</option>
											<option>800</option>
											<option>600</option>
											<option>400</option>
											<option>200</option>
											<option>100</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<div class="form-group">
										<select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
											<option>Property Status</option>
											<option>For Sale</option>
											<option>For Rent</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<div class="form-group">
										<select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
											<option>Location</option>
											<option>India</option>
											<option>India</option>
											<option>India</option>
											<option>India</option>
											<option>India</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<div class="form-group">
										<select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value">
											<option>Property Types</option>
											<option>Residential Properties</option>
											<option>Commercial Properties</option>
											<option>Office Space</option>
											<option>Plots</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<div class="form-group">
										<select class="selectpicker search-fields" name="bedrooms" data-live-search="true" data-live-search-placeholder="Search value" >
											<option>From Bedrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<div class="form-group">
										<select class="selectpicker search-fields" name="bathrooms" data-live-search="true" data-live-search-placeholder="Search value" >
											<option>From Bathrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<div class="form-group">
										<div class="range-slider">
											<div data-min="0" data-max="100000000" data-unit="INR" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
									<div class="form-group search-advance">
										<button class="search-button">Search</button>
										<a href="advancesearch" title="Advance Search">Advanced Search</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Search area start -->		<!-- Featured properties start -->
		<div class="content-area featured-properties">
			<div class="container">
				<!-- Main title -->
				<div class="main-title">
					<h1>Featured Properties</h1>
				</div>
				<ul class="list-inline-listing filters filters-listing-navigation">
					<li class="active btn filtr-button filtr" data-filter="all">All</li>
					<li data-filter="1" class="btn btn-inline filtr-button filtr">Residential Properties</li>				</ul>
					<div class="row">
						<div class="filtr-container addproperties">

							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
								<div class="property">
									<!-- Property img -->
									<div class="property-img">
										<div class="property-tag button alt featured">Featured</div>
										<div class="property-tag button sale">For Sell</div>
										<div class="property-price">&#x20B9;2121212</div>
										<img src="<?php echo base_url();?>upload/property_images/Chrysanthemum_1p2.jpg" alt="fp" class="img-responsive">
										<div class="property-overlay">
											<a href="properties-details?pid=1" class="overlay-link">
												<i class="fa fa-link"></i>
											</a>
											<a class="overlay-link property-video" title="Testing Property">
												<i class="fa fa-video-camera"></i>
											</a>
											<div class="property-magnify-gallery"><a href="upload/property_images/Chrysanthemum_1p2.jpg" class="overlay-link">
												<i class="fa fa-expand"></i>
											</a><a href="upload/property_images/Desert_1p2.jpg" class="hidden"></a></div>
										</div>
									</div>
									<!-- Property content -->
									<div class="property-content">
										<!-- title -->
										<h1 class="title">
											<a href="properties-details?pid=1">Testing Property</a>
										</h1>
										<!-- Property address -->
										<h3 class="property-address">
											<a href="properties-details">
												<i class="fa fa-map-marker"></i>Marathahalli, Bangalore, Karnataka
											</a>
										</h3>
										<!-- Facilities List -->
										<ul class="facilities-list clearfix">
											<li>
												<i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
												<span>2000 sq ft</span>
											</li><li>
												<i class="flaticon-bed"></i>
												<span>2 Beds</span>
											</li>
											<li>
												<i class="flaticon-holidays"></i>
												<span>2 Baths</span>
											</li>
											<li>
												<i class="flaticon-building"></i>
												<span>1 Balcony</span>
											</li>
											<li title=Lift,Security,Play Area,In Gas Pipe,Water>
												<i class="flaticon-monitor"></i>
												<span>Amenities</span>
											</li>
											<li title=Common &amp; 0>
												<i class="flaticon-vehicle"></i>
												<span>Parking</span>
											</li>
										</ul>
										<!-- Property footer -->
										<div class="property-footer">
											<span class="left">
												<a href="#"><i class="fa fa-user"></i>Test Broker</a>
											</span>
											<span class="right">
												<i class="fa fa-calendar"></i>5 Months,26 Days ago
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Featured properties end -->
			<!-- Our service start -->
			<div class="mb-100 our-service">
				<div class="container">
					<!-- Main title -->
					<div class="main-title">
						<h1><span>What are you</span> looking for?</h1>
					</div>

					<div class="row mgn-btm wow">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
							<div class="content">
								<i class="flaticon-apartment"></i>
								<h4>Apartment</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</P>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
								<div class="content">
									<i class="flaticon-internet"></i>
									<h4>Individual House</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</P>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
									<div class="content">
										<i class="flaticon-vehicle"></i>
										<h4>Commercial Space</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</P>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
										<div class="content">
											<i class="flaticon-symbol"></i>
											<h4>Shops</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</P>
											</div>
										</div>
									</div>
									<a href="about-us" class="btn button-md button-theme">Read More</a>
								</div>
							</div>
							<!-- Our service end -->
							<!-- Recently properties start -->
							<div class="mb-70 recently-properties chevron-icon">
								<div class="container">
									<!-- Main title -->
									<div class="main-title">
										<h1><span>Recently</span> Properties</h1>
									</div>
									<div class="row">
										<div class="carousel our-partners slide" id="ourPartners2">
											<div class="col-lg-12 mrg-btm-30">
												<a class="right carousel-control" href="#ourPartners2" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
												<a class="right carousel-control" href="#ourPartners2" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
											</div>
											<div class="carousel-inner">
												<div class="item active">
													<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
														<!-- Property 2 start -->
														<div class="property-2">
															<!-- Property img -->
															<div class="property-img">
																<div class="featured">
																Sell													</div>
																<div class="price-ratings">
																	<div class="price">&#x20B9;150000</div>
																</div>
																<img src="<?php echo base_url();?>upload/property_images/download (1)_5p.jpg" alt="rp" class="img-responsive">
																<div class="property-overlay">
																	<a href="properties-details?pid=5" class="overlay-link">
																		<i class="fa fa-link"></i>
																	</a>
																	<div class="property-magnify-gallery">
																		<a href="<?php echo base_url();?>upload/property_images/download (1)_5p.jpg" class="overlay-link">
																			<i class="fa fa-expand"></i>
																		</a><a href="<?php echo base_url();?>upload/property_images/download_5p.jpg" class="hidden"></a>														</div>
																	</div>
																</div>
																<!-- content -->
																<div class="content">
																	<!-- title -->
																	<h4 class="title">
																		<a href="properties-details?pid=5">res-test-naren</a>
																	</h4>
																	<!-- Property address -->
																	<h3 class="property-address">
																		<a href="properties-details">
																			<i class="fa fa-map-marker"></i>doddanekundi, Bangalore, Karnataka														</a>
																		</h3>
																	</div>
																	<!-- Facilities List -->
																	<ul class="facilities-list clearfix">
																		<li>
																			<i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
																			<span>500 sq ft</span>
																		</li>
																		<li>
																			<i class="flaticon-bed"></i>
																			<span>2</span>
																		</li>
																		<li>
																			<i class="flaticon-holidays"></i>
																			<span>2</span>
																		</li>
																		<li>
																			<i class="flaticon-building"></i>
																			<span>1</span>
																		</li>
																	</ul>
																</div>
																<!-- Property 2 end -->
															</div>
														</div>
														<div class="item">
															<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																<!-- Property 2 start -->
																<div class="property-2">
																	<!-- Property img -->
																	<div class="property-img">
																		<div class="featured">
																		Rent													</div>
																		<div class="price-ratings">
																			<div class="price">&#x20B9;20000</div>
																		</div>
																		<img src="upload/property_images/Tulips_4p.jpg" alt="rp" class="img-responsive">
																		<div class="property-overlay">
																			<a href="properties-details?pid=4" class="overlay-link">
																				<i class="fa fa-link"></i>
																			</a>
																			<a class="overlay-link property-video" title="Test Rent Property video">
																				<i class="fa fa-video-camera"></i>
																			</a>
																			<div class="property-magnify-gallery">
																				<a href="upload/property_images/Tulips_4p.jpg" class="overlay-link">
																					<i class="fa fa-expand"></i>
																				</a>														</div>
																			</div>
																		</div>
																		<!-- content -->
																		<div class="content">
																			<!-- title -->
																			<h4 class="title">
																				<a href="properties-details?pid=4">Test Rent Property</a>
																			</h4>
																			<!-- Property address -->
																			<h3 class="property-address">
																				<a href="properties-details">
																					<i class="fa fa-map-marker"></i>Mahal, Nagpur, Maharashtra														</a>
																				</h3>
																			</div>
																			<!-- Facilities List -->
																			<ul class="facilities-list clearfix">
																				<li>
																					<i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
																					<span>2300 sq ft</span>
																				</li>
																				<li>
																					<i class="flaticon-bed"></i>
																					<span>2</span>
																				</li>
																				<li>
																					<i class="flaticon-holidays"></i>
																					<span>2</span>
																				</li>
																				<li>
																					<i class="flaticon-building"></i>
																					<span>2</span>
																				</li>
																			</ul>
																		</div>
																		<!-- Property 2 end -->
																	</div>
																</div>
																<div class="item">
																	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																		<!-- Property 2 start -->
																		<div class="property-2">
																			<!-- Property img -->
																			<div class="property-img">
																				<div class="featured">
																				Sell													</div>
																				<div class="price-ratings">
																					<div class="price">&#x20B9;7000000</div>
																				</div>
																				<img src="upload/property_images/Desert_3p.jpg" alt="rp" class="img-responsive">
																				<div class="property-overlay">
																					<a href="properties-details?pid=3" class="overlay-link">
																						<i class="fa fa-link"></i>
																					</a>
																					<a class="overlay-link property-video" title="Testing Property2 video">
																						<i class="fa fa-video-camera"></i>
																					</a>
																					<div class="property-magnify-gallery">
																						<a href="upload/property_images/Desert_3p.jpg" class="overlay-link">
																							<i class="fa fa-expand"></i>
																						</a><a href="upload/property_images/Koala_3p.jpg" class="hidden"></a>														</div>
																					</div>
																				</div>
																				<!-- content -->
																				<div class="content">
																					<!-- title -->
																					<h4 class="title">
																						<a href="properties-details?pid=3">Testing Property2</a>
																					</h4>
																					<!-- Property address -->
																					<h3 class="property-address">
																						<a href="properties-details">
																							<i class="fa fa-map-marker"></i>Kundalahalli, Bangalore, Karnataka														</a>
																						</h3>
																					</div>
																					<!-- Facilities List -->
																					<ul class="facilities-list clearfix">
																						<li>
																							<i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
																							<span>3000 sq ft</span>
																						</li>
																					</ul>
																				</div>
																				<!-- Property 2 end -->
																			</div>
																		</div>
																		<div class="item">
																			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																				<!-- Property 2 start -->
																				<div class="property-2">
																					<!-- Property img -->
																					<div class="property-img">
																						<div class="featured">
																						Sell													</div>
																						<div class="price-ratings">
																							<div class="price">&#x20B9;2121212</div>
																						</div>
																						<img src="upload/property_images/Chrysanthemum_1p2.jpg" alt="rp" class="img-responsive">
																						<div class="property-overlay">
																							<a href="properties-details?pid=1" class="overlay-link">
																								<i class="fa fa-link"></i>
																							</a>
																							<a class="overlay-link property-video" title="Testing Property video">
																								<i class="fa fa-video-camera"></i>
																							</a>
																							<div class="property-magnify-gallery">
																								<a href="upload/property_images/Chrysanthemum_1p2.jpg" class="overlay-link">
																									<i class="fa fa-expand"></i>
																								</a><a href="upload/property_images/Desert_1p2.jpg" class="hidden"></a>														</div>
																							</div>
																						</div>
																						<!-- content -->
																						<div class="content">
																							<!-- title -->
																							<h4 class="title">
																								<a href="properties-details?pid=1">Testing Property</a>
																							</h4>
																							<!-- Property address -->
																							<h3 class="property-address">
																								<a href="properties-details">
																									<i class="fa fa-map-marker"></i>Marathahalli, Bangalore, Karnataka														</a>
																								</h3>
																							</div>
																							<!-- Facilities List -->
																							<ul class="facilities-list clearfix">
																								<li>
																									<i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
																									<span>2000 sq ft</span>
																								</li>
																								<li>
																									<i class="flaticon-bed"></i>
																									<span>2</span>
																								</li>
																								<li>
																									<i class="flaticon-holidays"></i>
																									<span>2</span>
																								</li>
																								<li>
																									<i class="flaticon-building"></i>
																									<span>1</span>
																								</li>
																							</ul>
																						</div>
																						<!-- Property 2 end -->
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- Recently properties end -->

															<div class="clearfix"></div>	<!-- Categories strat -->
															<div class="categories">
																<div class="container">
																	<!-- Main title -->
																	<div class="main-title">
																		<h1>Popular Places</h1>
																	</div>
																	<div class="clearfix"></div>
																	<div class="row wow">
																		<div id="gallery" class="container-fluid">
																			<div class="set-popular-place">
																				<img src="upload/popular_places/popular_placesBangalore1.jpg" class="card">
																				<div class="img-text-set">
																					<div class="category-subtitle">14 Properties</div>
																					<h3 class="category-title">
																						<a href="#">Bangalore</a>
																					</h3>
																				</div>
																			</div>
																			<div class="set-popular-place">
																				<img src="upload/popular_places/popular_placesGuntur.jpg" class="card">
																				<div class="img-text-set">
																					<div class="category-subtitle">14 Properties</div>
																					<h3 class="category-title">
																						<a href="#">Guntur</a>
																					</h3>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- Categories end-->
															<!-- Agent section start -->
															<div class="mb-70 agent-section chevron-icon">
																<div class="container">
																	<!-- Main title -->
																	<div class="main-title">
																		<h1>Our Agent</h1>
																	</div>
																	<div class="row">
																		<div class="carousel our-partners slide" id="ourPartners3">
																			<div class="col-lg-12 mrg-btm-30">
																				<a class="right carousel-control" href="#ourPartners3" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
																				<a class="right carousel-control" href="#ourPartners3" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
																			</div>
																			<div class="carousel-inner">
																				<div class="item active">
																					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																						<!-- Agent 1 start -->
																						<div class="agent-1">
																							<!-- Agent img -->
																							<a href="" class="agent-img">
																								<img src="img/team/team-1.jpg" alt="team-1" class="img-responsive">
																							</a>
																							<!-- Agent content -->
																							<div class="agent-content">
																								<h5><a href="agent-detail">Test Broker</a></h5>
																								<h6>Our Brokers</h6>
																								<ul class="social-list clearfix">
																									<li>
																										<a href="https://www.facebook.com/ARSCNetworks" class="facebook">
																											<i class="fa fa-facebook"></i>
																										</a>
																									</li>

																									<li>
																										<a href="https://twitter.com/ARSCNetworks" class="twitter">
																											<i class="fa fa-twitter"></i>
																										</a>
																									</li>
																									<li>
																										<a href="https://www.linkedin.com/company/ARSCNetworks" class="linkedin">
																											<i class="fa fa-linkedin"></i>
																										</a>
																									</li>
																									<li>
																										<a href="https://www.google.com/plus/ARSCNetworks" class="google">
																											<i class="fa fa-google-plus"></i>
																										</a>
																									</li>
																									<li>
																										<a href="https://www.youtube.com/user/ARSCNetworks" class="youtube">
																											<i class="fa fa-youtube"></i>
																										</a>
																									</li>
																								</ul>
																							</div>
																						</div>
																						<!-- Agent end -->
																					</div>
																				</div>
																				<div class="item ">
																					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																						<!-- Agent 1 start -->
																						<div class="agent-1">
																							<!-- Agent img -->
																							<a href="" class="agent-img">
																								<img src="img/team/team-2.jpg" alt="team-1" class="img-responsive">
																							</a>
																							<!-- Agent content -->
																							<div class="agent-content">
																								<h5><a href="agent-detail">Test Broker Admin</a></h5>
																								<h6>Our Brokers</h6>
																								<ul class="social-list clearfix">
																								</ul>
																							</div>
																						</div>
																						<!-- Agent end -->
																					</div>
																				</div>
																				<div class="item ">
																					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																						<!-- Agent 1 start -->
																						<div class="agent-1">
																							<!-- Agent img -->
																							<a href="" class="agent-img">
																								<img src="img/team/team-1.jpg" alt="team-1" class="img-responsive">
																							</a>
																							<!-- Agent content -->
																							<div class="agent-content">
																								<h5><a href="agent-detail">test</a></h5>
																								<h6>Our Brokers</h6>
																								<ul class="social-list clearfix">
																								</ul>
																							</div>
																						</div>
																						<!-- Agent end -->
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- Agent section end -->
															<!-- Testimonial start -->
															<div class="blog content-area">
																<div class="container">
																	<!-- Main title -->
																	<div class="main-title">
																		<h1><span>Customer</span> Testimony</h1>
																	</div>
																	<div class="row">
																		<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft delay-04s">
																			<div class="thumbnail blog-box-2 clearfix">
																				<div class="blog-photo">
																					<img src="img/blog/blog-1.jpg" alt="blog-1" class="img-responsive">
																				</div>
																				<div class="post-meta">
																					<ul>
																						<li class="profile-user">
																							<img src="upload/profilepic/11_flower-shop-fields-of-romance-148245.jpg" alt="user-blog">
																						</li>
																						<li><span>venkat</span></li>
																						<li><i class="fa fa-calendar"></i> Dec 23,2019</li>
																					</ul>
																				</div>
																				<!-- Detail -->
																				<div class="caption detail">
																					<h4><a href="customer-testimony-detail">Venkat Test Review</a></h4>
																					<!-- paragraph -->
																					<p><p>This is the <strong>Message</strong> to be Disp</p>
																					<div class="clearfix"></div>
																					<!-- Btn -->
																					<a href="customer-testimony-detail" class="read-more">Read More...</a>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft delay-04s">
																			<div class="thumbnail blog-box-2 clearfix">
																				<div class="blog-photo">
																					<img src="img/blog/blog-1.jpg" alt="blog-1" class="img-responsive">
																				</div>
																				<div class="post-meta">
																					<ul>
																						<li class="profile-user">
																							<img src="img/avatar/avatar-1.jpg" alt="user-blog">
																						</li>
																						<li><span>sudha</span></li>
																						<li><i class="fa fa-calendar"></i> Dec 19,2019</li>
																					</ul>
																				</div>
																				<!-- Detail -->
																				<div class="caption detail">
																					<h4><a href="customer-testimony-detail">Test Sudha</a></h4>
																					<!-- paragraph -->
																					<p><p>test&nbsp;<strong>sudha</strong></p></p>
																					<div class="clearfix"></div>
																					<!-- Btn -->
																					<a href="customer-testimony-detail" class="read-more">Read More...</a>
																				</div>
																			</div>
																		</div>
																		<div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft delay-04s">
																			<div class="thumbnail blog-box-2 clearfix">
																				<div class="blog-photo">
																					<img src="img/blog/blog-1.jpg" alt="blog-1" class="img-responsive">
																				</div>
																				<div class="post-meta">
																					<ul>
																						<li class="profile-user">
																							<img src="upload/profilepic/8_IMG_20180709_193949.jpg" alt="user-blog">
																						</li>
																						<li><span>Narendra</span></li>
																						<li><i class="fa fa-calendar"></i> Dec 19,2019</li>
																					</ul>
																				</div>
																				<!-- Detail -->
																				<div class="caption detail">
																					<h4><a href="customer-testimony-detail">Test Narendra</a></h4>
																					<!-- paragraph -->
																					<p><p>hdSOAJDJSAOmmkkk&nbsp;<strong>gdwyugyg&nbsp;fds</p>
																						<div class="clearfix"></div>
																						<!-- Btn -->
																						<a href="customer-testimony-detail" class="read-more">Read More...</a>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="main-title">
																			<a href="#" class="btn button-md button-theme ">Read More</a>
																		</div>
																	</div>
																</div>
																<!-- Testimonial end --><script>
																	$(document).ready(function () {
																		$('#home').addClass('active');
																		$('#home').siblings().removeClass('active');
																	});
																</script>
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
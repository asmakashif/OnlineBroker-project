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
					<a href="<?php echo base_url('UserDashboard/');?>" class="logo">
						<img src="<?php echo base_url('assets/img/logos/logo.png');?>" alt="logo">
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
					<ul class="nav navbar-nav">
						<li class="active" id="home">
							<a href="<?php echo base_url('UserDashboard/');?>">Home</a>
						</li>
						<li class="dropdown" id="property_search">
							<a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
								Property Search<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="" id="ps1"><a href="<?php echo base_url('UserDashboard/residentialsearch');?>">Residential Properties</a></li>
								<li class="" id="ps2"><a href="<?php echo base_url('UserDashboard/commercial');?>">Commercial Properties</a></li>
								<li class="" id="ps3"><a href="<?php echo base_url('UserDashboard/office_space');?>">Office Space</a></li>
								<li class="" id="ps4"><a href="<?php echo base_url('UserDashboard/plots');?>">Plots</a></li>
							</ul>
						</li>
						<li class="dropdown" id="insights">
							<a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
								Insights<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="" id="insight1"><a href="<?php echo base_url('UserDashboard/market_analysis');?>">Market Analysis</a></li>
								<li class="" id="insight2"><a href="<?php echo base_url('UserDashboard/demand_supply');?>">Demand vs Supply</a></li>
								<li class="" id="insight3"><a href="<?php echo base_url('UserDashboard/our_network');?>">Our Network</a></li>
							</ul>
						</li>
						<li class="dropdown" id="about_us">
							<a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
								About Us<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="" id="about2"><a href="<?php echo base_url('UserDashboard/about_us');?>">About BrokerOnline.in</a></li>
								<li class="" id="about3"><a href="<?php echo base_url('UserDashboard/customer_testimony');?>">Our customer testimony</a></li>
								<li class="" id="about4"><a href="<?php echo base_url('UserDashboard/connect');?>">Connect with us</a></li>
								<li class="" id="about5"><a href="<?php echo base_url('UserDashboard/about_us');?>">Go to admin</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
						<li class="dropdown" id="userdata">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo base_url('assets/');?>img/user.png" class="profile-image img-circle"> <?php echo $this->session->userdata('email');?><span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li id="userdata1" class=""><a href="<?php echo base_url('userdashboard/user_acc_details');?>"><i class="fa fa-cog"></i> Account Detail</a></li>
								<li id="userdata1" class=""><a href="<?php echo base_url('userdashboard/user_acc_details');?>"><i class="fa fa-address-card"></i> Go to Admin</a></li>
								<li><a href="<?php echo base_url('welcome/logout');?>"><i class="fa fa-sign-out"></i> Sign-out</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
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
							<a href="<?php echo base_url('UserController/user_login');?>" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
						</li>
						<li>
							<a href="<?php echo base_url('UserController/user_register');?>" class="sign-in"><i class="fa fa-user"></i> Register</a>
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
					<a href="index"><img src="<?php echo base_url('assets/images/logo.png');?>" alt="logo" style="width:230px;height:50px;margin-top:15px;margin-right: 15px;"/>
					</a>
					<!-- <a href="index" class="logo">
						<img src="<?php echo base_url('assets/img/logos/logo.png');?>" alt="logo" style="width:250px;height:100px;"/>
					</a> -->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
					<div class="row phone_login_detail">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 remove_pad">
							<div class="top-social-media pull-right">
								<a href="<?php echo base_url('UserController/user_login');?>" class="sign-in"><i class="fa fa-sign-in"></i> Login</a>
								<a href="<?php echo base_url('UserController/user_register');?>" class="sign-in"><i class="fa fa-user"></i> Register</a>
							</div>
						</div>
					</div>
					<ul class="nav navbar-nav">
						<li class="active" id="home">
							<a href="<?php echo base_url('welcome');?>">Home</a>
						</li>
						<li class="dropdown" id="property_search">
							<a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
								Property Search<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="" id="ps1"><a href="<?php echo base_url('main_controller/residentialsearch');?>">Residential Properties</a></li>
								<li class="" id="ps2"><a href="<?php echo base_url('main_controller/commercial');?>">Commercial Properties</a></li>
								<li class="" id="ps3"><a href="<?php echo base_url('main_controller/office_space');?>">Office Space</a></li>
								<li class="" id="ps4"><a href="<?php echo base_url('main_controller/plots');?>">Plots</a></li>
							</ul>
						</li>
						<li class="dropdown" id="insights">
							<a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
								Insights<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="" id="insight1"><a href="<?php echo base_url('main_controller/market_analysis');?>">Market Analysis</a></li>
								<li class="" id="insight2"><a href="<?php echo base_url('main_controller/demand_supply');?>">Demand vs Supply</a></li>
								<li class="" id="insight3"><a href="<?php echo base_url('main_controller/our_network');?>">Our Network</a></li>
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
										<li><a class="dropdown-item" href="<?php echo base_url('main_controller/about_network');?>">Enquire about our Network</a></li>
										<li><a class="dropdown-item" href="<?php echo base_url('main_controller/broker_signup');?>">Join Us</a></li>
									</ul>
								</li>
								<li class="" id="about2"><a href="<?php echo base_url('main_controller/about_us');?>">About BrokerOnline.in</a></li>
								<li class="" id="about3"><a href="<?php echo base_url('main_controller/customer_testimony');?>">Our customer testimony</a></li>
								<li class="" id="about4"><a href="<?php echo base_url('main_controller/connect');?>">Connect with us</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<?php if($this->session->flashdata('flashSuccess')) { ?>
            <div style="width: 30%;margin-top: -4%;z-index: 1;margin-left: 35%;color:red" class="alert alert-dismissible bg-success text-black border-0 fade show successmsg" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo $this->session->flashdata("flashSuccess"); ?>
            </div>
        <?php } ?> 
        <?php if($this->session->flashdata('flashError')) { ?>
            <div style="width: 30%;margin-top: -4%;z-index: 1;margin-left: 35%;color:red" class="alert alert-dismissible bg-danger text-black border-0 fade show errormsg" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo $this->session->flashdata("flashError"); ?>
            </div>
        <?php } ?>
			</nav>
		</div>
	</header>
	<!-- Main header end --><br />
	<?php if($this->session->flashdata('flashSuccess')) { ?>
    <script type="text/javascript">
        window.setTimeout(function() {
            $(".successmsg").fadeTo(1000, 0).slideUp(500, function(){
                $(this).remove(); 
            });
        }, 3000);
    </script>
<?php } ?>  
<?php if($this->session->flashdata('flashError')) { ?>
    <script type="text/javascript">
        window.setTimeout(function() {
            $(".errormsg").fadeTo(900, 0).slideUp(800, function(){
                $(this).remove(); 
            });
        }, 4000);
    </script>
<?php } ?> 
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/skins/default.css">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/');?>img/favicon.ico" type="image/x-icon" >

	<!-- Google fonts -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/ie10-viewport-bug-workaround.css">


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
<body style="font-family: 'Open Sans', sans-serif;background: #fafafa;margin-top:0px;position: relative;">
	<div class="text-center mt-5 mb-1">
		<img src="<?php echo base_url('assets/images/logo.png');?>" alt="Dhaaji" style="width:250px;height:100px;"/>
		<?php if($this->session->flashdata('flashSuccess')) { ?>
            <div style="width:70%;margin-top: -4%;z-index: 1;margin-left:15%;" class="alert alert-dismissible bg-success text-white border-0 fade show successmsg" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo $this->session->flashdata("flashSuccess"); ?>
            </div>
        <?php } ?> 
        <?php if($this->session->flashdata('flashError')) { ?>
            <div style="width:70%;margin-top: -4%;z-index: 1;margin-left:15%;" class="alert alert-dismissible bg-danger text-white border-0 fade show errormsg" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo $this->session->flashdata("flashError"); ?>
            </div>
        <?php } ?>
    </div>
	<!-- Content area start -->
	<div class="container set-height">
		<div class="row">
			<div class="col-lg-12">
				<!-- Form content box start -->
				<div class="form-content-box">
					<!-- details -->
					<div class="details">
						<!-- Main title -->
						<div class="main-title">
							<h1><span>Login</span></h1>
						</div>
						<!-- Form start -->
						<?php echo form_open('userController/auth');?>
							<div class="form-group">
								<input type="email" name="email" id="email" class="input-text" placeholder="Email Address">
							</div>
							<div class="form-group">
								<input type="password" name="password" id="password" class="input-text" placeholder="Password">
							</div>
							<div class="checkbox">
								<div class="ez-checkbox pull-left">
									<label>
										<input type="checkbox" class="ez-hide">
										Remember me
									</label>
								</div>
								<a href="forgot-password" class="link-not-important pull-right">Forgot Password</a>
								<div class="clearfix"></div>
							</div>
							<div class="form-group">
								<button type="submit" id="submit" class="button-md button-theme btn-block">login</button>
							</div>
						<?php echo form_close();?>
						<!-- Form end -->
					</div>
					<!-- Footer -->
					<div class="footer">
						<span>
							New to BrokerOnline? <a href="<?php echo base_url('usercontroller/user_register');?>">Sign up now</a>
						</span>
					</div>
				</div>
				<!-- Form content box end -->
			</div>
		</div>
	</div>
	<!-- Content area end -->

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
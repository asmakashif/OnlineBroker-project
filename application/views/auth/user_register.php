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
				<div class="form-content-box" ng-app="registration-app">
					<!-- details -->
					<div class="details" ng-controller="register-form">
						<!-- Main title -->
						<div class="main-title">
							<h1><span>Signup</span></h1>
						</div>
						<!-- Form start-->
						<form action="<?php echo base_url('userController/saveUserData');?>" method="POST" name="regi_form">
							<div class="form-group">
								<input type="text" name="fullname" class="input-text" placeholder="Full Name" ng-pattern="/^[a-z A-Z .]+$/" ng-model="fullname" oninvalid="this.setCustomValidity('Please Enter Full Name.')" oninput="this.setCustomValidity('')" required>
								<input type="text" name="role_id" class="input-text" value="4" readonly="">
								<span ng-show="regi_form.fullname.$touched && regi_form.fullname.$invalid" class="val_red">
									<span ng-show="regi_form.fullname.$error.required" class="val_red">
									Please Enter Full Name.</span>
									<span ng-show="regi_form.fullname.$error.pattern" class="val_red">
									Please Enter Valid Full Name.</span>
								</span>
							</div>
							<div class="form-group">
								<input type="email" name="email" class="input-text" placeholder="Email Address"  ng-model="email" oninvalid="this.setCustomValidity('Please Enter Email Id.')" oninput="this.setCustomValidity('')" required>
								<span ng-show="regi_form.email.$touched && regi_form.email.$invalid" class="val_red">
									<span ng-show="regi_form.email.$error.required" class="val_red">
									Please Enter Email Id.</span>
									<span ng-show="regi_form.email.$error.email" class="val_red">
									Please Enter Valid Email Id.</span>
								</span>
							</div>
							<div class="form-group">
								<input type="number" name="mobile" class="input-text" placeholder="Mobile Number" ng-pattern="/^[0-9]{10}$/" ng-model="mobile" oninvalid="this.setCustomValidity('Please Enter Mobile Number.')" oninput="this.setCustomValidity('')" required>
								<span ng-show="regi_form.mobile.$touched && regi_form.mobile.$invalid" class="val_red">
									<span ng-show="regi_form.mobile.$error.required" class="val_red">
										Please Enter Mobile Number.
									</span>
									<span ng-show="regi_form.mobile.$error.pattern" class="val_red">
										Please Enter Valid Mobile Number.
									</span>
								</span>
							</div>
							<div class="form-group">
								<input type="text" class="input-text" name="user_id" readonly="readonly" value="<?php $cc = 
									$this->db->select('*');
									$this->db->from('tbl_user');
									$this->db->where('role_id',4);
									$cc= $this->db->count_all_results()+1;
							        $coun = str_pad($cc, 5, 0, STR_PAD_LEFT); // Updated line to include '0'
							        $id = "u"."-"."bkr"."-";
							        $customid = $id.$coun;
							        echo $customid; 
								?>" readonly="" required>
							</div>
							<div class="checkbox">
								<div class="ez-checkbox pull-right">
									<label>
										<input type="checkbox" name="whatsapp" class="ez-hide" value="1">
										Is Whatsapp Enabled On It
									</label>
								</div>
								<br>
							</div>
							<div class="form-group">
								<div class="radio">
									<div class="ez-radio pull-left">
										<label>
											Interested In?&nbsp;
										</label>
									</div>
									<div class="ez-radio">
										<label>
											<input type="radio" name="interested_in" value="Buying">
											Buying
										</label>
										<label>
											<input type="radio" name="interested_in" value="Renting">
											Renting
										</label>
										<label>
											<input type="radio" name="interested_in" value="Leasing">
											Leasing
										</label>
									</div>
								</div>
    						
								<!-- <select name="interested_in" id="val_select" class="form-control" required data-md-selectize style="color:black;" >
	                                <option value="">Interested In</option>
	                                <option value="Buying">Buying</option>
	                                <option value="Renting">Renting</option>
	                                <option value="Leasing">Leasing</option>
	                            </select> -->
	                        </div>
	                        <div class="form-group">
	                        	<div class="radio">
									<div class="ez-radio pull-left">
										<label>
											Type Of Property&nbsp;
										</label>
									</div>
									<div class="ez-radio">
										<label>
											<input type="radio" name="typeofproperty" value="Residential">
											Residential
										</label>
										<label>
											<input type="radio" name="typeofproperty" value="Commercial">
											Commercial
										</label>
										<label>
											<input type="radio" name="typeofproperty" value="Plots">
											Plots
										</label>
									</div>
								</div>
								<!-- <select name="typeofproperty" id="val_select" class="form-control" required data-md-selectize style="color:black;" >
	                                <option value="">Type Of Property</option>
	                                <option value="Residential">Residential</option>
	                                <option value="Commercial">Commercial</option>
	                                <option value="Plots">Plots</option>
	                            </select> -->
	                        </div>
							<div class="form-group">
								<input type="password" name="password" class="input-text" placeholder="Password" ng-model="password" ng-pattern="/^(?=.*[0-9])(?=.*[!@#$%&*])[a-zA-Z0-9!@#$%&*]{5,20}$/" oninvalid="this.setCustomValidity('Please Enter Password')" oninput="this.setCustomValidity('')" required>
								<span ng-show="regi_form.password.$touched && regi_form.password.$invalid" class="val_red">
									<span ng-show="regi_form.password.$error.required" class="val_red">
										Please Enter Password
									</span> 
									<span ng-show="regi_form.password.$error.pattern" class="val_red">
										Password Must have 1 Lower, 1 Upper Letter, 1 Special Character & between 5 - 20 Characters.
									</span>
								</span>
							</div>
							<div class="form-group">
								<input type="password" name="confirm_Password" class="input-text" placeholder="Confirm Password" ng-model="confirm_Password" ng-pattern="/^(?=.*[0-9])(?=.*[!@#$%&*])[a-zA-Z0-9!@#$%&*]{5,20}$/" oninvalid="this.setCustomValidity('Please Enter Confirm Password')" oninput="this.setCustomValidity('')" required>
								<span ng-show="regi_form.confirm_Password.$touched">
									<span ng-show="regi_form.confirm_Password.$invalid">
										<span ng-show="regi_form.confirm_Password.$error.required" class="val_red">
											Please Enter Confirm Password
										</span> 
										<span ng-show="regi_form.confirm_Password.$error.pattern" class="val_red">
											Password Must have 1 Lower, 1 Upper Letter, 1 Special Character & between 5 - 20 Characters.
										</span>
									</span>
								</span>
								<br>
								<span ng-show="regi_form.password.$modelValue !== regi_form.confirm_Password.$modelValue" class="val_red">
									Password Not Matched
								</span>
							</div>
							<!-- <div class="form-group">
								<input type="hidden" name="address" id="location" class="input-text" placeholder="Address" required>
							</div> -->
							<div class="form-group">
								<input type="text" name="txtlat" id="txtlat" class="input-text" placeholder="Latitude" required value="">
							</div>
							<div class="form-group">
								<input type="text" name="txtlang" id="txtlang" class="input-text" placeholder="Longitude" required value="">
							</div>
							<div class="form-group">
								<button type="submit" class="button-md button-theme btn-block">Signup</button>
							</div>
						</form>
						<!-- Form end-->
					</div>
					<!-- Footer -->
					<div class="footer">
						<span>
						I want to <a href="<?php echo base_url('userController/user_login');?>">return to login</a>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/');?>geoloc.js"></script>
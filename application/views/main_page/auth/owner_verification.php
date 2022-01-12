<!-- Content area start -->
<div class="container set-height">
		<div class="row">
		<div class="col-lg-12">
			<!-- Form content box start -->
			<div class="form-content-box2" ng-app="registration-app">
				<!-- details -->
				<div class="details" ng-controller="register-form">
					<!-- Main title -->
					<div class="main-title">
						<h1><span>User Registration</span></h1>
					</div>
					<!-- Form start-->
					<form action="<?php echo base_url('userController/verfiyOwner');?>" method="POST" name="regi_form">
						<div class="row">
							<div class="col-sm-6">
								<!-- <input type="text" name="organisation_name" class="input-text" placeholder="Organisation Name" id="autouser"> -->
    							<div class="form-group">
									<input type="text" name="organisation_name" class="input-text" placeholder="Organisation Name" id="autouser" required>
								</div>
							</div>
							<div class="col-sm-6">
    							<div class="form-group">
									<input class="input-text" type="text" name="owner_fullname" id = "txt" onkeyup = "Validate(this)" placeholder="Enter Owner Full Name" required /> 
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
    							<div class="form-group">
									<input  name="owner_mobile" class="input-text" placeholder="Enter Owner Mobile Number" value="<?php echo set_value('contact'); ?>" pattern="[1-9]{1}[0-9]{9}" maxlength="10" required/>
								</div>
							</div>
							<div class="col-sm-6">
    							<div class="form-group">
									<input name="owner_email" class="input-text" type="email" placeholder="Enter Owner Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo set_value('email'); ?>"/>
									<input type="hidden" name="role_id" class="input-text" value="3" readonly="">
								</div>
							</div>
							<div class="col-sm-6">
								<!-- <input type="text" id="userid" class="input-text" value='0' > -->
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<input type="hidden" id="userid" name="owner_id" class="input-text" value="0" readonly="">
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<input type="hidden" id="textbox" class="input-text" name="broker_id" readonly="readonly" value="<?php $cc = $this->db->select('*');$this->db->from('tbl_broker');$this->db->where('own_agency','No');$cc= $this->db->count_all_results()+1;
												$num = str_pad($cc, 0, STR_PAD_LEFT);
										        $customid =$num;
										        echo $customid; 
											?>" readonly="" required> 
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" name="fullname" class="input-text" placeholder="Full Name" ng-pattern="/^[a-z A-Z .]+$/" ng-model="fullname" oninvalid="this.setCustomValidity('Please Enter Full Name.')" oninput="this.setCustomValidity('')" required>
									<span ng-show="regi_form.fullname.$touched && regi_form.fullname.$invalid" class="val_red">
										<span ng-show="regi_form.fullname.$error.required" class="val_red">
											Please Enter Full Name.
										</span>
										<span ng-show="regi_form.fullname.$error.pattern" class="val_red">
											Please Enter Valid Full Name.
										</span>
									</span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="email" name="email" class="input-text" placeholder="Email Address"  ng-model="email" oninvalid="this.setCustomValidity('Please Enter Email Id.')" oninput="this.setCustomValidity('')" required>
									<span ng-show="regi_form.email.$touched && regi_form.email.$invalid" class="val_red">
										<span ng-show="regi_form.email.$error.required" class="val_red">
											Please Enter Email Id.
										</span>
										<span ng-show="regi_form.email.$error.email" class="val_red">
											Please Enter Valid Email Id.
										</span>
									</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
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
							</div>

							<div class="col-sm-6">
								<div class="checkbox">
									<div class="ez-checkbox pull-left">
										<label>
											<input type="checkbox" name="whatsapp" class="ez-hide" value="1">
											Is Whatsapp Enabled On It
										</label>
									</div>
									<br>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<textarea name="address" class="form-control" placeholder="Detail Address" ng-model="address" rows=5 required></textarea>
									<span ng-show="regi_form.address.$touched && regi_form.address.$invalid" class="val_red">
										<span ng-show="regi_form.address.$error.required" class="val_red">
											Please Enter Detail Address
										</span>
									</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<select class="input-text" name="state" id="listBox" ng-model="state" onchange='selct_district(this.value)' required>
										<option value="">Select State</option>
									</select>
									<span ng-show="regi_form.state.$touched && regi_form.state.$invalid" class="val_red">
										<span ng-show="regi_form.state.$error.required" class="val_red">
											Please Select State.
										</span>
									</span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<select class="input-text" name="city" id='secondlist' ng-model="city" required>
										<option value="">Select City</option>
									</select>
									<span ng-show="regi_form.city.$touched && regi_form.city.$invalid" class="val_red">
										<span ng-show="regi_form.city.$error.required" class="val_red">
											Please Select City.
										</span>
									</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" name="country" class="input-text" placeholder="Country" value="India" readonly required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="number" name="pincode" class="input-text" placeholder="Postal / Zip Code" ng-pattern="/^[0-9]{6}$/" ng-model="pincode" oninvalid="this.setCustomValidity('Please Enter Postal / Zip Code.')" oninput="this.setCustomValidity('')" required>
									<span ng-show="regi_form.pincode.$touched && regi_form.pincode.$invalid" class="val_red">
										<span ng-show="regi_form.pincode.$error.required" class="val_red">
											Please Enter Postal / Zip Code.
										</span>
										<span ng-show="regi_form.pincode.$error.pattern" class="val_red">
											Please Enter Valid Postal / Zip Code.
										</span>
									</span>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-6">
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
							</div>
							<div class="col-sm-6">
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
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" class="button-md button-theme btn-block">Signup</button>
								</div>
							</div>
						</div>
					</form>
					<!-- Form end-->
				</div>
				<!-- Footer -->
				<div class="footer">
					<span>
						I want to <a href="login">return to login</a>
					</span>
				</div>
			</div>
			<!-- Form content box end -->
		</div>
	</div>
</div>
<!-- Content area end -->

<script type="text/javascript">
	function yesnoCheck() 
	{
	    if (document.getElementById('yesCheck').checked) 
	    {
        	document.getElementById('ifIndividual').style.display = 'block';
        	document.getElementById("ifIndividual").disabled = false;
    	}
    	else 
    	{	document.getElementById('ifIndividual').style.display = 'none';
    		document.getElementById("ifIndividual").disabled = true;
    	}	

	    if (document.getElementById('noCheck').checked) 
	    {
	    	window.open('http://localhost/OnlineBroker/main_controller/owner_verify','_self');
	        // document.getElementById('ifNo').style.display = 'block';
	        // document.getElementById("ifNo").disabled = false;
	    }
	    else 
	    {
	    	document.getElementById('ifNo').style.display = 'none';
	    	document.getElementById("ifNo").disabled = true;
	    }	
	}
</script>
<script type="text/JavaScript" src='<?php echo base_url('assets/');?>js/state.js'></script>
<script src="<?php echo base_url('');?>assets/js/validate.js"></script>
<!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- jQuery UI -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type='text/javascript'>
    $(document).ready(function(){

     // Initialize 
     $( "#autouser" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url: "<?=base_url()?>index.php/User/userList",
            type: 'post',
            dataType: "json",
            data: {
              search: request.term
            },
            success: function( data ) {
              response( data );
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('#autouser').val(ui.item.label); // display the selected text
          $('#userid').val(ui.item.value); // save selected id to input
          return false;
        }
      });

    });
    </script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
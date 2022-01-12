
<!-- Main header end --><!-- Sub banner start -->
<div class="sub-banner overview-bgi">
	<div class="overlay">
		<div class="container">
			<div class="breadcrumb-area">
				<h1>My Profile</h1>
				<ul class="breadcrumbs">
					<li><a href="index">Home</a></li>
					<li class="active">My Profile</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Sub Banner end -->
<!-- My profile start -->
<div class="content-area my-profile">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<!-- User account box start -->
				<div class="user-account-box">
					<div class="header clearfix">
						<form action="" method="post" enctype="multipart/form-data">
							<div class="edit-profile-photo">
								<img src="<?php echo base_url('assets/');?>img/user.png" alt="agent-1" class="img-responsive">
								<div class="change-photo-btn pull-left">
									<div class="photoUpload">
										<span style="color:#95c41f;"><i class="fa fa-upload"></i> Upload Photo</span>
										<input type="file" class="upload" id="profile_pic" name="profile_pic">
									</div>
								</div>

							</div>
							<div class="btn pull-rignt">
								<button type="submit" name="upload_pic" id="upload_pic" class="btn btn-primary">Submit</button>
							</div>
						</form>

						<h3>Asma</h3>
						<p>umme94@gmail.com</p>

					</div>
					<div class="content" id="active_user_menu">
						<ul>
							<li>
								<a href="user-detail" id="um_profile" class="">
									<i class="flaticon-social"></i>Profile
								</a>
							</li>
							<li>
								<a href="shortlisted-properties" id="um_selected_properties" class="">
									<i class="fa fa-heart"></i>Shortlisted Properties
								</a>
							</li>
							<li>
								<a href="add-testimony" id="um_add_testimony" class="">
									<i class="fa fa-thumbs-o-up"></i>Add A Review
								</a>
							</li>
							<li>
								<a href="user-change-password" id="um_change_pass" class="">
									<i class="flaticon-security"></i>Change Password
								</a>
							</li>
							<li>
								<a href="#" onclick="user_logout()" id="um_logout" class="">
									<i class="flaticon-sign-out-option"></i>Sign-out
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- User account box end -->

			</div>
			<div class="col-lg-8 col-md-8 col-sm-12">
				<!-- My address start-->
				<div class="my-address">
					<div class="main-title-2">
						<h1><span>Profile</span> Detail</h1>
					</div>
					<div class="row">
						<div class="col-sm-3"><p><strong>Full Name</strong></p></div>
						<div class="col-sm-9"><p>: Asma</p></div>
					</div>
					<div class="row">
						<div class="col-sm-3"><p><strong>Email Id</strong></p></div>
						<div class="col-sm-7"><p>: umme94@gmail.com</p></div><div class="col-sm-2 blink_me"  title="Email Id Is Not Verified"><i class="fa fa-exclamation-circle val_red"></i></div>					</div>
						<div class="row">
							<div class="col-sm-3"><p><strong>Mobile Number</strong></p></div>
							<div class="col-sm-7"><p>: 9164690169</p></div><div class="col-sm-2 blink_me" title="Mobile Number Is Not Verified"><i class="fa fa-exclamation-circle val_red"></i></div>					</div>
							<div class="row">
								<div class="col-sm-3"><p><strong>About You</strong></p></div>
								<div class="col-sm-7"><p>: Waiting For you to Add Something About Yourself</p></div><div class="col-sm-2 blink_me" title="About Yourself Not Given"><i class="fa fa-exclamation-circle val_red"></i></div>					</div>
								<br>
								<div class="row">
									<div class="pull-right">
										<a href="user-profile-edit" class="btn button-md button-theme"> Edit Your Profile </a>
									</div>
								</div>
							</div>
							<!-- My address end -->

							<!-- Social Media Detail start-->
							<div class="my-address">
								<div class="main-title-2">
									<h1><span>Social Media</span> Detail</h1>
								</div>
								<div class="row">
									<div class="col-sm-3"><p><strong>Facebook</strong></p></div>
									<div class="col-sm-9"><p>: Add Your Facebook Link</p></div>
								</div>
								<div class="row">
									<div class="col-sm-3"><p><strong>Twitter</strong></p></div>
									<div class="col-sm-9"><p>: Add Your Twitter Link</p></div>
								</div>
								<div class="row">
									<div class="col-sm-3"><p><strong>Linked IN</strong></p></div>
									<div class="col-sm-9"><p>: Add Your Linked IN Link</p></div>
								</div>
								<div class="row">
									<div class="col-sm-3"><p><strong>Google +</strong></p></div>
									<div class="col-sm-9"><p>: Add Your Google + Link</p></div>
								</div>
								<div class="row">
									<div class="col-sm-3"><p><strong>YouTube</strong></p></div>
									<div class="col-sm-9"><p>: Add Your YouTube Link</p></div>
								</div>
								<br>
								<div class="row">
									<div class="pull-right">
										<a href="user-social-links-edit" class="btn button-md button-theme"> Edit Social Links</a>
									</div>
								</div>
							</div>
							<!-- Social Media Detail end -->
						</div>
					</div>
				</div>
			</div>
			<!-- My profile end -->



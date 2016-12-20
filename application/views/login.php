<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login Page - Sekolah Startup</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>/assets_ace/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>/assets_ace/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets_ace/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="<?php echo base_url();?>/assets_ace/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets_ace/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets_ace/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body class="login-layout">
		<div class="main-container container-fluid">
			<div class="main-content">
				<div class="row-fluid">
					<div class="span12">
						<div class="login-container">
							<div class="row-fluid">
								<div class="center">
								<br>
									<h1>
										<i class="icon-code green"></i>
										<span class="red">User</span>
										<span class="white">Login</span>
									</h1>
									<h4 class="blue">&copy; Sekolah Startup</h4>
								</div>
							</div>

							<div class="space-6"></div>

							<div class="row-fluid">
								<div class="position-relative">
									<div id="login-box" class="login-box visible widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header blue lighter bigger">
													<i class="icon-coffee green"></i>
													Please Enter Your Information
												</h4>

												<div class="space-6"></div>

												<form action="<?php echo base_url('login/masuk');?>" method="post">
													<fieldset>
														<label>
															<span class="block input-icon input-icon-right">
																<input type="text" class="span12" name="username"  id="username" placeholder="Username" required >
																<i class="icon-user"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" class="span12" name="password" id="password" placeholder="Password" required>
																<i class="icon-lock"></i>
															</span>
														</label>

														<div class="space"></div>

														<div class="clearfix">
														
														<input type="submit" value="Login" class="width-35 pull-right btn btn-small btn-primary ">
														</div>

														<div class="space-4"></div>
													</fieldset>


													<?php
													        if($this->session->flashdata('pesan') <> ''){
													        ?>
													          <div class="alert alert-dismissible alert-danger">
													            <?php echo $this->session->flashdata('pesan');?>
													          </div>
													        <?php
													        }
													        ?>
												</form>

												<div class="social-or-login center">
													<span class="bigger-110">&copy; 2016</span>
												</div>

												
											</div><!--/widget-main-->

											

									
								</div><!--/position-relative-->
							</div>
						</div>
					</div><!--/.span-->
				</div><!--/.row-fluid-->
			</div>
		</div><!--/.main-container-->

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url();?>/assets_ace/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='<?php echo base_url();?>/assets_ace/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo base_url();?>/assets_ace/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--ace scripts-->

		<script src="<?php echo base_url();?>/assets_ace/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
			function show_box(id) {
			 $('.widget-box.visible').removeClass('visible');
			 $('#'+id).addClass('visible');
			}
		</script>
	</body>
</html>

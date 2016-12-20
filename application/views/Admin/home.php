<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Sekolah Startup</title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?php echo base_url();?>/assets_ace/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>/assets_ace/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets_ace/css/font-awesome.min.css" />


		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="<?php echo base_url();?>/assets_ace/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets_ace/ss/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>/assets_ace/css/ace-skins.min.css" />

		

		<!--==================CCS MIRACLE================>



		<!--==================CCS MIRACLE END============>








		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>
		<!-- UPPERBAR -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="admin" class="brand">
						<small>
							<i class="icon-code" aria-hidden="true"></i>
							Sekolah Startup
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						
						<li class="light-blue" style="float:right">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="user-info">
									<small>Selamat Datang,</small>
									Admin
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="<?php echo base_url();?>Login/Keluar">
										<i class="icon-signout"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>
		<!-- UPPERBAR END -->


		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>


			<!-- SIDEBAR -->
			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">

						<a href="Guru">
						<button class="btn btn-small btn-success">
							<i class="icon-briefcase"></i>
						</button>
						</a>

						<a href="Siswa">
						<button class="btn btn-small btn-info">
							<i class="icon-group"></i>
						</button>
						</a>

						<a href="Nilai">
						<button class="btn btn-small btn-warning">
							<i class="icon-list-alt"></i>
						</button>
						</a>

						<a href="<?php echo base_url();?>Login/Keluar">
						<button class="btn btn-small btn-danger">
							<i class="icon-signout"></i>
						</button>
						</a>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li>
						<a href="admin">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>

					<li>
						<a href="Guru">
							<i class="icon-briefcase"></i>
							<span class="menu-text"> Kelola Guru </span>
						</a>
					</li>

					
					<li>
						<a href="Siswa">
							<i class="icon-group"></i>
							<span class="menu-text"> Kelola Siswa</span>
						</a>
					</li>

					<li>
						<a href="Nilai">
							<i class="icon-list-alt"></i>
							<span class="menu-text"> Kelola Nilai Siswa </span>
						</a>
					</li>

					<li>
						<a href="User">
							<i class="icon-gear	"></i>
							<span class="menu-text">
								Kelola User
								</span>
							</span>
						</a>
					</li>

					<li>
						<a href="Pengumuman">
							<i class="icon-bullhorn"></i>
							<span class="menu-text"> Kelola Pengumuman </span>
						</a>
					</li>
				</ul><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>
			<!-- SIDEBAR END -->

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
				</div>

				<div class="page-content">
					<div class="row-fluid">
						<div class="span12">
							<!--==========================PAGE CONTENT BEGINS===================-->



							<div class="jumbotron">
					        <h1>Hello Admin!</h1>
					        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>

	     					 </div>









							<!--==========================PAGE CONTENT ENDS=====================-->
					    
					    </div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-class="default" value="#438EB9" />#438EB9
									<option data-class="skin-1" value="#222A2D" />#222A2D
									<option data-class="skin-2" value="#C6487E" />#C6487E
									<option data-class="skin-3" value="#D0D0D0" />#D0D0D0
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-header" />
							<label class="lbl" for="ace-settings-header"> Fixed Header</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>
					</div>
				</div><!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

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
		<script src="<?php echo base_url();?>/assets_ace/js/ace.min.js"></script>

		<!--inline scripts related to this page-->
	</body>
</html>

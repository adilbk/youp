<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Youpel - Login</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="<?php echo back_asset_url(); ?>/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="<?php echo back_asset_url(); ?>/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="<?php echo back_asset_url(); ?>/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="<?php echo back_asset_url(); ?>/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		<!-- END STYLESHEETS -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo back_asset_url(); ?>/js/libs/utils/html5shiv.js?1403934957"></script>
		<script type="text/javascript" src="<?php echo back_asset_url(); ?>/js/libs/utils/respond.min.js?1403934956"></script>
		<![endif]-->
	</head>
	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('http://infospace.ischool.syr.edu/files/2013/03/886979_317221108400001_853357981_o.jpg')"></div>
			<div class="spacer"></div>
			<div class="card contain-sm style-transparent">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<br/>
							<span class="text-lg text-bold text-primary">Youpel Login</span>
							<br/><br/>
							<form class="form floating-label" action="<?php echo base_url().'login/auth'; ?>" accept-charset="utf-8" method="post">
								<div class="form-group">
									<input type="text" class="form-control" id="email" name="email">
									<label for="username">Email</label>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="password" name="password">
									<label for="password">Password</label>
									<p class="help-block"><a href="#">Forgotten?</a></p>
								</div>
								<br/>
								<div class="row">
									<div class="col-xs-6 text-left">
										<div class="checkbox checkbox-inline checkbox-styled">
											<label>
												<input type="checkbox"> <span>Remember me</span>
											</label>
										</div>
									</div><!--end .col -->
									<div class="col-xs-6 text-right">
										<button class="btn btn-primary btn-raised" type="submit">Login</button>
									</div><!--end .col -->
								</div><!--end .row -->
							</form>
						</div><!--end .col -->
						<div class="col-sm-5 col-sm-offset-1 text-center">
							<br><br>
								<h3 class="text-light">
									No account yet?
								</h3>
								<a class="btn btn-block btn-raised btn-primary" href="#">Sign up here</a>
								<br><br>
								</div><!--end .col -->
							</div><!--end .row -->
						</div><!--end .card-body -->
					</div><!--end .card -->
				</section>
				<!-- END LOGIN SECTION -->

				<!-- BEGIN JAVASCRIPT -->
				<script src="<?php echo back_asset_url(); ?>/js/libs/jquery/jquery-1.11.2.min.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/libs/bootstrap/bootstrap.min.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/libs/spin.js/spin.min.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/libs/autosize/jquery.autosize.min.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/core/source/App.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/core/source/AppNavigation.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/core/source/AppOffcanvas.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/core/source/AppCard.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/core/source/AppForm.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/core/source/AppNavSearch.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/core/source/AppVendor.js"></script>
				<script src="<?php echo back_asset_url(); ?>/js/core/demo/Demo.js"></script>
				<!-- END JAVASCRIPT -->

			</body>
		</html>

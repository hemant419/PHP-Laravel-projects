<!doctype html>
<html class="no-js" lang="">
<head>

<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/invoice.png" type="image/x-icon">
<link rel="icon" href="<?php echo base_url(); ?>assets/images/invoice.png" type="image/x-icon">
<title>:: Admin Dashboard ::</title>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
<!-- CSS Files -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/animsition.min.css">
<link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('<?php echo base_url() ?>assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
					<div class="card card-signup">
		<form class="form" method="post" action="<?php echo site_url() ?>/welcome/checkEmail">
							<div class="header header-primary text-center">
								<h4>Forgot Password?</h4>
							</div>
							<h3 class="mt-0">Webmarket</h3>
							<p class="text-muted p-15">Enter your e-mail address below to reset your password.</p>
							<div class="content">
						<?php echo $findEmail;?>	
								<div class="form-group">
				<input type="email" name="emailForget" class="form-control underline-input" placeholder="Enter Your Email">	<p style="color:red"><?php echo $emailForget;?></p>
								</div>
							</div>
							<div class="footer text-center mb-20">
				<input type="submit" name="submit" value="Submit" class="btn btn-info btn-raised">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center mt-20"> <a href="login.html" class="text-uppercase text-white">Back</a> </div>
				</div>
			</div>
		</footer>
	</div>
</div>
<!--  Vendor JavaScripts --> 
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script> <!-- Custom Js -->
</body>

</html>
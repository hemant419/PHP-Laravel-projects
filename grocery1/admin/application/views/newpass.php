<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from thememakker.com/templates/falcon/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:57:08 GMT -->
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon">
  <title>:: Falcon - Admin Dashboard ::</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
  <div class="wrapper">
    <div class="header header-filter" style="background-image:
	 url(<?php echo base_url() ?>assets/images/Untitled-5.jpg); 
	 background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
              <form class="form" method="post" action="<?php echo site_url() ?>/Welcome/changepass">
                <div class="header header-primary text-center">
                  <h4>New Password</h4>
                  <div class="social-line">
                    <a href="javascript:void(0);" class="btn btn-just-icon">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a  href="javascript:void(0);" class="btn btn-just-icon">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="javascript:void(0);" class="btn btn-just-icon">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div>
                </div>
               
                <div class="content">
                  <div class="form-group">
				  
                    <input type="password" name="oldpass" class="form-control underline-input"
					 placeholder="Enter old password...">
                  </div>
                  <div class="form-group">
                  	<input type="password" name="newpass" placeholder="Enter New Password..." class="form-control underline-input">
                  </div>
				   <div class="form-group">
                    <input type="password" name="cpass" placeholder="Enter Conform Password..." class="form-control" />
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="optionsCheckboxes"> Remember me</label>
                  </div>
                </div>
                   <p style="color:#F00"><?php echo $error;  ?></p>
                  <p style="color:#F00"><?php echo $errorp;  ?></p>
                <div class="footer text-center">
                  <input type="submit" name="submit" value="submit" class="btn btn-info btn-raised">
                </div>
                 </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer mt-20">
        <div class="container">
          <div class="col-lg-12 text-center">
           
            <div class="copyright text-white mt-20"> &copy; 2017, made with
              <i class="fa fa-heart heart"></i> by
              <a href="http://thememakker.com/" target="_blank">Theme Makker</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--  Vendor JavaScripts -->
  <script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
  <script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
  <!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:57:08 GMT -->
</html>
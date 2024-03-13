<!doctype html>
<html class="no-js" lang="">

<head>
 
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/invoice.png" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url() ?>assets/images/invoice.png" type="image/x-icon">
  <title>:: Falcon - Admin Dashboard ::</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
  <div class="wrapper">
    <div class="header header-filter" style="background-image: url('<?php echo base_url() ?>assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
              <form class="form" method="post" action="<?php echo site_url()?>/welcome/setnewpassword">
                <div class="header header-primary text-center">
                  <h4>Sign in</h4>
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
                <h3 class="mt-0">Webmarket</h3>
                <p class="help-block">Or Be Classical</p>
                <div class="content">
					<p style="color:red"><?php echo $this->session->userdata('forgetEmail');?></p>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control underline-input" placeholder="Enter New Password">
					<p style="color:red" ><?php echo $newpassErr; ?></p>
                  </div>
                  <div class="form-group">
                    <input type="password" name="cpassword" placeholder="Re-enter Password..." class="form-control underline-input">
					<p style="color:red" ><?php echo $cnewpassErr; ?></p>
                  </div>
                 
                </div>
                <div class="footer text-center">
                  <input type="submit" class="btn btn-info btn-raised" value="Save" name="Save">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer mt-20">
        <div class="container">
          <div class="col-lg-12 text-center">
           <div class="copyright text-white mt-20"> &copy; 2018, made with
              <i class="fa fa-heart heart"></i> by
              <a href="http://thememakker.com/" target="_blank">Webmarket</a>
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
</html>
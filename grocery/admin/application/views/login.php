<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from thememakker.com/templates/falcon/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:57:08 GMT -->
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon">
  <title>:: Admin Dashboard ::</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
  <div class="wrapper">
    <div class="header header-filter" style="background-image:
	 url(<?php echo base_url() ?>assets/images/bg.jpg); 
	 background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
              <form class="form" method="post" action="<?php echo site_url() ?>/Welcome/checkadmin">
                <div class="header header-primary text-center" >
                  <h4>Sign in</h4>
                </div>
                <p class="help-block" style="color: #308030">Grocery</p>
                <div class="content" >
                  <div class="form-group" >
				  
                    <input type="email" name="email" class="form-control underline-input" placeholder="Enter Your Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" placeholder="Password..." class="form-control underline-input">
                  </div>
                  <p style="color:#F00"><?php echo $error;  ?></p>
                 
                </div>
                
                <div class="footer text-center">
                  <input style="background-color:#FC0" type="submit" name="Login" value="Login" class="btn btn-info btn-raised">
                </div>
                <a href="<?php echo site_url() ?>/Welcome/forgopass" class="btn btn-wd">Forgot Password?</a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer mt-20">
        <div class="container">
          
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
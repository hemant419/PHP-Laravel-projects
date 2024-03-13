<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from thememakker.com/templates/falcon/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:57:08 GMT -->
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon">
  <title>:: Grocery - Admin Dashboard ::</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
  <div class="wrapper">
    <div class="header header-filter" style="background-image: url('<?php echo base_url() ?>assets/images/Untitled-5.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
              <form class="form" method="post" name="forgot" id="query">
                <div class="header header-primary text-center">
                  <h4>Update Password</h4>
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
                <h3 class="mt-0">Super Grocery</h3>
                
                <div class="content">
                  <div class="form-group">
                    <input type="password" class="form-control underline-input" id="apass"  placeholder="Enter Your New Password" name="npass">
                  </div>
                  <p id="PassErr" style="color:#060"></p>
                  <div class="form-group">
                    <input type="password" placeholder="Comfirm Password..." class="form-control underline-input" name="cpass">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="optionsCheckboxes"> Remember me</label>
                  </div>
                </div>
                <p style="color:#F00"><?php echo $error;  ?></p>
                <div class="footer text-center">
                  <input type="submit" name="updatepass" value="update password" class="btn btn-info btn-raised" onclick="return askQuery()" >
                </div>
                
                <a href="#" class="btn btn-wd"></a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer mt-20">
        <div class="container">
          <div class="col-lg-12 text-center">
            	<a href="<?php echo site_url() ?>/Welcome/" class="text-uppercase text-white">Back</a>
            <div class="copyright text-white mt-20"> &copy; 2017, made with
              <i class="fa fa-heart heart"></i> by
              <a href="http://thememakker.com/" target="_blank">Theme Makker</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script>
  function askQuery()
	{
		
		var pass=document.getElementById("apass").value;
		
		
		//$("#nameErr").html("");$("#emailErr").html("");
			
		
		if(pass=="")
		{

			$("#PassErr").html("Please Enter Your Password !!!");
			document.forgot.apass.focus();
			return false;
		}	
		
		else 
		{
			document.getElementById('query').action = "<?php echo site_url()?>/Welcome/updatepasswordnow";

		}
	}
</script>
  <!--  Vendor JavaScripts -->
  <script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
  <script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
  <!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:57:08 GMT -->
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>


<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from thememakker.com/templates/falcon/html/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:58:11 GMT -->
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon">
  <title>:: Falcon - Admin Dashboard ::</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
  <!--  Fonts and icons -->
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">

</head>

<body id="falcon" class="authentication">
  <!-- Application Content -->
  <div class="wrapper">
	<div class="header header-filter" style="background-image: url('<?php echo base_url() ?>assets/images/Untitled-5.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
              <form class="form" name="singup" id="query" method="post" >
                <div class="header header-primary text-center">
                  <h4>Sign Up</h4>
                  <div class="social-line">
                    <a href="#" class="btn btn-just-icon">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="#" class="btn btn-just-icon">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-just-icon">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div>
                </div>
                <h3 class="mt-0">Netpharma.com</h3>
                <p class="help-block">Enter your personal details below:</p>
                <div class="content">
                  <div class="form-group">
                    <input type="text" name="name" id="aname" class="form-control" placeholder="Enter Your Name">
                  </div>
                  <p id="nameErr" style="color:#060"></p>
                  <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control underline-input" placeholder="Enter Your Email">
                  </div>
                   <p id="emailErr" style="color:#060"></p>
                  <div class="form-group">
                    <input type="password" name="pass" id="apass" placeholder="Password..." class="form-control" />
                  </div>
                   <p id="PassErr" style="color:#060"></p>
				   <div class="form-group">
                    <input type="password" name="cpass" id="acpass" placeholder="Conform Password..." class="form-control" />
                  </div>
                   <p id="cPassErr" style="color:#060"></p>
                  <p><?php echo $errorpass; ?>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="optionsCheckboxes" checked> I agree to the
                      <a href="javascript:;">Terms of Service</a> &amp;
                      <a href="javascript:;">Privacy Policy</a>
                    </label>
                  </div>
                </div>
                <div class="footer text-center mb-20">
                  <input type="submit" name="submit" value="Submit" class="btn btn-info btn-raised" onClick="return askQuery()">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center mt-20">
              <a href="<?php echo site_url() ?>/Welcome/" class="text-uppercase text-white">Back</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script>
	function askQuery()
	{
		var name=document.getElementById("aname").value;
		var emailId=document.getElementById("email").value;
		var pass=document.getElementById("apass").value;
		var cpass=document.getElementById("apass").value;
		
		//$("#nameErr").html("");$("#emailErr").html("");
			
		atpos = emailId.indexOf("@");
		dotpos = emailId.lastIndexOf(".");
		if(name=="")
		{

			$("#nameErr").html("Please Enter Your Name !!!");
			document.singup.name.focus();
			return false;
		}	
		else if(atpos < 1 || ( dotpos - atpos < 2 ))
		{
			$("#nameErr").html("");
			$("#emailErr").html("Please Enter Valid Email !!!");
			document.singup.email.focus();
			return false;
		}	
		else if(pass=="")
		{
			$("#nameErr").html("");$("#emailErr").html("");
			$("#PassErr").html("Please Enter Your Password !!!");
			document.singup.apass.focus();
			return false;
		}	
		else if(pass=="")
		{
			$("#nameErr").html("");$("#emailErr").html("");$("#cPassErr").html("")
			$("#cPassErr").html("Please Enter Conforming Password !!!");
			document.singup.apass.focus();
			return false;
		}	
		else 
		{
			document.getElementById('query').action = "<?php echo site_url()?>/Welcome/insert/";

		}
	}
</script>
  <!--/ Application Content -->
  <!--  Vendor JavaScripts -->
  <script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
  <script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>  <!-- Custom Js -->
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:58:11 GMT -->
</html>
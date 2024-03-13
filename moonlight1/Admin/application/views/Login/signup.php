<!doctype html>
<html class="no-js" lang="">
<head>

  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/invoice.png" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url() ?>assets/images/invoice.png" type="image/x-icon">
  <title>:: Admin Dashboard ::</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
  <!--  Fonts and icons -->
  <!-- CSS Files -->
  <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">

</head>

<body id="falcon" class="authentication">
  <!-- Application Content -->
  <div class="wrapper">
    <div class="header header-filter" style="background-image: url('<?php echo base_url() ?>		assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
              <form name="form2" role="form" id="form2" class="form" method="post" action="<?php echo site_url() ?>/welcome/createUser"  data-parsley-validate>
                <div class="header header-primary text-center">
                  <h4>Sign Up</h4>
                 
                </div>
                <h3 class="mt-0">Falcon</h3>
                <p class="help-block" ><?php if($emailErr==""){?>Enter your personal details below:
                					  <?php }else{ echo $emailErr;?>
									  <?php }?>
				</p>
				<div class="content">
                  <div class="form-group">
            <input type="text" name="name" placeholder="Enter Your Name" id="name" class="form-control" required>
			
                  </div>
                  <div class="form-group">
            <input type="email" name="email" id="contactemail" class="form-control underline-input" placeholder="Enter Your Email" required>
           		
			      </div>
                  <div class="form-group">
            <input type="password" name="password" id="password" placeholder="Password..." class="form-control" required/>
                 </div>
                  <div class="checkbox">
                    <label>
            <input type="checkbox" name="optionsCheckboxes[]" id="agree" data-parsley-trigger="change" required> I agree to the
                      <a href="javascript:;">T & C</a> &amp;
                     
				      </label>
                  </div>
                </div>
                <div class="footer text-center mb-20">
                  <input type="submit" name="signup" value="Submit" class="btn btn-info btn-raised">
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
              <a href="<?php echo site_url()?>/welcome/login" class="text-uppercase text-white">Back</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--/ Application Content -->
  <!--  Vendor JavaScripts -->
  <script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
  <script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script> 
	<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/js/vendor/parsley/parsley.min.js"></script>
	<!--/ vendor javascripts -->
 <!-- Custom Js -->
<script >
		$(window).load(function () {
			$('#form1').parsley().subscribe('parsley:field:validate', function () {
				if ($('#form1').parsley().isValid()) {
					$('#form1Submit').prop('disabled', false);
				} else {
					$('#form1Submit').prop('disabled', true);
				}
			});
			$('#form2Submit').on('click', function () {
				$('#form2').submit();
			});
		});
	</script>
</body>
</html>
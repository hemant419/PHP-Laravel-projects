<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>::Admin Dashboard ::</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
  <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">

</head>

<body id="falcon" class="authentication">

  <!--Application Content -->
  <div class="wrapper">
    <div class="header header-filter" style="background-image: url('<?php echo base_url() ?>assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
              <form class="form" action="<?php echo site_url()?>/welcome/unlock" method="post">
                <div class="header header-primary text-center">
                  <h4>Locked</h4>
                </div>
                <div class="content">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <div class="thumb thumb-lg mt-20">
                        <img class="media-object br-5" src="<?php echo base_url()?>/assets/images/profile-photo.jpg" alt=""> </div>
                      <h4 class="media-heading mb-10 mt-10"><?php  echo $profile->aname ?></h4>
                    </div>
                  </div>
				  <?php echo $invalidUser; ?>
                  <div class="form-group mt-10">
                    <input type="password" name="pass" placeholder="Password" class="form-control underline-input">
                 <?php  echo $passErr ;?>
				  </div>
                  <div class="footer text-center mb-20">
                   
				    <input type="submit" value="Unlock" class="btn btn-info btn-raised">
                  </div>
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
              <a href="<?php echo site_url() ?>/welcome/" class="text-uppercase text-white">Back</a>
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
  <!-- Custom Js -->
</body>
</html>
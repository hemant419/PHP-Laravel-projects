<!-- CONTENT -->
<section id="content">
  <div class="page page-forms-validate">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blue"> <strong>Set</strong> New Password</h3>
          </div>
  <form name="form1" role="form" id="form1" method="post" action="<?php echo site_url() ?>/welcome/saveNewPass">
          <div class="boxs-body" >
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="password">Old Password : </label>
				  <input type="password" name="oldpass" class="form-control"  required>
				  <p style="color:red"><?php  echo $oldPassErr; ?></p>
                </div>
				</div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="password">New Password : </label>
                  <input type="password" name="newpass" id="password" class="form-control" data-parsley-trigger="change" data-parsley-range="[4, 20]" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="passwordConfirm">Retype New Password: </label>
                  <input type="password" name="newpassConfirm" id="passwordConfirm" class="form-control" data-parsley-trigger="change" data-parsley-range="[4, 20]" data-parsley-equalto="#password" required>
                </div>
              </div>
          
          </div>
          <div class="boxs-footer text-right bg-tr-black lter dvd dvd-top">
            <input  type="submit" name="setpass" class="btn btn-raised btn-primary" id="form1Submit" value="Submit" disabled>
          </div>
		    </form>
        </section>
      </div>
    </div>
  </div>
</section>
<!--/ CONTENT -->

<!--/ Application Content -->
<!-- Vendor JavaScripts -->
<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/parsley/parsley.min.js"></script>
<!--/ vendor javascripts -->
<!-- Custom JavaScripts  -->
<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script>
<!-- Custom Js -->
<!--/ custom javascripts -->
<!-- Page Specific Scripts  -->
<script >
		$(window).load(function () {
			$('#form1').parsley().subscribe('parsley:field:validate', function () {
				if ($('#form1').parsley().isValid()) {
					$('#form1Submit').prop('disabled', false);
				} else {
					$('#form1Submit').prop('disabled', true);
				}
			});

			$('#form1Submit').on('click', function () {
				$('#form1').submit();
			});

			$('#form2Submit').on('click', function () {
				$('#form2').submit();
			});

			$('#form3Submit').on('click', function () {
				$('#form3').submit();
			});

			$('#form4Submit').on('click', function () {
				$('#form4').submit();
			});
		});
	</script>
<!--/ Page Specific Scripts -->
</body></html>
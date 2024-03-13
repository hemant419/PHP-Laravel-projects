<!-- CONTENT -->
<section id="content">
  <div class="page page-forms-validate">
    <!-- bradcome -->
    <div class="bg-light lter b-b wrapper-md mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">Add New Sub-Admin</h1>
         </div>
      </div>
    </div>
    <!-- row -->
    
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>For Sub</strong>Admin</h3>
          </div>
          <div class="boxs-body">
		  <p style="color:red"><?php echo $emailRegErr; ?></p>
<form  name="form1" role="form" id="form1" method="post" data-parsley-validate action="<?php echo site_url() ?>/SubAdminControl/addUserByAdmin">
            <div class="row"> 
			 <div class="form-group col-md-4">
				<label for="username">First Name : </label>
				<input type="text" name="firstname" id="username" class="form-control" data-parsley-trigger="change" data-parsley-range="[4, 20]" required>
			</div>
			<div class="form-group col-md-4">
				<label for="username">Last Name : </label>
				<input type="text" name="lastname" id="username" class="form-control" data-parsley-trigger="change" data-parsley-range="[4, 20]" required>
			</div>
			</div>
			<div class="row">	
			<div class="form-group col-md-4 ">
                <label>Email Address</label>
                
                  <input type="email" name="email" class="form-control"  data-parsley-trigger="change" required>
               
              </div>
            <div class="form-group col-md-4">
                <label>Contact No</label>
               
               <input type="number" name="contact" class="form-control" data-parsley-trigger="change" required>
               
            </div>
			</div>
			<div class="row">
			<div class="form-group col-md-4">
				<label for="password">Password : </label>
				<input type="password" name="password" id="password" class="form-control" data-parsley-trigger="change"  data-parsley-range="[4, 20]" required>
			</div>
			<div class="form-group col-md-4">
				<label for="passwordConfirm">Retype Password: </label>
				<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control" data-parsley-trigger="change" data-parsley-range="[4, 20]" data-parsley-equalto="#password" required>
			</div>
			</div>							
			
		 </div>
          <div class="boxs-footer text-right bg-tr-black lter dvd dvd-top">
         <input type="submit" name="Submit"  value="Submit" class="btn btn-raised btn-default" id="form4Submit">
          </div>
		 </form> 
        </section>
      </div>
    </div>
  </div>
</section>
<!--/ CONTENT -->
</div>
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
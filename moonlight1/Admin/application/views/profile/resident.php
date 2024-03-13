<!-- CONTENT  -->
<section id="content">
  <div class="page page-forms-wizard">
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">Set Profile</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blue"> <strong>Profile</strong> Progress</h3>
          </div>
          <div class="boxs-body">
            <div id="b_rootwizard">
              
              <div id="bar" class="progress progress-striped active">
                   <div class="progress-bar"  role="progressbar" aria-valuemin="0" aria-valuemax="100" 
				   style="width:<?php echo  $finalProfile ?>;" >
				</div>
              </div>
              
            </div>
          </div>
        </section>
      </div>
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-purple"> <strong>Custom</strong> Bootstrap</h3>
          </div>
          <div class="boxs-body">
            <div class="pagecontent">
              <div id="rootwizard" class="tab-container tab-wizard">
                <ul class="nav nav-tabs nav-justified">
                  <li> 
				  <a href="#tab2" data-toggle="tab">Personal Info 
				  	<span class="badge badge-default pull-right wizard-step">1</span> </a> 
				  </li>
                  <li> <a href="#tab1" data-toggle="tab">Resident info <span class="badge badge-default pull-right wizard-step">2</span> </a> </li>
                  <li> <a href="#tab2" data-toggle="tab">Contact info <span class="badge badge-default pull-right wizard-step">3</span> </a> </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane" id="tab2">
                    <form name="step2" role="form" method="post" action="<?php echo site_url() ?>/cprofile/residentUpdate">
                      <div class="row">
                          <div class="form-group col-sm-12">
                            <label for="address1">Address </label>
				<input type="text" class="form-control" name="add" id="address1" value="<?php echo $profile->aaddress; ?>" required>	
                          </div>
                        </div>
                     <div class="row">
                        <div class="form-group col-md-4">
                          <label for="city" >City : </label>
                          <select name="city" id="city" class="form-control" required>
						  	
							<?php if($profile->acity=="Surat"){ ?>
							<option >-*Select *- </option>
							<option value="Surat" selected>Surat</option>
							<option value="Vapi">Vapi</option>
							<?php }else if($profile->acity=="Vapi"){?>
							<option >-*Select *- </option>
							<option value="Surat" >Surat</option>
							<option value="Vapi" selected>Vapi</option>
							<?php }else{?>
							<option >-*Select *- </option>
							<option value="Surat" >Surat</option>
							<option value="Vapi">Vapi</option>
							<?php } ?>
						  </select>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="state">State : </label>
                          <select name="state" id="state" class="form-control"  required>
						  	<?php if($profile->astate=="Gujarat"){ ?>
						  	<option >-*Select *- </option>
							<option value="Gujarat" selected>Gujarat</option>
								<?php }else{?>
							<option >-*Select *- </option>
							<option value="Gujarat" selected>Gujarat</option>
								<?php }?>
						  </select>
                        </div>
						
                        <div class="form-group col-md-4">
                          <label for="zip">Zip : </label>
                          <input type="text" name="zip" id="zip" class="form-control" value="<?php echo $profile->azip ?>" placeholder="Enter zip" required>
                        </div>
                      </div>
					  <div class="row">
					  <div class="form-group col-md-4">
                        <label for="address">Country : </label>
						<select name="country" id="state" class="form-control"  required>
						  <?php if($profile->acountry=="India"){ ?>
						  		<option >-*Select *- </option>
							<option value="India" selected>India</option>
							<?php }else{?>
							<option >-*Select *- </option>
							<option value="India">India</option>
							<?php }?>
						 </select>
                 	  </div>
					 </div><hr /> 
				 <ul class="pager wizard">
                    <li class="previous">
                      <a href="" class="btn btn-raised btn-default">Previous</a>
                    </li>
                    <li class="next">
                      <input type="submit" name="submit" value="Save And Continue" class="btn btn-raised btn-info">
                    </li>
                    
                  </ul>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- page content -->
  </div>
</section>
<!--/ CONTENT -->
</div>
<!--/ Application Content -->
<!--  Vendor JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/parsley/parsley.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/form-wizard/jquery.bootstrap.wizard.min.js"></script>
<!--/ vendor javascripts -->
<!--  Custom JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<!-- Custom Js -->
<!--/ custom javascripts -->
<!--  Page Specific Scripts  -->
<script >
        $(document).ready(function () {
            $('#b_rootwizard').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index + 1;
                    var $percent = ($current / $total) * 100;
                    $('#b_rootwizard').find('.bar').css({ width: $percent + '%' });
                }
            });
        });

        $(window).load(function () {
            $('#rootwizard').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index + 1;

                    // If it's the last tab then hide the last button and show the finish instead
                    if ($current >= $total) {
                        $('#rootwizard').find('.pager .next').hide();
                        $('#rootwizard').find('.pager .finish').show();
                        $('#rootwizard').find('.pager .finish').removeClass('disabled');
                    } else {
                        $('#rootwizard').find('.pager .next').show();
                        $('#rootwizard').find('.pager .finish').hide();
                    }
                },
                onNext: function (tab, navigation, index) {
                    var form = $('form[name="step' + index + '"]');
                    form.parsley().validate();
                    if (!form.parsley().isValid()) {
                        return false;
                    }

                },

                onTabClick: function (tab, navigation, index) {
                    var form = $('form[name="step' + (index + 1) + '"]');
                    form.parsley().validate();
                    if (!form.parsley().isValid()) {
                        return false;
                    }
                }
            });
        });
    </script>
<!--/ Page Specific Scripts -->
</body></html>
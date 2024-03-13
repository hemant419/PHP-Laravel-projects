<!-- CONTENT  -->

<section id="content">
  <div class="page page-forms-wizard">
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0"></h1>
          <small class="text-muted"></small> </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
               <h3 class="custom-font hb-blue"> <strong>Profile</strong>Progress</h3>
          </div>	
		  <div class="boxs-body">
		      <div class="b_rootwizard">
			  	<div id="bar" class="progress progress-striped active">
					<div class=" progress-bar"   role="progressbar" aria-valuemin="0" aria-valuemax="100" 
						 style="width:<?php echo $progress?>;"> 
					</div>
			    </div>	
             </div>
		  </div>	 
        </section>
      </div>
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-purple"> <strong>Edit Your</strong>Persnol Information </h3>
          </div>
          <div class="boxs-body">
            <div class="pagecontent">
              <div id="rootwizard" class="tab-container tab-wizard">
                <ul class="nav nav-tabs nav-justified">
                  <li> <a href="#tab1 " data-toggle="tab">Personal Info <span class="badge badge-default pull-right wizard-step">1</span> </a> </li>
                  <li> <a href="#tab1 " data-toggle="tab" >Account info <span class="badge badge-default pull-right wizard-step">2</span> </a> </li>
                  <li> <a href="#tab1 " data-toggle="tab" >Contact info <span class="badge badge-default pull-right wizard-step">3</span> </a> </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane" id="tab1">
                    <form name="step1" role="form" method="post" id="query" name="Pinfo" action="<?php echo site_url() ?>/Welcome/insertprofile">
                      <div class="row">
                        <div class="col-xs-12">
                          
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="name">User Name : </label>
                          <input type="text" name="name" id="uname"  class="form-control" minlength="3" maxlength="8" value="<?php echo $profile->name; ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Last Name : </label>
                          <input type="text" name="lastname" id="lname" class="form-control" minlength="3" value="<?php echo $profile->last_name; ?>" required>
                        </div>
                        <div class="form-group col-md-6">
						<label> Gender :</label>
                         <div class="radio">
						 <?php
						 	if($profile->gender=="male")
							{
						?>
							<label>
								<input type="radio" name="gender" value="male" checked="checked">
									Male
							</label>
							<label>
								<input type="radio" name="gender" value="female">
									Female
							</label>
							<?php
							} else {
							?>
								<label>
								<input type="radio" name="gender" value="male" checked="checked">
									Male
							</label>
							<label>
								<input type="radio" name="gender" value="female">
									Female
							</label>
							<?php } ?>
						</div>   
						                        
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="message">About Us : </label>
                        <textarea class="form-control" rows="5" name="message" id="message" placeholder="Write something about you..."></textarea>
                      </div>
                      <ul class="pager wizard">
					  	<li class="previous">
                          <button class="btn btn-raised btn-default">Previous</button>
                        </li>
                        <li class="next">
                          <button class="btn btn-raised btn-info">Next</button>
                        </li>
						<li class="next finish" style="display:none;">
                          <button class="btn btn-raised btn-success">Finish</button>
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
</body><!-- Mirrored from thememakker.com/templates/falcon/html/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:57:20 GMT -->
</html>
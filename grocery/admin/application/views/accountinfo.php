<!-- CONTENT  -->

<section id="content">
  <div class="page page-forms-wizard">
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">Form Wizard</h1>
          <small class="text-muted">Welcome to Falcon application</small> </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blue"> <strong>Bootstrap</strong> Wizard</h3>
          </div>
          <div class="boxs-body">
            <div id="b_rootwizard">
              <div class="navbar">
                <div class="navbar-inner">
                  <ul class="nav nav-pills">
                    <li class="active"> <a href="#btab1" data-toggle="tab">First</a> </li>
                    <li class=""> <a href="#btab2" data-toggle="tab">Second</a> </li>
                    <li class=""> <a href="#btab3" data-toggle="tab">Third</a> </li>
                    <li class=""> <a href="#btab4" data-toggle="tab">Forth</a> </li>
                    <li class=""> <a href="#btab5" data-toggle="tab">Fifth</a> </li>
                    <li class=""> <a href="#btab6" data-toggle="tab">Sixth</a> </li>
                    <li class=""> <a href="#btab7" data-toggle="tab">Seventh</a> </li>
                  </ul>
                </div>
              </div>
              <div id="bar" class="progress progress-striped active">
                <div class=" progress-bar"   role="progressbar" aria-valuemin="0" aria-valuemax="100" 
						 style="width:<?php echo $progress?>;"> 
						 </div>
              <div class="tab-content">
                <div class="tab-pane active" id="btab1">1. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <div class="tab-pane" id="btab2">2. Lorem Ipsum is sim and typesetting industry. </div>
                <div class="tab-pane" id="btab3">3. Lorem Ipsum is simply dummy text of the print typesetting industry. </div>
                <div class="tab-pane" id="btab4">4. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <div class="tab-pane" id="btab5">5. Lo simply dummy text of the printing and typesetting industry.</div>
                <div class="tab-pane" id="btab6">6. Lorem Ipsummmy text of the printing and typesetting industry.</div>
                <div class="tab-pane" id="btab7">7. Lorem Ipsum is simply dinting and typesetting industry.</div>
                <ul class="pager wizard">
                  <li class="previous first disabled" style="display:none;"> <a href="javascript:;">First</a> </li>
                  <li class="previous disabled"> <a href="javascript:;">Previous</a> </li>
                  <li class="next last" style="display:none;"> <a href="javascript:;">Last</a> </li>
                  <li class="next"> <a href="javascript:;">Next</a> </li>
                </ul>
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
				  <a href="#tab2 " data-toggle="tab">Personal Info 
				  <span class="badge badge-default pull-right wizard-step">1</span> </a> </li>
                  <li><a href="#tab1 " data-toggle="tab">Account info
				   <span class="badge badge-default pull-right wizard-step">2</span> </a> </li>
                 <li><a href="#tab2" data-toggle="tab" >Contact info 
				  <span class="badge badge-default pull-right wizard-step">3</span> </a> </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane" id="tab2">
                    <form name="step2" role="form" method="post" action="<?php echo site_url() ?>/Welcome/data">
                      <div class="row">
					  	<div class="form-group mt-10">
                        <label for="address2">Address : </label>
                        <input type="text" name="address" id="Address" class="form-control" placeholder="Enter Address Detail" value="<?php echo $profile->address ?>">
                      </div>
                        <div class="form-group col-md-4">
                          <label for="city">City : </label>
                          <input type="text" name="city" id="city" class="form-control" placeholder="Enter city" required value="<?php echo $profile->city ?>">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="state">State : </label>
                          <input type="text" name="state" id="state" class="form-control" placeholder="Enter state" required value="<?php echo $profile->state ?>">
                        </div>
						<div class="form-group col-md-4">
                          <label for="state">country : </label>
                          <input type="text" name="country" id="state" class="form-control" placeholder="Enter state" required value="<?php echo $profile->country ?>">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="zip">Pincode : </label>
                          <input type="text" name="pin" id="zip" class="form-control" placeholder="Enter pincode" required value="<?php echo $profile->pincode ?>">
                        </div>
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
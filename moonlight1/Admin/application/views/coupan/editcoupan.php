<!--  CONTENT  -->
<section id="content">
  <div class="page page-forms-common">
    <!-- bradcome -->
    
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Edit</strong> Coupan</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" role="form" action="<?php echo site_url()?>/coupancontrol/updatecoupan/<?php echo $coupan->cupon_id?>" method="post" >
              
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Coupan Code</label>
                <div class="col-sm-4">
				<p style="color:red"></p>
                  <input type="text" name="coupancode" value="<?php echo $coupan->cupon_code ?>" class="form-control" id="input01" required>
                </div>
              </div>
             
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Coupan Email</label>
                <div class="col-sm-6">
				<p style="color:red"></p>
                  <input type="email" name="coupanmail"value="<?php echo $coupan->cupon_email ?>" class="form-control" id="input01" required>
                </div>
              </div>
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">coupan_code</label>
                <div class="col-sm-2">
				<p style="color:red"></p>
              <input type="text" name="coupanuse" value="<?php echo $coupan->cupon_use_code	 ?>" class="form-control" id="input01" required>
                </div>
              </div>
			 
             
              <hr class="line-dashed full-witdh-line" />
              <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                <a href="<?php echo site_url()?>/coupancontrol/" class="btn btn-raised btn-danger" >Cancel</a>&nbsp;		   <input name="submit" type="submit" class="btn btn-raised btn-default" value="Update"> </div>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
<!--/ CONTENT -->
</div>
<!--/ Application Content -->
<!--Vendor JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/screenfull/screenfull.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/slider/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/chosen/chosen.jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>
<!--/ vendor javascripts -->
<!--  Custom JavaScripts -->
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<script >
        $(window).load(function(){
            $('#ex1').slider({
                formatter: function(value) {
                    return 'Current value: ' + value;
                }
            });
            $("#ex1").on("slide", function(slideEvt) {
                $("#ex1SliderVal").text(slideEvt.value);
            });

            $("#ex2, #ex3, #ex4, #ex5").slider();
          
            //*load wysiwyg editor
        });
    </script>
<!--/ Page Specific Scripts -->
</body></html>
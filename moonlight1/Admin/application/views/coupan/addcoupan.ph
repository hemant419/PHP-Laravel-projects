<!--  CONTENT  -->
<section id="content">
  <div class="page page-forms-common">
    <!-- bradcome -->
    
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Add New</strong> Coupan</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" role="form" action="<?php echo site_url()?>/coupancontrol/insertcoupan" method="post" enctype="multipart/form-data">
             <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Coupan title</label>
                <div class="col-sm-4">
				<p style="color:red"><?php echo $cupon_code; ?></p>
                  <input type="text" name="offname" placeholder="Enter offer Name" class="form-control" id="input01">
                </div>
              </div>
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Coupan Email</label>
                <div class="col-sm-6">
				<p style="color:red"><?php echo $cupon_email; ?></p>
                  <input type="text" name="descrip" placeholder="Enter Some Description" class="form-control" id="input01">
                </div>
              </div>
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Coupan Code</label>
                <div class="col-sm-2">
				<p style="color:red"><?php echo $cupon_use_code; ?></p>
              <input type="date" name="startdate" placeholder="select offer start Date" class="form-control" id="input01">
                </div>
              </div>
			  
              <hr class="line-dashed full-witdh-line" />
              <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                  <button type="reset" class="btn btn-raised btn-danger">Cancel</button>&nbsp;
                  <input name="submit" type="submit" class="btn btn-raised btn-default" value="Save"></div>
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
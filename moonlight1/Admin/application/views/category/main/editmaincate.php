<!--  CONTENT  -->
<section id="content">
  <div class="page page-forms-common">
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0"></h1>
          <small class="text-muted"></small> </div>
      </div>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Edit </strong>Main Category</h3>
          </div>
		  
          <div class="boxs-body">
			<form class="form-inline" role="form" method="post" action="<?php echo site_url()?>/categorycontrol/updateCategory">
              <div class="form-group">
				<input type="hidden" name="catId" class="form-control" id="exampleInputEmail2" 
					    value="<?php echo $maincategory->cat_id ?>">
              </div>
              <div class="form-group">
               <input type="text" class="form-control" name="catName" id="exampleInputPassword2" 
					   value="<?php echo $maincategory->cat_name ?>">
              </div>
              <div class="form-group"> 
             		 <input type="submit" class="btn btn-raised btn-primary" name="Update" value="Update">
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
<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/slider/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/chosen/chosen.jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>
<!--/ vendor javascripts -->
<!--  Custom JavaScripts -->
<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script>
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
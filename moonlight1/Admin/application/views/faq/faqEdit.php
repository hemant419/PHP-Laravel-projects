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
            <h3 class="custom-font hb-blush"> <strong>Edit </strong>FAQ</h3>
          </div>
		  
          <div class="boxs-body">
            <div class="row">
	         <div class="col-md-7">
	<form class="form-horizontal" role="form" action="<?php echo site_url()?>/faqcontrol/updateFaq/<?php echo $faqEdit->faq_id?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
                   <label for="input01" class="col-sm-4 control-label">User Name</label>
				<div class="col-sm-4">
				<input type="text" id="few-ml" class="form-control" name="name" disabled="disabled" value="<?php echo $faqEdit->faq_name?>">
                </div>
			</div>
			<div class="form-group">
                <label for="input01" class="col-sm-4 control-label">User Contact</label>
                <div class="col-sm-4">
				<input type="text" id="few-ml" class="form-control" name="contact" disabled="disabled" value="<?php echo $faqEdit->faq_contact?>">
                
	             </div>
              </div> 
		     <div class="form-group">
                <label for="input01" class="col-sm-4 control-label">User Email</label>
                <div class="col-sm-4">
				<p style="color:red"></p>
      <input type="text" id="few-ml" class="form-control" name="email" value="<?php echo $faqEdit->faq_email ?>" class="form-control"  readonly>
                </div>
              </div>
              
             <div class="form-group">
                <label class="col-sm-4 control-label">Question </label>
                <div class="col-sm-8">
  <input type="text" name="que"  value="<?php echo $faqEdit->faq_que ?>" id="few-ml" class="form-control" size="40" readonly>
                </div>
              </div>

			 <div class="form-group">
                <label class="col-sm-4 control-label">Ans. </label>
                <div class="col-sm-8">
  <textarea  name="ans" id="position-ml"  rows="10" cols="15" class="form-control"  required><?php echo $faqEdit->faq_ans ?></textarea>
                </div>
              </div>
              <hr class="line-dashed full-witdh-line" />
              <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                  <input name="submit" type="submit" id="submit" class="btn btn-raised btn-danger" value="Update">                 </div>
              </div>
		</form>
			</div>
				 <div class="col-md-5">
			<img src="<?php echo base_url() ?>product/<?php echo $faqEdit->prd_img1 ?>" width="190" height="100"/>	
				 </div>
			</div>
			
            
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
<?php $data="";?>
<!--  CONTENT  -->
<script>
	window.onload=ImageError;
	function ImageError()
	{	
		//Image Error
		$("#error").hide();
		
	    $.ajax({
					url:"<?php echo site_url()?>/Brandcontrol/selectSubcatEdit/<?php echo $this->uri->segment(3); ?>",
					success:function(data)
					{
							$("#subcatId").html(data);
					
					}
				});
	

	}function subcategory(id)
	{
	    $.ajax({
					url:"<?php echo site_url()?>/Brandcontrol/selectSubcat/"+id,
					success:function(data)
					{
						$("#subcatId").html(data);
					}
				});
	}
	function validImage(img)
	{	
		var ext=img.split(".");
		if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" )||(ext[1]=="PNG" )){
				$("#error").hide();$("#submit").attr('disabled',false);
		}else{	$("#error").show(); $("#submit").attr('disabled',true);	}
	}
</script>
<!--  CONTENT  -->
<section id="content">
  <div class="page page-forms-common">
    <!-- bradcome -->
    
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Edit</strong> Brand</h3>
          </div>
		  <div class="boxs-body">
            <div class="row">
	         <div class="col-md-7">
	<form class="form-horizontal" role="form" action="<?php echo site_url()?>/Brandcontrol/updateBrand/<?php echo $Brand->brand_id?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
                   <label for="input01" class="col-sm-4 control-label">Category</label>
				<div class="col-sm-4">
	<select tabindex="3" class="chosen-select form-control" style="width: 240px;" name="catId" id="catId" onchange="subcategory(this.value)" required>
                 <option value="">	Select Category	</option>
				 <?php foreach($maincategory as $dataCat){?>
				 	  <option value="<?php echo $dataCat->cat_id; ?>"<?php  echo ($dataCat->cat_id==$Brand->cat_id) ? "selected='selected'":null ;?> onchange="subcategory(this.value)">
				   		<?php echo $dataCat->cat_name; ?></option> 
				 <?php } ?>
                  </select>
                </div>
			</div>
			<div class="form-group">
                <label for="input01" class="col-sm-4 control-label">Sub-Category</label>
                <div class="col-sm-4">
				<p style="color:red"></p>
			   <select tabindex="3" class="chosen-select form-control" style="width: 240px;" name="subcatId" id="subcatId" required>
							  
				</select>
	             </div>
              </div> 
		     <div class="form-group">
                <label for="input01" class="col-sm-4 control-label">Brand Name</label>
                <div class="col-sm-8">
				<p style="color:red"></p>
                  <input type="text" name="Bname" value="<?php echo $Brand->brand_name ?>" class="form-control" id="input01" required>
                </div>
              </div>
              
             <div class="form-group">
                <label class="col-sm-4 control-label">File Input</label>
                <div class="col-sm-8">
				<p style="color:red"><?php echo $Brand_img; ?></p>
                  <input type="file" name="img" class="filestyle" data-buttonText="Find file" data-iconName="fa fa-inbox" onchange="validImage(this.value)">	<p id="error" style="color:red">Image Not Valid</p>
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
			<img src="<?php echo base_url() ?>Brand/<?php echo $Brand->brand_img ?>" width="190" height="100"/>	
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
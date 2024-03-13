<!--  CONTENT  -->
<script>
	window.onload=ImageError;
	function ImageError()
	{	
		//Image Error
		$("#error").hide();
	}
	function validImage(img)
	{	
		var ext=img.split(".");
		if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" )||(ext[1]=="PNG" ))
		{
				$("#error").hide();$("#submit").attr('disabled',false);
		}else
		{		$("#error").show(); $("#submit").attr('disabled',true);	
		}
	}
function Subcat(catid)
{
	$.ajax({
				url:"<?php echo site_url()?>/Brandcontrol/selectSubcat/"+catid,
				success:function(subdata)
				{
					$("#subdata").html(subdata);
					
				}
			});
}
</script>
<section id="content">
  <div class="page page-forms-common">
    <!-- bradcome -->
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Edit</strong> Discount</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" role="form" action="<?php echo site_url()?>/discountcontrol/updateDiscount/<?php echo $editDiscount->discount_id ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label">File Input</label>
                <div class="col-sm-4">
				<p style="color:red"></p>
                  <input type="file" name="img" placeholder="Select Image" class="filestyle" data-buttonText="Find file" data-iconName="fa fa-inbox" onchange="validImage(this.value)"><p id="error" style="color:red">Image Not Valid</p>
                </div>
              </div>
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Discount</label>
                <div class="col-sm-4">
				<p style="color:red"></p>
            <input type="number" name="discount" value="<?php echo $editDiscount->discount ?>" class="form-control" id="input01" min="0" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                  <a href="<?php echo site_url()?>/discountcontrol/" type="reset" class="btn btn-raised btn-danger">Cancel</a>
                  <input name="submit" type="submit" class="btn btn-raised btn-default" value="Save">                 </div>
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
</body>
</html>
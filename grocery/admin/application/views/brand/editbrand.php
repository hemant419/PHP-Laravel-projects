
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
      <h3 class="custom-font hb-green"> <strong>Brand </strong>Form</h3>
    </div>
    <div class="boxs-body">
      <form class="form-horizontal" role="form" method="post" name="brand" id="query" enctype="multipart/form-data">
	  
  			<input type="hidden" name="id" value="<?php echo $getdata->brand_id ?>">
		<div class="form-group">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">SubCategery Name</label>
		  
  <div class="col-sm-10">
		  <select tabindex="3" class="chosen-select" style="width: 240px;" name="subcategery">
             <?php foreach($subcategery as $data) {?>
				 <option value="<?php echo $data->s_id ?>"
                 <?php  echo ($data->s_id==$editbrand->s_id)?"selected='selected'":null  ?>>
				 <?php echo $data->s_name  ?></option>
   			<?php  } ?>
		   </select>
          </div>
          </div>
          <label for="inputEmail3" class="col-sm-2 control-label">brand Name</label>
		  
          <div class="col-sm-3">
            <input type="text" name="brandname" id="bname" value="<?php echo $getdata->brand_name ?>" class="form-control" id="inputEmail3">
          </div>
        </div>
         <p id="nameErr" style="color:#060"></p>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">brand image</label>
          <div class="col-sm-4">
		  	<input type="file" name="img" value=" <?php echo $getdata->brand_image ?>" class="filestyle" data-buttonText="find file" required="required">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="submit" value="Submit" onclick="return askQuery()" class="btn btn-raised btn-primary">
          </div>
        </div>
      </form>
    </div>
  </section>
</div>

<script>
	function askQuery()
	{
		var name=document.getElementById("bname").value;
		
		
		//$("#nameErr").html("");$("#emailErr").html("");
			
		
		if(name=="")
		{

			$("#nameErr").html("Please Enter Brand Name*");
			document.brand.bname.focus();
			return false;
		}	
		else 
		{
			document.getElementById('query').action = "<?php echo site_url()?>/brandControl/brandupdate";

		}
	}
</script>
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
<!-- Mirrored from thememakker.com/templates/falcon/html/form-common.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:57:18 GMT -->
</html>

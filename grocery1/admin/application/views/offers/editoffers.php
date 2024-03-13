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
      <h3 class="custom-font hb-green"> <strong>Offer</strong>Form</h3>
    </div>
    <div class="boxs-body">
      <form class="form-horizontal" role="form" method="post" id="query" name="offer"  action="<?php echo site_url() ?>/offerControl/updatedata" enctype="multipart/form-data">
	  	<div class="form-group"> 
          <div class="col-sm-10">
            <input type="hidden" name="id"  value="<?php echo $getdata->offer_id ?>" class="form-control" id="inputEmail3">
          </div>
        </div>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">offer image</label>
          <div class="col-sm-3">
		  	<input type="file" name="img" class="filestyle" data-buttonText="find file" alue="<?php echo $getdata->	offer_img ?>">
          </div>
        </div>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">offer title</label>
		  
          <div class="col-sm-3">
            <input type="text" name="name" id="otitle" value="<?php echo $getdata->offer_title ?>" class="form-control" >
          </div>
        </div>
         <p id="nameErr" style="color:#060"></p>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
		  
          <div class="col-sm-3">
            <input type="text" name="discription" id="disc" value="<?php echo  $getdata->description ?>" class="form-control"  placeholder="Enter brand name..">
          </div>
        </div>
        <p id="dErr" style="color:#060"></p>
        
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
		  
          <div class="col-sm-3">
            <input type="date" name="startdate" id="sd " value="<?php echo $getdata->startingdate ?>" class="form-control"  placeholder="Enter brand name..">
          </div>
        </div>
        
        <p id="sdErr" style="color:#060"></p>
		<div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
		  
          <div class="col-sm-3">
            <input type="date" name="enddate" id="edd" value="<?php echo $getdata->endingdate ?>" class="form-control"  placeholder="Enter brand name..">
          </div>
        </div>
          
          <p id="edErr" style="color:#060"></p>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" name="submit" value="Submit" onClick="return askQuery()" class="btn btn-raised btn-primary">
          </div>
        </div>
        
      </form>
    </div>
  </section>
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
<!-- Mirrored from thememakker.com/templates/falcon/html/form-common.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:57:18 GMT -->
</html>

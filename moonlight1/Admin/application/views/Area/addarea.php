<script >
function state(id)
{

$.ajax({
		
			url:"<?php echo site_url() ?>/areacontrol/state/"+id,
			success:function (data)
			{
			//alert(data);
			$("#cityId").html(data);
			}
})

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
            <h3 class="custom-font hb-blush"> <strong>Add New</strong>Area</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" role="form" action="<?php echo site_url() ?>/areacontrol/insertarea" method="post" >
			<div class="form-group">
               <label class="col-sm-2 control-label">State's</label>
                     <div class="col-sm-10">
                          <select tabindex="3" class="chosen-select" name="StaId" style="width: 240px;" onchange="state(this.value)" required>
                            	<option value="">
										-- Select State Id --
								</option>
							<?php
							 foreach($state as $data)
							{
							 ?>
							    <option value="<?php echo $data->state_id;  ?>" required>
										<?php echo $data->state_name ;?>
								</option>
                            <?php
							 }
							 ?>    
                          </select>
					  </div>
                </div>
				<div class="form-group">
               <label class="col-sm-2 control-label">City's</label>
                     <div class="col-sm-10">
                          <select tabindex="3" class="chosen-select" id="cityId" name="cityId" style="width: 240px;" required>
                            	<option value="" required>
										-- Select City Id --
								</option>
							   
                          </select>
					  </div>
                </div>
				<div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Area Name</label>
                <div class="col-sm-4">
				<p style="color:red"></p>
     <input type="text" name="areaname" placeholder="Enter Area Name" class="form-control" id="input01" required>
                </div>
              </div>
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Area Pincode</label>
                <div class="col-sm-4">
				<p style="color:red"></p>
     <input type="text" name="areapin" placeholder="Enter Area Pincode" class="form-control" id="input01" required>
                </div>
              </div>
			  <hr class="line-dashed full-witdh-line" />
              <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                  <button type="reset" class="btn btn-raised btn-danger">Cancel</button>&nbsp;
                  <input name="submit" type="submit" class="btn btn-raised btn-default" value="Save">
				  </div>
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
<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
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

<!--/ Page Specific Scripts -->
</body></html>
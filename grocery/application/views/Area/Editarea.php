<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/falcon/html/form-validate.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Dec 2019 06:44:26 GMT -->
<head>
<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>:: Falcon - Admin Dashboard ::</title>
	<link rel="icon" type="image/ico" href="<?php echo base_url();?>assets/images/favicon.ico" />
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/bootstrap/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/animsition.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">

</head>




<div class="row" style="margin-left:250px; margin-top:150px;">
					<div class="col-md-12">
						<section class="boxs">
							<div class="boxs-header">
								<h3 class="custom-font hb-blush">
									<strong>Type</strong> Validations</h3>
							</div>
							<div class="boxs-body">
								<form class="form-horizontal" method="post" action="<?php echo site_url();?>/Areac/update/<?php echo $data->area_id;?>" name="form4" role="form" id="form4" data-parsley-validate>
									<div class="form-group">
		                
                        								<label class="col-sm-3 control-label">State Name</label>
          
                                  	<div class="col-sm-9 col-xs-offset-3">
			
         
            								<select name="state_name" class="form-control mb-10" data-parsley-trigger="change" required>
					
                    
                    							<option value="">Select option...</option> 
                                                <?php
            foreach($state as $row)
			{
          ?>
                    <?php
					if($row->state_id==$data->state_id)
					{
					?>
                    
                   
												<option value="<?php echo $row->state_id;?>" selected><?php echo $row->state_name;?></option>
											
		<?php
					}
					else
					{
					?>
                    
												<option value="<?php echo $row->state_id;?>"><?php echo $row->state_name;?></option>
						
                    <?php	
					}
			}
					?>
        
        
        									</select>
													</div>
									</div>
                                    
                                    
                                    <div class="form-group">
		                
                        								<label class="col-sm-3 control-label">city Name</label>
          
                                  	<div class="col-sm-9 col-xs-offset-3">
			
         
            								<select name="city_name" class="form-control mb-10" data-parsley-trigger="change" required>
					
                    
                    							<option value="">Select option...</option> 
                                                <?php
            foreach($city as $row)
			{
          ?>
                    <?php
					if($row->city_id==$data->city_id)
					{
					?>
                    
                   
												<option value="<?php echo $row->city_id;?>" selected><?php echo $row->city_name;?></option>
											
		<?php
					}
					else
					{
					?>
                    
												<option value="<?php echo $row->city_id;?>"><?php echo $row->city_name;?></option>
						
                    <?php	
					}
			}
					?>
        
        
        									</select>
													</div>
									</div>
                                    
                                    <div class="form-group">
										<label class="col-sm-3 control-label">Area Name</label>
										<div class="col-sm-9">
											<input type="text"  name="cat" class="form-control" data-parsley-trigger="change" required value="<?php echo $data->area_name;?>">
                               		</div>
									</div>
										
							</div>
							<div class="boxs-footer text-right bg-tr-black lter dvd dvd-top">
								<button type="submit" name="submit" class="btn btn-raised btn-default" id="form4Submit">Update</button></form>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<!--/ CONTENT -->
	</div>
	<!--/ Application Content -->

	<!-- Vendor JavaScripts -->
	<script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script>

	<script src="<?php echo base_url();?>assets/js/vendor/parsley/parsley.min.js"></script>
	<!--/ vendor javascripts -->

	<!-- Custom JavaScripts  -->
	<script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script> <!-- Custom Js --> 
	<!--/ custom javascripts -->

	<!-- Page Specific Scripts  -->
	<script >
		$(window).load(function () {
			$('#form1').parsley().subscribe('parsley:field:validate', function () {
				if ($('#form1').parsley().isValid()) {
					$('#form1Submit').prop('disabled', false);
				} else {
					$('#form1Submit').prop('disabled', true);
				}
			});

			$('#form1Submit').on('click', function () {
				$('#form1').submit();
			});

			$('#form2Submit').on('click', function () {
				$('#form2').submit();
			});

			$('#form3Submit').on('click', function () {
				$('#form3').submit();
			});

			$('#form4Submit').on('click', function () {
				$('#form4').submit();
			});
		});
	</script>
	<!--/ Page Specific Scripts -->
</body>

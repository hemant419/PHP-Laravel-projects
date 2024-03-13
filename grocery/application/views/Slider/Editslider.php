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
								<form class="form-horizontal" method="post" 
                                action="<?php echo site_url() ?>/Sliderc/update/<?php echo $data->slider_id;?>"  enctype="multipart/form-data">
							
                            
                            		
						

                            
                            		<div class="form-group">
										<label class="col-sm-3 control-label">slider_image</label>
										<div class="col-sm-9">
									<span class="btn btn-raised btn-success fileinput-button">
												<i class="glyphicon glyphicon-plus"></i>
												<span>Add files...</span>
				<input type="file"  name="img">
											</span>


<img src="<?php echo base_url() ?>/Slider/<?php echo $data->slider_image ?>" height="100" width="100" />
                                    	</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label">slider_name</label>
										<div class="col-sm-9">
											<input type="text"  value="<?php echo $data->title;?>" name="title" class="form-control" data-parsley-trigger="change" required>			
										</div>
									</div>
                                   
								<button type="submit" name="submit" class="btn btn-raised btn-default" id="form4Submit">Update</button></form>
						</form>
                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                
					</div>
				</div>
			</div>
		</section>
        </form>
		<!--/ CONTENT -->

	</div>	<!--  Vendor JavaScripts  -->
	<script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script>
	<script src="<?php echo base_url();?>assets/js/vendor/footable/footable.all.min.js"></script>
	<!--/ vendor javascripts -->

	<!--  Custom JavaScripts  -->
	<script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script>	<!-- Custom Js -->

	<!--  Page Specific Scripts  -->
	<script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body>
<!--CONTENT  -->
<section id="content">
  <div class="page profile-page">
    <!-- page content -->
    <div class="pagecontent">
      <!-- row -->
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <section class="boxs boxs-simple">
            <div class="boxs-header">
              <h3 class="custom-font hb-green"> <strong>About</strong> Me</h3>
            </div>
            <div class="boxs-body">
				<div class="post-box">																																		
					<div class="post-img">
						<img src="<?php echo base_url() ?>product/<?php echo $requestDetail->prd_img1?>" class="img-responsive" alt />
					</div>
				</div>
            </div>
			
          </section>
		  
        </div>
		
        <div class="col-md-6 col-sm-12">
          <section class="boxs boxs-simple">
            <div class="boxs-body p-0">
              <div role="tabpanel">
                <ul class="nav nav-tabs tabs-dark-t" role="tablist">
                  <li role="presentation" class="active"> <a href="#mypost" role="tab" data-toggle="tab">My
                      Request Detail</a> </li>
                </ul>
                <div class="tab-content">
				  <section class="boxs boxs-simple">
            <div class="boxs-header">
              <h3 class="custom-font hb-green"> <strong>About</strong> User</h3>
            </div>
            <div class="boxs-body">
				<div class="post-box">																																		
					<div class="post-img">
					<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
									<th>Name</th>
									<th><h4><a style="text-decoration:none"><?php echo $requestDetail->user_name?></a>	</h4></th>
									</tr>
								</thead>
								<tbody>
									<tr>
									<td><h4>Email	</h4></td>
									<td><h4><a style="text-decoration:none"><?php echo $requestDetail->user_email?></a></h4></td>
									</tr>
									<tr>
									<td><h4>Contact	</h4></td>
									<td><h4><a style="text-decoration:none"><?php echo $requestDetail->user_contact?></a></h4></td>							
									</tr>
									
<?php 
$data=preg_split("/!/",$requestDetail->shipping_address);
?>
									<tr>
									<td><h4>Shipping<br> Address	</h4></td>
									<td><h4><a style="text-decoration:none"><?php echo $data[0]."<br>".$data[1]."<br>".$data[2]."<br>".$data[3]."<br>";?></a></h4></td>							
									</tr>
								</tbody>
							</table>
						</div>

					</div>
				</div>
            </div>
			
          </section>
                  <div role="tabpanel" class="tab-pane active" id="mypost">
                    <div class="wrap-reset">
                      <div class="mypost-form">
						<h3>Resion ..</h3>	<br>
                     <h4 class="mt-10">   <textarea class="form-control br-0-t" rows="3" readonly="readonly"><?php echo $requestDetail->request_resion?></textarea></h4>
                        
                      </div>
                      <div class="mypost-list mt-20">
                        <div class="post-box">
                          <div class="panel panel-default">
                            <h3>Description </h3><br>
                            <p class="mb-0"><?php echo $requestDetail->request_description?></p>
                            <p class="mt-10 mb-2"> <a href="javascript:void(0);" class="btn btn-raised bg-blue btn-sm"> <i class="fa fa-heart-o text-inactive"></i> <?php echo $requestDetail->request_type?>
                                (<?php echo $requestDetail->request_prd_qty?>) </a> 

<a href="<?php echo site_url()?>/Replacecontrol/progress/<?php echo $requestDetail->request_id ?>" style="text-decoration:none" class="<?php if( $requestDetail->request_status=="Pending"){ ?>btn btn-raised bg-soundcloud btn-sm<?php	}	else{	?>btn btn-raised bg-soundcloud btn-sm	<?php }?>"> <i class="fa fa-mail-reply"></i>  <?php echo $requestDetail->request_progress?></a> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /boxs body -->
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ CONTENT -->
</div>
<!--/ Application Content -->
<!-- Vendor JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<!--/ vendor javascripts -->
<!--  Custom JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
</body></html>
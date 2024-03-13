
<!--CONTENT  -->
<section id="content">
  <div class="page profile-page">
    <!-- page content -->
    <div class="pagecontent">
      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <section class="boxs">
            <div class="profile-header">
              <div class="profile_info">
                <div class="profile-image">
				 <a  data-toggle="modal" data-target="#myModal">
				<img src="<?php echo base_url() ?>./image/<?php echo $profile->image;  ?>"  
					alt="<?php echo $profile->name ?>" height="100" width="100">
				</a>	
				</div>
                <h4 class="mb-0"><strong><?php echo $profile->name; ?></strong></h4>
                <span class="text-muted">Ui UX Designer</span>
                <div class="mt-10">
                  <button class="btn btn-raised bg-blush btn-sm">Follow</button>
                  <button class="btn btn-raised bg-green btn-sm">Message</button>
                </div>
                <p class="m-0"> <a title="Twitter" href="#" class="icon-color p-5"> <i class="fa fa-twitter"></i> </a> <a title="Facebook" href="#" class="icon-color p-5"> <i class="fa fa-facebook"></i> </a> <a title="Google-plus" href="#" class="icon-color p-5"> <i class="fa fa-google-plus"></i> </a> <a title="Behance" href="#" class="icon-color p-5"> <i class="fa fa-behance"></i> </a> <a title="Instagram" href="#" class="icon-color p-5"> <i class="fa fa-instagram "></i> </a> </p>
              </div>
            </div>
            <div class="profile-sub-header">
              <div class="box-list">
                <ul class="text-center">
                  <li> <a href="<?php echo site_url() ?>/Welcome/mailinbox" class=""> <i class="fa fa-inbox"></i>
                    <p>My Inbox</p>
                    </a> </li>
                  <li> <a href="<?php echo site_url() ?>/Welcome/gallery" class=""> <i class="fa fa-photo"></i>
                    <p>Gallery</p>
                    </a> </li>
                  <li> <a href="#"> <i class="fa fa-paperclip"></i>
                    <p>Collections</p>
                    </a> </li>
                  <li> <a href="#"> <i class="fa fa-tasks "></i>
                    <p>Tasks</p>
                    </a> </li>
                </ul>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-12 col-sm-16">
		
<section class="boxs boxs-simple">
  <div class="boxs-body p-0">
    <div role="tabpanel">
      <ul class="nav nav-tabs tabs-dark-t" role="tablist">
        <li role="presentation" class="active"> <a href="#setting" role="tab" data-toggle="tab">Setting</a> </li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="setting">
          <div class="wrap-reset">
          <form class="profile-settings" method="post" 
													action="<?php echo site_url() ?>/Welcome/personalinfo">
            <div class="row">
              <div class="form-group col-md-12 legend">
                <h4> <strong>Security</strong> Settings</h4>
                <p>Secure your account</p>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" value="<?php echo $profile->name; ?>" readonly>
              </div>
              <div class="form-group col-sm-6">
                <label for="username">Last name</label>
                <input type="text" class="form-control" id="username" value="<?php echo $profile->last_name; ?>" readonly>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" value="<?php echo $profile->email; ?>" readonly>
              </div>
              <div class="form-group col-sm-6">
                <label for="password">Current Password</label>
                <input type="password" class="form-control" id="password" value="<?php echo $profile->password; ?>" readonly>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="password">Current Password</label>
                <input type="text" class="form-control" id="mobile" value="<?php echo $profile->mobile; ?>" readonly>
              </div>
              <div class="form-group col-md-6">
                <label> Gender :</label>
                <div class="radio">
                  <?php
						 		if($profile->gender=="male")
								{
								?>
                  <label>
                  <input type="radio" name="gender" value="male" checked="checked">
                  Male </label>
                  <label>
                  <input type="radio" name="gender" value="female">
                  Female </label>
                  <?php
							} else {
							?>
                  <label>
                  <input type="radio" name="gender" value="male" checked="checked">
                  Male </label>
                  <label>
                  <input type="radio" name="gender" value="female">
                  Female </label>
                  <?php } ?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="address2">Address : </label>
                <input type="text" name="address" id="Address" class="form-control"  readonly="readonly"
						placeholder="Enter Address Detail" value="<?php echo $profile->address ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="city">City : </label>
                <input type="text" name="city" id="city" class="form-control" readonly="readonly"
						  placeholder="Enter city" required value="<?php echo $profile->city ?>">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="state">State : </label>
                <input type="text" name="state" id="state" class="form-control" readonly="readonly"
						  placeholder="Enter state" required value="<?php echo $profile->state ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="state">country : </label>
                <input type="text" name="country" id="state" class="form-control" readonly="readonly" 
						  placeholder="Enter state" required value="<?php echo $profile->country ?>">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="zip">Pincode : </label>
                <input type="text" name="pin" id="zip" class="form-control" readonly="readonly" 
						  placeholder="Enter pincode" required value="<?php echo $profile->pincode ?>">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-12">
                <button class="btn btn-raised btn-primary"> Edit Profile </button>
                <a href="<?php echo site_url() ?>/Welcome/newpass" class="btn btn-raised btn-primary">new password</a> </div>
            </div>
            
          </form>
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
<form method="post" action="<?php echo site_url(); ?>/Welcome/datapic" enctype="multipart/form-data">
  <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
			    <div class="modal-content">
                <div class="modal-header">
				
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <input type="file" name="img" />
                </div>
                <div class="modal-footer">
          <input  type="submit" name="Submit" class="btn btn-primary filestyle" value="Upload Pic" data-iconName="fa fa-inbox">
                </div>
            </div>
        </div>
    </div>
</form>
<!-- close model-->
<!--/ Application Content -->
<!-- Vendor JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<!--/ vendor javascripts -->
<!--  Custom JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
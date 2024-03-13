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
                <div class="profile-image"> <img src="<?php echo base_url() ?>assets/images/profile-photo.jpg" alt=""> </div>
                <h4 class="mb-0"><strong>Alexander</strong></h4>
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
        <div class="col-md-12 col-sm-116">
          <section class="boxs boxs-simple">
            <div class="boxs-body p-0">
              <div role="tabpanel">
                <ul class="nav nav-tabs tabs-dark-t" role="tablist">
                  <li role="presentation" class="active"> <a href="#setting" role="tab" data-toggle="tab">Setting</a> </li>
                </ul>
                <div class="tab-content ">
                  <div role="tabpanel" class="tab-pane active" id="setting">
                    <div class="wrap-reset">
                      <form class="profile-settings" method="post" action="<?php echo site_url() ?>/Welcome/insertdata">
                        <div class="row">
                          <div class="form-group col-md-12 legend">
                            <h4> <strong>Account</strong> Settings</h4>
                            <p>Your personal account settings</p>
                          </div>
                        </div>
                        <div class="row">
						  <div class="form-group col-sm-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="last-name" value="<?php echo $profile->name; ?>" readonly />
                          </div>
                          <div class="form-group col-sm-6">
                            <label for="last-name">Last Name</label>
                            <input type="text" name="lname" class="form-control" id="last-name" >
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-sm-6">
                            <label for="address1">Address Line 1</label>
                            <input type="text" name="address" class="form-control" id="address1" >
                          </div>
                          <div class="form-group col-sm-6">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control" id="city" >
                          </div>
					    </div>
						<div class="row">
                          <div class="form-group col-sm-6">
                            <label for="country">Country</label>
                            <select id="country" name="country" class="chosen-select" style="width: 100%;">
                              <option>USA</option>
                              <option>Canada</option>
                              <option>UK</option>
                              <option>India</option>
                              <option>Japan</option>
                            </select>
                          </div>
						  <div class="form-group col-sm-6">
                            <label for="address1">E-mail</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?php echo $profile->email; ?>" readonly  >
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-sm-12">
                            <button class="btn btn-raised btn-primary"> Submit </button>
                          </div>
                        </div>
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
</div>
<!--/ Application Content -->
<!-- Vendor JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<!--/ vendor javascripts -->
<!--  Custom JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
</body><!-- Mirrored from thememakker.com/templates/falcon/html/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:57:07 GMT -->
</html>
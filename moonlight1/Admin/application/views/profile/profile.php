<head>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/simple-line-icons.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/weather-icons.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animsition.min.css">    
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
<script>
window.onload=loadHide;
function loadHide()
{
$("#error").hide();
}
function validImage(img)
{	
	var ext=img.split(".");
	if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" )){
			$("#error").hide();
	}else{	$("#error").show();	}
}
</script>
</head>
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
                   <a  data-toggle="modal" data-target="#myModal" >
				   <?php $name=$profile->apic;
						 if (strlen($name)==1)
						 	{
						 ?> <p style="color:yellow">Set Profile Picture</p>
						<?php	
							}else{
						 ?>	
 <img src="<?php echo base_url() ?>profile/<?php echo $profile->aid."/".$profile->apic ?>" width="120" height="100" alt="">
				 			<?php } ?>
				  </a>

	            </div>
	            <h4 class="mb-0"> <strong><?php echo $profile->aname?> </strong></h4>
                <span class="text-muted">YoG ValleY</span>
                <div class="mt-10">
                  <button class="btn btn-raised bg-blush btn-sm">Follow</button>
                  <button  class="btn btn-raised bg-green btn-sm">Message</button>
                </div>
				<p class="m-0"> 
					<a title="Twitter" href="#" class="icon-color p-5"> 
					<i class="fa fa-twitter"></i> </a> <a title="Facebook" href="#" class="icon-color p-5"> 
					<i class="fa fa-facebook"></i> </a> <a title="Google-plus" href="#" class="icon-color p-5"> 
					<i class="fa fa-google-plus"></i> </a> <a title="Behance" href="#" class="icon-color p-5"> 
					<i class="fa fa-behance"></i> </a> <a title="Instagram" href="#" class="icon-color p-5"> 
					<i class="fa fa-instagram "></i> </a> 
				</p>
              </div>
            </div>
            <div class="profile-sub-header">
              <div class="box-list">
                <ul class="text-center">
                  <li> <a href="<?php echo site_url()?>/welcome/profile"> <i class="fa fa-user"></i>
                    <p>My Profile</p>
                    </a> </li>
                  <li> <a href="mail-inbox.html" class=""> <i class="fa fa-inbox"></i>
                    <p>My Inbox</p>
                    </a> </li>
                  <li> <a href="<?php echo site_url()?>/cprofile/gallery" class=""> <i class="fa fa-photo"></i>
                    <p>Gallery</p>
                    </a> </li>
                  <li> <a href="#"> <i class="fa fa-tasks "></i>
                    <p>Tasks</p>
                    </a> </li>
                </ul>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-8 col-sm-12">
          <section class="boxs boxs-simple">
            <div class="boxs-body p-0">
              <div role="tabpanel">
                <ul class="nav nav-tabs tabs-dark-t" role="tablist">
                  <li role="presentation" class="active"> 
				  <a href="#mypost" role="tab" data-toggle="tab">My Profile</a> </li>
                </ul>
                <div class="tab-content" style="width:500px; float:left">
                  <div role="tabpanel" class="tab-pane active"   id="setting">
                    <div class="wrap-reset">
             <form class="profile-settings" action="<?php echo site_url()?>/cprofile/personal" method="post">
                        <div class="row">
                          <div class="form-group col-sm-6">
                            <label for="first-name">First Name</label>
        <input type="text" class="form-control" id="first-name" value="<?php echo $profile->aname?>" disabled>
                          </div>
                          <div class="form-group col-sm-6">
                            <label for="last-name">Last Name</label>
       <input type="text" class="form-control" id="last-name" value="<?php echo $profile->alastname?>"disabled >
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-sm-6">
                            <label for="email">Primary E-mail</label>
       <input type="email" class="form-control" id="email" value="<?php echo $profile->aemail ?>" disabled >
                          </div>
                          <?php if($profile->acontact!=""){ ?>
                          <div class="form-group col-sm-6">
                            <label for="address1">Contact  No</label>
                            <input class="form-control"  value="<?php echo $profile->acontact;?>" disabled>
                          </div>
                          <?php }?>
                        </div>
						<div class="row">
						<?php if($profile->aalterEmail!="") {?>
							<div class="form-group col-sm-6">
								<label for="email">Recovry E-mail</label>
	<input type="email" class="form-control" id="email" value="<?php echo $profile->aalterEmail ?>" disabled >
							  </div>
						<?php } ?>	  
						</div>	
                        <?php if($profile->agender!=""){?>
                        <div class="row">
                          <div class="form-group col-sm-6">
                            <label for="address1">Gender </label>
                            <input  class="form-control"  value="<?php echo $profile->agender;?>" disabled>
                          </div>
                        </div>
                        <?php }?>
                        <?php if($profile->aaddress!=""){?>
                        <div class="row">
                          <div class="form-group col-sm-6">
                            <label for="address1">Address 1</label>
                      <input class="form-control"  value="<?php echo strtok($profile->aaddress,"");?>" disabled>
                          </div>
                        </div>
                        <?php }?>
                        <div class="row">
                          <?php if($profile->acity!=""){ ?>
                          <div class="form-group col-sm-4">
                            <label for="city">City</label>
               <input type="text" class="form-control" id="city" value="<?php echo $profile->acity ?>" disabled>
                          </div>
                          <?php }
						   if($profile->azip!=""){ ?>
                          <div class="form-group col-sm-4">
                            <label for="city">Zip Code</label>
               <input type="text" class="form-control" id="city" value="<?php echo $profile->azip ?>" disabled>
                          </div>
                          <?php }
						    if($profile->astate!=""){ ?>
                          <div class="form-group col-sm-4">
                            <label for="city">State</label>
              <input type="text" class="form-control" id="city" value="<?php echo $profile->astate ?>" disabled>
                          </div>
                          <?php }?>
						  <div class="row">
						  <?php if($profile->acountry!=""){ ?>
                          <div class="form-group col-sm-4">
                            <label for="city">Country</label>
              <input type="text" class="form-control" id="city" value="<?php echo $profile->acountry ?>" disabled>
                          </div>
                          <?php }?>
						  </div>
                        </div>
                        <hr>
                        <div class="col-sm-12">
         <input type="submit" class="btn btn-raised btn-primary" name="edit" value="Update Profile" >
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
<!-- Modal -->
  <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="<?php echo site_url() ?>/cprofile/setPicture">
				 
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
      					
                   <input type="file" name="pic" data-iconName="fa fa-inbox" onchange="validImage(this.value)">
                   
				    
				</div>
                <div class="modal-body">
                   <p id="error">Error ! File Type Must Be JPG|JPEG|PNG|GIF"</p>
					
                </div>
                <div class="modal-footer">
<input type="submit" value="Save Change" name="submit" class="btn btn-raised btn-success" style="float:left; " >
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- Modal -->
     
<!--/ Application Content -->
<!-- Vendor JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<!--/ vendor javascripts -->
<!--  Custom JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
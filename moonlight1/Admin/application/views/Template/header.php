<!doctype html>
<html class="no-js " lang="en">
<head>

<title>:: Admin Dashboard ::</title>
<link rel="icon" type="image/ico" href="<?php echo base_url(); ?>assets/images/invoice.png" />
<!-- vendor css files -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/vendor/bootstrap/bootstrap.min.css">    
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/vendor/morris/morris.css">    
<!-- project main css files -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
<link rel="stylesheet" href="../../../../blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/vendor/file-upload/css/jquery.fileupload.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/vendor/file-upload/css/jquery.fileupload-ui.css">

</head>
<body id="falcon" class="main_Wrapper">

    <div id="wrap" class="animsition">
        <!-- HEADER Content -->
        <div id="header">
            <header class="clearfix">
                <!-- Branding -->
                <div class="branding">
                    <a class="brand" href="<?php echo site_url()?>/welcome/afterlogin" style="text-decoration:none">
                        <span>Webmarket</span>
                    </a>
                    <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <!-- Branding end -->

                <!-- Left-side navigation -->
                <ul class="nav-left pull-left list-unstyled list-inline">
                    <li class="leftmenu-collapse">
                     
                    </li>
                    
                    <li class="dropdown leftmenu-collapse">
                        
                        <div class="dropdown-menu pull-left panel panel-default" role="menu">
                            
                        </div>
                    </li>
                </ul>
                <!-- Left-side navigation end -->
                <div class="search" id="main-search">
                    <input type="text" class="form-control underline-input" placeholder="Explore Falcon...">
                </div>
                <!-- Search end -->

                <!-- Right-side navigation -->
                <ul class="nav-right pull-right list-inline">
                    <li class="dropdown users">
                        <div class="dropdown-menu pull-right panel panel-default" role="menu">
                            
                        </div>
                    </li>
                    <li class="dropdown messages">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="notify">
                               <span class="heartbit"></span>
                                
								<span class="point"></span>
								
                            </div><span class=""><?php echo count($totalOrderPending) ;?></span>
                        </a>
                        <div class="dropdown-menu pull-right panel panel-default" role="menu">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object thumb thumb-sm">
                                       <i class="fa fa-shopping-cart fa-3x"></i> </span>
                                        <div class="media-body">
                                            <span class="block">
<a href="<?php echo site_url()?>/orderControl/newOrder" style="text-decoration:none">
											<span class="">
													<?php echo count($totalOrderPending) ;?>
											</span> &nbsp; New Order Request</span>
</a>
											<hr>
                                            <small class="text-muted">
												<span class="">
												<?php $i=0;$j=0;
													foreach($totalOrderPending as $dataPending)	{
																		
												if($dataPending->deliver_charg==0){$i=$i+1 ;}else{$j=$j+1 ;}
												}
												echo $i;
												?>
												</span> &nbsp; Free Delivery
											</small><hr>
											<small class="text-muted"> 
												<span class=""><?php echo $j?></span> &nbsp; Express Delivery
											</small>
                                        </div>
                                  </div>
                                </li>
                             </ul>
                            <div class="panel-footer">
                                <a role="button" tabindex="0">Show all messages
                                    <i class="pull-right fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown notifications">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <div class="notify">
								 
                                <span class="heartbit"></span>
                                <span class="point"></span>
								
                            </div><span class="">
<?php echo count($totalQueOfTheDay)+count($totalContacttheDay)+count($totalFeedoftheDay)+count($totalAskOnProduct);?>
									</span>
                        </a>
                        <div class="dropdown-menu pull-right panel panel-default">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media" href="<?php echo site_url()?>/contactcontrol/latestContact" style="text-decoration:none">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-phone"></i> 
                                        </span>
                                        <div class="media-body">
                                            <span class="block">
											<span class="badge bg-danger">
										<?php echo count($totalContacttheDay);?></span> New Contact
											</span>
                                         </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
 <a role="button" tabindex="0" class="media" href="<?php echo site_url()?>/feedbackcontrol/latestFeed" style="text-decoration:none">
                                        <span class="pull-left media-object media-icon">
                                            <i class="icon-like"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">
												<span class="badge bg-danger">
												<?php echo count($totalFeedoftheDay);?>
												</span> New Feedback</span>
                                            
                                        </div>
                                    </a>
                                </li>
								<li class="list-group-item">
<a role="button" tabindex="0" class="media" href="<?php echo site_url()?>/faqcontrol/latestfaq/" style="text-decoration:none">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-frown-o"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">
												<span class="badge bg-danger">
												<?php echo count($totalQueOfTheDay);?>
												</span> New Questions</span>
                                         </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
<a role="button" tabindex="0" class="media" href="<?php echo site_url()?>/askcontrol/latestAsk" style="text-decoration:none">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-bullhorn"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block"> 
												<span class="badge bg-danger">
										<?php echo count($totalAskOnProduct);?>	
												</span> Ask For Product Avaibality </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="panel-footer">
                                <a role="button" tabindex="0">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown nav-profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
						<?php $name=$profile->apic;
						 if (strlen($name)==1)
						 	{
						?><?php echo $name; ?>
						<?php	
							}else{
						 ?>	
            <img src="<?php echo base_url() ?>profile/<?php echo $profile->aid."/".$profile->apic ?>" class="0 size-30x30">
						  
						 <?php 
						 	}
						 ?> 
						  </a>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <div class="user-info">
                                    <div class="user-name">
									
									<?php echo $profile->aname ;?>
									</div>
                                    <div class="user-position online">Available</div>
                                </div>
                            </li>
                            <li>
                                <a href="<?php echo site_url() ?>/welcome/profile" role="button" tabindex="0">
                                    <span class="label label-success pull-right"><?php echo $finalProfile; ?></span>
                                    <i class="fa fa-user"></i>Profile</a>
                            </li>
                            
                            
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo site_url() ?>/welcome/locked" role="button" tabindex="0">
                                    <i class="fa fa-lock"></i>Lock</a>
                            </li>
                            <li>
                                <a href="<?php  echo site_url() ?>/welcome/logout" role="button" tabindex="0">
                                    <i class="fa fa-sign-out"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                   <li class="leftmenu-collapse">
                        <a role="button" tabindex="0" class="collapse-leftmenu">
                            <i class="fa fa-outdent"></i>
                        </a>
					</li>
                </ul>
                <!-- Right-side navigation end -->
            </header>
        </div>
        <!--/ HEADER Content  -->

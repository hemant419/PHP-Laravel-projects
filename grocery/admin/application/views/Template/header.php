<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from thememakker.com/templates/falcon/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:54:28 GMT -->
<head>

<meta charset="utf-8">

<title>:: Falcon - Admin Dashboard ::</title>
<link rel="icon" type="image/ico" href="<?php echo base_url() ?>assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- vendor css files -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">    
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/morris/morris.css">    
<!-- project main css files -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
</head>
<body id="falcon" class="main_Wrapper" style="background-image:url(<?php echo base_url() ?>/image/background2.jpg)" >
    <div id="wrap" class="animsition" >
        <!-- HEADER Content -->
        <div id="header" style="background-color:#555">
            <header class="clearfix">
                <!-- Branding -->
                <div class="branding" style="background-color:#555"  >
                    <a class="brand" href="<?php echo site_url() ?>/welcome/index">
                        <span style="color:#FFF">Grocery</span>
                    </a>
                    <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <!-- Branding end -->

                <!-- Left-side navigation -->
                <ul class="nav-left pull-left list-unstyled list-inline">
                    <li class="leftmenu-collapse">
                        <a role="button" tabindex="0" class="collapse-leftmenu">
                            <i class="fa fa-outdent"></i>
                        </a>
                    </li>

                    
                </ul>
                <!-- Left-side navigation end -->
                <!-- Search end -->

                <!-- Right-side navigation -->
                <ul class="nav-right pull-right list-inline">
                    <li class="dropdown users">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-th"></i>
                        </a>
                        <div class="dropdown-menu pull-right panel panel-default" role="menu">
                            <ul class="app-sortcut">
                                <li>
                                    <a href="#" class="connection-item">
                                        <i class="fa fa-umbrella"></i>
                                        <span class="block">Weather</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="ui-widgets.html" class="connection-item">
                                        <i class="fa fa-object-ungroup"></i>
                                        <span class="block">Widget</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar.html" class="connection-item">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span class="block">calendar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="maps-google.html" class="connection-item">
                                        <i class="fa fa-map-o"></i>
                                        <span class="block">map</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="chat.html" class="connection-item">
                                        <i class="fa fa-comments-o"></i>
                                        <span class="block">chat</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="connection-item">
                                        <i class="fa fa-book"></i>
                                        <span class="block">contact</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown messages">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                            <div class="notify">
                                <span class="heartbit"></span>
                                <span class="point"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu pull-right panel panel-default" role="menu">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object thumb thumb-sm">
                                        <img src="<?php echo base_url() ?>assets/images/ram.jpg" alt="" > 
										</span>
                                        <div class="media-body">
                                            <span class="block">Lucas sent you a message</span>
                                            <small class="text-muted">9 minutes ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object  thumb thumb-sm">
                                         <img src="<?php echo base_url()?>assets/images/Jane-avatar.jpg" alt="" >
										  </span>
                                        <div class="media-body">
                                            <span class="block">Jane sent you a message</span>
                                            <small class="text-muted">27 minutes ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object  thumb thumb-sm">
                                      <img src="<?php echo base_url()?>assets/images/random-avatar1.jpg" alt="" >
									   </span>
                                        <div class="media-body">
                                            <span class="block">Lee sent you a message</span>
                                            <small class="text-muted">2 hour ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object  thumb thumb-sm">
                                   <img src="<?php echo base_url()?>assets/images/random-avatar3.jpg" alt="" >
									  </span>
                                        <div class="media-body">
                                            <span class="block">Rihtik sent you a message</span>
                                            <small class="text-muted">8 hours ago</small>
                                        </div>
                                    </a>
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
                            </div>
                        </a>
                        <div class="dropdown-menu pull-right panel panel-default">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-ban"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">User Lucas cancelled account</span>
                                            <small class="text-muted">12 minutes ago</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-spotify"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">2 voice mails</span>
                                            <small class="text-muted">Neque porro quisquam est</small>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-whatsapp"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="block">8 voice messanger</span>
                                            <small class="text-muted">8 texts</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="panel-footer">
                                <a role="button" tabindex="0">Show all notifications
                                    <i class="fa fa-angle-right pull-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown nav-profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
          <img src="<?php echo base_url() ?>./image/<?php echo $profile->image; ?>" alt="" class="0 size-30x30">
				   </a>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <div class="user-info">
                                    <div class="user-name">
									<?php echo $profile->name; ?></div>
                                    <div class="user-position online">Available</div>
									
                                </div>
                            </li>
                            <li>
                                <a href="<?php echo site_url() ?>/Welcome/profile" role="button" tabindex="0">
                                    <span class="label label-success pull-right"><?php echo $progress; ?></span>
                                    <i class="fa fa-user"></i>Profile</a>
                            </li>
                            <li>
                                <a role="button" tabindex="0">
                                    <span class="label label-info pull-right">new</span>
                                    <i class="fa fa-check"></i>Tasks</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url() ?>/Welcome/newpass" role="button" tabindex="0">
                                    <i class="fa fa-cog"></i>New Password</a>
                            </li>
                            <li class="divider"></li>
                           <!-- <li>
                                <a href="<?php echo site_url() ?>/Welcome/locked" role="button" tabindex="0">
                                    <i class="fa fa-lock"></i>Lock</a>
                            </li>
                            
                            -->
                            <li>
                                <a href="<?php echo site_url() ?>/Welcome/logout" role="button" tabindex="0">
                                    <i class="fa fa-sign-out"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="toggle-right-leftmenu">
                        <a role="button" tabindex="0">
                            <i class="fa fa-align-left"></i>
                        </a>
                    </li>
                </ul>
                <!-- Right-side navigation end -->
            </header>
        </div>
        <!--/ HEADER Content  -->
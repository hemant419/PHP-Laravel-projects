<style>

span
{
	color:#FFF;
}
i
{
color:#CCC;	
}

</style>

<div id="controls">
            <aside id="leftmenu" style="background-color:#555">
                <div id="leftmenu-wrap" >
                    <div class="panel-group slim-scroll" role="tablist">
                        <div class="panel panel-default">
                            <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                                <div class="panel-body" >
                                    <!--  NAVIGATION Content -->
                                    <ul id="navigation" style="background-color:#555">
                                        <li class="<?php if($this->uri->segment(1)=="Welcome"){ ?>active open<?php }?>">
                                            <a href="<?php echo site_url()?>/Welcome/">
                                                <i class="fa fa-dashboard"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <hr style="border: 0;
	height: 24px;
	background-image: url(<?php echo base_url() ?>image/slide.jpg);
	background-size: 250px; 
	background-repeat: no-repeat;
	margin-top:4px;">
                                        <li class="
										<?php if($this->uri->segment(1)=="userControl"){?>
										active open
										<?php }?>
										">
                                            <a href="<?php echo site_url() ?>/userControl/">
                                                <i class="fa fa-arrow-right"></i>
                                                <span>User</span>
                                            </a>
                                        </li>
                                         <hr style="border: 0;
	height: 24px;
	background-image: url(<?php echo base_url() ?>image/slide.jpg);
	background-size: 250px; 
	background-repeat: no-repeat;
	margin-top:4px;">                    
                                        <li	class="
										<?php 
	if(($this->uri->segment(1)=="categoryControl")||($this->uri->segment(1)=="subcatControl") || ($this->uri->segment(1)=="brandControl") || ($this->uri->segment(1)=="productc") ){?>
										active open
										<?php }?>
										">
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-list"></i>
                                                <span>Category</span>
                                            </a>
                                            <ul>
                                                <li class="<?php 
									if(($this->uri->segment(1)=="categoryControl")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/categoryControl/" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i> Category</a>
                                                </li>
                  
                  
                  
                                                <li class="<?php 
										if(($this->uri->segment(1)=="subcatControl")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/subcatControl/" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Sub Category</a>
                                                </li>
                                                 <li class="<?php 
									if(($this->uri->segment(1)=="brandControl")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url()?>/brandControl/" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Brand
                                                        <span class="badge br-10 badge-success"></span>
                                                    </a>
                                                </li>
												<li class="<?php 
									if(($this->uri->segment(1)=="productc")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url()?>/productc/" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Product
                                                        <span class="badge br-10 badge-success"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                         <hr style="border: 0;
	height: 24px;
	background-image: url(<?php echo base_url() ?>image/slide.jpg);
	background-size: 250px; 
	background-repeat: no-repeat;
	margin-top:4px;">
                                        <li class="
										<?php 
	if(($this->uri->segment(1)=="sliderControl")||($this->uri->segment(1)=="feedbackCon") || ($this->uri->segment(1)=="addtocartCon") || ($this->uri->segment(1)=="storecartCon")|| ($this->uri->segment(1)=="discountCon") || ($this->uri->segment(1)=="productreplaceC") || ($this->uri->segment(1)=="wishlistCon") || ($this->uri->segment(1)=="cuponControl") || ($this->uri->segment(1)=="offerControl")  || ($this->uri->segment(1)=="ordercon")){?>
										active open
										<?php }?>
										">
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-list"></i>
                                                <span>Product & More</span>
                                            </a>
                                            <ul>
                                                <li class="<?php 
									if(($this->uri->segment(1)=="sliderControl")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/sliderControl/" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Slider</a>
                                                </li>
                                                <li class="<?php 
									if(($this->uri->segment(1)=="feedbackCon")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/feedbackCon/" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Feedback</a>
                                                </li>
                                                <li class="<?php 
									if(($this->uri->segment(1)=="addtocartCon")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/addtocartCon/" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Add to Cart</a>
                                                </li>
                                                <li class="<?php 
									if(($this->uri->segment(1)=="storecartCon")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/storecartCon/" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Store cart</a>
                                                </li>
                                                <li class="<?php 
									if(($this->uri->segment(1)=="discountCon")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/discountCon/" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Discount</a>
                                                </li>
                                                <li class="<?php 
									if(($this->uri->segment(1)=="productreplaceC")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/productreplaceC/" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Product Replace</a>
                                                </li>
                                                <li class="<?php 
									if(($this->uri->segment(1)=="wishlistCon")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/wishlistCon" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Wishlist</a>
                                                </li>
                                                <li class="<?php 
									if(($this->uri->segment(1)=="cuponControl")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/cuponControl" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Cupon</a>
                                                </li>
                                                <li  class="<?php 
									if(($this->uri->segment(1)=="offerControl")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/offerControl" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Offer</a>
                                                </li>
                                                <li  class="<?php 
									if(($this->uri->segment(1)=="orderCon ")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/orderCon " style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Order</a>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                         <hr style="border: 0;
	height: 24px;
	background-image: url(<?php echo base_url() ?>image/slide.jpg);
	background-size: 250px; 
	background-repeat: no-repeat;
	margin-top:4px;">
                                        <li  class="<?php 
									if(($this->uri->segment(1)=="contactControl")){?>
										active open<?php }?>">
                                            <a href="<?php echo site_url() ?>/contactControl/">
                                                <i class="glyphicon glyphicon-user"></i>
                                                <span>Contact</span>
                                            </a>
                                        </li>
                                         <hr style="border: 0;
	height: 24px;
	background-image: url(<?php echo base_url() ?>image/slide.jpg);
	background-size: 250px; 
	background-repeat: no-repeat;
	margin-top:4px;">
                                        <li class="
										<?php 
	if(($this->uri->segment(1)=="stateControl")||($this->uri->segment(1)=="cityControl") || ($this->uri->segment(1)=="areaControl") ){?>
										active open
										<?php }?>
										">
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-map-marker"></i>
                                                <span>Area Info</span>
                                            </a>
                                            <ul>
                                                <li class="<?php 
									if(($this->uri->segment(1)=="stateControl")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/stateControl/" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>State</a>
                                                </li>
                                                <li class="<?php 
									if(($this->uri->segment(1)=="cityControl")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/cityControl" style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>City
                                                      
                                                    </a>
                                                </li>
                                                <li  class="<?php 
									if(($this->uri->segment(1)=="areaControl")){?>
										active open<?php }?>">
                                                    <a href="<?php echo site_url() ?>/areaControl"style="color:#FFF">
                                                        <i class="fa fa-angle-right"></i>Area</a>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        
                                         <hr style="border: 0;
	height: 24px;
	background-image: url(<?php echo base_url() ?>image/slide.jpg);
	background-size: 250px; 
	background-repeat: no-repeat;
	margin-top:4px;">
                                        <li  class="<?php 
									if(($this->uri->segment(1)=="profile")){?>
										active open<?php }?>">
                                            <a href="<?php echo site_url() ?>/Welcome/profile">
                                                <i class="fa fa-user"></i>
                                                <span>User Profile</span>
                                            </a>
                                        </li>
                                        
                                         <hr style="border: 0;
	height: 24px;
	background-image: url(<?php echo base_url() ?>image/slide.jpg);
	background-size: 250px; 
	background-repeat: no-repeat;
	margin-top:4px;">                                                      </ul>
                                    <!--/ NAVIGATION Content -->
                                </div>
                            </div>
                        </div>
                       
            </aside>
            <aside id="rightmenu">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">Chat</a>
                        </li>
                        <li role="presentation">
                            <a href="#todo" aria-controls="todo" role="tab" data-toggle="tab">Todo</a>
                        </li>
                        <li role="presentation">
                            <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="chat">
                            <div class="search">
                                <div class="form-group is-empty">
                                    <input type="text" class="form-control underline-input" placeholder="Search...">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                            <h6>Recent</h6>
                            <ul>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar1.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <span class="name">Claire Sassu</span>
                                            <span class="message"> If you are going to use a passage of Lorem Ipsum</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar8.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name">Maggie jackson</span>
                                                <span class="message">All the Lorem Ipsum generators on the Internet</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar3.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name">Joel King</span>
                                                <span class="message">The standard chunk of Lorem Ipsum used</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar6.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name">Isabella</span>
                                                <span class="message">There are many variations of passages of Lorem</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                            <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar5.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name">Alexander</span>
                                                <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h6>Contacts</h6>
                            <ul>
                                <li class="offline">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar5.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">Matthew</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="offline">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar4.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">Aaliyah</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="offline">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar8.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">Arianna</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="online">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar9.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">Scarlett</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="offline">
                                    <div class="media">
                                        <a class="pull-left thumb thumb-sm" role="button">
                                            <img class="media-object " src="<?php echo base_url() ?>assets/images/xs/avatar10.jpg" alt=""> </a>
                                        <div class="media-body">
                                            <div class="media-body">
                                                <span class="name mt-5">David</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="todo">
                            <div class="form-group">
                                <input type="text" value="" placeholder="Create new task..." class="form-control" />
                                <span class="fa fa-plus"></span>
                            </div>
                            <h6>Today</h6>
                            <ul class="todo-list">
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Initialize the project</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Create the main structure</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Create the main structure</label>
                                    </div>
                                </li>
                            </ul>
                            <h6>Tomorrow</h6>
                            <ul class="todo-list">
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Initialize the project</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> Create the main structure</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes"> displayed in a normal space!</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                            <h6>Chat Settings</h6>
                            <ul class="settings">
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Show Offline Users</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Show Fullname</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">History Enable</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Show Locations</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Notifications</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="col-xs-8 control-label">Show Undread Count</label>
                                        <div class="col-xs-4 control-label text-right">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

<head>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/animsition.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/weather-icons.min.css">
</head>
<div id="controls">
  <aside id="leftmenu">
    <div id="leftmenu-wrap">
      <div class="panel-group slim-scroll" role="tablist">
        <div class="panel panel-default">
          <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
            <div class="panel-body">
              <!--  NAVIGATION Content -->
              <ul id="navigation">
			  <li  <?php if($this->uri->segment(2)=="afterlogin"){?>
				class="active open"<?php }?>
				> <a href="<?php echo site_url() ?>/welcome/afterlogin"> <i class="fa fa-dashboard"></i> <span><?php if($profile->priority=="Admin"){?>Dashboard<?php } else{ ?> Sub Admin<?php } ?></span> </a> </li>
			
				<li <?php if(($this->uri->segment(1)=="categorycontrol")||($this->uri->segment(1)=="subcategorycontrol") ){?>
				 class="active open"
				 <?php }?>
				 > <a role="button" tabindex="0"> <i class="fa fa-delicious"></i> <span>Category</span> </a>
                  <ul>
                    <li <?php 
			if($this->uri->segment(1)=="categorycontrol") {?> class="active"
				 <?php }?>> <a href="<?php echo site_url()?>/categorycontrol/"> <i class="fa fa-angle-right"></i>Main Category</a> </li>
                    <li <?php 
			if($this->uri->segment(1)=="subcategorycontrol") {?> class="active"
				 <?php }?>> <a href="<?php echo site_url()?>/subcategorycontrol/"> <i class="fa fa-angle-right"></i>Sub Category</a> </li>
                  </ul>
                </li>
				
                <li <?php if(($this->uri->segment(1)=="coupancontrol")||($this->uri->segment(1)=="offerscontrol")|| ($this->uri->segment(1)=="discountcontrol")){?>
				 class="active open"
				 <?php }?>
				 > <a role="button" tabindex="0"> <i class="icon-plus"></i> <span>Offers</span> </a>
                  <ul>
                    <li <?php 
			if($this->uri->segment(1)=="discountcontrol") {?> class="active"
		 <?php }?>> <a href="<?php echo site_url() ?>/discountcontrol/"> <i class="fa fa-angle-right"></i>Discount</a> </li>
                   <li <?php 
			if($this->uri->segment(1)=="offerscontrol") {?> class="active"
			 <?php }?>> <a href="<?php echo site_url() ?>/offerscontrol/"> <i class="fa fa-angle-right"></i>Offers</a> </li>
                    <li <?php 
			if($this->uri->segment(1)=="coupancontrol") {?> class="active"
			 <?php }?>> <a href="<?php echo site_url() ?>/coupancontrol/"> <i class="fa fa-angle-right"></i>Coupans</a> </li>
                  </ul>
                </li>
				 
				<li <?php if(($this->uri->segment(1)=="productcontrol")||($this->uri->segment(1)=="PrdtypeControl") ){?>class="active open" <?php }?>
				 > <a role="button" tabindex="0"> <i class="fa fa-delicious"></i> <span>Product</span> </a>
                  <ul>
                    <li<?php if($this->uri->segment(1)=="productcontrol") {?> class="active"<?php }?>>
		 <a href="<?php echo site_url() ?>/productcontrol/"><i class="fa fa-cubes"></i>Product</a> 
				</li>
                    <li <?php 
			if($this->uri->segment(1)=="PrdtypeControl") {?> class="active"
				 <?php }?>> <a href="<?php echo site_url()?>/PrdtypeControl/"> <i class="fa fa-angle-right"></i>Type of Product</a> </li>
                  </ul>
                </li>
               <li <?php 
			if($this->uri->segment(1)=="Brandcontrol") {?> class="active"
		<?php }?>><a href="<?php echo site_url() ?>/Brandcontrol/"> <i class="fa fa-bold"></i>Brands</a> </li>
		
				 <li <?php 
			if($this->uri->segment(1)=="orderControl") {?> class="active"
				<?php }?>> <a href="<?php echo site_url() ?>/orderControl/"> <i class="fa fa-truck"></i>Order</a> </li>
				
              <li <?php 
			if($this->uri->segment(1)=="Replacecontrol") {?> class="active"
		<?php }?>> <a href="<?php echo site_url() ?>/Replacecontrol/"> <i class="fa fa-hand-o-right"></i>Reaplace</a> </li>

	<li <?php if(($this->uri->segment(1)=="contactcontrol")||($this->uri->segment(1)=="feedbackcontrol") ){?>
				 class="active open"
				 <?php }?>
				 > <a role="button" tabindex="0"> <i class="fa fa-phone"></i> <span>Contact Us</span> </a>
                  <ul>
                    <li <?php 
			if($this->uri->segment(1)=="contactcontrol") {?> class="active"
				 <?php }?>> <a href="<?php echo site_url()?>/contactcontrol/"> <i class="fa fa-angle-right"></i>Contact</a> </li>
                    <li <?php 
			if($this->uri->segment(1)=="feedbackcontrol") {?> class="active"
				 <?php }?>> <a href="<?php echo site_url()?>/feedbackcontrol/"> <i class="fa fa-angle-right"></i>Feed-Back</a> </li>
                  </ul>
                </li>
		
		<li <?php 
		if($this->uri->segment(1)=="sliderControl") {?> class="active open"
		<?php }?>> <a href="<?php echo site_url() ?>/sliderControl/"> <i class="fa fa-bar-chart-o"></i> <span>Slider</span> </a> </li>
		
		<li <?php if($this->uri->segment(1)=="storecartcontrol") {?> class="active"
	<?php }?>> <a href="<?php echo site_url() ?>/storecartcontrol/"> <i class="fa fa-shopping-cart"></i>Store-Cart</a> </li>
	
                
                <li <?php if(($this->uri->segment(1)=="usercontrol")||($this->uri->segment(1)=="cartControl")|| ($this->uri->segment(1)=="wishlistcontrol")){?>
				 class="active open"
				 <?php }?>
				 > <a role="button" tabindex="0"> <i class="fa fa-users"></i> <span>User</span> </a>
                  <ul>
             <li <?php if($this->uri->segment(1)=="usercontrol") {?> class="active open"
			 <?php }?>> <a href="<?php echo site_url() ?>/usercontrol/"> <i class="fa fa-angle-right"></i> <span>User</span> </a> </li>
                   <li <?php if($this->uri->segment(1)=="cartControl") {?>class="active open"
				 <?php }?>> <a href="<?php echo site_url() ?>/cartControl/"> <i class="fa fa-angle-right"></i> <span>Add to Cart</span> </a> </li>
                    <li <?php 
			if($this->uri->segment(1)=="wishlistcontrol") {?> class="active"
				 <?php }?>> <a href="<?php echo site_url() ?>/wishlistcontrol/"> <i class="fa fa-angle-right"></i>Wishlist Table</a> </li>
                  </ul>
                </li>
				<li <?php if(($this->uri->segment(1)=="Statecontrol")||($this->uri->segment(1)=="citycontrol")|| ($this->uri->segment(1)=="areacontrol")){?>
				 class="active open"
				 <?php }?>
				 > <a role="button" tabindex="0"> <i class="fa fa-map-o"></i> <span>Address</span> </a>
                  <ul>
                    <li <?php 
			if($this->uri->segment(1)=="Statecontrol") {?> class="active"
				 <?php }?>> <a href="<?php echo site_url() ?>/Statecontrol/"> <i class="fa fa-angle-right"></i>State</a> </li>
                    <li <?php 
			if($this->uri->segment(1)=="citycontrol") {?> class="active"
				 <?php }?>> <a href="<?php echo site_url() ?>/citycontrol/"> <i class="fa fa-angle-right"></i>City</a> </li>
                    <li <?php 
			if($this->uri->segment(1)=="areacontrol") {?> class="active"
				 <?php }?>> <a href="<?php echo site_url() ?>/areacontrol/"> <i class="fa fa-angle-right"></i>Area</a> </li>
                  </ul>
                </li>
				<li <?php if(($this->uri->segment(2)=="addUser")||($this->uri->segment(2)=="newPass")|| ($this->uri->segment(2)=="locked")){?>
				 class="active open"
				 <?php }?>
				 > <a role="button" tabindex="0"> <i class="fa fa-lock"></i> <span>Authentication</span> </a>
                  <ul>
                    <li <?php 
			if($this->uri->segment(2)=="addUser") {?> class="active"
				 <?php }?>> <a href="<?php echo site_url()?>/SubAdminControl/"> <i class="fa fa-angle-right"></i> Sub-Admin</a> </li>
				   <li <?php 
			if($this->uri->segment(2)=="newPass") {?> class="active"
				 <?php }?>> <a href="<?php echo site_url()?>/welcome/newPass"> <i class="fa fa-angle-right"></i> New Password</a> </li>
                   <li <?php 
			if($this->uri->segment(2)=="locked") {?> class="active"
				 <?php }?>> <a href="<?php echo site_url()?>/welcome/locked"> <i class="fa fa-angle-right"></i> Locked Screen</a> </li>
                  </ul>
                </li>
              </ul>
              <!--/ NAVIGATION Content -->
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </aside>
  
</div>

<!doctype html>
<html class="no-js" lang="en">
<head>
<!-- Document Title -->
<title>Smart Tech - Ecommerce HTML5 Template</title>
<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url() ?>images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo base_url() ?>images/favicon.ico" type="image/x-icon">
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>rs-plugin/css/settings.css" media="screen" />
<!-- StyleSheets -->
<link rel="stylesheet" href="<?php echo base_url() ?>css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>css/main.css">
<link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
<link rel="stylesheet" href="<?php echo base_url() ?>css/responsive.css">
<!-- Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<!-- JavaScripts -->
<script src="<?php echo base_url() ?>js/vendors/modernizr.js"></script>
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- Page Wrapper -->
<div id="wrap" class="layout-1">
<!-- Top bar -->
<div class="top-bar">
  <div class="container">
    <p>Welcome to SmartTech center!</p>
    <div class="right-sec">
      <ul>
        <?php if($this->session->userdata('Useremail')=="")
			{ ?>
        <li><a href="<?php echo site_url() ?>/user_cont/login">Login/Register </a></li>
        <?php
			} else 
			{ ?>
        <li><a href="<?php echo site_url() ?>/user_cont/logout"> Logout</a></li>
        <?php
			}
			?>
        <li><a href="<?php echo site_url() ?>/Welcome/wishlist">Wishlist(<?php echo count($wishrow)?>)</a></li>
        <li><a href="<?php echo site_url() ?>/Welcome/contact">Contact</a></li>
        <li><a href="#.">Newsletter </a></li>
      </ul>
	  
      <div class="social-top"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> <a href="#."><i class="fa fa-pinterest"></i></a> </div>
    </div>
  </div>
</div>
<!-- Header -->
<header>
  <div class="container">
    <div class="logo"><a href="<?php echo site_url() ?>/Welcome/"><img src="<?php echo base_url() ?>images/logo.png" alt="" ></a> </div>
    <div class="search-cate">
      <select class="selectpicker">
        <option>All Categories</option>
        <?php foreach($data as $getdata) { ?>
        <option value=""><?php echo $getdata->categery_name ?></option>
        <?php } ?>
      </select>
      <input type="search" placeholder="Search entire store here...">
      <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
    </div>
    <!-- Cart Part -->
  
	 <ul class="nav navbar-right cart-pop" id="cart1">
        <li class="dropdown"> 
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			<span class="itm-cont"><?php echo count($cart);?></span> 
			<i class="flaticon-shopping-bag"></i> 
			<strong>My Cart</strong> <br>
		 <?php $i=0; foreach($cart as $row){ $i=$i+ $row->totalamunt; }?>
          <span><?php echo count($cart);?> item(s) - &#8377 <?php echo $i ?></span></a>
          <ul class="dropdown-menu">
		  <div class="auto">
            <?php foreach($cart as $row){  ?>
            <li>
              <div class="media-left">
			   <a href="#." class="thumb">
			  		 <img src="<?php echo base_url()?>satish/images/<?php echo $row->image ?>" class="img-responsive" alt="" > 
			   		</a> 
			   </div>
              <div class="media-body"> <a href="#." class="tittle"> <?php echo $row->product_description ?>  </a> 
			  <span>&#8377 <?php  echo $row->totalamunt ?></span> </div>
            </li>
			<?php }?>
			</div>
            <li class="btn-cart"> <a href="<?php echo site_url() ?>/Welcome/viewcart" class="btn-round">View Cart</a> </li>
          </ul>
        </li>
      </ul>
	  <ul class="nav navbar-right cart-pop" id="cart2">
	  
	  
	  </ul>

  </div>
  <!-- Nav -->
  <nav class="navbar ownmenu">
    <div class="container">
      <!-- Categories -->
      <div class="cate-lst"> 
	  <a  data-toggle="collapse" class="cate-style" href="#cater">
	  <i class="fa fa-list-ul"></i> Our Categories </a>
        <div class="cate-bar-in">
          <div id="cater" class="collapse">
             <ul>
        		<?php foreach($data as $getdata) { ?>
        			<li><a href=""><?php echo $getdata->categery_name ?></a></li>
        		<?php } ?>
            </ul>
          </div>
        </div>
      </div>
	  
      <!-- Navbar Header -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
      </div>
      <!-- NAV -->
      <div class="collapse navbar-collapse" id="nav-open-btn">
        <ul class="nav">
			 <li class="dropdown megamenu active"> 
			 <a href="<?php echo site_url() ?>/Welcome/" class="dropdown-toggle" data-toggle="dropdown">Home </a>
			 </li>
				
            <!-- Mega Menu Nav -->
			 <?php foreach($category as $categoryData){?>
            <li class="dropdown megamenu"> 
			<a href="" class="dropdown-toggle" data-toggle="dropdown">
			<?php echo $categoryData->categery_name?> </a>
              <div class="dropdown-menu animated-2s fadeInUpHalf">
                <div class="mega-inside">
                  <div class="row">
				  <?php foreach($subcategory as $subcategoryData){
				  if($categoryData->categery_id==$subcategoryData->categery_id){
				  ?>
                    <div class="col-sm-3">
                      <h6><?php echo $subcategoryData->s_name?></h6>
					  
                      <ul>
					  <?php foreach($drug as $drugData){
					  
					  			if($drugData->s_id==$subcategoryData->s_id){
					  ?>
                        <li><a href="#."> <?php echo $drugData->drug_name?>  </a></li>
						<?php
									}
						 }?>
                      </ul>
					  
					  
                    </div>
				<?php }} ?>	
                    
                    
                   
                  </div>
                </div>
              </div>
            </li>
            <?php }?>
            <li> <a href="shop.html">Buy theme! </a></li>

        </ul>
      </div>
      <!-- NAV RIGHT -->
	  <?php if($this->session->userdata('Useremail')=="")
			{ ?>
      <div class="nav-right"> 
	  	<span class="call-mun"><i class="fa fa-phone"></i> 
	  	<strong>Hotline:</strong> (+100) 123 456 7890</span> 
	  </div>
	<?php } else { ?>
	<div class="nav-right">
		<a href="<?php echo site_url() ?>/user_cont/myaccount/">
		<span class="call-mun"><i class="fa fa-user"></i><strong>My Account()</strong></span></a> 
	</div>
	<?php } ?>
  </nav>
</header>
<!-- Slid Sec -->
<style>

.auto{

	display:block;
	padding:5px;
	margin-top:5px;
	width:auto;
	max-height:250px;
	overflow:auto;
}


</style>
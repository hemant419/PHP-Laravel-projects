<!doctype html>
<html class="no-js" lang="en">

<head>
<!-- Document Title -->
<title>Grocery Shop</title>
<style>
/* Two */img
img {
	-webkit-transform: rotate(0) scale(1);
	transform: rotate(0) scale(1);

}
img:hover {

	-webkit-transform: rotate(15deg) scale(1.4);
	transform: rotate(15deg) scale(1.0);
	-webkit-transition: .5s ease-in-out;
	transition: .5s ease-in-out;


}</style>
<style>
i{
color:#84c225	
}

</style>

<style>
img {
  background-repeat: no-repeat;
  background-position: -120px -120px, 0 0;
  
  background-image: -webkit-linear-gradient(
    top left,
    rgba(255, 255, 255, 0.2) 0%,
    rgba(255, 255, 255, 0.2) 37%,
    rgba(255, 255, 255, 0.8) 45%,
    rgba(255, 255, 255, 0.0) 50%
  );
  background-image: -moz-linear-gradient(
    0 0,
    rgba(255, 255, 255, 0.2) 0%,
    rgba(255, 255, 255, 0.2) 37%,
    rgba(255, 255, 255, 0.8) 45%,
    rgba(255, 255, 255, 0.0) 50%
  );    
  background-image: -o-linear-gradient(
    0 0,
    rgba(255, 255, 255, 0.2) 0%,
    rgba(255, 255, 255, 0.2) 37%,
    rgba(255, 255, 255, 0.8) 45%,
    rgba(255, 255, 255, 0.0) 50%
  );
  background-image: linear-gradient(
    0 0,
    rgba(255, 255, 255, 0.2) 0%,
    rgba(255, 255, 255, 0.2) 37%,
    rgba(255, 255, 255, 0.8) 45%,
    rgba(255, 255, 255, 0.0) 50%
  );
  
  -moz-background-size: 250% 250%, 100% 100%;
       background-size: 250% 250%, 100% 100%;
  
  -webkit-transition: background-position 0s ease;
     -moz-transition: background-position 0s ease;       
       -o-transition: background-position 0s ease;
          transition: background-position 0s ease;
}

img:hover {
  background-position: 0 0, 0 0;
  
  -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
          transition-duration: 0.5s;
}
</style>
<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url() ?>/icons/Screenshot.png" type="image/x-icon">
<link rel="icon" href="<?php echo base_url() ?>/icons/Screenshot.png" type="image/x-icon">

<!-- SLIDER REVOLUTION- 4.x CSS SETTINGS -->
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

</head>
<body >

<!-- Page Wrapper -->
<div id="wrap" class="layout-1"> 
  
  <!-- Top bar -->
  <div class="top-bar">
    <div class="container">
      <p>Welcome to Grocery Shop</p>
      <div class="right-sec">
       <!-- <ul>
          <li><a href="#.">Login/Register </a></li>
          <li><a href="#.">Store Location </a></li>
          <li><a href="#.">FAQ </a></li>
          <li><a href="#.">Newsletter </a></li>
          <li>
            <select class="selectpicker">
              <option>French</option>
              <option>German</option>
              <option>Italian</option>
              <option>Japanese</option>
            </select>
          </li>
          <li>
            <select class="selectpicker">
              <option>(USD)Dollar</option>
              <option>GBP</option>
              <option>Euro</option>
              <option>JPY</option>
            </select>
          </li>
        </ul>-->
		
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
        <li><a href="<?php echo site_url() ?>/Welcome/wishlist" id="" >Wishlist(<span id="wish"><?php echo count($wishrow)?></span><span id="swish"></span>)</a>
		
		
		</li>
        <li><a href="<?php echo site_url() ?>/Welcome/contact">Contact</a></li>
        <li><a href="#.">Newsletter </a></li>
      </ul>
        <div class="social-top"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> <a href="#."><i class="fa fa-pinterest"></i></a> </div>
      </div>
    </div>
  </div>
  
  <!-- Header -->
  <header >
    <div class="container" >
      <div class="logo"> 
	  <a href="<?php echo base_url() ?>">
	  		<img src="<?php echo base_url() ?>/icons/Screenshot.png" alt="" ></a> 
	  </div>
	  <form method="post" action="<?php echo site_url() ?>/Welcome/search/">
      <div class="search-cate" style="z-index:1">
	   <input type="search" name="search"  placeholder="Search entire store here..." id="search" onKeyPress="searchData()" style="width:520px;">
        <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
      </div>
	  </form>
      
<script>

function searchData()
{

	document.getElementById("search").action="<?php echo site_url() ?>/Welcome/search/";
}

</script>
      <!-- Cart Part -->
      <ul class="nav navbar-right cart-pop" id="cart1">
        <li class="dropdown"> 
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			<span class="itm-cont"><?php echo count($cart);?></span> 
			<i class="flaticon-shopping-bag"></i> 
			<strong>My Cart</strong> <br>
		 <?php $i=0; 
	
		
		?>
          <span><?php echo count($cart);?> item(s) - &#8377 <?php echo $i ?></span></a>
          <ul class="dropdown-menu">
		  <div class="auto">
            <?php foreach($cart as $row){ 
			$this->db->where('product_id',$row->product_id);
			$row2=$this->db->get('productimage')->row();
			 ?>
            <li>
              <div class="media-left">
			   <a href="#." class="thumb">
			  		 <img src="<?php echo base_url()?>admin/images/<?php echo $row2->image ?>" class="img-responsive" alt="" > 
			   		</a> 
			   </div>
              <div class="media-body"> <a href="#." class="tittle"> <?php echo substr($row->product_name,0,25) ?>  </a> 
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
       <!-- <div class="cate-lst" > <a  data-toggle="collapse" class="cate-style" href="#cater"><i class="fa fa-list-ul"></i> Our Categories </a>
          <div class="cate-bar-in">
            <div id="cater" class="collapse">
              <ul>
                  <li><a href="#."> Home Audio & Theater</a></li>
                  <li><a href="#."> TV & Video</a></li>
                  <li><a href="#."> Camera, Photo & Video</a></li>
                  <li class="sub-menu"><a href="#."> Cell Phones & Accessories</a>
                    <ul>
                      <li><a href="#."> TV & Video</a></li>
                      <li><a href="#."> Camera, Photo & Video</a></li>
                      <li><a href="#."> Cell Phones & Accessories</a>
                    </ul>
                  </li>
                  <li><a href="#."> Headphones</a></li>
                  <li><a href="#."> Video Games</a></li>
                  <li class="sub-menu"><a href="#."> Bluetooth & Wireless Speakers</a>
                    <ul>
                      <li><a href="#."> TV & Video</a></li>
                      <li><a href="#."> Camera, Photo & Video</a></li>
                      <li><a href="#."> Cell Phones & Accessories</a>
                    </ul>
                  </li>
                  <li class="sub-menu"><a href="#."> Gaming Console</a>
                    <ul>
                      <li><a href="#."> TV & Video</a></li>
                      <li><a href="#."> Camera, Photo & Video</a></li>
                      <li><a href="#."> Cell Phones & Accessories</a>
                    </ul>
                  </li>
                  <li><a href="#."> Computers & Tablets</a></li>
                  <li><a href="#."> Monitors</a></li>
                  <li><a href="#."> Home Appliances</a></li>
                  <li><a href="#."> Office Supplies</a></li>
                </ul>
            </div>
          </div>
        </div>-->
 
        <!-- Navbar Header -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="nav-open-btn"  >
          <ul class="nav" >

            <li class="active" >
             <a href="<?php echo site_url() ?>" data-toggle="dropdown">Home </a>
            </li>

			
            <!-- Mega Menu Nav -->
			<?php  foreach($category as $categoryData){?>
            <li class="dropdown megamenu" id="m"> 
		<a href="index.html" class="dropdown-toggle" data-toggle="dropdown">
		<?php echo $categoryData->categery_name?> </a>
              <div class="dropdown-menu animated-2s fadeInUpHalf" >
                <div class="mega-inside"  >
                  <div class="row"  >
				   <?php 
				   foreach($subcategory as $subcategoryData)
				   {
				  if($categoryData->categery_id==$subcategoryData->categery_id)
				  {
				  ?>
                    <div class="col-sm-3" >
        			  <a href="<?php echo site_url() ?>/welcome/listp/<?php echo $subcategoryData->s_id?>">
                      <h6>
		
                       <?php echo $subcategoryData->s_name?></h6>
                      </a>
                      <ul >
					   <?php foreach($drug as $drugData){
					  
					  			if($drugData->s_id==$subcategoryData->s_id){
					  ?>
                        <li   ><a href="<?php echo site_url()?>/Welcome/reviewdata/<?php echo $drugData->product_id?>"> <?php echo $drugData->product_name?>  </a></li>
                      
					  <?php }}?>
					  
					  </ul>
                    </div>
                    
                    <?php }}?>
                    <div class="col-sm-4">  
				</div>
                </div>
              </div>
            </li>
            <?php }?>
            <!--
            <li > <a href="<?php echo site_url() ?>/Welcome/priscription/">Prisription upload</a></li>
            
            -->
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
		<a href="<?php echo site_url() ?>/myaccount/">
		<span class="call-mun"><i class="fa fa-user"></i><strong>My Account</strong></span></a> 
	</div>
	<?php } ?>
   </div>
    </nav>
  </header>
  


<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
    

 
    
 <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>css/cartstyle.css">
<link rel="stylesheet" href="<?php echo base_url() ?>css/star.css">

 <link href="<?php echo base_url() ?>css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo base_url() ?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet" type="text/css" />
    <!--[if IE 9]>
        <link href="css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>img/newlogo.png" />
    
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	<title>Mango - Fullwidth</title>
<style>
#myscrollbar::-webkit-scrollbar {
  width: 1em;
}
 
#myscrollbar::-webkit-scrollbar-track {
  box-shadow: inset 0 0 6px rgb(205, 0, 0, 0.3);
  border-radius:50px;
}
 
#myscrollbar::-webkit-scrollbar-thumb {
  background-color: #cd0000;
  outline: 1px solid slategrey;
  border-radius:50px;
 
}
</style>
<style>


div#google_translate_element div.goog-te-gadget-simple{font-size:13px;width:100px;padding-left:0px;border:none}
div#google_translate_element div.goog-te-gadget-simple{background-color:#fff;padding-left:0px;}
div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span{color:#000;border: none !important;}


.goog-te-gadget img 
{
    display: none;
}

goog-te-combo, .goog-te-banner *, .goog-te-ftab *, .goog-te-menu *, .goog-te-menu2 *, .goog-te-balloon * {
    font-family: arial;
    font-size: 10pt;
	display:none;
	background:none;
}
.goog-te-banner-frame.skiptranslate {
    display: none !important;
    } 
body {
    top: 0px !important; 
    }
	</style>
</head>
<body class="style-10">

    <!-- LOADER 
    <div id="loader-wrapper">
        <div class="bubbles">
            <div class="title">loading</div>
            <span></span>
            <span id="bubble2"></span>
            <span id="bubble3"></span>
        </div>
    </div>

	-->	

    <div id="content-block">

        <div class="content-center fixed-header-margin">
            <!-- HEADER -->
            <div class="header-wrapper style-10">
                <header class="type-1">

                    <div class="header-product">
                        <div class="logo-wrapper">
                            <a href="<?php echo site_url() ?>" id="logo"><img alt="" src="<?php echo base_url() ?>img/newlogo.png"></a>
                        </div>
                        <div class="product-header-message">
                             Matching style and class with luxury and comfort.
                                                      
                        </div>
                        <div class="product-header-content">
                            <div class="line-entry">
                                <div class="menu-button responsive-menu-toggle-class"><i class="fa fa-reorder"></i></div>
                                <div class="header-top-entry increase-icon-responsive open-search-popup">
                                    <div class="title"><i class="fa fa-search"></i> <span>Search</span></div>
                                    
                                </div>
                                <!--
                                <div class="header-top-entry increase-icon-responsive">
                                    <div class="title"><i class="fa fa-user"></i> <span>My Account</span></div>
                                </div>
                                -->
                                <?php
								if($this->session->userdata('c_useremail')!="")
								{
								?>
                                <div class="header-top-entry">
                                    <div class="title"><i class="fa fa-user"></i> 
                                    <?php
								echo "Welcome ".$this->session->userdata('c_username');
									?>
                                     
                                     
                                     
                                     <i class="fa fa-caret-down"></i></div>
                                    <div class="list">
    <a class="list-entry" href="<?php echo site_url() ?>/homecontroller/user">My Profile</a>
    <a class="list-entry" href="<?php echo site_url() ?>/cartcontroller">My Cart</a>
    <a class="list-entry" href="<?php echo site_url() ?>/usercontroller/myorder">My Order</a>
    <a class="list-entry" href="<?php echo site_url() ?>/wishlistcontroller">My Wishlist</a>
    <a class="list-entry" href="<?php echo site_url() ?>/logincontroller/logout">Logout</a>
                                       
                                    </div>
                                </div>
                               	<?php
								}
								else
								{
								?> 
                                <div class="header-top-entry">
                                    <div class="title">User Register <i class="fa fa-caret-down"></i></div><div class="list">
                                        <a class="list-entry" href="<?php echo site_url() ?>/logincontroller">Sign In</a>
                                        <a class="list-entry" href="<?php echo site_url() ?>/logincontroller/signup">Sign Up</a>
                                    </div>
                                </div>
                               <?php
								}
							   ?> 
                                                             
                                <div class="header-top-entry">
                                
                                		    <div id="google_translate_element">
<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,gu,hi,ml,mr,pa,ta,te', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');

}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>                
</div>

                                <!--
                                    <div class="title"><img alt="" src="img/flag-lang-1.png">English<i class="fa fa-caret-down"></i></div>
                                    <div class="list">
                                        <a class="list-entry" href="#"><img alt="" src="img/flag-lang-2.png">French</a>
                                        <a class="list-entry" href="#"><img alt="" src="img/flag-lang-3.png">Spanish</a>
                                    </div>
                                -->
                                </div>
   
                            </div>
                            <div class="middle-line"></div>
                            <div class="line-entry">
                            <!--    <a href="#" class="header-functionality-entry"><i class="fa fa-copy"></i><span>Compare</span></a>
                            -->
                            
                                <a href="<?php echo site_url() ?>/wishlistcontroller" class="header-functionality-entry"><i class="fa fa-heart-o"></i><span>My Wishlist</span></a>
                                <a href="#" class="header-functionality-entry open-cart-popup"><i class="fa fa-shopping-cart"></i><span>My Cart</span>
                                 </a>
                            </div>
                        </div>
                    </div>

                    <div class="close-header-layer"></div>
                    <div class="navigation">
                        <div class="navigation-header responsive-menu-toggle-class">
                            <div class="title">Navigation</div>
                            <div class="close-menu"></div>
                        </div>
                        <div class="nav-overflow">
                            <nav>
                                <ul>
                                    <li class="full-width">
                                        <a href="<?php echo site_url() ?>" class="active">Home</a>
                                        
                                    </li>
									<?php
									$this->db->where('cat_status','Active');
									$menu=$this->db->get('cetegory')->result();
									foreach($menu as $menudata)
									{
									?>
                                    <li class="column-1">
                                        <a ><?php echo $menudata->cat_name ?> wear's</a><i class="fa fa-chevron-down"></i>
                                        <div class="submenu">
                                            <div class="full-width-menu-items-left">
                                                <?php
												if($menudata->cat_name=="Mens")
												{
												?>
                                                <img class="submenu-background" src="<?php echo base_url() ?>img/product-minimal-6.jpg" alt="" />
                                                <?php
												}
												else if($menudata->cat_name=="Womens")
												{
												?>
                                                              <img class="submenu-background" src="<?php echo base_url() ?>img/product-minimal-7.jpg" alt="" />
												<?php
												}
												else if($menudata->cat_name=="Kids")
												{
												?>
                                                <img class="submenu-background" src="<?php echo base_url() ?>img/product-toys-4.jpg" alt="" />              
                                                <?php
												}
												?>
                                                
                                                
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="submenu-list-title"><a ><?php echo $menudata->cat_name ?> Wear</a><span class="toggle-list-button"></span></div>
                                                        <ul class="list-type-1 toggle-list-container">
                                                        <?php
												$this->db->where('subcatstatus','Active');
												$this->db->where('cat_id',$menudata->cat_id);
												$submenu=$this->db->get('subcategory')->result();
												foreach($submenu as $submenudata)
												{
														?>
                                                        
                                                            <li><a href="<?php echo site_url() ?>/menucontroller/getmenudata/<?php echo $submenudata->subcat_id ?>"><i class="fa fa-angle-right"></i><?php echo $submenudata->subcat_name ?></a></li>
                                                        
                                                        
                                                 <?php
												}
												 ?>       
                                                        
                                                        
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submenu-links-line">
                                                <div class="submenu-links-line-container">
                                                    <div class="cell-view">
                                                        <div class="line-links">
                                                        <b>Quicklinks:</b>  
                            <a >Blazers</a>, 
                            <a >Jackets</a>, 
                            <a >Shoes</a>, 
                            <a >Bags</a>
                            							</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
									<?php
									}
									?>
                                </ul>

                                <ul>
<li  style="text-align:top">
<a href="#">Made In India</a></li>
<li class="fixed-header-visible">
                                        <a class="fixed-header-square-button open-cart-popup"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="fixed-header-square-button open-search-popup"><i class="fa fa-search"></i></a>
                                    </li>
                                </ul>
                                <div class="clear"></div>

                                <a class="fixed-header-visible additional-header-logo"><img src="img/newlogo.png" alt=""/></a>
                            </nav>
                            <div class="navigation-footer responsive-menu-toggle-class">
                                <div class="socials-box">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <div class="clear"></div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </header>
                <div class="clear"></div>
            </div>
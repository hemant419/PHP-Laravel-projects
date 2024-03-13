<style>
.glow {
  font-size: 80px;
  color: #000;
  text-align: center;
  -webkit-animation: glow 0.5s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #f17e0e, 0 0 40px #f17e0e, 0 0 50px #f17e0e, 0 0 60px #f17e0e, 0 0 70px #f17e0e;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #D4AF37, 0 0 40px #D4AF37, 0 0 50px #D4AF37, 0 0 60px #D4AF37, 0 0 70px #D4AF37, 0 0 80px #D4AF37;
  }
}
</style>    
                <div class="parallax-slide fullwidth-block small-slide" style="margin-bottom: 30px; margin-top: -25px;">
                    <div class="swiper-container" data-autoplay="5000" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide no-shadow active" data-val="0" style="background-image: url(<?php echo base_url() ?>img/s3.jpg);"> 
                                <div class="parallax-vertical-align">
                                    <div class="parallax-article left-align">
                                    <h2 class="subtitle"></h2>
                                        <h1 class="title"></h1>
                                        <div class="description"></div>
                                        <br /><br /><br /><br /><br />
                                        <div class="info">
                                            <a href="<?php echo site_url() ?>/menucontroller/getmenudata/49" class="button style-10">shop now</a>
                                            <a href="<?php echo site_url() ?>/menucontroller/getmenudata/49" class="button style-10">features</a>
                                        </div>
                                    
                                    
                                    </div>
                                </div>
                            </div>
                            
                            <div class="swiper-slide no-shadow" data-val="1" style="background-image: url(<?php echo base_url() ?>img/s2.jpg);"> 
                                <div class="parallax-vertical-align">
                                    <div class="parallax-article left-align">
                                    <h2 class="subtitle"></h2>
                                        <h1 class="title"></h1>
                                        <div class="description"></div>
                                        <br /><br /><br /><br /><br />
                                        <div class="info">
                                            <a href="<?php echo site_url() ?>/menucontroller/getmenudata/49" class="button style-10">shop now</a>
                                            <a href="<?php echo site_url() ?>/menucontroller/getmenudata/49" class="button style-10">features</a>
                                        </div>
                                    
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="swiper-slide no-shadow" data-val="1" style="background-image: url(<?php echo base_url() ?>img/s1.jpg);"> 
                                <div class="parallax-vertical-align">
                                    <div class="parallax-article left-align">
                                        <h2 class="subtitle">Check out this weekend</h2>
                                        <h1 class="title">Big sale</h1>
                                        <div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                                        <div class="info">
                                            <a href="<?php echo site_url() ?>/menucontroller/getmenudata/49" class="button style-8">shop now</a>
                                            <a href="<?php echo site_url() ?>/menucontroller/getmenudata/49" class="button style-8">features</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="pagination"></div>
                    </div>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-4 information-entry">
                            <div class="special-item-entry">
                                <img src="<?php echo base_url() ?>img/girl.png" alt="" />
                                <h3 class="title" style="color:#903">
                                <span class="glow">Women's</span>
                                <p style="color:#000">Check Out Latest Collection</p></h3>
                                <a class="button btn style-7" href="<?php echo site_url() ?>/menucontroller/getmenudata/49" >shop now</a>
                            </div>
                        </div>
                        <div class="col-sm-4 information-entry">
                            <div class="special-item-entry">
                                <img src="<?php echo base_url() ?>img/men.jpeg" alt="" />
                                
                                <h3 class="title" style="color:#444">
                                 <span class="glow">Men's</span>
                                 <p style="color:#000">Check Out Latest Collection</p>
                                 </h3>
                                <a class="button btn style-7" href="<?php echo site_url() ?>/menucontroller/getmenudata/47" >shop now</a>
                            </div>
                        </div>
                        <div class="col-sm-4 information-entry">
                            <div class="special-item-entry">
                                <img src="<?php echo base_url() ?>img/child.jpg" alt="" />
                                 <h3 class="title" style="color:#F90">
                                
                                 <span class="glow">Kid's</span>
                                 <p style="color:#000">Check Out Latest Collection</p>
                                 </h3>
                                
                                <a class="button btn style-7" href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="information-blocks">
                    <div class="tabs-container">
                        <div class="swiper-tabs tabs-switch">
                            <div class="title">Products</div>
                            <div class="list">
                                <a class="block-title tab-switcher active">New Arrivals</a>
                                <a class="block-title tab-switcher">Mega Saving</a>
                               <div class="clear"></div>
                            </div>
                        </div>
                        <div>
                            <div class="tabs-entry">
                                <div class="products-swiper">
                                    <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="2" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="5" data-add-slides="5">
                                        <div class="swiper-wrapper">
                                          <?php
							foreach($menudata as $menu)
							{
							?>
                                         
                                            <div class="swiper-slide"> 
                                                <div class="paddings-container">
                                                    <div class="product-slide-entry shift-image">
                                        <div class="product-image">
                                            <img src="<?php echo base_url() ?>admin/product/<?php  echo $menu->prd_img1 ?>" alt="" />
                                            <img src="<?php echo base_url() ?>admin/product/<?php  echo $menu->prd_img2 ?>" alt="" />
                                             
                                            <?php
											if($menu->prd_discount!=0 or $menu->prd_discount!="")
											{
											?> 
                                             <div class="product-image-label type-1"><span>
                                             <?php  echo $menu->prd_discount ?>% off
                                             </span></div>
                                            <?php
											}
											?>
                                            
                                            
                                            
                                            <div class="bottom-line left-attached">
                            
                            <?php
							if($this->session->userdata('c_userid')=="")
							{
							?>
					    <a href="<?php echo site_url() ?>/usercontroller/unknownuser" class="bottom-line-a square" ><i class="fa fa-shopping-cart" ></i></a>
    					<a href="<?php echo site_url() ?>/usercontroller/unknownuser" class="bottom-line-a square" ><i class="fa fa-heart" ></i></a>
                             <?php
							}
							else
							{
							 ?>  
                            <?php
							$this->db->where("prd_id",$menu->prd_id);
							$this->db->where("user_id",$this->session->userdata('c_userid'));
							$wish=$this->db->get('addtocart')->result();	
							if(count($wish)>0)
							{
							?>
                            <p style="display:none" id="noncolorcart2<?php echo $menu->prd_id ?>">
                            <a  class="bottom-line-a square" onclick="addcart(<?php echo $menu->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-shopping-cart"  ></i></a></p>   
                          <!-- ***************************   -->
                          <p id="colorcart<?php echo $menu->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#f5c10c" onclick="removecart(<?php echo $menu->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-shopping-cart"  ></i></a>
                           </p>
                            <?php
							}
							else
							{
							?>
							   <p style="display:none" id="colorcart2<?php echo $menu->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#f5c10c" onclick="removecart(<?php echo $menu->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-shopping-cart"  ></i>
                           </a>
                          </p>
                          <!-- ***************************   -->
                          <p id="noncolorcart<?php echo $menu->prd_id ?>">
                            <a  class="bottom-line-a square" onclick="addcart(<?php echo $menu->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-shopping-cart" ></i></a>
                            </p>
							<?php
							}
							?>
							
							
							
							<?php
							$this->db->where("prd_id",$menu->prd_id);
							$this->db->where("user_id",$this->session->userdata('c_userid'));
							$wish=$this->db->get('wishlist')->result();	
							if(count($wish)>0)
							{
							?>
                          <!-- Ajax -->
                          <p style="display:none" id="noncolorwishlist2<?php echo $menu->prd_id ?>">
                          
                            <a  class="bottom-line-a square" onclick="addwishlist(<?php echo $menu->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-heart" ></i></a>
                       </p>   
                          <!--    -->
                          <p id="colorwishlist<?php echo $menu->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#ca1515" onclick="removewishlist(<?php echo $menu->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-heart"  ></i></a>
                           </p>
                            <?php
							}else
							{
							?>
                          <!-- Ajax -->
                          <p style="display:none" id="colorwishlist2<?php echo $menu->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#ca1515" onclick="removewishlist(<?php echo $menu->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-heart"  ></i>
                           </a>
                          </p>
                          <!--    -->
                          <p id="noncolorwishlist<?php echo $menu->prd_id ?>">
                            <a  class="bottom-line-a square" onclick="addwishlist(<?php echo $menu->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-heart" ></i></a>
                            </p>
							<?php
							}
							}
							?>
                            
                            
                            
                            
                            
<a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>

<a class="bottom-line-a square open-product" 
 onclick="popupf(<?php echo $menu->prd_id ?>)" ><i class="fa fa-expand"></i></a>
                        
  <!--      <form method="post">
         <input type='hidden'  name='bookId' id='bookId' value='' style='border: 0px none; ' />
			
        </form>                                          
      
      -->                                    
                                          
                                            </div>
                                        </div>
                                        <a class="tag" href="#">Men clothing</a>
                                        <a class="title" href="<?php echo site_url() ?>/menucontroller/productdetail/<?php echo $menu->prd_id ?>">
                                        <?php 
										echo $menu->prd_name;
										
										?>
                                        </a>
                                        <div class="rating-box">
                                            <div class="star"><i class="fa fa-star"></i></div>
                                            <div class="star"><i class="fa fa-star"></i></div>
                                            <div class="star"><i class="fa fa-star"></i></div>
                                            <div class="star"><i class="fa fa-star"></i></div>
                                            <div class="star"><i class="fa fa-star"></i></div>
                                            <div class="reviews-number">25 reviews</div>
                                        </div>
                                        <div class="article-container style-1">
                                            <p><?php echo $menu->prd_feature ?>.</p>
                                        </div>
                                        <div class="price">
                                            <div class="prev">&#8377; <?php echo $menu->prd_price ?></div>
                                                <div class="current">&#8377; 
                                                <?php 
                                                $dic=$menu->prd_price/$menu->prd_discount; 
                                                $actualprice=$menu->prd_price-$dic;
                                                echo ceil($actualprice);
                                                ?>
                                            
                                            
                                            </div>
                                        </div>
                                        <div class="list-buttons">
                                            <a class="button style-10">Add to cart</a>
                                            <a class="button style-11"><i class="fa fa-heart"></i> Add to Wishlist</a>
                                        </div>
                                    </div>
                                                </div>
                                            </div>
                              <?php
							}
							  ?>           
                                         
                                         </div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                            </div>
                        
                        
                            <div class="tabs-entry">
                                <div class="products-swiper">
                                    <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="2" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="5" data-add-slides="5">
                                        <div class="swiper-wrapper">
                                             <?php
							foreach($megasaving as $mega)
							{
							?>
                                         
                                            <div class="swiper-slide"> 
                                                <div class="paddings-container">
                                                    <div class="product-slide-entry shift-image">
                                        <div class="product-image">
                                            <img src="<?php echo base_url() ?>admin/product/<?php  echo $mega->prd_img1 ?>" alt="" />
                                            <img src="<?php echo base_url() ?>admin/product/<?php  echo $mega->prd_img2 ?>" alt="" />
                                             
                                            <?php
											if($mega->prd_discount!=0 or $mega->prd_discount!="")
											{
											?> 
                                             <div class="product-image-label type-1"><span>
                                             <?php  echo $mega->prd_discount ?>% off
                                             </span></div>
                                            <?php
											}
											?>
                                            
                                            
                                            
                                            <div class="bottom-line left-attached">
                            
                            <?php
							if($this->session->userdata('c_userid')=="")
							{
							?>
					    <a href="<?php echo site_url() ?>/usercontroller/unknownuser" class="bottom-line-a square" ><i class="fa fa-shopping-cart" ></i></a>
    					<a href="<?php echo site_url() ?>/usercontroller/unknownuser" class="bottom-line-a square" ><i class="fa fa-heart" ></i></a>
                             <?php
							}
							else
							{
							 ?>  
                            <?php
							$this->db->where("prd_id",$mega->prd_id);
							$this->db->where("user_id",$this->session->userdata('c_userid'));
							$wish=$this->db->get('addtocart')->result();	
							if(count($wish)>0)
							{
							?>
                            <p style="display:none" id="noncolorcart2<?php echo $mega->prd_id ?>">
                            <a  class="bottom-line-a square" onclick="addcart(<?php echo $mega->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-shopping-cart"  ></i></a></p>   
                          <!-- ***************************   -->
                          <p id="colorcart<?php echo $mega->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#f5c10c" onclick="removecart(<?php echo $mega->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-shopping-cart"  ></i></a>
                           </p>
                            <?php
							}
							else
							{
							?>
							   <p style="display:none" id="colorcart2<?php echo $mega->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#f5c10c" onclick="removecart(<?php echo $mega->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-shopping-cart"  ></i>
                           </a>
                          </p>
                          <!-- ***************************   -->
                          <p id="noncolorcart<?php echo $mega->prd_id ?>">
                            <a  class="bottom-line-a square" onclick="addcart(<?php echo $mega->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-shopping-cart" ></i></a>
                            </p>
							<?php
							}
							?>
							
							
							
							<?php
							$this->db->where("prd_id",$mega->prd_id);
							$this->db->where("user_id",$this->session->userdata('c_userid'));
							$wish=$this->db->get('wishlist')->result();	
							if(count($wish)>0)
							{
							?>
                          <!-- Ajax -->
                          <p style="display:none" id="noncolorwishlist2<?php echo $mega->prd_id ?>">
                          
                            <a  class="bottom-line-a square" onclick="addwishlist(<?php echo $mega->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-heart" ></i></a>
                       </p>   
                          <!--    -->
                          <p id="colorwishlist<?php echo $mega->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#ca1515" onclick="removewishlist(<?php echo $mega->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-heart"  ></i></a>
                           </p>
                            <?php
							}else
							{
							?>
                          <!-- Ajax -->
                          <p style="display:none" id="colorwishlist2<?php echo $mega->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#ca1515" onclick="removewishlist(<?php echo $mega->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-heart"  ></i>
                           </a>
                          </p>
                          <!--    -->
                          <p id="noncolorwishlist<?php echo $menu->prd_id ?>">
                            <a  class="bottom-line-a square" onclick="addwishlist(<?php echo $mega->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-heart" ></i></a>
                            </p>
							<?php
							}
							}
							?>
                            
                            
                            
                            
                            
                            
                            
                                                <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>
                                                <a class="bottom-line-a square open-product" onClick="quickview(<?php $this->session->set_userdata('quikviewid'.$mega->prd_id,$mega->prd_id) ?>)"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                        <a class="tag" href="#">Men clothing</a>
                                        <a class="title" href="<?php echo site_url() ?>/menucontroller/productdetail/<?php echo $mega->prd_id ?>">
                                        <?php 
										echo $mega->prd_name;
										
										?>
                                        </a>
                                        <div class="rating-box">
                                            <div class="star"><i class="fa fa-star"></i></div>
                                            <div class="star"><i class="fa fa-star"></i></div>
                                            <div class="star"><i class="fa fa-star"></i></div>
                                            <div class="star"><i class="fa fa-star"></i></div>
                                            <div class="star"><i class="fa fa-star"></i></div>
                                            <div class="reviews-number">25 reviews</div>
                                        </div>
                                        <div class="article-container style-1">
                                            <p><?php echo $mega->prd_feature ?>.</p>
                                        </div>
                                        <div class="price">
                                            <div class="prev">&#8377; <?php echo $mega->prd_price ?></div>
                                                <div class="current">&#8377; 
                                                <?php 
                                                $dic=$mega->prd_price/$mega->prd_discount; 
                                                $actualprice=$mega->prd_price-$dic;
                                                echo ceil($actualprice);
                                                ?>
                                            
                                            
                                            </div>
                                        </div>
                                        <div class="list-buttons">
                                            <a class="button style-10">Add to cart</a>
                                            <a class="button style-11"><i class="fa fa-heart"></i> Add to Wishlist</a>
                                        </div>
                                    </div>
                                                </div>
                                            </div>
                              <?php
							}
							  ?>        
                                          
                                         
                                         
                                         
                                          </div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>


    <div class="list">
    <a class="block-title tab-switcher active">EXPLORE TOP BRANDS</a>
    
    </div>
    <br />

<?php
$cnt=0;
foreach($topbrands as $brand)
{
	
	$this->db->where('brand_id',$brand->brand_id);
	$pimg=$this->db->get('product')->row();
 if($cnt==4)
 {
?>
<div class="clear">
 </div>                       
<br />     
<?php	 
 }
	?>
 
 <div class="col-sm-6 col-md-3 information-entry">
                            <div class="product-column-entry">
                                <div class="image"><img alt="" src="<?php echo base_url() ?>/Admin/product/<?php echo $pimg->prd_img1 ?>"></div>
                                <h3 class="title">Top Brand </h3>
                                <div class="description">
                                    <ul class="list-type-1">
                                        <li><img alt="" src="<?php echo base_url() ?>Admin/Brand/<?php echo $brand->brand_img ?>" style="width:100px;height:40px"></li>
                                        <li><h3>20% Off</h3></li>
                 
                                    </ul>
                                </div>
                                <div class="hot-mark">Sale</div>
                            </div>
                        </div>
                      
 <?php
$cnt=$cnt+1;
}
 ?>                       
 
 
 <div class="clear">
 </div>                       
                        
                   <br />
                   <br />     
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        


                
                
                    

                            

               
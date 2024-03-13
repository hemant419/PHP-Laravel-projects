<?php
$cnt=count($reviwed);
$cnt2=count($faq);
?>

 <div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Shop</a>
                    <a href="#">Product</a>
                    <a href="#">Detail</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-5 col-md-4 col-lg-5 information-entry">
                            <div class="product-preview-box">
                                <div class="swiper-container product-preview-swiper" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product-zoom-image">
                                             <img src="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img1 ?>" alt="" data-zoom="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img1 ?>" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-zoom-image">
                                             <img src="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img2 ?>" alt="" data-zoom="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img2 ?>" />
                        
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-zoom-image">
                                              <img src="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img3 ?>" alt="" data-zoom="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img3 ?>" />
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-zoom-image">
                                               <img src="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img2 ?>" alt="" data-zoom="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img2 ?>" />                     </div>
                                        </div>
                                    </div>
                                    <div class="pagination"></div>
                                    <div class="product-zoom-container">
                                        <div class="move-box">
                                            <img class="default-image" src="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img1 ?>" alt="" />
                                            <img class="zoomed-image" src="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img1 ?>" alt="" />
                                        </div>
                                        <div class="zoom-area"></div>
                                    </div>
                                </div>
                                <div class="swiper-hidden-edges">
                                    <div class="swiper-container product-thumbnails-swiper" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="3" data-int-slides="3" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide selected">
                                                <div class="paddings-container">
                                                    <img src="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img1 ?>" alt="" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="paddings-container">
                                                    <img src="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img2 ?>" alt="" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="paddings-container">
                                                    <img src="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img3 ?>" alt="" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="paddings-container">
                                                    <img src="<?php echo base_url() ?>admin/product/<?php  echo $detail->prd_img4 ?>" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-4 information-entry">
                            <div class="product-detail-box">
                                <h1 class="product-title"><?php echo $detail->prd_name ?></h1>
                                <h3 class="product-subtitle">Loremous Clothing</h3>
                                <?php
							$getval=count($reviwed);
							$rateplus=0;
							$calce=0;
							foreach($reviwed as $countrate)
							{
							$rateplus+=$countrate->feed_rating;	
							}
							if($getval!=0)
							{
							$calce=$rateplus/$getval;	
							}
								?>
                                
                                <div class="rating-box">
								<?php
                                if(round($calce)==0)
                                {
                                ?>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                <?php
								}
								else if(round($calce)==1)
                                {
								?>  
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                <?php
								}
								else if(round($calce)==2)
                                {
								?>  
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                <?php
								}
								else if(round($calce)==3)
                                {
								?>  
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                <?php
								}
								else if(round($calce)==4)
                                {
								?>  
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                <?php
								}
								else 
								{
								?>  
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                <?php
								}								
								?>  
                                    <div class="rating-number"><?php echo $cnt; ?> Reviews</div>
                                </div>
                                <div class="product-description detail-info-entry"><?php echo $detail->prd_description ?></div>
                                <div class="price detail-info-entry">
                                    <div class="prev"> &#8377; <?php echo $detail->prd_price; ?></div>
                                    <div class="current">
                                    &#8377; 
                                    <?php 
                                    $dic=$detail->prd_price/$detail->prd_discount; 
                                    $actualprice=$detail->prd_price-$dic;
                                    echo ceil($actualprice);
                                    ?>
                                    </div>
                                </div>
                             <b id="sizeerror" style="color:#ca1515"></b>
                                <div class="size-selector detail-info-entry">
                                    <div class="detail-info-entry-title">Size</div>
                                    <div class="entry" onclick="getsize('xs')">xs</div>
                                    <div class="entry" onclick="getsize('s')">s</div>
                                    <div class="entry" onclick="getsize('m')">m</div>
                                    <div class="entry" onclick="getsize('l')">l</div>
                                    <div class="entry" onclick="getsize('xl')">xl</div>
                                    <div class="spacer"></div>
                                </div>
                        <!--
                                <div class="color-selector detail-info-entry">
                                    <div class="detail-info-entry-title">Color</div>
                                    <div class="entry active" style="background-color: #d23118;">&nbsp;</div>
                                    <div class="entry" style="background-color: #2a84c9;">&nbsp;</div>
                                    <div class="entry" style="background-color: #000;">&nbsp;</div>
                                    <div class="entry" style="background-color: #d1d1d1;">&nbsp;</div>
                                    <div class="spacer"></div>
                                </div>
                         -->
                                <div class="quantity-selector detail-info-entry">
                                    <div class="detail-info-entry-title">Quantity</div>
                                    <input class="entry number" id="qty"  max="<?php echo $detail->prd_stock; ?>" type="number" style="width:50px" min="1" value="1"  onKeyDown="return false"/>
                                    
                                </div>
                                <div class="detail-info-entry">
                    <a class="button style-10" class="bubbly-button" 
                    onclick="addtocart(<?php echo $this->uri->segment(3) ?>,<?php echo $this->session->userdata('c_userid'); ?>)">Add to cart</a>
                    
					<?php
					$this->db->where("prd_id",$this->uri->segment(3));
                    $this->db->where("user_id",$this->session->userdata('c_userid'));
                    $wish=$this->db->get('wishlist')->result();	
						if($this->session->userdata('c_userid')=="")
						{
						?>
                        <a class="button style-11"  href="<?php echo site_url() ?>/logincontroller"><i class="fa fa-heart"></i> Add to Wishlist</a>
                        <?php	
						}
						else if($this->session->userdata('c_userid')!="")
						{
							if(count($wish)>0)
							{
							?>
								<a style="color:#F00;" id="addedwish" class="button style-11"   onclick="removewishlist(<?php echo $this->uri->segment(3) ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-heart"></i>Item Wishlisted</a> 
							<?php
							}
							else
							{
							?>
								<a class="button style-11" id="addwish" onclick="addwishlist(<?php echo $this->uri->segment(3) ?>,<?php echo $this->session->userdata('c_userid') ?>)"><i class="fa fa-heart"></i> Add to Wishlist</a>
							<?php
							}
						}
							?>
							<a class="button style-11" style="visibility:hidden" id="addwish2" onclick="addwishlist(<?php echo $this->uri->segment(3) ?>,<?php echo $this->session->userdata('c_userid') ?>)"><i class="fa fa-heart"></i> Add to Wishlist</a>			
							
                            <a style="color:#F00;visibility:hidden" id="addedwish2" 
                            class="button style-11" onclick="removewishlist(<?php echo $this->uri->segment(3) ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-heart"></i>Item Wishlisted</a> 
					
                
                
                
                
                                    <div class="clear"></div>
                                </div>
                                
                                <div class="share-box detail-info-entry">
                                    <div class="title">Share in social media</div>
                                    <div class="socials-box">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-youtube"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear visible-xs visible-sm"></div>
                        <div class="col-md-4 col-lg-3 information-entry product-sidebar">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="information-blocks production-logo">
                                        <div class="background">
                                            <div class="logo"><img src="<?php echo base_url() ?>Admin/Brand/<?php echo $detail->brand_img ?>" alt="" /></div>
                                            <a href="#">Review this product</a>
                                        </div>
                                    </div>
                                </div>
                              <!--
                              
                                <div class="col-md-12">
                                    <div class="information-blocks">
                                        <div class="information-entry products-list">
                                            <h3 class="block-title inline-product-column-title">Featured products</h3>
                                            <div class="inline-product-entry">
                                                <a href="#" class="image"><img alt="" src="img/product-image-inline-1.jpg"></a>
                                                <div class="content">
                                                    <div class="cell-view">
                                                        <a href="#" class="title">Pullover Batwing Sleeve Zigzag</a>
                                                        <div class="price">
                                                            <div class="prev">$199,99</div>
                                                            <div class="current">$119,99</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>

                                            <div class="inline-product-entry">
                                                <a href="#" class="image"><img alt="" src="img/product-image-inline-2.jpg"></a>
                                                <div class="content">
                                                    <div class="cell-view">
                                                        <a href="#" class="title">Pullover Batwing Sleeve Zigzag</a>
                                                        <div class="price">
                                                            <div class="prev">$199,99</div>
                                                            <div class="current">$119,99</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>

                                            <div class="inline-product-entry">
                                                <a href="#" class="image"><img alt="" src="img/product-image-inline-3.jpg"></a>
                                                <div class="content">
                                                    <div class="cell-view">
                                                        <a href="#" class="title">Pullover Batwing Sleeve Zigzag</a>
                                                        <div class="price">
                                                            <div class="prev">$199,99</div>
                                                            <div class="current">$119,99</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            	-->
                            </div>
                        </div>
                    </div>
                </div>
                               
                <div class="information-blocks">
                    <div class="tabs-container style-1">
                        <div class="swiper-tabs tabs-switch">
                            <div class="title">Product info</div>
                            <div class="list">
                                <a class="tab-switcher active">Product Description</a>
                                <a class="tab-switcher">Reviews (<?php echo $cnt ?>)</a>
                                <a class="tab-switcher">Questions and Answers (<?php echo $cnt2 ?>)</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div>
                            <div class="tabs-entry">
                                <div class="article-container style-1">
                                    <div class="row">
                                        <div class="col-md-6 information-entry">
                                            <h4>Description</h4>
                                            <p><?php echo $detail->prd_description; ?></p>
                                          <!--
                                            <ul>
                                                <li>Any Product types that You want - Simple, Configurable</li>
                                                <li>Downloadable/Digital Products, Virtual Products</li>
                                                <li>Inventory Management with Backordered items</li>
                                                <li>Customer Personal Products - upload text for embroidery, monogramming</li>
                                                <li>Create Store-specific attributes on the fly</li>
                                            </ul>
                                        `-->
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-entry">
                                <div class="article-container style-1">
                                    <div class="row">
                                        <div class="col-md-6 information-entry">
                                           
                            <h3 class="block-title main-heading">Drop Us A Line</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Your Name <span>*</span></label>
                                        <input class="simple-field" type="text" placeholder="Your name (required)" required value="" id="cname"/>
                                        <label>Rate<span>*</span></label>
                                        <div class="rating">
      <input type="radio" name="rating" id="rating-5" onclick="clickrate(this.value)"  value="5" >
      <label for="rating-5"></label>
      <input type="radio" name="rating" id="rating-4" onclick="clickrate(this.value)" value="4" >
      <label for="rating-4"></label>
      <input type="radio" name="rating" id="rating-3" onclick="clickrate(this.value)" value="3" >
      <label for="rating-3"></label>
      <input type="radio" name="rating" id="rating-2" onclick="clickrate(this.value)" value="2" >
      <label for="rating-2"></label>
      <input type="radio" name="rating" id="rating-1" onclick="clickrate(this.value)" value="1" >
      <label for="rating-1"></label>
      <input type="radio" name="rating" id="rating-0" onclick="clickrate(this.value)" value="1" >
      <label for="rating-0" style="display:none"></label>
      
      <div class="emoji-wrapper">
        <div class="emoji">
          <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
          <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
          <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
          <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
          <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
          <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
          <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
          <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
          <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
        </svg>
          <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
          <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
          <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
          <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
          <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
          <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
          <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
          <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
          <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
          <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
          <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
        </svg>
          <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
          <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
          <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
          <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
          <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
          <g fill="#fff">
            <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
            <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
          </g>
          <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
          <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
        </svg>
          <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
    <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
    <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
    <g fill="#fff">
      <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
      <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
    </g>
    <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
    <g fill="#fff">
      <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
      <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
    </g>
    <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
    <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
  </svg>
          <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
          <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
          <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
          <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
          <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
          <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
          <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
          <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
          <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
          <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
        </svg>
          <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <g fill="#ffd93b">
            <circle cx="256" cy="256" r="256"/>
            <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
          </g>
          <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
          <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
          <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
          <g fill="#38c0dc">
            <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
          </g>
          <g fill="#d23f77">
            <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
          </g>
          <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
          <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
          <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
        </svg>
        </div>
      </div>
    </div>
    									<br />
                                        <label>Your Email <span>*</span></label>
                                        <input class="simple-field" type="email" placeholder="Your email address (required)" required value="<?php echo $this->session->userdata('c_useremail') ?>" id="cemail" />
                                        <div class="clear"></div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label>Your Review <span>*</span></label>
                                        <textarea id="creview" class="simple-field" placeholder="Your message content (required)" required></textarea>
                                        <div class="button style-10">Send Message<input type="submit" value="" onclick="rate(<?php echo $detail->prd_id ?>)" /></div>
                                    </div>
                                </div>
                            
                                            
   <script>
var myrate ="0";
function clickrate(val)
{
myrate = val;
}
   
   function rate(pid)
   {
		var cname=$("#cname").val();
		var cemail2=$("#cemail").val();
		var creview2=$("#creview").val();
		//var cemail2=unescape(cemail);
		//var creview2=unescape(creview);
		
		$.ajax({
			url:"<?php echo site_url() ?>/menucontroller/rateproduct/"+cname+"/"+cemail2+"/"+myrate+"/"+creview2+"/"+pid,
			method:"post",
			success: function(rr)
			{
			if(rr=="1")
			{
				document.getElementById('id02').style.display='block'
				$('.simple-field').val("");
				$("input:radio").attr("checked", false);	
			}
			else
			{	
			$('.simple-field').val("");
			$("input:radio").attr("checked", false);	
			document.getElementById('id01').style.display='block'
			}
			}	
		});
	
   }
   </script> 
                                            
                                            
                                            
                                        </div>
                                        <div class="col-md-6 information-entry">
                                            
                                             <div class="blog-entry">
                                    <h3 class="additional-blog-title">Comments posted (<?php echo $cnt ?>)</h3>
                                <?php
								foreach($reviwed as $prdrev)
								{
								?>
                                
                                    <div class="comment">
                                        <a class="comment-image" href="#"><img src="<?php echo base_url() ?>img/user.png" alt="" /></a>
                                        <div class="comment-content">
                                            <div class="comment-title"><span><?php echo $prdrev->feedby_name ?></span>  Posted on <?php 
										
									$date = new DateTime($prdrev->feed_date);
echo $date->format('h:i a') .",";
										$feeddate=substr($prdrev->feed_date,5,2);
										$date_name=substr($prdrev->feed_date,8,2);	
									 	$month_name = date("F", mktime(0, 0, 0, $feeddate, 10)); 										$year_name=substr($prdrev->feed_date,0,4);
  									echo $date_name." ".$month_name." ".$year_name;
								?></div>
                                            <div class="comment-text"><?php echo $prdrev->feed_reviews ?></div>
                                    <div class="rating-box">
                                    <?php
								$rate=$prdrev->feed_rating;
								if($rate=="1")
								{
									?>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <?php
								}
								else if($rate=="2")
								{
									?>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <div class="star"><i class="fa fa-star-o"></i></div>
                                    <?php
								}
								else if($rate=="3")
								{
									?>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <div class="star" ><i class="fa fa-star-o"></i></div>
                                    <div class="star" ><i class="fa fa-star-o"></i></div>
                                    <?php
								}
								else if($rate=="4")
								{
									?>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <div class="star" ><i class="fa fa-star-o"></i></div>
                                    <?php
								}
								else
								{
									?>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <div class="star" ><i class="fa fa-star"></i></div>
                                    <?php
								}
									?>
                                    
                                    </div>
                                            
                                        </div>
                                    </div>
                                <?php
								}
								?>
                                
                                
                                </div>
                                
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-entry">
                                <div class="article-container style-1">
                                    <div class="row">
                                        <div class="col-md-6 information-entry">
                                            <h2><b>Questions and Answers</b></h2>
                                            <a class="button style-12" onclick="question()">post your question</a>
                                            
                                            
                                            <ul>
                                                <li> Be specific, ask questions only about the product.</li>
                                                <li>Ensure you have gone through the product        specifications before posting your question.
</li>
                                                <li>Reach out to our customer care for queries related to offers, orders, delivery etc.</li>
                                        
                                            </ul>
                                        </div>
                                   
                                        <div class="col-md-6 information-entry">
                                           
                                          <div class="blog-entry">
                                    <h3 class="additional-blog-title">Questions posted (<?php echo $cnt2 ?>)</h3>
                                <?php
								foreach($faq as $prdfaq)
								{
								?>
                                
                                    <div class="comment">
                                        <a class="comment-image" href="#"><img src="<?php echo base_url() ?>img/faq.png" alt="" /></a>
                                        <div class="comment-content">
                                            <div class="comment-title"><span><?php echo $prdfaq->faq_name ?></span>  Posted on <?php 
										
									$date = new DateTime($prdfaq->faq_date);
echo $date->format('h:i a') .",";
										$feeddate=substr($prdfaq->faq_date,5,2);
										$date_name=substr($prdfaq->faq_date,8,2);	
									 	$month_name = date("F", mktime(0, 0, 0, $feeddate, 10)); 										$year_name=substr($prdfaq->faq_date,0,4);
  									echo $date_name." ".$month_name." ".$year_name;
								?></div>
                                            <div class="comment-text"><b>Q : <?php echo $prdfaq->faq_que ?></b></div>
                                            <div class="comment-text">A :<?php echo $prdfaq->faq_ans ?></div>
                                    
                                            
                                        </div>
                                    </div>
                                <?php
								}
								?>
                                
                                
                                </div>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="information-blocks">
                    <div class="tabs-container">
                        <div class="swiper-tabs tabs-switch">
                            <div class="title">Products</div>
                            <div class="list">
                                <a class="block-title tab-switcher active">Related Products</a>
                           <!--     <a class="block-title tab-switcher">Popular Products</a>
                                <a class="block-title tab-switcher">New Arrivals</a>
                            --> 
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div>
                            <div class="tabs-entry">
                                <div class="products-swiper">
                                    <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="2" data-int-slides="2" data-sm-slides="3" data-md-slides="4" data-lg-slides="5" data-add-slides="5">
                                        <div class="swiper-wrapper">
                                       
                                       <?php
									   foreach($related as $relatedproduct)
									   {
									   ?>
                                       
                                       
                                            <div class="swiper-slide"> 
                                                <div class="paddings-container">
                                                    <div class="product-slide-entry shift-image">
                                                        <div class="product-image">
                                                            <img src="<?php echo base_url() ?>admin/product/<?php  echo $relatedproduct->prd_img1 ?>" alt="" />
                                                            <img src="<?php echo base_url() ?>admin/product/<?php  echo $relatedproduct->prd_img2 ?>" alt="" />
                                                        
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
							$this->db->where("prd_id",$relatedproduct->prd_id);
							$this->db->where("user_id",$this->session->userdata('c_userid'));
							$wish=$this->db->get('addtocart')->result();	
							if(count($wish)>0)
							{
							?>
                            <p style="display:none" id="noncolorcart2<?php echo $relatedproduct->prd_id ?>">
                            <a  class="bottom-line-a square" onclick="addcart(<?php echo $relatedproduct->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-shopping-cart"  ></i></a></p>   
                          <!-- ***************************   -->
                          <p id="colorcart<?php echo $relatedproduct->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#f5c10c" onclick="removecart(<?php echo $relatedproduct->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-shopping-cart"  ></i></a>
                           </p>
                            <?php
							}
							else
							{
							?>
							   <p style="display:none" id="colorcart2<?php echo $relatedproduct->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#f5c10c" onclick="removecart(<?php echo $relatedproduct->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-shopping-cart"  ></i>
                           </a>
                          </p>
                          <!-- ***************************   -->
                          <p id="noncolorcart<?php echo $relatedproduct->prd_id ?>">
                            <a  class="bottom-line-a square" onclick="addcart(<?php echo $relatedproduct->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-shopping-cart" ></i></a>
                            </p>
							<?php
							}
							
							?>
						      
                                                      
                                                      
                            	<?php
							$this->db->where("prd_id",$relatedproduct->prd_id);
							$this->db->where("user_id",$this->session->userdata('c_userid'));
							$wish=$this->db->get('wishlist')->result();	
							if(count($wish)>0)
							{
							?>
                          <!-- Ajax -->
                          <p style="display:none" id="noncolorwishlist2<?php echo $relatedproduct->prd_id ?>">
                          
                            <a  class="bottom-line-a square" onclick="addwishlist(<?php echo $relatedproduct->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-heart" ></i></a>
                       </p>   
                          <!--    -->
                          <p id="colorwishlist<?php echo $relatedproduct->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#ca1515" onclick="removewishlist(<?php echo $relatedproduct->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-heart"  ></i></a>
                           </p>
                            <?php
							}else
							{
							?>
                          <!-- Ajax -->
                          <p style="display:none" id="colorwishlist2<?php echo $relatedproduct->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#ca1515" onclick="removewishlist(<?php echo $relatedproduct->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-heart"  ></i>
                           </a>
                          </p>
                          <!--    -->
                          <p id="noncolorwishlist<?php echo $relatedproduct->prd_id ?>">
                            <a  class="bottom-line-a square" onclick="addwishlist(<?php echo $relatedproduct->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-heart" ></i></a>
                            </p>
							<?php
							}
							}
							?>
                                                                <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>
                                                                <a class="bottom-line-a square open-product" onclick="popupf(<?php echo $relatedproduct->prd_id ?>)"><i class="fa fa-expand"></i></a>
                                                            </div>
                                                            
                                                          </div>
                                                        <a class="tag" href="#">Men clothing</a>
                                                       <a class="title" href="<?php echo site_url() ?>/menucontroller/productdetail/<?php echo $relatedproduct->prd_id ?>">
                                        <?php 
										echo $relatedproduct->prd_name;
										
										?>
                                                      
                                                        <div class="rating-box">
                                                            <div class="star"><i class="fa fa-star"></i></div>
                                                            <div class="star"><i class="fa fa-star"></i></div>
                                                            <div class="star"><i class="fa fa-star"></i></div>
                                                            <div class="star"><i class="fa fa-star"></i></div>
                                                            <div class="star"><i class="fa fa-star"></i></div>
                                                        </div>
                                                        <div class="price">
                                                            <div class="prev">
                                                            &#8377; <?php echo $relatedproduct->prd_price ?>
                                                            </div>
                                                            <div class="current">
                                                            
                                                            &#8377; 
                                                <?php 
                                                $dic=$relatedproduct->prd_price/$relatedproduct->prd_discount; 
                                                $actualprice=$relatedproduct->prd_price-$dic;
                                                echo ceil($actualprice);
                                                ?>
  
                                                            </div>
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
                   
<link href="<?php echo base_url() ?>css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
<div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Product</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        
                        <div class="col-md-9 col-md-push-3 col-sm-8 col-sm-push-4">
                           
                            <div class="page-selector">
                                <!--
                                <div class="pages-box hidden-xs">
                                    <a href="#" class="square-button active">1</a>
                                    <a href="#" class="square-button">2</a>
                                    <a href="#" class="square-button">3</a>
                                    <div class="divider">...</div>
                                    <a href="#" class="square-button"><i class="fa fa-angle-right"></i></a>
                                </div>
                                -->
                                
                                <div class="shop-grid-controls">
                                    <div class="entry">
                                        <div class="inline-text">Sort by</div>
                                        <div class="simple-drop-down">
    <select onchange="sortrange(this.value,<?php echo $this->uri->segment(3) ?>)">
                                   <option value="Pricel">Price : Low To High</option>
                                   <option value="Priceh">Price : High To Low</option>
                                   <option value="discountl">Discount : Low To High</option>
                                   <option value="discounth">Discount : High To Low</option>
                                   <option value="ratel">Rate : Low To High</option>
                                   <option value="rateh">Rate : High To Low</option>
                                </select>
                                        </div>
                                   <div class="sort-button" ></div>
                                    </div>
                                 
                            <div class="entry">
                                <div class="view-button active grid"><i class="fa fa-th"></i></div>
                                <div class="view-button list"><i class="fa fa-list"></i></div>
                                    </div>
                                    <div class="entry">
                                        <div class="inline-text">Show</div>
                                        <div class="simple-drop-down" style="width: 75px;">
                                            <select onchange="totalprd(this.value,<?php echo $this->uri->segment(3) ?>)">
                                                <option value="12">12</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                                <option value="100">all</option>
                                            </select>
                                        </div>
                                        <div class="inline-text">per page</div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                           
                           
                            <div class="row shop-grid grid-view" id="filterprice">
							
                            <?php
							foreach($menudata as $menu)
							{
							?>	
                                <div class="col-md-3 col-sm-4 shop-grid-item">
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
                                                <a class="bottom-line-a square open-product" onclick="popupf(<?php echo $menu->prd_id ?>)"><i class="fa fa-expand"></i></a>
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
                                            <a class="button style-10"
                                             href="<?php echo site_url() ?>/menucontroller/productdetail/<?php echo $menu->prd_id ?>">Buy Now</a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
							<?php
							}
							?>



  













                            </div>
                        <!--
                            <div class="page-selector">
                                <div class="description">Showing: 1-3 of 16</div>
                                <div class="pages-box">
                                    <a href="#" class="square-button active">1</a>
                                    <a href="#" class="square-button">2</a>
                                    <a href="#" class="square-button">3</a>
                                    <div class="divider">...</div>
                                    <a href="#" class="square-button"><i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        -->
                        
                        </div>
                       
                        
                        <div class="col-md-3 col-md-pull-9 col-sm-4 col-sm-pull-8 blog-sidebar">
                            
                            <div class="information-blocks">
                                <a href="#" class="sale-entry vertical">
                                    <span class="hot-mark yellow">hot</span>
                                    <span class="sale-price"><span>UPTO 10%</span> Fashion <br> Clothing Sale</span>
                                    <img src="<?php echo base_url() ?>img/text-widget-image-3.jpg" class="sale-image" style="" alt="" />
                                </a>
                            </div>

							

                            <div class="information-blocks">
                                <div class="block-title size-2">Sort by sizes</div>
                                <div class="range-wrapper">
                                    <div id="prices-range"></div>
                                    <div class="range-price" >
                                        Price: 
                                    <div class="min-price" ><b>&#8377;<span>100</span></b></div>
                                        <b>-</b>
                                        <div class="max-price"><b>&#8377; <span>5000</span></b></div>
                                    </div>
                                    <a class="button style-14" 
                                    onclick="pricefillter(<?php echo $this->uri->segment(3) ?>)">filter</a>
                                </div>
                            </div>

                          
                            <div class="information-blocks">
                                <div class="block-title size-2">Sort by sizes</div>
                                <div class="size-selector">
                                    <div onclick="chgsize('xs','<?php echo $this->uri->segment(3) ?>')" class="entry">xs</div>
                                    <div onclick="chgsize('s','<?php echo $this->uri->segment(3) ?>')" class="entry">s</div>
                                    <div onclick="chgsize('m','<?php echo $this->uri->segment(3) ?>')" class="entry">m</div>
                                    <div onclick="chgsize('l','<?php echo $this->uri->segment(3) ?>')" class="entry">l</div>
                                    <div onclick="chgsize('xl','<?php echo $this->uri->segment(3) ?>')" class="entry">xl</div>
                                    <div class="spacer"></div>
                                </div>
                            </div>
							
                            

                            <div class="information-blocks">
                                <div class="block-title size-2">Sort by colours</div>
                                <div class="color-selector detail-info-entry">
                                    <div onclick="chgcolor('brown','<?php echo $this->uri->segment(3) ?>')" style="background-color: brown;" class="entry"></div>
                                    <div onclick="chgcolor('yellow','<?php echo $this->uri->segment(3) ?>')" style="background-color: yellow;" class="entry"></div>
                                    <div onclick="chgcolor('blue','<?php echo $this->uri->segment(3) ?>')" style="background-color: blue;" class="entry"></div>
                                    <div onclick="chgcolor('red','<?php echo $this->uri->segment(3) ?>')" style="background-color: red;" class="entry"></div>
                                    <div onclick="chgcolor('green','<?php echo $this->uri->segment(3) ?>')" style="background-color: green;" class="entry"></div>
                                    <div onclick="chgcolor('grey','<?php echo $this->uri->segment(3) ?>')" style="background-color: grey;" class="entry"></div>
                                    <div onclick="chgcolor('black','<?php echo $this->uri->segment(3) ?>')" style="background-color: black;" class="entry"></div>
                                    <div onclick="chgcolor('silver','<?php echo $this->uri->segment(3) ?>')" style="background-color: silver;" class="entry"></div>
                                    <div onclick="chgcolor('khaki','<?php echo $this->uri->segment(3) ?>')" style="background-color: khaki;" class="entry"></div>
                                    <div onclick="chgcolor('green','<?php echo $this->uri->segment(3) ?>')" style="background-color: lightGreen;" class="entry"></div>
             <div onclick="chgcolor('lightblue','<?php echo $this->uri->segment(3) ?>')" style="background-color: lightblue;" class="entry"></div>
              <div onclick="chgcolor('pink','<?php echo $this->uri->segment(3) ?>')" style="background-color: pink;" class="entry"></div>
             
                                    <div class="spacer"></div>
                                </div>
                            </div>
                             
                            
                            <?php
							if($this->uri->segment(2)!="getsearchdata")
							{
							?>
                            
                             <div class="information-blocks">
                                <h3 class="block-title">Popular Brands</h3>
                                <div class="sidebar-logos-row">
                                  <?php
								  foreach($branddata as $brand)
								  {
								  ?>
                                  
                                    <div class="entry"><a onclick="getbranddetail(<?php echo $brand->brand_id ?>)"><img alt="" src="<?php echo base_url() ?>Admin/Brand/<?php echo $brand->brand_img ?>" style="width:80px;height:30px"></a></div>
                                  <?php
								  }
								  ?> 
                                   
                                   
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <?php
							}	
							?>
                            
                            
                            
                             <!--
                             
                             <div class="information-blocks">
                                <div class="sidebar-navigation">
                                    <div class="title">Related Categories<i class="fa fa-angle-down"></i></div>
                                    <div class="list">
                                       ?php
									   foreach($getralatedcategory as $rcat)
									   {
									   ?>
                                       
                                        <a href="#" class="entry" onclick="getrelatedcat(?php echo $rcat->subcat_id ?>)"><span><i class="fa fa-angle-right"></i>?php echo $rcat->subcat_name ?></span></a>
                                        ?php
									   }
										?>
                                       </div>
                                </div>
                            </div>
                             
                             -->
                        </div>
                    </div>
                </div>
   <script>
   function getbranddetail(bid)
   {
		$.ajax({
				url:"<?php echo site_url() ?>/menucontroller/getbranddata/"+bid,
				method:"post",
				success: function(bres)
				{
					$("#filterprice").html(bres)	
				}	
		})
   }
   function getrelatedcat(sid)
   {
		$.ajax({
				url:"<?php echo site_url() ?>/menucontroller/getrelatedcat/"+sid,
				method:"post",
				success: function(rres)
				{
					$("#filterprice").html(rres)	
				}	
		})
   }
   
   </script>             
             
	
                            <?php
							foreach($filter as $menu2)
							{
							?>	
                                <div class="col-md-3 col-sm-4 shop-grid-item">
                                    <div class="product-slide-entry shift-image">
                                        <div class="product-image">
                                            <img src="<?php echo base_url() ?>admin/product/<?php  echo $menu2->prd_img1 ?>" alt="" />
                                            <img src="<?php echo base_url() ?>admin/product/<?php  echo $menu2->prd_img2 ?>" alt="" />
                                             <?php
											if($menu2->prd_discount!=0 or $menu2->prd_discount!="")
											{
											?> 
                                             <div class="product-image-label type-1"><span>
                                             <?php  echo $menu2->prd_discount ?>% off
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
							$this->db->where("prd_id",$menu2->prd_id);
							$this->db->where("user_id",$this->session->userdata('c_userid'));
							$wish=$this->db->get('addtocart')->result();	
							if(count($wish)>0)
							{
							?>
                            <p style="display:none" id="noncolorcart2<?php echo $menu2->prd_id ?>">
                            <a  class="bottom-line-a square" onclick="addcart(<?php echo $menu2->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-shopping-cart"  ></i></a></p>   
                          <!-- ***************************   -->
                          <p id="colorcart<?php echo $menu2->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#f5c10c" onclick="removecart(<?php echo $menu2->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-shopping-cart"  ></i></a>
                           </p>
                            <?php
							}
							else
							{
							?>
							   <p style="display:none" id="colorcart2<?php echo $menu2->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#f5c10c" onclick="removecart(<?php echo $menu2->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-shopping-cart"  ></i>
                           </a>
                          </p>
                          <!-- ***************************   -->
                          <p id="noncolorcart<?php echo $menu2->prd_id ?>">
                            <a  class="bottom-line-a square" onclick="addcart(<?php echo $menu2->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-shopping-cart" ></i></a>
                            </p>
							<?php
							}
							?>
							
							
							
							<?php
							$this->db->where("prd_id",$menu2->prd_id);
							$this->db->where("user_id",$this->session->userdata('c_userid'));
							$wish=$this->db->get('wishlist')->result();	
							if(count($wish)>0)
							{
							?>
                          <!-- Ajax -->
                          <p style="display:none" id="noncolorwishlist2<?php echo $menu2->prd_id ?>">
                          
                            <a  class="bottom-line-a square" 
                            onclick="addwishlist(<?php echo $menu2->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-heart" ></i></a>
                       </p>   
                          <!--    -->
                          <p id="colorwishlist<?php echo $menu2->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#ca1515" onclick="removewishlist(<?php echo $menu2->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-heart"  ></i></a>
                           </p>
                            <?php
							}else
							{
							?>
                          <!-- Ajax -->
                          <p style="display:none" id="colorwishlist2<?php echo $menu2->prd_id ?>">
                           <a  class="bottom-line-a square" style="background-color:#ca1515" onclick="removewishlist(<?php echo $menu2->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)"  ><i class="fa fa-heart"  ></i>
                           </a>
                          </p>
                          <!--    -->
                          <p id="noncolorwishlist<?php echo $menu2->prd_id ?>">
                            <a  class="bottom-line-a square" 
                            onclick="addwishlist(<?php echo $menu2->prd_id ?>,<?php echo $this->session->userdata('c_userid') ?>)" ><i class="fa fa-heart" ></i></a>
                            </p>
							<?php
							}
							}
							?>
                            
                            
                            
                            
                            
                            
                            
                                                <a class="bottom-line-a square"><i class="fa fa-retweet"></i></a>
                                                <a class="bottom-line-a square open-product" onclick="popupf(<?php echo $menu2->prd_id ?>)"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                        <a class="tag" href="#">Men clothing</a>
                                        <a class="title" href="<?php echo site_url() ?>/menucontroller/productdetail/<?php echo $menu2->prd_id ?>">
                                        <?php 
										echo $menu2->prd_name;
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
                                            <p>
                                        <?php 
										echo $menu2->prd_description;
										?>
                                            
                                            
                                            </p>
                                        </div>
                                        <div class="price">
                                            <div class="prev">&#8377; 
											<?php echo $menu2->prd_price ?></div>
                                                <div class="current">&#8377; 
                                                <?php 
                                                $dic=$menu2->prd_price/$menu2->prd_discount; 
                                                $actualprice=$menu2->prd_price-$dic;
                                                echo ceil($actualprice);
                                                ?>
                                            
                                            
                                            </div>
                                        </div>
                                        <div class="list-buttons">
                                              <a class="button style-10"
                                             href="<?php echo site_url() ?>/menucontroller/productdetail/<?php echo $menu2->prd_id ?>">Buy Now</a>
                                        
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
							<?php
							}
							?>
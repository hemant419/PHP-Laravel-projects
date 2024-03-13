  <div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Account</a>
                    <a href="#">Wishlist</a>
                </div>

                
                <div class="information-blocks">
                    <div class="row">
                
                      
                        <div class="col-sm-9 col-sm-push-3">
                            <div class="wishlist-header hidden-xs">
                                <div class="title-1">Product Name</div>
                                <div class="title-2">Purchase Product</div>
                            </div>
                  <?php
				if(count($mywishlist)>0)
				{
				?>  
                            <div class="wishlist-box">
                            <?php
							foreach($mywishlist as $wish)
							{
								$this->db->where('prd_Id',$wish->prd_id);
								$prd=$this->db->get('product')->row();
								$this->db->where('subcat_id',$prd->subcat_id);
								$scat=$this->db->get('subcategory')->row();
								
							?>    
                            
                                <div class="wishlist-entry" id="wishlistrecord<?php echo $wish->wishlist_id ?>">
                                    <div class="column-1">
                                        <div class="traditional-cart-entry">
                                            <a class="image" href="#"><img alt="" src="<?php echo base_url() ?>admin/product/<?php echo $prd->prd_img1 ?>" /></a>
                                            <div class="content">
                                                <div class="cell-view">
                                                    <a class="tag" href="#">
                                                    <?php echo $scat->subcat_name ?>
                                                    </a>
                                                    <a class="title" href="#">
													<?php echo $prd->prd_name ?></a>
                                                    <div class="inline-description"><?php echo $prd->prd_color ?></div>
                                                    <div class="inline-description"><?php echo $prd->prd_size ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-2">
                                    	<a class="button style-14" id="wishlisthide<?php echo $wish->prd_id ?>" style="display:none">Added To Cart</a>
                                        <a class="button style-14" id="wishlistshow<?php echo $wish->prd_id ?>" onclick="addmycart(<?php echo $wish->prd_id ?>)">add to cart</a>
         <a class="remove-button" id="deletewishlist<?php echo $wish->prd_id ?>" onClick="deletewishlist(<?php echo $wish->wishlist_id ?>)"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                             <?php
							}
							 ?>   
                                
                            </div>
                <?php
				}
				else
				{
				?>
                    <center>
                    <img src="<?php echo base_url() ?>/img/emptywishlist.jpg" />
                    </center> 
                <?php
				}
				?>  
                        </div>
                   
                      
                      
                      
                        <div class="col-sm-3 col-sm-pull-9 blog-sidebar">
                            <div class="information-blocks">
                                <div class="categories-list account-links">
                                    <div class="block-title size-3">My Wishlist</div>
                                    <ul>
                            <li>
                            <a href="<?php echo site_url() ?>/homecontroller/user">My Profile</a></li>
                    <li ><a href="<?php echo site_url() ?>/usercontroller/changepasswordpage">Change Password </a></li>
                    <li><a href="<?php echo site_url() ?>/cartcontroller">My Cart</a></li>
                    <li style="background-color:#E7E7E7"><a href="<?php echo site_url() ?>/wishlistcontroller">My Wishlist</a></li>
                    <li><a href="#">My Reviews</a></li>
                    <li><a href="<?php echo site_url() ?>/usercontroller/myorder">Order History</a></li>
                                    
                                </ul>
                                </div>
                                <div class="article-container">
                                    <br/>Custom CMS block displayed below the one page account panel block. Put your own content here.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
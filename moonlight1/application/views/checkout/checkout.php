<div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Checkout</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-7 information-entry">
                            <div class="accordeon size-1">
                                <div class="accordeon-title active"><span class="number">1</span>Checkout Method</div>
                                <div class="accordeon-entry" style="display: block;">
                                    <div class="row">
                                        
                                        <div class="col-md-8 information-entry">
                                            <div class="article-container style-1">
                                            




						<?php
						$uid=$this->session->userdata('c_userid');
						$this->db->where('user_id',$uid);
						$alreadyorder=$this->db->get('order_mstr')->result();
						
						$uid=$this->session->userdata('c_userid');
						$this->db->where('user_id',$uid);
						$alreadyorder2=$this->db->get('order_mstr')->row();
						if(count($alreadyorder)>0)
						{
						?>
                                  <form method="post" action="<?php echo site_url() ?>/checkoutcontroller/chkmethod/">
                            <div class="information-blocks" id="oldaddress">
                                <div class="detail-info-lines border-box">
                                    <div class="share-box">
                                        <div class="title"><b>Name:</b> <?php echo ucfirst($alreadyorder2->user_name); echo " ".ucfirst($alreadyorder2->user_lastname); ?></div>
<input type="hidden" value="<?php echo ucfirst($alreadyorder2->user_name);  ?>"  name="fname" >
<input type="hidden" value="<?php echo ucfirst($alreadyorder2->user_lastname); ?>"  name="lname" >
                                        
                                    </div>
                                    <div class="share-box">
                                        <div class="title"><b>Email:</b> <?php echo $alreadyorder2->user_email ?></div>
<input type="hidden" value="<?php echo ucfirst($alreadyorder2->user_email); ?>"  name="email" >
                                                                                  
                                    </div>
                                    <div class="share-box">
                                        <div class="title"><b>Mobile No:</b> <?php echo $alreadyorder2->user_contact ?></div>
                                                                           <input type="hidden" value="<?php echo ucfirst($alreadyorder2->user_contact); ?>"  name="mobileno" >    
                                    </div>
                                    <div class="share-box">
                                        <div class="title"><b>Address:</b> <?php echo $alreadyorder2->user_address ?></div>
<input type="hidden" value="<?php echo ucfirst($alreadyorder2->user_address); ?>" name="paddress"> 

<input type="hidden" value="<?php echo ucfirst($alreadyorder2->user_address); ?>" name="saddress" > 

                                       
                                    </div>
                                    <div class="share-box">
                  		   <input type="submit" class="button style-10" value="Deliver here">
	
                    	            </div>
                                </div>
                            </div>
                    	</form>
						<?php
						}
						?>    
                        
                        <div class="information-blocks" id="newaddress">
                                <div class="detail-info-lines border-box">
                                   
                                    <div class="share-box">
	
                    	   <a class="button style-18" onclick="hidechkout()">+ Add a new address</a>
	                                </div>
                                </div>
                            </div>


    <div id="hidechkout" style="display:none">
                                                <h3>ADD A NEW ADDRESS</h3>
                                                <form method="post" action="<?php echo site_url() ?>/checkoutcontroller/chkmethod/">
                                                    <label>First Name <b style="color:#F00">*</b></label>
                                                    <input type="text" value="" placeholder="Enter First Name" class="simple-field" name="fname" required="required">
           
                                                    <label>Last Name <b style="color:#F00">*</b></label>
                                                    <input type="text" value="" placeholder="Enter Last Name" class="simple-field" name="lname" required="required">

													<label>Email <b style="color:#F00">*</b></label>
													<input type="email" value="" placeholder="Enter Your Email" class="simple-field" name="email" required="required">

													<label>Mobile No. <b style="color:#F00">*</b></label>
													<input type="text" value="" placeholder="Enter Your mobile" class="simple-field"  maxlength="10"  pattern="[789][0-9]{9}" title="Please Enter Valid Mobile Number"   name="mobileno" required="required">

													<label>Parmanent Address <b style="color:#F00">*</b></label>
													<textarea placeholder="Enter Your Parmanent Address" class="simple-field" minlength="25" style="resize:none" name="paddress" required="required"></textarea>
                                                    
                                                    														                                                    <label>Shipping Address <b style="color:#F00">*</b></label>
													<textarea placeholder="Enter Your Shipping Address" minlength="25" class="simple-field" style="resize:none" required="required" name="saddress"></textarea>



                                                    <div class="button style-10">Submit<input type="submit" value=""></div>
                                                    
                                                </form>
                                           </div>
                                           
                                           
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                               
                                <div class="accordeon-title"  >
                                <span class="number">2</span>Shipping Method</div>
                                
                                
                               
                                
                                
                                
                                <div class="accordeon-title">
                                	<span class="number">3</span>
                                	Payment Options
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col-sm-5 information-entry">
                            <h3 class="cart-column-title size-2">Your Checkout Progress</h3>
                            <div class="information-blocks">
                                <div class="products-list">
                                    <h3 class="block-title inline-product-column-title">Cart Items</h3>
                                    <?php
								$subtotal1=0;
								$totaldis1=0;
								
									foreach($mycart as $cart)
									{
										$this->db->where('prd_id',$cart->prd_id);
										$myproduct=$this->db->get('product')->result();
										foreach($myproduct as $product)
										{	
									?>
                                    
                                    <div class="inline-product-entry">
                                        <a href="#" class="image"><img src="<?php echo base_url() ?>admin/product/<?php echo $product->prd_img1  ?>" alt="" /></a>
                                        <div class="content">
                                            <div class="cell-view">
                                                <a href="#" class="title"><?php echo $product->prd_name  ?></a>
                                                
                                                <div  class="quantity" >
                                                Quantity: <?php echo $cart->cart_prd_qty ?>
                                                </div>
                                                
                                                <div class="price">
                                                    <div class="prev">&#8377; <?php echo $product->prd_price ?></div>
                                                    <div class="current">&#8377; <?php 
					
				$distotal=$product->prd_price*$product->prd_discount/100;	
				$actual_total=ceil($product->prd_price-$distotal)*$cart->cart_prd_qty; 
				echo $actual_total;
					
					
					?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
				
                					<?php
								$subtotal1=$subtotal1+$product->prd_price;
								$totaldis1=$totaldis1+$actual_total;
								
									}
									}
									?>
                                   
                                </div>
        <br>
        <p style="font-size:24px">Subtotal: &#8377; <?php echo $subtotal1 ?></p>      
      <hr>
       <b style="font-size:24px">Grand Total: <span>&#8377; <?php echo $totaldis1 ?></span></b>      
        
        
                            </div>
                          
                            
                        </div>
                    </div>    
                </div>

<script>
function hidechkout()
{
	$("#newaddress").hide();
	$("#oldaddress").hide();
	$("#hidechkout").show();
	
}
</script>
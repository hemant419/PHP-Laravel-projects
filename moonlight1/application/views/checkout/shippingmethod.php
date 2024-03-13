<div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Checkout</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-8 information-entry">
                            <div class="accordeon size-1">
                                <div class="accordeon-title" >
                                	<span class="number">1</span>Checkout Method
                                </div>
                                

                                
                                
                                <div class="accordeon-title"  >
                                <span class="number">2</span>Shipping Method</div>
                                <div class="accordeon-entry" style="display: block;">
                                    <div class="article-container style-1" >
                                          <div class=" information-entry" >
                                        <h3 class="cart-column-title">Shipping Estimates</h3>
 <script>
 function dtype2(value)
 {

	 $("#dcost").val("₹"+value);
 }
 
 
 </script>                                       
                                        
                                        <form method="post" action="<?php echo site_url() ?>/checkoutcontroller/payment">
<input type="hidden" name="fistname" value="<?php echo $this->session->userdata("firstname"); ?>" />
<input type="hidden" name="lastname" value="<?php echo $this->session->userdata("lname"); ?>" />
<input type="hidden" name="cemail" value="<?php echo $this->session->userdata("cemail"); ?>" />
<input type="hidden" name="cmobile" value="<?php echo $this->session->userdata("cmobile"); ?>" />
<input type="hidden" name="cpaddress" value="<?php echo $this->session->userdata("cpaddress"); ?>" />
<input type="hidden" name="csaddress" value="<?php echo $this->session->userdata("csaddress"); ?>" />    
                                        
                                            <label>Select Delivery Types</label>
                                            <div class="simple-drop-down simple-field size-1">
                                                <select onChange="dtype2(this.value)" required name="dtype">
                                                 <option value="">Select Delivery Types</option>
                                                    <option value="100">Fast Track</option>
                                                    <option value="50">Normal Track</option>
                                                </select>
                                            </div>
                                           
                                            <label>Delivery Cost (Charge)</label>
                                            <input type="text" class="simple-field size-1" placeholder="Delivery Cost" value="" id="dcost" disabled>
                                            <div style="margin-top: 10px;" class="button style-16">calculate shipping<input type="submit"></div>
                                        </form>
                                        
                                        
                                    </div>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="accordeon-entry">
                                    <div class="article-container style-1">
                                        <div class="information-blocks">
                                <div class="products-list">
                                    <h3 class="block-title inline-product-column-title">Cart Item</h3>
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
       <p style="font-size:24px">Grand Total: <span>&#8377; <?php echo $totaldis1 ?></span></p>      
        
        
                            </div>
                                    </div>
                                </div>
                                
                                <div class="accordeon-title"><span class="number">3</span>Payment Options</div>
                                
                                
                            </div>
                        </div>
                        <div class="col-sm-4 information-entry">
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
       <p style="font-size:24px">Grand Total: <span>&#8377; <?php echo $totaldis1 ?></span></p>      
        
        
                            </div>
                          
                            
                        </div>
                    </div>    
                </div>


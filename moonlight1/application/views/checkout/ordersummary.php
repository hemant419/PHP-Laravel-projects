<div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Checkout</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-8 information-entry">
                            <div class="accordeon size-1">
                                <div class="accordeon-title active"><span class="number">1</span>Checkout Method</div>
                                <div class="accordeon-entry" style="display: block;">
                                    <div class="row">
                                        
                                        <div class="col-md-6 information-entry">
                                            <div class="article-container style-1">
                                                <h3>Checkout</h3>
                                               
                                                <form>
                                                    <label>First Name</label>
                                                    <input type="text" value="" placeholder="Enter First Name" class="simple-field">
           
                                                    <label>Last Name</label>
                                                    <input type="text" value="" placeholder="Enter Last Name" class="simple-field">

													<label>Email</label>
													<input type="text" value="" placeholder="Enter Your Email" class="simple-field">

													<label>Mobile No.</label>
													<input type="text" value="" placeholder="Enter Your mobile" class="simple-field">

													<label>Parmanent Address.</label>
													<textarea placeholder="Enter Your Parmanent Address" class="simple-field" style="resize:none"></textarea>
                                                    
                                                    														                                                    <label>Shipping Address.</label>
													<textarea placeholder="Enter Your Shipping Address" class="simple-field" style="resize:none"></textarea>



                                                    <div class="button style-10">Submit<input type="submit" value=""></div>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="accordeon-entry">
                                    <div class="article-container style-1">
                                        <p>Bssss.</p>
                                    </div>
                                </div>
                                <div class="accordeon-title"  >
                                <span class="number">2</span>Shipping Method</div>
                                <div class="accordeon-entry" >
                                    <div class="article-container style-1">
                                          <div class=" information-entry">
                                        <h3 class="cart-column-title">Shipping Estimates</h3>
 <script>
 function dtype(value)
 {
	 $("#dcost").val(value);
 }
 
 
 </script>                                       
                                        
                                        <form>
                                            <label>Select Delivery Types</label>
                                            <div class="simple-drop-down simple-field size-1">
                                                <select onChange="dtype(this.value)">
                                                    <option value="100">Fast Track</option>
                                                    <option value="50">Normal Track</option>
                                                </select>
                                            </div>
                                           
                                            <label>Delivery Cost</label>
                                            <input type="text" class="simple-field size-1" placeholder="Delivery Cost" value="" id="dcost" disabled>
                                            <div style="margin-top: 10px;" class="button style-16">calculate shipping<input type="submit"></div>
                                        </form>
                                        
                                        
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="accordeon-title"><span class="number">3</span>Order Summary</div>
                                
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
                                
                                <div class="accordeon-title"><span class="number">4</span>Payment Options</div>
                                <div class="accordeon-entry">
                                    <div class="article-container style-1">
                                 <div class="sidebar-navigation" style="width:300px;float:left">
                                    <div class="title">Options<i class="fa fa-angle-down"></i></div>
                                    <div class="list">
                                        <a id="cc" class="entry" onclick="creditcart()"><span><i class="fa fa-angle-right"></i>Credit Card</span></a>
                                        <a id="cc2" class="entry" onclick="creditcart()" style="background-color:#ca1515;color:#FFF;display:none"><span><i class="fa fa-angle-right" style="color:#FFF"></i>Credit Card</span></a>
                                        
                                        <a id="nb"  class="entry" onclick="netbank()" ><span><i class="fa fa-angle-right"></i>Net Banking</span></a>                     
                                         <a id="nb2"  class="entry" onclick="netbank()" style="background-color:#ca1515;color:#FFF;display:none"><span><i class="fa fa-angle-right" style="color:#FFF"></i>Net Banking</span></a>
                                        
                                        
                                		<a id="em"  class="entry" onclick="emi()"><span><i class="fa fa-angle-right"></i>EMI</span></a>
                                        <a id="em2"  class="entry" onclick="emi()" style="background-color:#ca1515;color:#FFF;display:none"><span><i class="fa fa-angle-right" style="color:#FFF"></i>EMI</span></a>
                                        
                                		<a id="dc"  class="entry" onclick="debitcart()"><span><i class="fa fa-angle-right"></i>Debit Card</span></a>
                                		<a id="dc2"  class="entry" onclick="debitcart()" style="background-color:#ca1515;color:#FFF;display:none"><span><i class="fa fa-angle-right" style="color:#FFF"></i>Debit Card</span></a>	
                                        
                                        
                                        
                                        <a id="cd" class="entry" onclick="cod()"><span><i class="fa fa-angle-right"></i>&#8377; COD</span></a>
                                        <a id="cd2"  class="entry" onclick="cod()" style="background-color:#ca1515;color:#FFF;display:none"><span><i class="fa fa-angle-right" style="color:#FFF"></i>&#8377; COD</span></a>
                                        
                                        
                                    </div>
                                </div>
<script>
function creditcart()
{
	$("#cc").hide();
	$("#cc2").show();
	$("#dc").show();
	$("#dc2").hide();
	
	$("#nb2").hide();
	$("#nb").show();
	$("#em2").hide();
	$("#em").show();
	$("#cd2").hide();
	$("#cd").show();
	
	
	
	$("#creditcard").show(600);
	$("#netbanking").hide();
	$("#cod").hide()
	$("#debitcard").hide();
	$("#emi").hide();
}
function netbank()
{
	$("#nb2").show();
	$("#nb").hide();
	$("#cc2").hide();
	$("#cc").show();
	$("#em2").hide();
	$("#em").show();
	$("#dc").show();
	$("#dc2").hide();
	$("#cd2").hide();
	$("#cd").show();

	$("#creditcard").hide();
	$("#netbanking").show(600);
	$("#cod").hide()
	$("#debitcard").hide();
	$("#emi").hide();
}
function emi()
{
	$("#em2").show();
	$("#em").hide();
	$("#nb2").hide();
	$("#nb").show();
	$("#cc2").hide();
	$("#cc").show();
	$("#dc").show();
	$("#dc2").hide();
	$("#cd2").hide();
	$("#cd").show();
	
	$("#creditcard").hide();
	$("#netbanking").hide();
	$("#cod").hide()
	$("#debitcard").hide();
	$("#emi").show(600);
}
function debitcart()
{
	$("#dc").hide();
	$("#dc2").show();
	$("#em2").hide();
	$("#em").show();
	$("#nb2").hide();
	$("#nb").show();
	$("#cc2").hide();
	$("#cc").show();
	$("#cd2").hide();
	$("#cd").show();
	
	$("#creditcard").hide();
	$("#netbanking").hide();
	$("#cod").hide()
	$("#debitcard").show(600);
	$("#emi").hide();
}
function cod()
{
	$("#cd").hide();
	$("#cd2").show();
	$("#dc").show();
	$("#dc2").hide();
	$("#em2").hide();
	$("#em").show();
	$("#nb2").hide();
	$("#nb").show();
	$("#cc2").hide();
	$("#cc").show();

	$("#creditcard").hide();
	$("#netbanking").hide();
	$("#cod").show(600);
	$("#debitcard").hide();
	$("#emi").hide();
} 

</script>                             
                             
                             
                            
                             
                             <div class="col-md-6 information-entry" style="border:2px solid #ca1515;margin-left:25px" id="creditcard">
                                   <center>
                                        <h3 class="cart-column-title" style="background-color:#ca1515;color:#FFF;">Credit Card</h3>
                                        <br />
                                        
                                                           <label style="color:#ca1515;">Sorry this method Currently Unavailable !</label>
                                        <br />
                                                                 
                                   </center>     
                                        <form>


                                            <label>Card Number</label>
                                            <input type="text" class="simple-field size-1" placeholder="Card Number" value="" disabled="disabled">
                                                                                        <label>Card Number</label>
                                            <label>Expire Date</label>
                                            <input type="text" class="simple-field size-1" placeholder="MM | YY" value="" disabled="disabled">
                                            
                                            <label>Name on card</label>
                                            <input type="text" class="simple-field size-1" placeholder="Name on card" value="" disabled="disabled">

                                            
                                            <div style="margin-top: 10px;" class="button style-4">Save And Pay<input  type="submit"></div>
                               
                                        </form>
                                        <br />
                                    </div>
                                    
                             <div class="col-md-6 information-entry" style="border:2px solid #ca1515;margin-left:30px;display:none" id="netbanking">
                                   <center>
                                   
                                        <label style="color:#ca1515;">Sorry Net Banking service Currently Unavailable !</label>
                             
                                   </center>     
                                        
                                        <br />
                                    </div>
                                    
                             <div class="col-md-6 information-entry" style="border:2px solid #ca1515;margin-left:30px;display:none" id="emi">
                             
                                  <label style="color:#ca1515;">Sorry EMI service Currently Unavailable !</label>
                             

                                        <br />
                                    </div>       
                                           
                             <div class="col-md-6 information-entry" style="border:2px solid #ca1515;margin-left:30px;display:none" id="debitcard">
                                   <center>
                                        <h3 class="cart-column-title" style="background-color:#ca1515;color:#FFF;">Debit Card</h3>
                                        <br />
                                        
                                                           <label style="color:#ca1515;">Sorry this method Currently Unavailable !</label>
                                        <br />
                                                                 
                                   </center>     
                                        <form>


                                            <label>Card Number</label>
                                            <input type="text" class="simple-field size-1" placeholder="Card Number" value="" disabled="disabled">
                                                                                        <label>Card Number</label>
                                            <label>Expire Date</label>
                                            <input type="text" class="simple-field size-1" placeholder="MM | YY" value="" disabled="disabled">
                                            
                                            <label>Name on card</label>
                                            <input type="text" class="simple-field size-1" placeholder="Name on card" value="" disabled="disabled">

                                            
                                            <div style="margin-top: 10px;" class="button style-4">Save And Pay<input  type="submit"></div>
                               
                                        </form>
                                        <br />
                                     </div>
                                    
                             <div class="col-md-6 information-entry" style="border:2px solid #ca1515;margin-left:30px;display:none" id="cod">
                                   <center>
                                        <h3 class="cart-column-title" style="background-color:#ca1515;color:#FFF">Cash On Delivery</h3>
                                   </center>     
                                       
                                       <!--
                                        <form>
                                            <label>Country</label>
                                            <div class="simple-drop-down simple-field size-1">
                                                <select>
                                                    <option>United States</option>
                                                    <option>Great Britain</option>
                                                    <option>Canada</option>
                                                </select>
                                            </div>
                                            <label>Message <span>*</span></label>
                                            <textarea class="simple-field size-1" placeholder="Your message content (required)" required></textarea>
                                            <label>Zip Code</label>
                                            <input type="text" class="simple-field size-1" placeholder="Zip Code" value="">
                                            <div style="margin-top: 10px;" class="button style-16">calculate shipping<input type="submit"></div>
                                        </form>
                                        -->
            <h4>Submit Captcha Code</h4>
<p id="captImg"><?php echo $captchaImg; ?></p>
<p>Can't read the image? click <a href="javascript:void(0);" onclick="refreshc()" class="refreshCaptcha">here</a> to refresh.</p>
<form method="post">
    Enter the code : 
    <input type="text" name="captcha" value=""/>
    <input type="submit" name="submit" value="SUBMIT"/>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- captcha refresh code -->
<script>
$(document).ready(function(){
    $('.refreshCaptcha').on('click', function(){
        $.post('<?php echo site_url().'/checkoutcontroller/refresh'; ?>', function(data){
					alert(data)

            $('#captImg').html(data);
        });
    });
});
</script>                                        
                                        
                                        <br />
                                    </div>       
                             
                             
                             
                             
                                    </div>
                                </div>
                                
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


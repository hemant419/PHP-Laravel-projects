<div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Checkout</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-7 information-entry">
                            <div class="accordeon size-1">
                                <div class="accordeon-title ">
                                <span class="number">1</span>Checkout Method</div>
                                
								<div class="accordeon-title"  >
                                <span class="number">2</span>Shipping Method</div>
                                
                                <div class="accordeon-title active"  >
                                <span class="number">3</span>Payment Method</div>
                              
                               <div class="information-blocks categories-border-wrapper" style="border-color:#ca1515"  >
                                <div class="block-title size-3" style="color:#ca1515">Payment Options</div>
                                <div class="accordeon" >
                                    <div class="accordeon-title" >Cash On Delivery </div>
                                    <div class="accordeon-entry">
                                        <div class="article-container style-1">
                                               
                                          <div class="information-entry categories-border-wrapper" style="border:2px solid #ca1515;" id="cod">
                                   <center>
                                        <h3 class="cart-column-title" style="background-color:#ca1515;color:#FFF">Cash On Delivery</h3>
                                   </center>     
                                       
                                      
                                      
<h4>Submit Captcha Code</h4>
<p id="captImg"><?php // echo $image;  ?></p>
<p>Can't read the image? click <a href="javascript:void(0);" onclick="reloadcaptcha()" class="refreshCaptcha">here</a> to refresh.</p>

<center>
<img src="<?php echo site_url() ?>/checkoutcontroller/captchaimg"
style="border-radius:10px;height:70px;width:200px;"  id="capimg" />

<br />				
<input type="text" class="simple-field" id="captchaid" placeholder="Enter Code Here" value="" >

<p id="Errorcaptcha"  ></p>
<input type="submit"  class="button style-12"   onclick="return captach()" value="Varify Yourself" id="varifyself">
</center>             
             
             
<center>     
<form method="post" action="<?php echo site_url() ?>/checkoutcontroller/ordercomplete">

<input type="hidden" name="fistname" value="<?php echo $this->session->userdata("firstname"); ?>" />
<input type="hidden" name="lastname" value="<?php echo $this->session->userdata("lname"); ?>" />
<input type="hidden" name="cemail" value="<?php echo $this->session->userdata("cemail"); ?>" />
<input type="hidden" name="cmobile" value="<?php echo $this->session->userdata("cmobile"); ?>" />
<input type="hidden" name="cpaddress" value="<?php echo $this->session->userdata("cpaddress"); ?>" />
<input type="hidden" name="csaddress" value="<?php echo $this->session->userdata("csaddress"); ?>" />    
             
             <input type="submit"  class="button style-10"   onclick="return captach()" value="Place Order" id="placeorder" style="display:none">
 </form>
</center>
                                      
                                        <br />
                                    </div>  
                                               
                                               
                                             </div>
                                    </div>
                                    <div class="accordeon-title">Credit Card</div>
                                    <div class="accordeon-entry">
                                        <div class="article-container style-1">
                                        
                                               <div class="information-entry categories-border-wrapper" style="border:2px solid #ca1515;" id="creditcard">
                                   <center>
                                        <h3 class="cart-column-title" style="background-color:#ca1515;color:#FFF;">Credit Card</h3>
                                        <br />
                                        
                                                           <label style="color:#ca1515;">Sorry this method Currently Unavailable !</label>
                                        <br />
                                                                 
                                   </center>     
                                       
			

                                            <label>Card Number</label>
                                            <input type="text" class="simple-field size-1" placeholder="Card Number" value="" disabled="disabled">
                                                                                        <label>Card Number</label>
                                            <label>Expire Date</label>
                                            <input type="text" class="simple-field size-1" placeholder="MM | YY" value="" disabled="disabled">
                                            
                                            <label>Name on card</label>
                                            <input type="text" class="simple-field size-1" placeholder="Name on card" value="" disabled="disabled">

                                            
                                            <div style="margin-top: 10px;" class="button style-4">Save And Pay<input  type="submit"></div>
                               
                                        <br />
                                    </div>
                                        
                                        
                                        </div>
                                    </div>
                                    <div class="accordeon-title">Debit Card</div>
                                    <div class="accordeon-entry">
                                        <div class="article-container style-1">
                                            
                                            <div class="information-entry categories-border-wrapper" style="border:2px solid #ca1515;margin-left:25px;position:relative" id="creditcard">
                                   <center>
                                        <h3 class="cart-column-title" style="background-color:#ca1515;color:#FFF;">Debit Card</h3>
                                        <br />
                                        
                                                           <label style="color:#ca1515;">Sorry this method Currently Unavailable !</label>
                                        <br />
                                                                 
                                   </center>     
                                       
			

                                            <label>Card Number</label>
                                            <input type="text" class="simple-field size-1" placeholder="Card Number" value="" disabled="disabled">
                                                                                        <label>Card Number</label>
                                            <label>Expire Date</label>
                                            <input type="text" class="simple-field size-1" placeholder="MM | YY" value="" disabled="disabled">
                                            
                                            <label>Name on card</label>
                                            <input type="text" class="simple-field size-1" placeholder="Name on card" value="" disabled="disabled">

                                            
                                            <div style="margin-top: 10px;" class="button style-4">Save And Pay<input  type="submit"></div>
                               
                                        <br />
                                    </div>
                                            
                                        </div>
                                    </div>
                                    <div class="accordeon-title">Net Banking</div>
                                    <div class="accordeon-entry">
                                        <div class="article-container style-1">
                                            
                                            
                                            
                                            <div class="information-entry categories-border-wrapper" style="border:2px solid #ca1515;margin-left:30px;" id="netbanking">
                                   <center>
                                   
                                        <label style="color:#ca1515;">Sorry Net Banking service Currently Unavailable !</label>
                             
                                   </center>     
                                        
                                        <br />
                                    </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="accordeon-title">EMI</div>
                                    <div class="accordeon-entry">
                                        <div class="article-container style-1">
                                            <div class="information-entry categories-border-wrapper" style="border:2px solid #ca1515;margin-left:30px;" id="emi">
                             
                                  <label style="color:#ca1515;">Sorry EMI service Currently Unavailable !</label>
                             

                                        <br />
                                    </div>
                                        </div>
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
       						</div>
        <br>
       <p style="font-size:24px">Subtotal: &#8377; <?php echo $subtotal1 ?></p>      
       <hr>
       <p style="font-size:18px;color:#090">Discount amount:  - &#8377; <?php echo  $subtotal1-$totaldis1 ?></p>       <hr>
       <p style="font-size:18px;color:#F00">Delivery charge:  + <span>
       &#8377; <?php echo $this->session->userdata('dtype') ?></span></p>        
      <hr>	   
       
       <b style="font-size:24px">Grand Total: <span>&#8377; <?php echo $totaldis1 ?></span></b>      	
                            </div>
                        </div>
                       
                        
                          
                            
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


function reloadcaptcha()
{
		$("#capimg").attr("src", "<?php echo site_url() ?>/checkoutcontroller/captchaimg");

}
function captach()
{
	var value3 = document.getElementById("captchaid").value;
	
	if(value3=="")
	{
	$('#Errorcaptcha').html("<font color='red'>Please Enter Captcha Code !</font>");	
	}
	else
	{
	$.ajax({
	url:"<?php echo site_url() ?>/checkoutcontroller/capthca/"+value3,
	success: function(data)
	{
		//alert(data)
		if(data=="0")
		{
			$('#Errorcaptcha').html("<font color='red'>Invalid Captcha Code . Please Try Again !</font>");
			setTimeout(function(){ 
			$("#capimg").attr("src", "<?php echo site_url() ?>/checkoutcontroller/captchaimg");
			},300);	
		}
		else
		{
			$("#varifyself").hide();
			$('#Errorcaptcha').html("<font color='green'>Human Varification Applied Successfully !		</font>");
			$("#placeorder").show();
			}
	}
	});
	}
}	
</script>
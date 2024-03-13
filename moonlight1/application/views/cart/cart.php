 <div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Account</a>
                    <a href="#">My Cart</a>
                </div>



                <div class="information-blocks">
<?php
if(count($mycart) > 0)
{
?>
                    <div class="table-responsive">

                        <table class="cart-table">
                            <tr>
                                <th class="column-1">Product Name</th>
                                <th class="column-2">Unit Price</th>
                                <th class="column-3">Discount</th>
                                <th class="column-4">Qty</th>
                                <th class="column-5">Subtotal</th>
                                <th class="column-6"></th>
                            </tr>
                       
                       <?php
					   $subtotal=0;
					   $totaldis=0;
					  foreach($mycart as $cart)
				   	  {
						  $this->db->where('prd_Id',$cart->prd_id);
						  $prd=$this->db->get('product')->row();
						  $this->db->where('subcat_id',$prd->subcat_id);
						  $scat=$this->db->get('subcategory')->row();
						 ?>
                            <tr id="cartrecord<?php echo $cart->cart_id ?>">
                                <td>
                                    <div class="traditional-cart-entry">
                                        <a href="#" class="image"><img src="<?php echo base_url() ?>admin/product/<?php echo $prd->prd_img1 ?>" alt=""></a>
                                        <div class="content">
                                            <div class="cell-view">
                                                <a href="#" class="tag">
												<?php echo $scat->subcat_name ?></a>
                                                <a href="<?php echo site_url() ?>/menucontroller/productdetail/<?php echo $cart->prd_id ?>" class="title"><?php echo $prd->prd_name ?></a>
<div class="inline-description"><b>Color : </b><?php echo $cart->cart_prd_color ?></div>
<div class="inline-description"><b>Size  : </b><?php echo $cart->cart_prd_size ?><b id="getsize<?php echo $cart->cart_id ?>" style="color:#F00"></b></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>&#8377; <?php echo $prd->prd_price ?></td>
                                <td><?php echo $prd->prd_discount ?>%</td>
                                <td>
                       			<input type="number" min="1"  value="<?php echo $cart->cart_prd_qty ?>" class="simple-field size-1" onChange="updatecart(this.value,<?php echo $prd->prd_id ?>)">
                                </td>
                                <td><div class="subtotal<?php echo $prd->prd_id ?>">&#8377; 
                			<?php
							echo	$cart->cart_totalamount;
				
                                ?>
                                </div></td>
                                <td><a class="remove-button" onclick="deletecart(<?php echo $cart->cart_id ?>,<?php echo $prd->prd_id ?>)"><i class="fa fa-times"></i></a></td>
                            </tr>
                    	<?php
							$distotal=$prd->prd_price*$prd->prd_discount/100;	
							$actual_total=ceil($prd->prd_price-$distotal); 
							$subtotal=$subtotal+$prd->prd_price;
							$totaldis=$totaldis+$actual_total;
							
					  }
						?>   
                       
                        </table>
                    </div>
                    <div class="cart-submit-buttons-box">
                        <a class="button style-15">Continue Shopping</a>
                        <a class="button style-15">Update Bag</a>
                    </div>
                    <div class="row">
                        <div class="col-md-4 information-entry">
                            <h3 class="cart-column-title">Get shipping Estimates</h3>
                            <form>
                                <label>Country</label>
                                <div class="simple-drop-down simple-field size-1">
                                    <select>
                                        <option>United States</option>
                                        <option>Great Britain</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                                <label>State</label>
                                <div class="simple-drop-down simple-field size-1">
                                    <select>
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>Idaho</option>
                                    </select>
                                </div>
                                <label>Zip Code</label>
                                <input type="text" value="" placeholder="Zip Code" class="simple-field size-1">
                                <div class="button style-16" style="margin-top: 10px;">calculate shipping<input type="submit"/></div>
                            </form>
                        </div>
                        <div class="col-md-4 information-entry">
                            <h3 class="cart-column-title">Discount Codes <span class="inline-label red">Promotion</span></h3>
                            <form>
                                <label>Enter your coupon code if you have one.</label>
                                <input type="text" value="" placeholder="" class="simple-field size-1">
                                <div class="button style-16" style="margin-top: 10px;">Apply Coupon<input type="submit"/></div>
                            </form>
                        </div>
                        <div class="col-md-4 information-entry">
                            <div class="cart-summary-box">
                     <div class="sub-total" id="sub_total">Subtotal: &#8377; <?php echo $subtotal ?></div>
                     <div class="grand-total">Grand Total: &#8377; <?php echo $totaldis ?></div>
                                <a class="button style-10" id="chkout" onclick="chksize()">Proceed To Checkout</a>
                                <a class="simple-link" onclick="chksize()">Checkout with Multiple Addresses</a>
                            </div>
                        </div>
                    </div>
<?php
}
else
{
?>                    
 <center>
 <img src="<?php echo base_url() ?>/img/emptycart.png" />
 </center>                   
<?php
}
?>                    
                    
                </div>

                                
<script>
function chksize()
{
			
	
	var csize;
	$.ajax({
			url:"<?php echo site_url() ?>/cartcontroller/chksize",
			method:"post",
			success: function(res)
			{
				
			 	csize=res.split("-");		
				if(csize[1]=="")
				{
					window.location="<?php echo site_url() ?>/checkoutcontroller/";					
				}
				else
				{
					for(var i=1;i <= csize[0]; i++)
					{
				 
				 
						var div = document.getElementById("getsize"+csize[i]);
						var interval = 80;
						var distance = 5;
						var times = 5;
						$(div).css('position', 'relative');
						
						for (var iter = 0; iter < (times + 1) ; iter++) {
						$(div).animate({
						left: ((iter % 2 == 0 ? distance : distance * -1))
						}, interval);
						}
						

				 
				 
						if(csize[i]!="")
						{
							$("#getsize"+csize[i]).html("Please Select The Size OF This Product");	
							$(div).animate({ left: 0 }, interval);					
						}
					}
				}
			
			
			
			}
		});
}
</script>
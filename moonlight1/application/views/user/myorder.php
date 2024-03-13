 <div style="height: 40px;"></div>

                <div class="information-blocks">
                    <div class="tabs-container style-1">
                        <div class="swiper-tabs tabs-switch">
                            <div class="title">Product info</div>
                            <div class="list">
                                <a class="tab-switcher active">All Orders</a>
                                <a class="tab-switcher">Active Orders</a>
                                <a class="tab-switcher">Replacement Orders</a>
                                <a class="tab-switcher">Returned Orders</a>
                              
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div>
                            <div class="tabs-entry">
                                <div class="article-container style-1">
                                    <div class="row">
                                        <div class="col-md-12 information-entry">
        				<?php
						if(count($myorder)=="0")
						{
										echo "<h4 style='color:#ca1515'>Sorry ! No order has been placed by You .</h4>";	
				
						}
						foreach($myorder as $order)
						{
						?>  
		                   <div class="blog-landing-box type-3">
                                        
                                        <?php
										$onlydate=substr($order->order_date,0,10);
										$day=substr($onlydate,8,2);
										
										$yrdata= strtotime($onlydate);
										$month=date('M', $yrdata);
										
								//	 $onlytime;
								$onlytime=date('h:i A',strtotime($order->order_date));;
								$time=substr($onlytime,0,6);	
									
										?>
                                        
                                        
                                            
                                             <div class="blog-entry">
                                    <a class="image hover-class-1" href="#"><img src="<?php echo base_url() ?>img/order2.png" alt="" /><span class="hover-label">See My Product</span></a>
                                    <div class="date"><?php echo $day; ?><span><?php echo $month ?></span></div>
                                    <div class="content">
                                        <a class="title" href="#">Order No : #<?php echo $order->order_no ?></a>
                                        
                                        
                                        <div class="subtitle">
                                        
                                        Posted <?php echo $onlytime ?>, 
										<?php echo date('F j, Y',strtotime($onlydate)) ?> by <a href="#"><b><?php echo ucfirst($order->user_name)." ".ucfirst($order->user_lastname); ?></b></a>  /  Category: <a href="#">Fashion</a></div>
                                        <div class="description">
                                        Delivery Address :
										<?php
										 echo $order->user_address;
										?>
                                        
                                        <br>
                                        Delivery Status : <a><?php echo $order->order_status; ?></a>
                                        
                                        
                                    <div class="content">
                                   
                                        </div>
                                   </div>    

             
                <div class="accordeon-title">See My Products</div>
                <div class="accordeon-entry">
                <div class="article-container ">
                <?php
				
			
				$this->db->where('user_id',$this->session->userdata('c_userid'));
				$this->db->where('order_no',$order->order_no);
				$scart=$this->db->get('store_cart')->result();
				if(count($scart)==0)
				{
							echo "<h4 style='color:#ca1515'>This Order Product Data Is In Replacement Or Refund Tab, Please Check There .</h4>";	
				}
				
				foreach($scart as $cart)
				{
					$pid=$cart->prd_id;
					$this->db->where('prd_id',$pid);
					$product=$this->db->get('product')->row();
				?>	
  
  
  				<div class="blog-entry" >
                                    <a style="height:150px;width:150px" class="image hover-class-2" href="#">
                                    <img src="<?php echo base_url() ?>/Admin/product/<?php echo $product->prd_img1 ?>" alt=""  style="height:150px;width:150px"/></a>
                                    <div class="content" style="text-align:left" >
                                        <a href="#">
										<b style="font-size:16px" >
										<?php echo $product->prd_name ?>
                                        </b>
                                       </a> 
                                        <div class="subtitle">
                                    </div>
                  <div class="description">
                  size : <?php echo $cart->size ?> | Qty   : <?php echo $cart->Qty ?> 
                  
                  <br>
                  <b > &#8377;<?php echo $cart->total_amt ?> </b>
                  <span style="text-decoration:line-through"> &#8377;<?php echo $product->prd_price ?></span>  </span>
                 <br />
                 Expected Delivery (<?php 
										echo date('F j, Y',strtotime($order->expected_date));
					?>)					
                  </div>
                  <?php
				  if($order->order_status!="Delivered")
				  {
				  if($cart->storestatus=="Active")
				  {
				  ?>
                  <a class="readmore" id="cancelbutton<?php echo $cart->store_id ?>"  onclick="cancelproduct(<?php echo $cart->store_id ?>)">Cancel Product</a>
                  <?php
				  }
				  if($cart->storestatus=="Cancel")
				  {
				  ?> 
                   <a class="readmore" style="color:#d14242;" id="cancelreq<?php echo $cart->store_id ?>" > Cancel Item Requested</a>
                   <?php
				  }
				  if($cart->storestatus=="Confirmed")
				  
				  {
				   ?>
                   <a class="readmore" style="color:#093;" id="cancelreq<?php echo $cart->store_id ?>"  >Cancel Request Accepted</a>
                  <?php
				  }
				  }
				 if($order->order_status=="Delivered" && $cart->storestatus=="Active")
				  {
					?> 
                    <center> 
				<strong class="readmore open-image2" id="lableretrep<?php echo $cart->store_id ?>"><a  style="color:#093;"  onclick="returnreplace(<?php echo $cart->store_id ?>)">Refund | Replace </a>
                 </strong>
                 </center>
                  <?php	  
				  }
				  ?>
				   <a class="readmore" style="color:#d14242;display:none"
                    id="cancelreq2<?php echo $cart->store_id ?>"  > 
                   Cancel Item Requested
                   </a> 
                   
                   <br />
                    
                                    </div>
            
             
            
            <div class="col-sm-12 col-md-8"  >
                            <div class="information-blocks" id="returnform<?php echo $cart->store_id ?>" style="display:none">
                                <div class="detail-info-lines border-box">
                                 
                                    <h3 class="cart-column-title" >Return | Replace </h3>
                <input type="hidden" id="prdid<?php echo $cart->store_id ?>" value="<?php echo $cart->prd_id ?>" />
                <input type="hidden" id="userid<?php echo $cart->store_id ?>" value="<?php echo $cart->user_id ?>" />
                <input type="hidden" id="orderno<?php echo $cart->store_id ?>" value="<?php echo $cart->order_no ?>" /> 
                                       
                                       
                                            <label>Choose a reason</label>
                                            <div class="simple-drop-down simple-field size-1">
                                                <select id="reason<?php echo $cart->store_id ?>">
                                                    <option value="Looks different from image on site">Looks different from image on site	</option>
                                                    <option value="Arrived too late">Arrived	too late</option>
                                                    <option value="Poor quality or Faulty">Poor quality or faulty</option>
                                                    <option value="Quality not as expected">Quality not as expected</option>
                                                    <option value="Incorrect item received">Incorrect item received</option>
                                                    <option value="Broken or Damaged">Broken or Damaged</option>
                                                </select>
                                            </div>
                                                                                        
                                            <label>Quantity</label>
                                            <div class="simple-drop-down simple-field size-1">
                                            
                                            
                                        <select id="qty<?php echo $cart->store_id ?>">
                                        <?php
										for($i=1;$i<=$cart->Qty;$i++)
										{
										?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php
										}
										?> 
                                        </select>
                                            </div>
                                            
                                       <label>Request Type</label>
                                            <div class="simple-drop-down simple-field size-1">
                                        <select id="rtype<?php echo $cart->store_id ?>">
                                       
                                            <option value="Refund">Refund</option>
                                            <option value="Replace">Replace</option>
                                      
                                        </select>
                                            </div> 
                                            
                                            
                                            <label>Request Description<span>*</span></label>
                                            <textarea class="simple-field size-1" placeholder="Your message content (required)" id="msg<?php echo $cart->store_id ?>"></textarea>

                                            <div style="margin-top: 10px;" class="button style-12">Submit<input type="submit" onclick="submitrequest(<?php echo $cart->store_id ?>)"></div>
                                        	 
                                 
                                 </div>
                            </div>
                        </div>
            
            
                      
                                </div>                
  			
             <div class="message-box message-success" id="success<?php echo $cart->store_id ?>" style="display:none">
                        <div class="message-icon"><i class="fa fa-check"></i></div>
                        <div class="message-text" ><b>Done !</b> Your <span id="msgtxt<?php echo $cart->store_id ?>"></span> Request Has Been Submitted Successfully ! We'll Sortly Update You .</div>
                        <div class="message-close"><i class="fa fa-times"></i></div>
                    </div>
            
            
                           <div class="message-box message-danger" id="warning<?php echo $cart->store_id ?>" style="display:none">
                        <div class="message-icon"><i class="fa fa-times"></i></div>
                        <div class="message-text"> Do you really want to cancel this item ?
  <span class="inline-label green" style="cursor:pointer" id="wyes<?php echo $cart->store_id ?>" onclick="cancelproductyes(<?php echo $cart->store_id ?>)">Yes</span>
  <span class="inline-label red " style="cursor:pointer"  onclick="removewarning(<?php echo $cart->store_id ?>)">No</span>       
                        </div>
                        <div class="message-close"><i class="fa fa-times"></i></div>
                 
                    </div>
                    
            	<?php
				}
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
							        </div>
                                </div>
                            </div>
                            <div class="tabs-entry">
                                <div class="article-container style-1">
                                    <div class="row">
                                        <div class="col-md-12 information-entry">
                                        <?php
						if(count($activeorder)=="0")
						{
										echo "<h4 style='color:#ca1515'>Sorry ! Currently You Have Not Given Any Order .</h4>";	
				
						}
						foreach($activeorder as $order)
						{
						?>  
		                   <div class="blog-landing-box type-3">
                                        
						<?php
                        $onlydate=substr($order->order_date,0,10);
                        $day=substr($onlydate,8,2);
                        
                        $yrdata= strtotime($onlydate);
                        $month=date('M', $yrdata);
                        
                        //	 $onlytime;
                        $onlytime=date('h:i A',strtotime($order->order_date));;
                        $time=substr($onlytime,0,6);	
                        ?>
                                            
                                             <div class="blog-entry">
                                    <a class="image hover-class-1" href="#"><img src="<?php echo base_url() ?>img/order2.png" alt="" /><span class="hover-label">See My Product</span></a>
                                    <div class="date"><?php echo $day; ?><span><?php echo $month ?></span></div>
                                    <div class="content">
                                        <a class="title" href="#">Order No : #<?php echo $order->order_no ?></a>
                                        
                                        <div class="subtitle">
                                        
                                        Posted <?php echo $onlytime ?>, 
										<?php echo date('F j, Y',strtotime($onlydate)) ?> by <a href="#"><b><?php echo ucfirst($order->user_name)." ".ucfirst($order->user_lastname); ?></b></a>  /  Category: <a href="#">Fashion</a></div>
                                        <div class="description">
                                        Delivery Address :
										<?php
										 echo $order->user_address;
										?>
                                        
                                        <br>
                                        Delivery Status : <a><?php echo $order->order_status; ?></a>                                      
                                    <div class="content">
                                   
                                        </div>
                                   </div>    

             
                <div class="accordeon-title">See My Products</div>
                <div class="accordeon-entry">
                <div class="article-container ">
                <?php
				$this->db->where('user_id',$this->session->userdata('c_userid'));
				$this->db->where('order_no',$order->order_no);
				$scart=$this->db->get('store_cart')->result();
				
				foreach($scart as $cart)
				{
					$pid=$cart->prd_id;
					$this->db->where('prd_id',$pid);
					$product=$this->db->get('product')->row();
				?>	
  
  
  				<div class="blog-entry" >
                                    <a style="height:150px;width:150px" class="image hover-class-2" href="#">
                                    <img src="<?php echo base_url() ?>/Admin/product/<?php echo $product->prd_img1 ?>" alt=""  style="height:150px;width:150px"/></a>
                                    <div class="content" style="text-align:left" >
                                        <a href="#">
										<b style="font-size:16px" >
										<?php echo $product->prd_name ?>
                                        </b>
                                       </a> 
                                        <div class="subtitle">
                                    </div>
                  
                  <div class="description">
                  size : <?php echo $cart->size ?> | Qty   : <?php echo $cart->Qty ?> 
                  
                  <br>
                  <b > &#8377;<?php echo $cart->total_amt ?> </b>
                  <span style="text-decoration:line-through"> &#8377;<?php echo $product->prd_price ?></span>  </span>
                 <br />
                 Expected Delivery (<?php 
										echo date('F j, Y',strtotime($order->expected_date));
				
					?>)					
                 
                  </div>
                  
                  <?php
				  
				  	  
					  	  if($cart->storestatus=="Active")
						  {
						  ?>
						   <a class="readmore" id="cancelbutton<?php echo $cart->store_id ?>"  onclick="cancelproduct(<?php echo $cart->store_id ?>)">Cancel Product</a>
						  <?php
						  }
						  if($cart->storestatus=="Cancel")
						  {
						  ?> 
						   
						   <a class="readmore" style="color:#d14242;" id="cancelreq<?php echo $cart->store_id ?>"  >
						   Cancel Item Requested</a>
						  <?php
						  }
						  if($cart->storestatus=="Confirmed")
						  {
						  ?>
						   <a class="readmore" style="color:#093;" id="cancelreq<?php echo $cart->store_id ?>"  >Cancel Request Accepted</a>
						  <?php
						  }
						
					?>
                   <a class="readmore" style="color:#d14242;display:none"
                    id="cancelreq2<?php echo $cart->store_id ?>"  > 
                   Cancel Item Requested
                   </a> 
                   
                   
                    
                                    </div>
                      
                                </div>                
  			
            
                           <div class="message-box message-danger" id="warning<?php echo $cart->store_id ?>" style="display:none">
                        <div class="message-icon"><i class="fa fa-times"></i></div>
                        <div class="message-text"> Do you really want to cancel this item ?
  <span class="inline-label green" style="cursor:pointer" id="wyes<?php echo $cart->store_id ?>" onclick="cancelproductyes(<?php echo $cart->store_id ?>)">Yes</span>
  <span class="inline-label red " style="cursor:pointer"  onclick="removewarning(<?php echo $cart->store_id ?>)">No</span>       
                        </div>
                        <div class="message-close"><i class="fa fa-times"></i></div>
                 
                    </div>
            	<?php
				}
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
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-entry">
                                <div class="article-container style-1">
                                    <div class="row">
                                     
                                     
                                     
                                        <div class="col-md-12 information-entry">
                                            <h4>REPLACEMENT POLICY</h4>
                                            
                                            
                                            
                <div class="article-container ">
                <?php
				$this->db->where('user_id',$this->session->userdata('c_userid'));
				$this->db->where('request_type','Replace');
				$this->db->order_by('request_id','desc');
				$scart=$this->db->get('return_replace')->result();
				
				if(count($scart)==0)
				{
					echo "<h4 style='color:#ca1515'> No Product Has Been Asked For Replacement ! </h4>";	
				}
				
				foreach($scart as $cart)
				{
					$pid=$cart->prd_id;
					$this->db->where('prd_id',$pid);
					$product=$this->db->get('product')->row();
				?>	
  					
  				
  				<div class="blog-entry" >
                                    <a  class="image hover-class-2" href="#">
                                    <img src="<?php echo base_url() ?>/Admin/product/<?php echo $product->prd_img1 ?>" alt=""  style="height:150px;width:150px;"/></a>
                                    
	                                 <b style="font-size:16px;color:#ca1515">Order Number : #<?php echo $cart->order_no ?> </b><br />
                                        <a href="#">
										<b style="font-size:16px" >
										<?php echo $product->prd_name ?>
                                        </b>
                                       </a> 
                                        <div class="subtitle">
                                    </div>
                  
                  <div class="description">
                  Request Type : <?php echo $cart->request_type ?> | Qty   : <?php echo $cart->request_prd_qty ?> 
                  
                  <br>
                  <b > Reason : <?php echo $cart->request_resion ?> </b>
                  <br />
                  <b >Description : <?php echo $cart->request_description ?> </b>
                  <br />
                  <b >Request Date : <?php echo date('F j, Y',strtotime($cart->request_date)); ?> </b>
                 
                  </div>
                  
				  
				  	  
						   <a class="readmore"><?php echo $cart->request_progress ?></a>
					
                    
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
                                         <h4>REFUND POLITY</h4>
                                         
                                         <div class="article-container ">
                <?php
				$this->db->where('user_id',$this->session->userdata('c_userid'));
				$this->db->where('request_type','Refund');
				$this->db->order_by('request_id','desc');
				$scart=$this->db->get('return_replace')->result();
				
				if(count($scart)==0)
				{
					echo "<h4 style='color:#ca1515'> No Records Found For Refund ! </h4>";	
				}
				
				foreach($scart as $cart)
				{
					$pid=$cart->prd_id;
					$this->db->where('prd_id',$pid);
					$product=$this->db->get('product')->row();
				?>	
  
  
  				<div class="blog-entry" >
                                    <a  class="image hover-class-2" href="#">
                                    <img src="<?php echo base_url() ?>/Admin/product/<?php echo $product->prd_img1 ?>" alt=""  style="height:150px;width:150px;"/></a>
                                        <a href="#">
	                                 <b style="font-size:16px;color:#ca1515">Order Number : #<?php echo $cart->order_no ?> </b><br />
    								
                                    
                                    	<b style="font-size:16px" >
										<?php echo $product->prd_name ?>
                                        </b>
                                       </a> 
                                        <div class="subtitle">
    
                                    </div>
                  
                  <div class="description">
                  Request Type : <?php echo $cart->request_type ?> | Qty   : <?php echo $cart->request_prd_qty ?> 
                  
                  <br>
                 
                  <b > Reason : <?php echo $cart->request_resion ?> </b>
                  <br />
                  <b >Description : <?php echo $cart->request_description ?> </b>
                  <br />
                  <b >Request Date : <?php echo date('F j, Y',strtotime($cart->request_date)); ?> </b>
                 
                  </div>
                  
                  		   <a class="readmore"><?php echo $cart->request_progress ?></a>
				
                   
                    
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
                
                
          
    
                
                
                

<script>

function returnreplace(scid)
{

	$("#returnform"+scid).show();
	$("#lableretrep"+scid).hide();
}
function cancelproduct(sid)
{
	$("#warning"+sid).show();	
}
function removewarning(wnid)
{
	$("#warning"+wnid).hide();
}

function cancelproductyes(storecid)
{
	$.ajax({
			url:"<?php echo site_url() ?>/usercontroller/cancelproduct/"+storecid,
			method:"post",
			success: function(res)
			{
					$("#cancelreq2"+storecid).show();	
			
				if(res=="1")
				{
					$("#warning"+storecid).hide();
					$("#cancelbutton"+storecid).hide();
	
				}
			}
		
	});
}

function submitrequest(smid)
{
	var prdid=$("#prdid"+smid).val();
	var userid=$("#userid"+smid).val();
	var orderno=$("#orderno"+smid).val();
	var reason=$("#reason"+smid).val();
	var qty=$("#qty"+smid).val();
	var msg=$("#msg"+smid).val();
	var rtype=$("#rtype"+smid).val();
	var nreason=reason.replace(/%20/g, " ");
	$.ajax({
				url:"<?php echo site_url() ?>/usercontroller/refundreplace/"+prdid+"/"+userid+"/"+orderno+"/"+nreason+"/"+qty+"/"+msg+"/"+rtype+"/"+smid,
				method:"post",
				success: function(res)
				{
					$("#returnform"+smid).hide();
					
					$("#success"+smid).show();
					$("#msgtxt"+smid).html(rtype);
				}
			});
}

</script> 
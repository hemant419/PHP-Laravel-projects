 <!-- Content -->
  <div id="content"> 
    
    <!-- Ship Process -->
    <div class="ship-process padding-top-30 padding-bottom-30">
      <div class="container">
        <ul class="row">
          
          <!-- Step 1 -->
          <li class="col-sm-3">
		  	<a href="<?php echo site_url() ?>/Welcome/viewcart">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Step 1</span>
              <h6>Shopping Cart</h6>
            </div>
			</a>
          </li>
          
          <!-- Step 2 -->
          <li class="col-sm-3">
		  	<a href="<?php echo site_url() ?>/addTocartcontrol/payment">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Step 2</span>
              <h6>Payment Methods</h6>
            </div>
			</a>
          </li>
          
          <!-- Step 3 -->
          <li class="col-sm-3">
		  	<a href="<?php echo site_url() ?>/addTocartcontrol/Delivery">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Step 3</span>
              <h6>Delivery Methods</h6>
            </div>
			</a>
          </li>
          
          <!-- Step 4 -->
          <li class="col-sm-3 current">
		  	 <a href="<?php echo site_url() ?>/addTocartcontrol/confirmation">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Step 4</span>
              <h6>Confirmation</h6>
            </div>
				</a>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Payout Method -->
    <section class="padding-bottom-60">
      <div class="container"> 
        <!-- Payout Method -->
        <div class="pay-method check-out"> 
          
          <!-- Shopping Cart -->
          <div class="heading">
            <h2>Shopping Cart</h2>
            <hr>
          </div>
		    <section class="shopping-cart padding-bottom-40">
     
        <table class="table">
          <thead>
            <tr>
              <th>Items</th>
              <th class="text-center">Price</th>
              <th class="text-center">Quantity</th>
              <th class="text-center">Total Price </th>
              
            </tr>
          </thead>
          <tbody>
            
            <!-- Item Cart -->
			<?php $a=0; 
			foreach($orderdata as $dataorder) 
			{ 
			
			$a=$a+$dataorder->totalamunt;
			
			
			$this->db->where('product_id',$dataorder->product_id);
			$imgsrc=$this->db->get('productimage')->row();	
	
				 ?>
          
            <tr>
              <td><div class="media">
                  <div class="media-left"> <a href=""> 
	<img class="img-responsive" src="<?php echo base_url() ?>/admin/images/<?php echo $imgsrc->image ?>" alt="" > </a> </div>
          <div class="media-body">
                    <p><?php echo $dataorder->product_description?></p>
                  </div>
                </div></td>
              <td class="text-center padding-top-60">&#8377 <?php echo $dataorder->product_price ?></td>
              <td class="text-center"><!-- Quinty -->
                
                <div class="quinty padding-top-20">
                  <input readonly="readonly" type="number" value="<?php echo $dataorder->qty ?>">
                </div></td>
              <td class="text-center padding-top-60">&#8377 <?php echo $dataorder->totalamunt  ?></td>
              
            </tr>
            <?php
			 }?>
          </tbody>
        </table>
        
        <!-- Promotion -->
     
	
		 <div class="promo">
          <div class="coupen">
            <label> <b>Cupon Discount</b>:
             &#8377 <?php echo $this->session->userdata("cupon_discount")?>
            </label>
          </div>
          
          <!-- Grand total -->
          <div class="g-totel">
            <h5>Grand total: <span>&#8377 <?php echo $a-$this->session->userdata("cupon_discount")?></span></h5>
          </div>
        </div>
        
    </section>  
          <!-- Payment information -->
                    
          <!-- Check Item List -->

          <ul class="row check-item">
            <li class="col-xs-6">
              <p><img class="margin-right-20" src="images/visa-card.jpg" alt=""> Cash On Delivery</p>
            </li>
            <li class="col-xs-6 text-center">
              <p> <b>Grand Total </b>: <?php echo $a+$this->session->userdata('delivery') ?></p>
            </li>
          </ul>
          
          <!-- Delivery infomation -->
          <div class="heading margin-top-50">
            <h2>Delivery infomation</h2>
            <hr>
          </div>
          
          <!-- Information -->
          <ul class="row check-item infoma">
            <li class="col-sm-3">
              <h6>Name</h6>
              <span><?php echo $this->session->userdata('name'); ?></span> </li>
            <li class="col-sm-3">
              <h6>Phone</h6>
              <span><?php  echo $this->session->userdata('phone'); ?></span> </li>
           
            <li class="col-sm-3">
              <h6>Email</h6>
              <span><?php echo $this->session->userdata('Useremail'); ?></span> </li>
            <li class="col-sm-3">
              <h6>Zipcode</h6>
              <span><?php echo $this->session->userdata('pincode'); ?></span> </li>
			 <li class="col-sm-6">
              <h6>Address</h6>
              <span><?php 	  
			  
			  $data=preg_split("/!/",$this->session->userdata('address')); 
						echo $data[0]."<br>".$data[1]."<br>".$data[2]."<br>".$data[3]."<br>";?></span> </li>	  
            <li class="col-sm-6">
              <h6>Shipping Address</h6>
              <span><?php 
			  
			   $data=preg_split("/!/",$this->session->userdata('saddress')); 
						echo $data[0]."<br>".$data[1]."<br>".$data[2]."<br>".$data[3]."<br>";
			  ?></span> </li>
          </ul>
          <!-- Information -->
		  
          <ul class="row check-item infoma exp">
            <li class="col-sm-6"> <span>Expert Delivery</span> </li>
            <li class="col-sm-3">
              <h6>24 - 48 hours</h6>
            </li>
            <li class="col-sm-3">
              <h5>+ <?php $b=$this->session->userdata('delivery'); ?><?php echo $b ?></h5>
            </li>
          </ul>
		  
		  <?php $j=$this->session->userdata("cupon_discount");
				$a=$a-$j;
			 ?>
			 <?php 
			 $c=$a+$b;
			 ?>
          <!-- Totel Price -->
          <div class="totel-price">
            <h4><small> Total Price: </small> 
			<small>&#8377 </small><?php echo $c ?></h4>
          </div>
        </div>
        
        <!-- Button -->
        <div class="pro-btn"> 
			<a href="#." class="btn-round btn-light">Back to Delivery</a> 
			<a href="<?php echo site_url() ?>/addTocartcontrol/insertorder/" class="btn-round">Proceed to Checkout</a> </div>
      </div>
    </section>
    
     </div>
  <!-- End Content --> 

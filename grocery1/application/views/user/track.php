<div id="content"> 
    
    <!-- Ship Process -->
    <div class="ship-process padding-top-30 padding-bottom-30">
      <div class="container">
        <ul class="row">
         <?php  $track=""; foreach($trackOf as $dataorder) {$track= $dataorder->o_statas ;} ?>
          <!-- Step 1 -->
          <li class="col-sm-3 <?php if($track=="Pending"){ ?> current <?php }?>">
            <div class="media-left"> <i class="flaticon-shopping"></i> </div>
            <div class="media-body"> <span>Step 1</span>
              <h6>Pending</h6>
            </div>
          </li>
          
          <!-- Step 2 -->
          <li class="col-sm-3 <?php if($track=="Confirm"){ ?> current <?php }?>">
            <div class="media-left"> <i class="flaticon-business"></i> </div>
            <div class="media-body"> <span>Step 2</span>
              <h6>Process</h6>
            </div>
          </li>
          
          <!-- Step 3 -->
          <li class="col-sm-3 <?php if($track=="Dispatch"){ ?> current <?php }?>">
            <div class="media-left"> <i class="flaticon-delivery-truck"></i> </div>
            <div class="media-body"> <span>Step 3</span>
              <h6>Dispacth</h6>
            </div>
          </li>
          
          <!-- Step 4 -->
          <li class="col-sm-3 <?php if($track=="Delivered"){ ?> current <?php }?>">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Step 4</span>
              <h6>Delivered</h6>
            </div>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Shopping Cart -->
    <section class="shopping-cart padding-bottom-60">
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th>Items</th>
              <th class="text-center">Price</th>
              <th class="text-center">Quantity</th>
              <th class="text-center">Total Price </th>
              <th>&nbsp; </th>
            </tr>
          </thead>
          <tbody>
            
            <!-- Item Cart -->
			<?php $a=0;$cuponDis=0;$delivery=0;
			 foreach($trackOf as $dataorder) { 
			 $a=$a+$dataorder->totalamount;
			 
			 
			 			$this->db->where('product_id',$dataorder->product_id);
					$imgsrc=$this->db->get('productimage')->row();	
			
			  ?>
          
            <tr>
              <td><div class="media">
                  <div class="media-left"> <a href=""> 
	<img class="img-responsive" 
    src="<?php echo base_url() ?>/admin/images/<?php echo $imgsrc->image ?>" alt="" > </a> </div>
                  <div class="media-body">
                    <p><?php echo $dataorder->product_description?></p>
                  </div>
                </div></td>
              <td class="text-center padding-top-60">&#8377 <?php echo $dataorder->product_price ?></td>
              <td class="text-center"><!-- Quinty -->
                
                <div class="quinty padding-top-20">
                  <input type="number" value="<?php echo $dataorder->qty ?>">
                </div></td>
              <td class="text-center padding-top-60">&#8377 <?php echo $dataorder->totalamount  ?></td>
              <td class="text-center padding-top-60"><a href="#." class="remove"><i class="fa fa-close"></i></a></td>
            </tr>
            <?php
			$cuponDis=$dataorder->cuponamount ;
			$delivery=$dataorder->deliverycharg ;
			 }?>
          </tbody>
        </table>
        
        <!-- Promotion -->
        <div class="promo">
          <div class="coupen">
            <label> <b>Cupon Discount</b>:
             &#8377 <?php echo $cuponDis ;?>
            </label>
          </div>
		  <div class="coupen">
            <label> <b>Delivery Charges</b>:
             &#8377 <?php echo $delivery ;?>
            </label>
          </div>
          
          <!-- Grand total -->
          <div class="g-totel">
            <h5>Grand total: <span>&#8377 <?php echo $a-$cuponDis+$delivery?></span></h5>
          </div>
        </div>
        
        <!-- Button -->
    </section>
    
    <!-- Clients img -->
    
    <!-- Newslatter -->
    <section class="newslatter">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Subscribe our Newsletter <span>Get <strong>25% Off</strong> first purchase!</span></h3>
          </div>
          <div class="col-md-6">
            <form>
              <input type="email" placeholder="Your email address here...">
              <button type="submit">Subscribe!</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content --
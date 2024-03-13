<div id="content"> 
    
    <!-- Ship Process -->
    <div class="ship-process padding-top-30 padding-bottom-30">
      <div class="container">
        <ul class="row">
         <?php  $track=""; $track= $trackOf->p_status ; ?>
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
    <section class="shopping-cart padding-bottom-40">
      <div class="container">
	   <div class="col-md-8" >
		
        <table class="table" >
          <thead>
            <tr>
              <th >Items</th>
             </tr>
          </thead>
          <tbody>
            
            <!-- Item Cart -->
			
            <tr>
              <td><div class="media">
                  <div class="media-left"> <a href=""> 
	<img class="img-responsive" src="<?php echo base_url() ?>prisription/<?php echo $trackOf->prisriptionfile ?>" alt="" > </a> </div>
                  <div class="media-body">
				  	<b><h7>Shipping Address </h7></b><br />
                    <p><?php echo $trackOf->shipping; ?></p>
                  </div>
                </div></td>
            </tr>
            
          </tbody>
        </table>
        
        <!-- Promotion -->
        <div class="promo">
          <div class="coupen">
            <label> <b>Status </b>:<span style="color:#33CCFF"><?php echo $trackOf->p_status; ?></span>
            
            </label>
          </div>
		  <div class="coupen">
            <label> <b>Grand Total : </b>&#8377 <?php echo $trackOf->price; ?>
              <?php //echo $delivery ;?>
            </label>
          </div>
        </div>
		</div>           
    </section>
    
    
    </div>
  <!-- End Content --
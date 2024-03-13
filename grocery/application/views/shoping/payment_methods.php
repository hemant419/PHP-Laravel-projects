 <!-- Content -->
  <div id="content"> 
    
    <!-- Ship Process -->
    <div class="ship-process padding-top-30 padding-bottom-30">
      <div class="container">
        <ul class="row">
          
          <!-- Step 1 -->
          <li class="col-sm-3">
		  	<a href="<?php echo site_url() ?>/Welcome/viewcart">
            <div class="media-left"> <i class="flaticon-shopping"></i> </div>
            <div class="media-body"> <span>Step 1</span>
              <h6>Shopping Cart</h6>
            </div>
			</a>
          </li>
          
          <!-- Step 2 -->
          <li class="col-sm-3 current">
		  	<a href="<?php echo site_url() ?>/addTocartcontrol/payment">
            <div class="media-left"> <i class="flaticon-business"></i> </div>
            <div class="media-body"> <span>Step 2</span>
              <h6>Payment Methods</h6>
            </div>
			</a>
          </li>
          
          <!-- Step 3 -->
          <li class="col-sm-3">
		  <a href="<?php echo site_url() ?>/addTocartcontrol/Delivery">
            <div class="media-left"> <i class="flaticon-delivery-truck"></i> </div>
            <div class="media-body"> <span>Step 3</span>
              <h6>Delivery Methods</h6>
            </div>
			</a>
          </li>
          
          <!-- Step 4 -->
          <li class="col-sm-3">
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
        <div class="pay-method">
          <div class="row">
            <div class="col-md-6"> 
              
              <!-- Your Card -->
              <div class="heading">
                <h2>I am Not Robot</h2>
                <hr>
              </div>
			  <script src='https://www.google.com/recaptcha/api.js'></script>
               <form action="<?php echo site_url()?>/addTocartcontrol/iamnotrobot" method="POST">
			   <p style="color:red"><?php echo $erroRobot?></p>
   <div class="g-recaptcha" data-sitekey="6Lcnm04UAAAAAO_eybUf_TcGPctS0_wJAuacNGCC"></div>
      <br/>
      <input type="submit" value="Submit"  class="btn-round">
    </form>
			  
			  
			  </div>
            <div class="col-md-6"> 
              
              <!-- Your information -->
             
              
            </div>
          </div>
        </div>
        
        <!-- Button -->
        <div class="pro-btn">
		 <a href="<?php echo site_url() ?>/Welcome/viewcart" class="btn-round btn-light">Back to Shopping Cart</a> 
		 </div>
      </div>
    </section>
    
    
  </div>
  <!-- End Content -->
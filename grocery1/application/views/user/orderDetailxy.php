<!-- Content -->
  <div id="content"> 
    
    <!-- Products -->
    <section class="padding-top-40 padding-bottom-60">
      <div class="container">
        <div class="row"> 
          
          <!-- Shop Side Bar -->
          <div class="col-md-3">
            <div class="shop-side-bar"> 
              
              <!-- Categories -->
              <h6>Categories</h6>
              <div class="checkbox checkbox-primary">
                <ul>
                  <li>
                    <input id="cate1" class="styled" type="checkbox" >
                    <label for="cate1"> Home Audio & Theater </label>
                  </li>
                </ul>
              </div>
              
              <!-- Featured Brands -->
              <h6>Featured Brands</h6>
              <div class="checkbox checkbox-primary">
                <ul>
                  <li>
                    <input id="brand1" class="styled" type="checkbox" >
                    <label for="brand1"> Apple <span>(217)</span> </label>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <!-- Products -->
          <div class="col-md-9"> 
		  	
            <!-- Items -->
            <div class="col-list"> 
              <!-- Product -->
			  <?php foreach($orderDetail as $wishresult) {?>
              <div class="product">
                <article>                   
                  <!-- Product img -->
                  <div class="media-left">
                    <div class="item-img"> <img class="img-responsive" src="<?php echo base_url()?>satish/images/<?php echo $wishresult->image ?>" alt="" >  </div>
                  </div>                  
                  <!-- Content -->
                  <div class="media-body">
                    <div class="row">                       
                      <!-- Content Left -->
                      <div class="col-sm-7">
					   <span class="tag"><?php echo $wishresult->product_name ?></span> 
					   <a href="#." class="tittle"><?php echo $wishresult->product_description ?></a> 
                         <ul class="bullet-round-list">
                         <p>Qty:<td class="text-center padding-top-60"><?php echo $wishresult->qty ?></td></p>
                         </ul>
                      </div>                      
                      <!-- Content Right -->
                      <div class="col-sm-5 text-center"> <a href="#." class="heart"><i class="fa fa-heart"></i></a> <a href="#." class="heart navi"><i class="fa fa-navicon"></i></a>
					  
                        <div class="position-center-center">
                          <div class="price"><?php echo $wishresult->totalamount ?></div>
                         <a href="#." class="btn-round"><i class="icon-basket-loaded"></i> Add to Cart</a> </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
			  <?php } ?>
              <!-- Product -->
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Your Recently Viewed Items -->
    
  
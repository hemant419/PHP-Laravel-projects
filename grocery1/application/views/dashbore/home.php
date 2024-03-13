<!-- Slid Sec -->
  <section class="slid-sec">
    <div class="container">
      <div class="container-fluid">
        <div class="row"> 
          
          <!-- Main Slider  -->
          <div class="col-md-12 no-padding"> 
            
            <!-- Main Slider Start -->
            <div class="tp-banner-container">
              <div class="tp-banner">
                <ul>
                  
                  <!-- SLIDE  -->
				  <?php foreach($alldata as $getdata) { ?>
                  <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
                    <!-- MAIN IMAGE --> 
                    <img src="<?php echo base_url()?>admin/sliderimage/<?php echo $getdata->slider_image; ?>"  alt="slider"  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="-110" 
                                     data-speed="800" 
                                     data-start="800" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:30px; font-weight:500; color:#888888;  max-width: auto; max-height: auto; white-space: nowrap;"></div>
                    
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="-60" 
                                     data-speed="800" 
                                     data-start="1000" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 

                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 6; font-size:50px; color:#0088cc; font-weight:800; white-space: nowrap;"></div>
                    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption sfl tp-resizeme" 
                                     data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="0" 
                                     data-speed="800" 
                                     data-start="1200" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="none" 
                                     data-splitout="none" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     style="z-index: 7;  font-size:24px; color:#888888; font-weight:500; max-width: auto; max-height: auto; white-space: nowrap;"></div>
                    
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption sfr tp-resizeme" 
                                     data-x="left" data-hoffset="240" 
                                     data-y="center" data-voffset=" -5" 
                                     data-speed="800" 
                                     data-start="1300" 
                                     data-easing="Power3.easeInOut" 
                                     data-splitin="chars" 
                                     data-splitout="none" 
                                     data-elementdelay="0.03" 
                                     data-endelementdelay="0.4" 
                                     data-endspeed="300"
                                     style="z-index: 5; font-size:36px; font-weight:800; color:#000;  max-width: auto; max-height: auto; white-space: nowrap;"></div>
                    
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lfb tp-resizeme scroll" 
                                      data-x="left" data-hoffset="60" 
                                     data-y="center" data-voffset="80"
                                     data-speed="800" 
                                     data-start="1300"
                                     data-easing="Power3.easeInOut" 
                                     data-elementdelay="0.1" 
                                     data-endelementdelay="0.1" 
                                     data-endspeed="300" 
                                     data-scrolloffset="0"
                                     style="z-index: 8;"><a href="#." class="btn-round big">Shop Now</a> </div>
                  </li>
				  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
          
          <!-- Main Slider  -->
          <div class="col-md-3 no-padding" style="display:none"> 
            
            <!-- New line required  -->
            <div class="product">
              <div class="like-bnr">
                <div class="position-center-center">
                  <h5>New line required</h5>
                  <h4>Smartphone s7</h4>
                  <span class="price">$259.99</span> </div>
              </div>
            </div>
            
            <!-- Weekly Slaes  -->
            <div class="week-sale-bnr">
              <h4>Weekly <span>Sale!</span></h4>
              <p>Saving up to 50% off all online
                store items this week.</p>
              <a href="#." class="btn-round">Shop now</a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Shipping Info -->
    <section class="shipping-info">
      <div class="container">
        <ul>
          
          <!-- Free Shipping -->
          <li>
            <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
            <div class="media-body">
              <h5>Free Shipping</h5>
              <span>On order over 1000 Rs.</span></div>
          </li>
          <!-- Money Return -->
          <li>
            <div class="media-left"> <i class="flaticon-arrows"></i> </div>
            <div class="media-body">
              <h5>Money Return</h5>
              <span>30 Days money return</span></div>
          </li>
          <!-- Support 24/7 -->
          <li>
            <div class="media-left"> <i class="flaticon-operator"></i> </div>
            <div class="media-body">
              <h5>Support 24/7</h5>
              <span>Hotline: (+91)8460567574</span></div>
          </li>
          <!-- Safe Payment -->
          <li>
            <div class="media-left"> <i class="flaticon-business"></i>* </div>
            <div class="media-body">
              <h5>Safe Payment</h5>
              <span>Cash on Delivery</span></div>
          </li>
        </ul>
      </div>
    </section>
    
    <!-- tab Section -->
    <section class="featur-tabs padding-top-60 padding-bottom-60">
      <div class="container"> 
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
          <li role="presentation" class="active">
          	<a href="#special" aria-controls="special" role="tab" data-toggle="tab">New Deals</a>
          </li>
          <li role="presentation">
          	<a href="#on-sal" aria-controls="on-sal" role="tab" data-toggle="tab">Fresh Items</a>
          </li>
          <li role="presentation" >
        	<a href="#featur" aria-controls="featur" role="tab" data-toggle="tab">More Saving</a>
          </li>
          
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content"> 
          
<script>
function Addtocart(id)
{
	$.ajax({
		url:"<?php echo site_url() ?>/Welcome/addtocartdata/"+id,
		success:function(data)
		{
			//alert(data);
			//$("#cart").html(data);
			$("#cart1").hide();
			$("#cart2").html(data);
		}
	});
} 
function wishlist(id)
{
	//alert(id);
	$.ajax({
		url:"<?php echo site_url() ?>/Welcome/addtowishlist/"+id,
		success:function(date)
		{
		$("#wish").hide();
			
			$("#swish").html(date);
		} 
	});
}

</script>
          
          <!-- Special -->
                   <?php
				//   			   echo "<pre>";
			   //	print_r($CancerOncology);
			   
				   ?>
       <div role="tabpanel" class="tab-pane active fade in" id="special"> 
            <!-- Items Slider -->
  
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav"> 
 
               <?php

			    foreach($CancerOncology as $data) 
			   { 
				$this->db->where('product_id',$data->product_id);
			  	$mydata=$this->db->get('productimage')->row();
			 	
			 
			   ?>
              <!-- Product -->
              <div class="product">
              
                <article> 
                <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle">
                <img class="button two" src="<?php echo base_url()?>admin/images/<?php echo $mydata->image ?>" alt="" >
                 
                  <!-- Content --> 
                  <span class="tag"><?php echo $data->product_name ?></span> 
				  <?php echo substr($data->product_description,0,20) ?></a> 
                  <!-- Reviews -->
                  <br />
                  <div class="price">&#8377; <?php echo $data->product_price ?></div>
           
                  <p id="cart"  onclick="Addtocart(<?php echo $data->product_id ?>)" class="cart-btn" >
				  <i class="icon-basket-loaded"></i>
					
				  </p> 
				  <p id="wish"  onclick="wishlist(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="fa fa-heart"></i></p>
				  </article>
              </div>
			  <?php } ?>
            </div>
          </div>
          
                    
       <div role="tabpanel" class="tab-pane active fade in" id="on-sal"> 
            <!-- Items Slider -->
  
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav"> 
               <?php foreach($BladderProstateDisorders as $data) {
				   
				$this->db->where('product_id',$data->product_id);
			  	$data2=$this->db->get('productimage')->row();
			 	   
				   
				    ?>
              <!-- Product -->
              <div class="product">
                <article>
                <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" 
				  class="tittle">
				  
                 <img  src="<?php echo base_url()?>admin/images/<?php echo $data2->image ?>" alt="" > 
                  <!-- Content --> 
                  <span class="tag"><?php echo $data->product_name ?></span> 
				  <?php echo substr($data->product_description,0,20) ?></a> 
                  <!-- Reviews -->
                  <br /><!-- Reviews -->
                  <div class="price">&#8377; <?php echo $data->product_price ?></div>
                  <p id="cart"  onclick="Addtocart(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="icon-basket-loaded"></i>
				  </p> 
				  <p id="wish" onclick="wishlist(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="fa fa-heart"></i></p>
				   
				  </article>
              </div>
			  <?php } ?>
            </div>
          </div>
       
       <!-- Featured -->
          
       <div role="tabpanel" class="tab-pane active fade in" id="featur"> 
            <!-- Items Slider -->
            <div class="item-slide-5 with-nav"> 
              <!-- Product -->
			  <?php 
			 // print_r($AlcoholAddiction);
			  foreach($AlcoholAddiction as $data8) 
			  {
				  
				$this->db->where('product_id',$data8->product_id);
			  	$data3=$this->db->get('productimage')->row();
			 ?>
              <div class="product">
                <article>
                <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle">
				  
                 <img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php  echo  $data3->image ?>" alt="" > 
                  <!-- Content --> 
                  <span class="tag"><?php echo $data->product_name ?></span> 
				  <?php echo substr($data->product_description,0,20) ?></a> 
                  <!-- Reviews -->
                  <br />
                  <!-- Reviews -->
                  <div class="price">&#8377; <?php echo $data->product_price ?></div>
                  <p id="cart"  onclick="Addtocart(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="icon-basket-loaded"></i>
				  </p> 
				  <p id="wish" onclick="wishlist(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="fa fa-heart"></i></p>
				  
				 </article>
              </div>
			  <?php } ?>
            </div>
          </div>
		  
        </div>
      </div>
    </section>
    
    <!-- Top Selling Week -->
    <section class="light-gry-bg padding-top-60 padding-bottom-30">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>Top Selling of the Week</h2>
          <hr>
        </div>
        
        <!-- Items -->
        <div class="item-col-5"> 
          
          <!-- Product -->
          <!-- Product -->
		  <?php foreach($Depression as $data) { ?>
          <div class="product">
            <article> <img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $data->image ?>" alt="" > 
              
              <!-- Content --> 
              <span class="tag"><?php echo $data->product_name ?></span> <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle"><?php echo $data->product_description ?></a> 
              <!-- Reviews -->
              <div class="price">&#8377; <?php echo $data->product_price ?></div>
             	 <p id="cart"  onclick="Addtocart(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="icon-basket-loaded"></i>
				  </p> 
				  <p id="wish" onclick="wishlist(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="fa fa-heart"></i></p>
				 
			  </div>
          <?php } ?>
        </div>
      </div>
    </section>
    
    <!-- Main Tabs Sec -->
    <section class="main-tabs-sec padding-top-60 padding-bottom-0">
      <div class="container">
        <ul class="nav margin-bottom-40" role="tablist">
          <li role="presentation" class="active">
		  <a href="#tv-au" aria-controls="featur" role="tab" data-toggle="tab"> 
		  <img src="<?php echo base_url() ?>/icons/fruit.png" height="50" width="50" />
          <br />
          Fruits<span>Items</span></a> 
		  </li>
		  
          <li role="presentation">
		  	<a href="#smart" aria-controls="special" role="tab" data-toggle="tab">
            <img src="<?php echo base_url() ?>/icons/veg.png" height="50" width="50" />
            <br />
            Vegitables<span>Items</span></a>
		</li>
		
          <li role="presentation">
		  	<a href="#deks-lap" aria-controls="on-sal" role="tab" data-toggle="tab">
			 <img src="<?php echo base_url() ?>/icons/food.png" height="50" width="50" />
          <br />
          Foodgrains
         <span>Items</span></a>
		</li>
		
          <li role="presentation">
		  	<a href="#game-com" aria-controls="special" role="tab" data-toggle="tab">
            <img src="<?php echo base_url() ?>/icons/deiry.png" height="50" width="50" />
            <br />
            Dairy
            <span>items</span></a>
		</li>
		
         
         
         <li role="presentation">
		 	<a href="#access" aria-controls="on-sal" role="tab" data-toggle="tab">
			<img src="<?php echo base_url() ?>/icons/Beve.png" height="50" width="50" />
            <br />
            Beverages
            <span>items</span>
            </a>
		
        
        </li>
        
         <li role="presentation">
		 	<a href="#watches" aria-controls="on-sal" role="tab" data-toggle="tab">
		 	 <img src="<?php echo base_url() ?>/icons/meat.png" height="50" width="50" />
            <br />
            Meat & Fish
            <span>items</span>
           
           </a>
		 
         </li>
		 
		
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content"> 
          <!-- TV & Audios -->
          <div role="tabpanel" class="tab-pane active fade in" id="tv-au"> 
            
            <!-- Items -->
            <div class="item-slide-5 with-bullet no-nav" > 
              <!-- Product -->
			  <?php 
			 
			 $this->db->where('s_id',3);
			 $sofa=$this->db->get('product_master')->result();
			 foreach($sofa as $data) 
			  { 
			  
				$this->db->where('product_id',$data->product_id);
			  	$data2=$this->db->get('productimage')->row();
			  ?>
              <div class="product" >
                <article>
                <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle">
				 <img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $data2->image ?>" alt=""> 
                  <!-- Content --> 
                  <span class="tag"><?php echo $data->product_name ?></span> 
				  <?php echo substr($data->product_description,0,25) ?></a> 
                  <!-- Reviews -->
                  <br />
                   <div class="price">&#8377; <?php echo $data->product_price ?></div>
                 <p id="cart"  onclick="Addtocart(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="icon-basket-loaded"></i>
				  </p> 
				  <p id="wish" onclick="wishlist(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="fa fa-heart"></i></p>
				  </div>
				  <?php } ?>
             </div>
          </div>
          
          <!-- Smartphones -->
          <div role="tabpanel" class="tab-pane fade" id="smart"> 
            <!-- Items -->
            <div class="item-col-5"> 
              
              <!-- Product -->
			  <?php 
			 $this->db->where('s_id',2);
			 $beds=$this->db->get('product_master')->result();
			 foreach($beds as $data) 
			  { 
			  
				$this->db->where('product_id',$data->product_id);
			  	$data2=$this->db->get('productimage')->row();
			 
			 	 ?>
              <div class="product">
                <article>
                <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle">
                 <img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $data2->image ?>" alt=""> 
                  
                  <!-- Content --> 
                  <span class="tag"><?php echo $data->product_name ?></span> 
				  <?php echo substr($data->product_description,0,25) ?></a> 
                  <!-- Reviews -->
                  <br />
                  <!-- Reviews -->
                   <div class="price">&#8377; <?php echo $data->product_price ?></div>
                <p id="cart"  onclick="Addtocart(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="icon-basket-loaded"></i>
				  </p> 
				  <p id="wish" onclick="wishlist(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="fa fa-heart"></i></p>
				   </div>
			  <?php } ?>
            </div>
          </div>
          <!-- Desk & Laptop -->
          <div role="tabpanel" class="tab-pane fade" id="deks-lap"> 
            
            <!-- Items -->
            <div class="item-col-5"> 
              
              <!-- Product -->
			   <?php 
			   
			 $this->db->where('s_id',6);
			 $dining=$this->db->get('product_master')->result();
			 foreach($dining as $data) 
			  { 
			  
				$this->db->where('product_id',$data->product_id);
			  	$data2=$this->db->get('productimage')->row();
			 
			    ?>
              <div class="product">
                <article>
                <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle">
                 <img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $data2->image ?>" alt="" style="width:200px; height:200px;">
                  
                  <!-- Content --> 
                  <span class="tag"><?php echo $data->product_name ?></span> <?php echo substr($data->product_description,0,25) ?></a> 
                  <!-- Reviews -->
                  <br />
                  
                  <!-- Reviews -->
                   <div class="price">&#8377;
				   	<?php echo $data->product_price ?></div>
                <p id="cart"  onclick="Addtocart(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="icon-basket-loaded"></i>
				  </p> 
				  <p id="wish" onclick="wishlist(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="fa fa-heart"></i></p>
				   </div>
			  <?php } ?>
            </div>
          </div>
          <!-- Game Console -->
          <div role="tabpanel" class="tab-pane fade" id="game-com"> 
            
            <!-- Items -->
            <div class="item-col-5"> 
              <!-- Product -->
			   <?php
			   
					 $this->db->where('s_id',14);
					 $tv=$this->db->get('product_master')->result();
					 foreach($tv as $data) 
					  { 
			  
				$this->db->where('product_id',$data->product_id);
			  	$data2=$this->db->get('productimage')->row();
			 
			   
			   
			    ?>
              <div class="product">
                <article>
                 <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle">
                 <img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $data2->image ?>" alt=""> 
                  
                  <!-- Content --> 
                  <span class="tag"><?php echo $data->product_name ?></span>
                  <?php echo substr($data->product_description,0,25) ?></a> 
                  <!-- Reviews -->
                  <br />
                  
                  <!-- Reviews -->
                   <div class="price">&#8377; <?php echo $data->product_price ?></div>
                  <p id="cart"  onclick="Addtocart(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="icon-basket-loaded"></i>
				  </p> 
				  <p id="wish" onclick="wishlist(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="fa fa-heart"></i></p>
				   </div>
			  <?php } ?>
             
            </div>
          </div>
          <!-- Watches -->
          <div role="tabpanel" class="tab-pane fade" id="watches"> 
            
            <!-- Items -->
            <div class="item-col-5"> 
              
              <!-- Product -->
			  <?php
              
			  
			 $this->db->where('s_id',18);
			 $chr=$this->db->get('product_master')->result();
			 foreach($chr as $data) 
			  { 
			  
				$this->db->where('product_id',$data->product_id);
			  	$data2=$this->db->get('productimage')->row();
			 
			  
			  
			   ?>
              <div class="product">
                <article>
                 <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle">
                 <img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $data2->image ?>" alt=""> 
                  
                  <!-- Content --> 
                  <span class="tag"><?php echo $data->product_name ?></span>
                  
                  <?php echo substr($data->product_description,0,25) ?></a> 
                  <!-- Reviews -->
                  <br />
                  
                  <!-- Reviews -->
                    <div class="price">&#8377; <?php echo $data->product_price ?></div>
                <p id="cart"  onclick="Addtocart(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="icon-basket-loaded"></i>
				  </p> 
				  <p id="wish" onclick="wishlist(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="fa fa-heart"></i></p>
				  </div>
			  <?php } ?>
            </div>
          </div>
          <!-- Accessories -->
          <div role="tabpanel" class="tab-pane fade" id="access"> 
            
            <!-- Items -->
            <div class="item-col-5"> 
              
              <!-- Product -->
			  <?php
              
			 $this->db->where('s_id',21);
			 $books=$this->db->get('product_master')->result();
			 foreach($books as $data) 
			  { 
			  
				$this->db->where('product_id',$data->product_id);
			  	$data2=$this->db->get('productimage')->row();
			 
			  
			  
			  ?>
              <div class="product">
                <article>
                <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle">
                  
                 <img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $data2->image ?>" alt=""> 
                  
                  <!-- Content --> 
                  <span class="tag"><?php echo $data->product_name ?></span> 
                  <?php echo substr($data->product_description,0,25) ?></a> 
                  <!-- Reviews -->
                  <br />
                  
                  <!-- Reviews -->
                   <div class="price" style="width:200px; height:30px;">
				   &#8377; <?php echo $data->product_price ?></div>
                <p id="cart"  onclick="Addtocart(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="icon-basket-loaded"></i>
				  </p> 
				  <p id="wish" onclick="wishlist(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="fa fa-heart"></i></p>
				      </div>
			   <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Top Selling Week -->
    
    </div>
  <!-- End Content --> 
  
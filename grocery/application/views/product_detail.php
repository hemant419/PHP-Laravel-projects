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
					<?php
					 foreach($subcategory as $process) 
					{
					?>
                  <li>
                    <input id="cate<?php echo $process->s_id ?>" class="styled" type="checkbox" >
                    <label for="cate<?php echo $process->s_id ?>"><?php echo $process->s_name ?> </label>
                  </li>
				  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
          
          <!-- Products -->
          <div class="col-md-8">
            <div class="product-detail">
              <div class="product">
                <div class="row"> 
                  <!-- Slider Thumb -->
                  <div class="col-xs-8">
                    <article class="slider-item on-nav">
                      <div class="thumb-slider">
                        <ul class="slides">
 <?php
 	  		  	$this->db->where('product_id',$viewdata->product_id);
			  	$viewdata3=$this->db->get('productimage')->result();
				foreach($viewdata3 as $viewdata2)
				{
?>
			 
                          <li data-thumb="<?php echo base_url()?>admin/images/<?php 
						  echo $viewdata2->image ?>"> 						 							<img src="<?php echo base_url()?>admin/images/<?php echo $viewdata2->image ?>" alt="" style="height:400px;"> 						  </li>
				
            <?php
				}
			?>		
                		</ul>
                      </div>
                    </article>
                  </div>
                  <!-- Item Content -->
                  <div class="col-xs-7"> <span class="tags"><h3><?php echo $viewdata->product_name ?></h3></span>

                    <div class="row">
                      <div class="col-sm-6">
					  	<span class="price">&#8377 <?php  echo $viewdata->product_price ?> </span></div>
                      
					  <?php if($viewdata->stock==0) { ?>
					  <div class="col-sm-6">
                        <p>Availability: <span class="in-stock" style="color:#FF0000;">Out stock</span></p>
                      </div>
					  <?php } else { ?>
					  <div class="col-sm-6">	
                        <p>Availability: <span class="in-stock">In stock</span></p>
                      </div>
					  <?php } ?>
                    </div>
                   
                    <!-- Compare Wishlist -->
                    <ul class="cmp-list">
  <li><p id="wish" onclick="wishlist(<?php echo $viewdata->product_id ?>)" >
  <i class="fa fa-heart"></i> Add to Wishlist</p></li>
					  
                      <li><a href="#."><i class="fa fa-navicon"></i> Add to Compare</a></li>
                      <li><a href="#."><i class="fa fa-envelope"></i> Email to a friend</a></li>
                    </ul>
                    <!-- Quinty -->
					<form method="post" action="<?php echo site_url() ?>/Welcome/addtocart/<?php echo $viewdata->product_id?>">
                    <div class="quinty">
                      <input type="number" value="01" name="qty">
                    </div>
                   		<input type="submit" name="submit" value="Add to Cart" class="btn-round" />
					</form>
					 </div>
                </div>
              </div>
              
              <!-- Details Tab Section-->
              <div class="item-tabs-sec"> 
                
                <!-- Nav tabs -->
                <ul class="nav" role="tablist">
                  <li role="presentation" class="active">
				  <a href="#pro-detil"  role="tab" data-toggle="tab">Product Details</a></li>
                  <li role="presentation">
				  <a href="#cus-rev"  role="tab" data-toggle="tab" >Customer Reviews</a></li>
                  <li role="presentation">
				  <a href="#ship" role="tab" data-toggle="tab" >Shipping & Payment</a></li>
                </ul>
                
 
               <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="pro-detil" > 
                    <!-- List Details -->
			                    <p><?php echo $viewdata->product_description ?></p>		
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="cus-rev">
                  <?php foreach($feeddata as $data) { ?>
                  <div class="contact-info">
                    <h5>Name : <?php echo $data->name ?></h5>
                    
                    <h5>Email :<?php echo $data->email ?> </h5>
                   
                    <h5>Phone: <?php echo $data->contactno ?></h5>
                    <hr />
                    <h5>massage :</h5>
                      <p><?php echo $data->reviews ?></p>
					
                  </div>
				   <?php } ?>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="ship"></div>
                </div>
<script>

</script>				
				<div class="tab-content">
				
                  <div role="tabpanel" class="tab-pane fade in active" id="cus-rev" > 
                    <!-- List Details -->
                	<div class="col-md-12">
					
                </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="cus-rev"></div>
                  <div role="tabpanel" class="tab-pane fade" id="ship"></div>
				 
                </div>
				<div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="ship"> 
                    <!-- List Details -->
                  	
				<div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contact_form" class="contact-form" method="post" action="<?php echo site_url() ?>/Welcome/feedbackdata/<?php echo $viewdata->product_id ?>">
              <div class="row">
                <div class="col-md-12"> 
                  
                  <!-- Payment information -->
                  <div class="heading">
				  <br  />
                    <h2>Dou You have a Question for Us ?</h2>
                  </div>
                  <ul class="row">
                    <li class="col-sm-6">
                      <label>First Name :
                        <input type="text" class="form-control" name="name" id="name" placeholder="" required="required">
                      </label>
                    </li>
                    <li class="col-sm-6">
                      <label>Last Name :
                        <input type="text" class="form-control" name="lname" id="name" placeholder="" required="required">
                      </label>
                    </li>
					 <li class="col-sm-6">
                      <label>Email :
                        <input type="email" class="form-control" name="email" id="email" placeholder="" required="required">
                      </label>
                    </li>
					<li class="col-sm-6">
                      <label>Contact No :
                        <input type="number" class="form-control" name="contact" id="name" placeholder="" required="required">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>Message :
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="" required="required"></textarea>
                      </label>
                    </li>
					  <li class="col-sm-12 no-margin">
                     <button type="submit" value="submit" class="btn-round" id="btn_submit">Send Message</button>
                    </li>
                  </ul>
                </div>
                
                <!-- Conatct Infomation -->
                
              </div>
            </form>
          </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="cus-rev"></div>
                  <div role="tabpanel" class="tab-pane fade" id="ship"></div>
                </div>
              </div>
            </div>
            
            <!-- Related Products -->
            <section class="padding-top-30 padding-bottom-0"> 
              <!-- heading -->
              <div class="heading">
                <h2>Related Products</h2>
                <hr>
              </div>
              <!-- Items Slider -->
              <div class="item-slide-4 with-nav"> 
                <!-- Product -->
			  <?php foreach($product as $data) { 
			  
			  
 	  		  	$this->db->where('product_id',$data->product_id);
			  	$data2=$this->db->get('productimage')->row();
			  ?>
              <div class="product">
                <article> 
				<img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $data2->image ?>" alt="" > 
                  <!-- Content --> 
                  <span class="tag"><?php echo $data->product_name ?></span> <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle">
				  <?php echo substr($data->product_description,0,25) ?></a> 
                  <br />
                  <!-- Reviews -->
                  <div class="price">&#8377  <?php echo $data->product_price ?></div>
                  <p id="cart"  onclick="Addtocart(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="icon-basket-loaded"></i>
				  </p> 
				  <p id="wish" onclick="wishlist(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="fa fa-heart"></i></p>
				  
				 </article>
              </div>
			  <?php } ?>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Your Recently Viewed Items -->
    <section class="padding-bottom-60">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>Your Recently Viewed Items</h2>
          <hr>
        </div>
        <!-- Items Slider -->
        <div class="item-slide-5 with-nav"> 
          <!-- Product -->
			  <?php foreach($product as $data) {
				  
				  		  	$this->db->where('product_id',$data->product_id);
			  	$data2=$this->db->get('productimage')->row();
	
				  ?>
              <div class="product">
                <article> <img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $data2->image ?>" alt="" > 
                  <!-- Content --> 
                  <span class="tag"><?php echo $data->product_name ?></span> <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle"><?php echo substr($data->product_description,0,25) ?></a> 
                  <br />
                  <!-- Reviews -->
                  <div class="price">&#8377 <?php echo $data->product_price ?></div>
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
    </section>
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
	$.ajax({
		url:"<?php echo site_url() ?>/Welcome/addtowishlist/"+id,
		success:function(date)
		{
			$("#wish").html(date);
		} 
	});
}

</script>
 
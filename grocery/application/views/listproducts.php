<!-- Linking -->
<div class="linking">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Search result</li>
    </ol>
  </div>
</div>
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
          
           <!-- Featured Brands -->
          <h6>Featured Brands</h6>
          <div class="checkbox checkbox-primary">
            <ul>
			<?php foreach($brand as $brandData){ ?>
              <li>
                <input id="brand<?php echo $brandData->brand_id ?>" class="styled" type="checkbox" >
                <label for="brand<?php echo $brandData->brand_id ?>"> <?php echo $brandData->brand_name?> <span></span> </label>
              </li>
			<?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <!-- Products -->
      <div class="col-md-9">
        <!-- Short List -->
        
        <!-- Items -->
        <div class="item-col-4">
          <!-- Product -->
          
		  <?php 
		  foreach($Searchproduct as $data) { 
		  
		 	 $this->db->where('product_id',$data->product_id);
			$data2=$this->db->get('productimage')->row();
			 
		  ?>
          <div class="product">
            <article>
				<img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $data2->image;?>" alt=""  style="height:150px;"> 
              <!-- Content -->
              <span class="tag"><?php echo $data->product_name;?></span> 
			  <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle"><?php echo substr($data->product_description,0,20) ?></a>
              <!-- Reviews --><br />
               <div class="price"> &#8377 <?php echo $data->product_price;?></div>
              <p id="cart"  onclick="Addtocart(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="icon-basket-loaded"></i></p> 
				  <p id="wish" onclick="wishlist(<?php echo $data->product_id ?>)" class="cart-btn">
				  <i class="fa fa-heart"></i></p> </article>
			  
          </div>
		  <?php } ?>
          <!-- Product -->
          <!-- pagination -->
          
        </div>
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
                  <span class="tag"><?php echo $data->product_name ?></span> <a href="<?php echo site_url() ?>/Welcome/reviewdata/<?php echo $data->product_id ?>" class="tittle">
				  <?php echo substr($data->product_description,0,20) ?></a> 
                  <!-- Reviews --><br />	
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
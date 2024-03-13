<!-- Content -->
  <div id="content"> 
    
    <!-- Ship Process -->
    <div class="ship-process padding-top-20 padding-bottom-20">
		<div class="container">
			<div class="row">
      <h5>My Product Detail</h5>
		<span ><span style="font-size:16px">Order </span>#<span><?php echo $this->uri->segment(3); ?></span></span>
			</div>
		</div>
    </div>
    
    <!-- Shopping Cart -->
    <section class="shopping-cart padding-bottom-50">
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th>Items</th>
               <th class="text-center">Qty</th>	 
			  <th class="text-center">Price</th>
              <th>&nbsp; </th>
            </tr>
          </thead>
          <tbody>
            
            <!-- Item Cart -->
			<?php $i=count($orderDetail); foreach($orderDetail as $wishresult) { 
			
						$this->db->where('product_id',$wishresult->product_id);
					$imgsrc=$this->db->get('productimage')->row();	
			
			
			?>
            <tr>
              <td><div class="media">
                  <div class="media-left">
				   <a href="#.">
				   		<img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $imgsrc->image ?>" alt=""  > 
					</a> 
				  </div>
                  <div class="media-body">
                    <p><?php echo $wishresult->product_description ?></p>
                  </div>
                </div>
			  </td>
              <td class="text-center padding-top-60"><?php echo $wishresult->qty ?></td>
              <td class="text-center padding-top-60"><?php echo $wishresult->totalamount ?></td>
              
              <td class="text-center padding-top-60">
			  <?php if($i!=1){ ?>
		<a href="<?php echo site_url()?>/myaccount/removeOrder/<?php echo $wishresult->sc_id ?>/<?php echo $wishresult->product_id ?>/<?php echo $wishresult->qty ?>/<?php echo $wishresult->orderno ?>" class="btn-round">Cancel Product</a>
		<?php } ?>
			  </td>
			  	
            </tr>
			<?php } ?>
           </tbody>
        </table>
        <!-- Button -->
        <div class="pro-btn"> 
		<a href="<?php echo site_url() ?>/myaccount/trackOrder/<?php echo $this->uri->segment(3)?>" class="btn-round btn-light">Track Order</a> 
		<a href="<?php echo site_url() ?>/myaccount/cancelOrder/<?php echo $this->uri->segment(3)?>" class="btn-round">Cancel Order</a> </div>
      </div>
    </section>
    </div>
  <!-- End Content --> 
  
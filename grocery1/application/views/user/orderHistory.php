<!-- Content -->
  <div id="content"> 
    
    <!-- Ship Process -->
    <div class="ship-process padding-top-20 padding-bottom-20">
		<div class="container">
			<div class="row">
      <h5>My Product History</h5>
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
			<?php $i=0; foreach($orderhist as $wishresult) 
			{ 
			$this->db->where("product_id",$wishresult->product_id);
			$imgdata=$this->db->get('productimage')->row();
			
			
			$this->db->where("product_id",$wishresult->product_id);
			$this->db->where("user_id",$wishresult->user_id);
			$this->db->where("r_statas","Deactive");
			$this->db->where("order_id",$wishresult->order_id);
			$replaceData=$this->db->get("product_replace")->result();
			
			?>
            <tr>
              <td><div class="media">
                  <div class="media-left">
				   <a href="#.">
				   		<img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $imgdata->image ?>" alt=""  > 
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
			  <?php 
			  if(count($replaceData)==0){
			  if($i!=1){ ?>
		<a href="<?php echo site_url()?>/myaccount/returnpro/<?php echo $wishresult->orderno ?>/<?php echo $wishresult->product_id ?>" class="btn-round">Product Return</a>
		<?php } }else{?>
		<a href="<?php echo site_url()?>/myaccount/returnpro/<?php echo $wishresult->orderno ?>/<?php echo $wishresult->product_id ?>" class="btn-round" style="background:#CCFF33">Request Is Pending</a>
		<?php }?>
			  </td>
			  	
            </tr>
			<?php } ?>
            
            <!-- Item Cart -->
           </tbody>
        </table>
        
        <!-- Promotion -->
          
          <!-- Grand total -->
        </div>
        
        <!-- Button -->
        
      </div>
    </section>
    </div>
  <!-- End Content --> 
  
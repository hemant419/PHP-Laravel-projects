<!-- Content -->
  <div id="content"> 
    
    <!-- Ship Process -->
    <div class="ship-process padding-top-20 padding-bottom-20">
      
    </div>
    
    <!-- Shopping Cart -->
    <section class="shopping-cart padding-bottom-50">
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th>Items</th>
              <th class="text-center">Price</th>
              <th>&nbsp; </th>
            </tr>
          </thead>
          <tbody>
            
            <!-- Item Cart -->
			<?php foreach($wishrow as $wishresult) {
				
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
                    <p><?php echo $wishresult->product_name ?></p>
                  </div>
                </div></td>
              <td class="text-center padding-top-60"><?php echo $wishresult->prd_price ?></td>
              
              <td class="text-center padding-top-60"><a href="#." class="remove"><i class="fa fa-close"></i></a></td>
			  	
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
  
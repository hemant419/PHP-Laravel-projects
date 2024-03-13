
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="itm-cont"><?php echo count($cart);?></span> <i class="flaticon-shopping-bag"></i> <strong>My Cart</strong> <br>
		 <?php $i=0; foreach($cart as $row){ $i=$i+ $row->totalamunt; }?>
          <span><?php echo count($cart);?> item(s) - &#8377 <?php echo $i ?></span></a>
          <ul class="dropdown-menu">
		  <div class="auto">
            <?php foreach($cart as $row)
			{ 
						$this->db->where('product_id',$row->product_id);
					$imgsrc=$this->db->get('productimage')->row();	
			?>
            <li>
              <div class="media-left">
			   <a href="#." class="thumb">
			  		 <img src="<?php echo base_url()?>admin/images/<?php echo $imgsrc->image ?>" class="img-responsive" alt="" > 
   		</a> 
			   </div>
              <div class="media-body"> <a href="#." class="tittle"> <?php echo $row->product_name ?>  </a> 
			  <span>&#8377 <?php  echo $row->totalamunt ?></span> </div>
            </li>
			<?php }?>
			</div>
            <li class="btn-cart"> <a href="<?php echo site_url() ?>/Welcome/viewcart" class="btn-round">View Cart</a> </li>
          </ul>
        </li>
      

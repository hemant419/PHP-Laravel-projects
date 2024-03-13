
 <!-- Content -->
  <div id="content"> 
    
    <!-- Ship Process -->
    <div class="ship-process padding-top-30 padding-bottom-30">
      <div class="container">
        <ul class="row">
          
          <!-- Step 1 -->
          <li class="col-sm-3 current">
		  <a href="<?php echo site_url() ?>/Welcome/viewcart">
            <div class="media-left"> <i class="flaticon-shopping"></i> </div>
            <div class="media-body"> <span>Step 1</span>
              <h6>Shopping Cart</h6>
            </div>
			</a>
          </li>
          
          <!-- Step 2 -->
          <li class="col-sm-3">
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
    
    <!-- Shopping Cart -->
    <section class="shopping-cart padding-bottom-60">
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th>Items</th>
              <th class="text-center">Price</th>
              <th class="text-center">Quantity</th>
              <th class="text-center">Total Price </th>
              <th>&nbsp; </th>
            </tr>
          </thead>
          <tbody>
            
            <!-- Item Cart -->
			<?php $i=0; foreach($cart as $getdata) {
				$this->db->where('product_id',$getdata->product_id);
				$imgsrc=$this->db->get('productimage')->row();	
					
				 $i=$i+$getdata->totalamunt; ?>
            <tr>
              <td><div class="media">
                  <div class="media-left"> <a href="#."> <img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $imgsrc->image ?>" alt="" > </a> </div>
                  <div class="media-body">
                    <strong><?php echo $getdata->product_name ?></strong>
                  </div>
                </div></td>
              <td class="text-center padding-top-60"><?php echo $getdata->product_price ?></td>
              <td class="text-center"><!-- Quinty -->
                
                <div class="quinty padding-top-20">
                  <input type="number" name="qty" id="qty" value="<?php echo $getdata->qty ?>" onchange="changePrice<?php echo $getdata->product_id ?>(this.value,<?php echo $getdata->product_id ?>,<?php echo $getdata->product_price ?>)" min="1" max="<?php echo $getdata->stock  ?>">
            	<p style="color:red" id="errQty"></p>    
			 </div></td>
              <td class="text-center padding-top-60">
			  <span id="prevTotal<?php echo $getdata->product_id ?>"><?php echo $getdata->totalamunt ?></span>
			  <span id="nextTotal<?php echo $getdata->product_id ?>"></span>
			  </td>
              <td class="text-center padding-top-60"><a href="<?php echo site_url() ?>/addTocartcontrol/cartdelete/<?php echo $getdata->product_id ?>" class="remove" ><i class="fa fa-close"></i></a></td>
            </tr>
<script>
	 function changePrice<?php echo $getdata->product_id ?>(qty,pId,pPrice)
		{


		if(qty==0){

				document.getElementById("qty").value=1;
				$("#errQty").html("Quantity Must Be Greter Than 0");
		}else{
			$.ajax({	
			
					url:"<?php echo site_url() ?>/addTocartcontrol/ajaxAddtocart/"+qty+"/"+pId+"/"+pPrice,
					success:function(ok)
					{
						var msgOk=ok.split("*");
						//alert(msgOk[1]);alert(msgOk[2]);alert(msgOk[0]);
						var updateT=pPrice*qty;
						
						$("#prevTotal<?php echo $getdata->product_id ?>").hide();
						
						$("#nextTotal<?php echo $getdata->product_id ?>").html(updateT);
						
						$("#prevT").hide();
						
						$("#newT").html(msgOk[0]);
						$("#prevGrand").hide();
						$("#newGrand").html(msgOk[1]);
						$("#prevCupon").hide();
						$("#newCupon").html(msgOk[2]);
					}
					});
			}
		}
</script>		<?php } ?>
          </tbody>
        </table>
        <!-- Promotion -->
        <div class="promo">
          <div class="coupen">
		  <form method="post" action="<?php echo site_url() ?>/addTocartcontrol/cupon">
		   <?php echo $this->session->userdata("sucess");
				  echo 	$this->session->userdata("msg");
					echo $this->session->userdata("invalid");
			?>	 <label> Promotion Code
              <input type="text" placeholder="Your code here" name="code">
              <button type="submit"><i class="fa fa-arrow-circle-right"></i></button>
            </label>
		</form>
          </div>
		  <!--cUPON-->
		  <div class="g-totel">
		   <h5><th class="text-center">Price :- </th>&#8377 
				<span id="prevT"> <?php echo $i ?></span> <span id="newT"></span></h5>
           <h5><th class="text-center">Cupon Discount :-</th> &#8377 <span id="prevCupon">
 <?php echo $this->session->userdata("cupon_discount"); ?></span> <span id="newCupon"></span></h5>
          <h5> <th class="text-center">Grand total: </th>&#8377 <span id="prevGrand"><?php echo $j=$i-$this->session->userdata("cupon_discount"); ?></span> <span id="newGrand"></span></h5>
          </div>
		   
            
        
        <!-- Button -->
        <div class="pro-btn">
		 <a href="<?php echo site_url() ?>/" class="btn-round btn-light">Continue Shopping</a> 
		 <a href="<?php echo site_url() ?>/addTocartcontrol/payment" class="btn-round">Go Payment Methods</a> </div>
      </div>
    </section>
    
    </div>
  <!-- End Content --> 
<script>


</script>
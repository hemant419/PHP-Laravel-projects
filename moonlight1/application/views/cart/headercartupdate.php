<div id="carttotal<?php echo $carttotal->prd_id ?>">

<?php
$subtotal=0;
$totaldis=0;

foreach($myproduct as $product)
{
	
	
			?>
            <div class="cart-entry" id="cartentry<?php echo $product->prd_id ?>" >
                <a class="image"><img src="<?php echo base_url() ?>admin/product/<?php echo $product->prd_img1  ?>" alt="" /></a>
                <div class="content">
                    <a class="title" href="#"><?php echo $product->prd_name  ?></a>
                    <div class="quantity">Quantity: <?php echo $carttotal->cart_prd_qty ?></div>
                  <div class="prev" style="text-decoration:line-through">&#8377; <?php echo $product->prd_price*$carttotal->cart_prd_qty ?></div>
                    <div class="price">&#8377; <?php 
					
				$distotal=$product->prd_price*$product->prd_discount/100;	
				$actual_total=ceil($product->prd_price-$distotal); 
				echo $actual_total*$carttotal->cart_prd_qty;
					
					
					?></div>
                </div>
                <div class="button-x" 
                onclick="deleteajaxheadercart(<?php echo $this->session->userdata('c_userid') ?>,<?php echo $product->prd_id ?>)"><i class="fa fa-close"></i></div>
            </div>
        
		<?php
		$subtotal=$subtotal+$product->prd_price;
		$totaldis=$totaldis+$actual_total;

	}

					
			?>
			</div>
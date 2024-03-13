  <!-- FOOTER -->
                <div class="footer-wrapper style-10">
                    <footer class="type-1">
                        <div class="footer-columns-entry">
                            <div class="row">
                                <div class="col-md-3">


                                    <img class="footer-logo" src="<?php echo base_url() ?>img/newlogo.png" alt="" />
                                    <div class="footer-description">If you would like to experience the best of online shopping for men, women and kids in India, you are at the right place..</div>
                                    <div class="footer-address">Mark Point Dindoli Udhna Surat,Gujarat<br/>
                                        Phone: +8469659391<br/>
                                        Email: <a >moonlight@gmail.com</a><br/>
                                        <a href="www.moonlight.com"><b>www.moonlight.com</b></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                

                                    <h3 class="column-title">ONLINE SHOPPING</h3>

                                    <ul class="column">
                                      <?php
									  $menufooter=$this->db->get('cetegory')->result();
									  foreach($menufooter as $menudata)
									  {
									  ?>
									    <li><a href="#"><?php echo $menudata->cat_name ?> wear's</a></li>
                                      <?php
									  }
									  ?>
                                    	<li><a>kids</a></li>
                                        <li><a>Offers</a></li>
                                        <li><a>Gift Cards</a></li>
                                        
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <h3 class="column-title">Our Services</h3>
                                    <ul class="column">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Custom Service</a></li>
                                        <li><a href="#">Terms &amp; Condition</a></li>
                                        <li><a href="#">Order History</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                                <div class="col-md-2 col-sm-4">
                                    <h3 class="column-title">Useful Links</h3>
                                    <ul class="column">
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">T&C </a></li>
                                        <li><a href="#">Terms Of Use</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Privacy policy</a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                                <div class="clearfix visible-sm-block"></div>
                                <div class="col-md-3">
                                    <h3 class="column-title">Company working hours</h3>
                                    <div class="footer-description">
                                        <b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br/>
                                        <b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br/>
                                        <b>Sunday:</b> Closed
                                    </div>
   
                                    <div class="footer-description">
                                    <img src="<?php echo base_url() ?>img/original.png" />
                                    <b>100% ORIGINAL </b>
                                     <img src="<?php echo base_url() ?>img/free.png" />
                                    <b>FREE DELIVERY </b>
                                   
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom-navigation">
                            <div class="cell-view">
                                <div class="footer-links">
                                    <a href="#">Site Map</a>
                                    <a href="#">Search</a>
                                    <a href="#">Terms</a>
                                    <a href="#">Advanced Search</a>
                                    <a href="#">Orders and Returns</a>
                                    <a href="#">Contact Us</a>
                                </div>
                                <div class="copyright">Created by <a href="http://itsquareinfotech.in/">IT Square INFOTECH</a>. All right reserved</div>
                            </div>
                            <div class="cell-view">
                                <div class="payment-methods">
                                    <a href="#"><img src="img/payment-method-1.png" alt="" /></a>
                                    <a href="#"><img src="img/payment-method-2.png" alt="" /></a>
                                    <a href="#"><img src="img/payment-method-3.png" alt="" /></a>
                                    <a href="#"><img src="img/payment-method-4.png" alt="" /></a>
                                    <a href="#"><img src="img/payment-method-5.png" alt="" /></a>
                                    <a href="#"><img src="img/payment-method-6.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>

        </div>
        <div class="clear"></div>

    </div>

    <div class="search-box popup">
        <form method="post" action="<?php echo site_url() ?>/menucontroller/getsearchdata/">
            <div class="search-button">
                <i class="fa fa-search"></i>
                <input type="submit"  />
            </div>
           
            <div class="search-drop-down">
                <div class="title"><span>All categories</span><i class="fa fa-angle-down"></i></div>
                <div class="list">
                    <div class="overflow">
                    <?php
					$menu=$this->db->get('cetegory')->result();
                    foreach($menu as $menudata)
					{
					?>
                        <div class="category-entry" 
                        onclick="catsearch(<?php echo $menudata->cat_id ?>)"><?php echo $menudata->cat_name ?> wear's</div>
                        
                    <?php
					}
					?>
                    </div>
                </div>
            </div>
           
            
            <div class="search-field">
                <input type="text" id="searchbox" name="searchbox" value="" placeholder="Search for product2"  />
            </div>
        </form>
    </div>

    <div class="cart-box popup" >
        <div class="popup-container"  >
        	<div  style="overflow-y:auto;height:283px;width:265px" id="myscrollbar" > 
			<?php
            $subtotal=0;
			$totaldis=0;
			if($this->session->userdata('c_userid')=="")
            {	
            ?>
          <b>Please Login First ! </b>
          <?php
			}
			else
			{
		  	$this->db->where('user_id',$this->session->userdata('c_userid'));
			$mycart=$this->db->get('addtocart')->result();
		  	if(count($mycart)==0)
			{
				
		  ?>
          <div id="addnewcart">
         </div>
         
        <img id="cartimg" src="<?php echo base_url() ?>/img/empty-cart.png" style="height:190px;width:250px" />   			<?php
			}
			else
			{
				foreach($mycart as $cartrow)
				{
					$this->db->where('prd_id',$cartrow->prd_id);
					$myproduct=$this->db->get('product')->result();
			?>
            
         <div id="addnewcart">
         </div>   
            <div id="removenewcart<?php echo $cartrow->prd_id ?>">
 			<?php
					foreach($myproduct as $product)
					{
			?>
            <Br />
            <div class="cart-entry" id="cartrecord2<?php echo $cartrow->cart_id ?>" >
                <a class="image"><img src="<?php echo base_url() ?>admin/product/<?php echo $product->prd_img1  ?>" alt="" /></a>
    
                <div class="content">
                    <a class="title" href="#"><?php echo $product->prd_name  ?></a>
                    <div class="quantity" id="quantity<?php echo $product->prd_id ?>">Quantity: <?php echo $cartrow->cart_prd_qty ?></div>
                  <div class="prev" style="text-decoration:line-through">&#8377; <?php echo $product->prd_price ?></div>
                    <div class="price" id="price<?php echo $product->prd_id ?>">&#8377; <?php 
					
				$distotal=$product->prd_price*$product->prd_discount/100;	
				$actual_total=ceil($product->prd_price-$distotal)*$cartrow->cart_prd_qty; 
				echo $actual_total;
					
					
					?></div>
                </div>
                <div class="button-x"><i class="fa fa-close" onclick="deletecart(<?php echo $cartrow->cart_id ?>,<?php echo $product->prd_id ?>)"
                
                
                ></i></div>
            </div>
        <?php
		$subtotal=$subtotal+$product->prd_price;
		$totaldis=$totaldis+$actual_total;
					}
			?>		
				</div>	
			<?php	}
			}
			}
		?>
        </div>
      <hr>
         <div class="summary" >
                <div class="subtotal">Subtotal: &#8377; <?php echo $subtotal ?></div>
                <div class="grandtotal">Grand Total: <span>&#8377; <?php echo $totaldis ?></span></div>
            </div>
            <div class="cart-buttons" >
                <div class="column">
                    <a class="button style-3" id="viewcart" href="<?php echo site_url() ?>/cartcontroller">view cart</a>
                    <div class="clear"></div>
                </div>
                <div class="column">
                    <a class="button style-4" id="checkout" href="<?php echo site_url() ?>/checkoutcontroller">checkout</a>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        
    </div>
   
   
<script>

function popupf(id)
{
var prdid=$("#bookId").val(id);
$.ajax({
		url:"<?php echo site_url() ?>/homecontroller/popup/"+id,
		method:"post",
		success: function(res)
		{
			var arr = res.split("-");
			$("#prdtitle").html(arr[0])
			$("#prddis").html(arr[3])
			$("#oldprice").html("₹"+arr[1]);
			$("#newprice").html("₹"+arr[8]);
			
			//alert("?php echo base_url() ?>admin/product/"+arr[6])
			$('#prdimg1').html("<img src=<?php echo base_url() ?>admin/product/"+arr[4]+">");
			$('#prdimg2').html("<img src=<?php echo base_url() ?>admin/product/"+arr[5]+">");
			$('#prdimg3').html("<img src=<?php echo base_url() ?>admin/product/"+arr[6]+">");
			$('#prdimg4').html("<img src=<?php echo base_url() ?>admin/product/"+arr[4]+">");
			
			$('#prdzoom1').html("<img src=<?php echo base_url() ?>admin/product/"+arr[4]+"  data-zoom='<img src=<?php echo base_url() ?>admin/product/'"+arr[4]+"/>")
			
			$('#prdzoom2').html("<img src=<?php echo base_url() ?>admin/product/"+arr[5]+"  data-zoom='<img src=<?php echo base_url() ?>admin/product/'"+arr[5]+"/>")
			
			$('#prdzoom3').html("<img src=<?php echo base_url() ?>admin/product/"+arr[6]+"  data-zoom='<img src=<?php echo base_url() ?>admin/product/'"+arr[6]+"/>")
			
			$('#prdzoom4').html("<img src=<?php echo base_url() ?>admin/product/"+arr[4]+"  data-zoom='<img src=<?php echo base_url() ?>admin/product/'"+arr[4]+"/>")
			$('#prdzoom5').html("<img src=<?php echo base_url() ?>admin/product/"+arr[4]+"  data-zoom='<img src=<?php echo base_url() ?>admin/product/'"+arr[4]+"/>")
			
			
			$("#buynow").attr("href","<?php echo site_url() ?>/menucontroller/productdetail/"+id); 
			
		}	
	
	});
}
</script> 
   
   
<div id="product-popup" class="overlay-popup ">


        <div class="overflow">
                           

            <div class="table-view">
                <div class="cell-view">
                    <div class="close-layer"></div>
                    <div class="popup-container" >

                        <div class="row">
                            <div class="col-sm-6 information-entry">
                                <div class="product-preview-box">
                                    <div class="swiper-container product-preview-swiper" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image" id="prdzoom1">
                                                   </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image" id="prdzoom2">
                                                   
                                                   
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image" id="prdzoom3">
                                                    
                                                    
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image" id="prdzoom4">
                                                   
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="product-zoom-image" id="prdzoom5">
                                                   
                                                </div>
                                            </div>
                           
                                        </div>
                                        <div class="pagination"></div>
                                        <div class="product-zoom-container">
                                           
             
                                            <div class="zoom-area"></div>
             
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="swiper-hidden-edges">
                                        <div class="swiper-container product-thumbnails-swiper" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="3" data-int-slides="3" data-sm-slides="3" data-md-slides="4" data-lg-slides="4" data-add-slides="4">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide selected">
                                                    <div class="paddings-container" id="prdimg1">
                                 
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container" id="prdimg2">
                                            
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container" id="prdimg3"> 

                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="paddings-container" id="prdimg4">
                                            
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pagination"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 information-entry" >
                                <div class="product-detail-box">
                     
                                 
                                    <h1 class="product-title" id="prdtitle">
                                    
                                    </h1>
                                    <h3 class="product-subtitle">Moonlight Fashion store</h3>
                                    <div class="rating-box">
                                        <div class="star"><i class="fa fa-star"></i></div>
                                        <div class="star"><i class="fa fa-star"></i></div>
                                        <div class="star"><i class="fa fa-star"></i></div>
                                        <div class="star"><i class="fa fa-star-o"></i></div>
                                        <div class="star"><i class="fa fa-star-o"></i></div>
                                        <div class="rating-number">25 Reviews</div>
                                    </div>
                                    <div class="product-description detail-info-entry" id="prddis"></div>
                                    <div class="price detail-info-entry">
                                        <div class="prev" id="oldprice">$90,00</div>
                                        <div class="current" id="newprice">$70,00</div>
                                    </div>
                                    <div class="detail-info-entry">
                                        <a class="button style-12" href="" id="buynow">Buy This Product</a>
                  
                                        <div class="clear"></div>
                                    </div>
                                    <div class="tags-selector detail-info-entry">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="close-popup"></div>
                    </div>
                    
                    
                    
                    
                </div>
            </div>
        </div>
   
   </div>
 
</div> 
 
<div id="id01" class="w3-modal" >
<div class="w3-modal-content">
  <div class="w3-container"  >
    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
    <center>
   <img src="<?php echo base_url() ?>/img/feedback.png" style="height:350px;width:600px"  />
    </center>
  </div>
</div>
</div>
<div id="id02" class="w3-modal" >
<div class="w3-modal-content">
  <div class="w3-container"  >
    <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
    <center>
   <img src="<?php echo base_url() ?>/img/feedback2.png" style="height:350px;width:650px"  />
    </center>
  </div>
</div>
</div>
<div id="id03" class="w3-modal" style="margin-top:75px" >
<div class="w3-modal-content">
  <div class="w3-container"  style="background-color:#F9F9F9" >
    <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-display-topright">&times;</span>
<h4><b style="color:#ca1515" id="pyq">Post Your Query ?</b></h4>
<table class="table table-bordered" id="faqque" style="background-color:#FFF;border-style:outset">
    <thead>
      <tr>
        <th rowspan="3" style="vertical-align:top;text-align:left;">
  <ul>
        <li><img src="<?php echo base_url() ?>/img/icon.png" style="height:30px;width:30px" />&nbsp;Be specific, ask questions only about the product.</li>
        <br />
        <li><img src="<?php echo base_url() ?>/img/icon.png" style="height:30px;width:30px" />
        Ensure you have gone through the product &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;specifications before posting your question.</li>
        <br />
        <li>
        <img src="<?php echo base_url() ?>/img/icon.png" style="height:30px;width:30px" />
        Reach out to our customer care for queries <span style="margin-left:35px"> related to offers, orders, delivery etc.</span></li>
        </ul>
        </th>
     
        <th ><b style="color:#ca1515" id="invalidlogin">Post your question</b></th>
     </tr>
     <tr>
        <td>
        
<textarea rows="10" cols="45" required="required" id="faqques" style="resize:none" placeholder="Write Your query here !"></textarea>
        </td>
      
      <tr> 
        <td>
       <a class="button style-4"  onclick="submitfaq(<?php echo $this->uri->segment(3) ?>)"> Submit Query </a>
        </td>
      
      </tr>
    </thead>
    
  </table>
 <div class="message-box message-success" id="faqans" style="display:none">
                        <div class="message-icon"><i class="fa fa-check"></i></div>
                        <div class="message-text"><b>All fine!</b> Thanks For Asking Question about this product, You'll sortly get your answer.</div>
                        
                    </div>
  </div>
</div>
</div> 
  <script type="text/javascript">
           
      

 function submitfaq(pid) 
  {

			var div = document.getElementById('invalidlogin');
			var interval = 80;
			var distance = 5;
			var times = 5;
			$(div).css('position', 'relative');
			
			for (var iter = 0; iter < (times + 1) ; iter++) {
			$(div).animate({
			left: ((iter % 2 == 0 ? distance : distance * -1))
			}, interval);
			}

			var faqq=$("#faqques").val();
			if(faqq=="")
			{
				$("#invalidlogin").html("Please Enter Your Question !");
				$(div).animate({ left: 0 }, interval);
			}
			else
			{

				$.ajax({
						url:"<?php echo site_url() ?>/menucontroller/faq/"+pid+"/"+faqq,
						method:"post",
						success: function(faq)
						{
							
							if(faq=="already")
							{
							$("#invalidlogin").html("You've already submitted Your Query about this product!");
							$(div).animate({ left: 0 }, interval);
							}
							else if(faq=="1")
							{
							//	alert(faq)
								$("#faqque").hide();
								$("#faqans").show();
								$("#pyq").css('color','#8cbc09');
								$("#pyq").html("Success :)");
							}
							else
							{
						//		$("#invalidlogin").effect("shake", {times:4}, 1000 );
								$("#invalidlogin").html("Please Login First !");
								$(div).animate({ left: 0 }, interval);
							}
						}
					});
			}
  }
  
   
</script>
<script>
  function closefaq()
  {
	  document.getElementById('id03').style.display='none'
  }


  function pricefillter(subid)
  {
	var minp=$('.min-price span').text();
	var maxp=$('.max-price span').text();
	$.ajax({
			url:"<?php echo site_url() ?>/menucontroller/filterprice/"+minp+"/"+maxp+"/"+subid,
			method:"post",
			success: function(res_price)
			{
				
				$("#filterprice").html(res_price)	
			}
	});
	
  }
  function totalprd(limit,subid)
  {
	 
	$.ajax({
			url:"<?php echo site_url() ?>/menucontroller/sortfilter/"+limit+"/"+subid,
			method:"post",
			success: function(res_sort)
			{
				$("#filterprice").html(res_sort)	
			}
	});

  }

  function sortrange(range,subid)
  {
	$.ajax({
			url:"<?php echo site_url() ?>/menucontroller/sortrange/"+range+"/"+subid,
			method:"post",
			success: function(res_sort)
			{
			//	alert(res_sort)
				$("#filterprice").html(res_sort)	
			}
	});
  }     
	
 function chgcolor(color,subid)
 {
	$.ajax({
			url:"<?php echo site_url() ?>/menucontroller/chgcolor/"+color+"/"+subid,
			method:"post",
			success: function(res_sort)
			{
				$("#filterprice").html(res_sort)	
			}
	}); 
 }	
 function chgsize(size,subid)
 {
	$.ajax({
			url:"<?php echo site_url() ?>/menucontroller/chgsize/"+size+"/"+subid,
			method:"post",
			success: function(res_sort)
			{
				$("#filterprice").html(res_sort)	
			}
	}); 
 }	 	

function addwishlist(pid,uid)
{
	$.ajax({
			url:"<?php echo site_url() ?>/usercontroller/addwishlist/"+pid+"/"+uid,
			method:"post",
			success: function(res)
			{
			 $('#colorwishlist2'+pid).show();
			 $('#colorwishlist'+pid).show();
			 $('#noncolorwishlist'+pid).hide();
			 $('#noncolorwishlist2'+pid).hide();
			 $('#addwish').css("visibility", "hidden");
			// $('#addedwish').show();
			 $('#addwish2').css("visibility", "hidden");
			 $('#addedwish2').css("visibility", "visible");;
			}
	}); 
}
function removewishlist(pid,uid)
{
	$.ajax({
			url:"<?php echo site_url() ?>/usercontroller/removewishlist/"+pid+"/"+uid,
			method:"post",
			success: function(res)
			{
			$('#colorwishlist2'+pid).hide();
			$('#colorwishlist'+pid).hide();
			$('#noncolorwishlist2'+pid).show();
			$('#noncolorwishlist'+pid).show();
			//$('#addwish').show();
			$('#addedwish').css("visibility", "hidden");
			$('#addwish2').css("visibility", "visible");;
			$('#addedwish2').css("visibility", "hidden");
		
			}
		}); 
}
function addcart(pid,uid)
{
	$.ajax({
			url:"<?php echo site_url() ?>/usercontroller/addcart/"+pid+"/"+uid,
			method:"post",
			success: function(res)
			{
			var arr=res.split("~");
			var subtotal=arr[0];
			var grandtotal=arr[1];
			var cartdata=arr[2];
			
			$('#colorcart2'+pid).show();
			$('#colorcart'+pid).show();
			$('#noncolorcart'+pid).hide();
			$('#noncolorcart2'+pid).hide();
			$('.subtotal').html("Subtotal: &#8377;"+subtotal);
			$('.grandtotal').html("Grandtotal: &#8377;"+grandtotal);
			$("#cartimg").hide();
			$('#addnewcart').append(cartdata);
			
		
			
				
			}
	}); 
}
function removecart(pid,uid)
{
	
	$.ajax({
			url:"<?php echo site_url() ?>/usercontroller/removecart/"+pid+"/"+uid,
			method:"post",
			success: function(res)
			{
			var arr=res.split("~");
			var subtotal=arr[0];
		//	alert(subtotal)
			var grandtotal=arr[1];
		
			if(subtotal==0)
				{
				//	alert(subtotal)
				$("#addnewcart").html("<img src='<?php echo base_url() ?>/img/empty-cart.png' style='height:190px;width:250px' id='cartimg'/> ");
			$('#colorcart2'+pid).hide();
			$('#colorcart'+pid).hide();
			
				}
			$('#colorcart2'+pid).hide();
			$('#colorcart'+pid).hide();
			$('#noncolorcart2'+pid).show();
			$('#noncolorcart'+pid).show();
			$('#removenewcart'+pid).hide();
			$('.subtotal').html("Subtotal: &#8377;"+subtotal);
			$('.grandtotal').html("Grandtotal: &#8377;"+grandtotal);
			$("#cartentry"+pid).hide();

			}
		}); 
}
</script>   
<script>
function updatecart(qty,pid)
{
	$.ajax({
			url:"<?php echo site_url() ?>/cartcontroller/updatecart/"+qty+"/"+pid,
			method:"post",
			success: function(res)
			{
				var arr=res.split("~");
				var total=arr[0];
				var subtotal=arr[1];
				var grandtotal=arr[2];
				
				$("#sub_total").html("Subtotal: &#8377;"+subtotal);
				$(".grand-total").html("Grandtotal: &#8377;"+grandtotal);
				$(".subtotal"+pid).html("&#8377; "+total);
				
				$('.subtotal').html("Subtotal: &#8377;"+subtotal);
				$('.grandtotal').html("Grandtotal: &#8377;"+grandtotal);
				$('#quantity'+pid).html("Quantity: "+qty);
				$('#price'+pid).html("&#8377; "+total);
			//	alert(subtotal)
			
			}
	});
	
	
}

function deletecart(cid,pid)
{
	$.ajax({
			url:"<?php echo site_url() ?>/cartcontroller/deletecart/"+cid+"/"+pid,
			method:"post",
			success: function(res)
			{
				var arr=res.split("~");
				var subtotal=arr[0];
				var grandtotal=arr[1];
				
			//alert(res)
				$("#cartrecord"+cid).hide();
				$("#cartrecord2"+cid).hide();
				$("#sub_total").html("Subtotal: &#8377;"+subtotal);
				$(".grand-total").html("Grandtotal: &#8377;"+grandtotal);
				$('.subtotal').html("Subtotal: &#8377;"+subtotal);
				$('.grandtotal').html("Grandtotal: &#8377;"+grandtotal);
				$('#colorcart2'+pid).hide();
				$('#colorcart'+pid).hide();
				$('#noncolorcart2'+pid).show();
				$('#noncolorcart'+pid).show();
				
				
				if(subtotal==0)
				{
				//	alert(subtotal)
				$("#addnewcart").html("<img src='<?php echo base_url() ?>/img/empty-cart.png' style='height:190px;width:250px' id='cartimg'/> ");
			$('#colorcart2'+pid).hide();
			$('#colorcart'+pid).hide();
			
				}
				
			}
		  });
}

function deleteajaxheadercart(uid,pid)
{
	$.ajax({
			url:"<?php echo site_url() ?>/cartcontroller/deleteajaxheadercart/"+uid+"/"+pid,
			method:"post",
			success: function(res)
			{
				//alert(res)
				$("#cartentry"+pid).hide();				
				var arr=res.split("~");
				var subtotal=arr[0];
				var grandtotal=arr[1];
				
				if(subtotal==0)
				{
			
				//		alert(subtotal)
				$("#addnewcart").html("<img src='<?php echo base_url() ?>/img/empty-cart.png' style='height:190px;width:250px' id='cartimg'/> ");
				$('#colorcart2'+pid).hide();
				$('#colorcart'+pid).hide();
				$('#colorcart'+pid).hide();
				$('#noncolorcart2'+pid).show();
				$('#noncolorcart'+pid).show();
				$("#sub_total").html("Subtotal: &#8377;"+subtotal);
				$(".grand-total").html("Grandtotal: &#8377;"+grandtotal);
				$('.subtotal').html("Subtotal: &#8377;"+subtotal);
				$('.grandtotal').html("Grandtotal: &#8377;"+grandtotal);
				}
				else
				{

				$("#sub_total").html("Subtotal: &#8377;"+subtotal);
				$(".grand-total").html("Grandtotal: &#8377;"+grandtotal);
				$('.subtotal').html("Subtotal: &#8377;"+subtotal);
				$('.grandtotal').html("Grandtotal: &#8377;"+grandtotal);
				$('#colorcart2'+pid).hide();
				$('#colorcart'+pid).hide();
				$('#colorcart'+pid).hide();
				$('#noncolorcart2'+pid).show();
				$('#noncolorcart'+pid).show();
				}
				
		
			}
		  });
	
}


function deletewishlist(wid)
{
	$.ajax({
			url:"<?php echo site_url() ?>/wishlistcontroller/deletewishlist/"+wid,
			method:"post",
			success: function(res)
			{
				$("#wishlistrecord"+wid).hide();
		//	alert(res)	
			}
			});

}
function addmycart(pid)
{
	$.ajax({
			url:"<?php echo site_url() ?>/wishlistcontroller/addcart/"+pid,
			method:"post",
			success: function(res)
			{
				
				$("#wishlisthide"+pid).show();
				$("#wishlistshow"+pid).hide();
				$("#deletewishlist"+pid).hide();
			}
			});

}

</script>

<script src="<?php echo base_url() ?>js/jquery-3.1.1.min.js"></script>

    <!-- custom scrollbar -->
  
    <!-- range slider -->

    <script src="<?php echo base_url() ?>js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery-2.1.3.min.js"></script>
  	<script  src="<?php echo base_url() ?>js/cartscript.js"></script>

    <script src="<?php echo base_url() ?>js/idangerous.swiper.min.js"></script>
    <script src="<?php echo base_url() ?>js/global.js"></script>

    <!-- custom scrollbar -->
    <script src="<?php echo base_url() ?>js/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.jscrollpane.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function(){
            var minVal = parseInt($('.min-price span').text());
            var maxVal = parseInt($('.max-price span').text());
            $( "#prices-range" ).slider({
                range: true,
                min: minVal,
                max: maxVal,
                step: 5,
                values: [ minVal, maxVal ],
                slide: function( event, ui ) {
                    $('.min-price span').text(ui.values[ 0 ]);
                    $('.max-price span').text(ui.values[ 1 ]);
                }
            });
        });
    </script>
<link rel="stylesheet" href="<?php echo base_url() ?>/search/easy-autocomplete.min.css"/>
<script src="<?php echo base_url() ?>/search/jquery.easy-autocomplete.min.js"></script>

<script>
$(document).ready(function(){
	
  var options = 
  {
  url: "<?php echo site_url() ?>/homecontroller/searchdata/",
  getValue:"prd_name",
  list: {
    match: {
      enabled: true
    }
  },
    template: {
    type: "custom",
    method: function(value,item) {
		if(value.length>20)
		{
			
			value=value.substr(0,25);
		//	alert(value)
		}
	 return "<span id='result' >"+value+"...</b>";
	    }
  },
  theme: "square"
};
$("#searchbox").easyAutocomplete(options);
});


function catsearch(searchcat)
{
  var options = 
  {
  url: "<?php echo site_url() ?>/homecontroller/searchdatacat/"+searchcat,
  getValue:"prd_name",
  list: {
    match: {
      enabled: true
    }
  },
    template: {
    type: "custom",
    method: function(value,item) {
		if(value.length>20)
		{
			
			value=value.substr(0,28);
		//	alert(value)
		}
	 return "<span id='result' >"+value+"...</b>";
	    }
  },
  theme: "square"
};
$("#searchbox").easyAutocomplete(options);
}


</script>
<script>
 var productsize;
 function question()
 {
		document.getElementById('id03').style.display='block'
 }
	
function getsize(s)
{
	 
	   productsize=s;
	  if(productsize!="")
	{
		$("#sizeerror").html("");
	}  
}

	
function addtocart(pid,uid)
{
	var div = document.getElementById('sizeerror');
	var interval = 80;
	var distance = 5;
	var times = 5;
	$(div).css('position', 'relative');
	for (var iter = 0; iter < (times + 1) ; iter++) {
	$(div).animate({
	left: ((iter % 2 == 0 ? distance : distance * -1))
	}, interval);
	}
	
	if(productsize === undefined)
	{
		$("#sizeerror").html("Please Select Product Size");
		$(div).animate({ left: 0 }, interval);
		
	}

	else
	{
		
		
	var qty=$("#qty").val();
	//alert(pid+" "+qty+" "+uid)
	$.ajax({
				url:"<?php echo site_url() ?>/menucontroller/addtocart/"+pid+"/"+uid+"/"+qty+"/"+productsize,
				method:"post",
				success: function(res)
				{
					if(res=="0")
					{
					window.location = "<?php echo site_url() ?>/logincontroller";
					}
					else
					{
					window.location = "<?php echo site_url() ?>/cartcontroller";
					}
				}
		
			});
	}
			 
 }
 
 
</script> 
              
 
</body>
</html>
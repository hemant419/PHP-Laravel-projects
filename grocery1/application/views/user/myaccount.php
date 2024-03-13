<!-- Content -->
  <div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url() ?>/Welcome/">Home</a></li>
          <li class="active" id="order">My Account</li>
		  <li class="active" id="order1"></li>
		  
        </ol>
      </div>
    </div>
    
    <!-- Blog -->
    <section class="blog-page padding-top-30 padding-bottom-60">
      <div class="container">
        <div class="row" >
          <div class="col-md-9" id="myaccount"> 
            
         
            <!-- pagination -->
			<section class="login-sec padding-top-30 padding-bottom-100">

			 <form>
              <ul class="row">
                <li class="col-sm-8">
                  <label>Full Name
                    <input type="text" class="form-control" name="name" placeholder="" 
					value="<?php echo $myaccountData->name."  ".$myaccountData->lastname ?>" readonly>
                  </label>
                </li>
                <li class="col-sm-8">
                  <label>Email
                    <input type="text" class="form-control" name="pass" placeholder="" 
					value="<?php echo $myaccountData->email ?>" readonly>
                  </label>
                </li>
                <li class="col-sm-8">
                  <label>Password
                    <input type="password" value="123456" class="form-control" name="pass" placeholder="" readonly>
                  </label>
                </li>
              </ul>
            </form>
			</section>

			
			
			
         
          </div>
          
		  <div class="col-md-9" id="myorder"> 
            
            <!-- Blog Post -->
			<?php if(count($orderdata )==0){?>
			  <div class="blog-post">
              <article class="row">
             
                <div class="col-xs-5"> 
					
					<h3>Please Generate Order</h3>
				</div>
              </article>
            </div> 
			<?php }else{ foreach($orderdata as $order) { ?>
            <div class="blog-post">
              <article class="row">
             
                <div class="col-xs-5"> 
					<span><i class="fa fa-bookmark-o"></i> <?php echo $order->date_register ?></span> 
					<span><!--<i class="fa fa-comment-o"></i> 86 Comments--></span> 
					<a href="#." class="tittle">Order #<?php echo $order->orderno ?></a>
                  	<p><span style="font-size:16px"> Shipping Address: </span><br /><?php $data=preg_split("/!/",$order->shippingaddress); 
						echo $data[0]."<br>".$data[1]."<br>".$data[2]."<br>".$data[3]."<br>";

						?></p>
					<span style="font-size:16px">Status :- <?php echo $order->o_statas  ?> </span>
					<br />
           <a href="<?php echo site_url()?>/myaccount/detailOrder/<?php echo $order->orderno ?>">More Detail</a>
				  </div>
              </article>
            </div>    
			<?php } }?>
            <!-- pagination -->
           
          </div>
		  <!-- History-->
		  <div class="col-md-9" id="history"> 
            
            <!-- Blog Post -->
			<?php if(count($orderHistory )==0){?>
			  <div class="blog-post">
              <article class="row">
             
                <div class="col-xs-5"> 
					
					<h3>OrderHistory is Empty</h3>
				</div>
              </article>
            </div> 
			<?php }else{ 
			 foreach($orderHistory as $order) { ?>
            <div class="blog-post">
              <article class="row">
             
                <div class="col-xs-5"> 
					<span><i class="fa fa-bookmark-o"></i> <?php echo $order->date_register ?></span> 
					<span><!--<i class="fa fa-comment-o"></i> 86 Comments--></span> 
					<a href="#." class="tittle">Order NO :- <?php echo $order->orderno ?></a>
                  	<p><?php 
					$data=preg_split("/!/",$order->shippingaddress); 
						echo $data[0]."<br>".$data[1]."<br>".$data[2]."<br>".$data[3]."<br>";
					?></p>
					<p>Status :- <?php echo $order->o_statas  ?> 
					<br />
             <a href="<?php echo site_url() ?>/myaccount/moreinfor/<?php echo $order->orderno ?>">Order History</a></div>
              </article>
            </div>    
			<?php } }?>
            <!-- pagination -->
           
          </div>
          <!-- Side Bar -->
          <div class="col-md-3">
            <div class="shop-side-bar"> 
              
              <!-- Search -->
              <div class="search">
                <form>
                  <label>
                    <input type="email" placeholder="Search here">
                  </label>
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
              
              <!-- Categories -->
              <h6>Categories</h6>
              <div class="checkbox checkbox-primary">
                <ul>
                  <li>
                    <input id="cate1" class="styled" type="checkbox"  checked="checked" onclick="valueOfmyAccount()">
                    <label for="cate1"> My Account </label>
                  </li>
                  <li>
                    <input id="cate2" class="styled" type="checkbox" onclick="valueOfOrder()">
                    <label for="cate2"> My Order</label>
                  </li>
<script>
window.onload=hidesomedata;
function hidesomedata()
{
	$("#myorder").hide();
	$("#history").hide();
}

function valueOfmyAccount()
{
//alert("jhv");
$("#myaccount").show();
$("#myorder").hide();	
$("#cate2").attr("checked",false);	
$("#order").show();	
$("#order1").hide();
}

function valueOfOrder()
{
	
	$("#myaccount").hide();
	$("#myorder").show();
	$("#history").hide();

	$("#cate1").attr("checked",false);
	$("#order").hide();	
	$("#order1").html("My Order");	
}
function valueOfHistory()
{
	$("#myaccount").hide();
	$("#myorder").hide();
	$("#history").show();

	$("#cate2").attr("checked",false);
	$("#order").hide();	
	$("#order1").html("My Order History");	

}
</script>				  
                  <li>
                    <input id="cate3" class="styled" type="checkbox" onclick="valueOfHistory()">
                    <label for="cate3"> Order History</label>
                  </li>
                  <li>
                    <input id="cate4" class="styled" type="checkbox" >
                    <label for="cate4"> Product Return </label>
                  </li>
                </ul>
              </div>
              
              <!-- Recent Posts -->
            <!--  <h6>Recent Posts</h6>
              <div class="recent-post"> 
                
                <!-- Recent Posts -->
             <!--   <div class="media">
                  <div class="media-left"> <a href="#."><img class="img-responsive" src="<?php echo base_url() ?>images/blog-img-2.jpg" alt=""> </a> </div>
                  <div class="media-body"> <a href="#.">It’s why there’s
                    nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
                </div>
                
                <!-- Recent Posts -->
                 <!--<div class="media">
                  <div class="media-left"> <a href="#."><img class="img-responsive" src="<?php echo base_url() ?>images/blog-img-3.jpg" alt=""> </a> </div>
                  <div class="media-body"> <a href="#.">It’s why there’s
                   nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
                </div>-->
                
                <!-- Recent Posts -->
             <!--   <div class="media">
                  <div class="media-left"> <a href="#."><img class="img-responsive" src="<?php echo base_url() ?>images/blog-img-4.jpg" alt=""> </a> </div>
                  <div class="media-body"> <a href="#.">It’s why there’s
                    nothing else like Mac. </a> <span>25 Dec, 2017 </span><span> 86 Comments</span> </div>
                </div>
              </div>-->
              
              <!-- Quote of the Day -->
           <!-- <h6>Quote of the Day</h6>
              <div class="quote-day"> <i class="fa fa-quote-left"></i>
                <p>Suspendisse sodales cursus lorem vel
                  efficitur. Donec tincidunt aliquet lacus. Maecenas pulvinar egestas ex eget eleifend. Aenean eget tempus urna [...]</p>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content --> 
  
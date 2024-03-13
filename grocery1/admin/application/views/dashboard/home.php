<style>
img
{
transition:all 1.2s ease-in-out;
-webkit-transition:all 1.2s ease-in-out;
-moz-transition:all 1.2s ease-in-out;
-ms-transition:all 1.2s ease-in-out;
-o-transition:all 1.2s ease-in-out;}

img:hover
{
transform:rotateY(180deg);
-webkit-transform:rotateY(180deg);
-moz-transform:rotateY(180deg);
-ms-transform:rotateY(180deg);
-o-transform:rotateY(180deg);
}

</style>
  <!-- CONTENT -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/animsition.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
        <section id="content">
            <div class="page dashboard-page">
                <!-- bradcome -->
                <div class="b-b mb-20" >
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0" style="color:#FFF">Dashboard</h1>
                            <small class="text-muted" style="color:#FFF">Welcome to Furniture Shop</small>
                        </div>
                    </div>
                </div>
                 <div class="row clearfix" >
                    <a href="<?php echo site_url() ?>/orderCon">
                     <div class="col-md-3 col-sm-6 col-xs-12" >
                        <section class="boxs boxs-simple text-center" style="border-radius:35px" >
                            <div>
                            <img src="<?php echo base_url() ?>/image/order.jpg" height="180" width="235" />
                            </div>
                            
                            <div class="boxs-widget l-green p-30 -t">
                                <i class="fa fa-truck fa-3x"></i>
                            </div>
                         	<div class="boxs-body" > 
                                <h2 class="m-0">
                                <?php
								$order=$this->db->get('order_master')->result();
								echo count($order);
								?>
                                
                                
                                
                                </h2>
                                <span class="text-muted">New Orders</span>
                            </div>
                        </section>                       
                    </div>
                    </a>
                    
                    <a href="<?php echo site_url() ?>/userControl">
                    	<div class="col-md-3 col-sm-6 col-xs-12">
                        <section style="border-radius:50px" class="boxs boxs-simple text-center">
                            <div >
                            <img src="<?php echo base_url() ?>/image/users.png" height="180" width="280" />
                            </div>
                            
                            <div class="boxs-widget l-pink p-30 -t">
                                <i class="fa fa-users fa-3x"></i>
                            </div>
                            <div class="boxs-body">
                                <h2 class="m-0">
                                <?php
								$user=$this->db->get('user')->result();
								echo count($user);
								?>
                                </h2>
                                <span class="text-muted">New Users</span>
                            </div>
                        </section>                        
                    </div>
                    </a>
                   
                    <a href="<?php echo site_url() ?>/productc/">
                   		 <div class="col-md-3 col-sm-6 col-xs-12">
                        <section style="border-radius:35px" class="boxs boxs-simple text-center">
                                               <div >
                            <img src="<?php echo base_url() ?>/image/product.jpg" height="180" width="235" />
                            </div>
                            <div class="boxs-widget l-khaki p-30 -t">
                                <i class="fa fa-desktop fa-3x"></i>
                            </div>
                            <div class="boxs-body">
                                <h2 class="m-0">
                                <?php
								$product=$this->db->get('product_master')->result();
								echo count($product);
								?>
                                
                                </h2>
                                <span class="text-muted">Product</span>
                            </div>
                        </section>                        
                    </div>
                   </a>
                    
                    <a href="<?php echo site_url() ?>/contactControl/">
                   		 <div class="col-md-3 col-sm-6 col-xs-12">
                        <section style="border-radius:50px" class="boxs boxs-simple text-center">
                            <div >
                            <img src="<?php echo base_url() ?>/image/contact.png" height="180" width="180" />
                            </div>
                            <div class="boxs-widget l-blue p-30 -t">
                                <i class="fa fa-phone fa-3x"></i>
                            </div>
                            <div class="boxs-body">
                                    <h2 class="m-0">
                                   <?php
								$con=$this->db->get('contact_master')->result();
								echo count($con);
								?>
                                    </h2>
                                        <span class="text-muted">Contact</span>
                                    
                                
                            </div>
                        </section>
                    </div>
                   	</a> 
                </div>

                     <div class="row clearfix">
                   
                    <a href="<?php echo site_url() ?>/brandControl/">
                     <div class="col-md-3 col-sm-6 col-xs-12">
                        <section style="border-radius:50px" class="boxs boxs-simple text-center">
                            <div>
                            <img src="<?php echo base_url() ?>/image/brand.png" height="180" width="285" />
                            </div>
                            
                            <div class="boxs-widget l-blue p-30 -t">
                                <i class="fa fa-shield fa-3x"></i>
                            </div>
                         	<div class="boxs-body">
                                <h2 class="m-0">
                                  <?php
								$brand=$this->db->get('brand')->result();
								echo count($brand);
								?>
                                </h2>
                                <span class="text-muted">Brand</span>
                            </div>
                        </section>                       
                    </div>
                   </a>
                    <a href="<?php echo site_url() ?>/offerControl/">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <section class="boxs boxs-simple text-center" style="border-radius:50px">
                            <div >
                            <img src="<?php echo base_url() ?>/image/offer.jpg" height="180" width="285" />
                            </div>
                            
                            <div class="boxs-widget l-khaki p-30 -t">
                                <i class="fa fa-asterisk fa-3x"></i>
                            </div>
                            <div class="boxs-body">
                                <h2 class="m-0"> 
								<?php
								$of=$this->db->get('offres')->result();
								echo count($of);
								?></h2>
                                <span class="text-muted">Offers</span>
                            </div>
                        </section>                        
                    </div>
                   </a> 
                     <a href="<?php echo site_url() ?>/feedbackCon/">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <section class="boxs boxs-simple text-center" style="border-radius:50px">
                                               <div >
                            <img src="<?php echo base_url() ?>/image/feedback.jpg" height="180" width="285" />
                            </div>
                            <div class="boxs-widget l-pink p-30 -t">
                                <i class="fa fa-comments fa-3x"></i>
                            </div>
                            <div class="boxs-body">
                                <h2 class="m-0">
                                <?php
								$feedback=$this->db->get('feedback_master')->result();
								echo count($feedback);
								?>
                                </h2>
                                <span class="text-muted">feedback</span>
                            </div>
                        </section>                        
                    </div>
                    </a>
                     <a href="<?php echo site_url() ?>/addtocartCon/">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <section class="boxs boxs-simple text-center" style="border-radius:50px">
                            <div >
                            <img src="<?php echo base_url() ?>/image/cart.jpg" height="180" width="185" />
                            </div>
                            <div class="boxs-widget l-green p-30 -t">
                                <i class="fa fa-shopping-cart fa-3x"></i>
                            </div>
                            <div class="boxs-body">
                                    <h2 class="m-0">
                                    <?php
								$cart=$this->db->get('addtocart')->result();
								echo count($cart);
								?>
                                
                                    </h2>
                                        <span class="text-muted">Cart Items</span>
                                   
                                                           </div>
                        </section>
                    </div>
                    </a>
                </div>
        

    
    <!-- Vendor JavaScripts -->
    <script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>

    <!--/ vendor javascripts -->
     <script src="<?php echo base_url() ?>assets/js/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
 
    <script src="<?php echo base_url() ?>assets/bundles/flotscripts.bundle.js"></script>    
    <script src="<?php echo base_url() ?>assets/bundles/d3cripts.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/sparkline.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/raphael.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/morris.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/bundles/loadercripts.bundle.js"></script>

    <!-- page Js -->
    <script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?php echo base_url() ?>assets/js/page/index.js"></script>     
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:55:29 GMT -->
</html>
<br />

<section class="newslatter">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Subscribe our Newsletter <span>Get <strong>25% Off</strong> first purchase!</span></h3>
          </div>
          <div class="col-md-6">
            <form method="post" action="<?php echo site_url() ?>/addTocartcontrol/subscribe/">
              <input type="email" name="useremail" placeholder="Your email address here..." required>
              <button type="submit" style="background-color:#5c8a15" >Subscribe !</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  
  <!-- Footer -->
  <footer>
    <div class="container"> 
      
      <!-- Footer Upside Links -->
      <div class="foot-link">
        <ul>
          <li><a href="#."> About us </a></li>
          <li><a href="#."> Customer Service </a></li>
          <li><a href="#."> Privacy Policy </a></li>
          <li><a href="#."> Site Map </a></li>
          <li><a href="#."> Search Terms </a></li>
          <li><a href="#."> Advanced Search </a></li>
          <li><a href="#."> Orders and Returns </a></li>
          <li><a href="#."> Contact Us</a></li>
        </ul>
      </div>
      <div class="row"> 
        
        <!-- Contact -->
        <div class="col-md-4">
          <h4>Super Grocery!</h4>
          <p>Address: 48  Central Terminal texas, Tx 1017
            United State USA</p>
          <p>Phone: (+100) 123 456 7890</p>
          <p>Email: Support@grocery.com</p>
          <div class="social-links"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-linkedin"></i></a> <a href="#."><i class="fa fa-pinterest"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> <a href="#."><i class="fa fa-google"></i></a> </div>
        </div>
        
        <!-- Categories -->
        <div class="col-md-3">
          <h4>Categories</h4>
          <ul class="links-footer">
         <?php
		 	$catrecords=$this->db->get('categery_master')->result();
		 	foreach($catrecords as $rowww)
			{
		 ?>
         <li><a href="#."><?php echo $rowww->categery_name; ?></a></li>
         <?php
			}
		 ?>
         
            </ul>
        </div>
        
        <!-- Categories -->
        <div class="col-md-3">
          <h4>Customer Services</h4>
          <ul class="links-footer">
            <li><a href="#.">Shipping & Returns</a></li>
            <li><a href="#."> Secure Shopping</a></li>
            <li><a href="#."> International Shipping</a></li>
            <li><a href="#."> Affiliates</a></li>
            <li><a href="#."> Contact </a></li>
          </ul>
        </div>
        
        <!-- Categories -->
        <div class="col-md-2">
          <h4>Information</h4>
          <ul class="links-footer">
            <li><a href="#.">Our Blog</a></li>
            <li><a href="#."> About Our Shop</a></li>
            <li><a href="#."> Secure Shopping</a></li>
            <li><a href="#."> Delivery infomation</a></li>
            <li><a href="#."> Store Locations</a></li>
            <li><a href="#."> FAQs</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Rights -->
  <div class="rights">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>Copyright © 2020 <a href="#." class="ri-li"> Gravity Interior </a></p>
        </div>
        <div class="col-sm-6 text-right"> <img src="images/card-icon.png" alt=""> </div>
      </div>
    </div>
  </div>
  
  <!-- End Footer --> 
  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End --> 
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> 
<script src="<?php echo base_url() ?>js/vendors/jquery/jquery.min.js"></script> 
<script src="<?php echo base_url() ?>js/vendors/wow.min.js"></script> 
<script src="<?php echo base_url() ?>js/vendors/bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>js/vendors/own-menu.js"></script> 
<script src="<?php echo base_url() ?>js/vendors/jquery.sticky.js"></script> 
<script src="<?php echo base_url() ?>js/vendors/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="<?php echo base_url() ?>rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>rs-plugin/js/jquery.tp.min.js"></script> 
<script src="<?php echo base_url() ?>js/main.js"></script>


<!--search-->

<link rel="stylesheet" href="<?php echo base_url() ?>search/easy-autocomplete.min.css"/>
<script src="<?php echo base_url() ?>search/jquery.easy-autocomplete.min.js"></script>
<script>
$(document).ready(function(){
  var options = 
  {
  url: "<?php echo site_url() ?>/Welcome/fetchdata",
  getValue:"s_name",
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
			value=value.substr(0,45);
		//	alert(value);
		}
	 return "<b id='result' ><p style='width:40px;height:30px;' />"+"<span style='float:left;margin-top:-30px;margin-left:35px;'>"+value+"</span></p></b>";
	    }
  },
  theme: "square"
};
$("#search").easyAutocomplete(options);
});
</script>
</body>

</html>
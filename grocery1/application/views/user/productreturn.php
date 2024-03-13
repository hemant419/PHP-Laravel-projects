 <!-- Content -->
  <div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Authentication</li>
        </ol>
      </div>
    </div>
    
    <!-- Blog -->
    <section class="login-sec padding-top-30 padding-bottom-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6"> 
            <!-- Login Your Account -->
            <h5>Product Detail</h5>
	<section class="shopping-cart ">
      <div>
        <table class="table">
          <thead>
            <tr>
              <th>Items</th>
            </tr>
          </thead>
          <tbody>
            <!-- Item Cart -->
            <tr>
              <td><div class="media" >
                  <center>
				   <a href="#.">

<?php

			$this->db->where("product_id",$prd->product_id);
			$imgdata=$this->db->get('productimage')->row();
			
?>
				   		<img class="img-responsive" src="<?php echo base_url()?>admin/images/<?php echo $imgdata->image ?>" alt=""  > 
					</a> 
				
                  <div class="media-body">
                    <p><?php echo $prd->product_description ?></p>
                  </div>
				  
				  </center>
                </div>
			  </td>  	
            </tr>
			<?php // } ?>
           </tbody>
        </table>
        <!-- Button -->
      </div>
    </section>
      </div>
          
          <!-- Don’t have an Account? Register now -->
          <div class="col-md-6">
            <h5>Don’t have an Account? Register now</h5>
            
            <!-- FORM -->
            <form method="post" action="<?php echo site_url() ?>/myaccount/productreturn/<?php echo $prd->product_id ?>/<?php echo $userdata->user_id ?>/<?php echo $this->uri->segment(3); ?>"> 
              <ul class="row">
                <li class="col-sm-12">
                  <label>Username
     <input type="text" class="form-control" name="name" value="<?php echo $userdata->userfname ?>
	<?php echo $userdata->userlname ?>">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Email
     <input type="text" class="form-control" name="email" value="<?php echo $userdata->useremail ?>">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Contact
               <input type="text" class="form-control" name="contact" value="<?php echo $userdata->contactno ?>">
                  </label>
                </li>
				<li class="col-sm-12">
                  <label>Reason
                  <input type="text" class="form-control" name="resion">
                  </label>
                </li>
				<li class="col-sm-12">
                  <label>Description
                     <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                      </label>
                    </li>

                <li class="col-sm-12 text-left">
                  <button type="submit" class="btn-round">Register</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </section>

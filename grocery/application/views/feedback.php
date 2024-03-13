 <!-- Content -->
  <div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Feedback</li>
        </ol>
      </div>
    </div>
    
    <!-- Contact -->
    <section class="contact-sec padding-top-40 padding-bottom-80">
      <div class="container">  
        <!-- Conatct -->
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contact_form" class="contact-form" method="post" action="<?php echo site_url() ?>/Welcome/feedbackdata/">
              <div class="row">
                <div class="col-md-8"> 
                  
                  <!-- Payment information -->
                  <div class="heading">
                    <h2>Dou You have a Question for Us ?</h2>
                  </div>
                  <ul class="row">
                    <li class="col-sm-6">
                      <label>First Name :
                        <input type="text" required="required" class="form-control" name="name" id="name" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-6">
                      <label>Last Name :
                        <input type="text" required="required" class="form-control" name="lname" id="name" placeholder="">
                      </label>
                    </li>
					 <li class="col-sm-6">
                      <label>Email :
                        <input type="email" required="required" class="form-control" name="email" id="email" placeholder="">
                      </label>
                    </li>
					<li class="col-sm-6">
                      <label>Contact No :
                        <input type="text" required="required" class="form-control" name="contact" id="name" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>Message :
                        <textarea class="form-control" name="message" required="required" id="message" rows="5" placeholder=""></textarea>
                      </label>
                    </li>
					  <li class="col-sm-12 no-margin">
                     <input type="submit" value="submit" class="btn-round" id="btn_submit">Send Message</button>
                    </li>
                  </ul>
                </div>
                </form>
                <!-- Conatct Infomation -->
                <div class="col-md-4">
                  <div class="contact-info">
                    <h5>Gravity</h5>
                    <hr>
                    <h6> Address:</h6>
                    <p>45 Grand Central Terminal New York, NY 1017
                      United State USA</p>
                    <h6>Phone:</h6>
                    <p>(+100) 123 456 7890</p>
                    <p>(+100) 987 654 3210 </p>
                    <h6>Email:</h6>
                    <p>Support@smarttech.com
                      Support24/7@smarttech.com</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
   
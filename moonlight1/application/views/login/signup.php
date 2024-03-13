<div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Login Form</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-6 information-entry">
                            <div class="login-box">
                                <div class="article-container style-1">
                                    <h3>Registered Customers</h3>
                                    <p style="color:#F00"><?php // echo $error ?></p>
                                </div>
                                <form method="post" action="<?php echo site_url() ?>/logincontroller/userregister">
                                		<label>Your Name <span>*</span></label>
                                        <input name="ufname" class="simple-field" type="text" placeholder="Your name (required)"  required="required" />
                                        
                                        <label>Your Surname</label>
                                        <input name="ulname" class="simple-field" type="text" placeholder="Your surname (required)" required="required" />
                                        
                                        <label>Your Email <span>*</span></label>
                                        <input name="uemail" class="simple-field" type="email" placeholder="Your email address (required)" required="required"/>
                                        
                                        <label>Your New Password <span>*</span></label>
                                        <input name="upassword" class="simple-field" type="password" placeholder="Create New Password (required)" required="required" id="upassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters"/>
                                        
                                        <label>Confirm New Password <span>*</span></label>
                                        <input name="ucpassword" class="simple-field" type="password" placeholder="Your email address (required)" required="required"  id="ucpassword" />
                                       
                                        <label>Your Contact <span>*</span></label>
                                        <input name="umobile" class="simple-field" type="text" placeholder="Your Contact Number(required)" pattern="[789][0-9]{9}" title="Please Enter Valid Mobile Number" required="required"/>       
                                             <div class="button style-10">Sign Up<input type="submit" value="" /></div>                          
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6 information-entry">
                            <div class="login-box">
                                <div class="article-container style-1">
                                    <h3>Login</h3>
                                    <p>Get access to your Orders, Wishlist and Recommendations.</p>
                                </div>
                                <a class="button style-12" href="<?php echo site_url() ?>/logincontroller">Login</a>
                            </div>
                        </div>
                    </div>
                </div>

                
  <script>
  var password = document.getElementById("upassword")
  , confirm_password = document.getElementById("ucpassword");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Your Confirm Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
  
  </script>              
                
                                


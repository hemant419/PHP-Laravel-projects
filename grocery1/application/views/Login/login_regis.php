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
            <h5>Login Your Account</h5>
            
            <!-- FORM -->
            <form name="login" method="post" action="<?php echo site_url() ?>/user_cont/user_login">
			<p style="color:red"> <?php echo $error ?></p>
              <ul class="row">
                <li class="col-sm-12">
                  <label>Username
                    <input type="email" class="form-control" name="name" placeholder="" required="required">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Password
                    <input type="password" class="form-control" name="pass" placeholder="" required="required">
                  </label>
                </li>
                <li class="col-sm-6">
                
               
                  <div class="checkbox checkbox-primary">
                    <input id="cate1" class="styled" type="checkbox" >
                    <label for="cate1"> Keep me logged in </label>
                  </div>
                </li>
                
                <li class="col-sm-6"> <a href="#." class="forget">Forgot your password?</a> </li>
                <li class="col-sm-12 text-left">
                 <button type="submit" class="btn-round">Login</button>

                </li>
              </ul>
            </form>
          </div>
          
          <!-- Don’t have an Account? Register now -->
          <div class="col-md-6">
            <h5>Don’t have an Account? Register now</h5>
            
            <!-- FORM -->
            <form name="ragis"  method="post" action="<?php echo site_url() ?>/user_cont/ragistration">
              <ul class="row">
                <li class="col-sm-12">
                  <label>First Name
                    <input type="text" class="form-control" name="name" placeholder="" required="required">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Last Nane
                    <input type="text" class="form-control" name="lname" placeholder="" required="required">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Email
                    <input type="email" class="form-control" name="email" placeholder="" required="required">
                  </label>
                </li>
                <li class="col-sm-12">
                  <label>Password
                    <input type="password" class="form-control" name="pass" placeholder="" required="required">
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
    
   </div>
  <!-- End Content --> 

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
            <h5>priscription Upload</h5>
            
			
            <!-- FORM -->
			<p style="color:red"><?php echo $error;?></p>
			<p style="color:red"><?php echo $ono;?></p>
            <form method="post" action="<?php echo site_url() ?>/Welcome/prisriupload/" enctype="multipart/form-data">
              <ul class="row">
                <li class="col-sm-6">
                  <label>UserName
                    <input type="text" class="form-control" name="name" placeholder="">
                  </label>
                </li>
				<li class="col-sm-6">
                  <label>UserLastName
                    <input type="text" class="form-control" name="lname" placeholder="">
                  </label>
                </li>
                <li class="col-sm-6">
                  <label>Email
                    <input type="email" class="form-control" name="email" placeholder="">
                  </label>
                </li>
                <li class="col-sm-6">
                  <label>Contact No
                    <input type="contact" class="form-control" name="contect" placeholder="">
                  </label>
                </li>
				<li class="col-sm-6">
                  <label>Shipping Address
                    <input type="text" class="form-control" name="address" placeholder="">
                  </label>
                </li>
				<li class="col-sm-6">
                  <label>Prisription Upload
                    <input type="file" name="file" class="form-control">
                  </label>
                </li>
                <li class="col-sm-12 text-left">
                  <button type="submit" class="btn-round">Submit</button>
				  <a href="<?php echo site_url() ?>/Welcome/priscridata/" class="btn-round">priscription</a>
                </li>
              </ul>
            </form>
          </div>
          <!-- Don’t have an Account? Register now -->
          <div class="col-md-6">
            <h5>Check your priscription</h5>
            
			<br  />
			<br  />
			<br  />
            <!-- FORM -->
            <form method="post" action="<?php echo site_url() ?>/Welcome/checkpriscription/" enctype="multipart/form-data">
              <ul class="row">
			  	<p style="color:#339900"><?php echo $error22;?></p>
                <li class="col-sm-6">
                  <label>Email
                    <input type="email" class="form-control" name="email" placeholder="">
                  </label>
                </li>
				<li class="col-sm-6">
                  <label>Prisription Upload
                    <input type="number" class="form-control" name="orderno" placeholder="">
                  </label>
                </li>
                <li class="col-sm-12 text-left">
                  <button type="submit" class="btn-round">Submit</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </section>
  
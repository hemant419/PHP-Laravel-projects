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
                                    <h3>Customer Login</h3>
                                    <p style="color:#F00"><?php echo $error ?></p>
                                </div>
                                <form method="post" action="<?php echo site_url() ?>/logincontroller/login">
                                    <label>Email Address</label>
                                    <input class="simple-field" type="text" placeholder="Enter Email Address" value="" name="uemail" />
                                    <label>Password</label>
                                    <input class="simple-field" type="password" placeholder="Enter Password" value="" name="upassword" />
                                    <div class="button style-10">Login<input type="submit" value="" /></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-6 information-entry">
                            <div class="login-box">
                                <div class="article-container style-1">
                                    <h3>Looks like you're new here!</h3>
                                    <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                </div>
                                <a class="button style-12" href="<?php echo site_url() ?>/logincontroller/signup" >Register Account</a>
                            </div>
                        </div>
                    </div>
                </div>

                
                
                
                                


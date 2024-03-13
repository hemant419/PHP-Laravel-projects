  <div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Account</a>
                    <a href="#">Profile</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-9 col-sm-push-3">
                            <div class="wishlist-header hidden-xs">
                          
                            
                            <form method="post" action="<?php echo site_url() ?>/usercontroller/updateprofile">
                                <div class="title-1">User Profile</div>
                             <div class="col-sm-6">
                               <br>
                                        <label>Your Name <span>*</span></label>
                                        <input name="ufname" class="simple-field" type="text" placeholder="Your name (required)" style="cursor:not-allowed" required value="<?php echo ucfirst($userinfo->user_name) ?>" disabled="disabled"/>
                                        <label>Your Surname</label>
                                        <input name="ulname" class="simple-field" type="text" placeholder="Your surname" style="cursor:not-allowed" value="<?php echo ucfirst($userinfo->user_lastname) ?>" disabled="disabled"/>
                                        <label>Your Email <span>*</span></label>
                                        <input name="uemail" class="simple-field" type="email" placeholder="Your email address (required)" style="cursor:not-allowed" required value="<?php echo ucfirst($userinfo->user_email) ?>" disabled="disabled"/>
                                        <label>Your Contact <span>*</span></label>
                                        <input name="umobile" class="simple-field" type="number" placeholder="Your Contact number (required)" style="cursor:not-allowed" required value="<?php echo $userinfo->user_contact ?>" disabled="disabled"/>
                          
                                        <div class="button style-10" id="edit" onclick="editprofile()"> Edit My Profile<input type="button" value="" /></div>
                                        
                                        <div class="button style-10" id="update" style="display:none"> Update My Profile<input type="submit" value="" /></div>
                                        
                                        
                                    </div>
                            </div>
                           </form> 
                            
                            
                        </div>
                        <div class="col-sm-3 col-sm-pull-9 blog-sidebar">
                            <div class="information-blocks">
                                <div class="categories-list account-links">
                                    <div class="block-title size-3">Client account</div>
                                    <ul>
                            <li style="background-color:#E7E7E7" >
                            <a href="<?php echo site_url() ?>/homecontroller/user">My Profile</a></li>
                            <li><a href="<?php echo site_url() ?>/usercontroller/changepasswordpage">Change Password </a></li>
                            <li><a href="<?php echo site_url() ?>/cartcontroller">My Cart</a></li>
                            <li><a href="<?php echo site_url() ?>/wishlistcontroller">My Wishlist</a></li>
                            <li><a href="#">My Reviews</a></li>
                            <li><a href="<?php echo site_url() ?>/usercontroller/myorder">Order History</a></li>
                                        
                                    </ul>
                                </div>
                                <div class="article-container">
                                    <br/>Custom CMS block displayed below the one page account panel block. Put your own content here.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<script>
function editprofile()
{
$('.simple-field').removeAttr("disabled");	
$('.simple-field').css('cursor', 'default');
$('#edit').hide();
$('#update').show();
}
</script>
<script>
function reloadcaptcha()
{
		$("#capimg").attr("src", "<?php echo site_url() ?>/Checkout/captchaimg");

}
function captach()
{
	var value3 = document.getElementById("captchaid").value;
	$.ajax({
	url:"<?php echo site_url() ?>/Checkout/capthca/"+value3,
	success: function(data)
	{
		
		if(value3=="")
		{
		$('#Errorcaptcha').html("<font color='red'>Please Enter Captcha Code !</font>");	
		}
		else if(data=="0")
		{
		$('#Errorcaptcha').html("<font color='red'>Invalid Captcha Code . Please Try Again !</font>");	
	
		setTimeout(function(){ 
		$("#capimg").attr("src", "<?php echo site_url() ?>/Checkout/captchaimg");
		},300);	
		
		}
		else
		{
		document.getElementById('placeorder').style.display="block";	
		$('#Errorcaptcha').html("<font color='green'>Varification Applied Successfully !</font>");
		document.getElementById('apply12').style.visibility="hidden";
		
		}
	}
	})	
}	
</script>



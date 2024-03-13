  <div class="content-push">

                <div class="breadcrumb-box">
                    <a href="#">Home</a>
                    <a href="#">Account</a>
                    <a href="#">Change Password</a>
                </div>

                <div class="information-blocks">
                    <div class="row">
                        <div class="col-sm-9 col-sm-push-3">
                            <div class="wishlist-header hidden-xs">
                          
                            
                            
                                <div class="title-1">Change Password</div>
                             <div class="col-sm-6">
                 			
                				<center>
                                <h4 style="color:#090;" id="congrates"></h4>                 				</center>
 
                               <br>
                                        <label>Enter Current Password <span>*</span></label>
                                        <input id="currentpass" class="simple-field" type="text" placeholder="Your Current Password (required)"  value="" />
                   <p id="invalidcurrentpass" style="color:#eb0101"></p>                    
                                        
                                        
                                        
                                        <label>Enter New Password <span>*</span></label>
                                        <input id="newpass" class="simple-field" type="password" placeholder="Your New Password (required)"  value="" />
                   <p id="chkchar" style="color:#eb0101"></p>                    
                                        
                                        <label>Confirm Your New Password <span>*</span></label>
                                        <input id="confirmpass" class="simple-field" type="password" placeholder="Please Confirm New Password (required)"  value=""/>
                   <b id="invalidpass" style="color:#eb0101"></b>                    
                                        
                                        <div class="button style-10"> 
                                        Change Password
                                        <input type="button" value="" onclick="chgpass()"/></div>
                                        
                                    </div>
                            </div>
                            
                        </div>
                        <div class="col-sm-3 col-sm-pull-9 blog-sidebar">
                            <div class="information-blocks">
                                <div class="categories-list account-links">
                                    <div class="block-title size-3">Client account</div>
                                    <ul>
                            <li>
                            <a href="<?php echo site_url() ?>/homecontroller/user">My Profile</a></li>
                    <li style="background-color:#E7E7E7"><a href="<?php echo site_url() ?>/usercontroller/changepasswordpage">Change Password </a></li>
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
function chgpass()
{
	var div = document.getElementById('invalidpass');
	var div1 = document.getElementById('chkchar');
	var div2 = document.getElementById('invalidcurrentpass');

	var interval = 80;
	var distance = 5;
	var times = 5;
	
	$(div).css('position', 'relative');
	for (var iter = 0; iter < (times + 1) ; iter++) {
	$(div).animate({
	left: ((iter % 2 == 0 ? distance : distance * -1))
	}, interval);
	}

	$(div1).css('position', 'relative');
	for (var iter = 0; iter < (times + 1) ; iter++) {
	$(div1).animate({
	left: ((iter % 2 == 0 ? distance : distance * -1))
	}, interval);
	}
	
	$(div2).css('position', 'relative');
	for (var iter = 0; iter < (times + 1) ; iter++) {
	$(div2).animate({
	left: ((iter % 2 == 0 ? distance : distance * -1))
	}, interval);
	}
	

	var currentpass=$("#currentpass").val();
	var newpass=$("#newpass").val();
	var confirmpass=$("#confirmpass").val();

		if(currentpass=="")
		{
			$("#congrates").hide();
			$("#chkchar").hide();
			$("#invalidcurrentpass").show();
			$("#invalidcurrentpass").html("Please Enter Current Password !");
			$(div2).animate({ left: 0 }, interval);
		}
		else if(newpass=="")
		{
			$("#invalidcurrentpass").hide();
			$("#chkchar").show();
			$("#chkchar").html("Please Enter New Password !");
			$(div).animate({ left: 0 }, interval);
			$("#congrates").hide();
		}
		else if(newpass.length < 6)
		{
		$("#invalidcurrentpass").hide();
		$("#chkchar").show();
		$("#chkchar").html("Please Enter Atleast 6 Character !");
		$(div).animate({ left: 0 }, interval);
		$("#congrates").hide();

		}
		else if(confirmpass=="")
		{
			$("#invalidcurrentpass").hide();
			$("#invalidpass").html("Please Enter Confirm Password");
			$(div).animate({ left: 0 }, interval);
			$("#congrates").hide();
			$("#chkchar").hide();
						
		}
		
		else if(newpass!=confirmpass)
		{
		$("#invalidcurrentpass").hide();
		$("#invalidpass").html("Incorrect Confirm Password");
		$(div).animate({ left: 0 }, interval);
		$("#congrates").hide();
		$("#chkchar").hide();
		}	
		else
		{
		$("#invalidpass").html("");
		$.ajax({
				url:"<?php echo site_url() ?>/usercontroller/chgpassworddata/"+currentpass+"/"+newpass,
				method:"post",
				success: function(res)
				{
					if(res>0)
					{
					$("#congrates").hide();
					$("#chkchar").hide();
					$("#invalidcurrentpass").show();
					$("#invalidcurrentpass").html("Your Current Password Does Not Match !");
					$(div2).animate({ left: 0 }, interval);
					}
					else
					{
					$("#currentpass").val("");
					$("#newpass").val("");
					$("#confirmpass").val("");
					$("#chkchar").hide();
					$("#congrates").show();
					$("#congrates").html("You've Changed Your Password Successfully !");
					$("#invalidcurrentpass").hide();
					
					}
				}
		});
		
		}


}
</script>


 <!-- Content -->
  <div id="content"> 
    
    <!-- Ship Process -->
    <div class="ship-process padding-top-30 padding-bottom-30">
      <div class="container">
        <ul class="row">
          
          <!-- Step 1 -->
          <li class="col-sm-3">
		  <a href="<?php echo site_url() ?>/Welcome/viewcart">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Step 1</span>
              <h6>Shopping Cart</h6>
            </div>
		</a>
          </li>
          
          <!-- Step 2 -->
          <li class="col-sm-3">
		  	<a href="<?php echo site_url() ?>/addTocartcontrol/payment">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Step 2</span>
              <h6>Payment Methods</h6>
            </div>
			</a>
          </li>
          
          <!-- Step 3 -->
          <li class="col-sm-3 current">
		  	<a href="<?php echo site_url() ?>/addTocartcontrol/Delivery">
            <div class="media-left"> <i class="flaticon-delivery-truck"></i> </div>
            <div class="media-body"> <span>Step 3</span>
              <h6>Delivery Methods</h6>
            </div>
			</a>
          </li>
          
          <!-- Step 4 -->
          <li class="col-sm-3">
		  	<a href="<?php echo site_url() ?>/addTocartcontrol/confirmation">
            <div class="media-left"> <i class="fa fa-check"></i> </div>
            <div class="media-body"> <span>Step 4</span>
              <h6>Confirmation</h6>
            </div>
			</a>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Payout Method -->
    <!-- Payout Method -->
    <section class="padding-bottom-60">
      <div class="container"> 
        <!-- Payout Method -->
        <div class="pay-method">
          <div class="row">
            <div class="col-md-6"> 
              
              <!-- Your information -->
              <div class="heading">
                <h2>Your information</h2>
                <hr>
              </div>
              <form method="post" name="confirmForm" id="confirmForm" >
                <div class="row"> 
                  <!-- Name -->
                  <div class="col-sm-6">
                    <label> First name
                      <input class="form-control" type="text" name="name" id="name">
                    </label>
					<p style="color:red" id="nameErr"></p>
                  </div>
                  
                  <!-- Number -->
                  <div class="col-sm-6">
                    <label> Last Name
                      <input class="form-control" type="text" name="lname" id="lname" />
                    </label>
					<p style="color:red" id="lnameErr"></p>
                  </div>
                  
                  <!-- Card Number -->
                  <div class="col-sm-7">
                    <div class="row">
                      <div class="col-xs-6">
                        <label> Country </label>
                        <select class="selectpicker" name="country" id="country">
                          <option value="India"> India </option>
                         
                        </select>
                      </div>
                      <div class="col-xs-6">
                        <label> City </label>
                        <select class="selectpicker" name="city" id="city">
                         
						  <option value="surat">  surat</option>
                          
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <label> State
                      <input class="form-control" type="text" name="state" id="state" value="Gujarat" disabled="disabled">
                    </label>
                  </div>
                  
                  <!-- Zip code -->
                  <div class="col-sm-4">
                    <label> Zip code
                      <input class="form-control" type="number" name="pincode" id="pincode" maxlength="7">
                    </label>
					<p style="color:red" id="pincodeErr"></p>
                  </div>
                  
                  <!-- Address -->
                  <div class="col-sm-8">
                    <label> Address
                      <input class="form-control" type="text" name="address" id="address">
                    </label>
					<p style="color:red" id="addressErr"></p>
                  </div>
				  
				  <div class="col-sm-10">
                    <label> Address
                      <input class="form-control" type="text" name="saddress" id="saddress">
                    </label>
					<p style="color:red" id="saddressErr"></p>
                  </div>
                  
                  <!-- Phone -->
                  <div class="col-sm-6">
                    <label> Phone
                      <input class="form-control" type="number" name="phone" id="phone">
                    </label>
					<p style="color:red" id="phoneErr"></p>
                  </div>
                  
                  <!-- Number -->
                  <div class="col-sm-6">
                    <label> Email
                      <input class="form-control" type="email" value="<?php echo $this->session->userdata("Useremail")?>" id="email" name="email" disabled="disabled">
                    </label>
                  </div>
                </div>
            </div>
<script>
function chkData()
{
var name=document.getElementById("name").value;
var lname=document.getElementById("lname").value;
var pincode=document.getElementById("pincode").value;
var address=document.getElementById("address").value;
var saddress=document.getElementById("saddress").value;
var phone=document.getElementById("phone").value;

$("#nameErr").html("");
$("#lnameErr").html("");
$("#pincodeErr").html("");
$("#addressErr").html("");
$("#saddressErr").html("");
$("#phoneErr").html("");
	if(name=="")
	{
		$("#nameErr").html("Please Enter Name");
		return false;
	}
	else if(lname=="")
	{
		$("#lnameErr").html("Please Enter Name");
		return false;
	}
	else if(pincode=="")
	{
		$("#pincodeErr").html("Please Enter pincode");
		return false;
	}
	else if(address=="")
	{
		$("#addressErr").html("Please Enter address");
		return false;
	}
	else if(saddress=="")
	{
		$("#saddressErr").html("Please Enter sippingaddress");
		return false;
	}
	else if(phone=="")
	{
		$("#phoneErr").html("Please Enter phone number");
		return false;
	}
	else
	{
		//var charges=document.getElementById("delivery").value;
		//alert(charges);
		document.getElementById('confirmForm').action="<?php echo site_url() ?>/addTocartcontrol/deliverydata";
	}
}
</script>            
            <!-- Select Your Transportation -->
            <div class="col-md-6">
              <div class="heading">
                <h2>Select Your Transportation</h2>
                <hr>
              </div>
              <div class="transportation">
                <div class="row"> 
                  
<script>
window.onload=myHide;
function myHide(){
    
        $("#fast").addClass("charges select");
		document.getElementById("delivery").value = "25";
   
}
function myclass()
{
		$("#free").addClass("charges select");
		$("#fast").removeClass("select");
		$("#express").removeClass("select");
		document.getElementById("delivery").value = "0";
}
function myclassFast()
{
		$("#fast").addClass("charges select");
		$("#free").removeClass("select");
		$("#express").removeClass("select");
		document.getElementById("delivery").value = "25";
}function myclassExpress()
{
		$("#express").addClass("charges select");
		$("#fast").removeClass("select");
		$("#free").removeClass("select");
		document.getElementById("delivery").value = "75";
}
</script>				  
                  <!-- Free Delivery -->
                  <div class="col-sm-6">
                    <div class="charges" id="free" onclick="myclass()">
                      <h6>Free Delivery</h6>
                      <br><input type="hidden"  name="delivery" id="delivery">
                      <span>48 Hours</span> </div>
                  </div>
                  
                  <!-- Free Delivery -->
                  <div class="col-sm-6">
                    <div class="charges" id="fast" onclick="myclassFast()">
                      <h6>Fast Delivery</h6>
                      <br>
                      <span>12 Hours</span> <span class="deli-charges"> + &#8377 25 </span> </div>
                  </div>
                  <!-- Expert Delivery -->
                  <div class="col-sm-6">
                    <div class="charges" id="express" onclick="myclassExpress()">
                      <h6>Expert Delivery</h6>
                      <br>
                      <span>2 - 3 Hours</span> <span class="deli-charges"> + &#8377 75 </span> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Button -->
        <div class="pro-btn">
		 <a href="#." class="btn-round btn-light">Back to Payment</a>
		 <input type="submit"   class="btn-round" value="Go Confirmation" id="submit" onclick="return chkData()"> </div>
      </div>
	  </form>
    </section>

   </div>
  <!-- End Content --> 
  
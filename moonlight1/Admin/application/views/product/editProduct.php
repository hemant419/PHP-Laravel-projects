

<?php $data=date('Y-m-d');?>
<script>
window.onload=startEnd;
function startEnd()
{	
	$("#startdate2").hide();
	$("#enddate2").hide();
	document.getElementById("startdate2").setAttribute("min","<?php echo $product->prd_startdate ?>");

	//Image Error
	$("#error").hide();
	$("#error2").hide();
	$("#error3").hide();
	var ptype=document.getElementById("prdtype").value;
	
	$.ajax({
				url:"<?php echo site_url()?>/productcontrol/selectSubcatEdit/<?php echo $product->cat_id ?>/<?php echo $this->uri->segment(3); ?>",
					success:function(datasub)
					{
						var abc=datasub.substr(0,2);
						if(abc==1)
						{
							$("#prdtype").attr('disabled',false);
							$("#prdtype").attr('required',true);
							$("#prdtype").html("<?php foreach($prdType as $prdTypeData){ ?><option value='<?php echo $prdTypeData->ptype_id ?>'<?php  echo ($prdTypeData->ptype_id==$product->ptype_id) ? "selected='selected'":null ;?> ><?php echo $prdTypeData->ptype_name ?> </option><?php }	?>");
						}else
						{
								$("#prdtype").attr('disabled',true);
								$("#size").attr('disabled',true);
								$("#size").attr('required',false);
								$("#sizeS").attr('disabled',true);
								$("#sizeS").attr('required',false);
								$("#sizeT").attr('disabled',true);
								$("#sizeT").attr('required',false);
								$("#sizeF").attr('disabled',true);
								$("#sizeF").attr('required',false);
						}
						$("#data").html(datasub);
						
					}
				});
		 $.ajax({
				url:"<?php echo site_url()?>/productcontrol/selectBrandEdit/<?php echo $product->subcat_id ?>/<?php echo $this->uri->segment(3); ?>",
					success:function(dataBrand)
					{
						var brandData=dataBrand.split("*");
						$("#branddata").html(brandData[0]);
						$("#prdtype").html(brandData[2]);
					}
				});
	}
 	function subcategory(id)
	{
	    $.ajax({
					url:"<?php echo site_url()?>/productcontrol/selectSubcat/"+id,
					success:function(data)
					{
					var abc=data.substr(0,2);
					if(abc==1)
					{
						$("#prdtype").attr('disabled',false);
						$("#prdtype").attr('required',true);
						
					}else
					{
							$("#prdtype").empty();
							$("#prdtype").html("<option value=''></option> ");	
							$("#prdtype").attr('disabled',true);
					}
						$("#data").html(data);
						$("#subdata").empty();
						$("#subdata").html("<option value=''></option> ");
						$("#branddata").empty();
						$("#branddata").html("<option value=''></option> ");

					}
				});
	}function brand(subcatid)
	{
	    $.ajax({
					url:"<?php echo site_url()?>/productcontrol/selectBrand/"+subcatid,
					success:function(branddata)
					{	
						var brandData=branddata.split("*");
					
					if(brandData[1]!="")
					{
						$("#size").attr('disabled',false);
						$("#size").attr('required',true);
						$("#sizeS").attr('disabled',false);
						//$("#sizeS").attr('required',true);
						$("#sizeT").attr('disabled',false);
					//	$("#sizeT").attr('required',true);
						$("#sizeF").attr('disabled',false);
					//	$("#sizeF").attr('required',true);
					}
					else{
							$("#size").attr('disabled',true);
							$("#size").attr('required',false);
							$("#sizeS").attr('disabled',true);
							$("#sizeS").attr('required',false);
							$("#sizeT").attr('disabled',true);
							$("#sizeT").attr('required',false);
							$("#sizeF").attr('disabled',true);
							$("#sizeF").attr('required',false);
					}	
					$("#branddata").html(brandData[0]);
					$("#prdtype").html(brandData[2]);
		
					}
				});
	}
	function startDate(id)
	{	
		if(id=="")
		{
			$("#startdate1").show();$("#startdate2").hide();
			$("#enddate1").show();$("#enddate2").hide();
		}else
		{
			$("#startdate1").hide();$("#startdate2").show();$("#startd").hide();
			$("#enddate2").show();	$("#enddate1").hide();
			document.getElementById("startdate2").setAttribute("min","<?php echo $data ?>");
			document.getElementById("enddate2").setAttribute("min","<?php echo $data ?>");
	
		}
	}
	function  validDate(data)
	{			

			var newD=data.split("-");
			var mydate= new Date(data);
			var mynextdate=mydate.getDate()+1;
			
			newD[2]=mynextdate;
			var mydate=new Date(newD);	
			var date=newD[0]+"-"+newD[1]+"-"+newD[2]; 
			document.getElementById("enddate2").setAttribute("min",date);
			//$("#data123").html(date);
	}
</script>
<!--  CONTENT  -->
<section id="content">
  <div class="page page-forms-common">
    <!-- bradcome -->
    
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blue"> <strong>Edit </strong>Product</h3>
          </div>
		  <form method="post"  enctype="multipart/form-data"
		   action="<?php echo site_url()?>/productcontrol/updateProduct/<?php echo $product->prd_id  ?>" >
          <div class="boxs-body">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Category</label>
	<select tabindex="3" class="chosen-select form-control" style="width: 240px;" name="catId" id="catId" onchange="subcategory(this.value)" required>
                 <option value="">	Select Category	</option>
				 <?php foreach($maincategory as $dataCat){?>
				 	  <option value="<?php echo $dataCat->cat_id; ?>"<?php  echo ($dataCat->cat_id==$product->cat_id) ? "selected='selected'":null ;?> >
				   		<?php echo $dataCat->cat_name; ?></option> 
				 <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Sub Ctaegory</label>
   				<select tabindex="3" class="chosen-select form-control" style="width: 240px;" name="subcatId" id="data" onchange="brand(this.value)"  required>
                 	
					<option value="">	Select Sub Category	</option>
					
					</select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Brand</label>
                  <select id="branddata"  tabindex="3" class="chosen-select form-control" style="width: 240px;" name="brandId" required>
					<option value="">		</option>
	
					<option value="">	Select Barnd	</option>
					
                    <?php foreach($Brand as $dataBrand){?>
                         <option value="<?php echo $dataBrand->brand_id; ?>" <?php echo ($dataBrand->brand_id==$product->brand_id) ? "selected='selected'":null ;?>>
						 	<?php echo $dataBrand->brand_name; ?>
						</option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
			  <div class="col-md-4">
                <div class="form-group">
                   <label>Product Type</label>
	 <select id="prdtype" tabindex="3" class="chosen-select form-control" style="width: 240px;" name="prdtype">  
					<option value=""></option>
	 </select>
                </div>
              </div>
			  <div class="col-md-4">
                <div class="form-group">
                  <label>Product Name</label>
                  <input type="text" id="few-ml" min="" value="<?php echo $product->prd_name?>" class="form-control" name="prdName" required>
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="form-group">
                  <label>Product Price</label>
                  <input type="number" id="few-ml"  min="50" value="<?php echo $product->prd_price?>"  name="prdPrice" class="form-control" required>
                </div>
              </div>
              
            </div>
			<div class="row">
				<div class="col-md-4">
                  <div class="form-group">
                    <label>Offers</label>
					<select id="offers" tabindex="3" class="chosen-select form-control" style="width: 240px;" name="offer"  required>
                    <option value="">Select offers </option>
					<?php foreach($offers as $offersData){?>
						<option value="<?php echo $offersData->offer_id?>" <?php  echo ($offersData->offer_id==$product->offer_id) ? "selected='selected'":null ;?>><?php echo $offersData->offer_title?> </option>
					<?php }?>
                    </select>
					</div>
				</div>
                <div class="col-md-4">
                  <div class="form-group"> 
					<label>Product Color</label>
				   <?php
				   			
							$col=$product->prd_color;
							$color=preg_split("/-/",$col);
				  ?>
                  <input type="text" id="all-ml" name="color1" value="<?php print $color[0];?>" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                     <label>Product Color</label>
		        <input type="text" id="all-ml"name="color2" value="<?php print $color[1]; ?>" class="form-control" required>
                  </div>
                </div>
                
               </div>
            
			<div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Size</label>
					<div class="checkbox">
						<?php if( $product->prd_size=="M,L,XL" ){?>
						<label>
						<input type="checkbox" id="size" name="size[]" value="M"  checked="checked"> Medium
						</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label>
						<input type="checkbox" id="sizeS" name="size[]" value="L"  checked="checked"> Large
						</label><br />				
						<label>
					<input type="checkbox" id="sizeT" name="size[]" value="XL"  checked="checked"> Extra Large
						</label>&nbsp;&nbsp;&nbsp;&nbsp;
					
						<?php }else if($product->prd_size=="M,L"){?>
						<label>
						<input type="checkbox" id="size" name="size[]" value="M"  checked="checked"> Medium
						</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label>
						<input type="checkbox" id="sizeS" name="size[]" value="L"  checked="checked"> Large
						</label><br />				
						<label>
					<input type="checkbox" id="sizeT" name="size[]" value="XL" > Extra Large
						</label>&nbsp;&nbsp;&nbsp;&nbsp;
						
						<?php }else if($product->prd_size=="M,XL"){?>
						<label>
							<input type="checkbox" id="size" name="size[]" value="M"  checked="checked"> Medium
						</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label>
						<input type="checkbox" id="sizeS" name="size[]" value="L" > Large
						</label><br />				
						<label>
					<input type="checkbox" id="sizeT" name="size[]" value="XL"  checked="checked"> Extra Large
						</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php }else if($product->prd_size=="L,XL"){?>
						<label>	<input type="checkbox" id="size" name="size[]" value="M"  > Medium
						</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label>
						<input type="checkbox" id="sizeS" name="size[]" value="L"  checked="checked"> Large
						</label><br />				
						<label>
					<input type="checkbox" id="sizeT" name="size[]" value="XL"  checked="checked"> Extra Large
						</label>&nbsp;&nbsp;&nbsp;&nbsp;
						
						<?php }else if($product->prd_size=="M"){?>
						<label>
						<input type="checkbox" id="size" name="size[]" value="M"  checked="checked"> Medium
						</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label>
						<input type="checkbox" id="sizeS" name="size[]" value="L"  > Large
						</label><br />				
						<label>
					<input type="checkbox" id="sizeT" name="size[]" value="XL"  > Extra Large
						</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php }else if($product->prd_size=="L"){?>
							<label><input type="checkbox" id="size" name="size[]" value="M"  checked=""> Medium
						</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label>
						<input type="checkbox" id="sizeS" name="size[]" value="L"  checked="checked"> Large
						</label><br />				
						<label>
					<input type="checkbox" id="sizeT" name="size[]" value="XL" > Extra Large
						</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php }else if($product->prd_size=="XL"){?>
						<label>	<input type="checkbox" id="size" name="size[]" value="M"  > Medium
						</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label>
						<input type="checkbox" id="sizeS" name="size[]" value="L"  checked="checked"> Large
						</label><br />				
						<label>
					<input type="checkbox" id="sizeT" name="size[]" value="XL"> Extra Large
						</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<?php }else{?>
						<label><input type="checkbox" id="size" name="size[]" value="M"  > Medium
						</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label>
						<input type="checkbox" id="sizeS" name="size[]" value="L"  > Large
						</label><br />				
						<label>
					<input type="checkbox" id="sizeT" name="size[]" value="XL"  > Extra Large
						</label>&nbsp;&nbsp;&nbsp;&nbsp;	
						<?php }?>
					</div>
	

					</div>
				</div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Discount</label>
   <input type="number" id="all-ml" name="discount" min="0" value="<?php echo $product->prd_discount?>" class="form-control"  required>
                  </div>
                </div>
				<div class="col-md-4">
                <div class="form-group">
                  <label>Product Stock</label>
               <input type="number" id="few-ml"  min="1" value="<?php echo $product->prd_stock?>"  class="form-control" name="prdStock" required>   
                </div>
              </div>

              </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Product Image1</label>
				  <?php echo $imgErr1; ?>
     <input type="file" class="filestyle" name="prdimg1" onchange="validImage(this.value)" data-buttonText="Find file" data-iconName="fa fa-inbox"><p id="error" style="color:red">Image Not Valid</p>
				  <?php if($product->prd_img1!=""){?>
				  <img src="<?php echo base_url()?>product/<?php echo $product->prd_img1 ?>" width="100"/>
				  <?php }?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Product Image2</label>
				   <?php echo $imgErr2; ?>
     <input type="file" class="filestyle" name="prdimg2" onchange="validImage2(this.value)"  data-buttonText="Find file" data-iconName="fa fa-inbox">			<p id="error2" style="color:red">Image Not Valid</p>
				  <?php if($product->prd_img2!=""){?>
				  <img src="<?php echo base_url()?>product/<?php echo $product->prd_img2 ?>" width="100"/>
				   <?php }?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Product Image3</label>
				   <?php echo $imgErr3; ?>
     <input type="file" class="filestyle" name="prdimg3" onchange="validImage3(this.value)" data-buttonText="Find file" data-iconName="fa fa-inbox">			<p id="error3" style="color:red">Image Not Valid</p>
	 			<?php if($product->prd_img3!=""){?>
				<img src="<?php echo base_url()?>product/<?php echo $product->prd_img3 ?>" width="100"/>
				 <?php }?>
                </div>
              </div>
            </div>
			<div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Product Description</label><textarea id="position-ml" name="prdDesc"  class="form-control" cols="20" rows="10" required><?php echo $product->prd_description?></textarea>
				</div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Product Highlights</label>
                  <textarea id="position-ml" name="prdFeature" 
class="form-control" cols="20" rows="10" required><?php echo $product->prd_feature?></textarea>
                </div>
              </div>
            </div>
			<div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Start Date</label>
              <input type="date" id="startdate1" name="prdStartDate" value="<?php echo $product->prd_startdate?>" class="form-control"  disabled="disabled" >
				
			 <input type="date" id="startdate2" name="prdStartDate" value="<?php echo $product->prd_startdate ?>" class="form-control" min="" max="" onchange="validDate(this.value)" required>
				<p id="startd">	
					<input type="checkbox" name="startd" value="1" id="startd" onclick="startDate(this.value)"/>
					New Start Date</p>
				</div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
<?php           
 echo $dat= "<p id='data123'></p>";
?>		

	      <label>End Date</label>
				  <input type="date" id="enddate1" name="prdEndDate" value="<?php echo $product->prd_enddate?>" class="form-control"  min="" max="" disabled="disabled">
			<input type="date" id="enddate2" name="prdEndDate" value="<?php echo $product->prd_enddate?>" class="form-control" min="" max="<?php $stop_date= date("Y-m-d",strtotime('+1 year')); echo $stop_date; ?>" required>    </div>
              </div>
            </div>
			<input type="submit" id="submit" class="btn btn-raised btn-primary" name="update" value="Update Product">
          </div>
		  </form>
        </section>
      </div>
    </div>
  </div>
</section>
<!--/ CONTENT -->
</div>
<!--/ Application Content -->
<!--Vendor JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/screenfull/screenfull.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/slider/bootstrap-slider.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/chosen/chosen.jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>
<!--/ vendor javascripts -->
<!--  Custom JavaScripts -->
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<script >
        $(window).load(function(){
            $('#ex1').slider({
                formatter: function(value) {
                    return 'Current value: ' + value;
                }
            });
            $("#ex1").on("slide", function(slideEvt) {
                $("#ex1SliderVal").text(slideEvt.value);
            });

            $("#ex2, #ex3, #ex4, #ex5").slider();
          
            //*load wysiwyg editor
        });
    </script>
<script>
	function validImage(img)
	{	
		var ext=img.split(".");
		if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" )){
				$("#error").hide();
		}else{	$("#error").show(); $("#submit").attr('disabled',true);	}
	}
	function validImage2(img)
	{	
		var ext=img.split(".");
		if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" )){
				$("#error2").hide();
		}else{	$("#error2").show();  $("#submit").attr('disabled',true);	}
	}function validImage3(img)
	{	
		var ext=img.split(".");
		if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" )){
				$("#error3").hide();
		}else{	$("#error3").show(); $("#submit").attr('disabled',true);	}
	}
</script>

<!--/ Page Specific Scripts -->
</body></html>
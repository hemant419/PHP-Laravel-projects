<script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.js"></script>
<?php $data="";?>
<!--  CONTENT  -->
<script>
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
					$("#prdtype").html("<?php foreach($prdType as $prdTypeData){ ?><option value='<?php echo $prdTypeData->ptype_id ?>'><?php echo $prdTypeData->ptype_name ?> </option><?php }	?>");
				}else
				{
					$("#prdtype").empty();
					$("#prdtype").html("<option value=''></option> ");
					$("#prdtype").attr('disabled',true);
				}
				$("#data").html(data);
				$("#subdata").empty();
				$("#subdata").html("<option value=''></option> ");
			}
		});
	}
function selectBrand(subid)
{
	$.ajax({
				url:"<?php echo site_url()?>/productcontrol/selectBrand/"+subid,
				success:function(subdata)
				{
					$("#subdata").html(subdata);
				}
			});
}
function  validDate(data)
{			
		var newD=data.split("-");
		var mydate= new Date(data);
		var mynextdate=mydate.getDate()+1;
		
		newD[2]=mynextdate;
		var mydate=new Date(newD);	
		var date=newD[0]+"-"+newD[1]+"-"+newD[2]; 
		document.getElementById("enddate").setAttribute("min",date);
}
</script>
<section id="content">
  <div class="page page-forms-common">
    <!-- bradcome -->
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blue"> <strong>Add </strong>Product</h3>
          </div>
          <form method="post" action="<?php echo site_url()?>/productcontrol/insertProduct" 
		  enctype="multipart/form-data" >
            <div class="boxs-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Category</label>
                    <select tabindex="3" id="default-ml" class="chosen-select form-control" style="width: 240px;" name="catId" id="catId" onchange="subcategory(this.value)" required>
                    <option value=""> Select Category </option>
                    <?php foreach($maincategory as $dataCat){?>
                    <option value="<?php echo $dataCat->cat_id; ?>"> <?php echo $dataCat->cat_name; ?> </option>
                    <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Sub Ctaegory</label>
                    <select   tabindex="3" class="chosen-select form-control" onchange="selectBrand(this.value)" style="width: 240px;" name="subcatId"  id="data" >
                      <option value=""> </option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Brand</label>
                    <select id="subdata" tabindex="3" class="chosen-select form-control" style="width: 240px;" name="brandId"  required>
                    <option value=""> </option>
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
                    <input type="text" id="few-ml" class="form-control" name="prdName" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" id="few-ml"  name="prdPrice" min="50" class="form-control" required>
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Product Color</label>
                    <input type="text" id="all-ml" name="color2" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Product Color</label>
                    <input type="text" id="all-ml"name="color1" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Size</label>
                    <input type="number" id="all-ml" name="size" min="5" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>Discount</label>
                    <input type="number" id="all-ml" name="discount" class="form-control"  required>
                  </div>
                </div>
				<div class="col-md-2">
                <div class="form-group">
                  <label>Product Stock</label>
                    <input type="number" id="few-ml" min="1"  class="form-control" name="prdStock" required>
                </div>
              </div>

              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Product Image1</label>
                    <?php echo $imgErr1; ?>
                    <input type="file" class="filestyle" name="prdimgA" data-buttonText="Find file" data-iconName="fa fa-inbox" onchange="validImage(this.value)" required>
                    <p id="error" style="color:red">Image Not Valid</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Product Image2</label>
                    <?php echo $imgErr2; ?>
                    <input type="file" class="filestyle" name="prdimgB" data-buttonText="Find file" data-iconName="fa fa-inbox" onchange="validImage2(this.value)" required>
                    <p id="error2" style="color:red">Image Not Valid</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Product Image3</label>
                    <?php echo $imgErr3; ?>
                    <input type="file" class="filestyle" name="prdimgC" data-buttonText="Find file" data-iconName="fa fa-inbox" onchange="validImage3(this.value)" required>
                    <p id="error3" style="color:red">Image Not Valid</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Product Description</label>
                    <textarea id="position-ml" name="prdDesc" maxlength="100" minlength="25" class="form-control" required></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Product Feature</label>
                    <textarea id="position-ml" name="prdFeature" maxlength="100" minlength="25" class="form-control" required></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Start Date</label>
                    <input type="date" id="startdate1" onchange="validDate(this.value)" name="prdStartDate" class="form-control" min="<?php echo date("Y-m-d") ?>" max="" required><!-- document.getElementById('enddate').min=(this.value);-->
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>End Date</label>
                    <input type="date" id="enddate" name="prdEndDate" class="form-control"  min="" max="<?php $stop_date= date("Y-m-d",strtotime('+1 year')); echo $stop_date; ?>" required>
                  </div>
                </div>
              </div>
              <input type="submit" id="submit" class="btn btn-raised btn-primary" name="insert" value="Insert Product">
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
window.onload=ImageError;
function ImageError()
{	
	//Image Error
	$("#error").hide();		$("#error2").hide();		$("#error3").hide();
	document.getElementById("enddate").setAttribute("min","<?php echo date('Y-m-d')?>");
	document.getElementById("prdtype").setAttribute("disabled","disabled");
}	
function validImage(img)
{	
	var ext=img.split(".");
	if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" ))
	{
			$("#error").hide();$("#submit").attr('disabled',false);
	}
	else
	{	
			$("#error").show(); $("#submit").attr('disabled',true);	
	}
}
function validImage2(img)
{	
	var ext=img.split(".");
	if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" ))
	{
			$("#error2").hide();$("#submit").attr('disabled',false);
	}else
	{	
			$("#error2").show(); $("#submit").attr('disabled',true);	
	}
}function validImage3(img)
{	
	var ext=img.split(".");
	if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" ))
	{
			$("#error3").hide();$("#submit").attr('disabled',false);
	}else
	{	
		$("#error3").show(); $("#submit").attr('disabled',true);	
	}
}
</script>
<!--/ Page Specific Scripts -->
</body></html>
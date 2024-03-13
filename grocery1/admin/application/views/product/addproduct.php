
<script src="<?php echo base_url() ?>assets/js/vendor/chosen/chosen.jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/jquery/jquery-3.3.1.js"></script>
<script>
function data(id)
{
	
	
	$.ajax({
			url:"<?php echo site_url() ?>/productc/pro/"+id,
			
			success:function(data)
			{
		
				$("#city").html(data);	
			}	
	});
	
}
function getbrand(id)
{
	
	
	$.ajax({
			url:"<?php echo site_url() ?>/productc/probrandadd/"+id,
			
			success:function(data)
			{
		
				$("#addbrand").html(data);	
			}	
	});
	
}


</script>
<section id="content">
  <div class="page page-forms-common">
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
        <div class="boxs-header">
          <h3 class="custom-font hb-green"> <strong>Add</strong>Products</h3>
        </div>
        <div class="boxs-body">
        <form class="form-horizontal" role="form" method="post" name="addpro" id="query" enctype="multipart/form-data" action="<?php echo site_url() ?>/productc/insertda" >
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Categery Name</label>
            <div class="col-sm-10">
               <select class="chosen-select" class="chosen-select" id="category" onchange="data(this.value)" style="width:240px;" name="categery">
               <option value=""> select any</option>
                <?php foreach($categery as $data) {?>
                <option value="<?php echo $data->categery_id ?>"><?php echo $data->categery_name ?></option>
                <?php  } ?>
              </select> 
            </div>
          </div>
           <p id="cErr" style="color:#060"></p>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Sub Categery Name</label>
            <div class="col-sm-10">
              <select tabindex="2" class="chosen-select" id="city" onchange="getbrand(this.value)" style="width: 240px;" name="subcategery">
               <option value=""> select any</option>
                <?php foreach($subcategery as $data) {?>
                <option value="<?php echo $data->s_id ?>"><?php echo $data->s_name ?></option>
                <?php  } ?>
              </select>
            </div>
          </div>
           <p id="scErr" style="color:#060"></p>
		   <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Brand Name</label>
            <div class="col-sm-10">
              <select tabindex="3" class="chosen-select"  id="addbrand"  style="width: 240px;" name="brand">
               <option value=""> select any</option>
                <?php foreach($branddata as $data) {?>
                <option value="<?php echo $data->brand_id ?>"><?php echo $data->brand_name ?></option>
                <?php  } ?>
              </select>
            </div>
          </div>
          <p id="bErr" style="color:#060"></p>
          <div class="row">
            <label for="" class="col-sm-2 control-label">Product Nmae</label>
            <div class="col-sm-4">
              <input type="text" name="pname" id="productn"  class="form-control" 
                  placeholder="Add Product name" value="" >
            </div>
             <p id="nameErr" style="color:#060"></p>
            <label for="" class="col-sm-2 control-label">price</label>
            <div class="col-sm-4">
              <input type="text" name="price" id="pprice" class="form-control" 
                  placeholder="Add Product Price" value="">
            </div>
          </div>
          <p id="PErr" style="color:#060"></p>
          <div class="row">
            <label for="" class="col-sm-2 control-label">Discount</label>
            <div class="col-sm-4">
              <input type="text" name="dics" id="discount" class="form-control" 
                  placeholder="Add Product Discount" value="">
            </div>
            <p id="dcErr" style="color:#060"></p>
            <label for="" class="col-sm-2 control-label">Purchase</label>
            <div class="col-sm-4">
              <input type="text" name="per" id="pper" class="form-control" 
                  placeholder="Add Product Pearchase" value="">
            </div>
          </div>
          <p id="pcErr" style="color:#060"></p>
          <div class="row">
            <label for="" class="col-sm-2 control-label">Discription</label>
            <div class="col-sm-4">
              <input type="text" name="dis" id="pdisc"  class="form-control" 
                  placeholder="Add Product Discription" value="">
            </div>
            <p id="dscErr" style="color:#060"></p>
            <label for="" class="col-sm-2 control-label">stock</label>
            <div class="col-sm-4">
              <input type="text" name="stock" id="pstock" class="form-control" 
                  placeholder="Add Product stock" value="">
            </div>
          </div>
          <p id="sErr" style="color:#060"></p>
          <label for="" class="col-sm-2 control-label"> Upload Image </label>
            <!--<input type="file" name="file"   class="filestyle" />-->
             <div class="col-sm-4">
		  	<input type="file" name="image[]"  required="required" multiple="multiple">
          </div>
          </div>
          
        	 <input type="submit"  onclick="return askQuery()"  name="submit" value="Add Product" class="btn btn-raised btn-primary">
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            </div>
          </div>
        </form>
      </div>
     
      </section>
    </div>
  </div>
  </div>
  
</section>
</div>


<script>


	function askQuery()
	{
		var brand=document.getElementById('addbrand').value;
		var scat=document.getElementById('city').value;
		var cat=document.getElementById('category').value;
		var pname=document.getElementById("productn").value;
		var price=document.getElementById("pprice").value;
		var disco=document.getElementById("discount").value;
		var per=document.getElementById("pper").value;
		var discrip=document.getElementById("pdisc").value;
		var stock=document.getElementById("pstock").value;
		
		//$("#nameErr").html("");$("#emailErr").html("");
		if(cat=="")
		{
			$("#cErr").html("Please Select Category *");
			document.addpro.category.focus();
		//alert('Please Select Category');		
		}
		else if(scat=="")
		{
			$("#scErr").html("Please Select Subcategory *");
			document.addpro.city.focus();
		//alert('Please Select Category');		
		}
		else if(brand=="")
		{
			$("#cErr").html("");$("#scErr").html("");
			$("#bErr").html("Please Select Product Brand *");
			document.addpro.addbrand.focus();
		//alert('Please Select Category');		
		}
		else if(pname=="")
		{
			$("#cErr").html("");$("#scErr").html("");$("#bErr").html("")
			$("#nameErr").html("Please Enter Product Name *");
			document.addpro.productn.focus();
			return false;
		}	
		
		else if(price=="")
		{
			$("#cErr").html("");$("#scErr").html("");$("#bErr").html("");$("#nameErr").html("");
			$("#PErr").html("Please Enter Product Price *");
			document.addpro.pprice.focus();
			return false;
		}	
		else if(disco=="")
		{
			$("#nameErr").html("");$("#emailErr").html("");$("#cPassErr").html("");$("#nameErr").html("");$("#pErr").html("");
			$("#dcErr").html("Please Enter Product Discount *");
			document.addpro.discount.focus();
			return false;
		}	
		else if(per=="")
		{
			$("#nameErr").html("");$("#emailErr").html("");$("#cPassErr").html("");$("#nameErr").html("");$("#pErr").html("");
			$("#pcErr").html("Please Enter Product purchase *");
			document.addpro.discount.focus();
			return false;
		}	
		else if(discrip=="")
		{
			$("#nameErr").html("");$("#emailErr").html("");$("#cPassErr").html("");$("#nameErr").html("");$("#pErr").html("");$("#pcErr").html("");
			$("#dscErr").html("Please Enter Product Discription *");
			document.addpro.pdisc.focus();
			return false;
		}	
		else if(stock=="")
		{
			$("#nameErr").html("");$("#emailErr").html("");$("#cPassErr").html("");$("#nameErr").html("");$("#pErr").html("");$("#pcErr").html("");$("#dscErr").html("");
			$("#sErr").html("Please Enter Product Stock Information *");
			document.addpro.pstock.focus();
			return false;
		}	

		else 
		{
			document.getElementById('query').action = "<?php echo site_url()?>/productc/insertda";

		}
	}
</script>

<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script>
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
        });
    </script>
</body>
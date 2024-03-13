
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
      <div class="col-md-6">
        <section class="boxs">
        <div class="boxs-header">
          <h3 class="custom-font hb-green"> <strong>Add</strong>Product,s</h3>
        </div>
        <div class="boxs-body">
        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo site_url()?>/productc/insertda">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Categery Name</label>
            <div class="col-sm-10">
              <select class="chosen-select" class="chosen-select" onchange="data(this.value)" style="width: 240px;" name="categery">
                <?php foreach($categery as $data) {?>
                <option value="<?php echo $data->categery_id ?>"><?php echo $data->categery_name ?></option>
                <?php  } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Sub Categery Name</label>
            <div class="col-sm-10">
              <select tabindex="2" class="chosen-select" id="city" onchange="getbrand(this.value)" style="width: 240px;" name="subcategery">
                <?php foreach($subcategery as $data) {?>
                <option value="<?php echo $data->s_id ?>"><?php echo $data->s_name ?></option>
                <?php  } ?>
              </select>
            </div>
          </div>
		   <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Brand Name</label>
            <div class="col-sm-10">
              <select tabindex="3" class="chosen-select"  id="addbrand"  style="width: 240px;" name="brand">
                <?php foreach($branddata as $data) {?>
                <option value="<?php echo $data->brand_id ?>"><?php echo $data->brand_name ?></option>
                <?php  } ?>
              </select>
            </div>
          </div>
          <div class="row">
            <label for="" class="col-sm-2 control-label">Product Nmae</label>
            <div class="col-sm-4">
              <input type="text" name="pname"  class="form-control" 
                  placeholder="Add Product name" value="">
            </div>
            <label for="" class="col-sm-2 control-label">price</label>
            <div class="col-sm-4">
              <input type="text" name="price"  class="form-control" 
                  placeholder="Add Product Price" value="">
            </div>
          </div>
          <div class="row">
            <label for="" class="col-sm-2 control-label">Discount</label>
            <div class="col-sm-4">
              <input type="text" name="dics"  class="form-control" 
                  placeholder="Add Product Discount" value="">
            </div>
            <label for="" class="col-sm-2 control-label">Pearchase</label>
            <div class="col-sm-4">
              <input type="text" name="per"  class="form-control" 
                  placeholder="Add Product Pearchase" value="">
            </div>
          </div>
          <div class="row">
            <label for="" class="col-sm-2 control-label">Discription</label>
            <div class="col-sm-4">
              <input type="text" name="dis"  class="form-control" 
                  placeholder="Add Product Discription" value="">
            </div>
            <label for="" class="col-sm-2 control-label">stock</label>
            <div class="col-sm-4">
              <input type="text" name="stock"  class="form-control" 
                  placeholder="Add Product stock" value="">
            </div>
          </div>
          <label for="" class="col-sm-2 control-label"> Upload Image</label>
            <!--<input type="file" name="file"   class="filestyle" />-->
             <div class="col-sm-4">
		  	<input type="file" name="file" class="filestyle" data-buttonText="find file">
          </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit"  name="submit" value="Add Product" class="btn btn-raised btn-primary">
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
<?php $data=date('Y-m-d');?>
<script>
	window.onload=startEnd;
	function startEnd()
	{	
		$("#startdate2").hide();
		$("#enddate2").hide();
		document.getElementById("startdate2").setAttribute("min","<?php echo $offer->offer_startdate ?>");
		//Image Error
		$("#error").hide();
		$("#error2").hide();
		$("#error3").hide();
	}
	function startDate(id)
	{	
		if(id=="")
		{
			$("#startdate1").show();$("#startdate2").hide();
			document.getElementById("startdate2").setAttribute("min","<?php echo $offer->offer_startdate ?>");
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
	function validImage(img)
	{	
		var ext=img.split(".");
		if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" )){
				$("#error").hide();
		}else{	$("#error").show(); $("#submit").attr('disabled',true);	}
	}
</script>
<!--  CONTENT  -->
<section id="content">
  <div class="page page-forms-common">
    <!-- bradcome -->
    
    <!-- row -->
    <div class="row">
      <div class="col-md-14">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Edit</strong> offers</h3>
          </div>
          <div class="boxs-body">
			<div class="row">
	         <div class="col-md-8">
            <form class="form-horizontal" role="form" action="<?php echo site_url()?>/offerscontrol/updateoffer/<?php echo $offer->offer_id?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label class="col-sm-2 control-label">File Input</label>
                <div class="col-sm-6">
				<p style="color:red"><?php echo $offer_img1; ?></p>
                  <input type="file" name="image" class="filestyle" data-buttonText="Find file" data-iconName="fa fa-inbox" onchange="validImage(this.value)" ><p id="error" style="color:red">Image Not Valid</p>
                </div>
              </div>
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Offer Title</label>
                <div class="col-sm-6">
                  <input type="text" name="offname" value="<?php echo $offer->offer_title ?>" class="form-control" id="input01" required>
                </div>
              </div>
             
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-6">
                  <input type="text" name="descrip"value="<?php echo $offer->offer_description ?>" class="form-control" id="input01" required>
                </div>
              </div>
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Offer Start</label>
                <div class="col-sm-6">
              <input type="date" name="startdate" value="<?php echo $offer->offer_startdate ?>" class="form-control"  max="" id="startdate1" disabled>
			<p id="startd">
			<input type="checkbox" name="startd" value="1" id="startd" onclick="startDate(this.value)"/>
			New Start Date</p>
			 <input type="date" name="startdate" onchange="validDate(this.value)" value="<?php echo $offer->offer_startdate ?>" class="form-control" min=""  max="" id="startdate2" required>
                </div>
              </div>
			<div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Discount</label>
                <div class="col-sm-4">
				<p style="color:red"></p>
                  <input type="number" name="disc" placeholder="Discount" class="form-control" id="input01" value="<?php echo $offer->offer_discount ?>" required>
                </div>
              </div>
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">offer End</label>
                <div class="col-sm-6">
				<p style="color:red"><?php echo $offer_enddate; ?></p>
                  <input type="date" name="enddate" value="<?php echo $offer->offer_enddate ?>" class="form-control" id="enddate1" min="" max=""  disabled>
				
 			<input type="date" id="enddate2" name="enddate" value="<?php echo $offer->offer_enddate ?>" class="form-control" min="" max="" required>
                </div>
              </div>
             
              <hr class="line-dashed full-witdh-line" />
              <div class="form-group">
                <div class="col-sm-6 col-sm-offset-2">
                  <button type="reset" class="btn btn-raised btn-danger">Cancel</button>
                  <input name="submit" id="submit" type="submit" class="btn btn-raised btn-default" value="Update" required> 
				</div>
              </div>
            </form>
			</div>
				 <div class="col-md-4">
			<img src="<?php echo base_url() ?>offer/<?php echo $offer->offer_img1 ?>" width="190" height="100"/>	
				 </div>
			</div>
          </div>
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
<!--/ Page Specific Scripts -->
</body></html>
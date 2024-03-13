<?php $data="";?>
<script>
	window.onload=startEnd;
	function startEnd()
	{	
		//Image Error
		$("#error").hide();
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
			//$("#data123").html(date);
	}
	function validImage(img)
	{	
		var ext=img.split(".");
		if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" ))
		{ 
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
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Add New</strong> offer</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" role="form" action="<?php echo site_url()?>/offerscontrol/insertoffer" method="post" enctype="multipart/form-data"  name="form4" id="form4" data-parsley-validate >
             <div class="form-group">
                <label class="col-sm-2 control-label">Offer Image</label>
                <div class="col-sm-4">
				<p style="color:red"><?php echo $offer_img1; ?></p>
                  <input type="file" name="img" placeholder="Select Image" class="filestyle" data-buttonText="Find file" data-iconName="fa fa-inbox"  onchange="validImage(this.value)" required><p id="error" style="color:red">Image Not Valid</p><!---->
                </div>
              </div>
			  
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">offer Title</label>
                <div class="col-sm-4">
				<p style="color:red"></p>
                  <input type="text" name="offname" placeholder="Enter offer Name" class="form-control" id="input01"required>
                </div>
              </div>
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-4">
				<p style="color:red"></p>
                  <input type="text" name="descrip" placeholder="Enter Some Description" class="form-control" id="input01" required>
                </div>
              </div>
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Discount</label>
                <div class="col-sm-4">
				<p style="color:red"></p>
                  <input type="number" name="disc" placeholder="Discount" class="form-control" id="input01" required>
                </div>
              </div>
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">Offer Start</label>
                <div class="col-sm-2">
				<p style="color:red"></p>
              <input type="date" name="startdate"  class="form-control" id="input01" min="<?php echo date("Y-m-d") ?>" max="" onchange="validDate(this.value)" required>
                </div>
              </div>
			  <div class="form-group">
                <label for="input01" class="col-sm-2 control-label">offer End</label>
                <div class="col-sm-2">
                  <input type="date" name="enddate" id="enddate"  class="form-control"  min="" max="<?php $stop_date= date("Y-m-d",strtotime('+1 year')); echo $stop_date; ?>" required>
                </div>
              </div>
              <hr class="line-dashed full-witdh-line" />
              <div class="form-group">
                <div class="col-sm-6 col-sm-offset-2">
                  <button type="reset" class="btn btn-raised btn-danger">Cancel</button>&nbsp;
                  <input name="submit" type="submit" id="submit" class="btn btn-raised btn-default" value="Save">
				</div>
              </div>
            </form>
			</div>
				 <div class="col-md-4">
			<img src="" width="190" height="100" id="imgsrc"/>	
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
<script src="<?php echo base_url() ?>assets/js/vendor/parsley/parsley.min.js"></script>
<!--/ vendor javascripts -->
<!-- Custom JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script> <!-- Custom Js --> 
<!--/ custom javascripts -->
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
	<script >
		$(window).load(function () {
			$('#form1').parsley().subscribe('parsley:field:validate', function () {
				if ($('#form1').parsley().isValid()) {
					$('#form1Submit').prop('disabled', false);
				} else {
					$('#form1Submit').prop('disabled', true);
				}
			});

			$('#form4Submit').on('click', function () {
				$('#form4').submit();
			});
		});
	</script>

<!--/ Page Specific Scripts -->
</body></html>
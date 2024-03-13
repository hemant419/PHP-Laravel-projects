<head>
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/footable/css/footable.core.min.css" />
<script>

function loadProduct(id)
{
	//alert(id);
	$.ajax({
				url:"<?php echo site_url() ?>/productcontrol/showProduct/"+id,
				success:function(data)
				{
					//alert(data);
					$("#data").html(data);
					

				}
		});
}
function hi(imgName)
{

	alert(imgName);
}
</script>
</head>
<section id="content">

<!--  CONTENT  -->
<div class="page page-tables-footable">
    <!-- bradcome -->
    
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs ">
          <div class="boxs-header">
            <h3 class="custom-font hb-cyan"> <strong>Product </strong> Table</h3>
          </div>
          <div class="boxs-body">
		    <div class="form-group">
					<a href="<?php echo site_url()?>/productcontrol/addProduct" role="button" tabindex="0">
                    <button class="btn btn-primary btn-raised">
					 <i class="fa fa-plus-square"></i>  Add New Product</button></a>
		    </div>
            <div class="form-group">
              <label for="filter" style="padding-top: 5px">Search:</label>
              <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
            </div>
<table id="searchTextResults" data-filter="#filter" data-page-size="10" class="footable table table-custom">
              <thead>
                <tr><th>#</th>
                  <th>Category</th>
                  <th>Sub-category</th> 
				  <th>Brand</th>
                  <th data-hide="phone">Product Name</th>
                  <th data-hide='phone, tablet'>Price</th>
                  <th data-hide='phone, tablet'>Action</th>
				  <th data-hide='phone, tablet'>Status</th>
				  <th data-hide='phone, tablet' style="visibility:hidden">&nbsp;</th>
			    </tr>
              </thead>
              <tbody>
			  <?php 
			  $data2="";
			  foreach($product as $data){?>
                <tr>
                  <td><?php echo $data->prd_id ?></td>
				  <td><?php echo $data->cat_name ?></td>
                  <td><?php echo $data->subcat_name ?></td>
                  <td><?php echo $data->brand_name ?></td>
				  <td><?php echo $data->prd_name ?></td>
                  <td><?php echo $data->prd_price ?></td>
                  
				  <td><a href="<?php echo site_url()?>/productcontrol/status/<?php echo $data->prd_id ?>" style="text-decoration:none"><button class="<?php if( $data->prd_status=="Active"){ ?>btn btn-raised btn-success btn-sm	<?php	}	else{	?>btn btn-raised btn-danger btn-sm	<?php }?>">
				  	<?php echo $data->prd_status?></button></a>
				  </td>
				  <td><a href="<?php echo site_url() ?>/productcontrol/editProduct/<?php echo $data->prd_id?>" style="text-decoration:none"><i class="fa fa-edit"></i> </a>	&nbsp;&nbsp; 
				  	  <a href="<?php echo site_url() ?>/productcontrol/deleteProduct/<?php echo $data->prd_id?>" style="text-decoration:none"><i class="glyphicon glyphicon-trash"></i></a>
				  </td>
				  <td>
				  <a data-toggle="modal" href="#myModal2"  style="text-decoration:none" onclick="loadProduct(<?php echo $data->prd_id ?>)" >More.. </a>
				  </td>
				</tr>
				<?php }?>	
               </tbody>
              <tfoot class="hide-if-no-paging">
                <tr>
                  <td colspan="8" class="text-right"><ul class="pagination">
                    </ul></td>
                </tr>
              </tfoot>
            </table>
				
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
<!--/ CONTENT -->
 <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Product Detail</h4>
                </div>
                
				<div class="modal-body">
     			<table  data-filter="#filter" border="2" id="data" data-page-size="5" class="footable table table-custom">
					
				</table>  
				</div>
                
				<div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-success" data-dismiss="modal">Submit</button>
                    <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
	<?php // } ?>
<!--/ Application Content -->
<!--  Vendor JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/footable/footable.all.min.js"></script>
<!--/ vendor javascripts -->
<!--  Custom JavaScripts  -->
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<!-- Custom Js -->
<!--  Page Specific Scripts  -->
<script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body>
</html>
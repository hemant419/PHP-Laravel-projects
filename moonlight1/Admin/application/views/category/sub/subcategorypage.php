<!--  CONTENT  -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/footable/css/footable.core.min.css">
<div>
<section id="content">
  <div class="page page-tables-footable">
    <!-- bradcome -->
    
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs ">
          <div class="boxs-header">
            <h3 class="custom-font hb-cyan"> <strong>Sub</strong> Category</h3>
          </div>
		  
          <div class="boxs-body">
		   <div class="form-group">
					<a href="<?php echo site_url() ?>/subcategorycontrol/addSubcategory" role="button" tabindex="0">
                    <button class="btn btn-primary btn-raised">
					 <i class="fa fa-plus-square"></i>  Add New Sub-Category</button></a>
		    </div>
            <div class="form-group">
              <label for="filter" style="padding-top: 5px">Search:</label>
              <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
            </div>
            <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
              <thead>
                <tr>
				  <th data-hide="phone">&nbsp;</th>
                  <th>#</th>
                  <th data-hide="phone">Main Category</th>
				  <th>Sub-Category</th>
                  <th data-hide="phone">Status</th>
				  
                  <th  data-hide='phone, tablet'>Action</th>
                  <th data-hide='phone, tablet'>Date Register</th>
                </tr>
              </thead>
			    <form action="<?php echo site_url() ?>/subcategorycontrol/multidelSubcategory/" method="post">
			
              <tbody>
			  	<?php foreach($subcategory as $data){?>	
					<tr>
					<td>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="checked[]" value="<?php echo $data->subcat_id; ?>" >
							</label>
						</div>
					</td>
					<td><?php echo $data->subcat_id; ?></td>
					<td><?php echo $data->cat_name; ?></td>
					<td><?php echo $data->subcat_name; ?></td>
					<td>
<a href="<?php echo site_url()?>/subcategorycontrol/status/<?php echo $data->subcat_id;?>" style="text-decoration:none; color:#FFFFFF"> <p class="<?php if( $data->subcatstatus=="Active"){ ?>btn btn-raised btn-success btn-sm	<?php	}	else{	?>btn btn-raised btn-danger btn-sm	<?php }?>">	
						<?php echo $data->subcatstatus;?></p></a>
					</td>
					<td>
<a href="<?php echo site_url()?>/subcategorycontrol/editSubcategory/<?php echo $data->subcat_id; ?>" 
style="text-decoration:none">
						<i class="fa fa-edit"></i></a>&nbsp; &nbsp; 
<a href="<?php echo site_url()?>/subcategorycontrol/deleteSubcategory/<?php echo $data->subcat_id; ?>"
style="text-decoration:none"><i class="glyphicon glyphicon-trash"></i></a>
					</td>
					<td><?php echo $data->subcatdate; ?></td>
					</tr>
				<?php }?>	
			  </tbody>
              <tfoot class="hide-if-no-paging">
                <tr>
				<td colspan="3">
						<div class="row"> <div class="col-sm-4 hidden-xs">
							<select class="form-control inline" name="hide">
								<option value="delete">Delete selected</option>
								<option value="edit">Edit selected</option>
							</select>
						</div>
						<div class="col-sm-2">
							<input type="submit" class="btn btn-default btn-raised" value="Apply" name="Apply">
						</div> 
						</div>
					</td> 
				
                  <td colspan="5" class="text-right"><ul class="pagination">
                    </ul></td>
                </tr>
              </tfoot>
			  </form>
            </table>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
<!--/ CONTENT -->
</div>
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
</body></html>
<!--  CONTENT  -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/footable/css/footable.core.min.css">
<section id="content">
  <div class="page page-tables-footable">
    <!-- bradcome -->
	<!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs ">
          <div class="boxs-header">
            <h3 class="custom-font hb-cyan"> <strong>coupan</strong> Table</h3>
          </div>
          <div class="boxs-body">
		    <div class="form-group">
					<a href="<?php echo site_url()?>/coupancontrol/addcoupan" role="button" tabindex="0">
                    <button class="btn btn-primary btn-raised">
					 <i class="fa fa-plus-square"></i>&nbsp;Add New Coupan</button></a>
		    </div>
            <div class="form-group">
              <label for="filter" style="padding-top: 5px">Search:</label>
              <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
            </div>
<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Code</th>
                  <th>Email</th>
			      <th >Uses</th>
                  <th data-hide='phone, tablet'>Status</th>
				  <th data-hide='phone, tablet'>Action</th>
				  <th data-hide='phone, tablet'>Date</th>
                </tr>
              </thead>
              <tbody>
			  <?php foreach($coupan as $data){?>
			  		<tr>
				<td><?php echo $data->cupon_id; ?></td>
			<td><?php echo $data->cupon_code; ?></td>
			<td><?php echo $data->cupon_email ?></td>
			<td><?php echo $data->cupon_use_code; ?></td>
			
			<td><a href="<?php echo site_url()?>/coupancontrol/coupanstatus/<?php echo $data->cupon_id ;?>" style="text-decoration:none"><p class="<?php if( $data->status=="Active"){ ?>btn btn-raised btn-success btn-sm	<?php	}	else{	?>btn btn-raised btn-danger btn-sm	<?php }?>">
							<?php echo $data->status;?></p></a></td>
						<td>
						<a href="<?php echo site_url()?>/coupancontrol/Editcoupan/<?php echo $data->cupon_id; ?>"style="text-decoration:none"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
						<a href="<?php echo site_url()?>/coupancontrol/Deletecoupan/<?php echo $data->cupon_id; ?>"style="text-decoration:none"><i class="glyphicon glyphicon-trash"></i></a>
						</td>
						<td><?php echo $data->date; ?></td>
					</tr>
			  <?php }		  ?>
			  </tbody>
              <tfoot class="hide-if-no-paging">
                <tr>
                  <td colspan="6" class="text-right"><ul class="pagination">
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
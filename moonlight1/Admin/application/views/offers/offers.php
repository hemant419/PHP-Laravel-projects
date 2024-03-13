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
            <h3 class="custom-font hb-cyan"> <strong>Offers</strong> Table</h3>
          </div>
          <div class="boxs-body">
		    <div class="form-group">
					<a href="<?php echo site_url()?>/offerscontrol/addoffers" role="button" tabindex="0">
                    <button class="btn btn-primary btn-raised">
					 <i class="fa fa-plus-square"></i>&nbsp;Add New offer</button></a>
		    </div>
            <div class="form-group">
              <label for="filter" style="padding-top: 5px">Search:</label>
              <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
            </div>
<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
              <thead>
                <tr>
                  <th>#</th>
                  <th>offers</th>
                  <th data-hide="phone">Title</th>
				  <th>Detail</th>
				  <th>Start</th>
				  <th>End</th>
                  <th data-hide='phone, tablet'>Status</th>
				  <th data-hide='phone, tablet'>Action</th>
				  <th data-hide='phone, tablet'>Date</th>
                </tr>
              </thead>
              <tbody>
			  <?php foreach($offers as $data){?>
			  		<tr>
						<td><?php echo $data->offer_id; ?></td>
			<td><img src="<?php echo base_url() ?>offer/<?php echo $data->offer_img1; ?>" width="150" height="120">
			</td>
			<td><?php echo $data->offer_title; ?></td>
			<td width="25"><?php echo $data->offer_description ?></td>
			<td><?php echo $data->offer_startdate; ?></td>
			<td><?php echo $data->offer_enddate; ?></td>
			<td>
				<a href="<?php echo site_url()?>/offerscontrol/offerstatus/<?php echo $data->offer_id ;?>" style="text-decoration:none"> <button class="<?php if( $data->offerstatus=="Active"){ ?>btn btn-raised btn-success btn-sm	<?php	}	else{	?>btn btn-raised btn-danger btn-sm	<?php }?>">	
							<?php echo $data->offerstatus;?></button></a></td>
						<td>
						<a href="<?php echo site_url()?>/offerscontrol/Editoffer/<?php echo $data->offer_id; ?>">
							<i class="fa fa-edit"></i></a>&nbsp;&nbsp;
						<a href="<?php echo site_url()?>/offerscontrol/Deleteoffer/<?php echo $data->offer_id; ?>">
							<i class="glyphicon glyphicon-trash"></i></a>
						</td>
						<td><?php echo $data->offerdate; ?></td>
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
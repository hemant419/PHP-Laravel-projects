
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
	<!-- vendor css files -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/animsition.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/footable/css/footable.core.min.css">
	<!-- project main css files -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
		<!--  CONTENT  -->
		<section id="content">
			<div class="page page-tables-footable">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Addtocart Table</h1>
							<small class="text-muted"></small>
						</div>
					</div>
				</div>

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong></strong> </h3>

							</div>
							<div class="boxs-body">
                          	<div class="form-group">
                               
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th>Cart Id</th>
											<th>product Name</th>
											<th data-hide="phone">User Name</th>
											<th data-hide="phone">Product Image</th>
											<th data-hide='phone, tablet'>Qty</th>
											<th data-hide='phone, tablet'>Total Amunt</th>
											<th data-hide='phone, tablet'>Date</th>
											<th data-hide='phone, tablet'>Statas</th>
                                            <th data-hide='phone, tablet'>Action</th>
										</tr>
									</thead>
									<tbody>
                                    <?php 
									
										foreach($cartdata as $row)
										{
									
									$this->db->where('product_id',$row->product_id);
									$rimg=$this->db->get('productimage')->row();
											
									?>
                                    <tr>
                                    <td><?php echo $row->cart_id ?>  </td>
                                    <td><?php echo $row->product_name ?> </td>
                                    <td> <?php echo $row->name ?></td>
									<td>
											<img src="<?php echo base_url()?>./images/
											<?php echo $rimg->image ?>" width="70">
									</td>
									<td><?php echo $row->qty ?></td>
									<td> <?php echo $row->totalamunt ?></td>
									<td><?php echo $row->reg_date ?></td>
								  	<td><a href="<?php echo site_url() ?>/addtocartCon/statas/<?php echo $row->cart_id ?>">
                                    <button class="<?php if($row->statas=="Active"){ ?>btn btn-raised btn-warning btn-xs<?php }else {?>btn btn-raised btn-danger btn-xs<?php } ?>"><?php echo $row->statas; ?></button></a></td>

                                    <td><a href="<?php echo site_url() ?>/addtocartCon/deleteda/<?php echo $row->cart_id ?>" ><i class="fa fa-trash-o"></i> </a> </td>
                                  <?php
									}
									?>
                                    </tbody>
									<tfoot class="hide-if-no-paging">
										<tr>
											<td colspan="5" class="text-right">
												<ul class="pagination">
												</ul>
											</td>
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
	<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>	<!-- Custom Js -->

	<!--  Page Specific Scripts  -->
	<script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/tables-footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:58:06 GMT -->
</html>
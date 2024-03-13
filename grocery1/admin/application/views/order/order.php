
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
	<!-- vendor css files -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/animsition.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/footable/css/footable.core.min.css">
	<!-- project main css files -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
		<!--  CONTENT  -->
		<section id="content" >
			<div class="page page-tables-footable">
				<!-- bradcome -->
				<div class="b-b mb-16" >
					<div class="row" >
						<div class="col-sm-6 col-xs-12" >
							<h1 class="h3 m-0">Order Table</h1>
							<small class="text-muted"></small>
						</div>
					</div>
				</div>

				<!-- row -->
				<div class="row" style="width:1500px;"> 
					<div class="col-md-16">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong></strong></h3>

							</div>
							<div class="boxs-body">
                          	<div class="form-group">
									
										
									
                             </div>
							 <div class="form-group">  
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
							</div>	
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th data-hide="phone">#</th>
											<th data-hide="phone">Invoices</th>
											<th data-hide='phone, tablet'>User</th>
											<th data-hide='phone, tablet'>email</th>
											<th data-hide='phone, tablet'>contact</th>
											<th data-hide='phone, tablet'>Address</th>
											<th data-hide='phone, tablet'>Shipping</th>
											<th data-hide='phone, tablet'>Order</th>
											<th data-hide='phone, tablet'>Payment</th>
											<th data-hide='phone, tablet'>Charg</th>
											<th data-hide='phone, tablet'>cupon amount</th>
											<th data-hide='phone, tablet'>Date</th>
											<th data-hide='phone, tablet'>Status</th>
                                            <th data-hide='phone, tablet'>Action</th>
										</tr>
									</thead>
									<tbody>
                                    <?php 
									foreach($selectdata as $row)
									{
									?>
                                    <tr>
                                    <td><?php echo $row->order_id ?></td>
									<td>
									<a href="<?php echo site_url() ?>/orderCon/invoisedata/<?php echo $row->orderno ?>">Invoices</a></td
									><td><?php echo $row->userfname ?></td>
									<td><?php echo $row->useremail ?></td>
									<td><?php echo $row->contactno ?></td>
									<td><?php echo $row->paramanentaddress ?></td>
									<td><?php echo $row->shippingaddress ?></td>
									<td><?php echo $row->orderno ?></td>
									<td><?php echo $row->paymenteethod ?></td>
									<td><?php echo $row->deliverycharg ?></td>
									<td><?php echo $row->cuponamount ?></td>
									<td><?php echo $row->date_register ?></td>
								  	<td>
						<a href="<?php echo site_url() ?>/orderCon/statas/<?php echo $row->order_id ?>">
                        <button class="<?php if($row->o_statas=="Pending"){ ?>btn btn-raised btn-warning btn-xs<?php }else {?>btn btn-raised btn-danger btn-xs<?php } ?>"><?php echo $row->o_statas; ?></button>
</a></td>

                                    <td><a href="<?php echo site_url() ?>/orderCon/deleteda/<?php echo $row->order_id ?>" ><i class="fa fa-trash-o"></i> </a>
									
									</td>
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
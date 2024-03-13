<head>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/footable/css/footable.core.min.css">
</head>
		<!--  CONTENT  -->
		<section id="content">
			<div class="page page-tables-footable">
				<!-- bradcome -->
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Product Replace</strong></h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th>#</th>
											<th>Product</th>
											<th>#order</th>
											<th data-hide="phone">User</th>
											<th data-hide='phone, tablet'>Email</th>
											<th data-hide='phone, tablet'>Request</th>
											<th data-hide='phone, tablet'>Progress</th>
											<th data-hide='phone, tablet'>Status</th>
											<th data-hide='phone, tablet'>Do</th>
											<th data-hide='phone, tablet'>Date</th>
										</tr>
									</thead>
									<tbody>
									<?php
//request_id	request_progress	prd_id	user_id	order_id	request_resion	request_description	request_type	request_status	request_date

										foreach($replace as $data)
										{
									?>	<tr>
										<td><?php echo $data->request_id ?></td>
										<td>
		<img src="<?php echo base_url()?>product/<?php echo $data->prd_img1 ?>" width="70" height="100"/></td>
										<td>
					<a href="<?php echo site_url()?>/Replacecontrol/detail/<?php echo $data->request_id ?>/<?php echo $data->order_no ?>" style="text-decoration:none">
										<h4><?php echo $data->order_no ?></h4></a>
										</td>
										<td><?php echo $data->user_name ?></td>
										<td width="15"><?php echo $data->user_email ?></td>
										
										<td><?php if($data->request_type=="Replace"){ ?>
					<h4><a  style="text-decoration:none;color:#00ffff"><?php echo $data->request_type ?></a></h4>
											<?php }else{?>
					<h4><a  style="text-decoration:none;color:#ff4d4d"><?php echo $data->request_type ?></a></h4>
											<?php  }?>
										</td>
										<td>
		<a href="<?php echo site_url()?>/Replacecontrol/progress/<?php echo $data->request_id ?>" style="text-decoration:none"><button class="<?php if( $data->request_status=="Pending"){ ?>btn btn-raised btn-success btn-sm	<?php	}	else{	?>btn btn-raised bg-soundcloud btn-sm	<?php }?>"><?php echo $data->request_progress ?>
</button></a>
										</td>
										<td>
		<a href="<?php echo site_url()?>/Replacecontrol/status/<?php echo $data->request_id ?>" style="text-decoration:none"><button class="<?php if( $data->request_status=="Active"){ ?>btn btn-raised btn-success btn-sm	<?php	}	else{	?>btn btn-raised btn-danger btn-sm	<?php }?>"><?php echo $data->request_status ?>
</button></a>
										</td>
										<td>
		<a href="<?php echo site_url()?>/Replacecontrol/deleteReplace/<?php echo $data->request_id ?>" 
		style="text-decoration:none">	<i class="glyphicon glyphicon-trash"></i></a>
										</td>
										<td idth="15"><?php echo substr($data->request_date,0,10 )?></td>
										</tr>
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
	<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script>
	<script src="<?php echo base_url()?>assets/js/vendor/footable/footable.all.min.js"></script>
	<!--/ vendor javascripts -->

	<!--  Custom JavaScripts  -->
	<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script>	<!-- Custom Js -->

	<!--  Page Specific Scripts  -->
	<script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body>
</html>
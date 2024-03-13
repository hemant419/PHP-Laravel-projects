<head>
<link rel="icon" type="image/ico" href="<?php echo base_url() ?>assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- vendor css files -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">    
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/morris/morris.css">    
<!-- project main css files -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
</head>
<!--  CONTENT  -->
		<section id="content">
			<div class="page page-tables-footable">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">FooTable Tables</h1>
							<small class="text-muted">Welcome to Falcon application</small>
						</div>
					</div>
				</div>

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>FooTable</strong> Example</h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th>Name</th>
											<th>Lastname</th>
											<th data-hide="phone">Username</th>
											<th data-hide='phone, tablet'>Phone</th>
											<th data-hide='phone, tablet'>Email</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>John</td>
											<td>smith</td>
											<td>@mdo</td>
											<td>4559411994</td>
											<td>john@ymail.com</td>
										</tr>
										<tr>
											<td>karlos</td>
											<td>tonar</td>
											<td>@fat</td>
											<td>1596325874</td>
											<td>tonar@mail.com</td>
										</tr>
										<tr>
											<td>Mary</td>
											<td>com</td>
											<td>@twitter</td>
											<td>2589632587</td>
											<td>com@yahoo.com</td>
										</tr>
										<tr>
											<td>akshay</td>
											<td>kumar</td>
											<td>@akky</td>
											<td>9875858585</td>
											<td>kumar@hotmail.com</td>
										</tr>
										<tr>
											<td>Larry</td>
											<td>Cardl</td>
											<td>@lurie</td>
											<td>565465</td>
											<td>larry@mail.com</td>
										</tr>
										<tr>
											<td>Jennifer</td>
											<td>Minelly</td>
											<td>@jen</td>
											<td>9658585856</td>
											<td>jenny@mail.com</td>
										</tr>
										<tr>
											<td>Sly</td>
											<td>Stall</td>
											<td>@sly</td>
											<td>85785874214</td>
											<td>sly@mail.com</td>
										</tr>
										<tr>
											<td>Arnold</td>
											<td>Percy</td>
											<td>@arnie</td>
											<td>7852586325</td>
											<td>arnie@mail.com</td>
										</tr>
										<tr>
											<td>jacky</td>
											<td>Black</td>
											<td>@blacko</td>
											<td>8956231245</td>
											<td>blacko@mail.com</td>
										</tr>
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
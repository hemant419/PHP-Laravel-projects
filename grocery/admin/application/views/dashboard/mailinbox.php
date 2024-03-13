	<!--  CONTENT  -->
	<section id="content">
		<div class="page email-page tbox tbox-sm">
			<div class="row">
				<div class="col-md-3">
					<section class="boxs">
						<div class="tcol"> 
							<!-- left side -->
							<div class="p-15 bg-white" style="min-height: 61px"> <a href="mail-compose.html" class="btn btn-raised btn-success btn-sm">Compose</a>
								<button class="btn btn-sm btn-default pull-right visible-sm visible-xs" data-toggle="collapse" data-target="#mail-nav" aria-expanded="false" ><i class="fa fa-bars"></i></button>
							</div>
							<div class="p-15 collapse collapse-xs collapse-sm" id="mail-nav">
								<ul class="nav nav-pills nav-stacked nav-sm" id="mail-folders">
									<li class="active"><a href="<?php echo site_url()?>Welcome/mailinbox" title="Inbox">Inbox <span class="pull-right badge bg-lightred">6</span></a></li>
									<li><a href="javascript:;" title="Sent">Sent</a></li>
									<li><a href="javascript:;" title="Draft">Draft</a></li>
									<li><a href="javascript:;" title="Bin">Bin</a></li>
									<li><a href="javascript:;" title="Important">Important</a></li>
									<li><a href="javascript:;" title="Starred">Starred</a></li>
								</ul>
								<h5 class="b-b p-10 text-strong">Labels</h5>
								<ul class="nav nav-pills nav-sm" id="mail-labels">
									<li><a href="javascript:;"><i class="fa fa-fw fa-tag text-primary"></i>Family</a></li>
									<li><a href="javascript:;"><i class="fa fa-fw fa-tag text-default"></i>Work</a></li>
									<li><a href="javascript:;"><i class="fa fa-fw fa-tag text-orange"></i>Shop</a></li>
									<li><a href="javascript:;"><i class="fa fa-fw fa-tag text-cyan"></i>Themeforest</a></li>
									<li><a href="javascript:;"><i class="fa fa-fw fa-tag text-lightred"></i>Google</a></li>
								</ul>
								<h5 class="b-b p-10 text-strong">Online</h5>
								<ul class="nav nav-pills nav-stacked nav-sm online-user" id="onlie-offline">
									<li><a href="javascript:;"><i class="fa fa-fw fa-circle text-green" title="Online"></i>Sachin</a></li>
									<li><a href="javascript:;"><i class="fa fa-fw fa-circle text-default" title="Off Line"></i>John Smith</a></li>
									<li><a href="javascript:;"><i class="fa fa-fw fa-circle text-orange" title="Away"></i>Askay</a></li>
									<li><a href="javascript:;"><i class="fa fa-fw fa-circle text-default" title="Off Line"></i>Dhavan</a></li>
									<li><a href="javascript:;"><i class="fa fa-fw fa-circle text-default" title="Off Line"></i>Lee</a></li>
								</ul>
							</div>
						</div>
					</section>
				</div>
				<div class="col-md-9">
					<section class="boxs mail_listing">
						<div class="inbox-center table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th width="30">
											<div class="checkbox">												
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div>
										</th>
										<th colspan="4">
											<div class="dropdown col-md-2 col-sm-2 col-xs-3">
												<a href="#" class="btn btn-raised btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Filter<b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
													<li class="divider"></li>
													<li><a href="#">One more separated link</a></li>
												</ul>
											</div>
											<div class="btn-group">
												<button type="button" class="btn btn-raised btn-success btn-sm" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-refresh"></i> </button>
											</div>
										</th>
										<th class="hidden-xs" width="100">
											<div class="btn-group pull-right">
												<button type="button" class="btn btn-raised btn-default btn-sm mr-10"><i class="fa fa-angle-left"></i></button>
												<button type="button" class="btn btn-raised btn-default btn-sm"><i class="fa fa-angle-right"></i></button>
											</div>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr class="unread">
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star-o"></i></td>
										<td class="hidden-xs">Hritik Roshan</td>
										<td class="max-texts"><a href="#"><span class="label label-info">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> 12:30 PM </td>
									</tr>
									<tr class="unread">
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
										<td class="hidden-xs">Genelia Roshan</td>
										<td class="max-texts"><a href="#">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 13 </td>
									</tr>
									<tr class="unread">
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star-o"></i></td>
										<td class="hidden-xs">Ritesh Deshmukh</td>
										<td class="max-texts"><a href="#"><span class="label label-success">Falcon</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 12 </td>
									</tr>
									<tr>
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star-o"></i></td>
										<td class="hidden-xs">Akshay Kumar</td>
										<td class="max-texts"><a href="#"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 12 </td>
									</tr>
									<tr>
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star-o"></i></td>
										<td class="hidden-xs">Hritik Roshan</td>
										<td class="max-texts"><a href="#"><span class="label label-info">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 12 </td>
									</tr>
									<tr>
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
										<td class="hidden-xs">Genelia Roshan</td>
										<td class="max-texts"><a href="#">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 11 </td>
									</tr>
									<tr>
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star-o"></i></td>
										<td class="hidden-xs">Ritesh Deshmukh</td>
										<td class="max-texts"><a href="#"><span class="label label-success">Falcon</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 11 </td>
									</tr>
									<tr>
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star-o"></i></td>
										<td class="hidden-xs">Akshay Kumar</td>
										<td class="max-texts"><a href="#"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 11 </td>
									</tr>
									<tr>
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star-o"></i></td>
										<td class="hidden-xs">Hritik Roshan</td>
										<td class="max-texts"><a href="#"><span class="label label-info">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 10 </td>
									</tr>
									<tr>
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
										<td class="hidden-xs">Genelia Roshan</td>
										<td class="max-texts"><a href="#">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 10 </td>
									</tr>
									<tr>
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star-o"></i></td>
										<td class="hidden-xs">Ritesh Deshmukh</td>
										<td class="max-texts"><a href="#"><span class="label label-success">Falcon</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 10 </td>
									</tr>
									<tr>
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star-o"></i></td>
										<td class="hidden-xs">Akshay Kumar</td>
										<td class="max-texts"><a href="#"><span class="label label-warning">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 09 </td>
									</tr>
									<tr>
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star-o"></i></td>
										<td class="hidden-xs">Hritik Roshan</td>
										<td class="max-texts"><a href="#"><span class="label label-info">Work</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 09 </td>
									</tr>
									<tr>
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
										<td class="hidden-xs">Genelia Roshan</td>
										<td class="max-texts"><a href="#">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 09 </td>
									</tr>
									<tr>
										<td><div class="checkbox">
												<label><input type="checkbox" name="optionsCheckboxes"></label>
											</div></td>
										<td class="hidden-xs"><i class="fa fa-star-o"></i></td>
										<td class="hidden-xs">Ritesh Deshmukh</td>
										<td class="max-texts"><a href="#"><span class="label label-success">Falcon</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
										<td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
										<td class="text-right"> May 09 </td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="row">
							<div class="col-xs-7 "><p class="p-15">Showing 1 - 15 of 200</p></div>
							<div class="col-xs-5 text-right">
								<div class="btn-group">
									<button type="button" class="btn btn-primary"><i class="fa fa-chevron-left"></i></button>
									<button type="button" class="btn btn-primary"><i class="fa fa-chevron-right"></i></button>
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

<!-- Vendor JavaScripts --> 
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script> <!-- Custom Js --> 
</body>

<!-- Mirrored from thememakker.com/templates/falcon/html/mail-inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:57:08 GMT -->
</html>
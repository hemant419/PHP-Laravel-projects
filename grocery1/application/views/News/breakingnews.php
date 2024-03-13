<!--  CONTENT  -->
		<section id="content">
			<div class="page page-tables-footable">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Todaynews </h1>
							<small class="text-muted">Welcome to Admin Site</small>
						</div>
					</div>
				</div>

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
				 <section class="boxs">
                            <div class="boxs-header">
                                <h3 class="custom-font hb-blush">
                                    <strong>Togglable</strong> tabs</h3>

                            </div>
                            <div class="boxs-body">
                                <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                                    <ul class="nav nav-tabs" id="myTabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Show</a>
                                        </li>
                                        <li role="presentation" class="">
                                            <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"
                                                aria-expanded="false">Add</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active in" role="tabpanel" id="home" aria-labelledby="home-tab">
                                            
                                            
                                 <div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
                   <form name="gg" method="post" action="<?php echo site_url();1?>/Newsc/insert">
                                
                                
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
                                          
                                            
                                            <th>bid</th>
                                            <th>description</th>
                                            <th>datereg</th>
                                            <th>bstatus</th>
											<th colspan="2">Actions</th>
											
                                            </tr>
									</thead>
									<tbody>
                               
                               <?php
                               foreach($data as $row)
                               {
                               ?><tr>

                                <td><?php echo $row->bid ?></td>
                                <td><?php echo $row->description ?></td>
                                <td><?php echo $row->datereg ?></td>
                                <td><?php echo $row->bstatus ?></td>
                                
                                <td colspan="2">Delete | Edit</td>
								<?php
                               }
                                ?>
                                
                                            
									
                                    </tbody>

                 						   

                        			<tfoot class="hide-if-no-paging">
						
                        				<tr>
                                        
<td>
     		
</td>
											<td colspan="5" class="text-right">
												<ul class="pagination">
												</ul>
											</td>
                                            
										</tr>
                                        
									</tfoot>
                                                                               
		       						</table>
 			</div>           
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            </div>
                                        <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab">
                 
                 
                 
                 	<div class="boxs-body">
								<form class="form-horizontal" method="post" action="http://localhost/newsadmin/index.php/Categoryc/insert" name="form4" role="form" id="form4" data-parsley-validate>
									<div class="form-group">
										<label class="col-sm-3 control-label">timage</label>
										<div class="col-sm-9">
											<input type="text"  name="timg" class="form-control" data-parsley-trigger="change" required>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label">title</label>
										<div class="col-sm-9">
											<input type="text"  name="tle" class="form-control" data-parsley-trigger="change" required>
										</div>
									</div>
										
							
                            <div class="form-group">
										<label class="col-sm-3 control-label">tdesc</label>
										<div class="col-sm-9">
											<input type="text"  name="tds" class="form-control" data-parsley-trigger="change" required>
										</div>
									</div>
						
								<button type="submit" name="submit" class="btn btn-raised btn-default" id="form4Submit">Submit</button></form>
						</form>
                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                
					</div>
				</div>
			</div>
		</section>
        </form>
		<!--/ CONTENT -->

	</div>
	
	<!--  Vendor JavaScripts  -->
	<script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script>
	<script src="<?php echo base_url();?>assets/js/vendor/footable/footable.all.min.js"></script>
	<!--/ vendor javascripts -->

	<!--  Custom JavaScripts  -->
	<script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script>	<!-- Custom Js -->

	<!--  Page Specific Scripts  -->
	<script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body>
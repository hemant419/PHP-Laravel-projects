<!--  CONTENT  -->
		<section id="content">
			<div class="page page-tables-footable">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Show Category Tables</h1>
							<small class="text-muted">Welcome to Admin Site</small>
						</div>
					</div>
				</div>

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong>Category Table</strong> Example</h3>

							</div>
							<div class="boxs-body">
								<div class="form-group">
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
                   <form name="gg" method="post" action="<?php echo site_url();1?>/Categoryc/deleteall">
                                
                                
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
                                            <?php
											 if($this->uri->segment(2)=="CheckAll")
											 {
											
											?>
                                           
                                            
          <a href="<?php echo site_url();?>/Categoryc">UnCheckAll</a>
                                            <?php
											 }
											 else
											 {
												 ?>
              <a href="<?php echo site_url();?>/Categoryc/CheckAll">CheckAll</a>                           <?php
											 }
											 ?>
                                            
                                        <th></th>    
                                            <th>category_id</th>
											<th>category_name</th>
                                            <th>date_register</th>
                                            <th>status</th>
											<th colspan="2">Actions</th>
											
                                            </tr>
									</thead>
									<tbody>
						
                        				<?php
										foreach($data as $row)
										{
										?>
                                        
                                        <tr>
                                                                         <?php
											 if($this->uri->segment(2)=="CheckAll")
											 {
											
											?>
           
                                        
                                        
                                        <td><input type="checkbox" name="chk[]" value="<?php echo $row->category_id?>" checked="checked" /></td>
                                        
                                        <?php
											 }
											 else
											 {
												 ?>
                                                 <td><input type="checkbox" name="chk[]" value="<?php echo $row->category_id?>"  /></td>
                                        <?php
											 }
											 ?>
			
            								<td><?php echo $row->category_id ?></td>
											<td><?php echo $row->category_name ?></td>
											<td><?php echo $row->date_register ?></td>
											<td>
							<a href="<?php echo site_url();?>/Categoryc/status/<?php echo $row->category_id;?>"><?php echo $row->status ?></a>
                            </td>
            								<td><a href="<?php echo site_url();?>/Categoryc/del/<?php echo $row->category_id;?>">Delete</a>						
     
            								|
                                            
                                         
     
                                     <a href="<?php echo site_url();?>/Categoryc/edit/<?php echo $row->category_id;?>">Edit</td>								
     
  
                                        </tr>

 

										<?php
										}
										?>
										
                 
            	          
                                        	</tbody>

                 						   

                        			<tfoot class="hide-if-no-paging">
						
                        				<tr>
                                        
<td>
     <input type="submit" name="sub" value="DeleteAll" /> 
			
</td>
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
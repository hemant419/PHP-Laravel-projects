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
                   
                                
                                
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
                                            <?php
											 if($this->uri->segment(2)=="CheckAll")
											 {
											
											?>
                                           
                                            
          <a href="<?php echo site_url();?>/Cityc">UnCheckAll</a>
                                            <?php
											 }
											 else
											 {
												 ?>
              <a href="<?php echo site_url();?>/Cityc/CheckAll">CheckAll</a>                           <?php
											 }
											 ?>
                                            
                                        <th></th>    
                                            <th>city_id</th>
                                            <th>state_name</th>
                                            <th>city_name</th>
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
           
                                        
                                        
                                        <td><input type="checkbox" name="chk[]" value="<?php echo $row->city_id?>" checked="checked" /></td>
                                        
                                        <?php
											 }
											 else
											 {
												 ?>
                                                 <td><input type="checkbox" name="chk[]" value="<?php echo $row->city_id?>"  /></td>
                                        <?php
											 }
											 ?>
											<td><?php echo $row->city_id ?></td>
            								
                                            <td><?php echo $row->state_name ?></td>
											
                                  
											<td><?php echo $row->city_name ?></td>
											<td><?php echo $row->date_register ?></td>
											<td>
							<a href="<?php echo site_url();?>/Cityc/status/<?php echo $row->city_id;?>"><?php echo $row->cstatus ?></a>
                            </td>
            								<td><a href="<?php echo site_url();?>/Cityc/del/<?php echo $row->city_id;?>"><img src="<?php echo base_url();?>assets/images/close.jpg" height="30" width="30" /></a>						
     
            								<td>
                                            
                                            <span style="border-left-style:dotted"></span>
     
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                       <a href="<?php echo site_url();?>/Cityc/edit/<?php echo $row->city_id;?>"><img src="<?php echo base_url();?>assets/images/edit.jpg" height="30" width="40" /></td>								
     
  
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
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            </div>
                                        <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profile-tab">
                 
                 
                 
                 	<div class="boxs-body">
								<form class="form-horizontal" method="post" action="<?php echo site_url();?>/Cityc/insert" name="form4" role="form" id="form4" data-parsley-validate>
									
                                    
                                    <div class="form-group">
		                
                        								<label class="col-sm-3 control-label">state Name</label>
          
                                  	<div class="col-sm-9 col-xs-offset-3">
			
         
            								<select name="state_name" class="form-control mb-10" data-parsley-trigger="change" required>
					
                    
                    							<option value="">Select option...</option>
                    <?php
					foreach ($data2 as $row)
					{
						
					?>
                    
                    
                   
												<option value="<?php echo $row->state_id;?>"><?php echo $row->state_name;?></option>
											
		<?php
					}
					?>
        
        
        									</select>
													</div>
									</div>
                                    
                                    
                                    
                                                                    <div class="form-group">
										<label class="col-sm-3 control-label">city_name</label>
										<div class="col-sm-9">
											<input type="text"  name="city_name" class="form-control" data-parsley-trigger="change" required>
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



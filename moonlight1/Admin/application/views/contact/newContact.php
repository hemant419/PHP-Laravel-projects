<!--  CONTENT  -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/footable/css/footable.core.min.css">
<div>
<section id="content">
  <div class="page page-tables-footable">
    <!-- bradcome -->
    
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs ">
          <div class="boxs-header">
            <h3 class="custom-font hb-cyan">New <strong>Contact </strong></h3>
          </div>
		  
          <div class="boxs-body">
		   
            <div class="form-group">
              <label for="filter" style="padding-top: 5px">Search:</label>
              <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
            </div>
            <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
              <thead>
                <tr>
				
                  <th >#</th>
                  <th >Name</th>
				  <th >Email</th>
				  <th data-hide="phone">Massage</th>
                  <th data-hide="phone, tablet">Status</th>
				  
                  <th  data-hide='phone, tablet'>Action</th>
                </tr>
              </thead>
			    <form action="<?php echo site_url() ?>/contactcontrol/contactmultidel/" method="post">
			
              <tbody>
			  	<?php foreach($contact as $data){?>	
					<tr>
					
					<td><?php echo $data->contact_id; ?></td>
					<td><?php echo $data->contact_name; ?></td>
					<td width="10"><?php echo $data->contact_email; ?></td>
					<td width="20"><?php echo $data->contact_msg; ?></td>
					<td width="10">
				<a href="<?php echo site_url()?>/contactcontrol/contactstatus/<?php echo $data->contact_id?>" style="text-decoration:none"><p class="<?php if( $data->contact_status=="Active"){ ?>btn btn-raised btn-success btn-sm	<?php	}else{	?>btn btn-raised btn-danger btn-sm<?php }?>"> <?php echo $data->contact_status?></p>	</a>
					</td>
					
					<td><?php echo $data->contact_date; ?></td>
					</tr>
				<?php }?>	
			  </tbody>
              <tfoot class="hide-if-no-paging">
                <tr>
				 
				
                  <td colspan="5" class="text-right"><ul class="pagination">
                    </ul></td>
                </tr>
              </tfoot>
			  </form>
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
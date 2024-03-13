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
            <h3 class="custom-font hb-cyan"> <strong>Frequently Ask</strong>Question </h3>
          </div>
		  
          <div class="boxs-body">
		   
            <div class="form-group">
              <label for="filter" style="padding-top: 5px">Search:</label>
              <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
            </div>
            <table id="searchTextResults" data-filter="#filter" data-page-size="10" class="footable table table-custom">
              <thead>
                <tr>
				
                  <th >#</th>
                  <th >Product</th>
                  <th >User Detail</th>
				
				  <th data-hide="phone">Que.</th>
				  <th data-hide="phone">Ans.</th>
                  <th data-hide="phone, tablet">Status</th>
				  
                  <th  data-hide='phone, tablet'>Action</th>
               
                </tr>
              </thead>
			    <form action="<?php echo site_url() ?>/contactcontrol/contactmultidel/" method="post">
              <tbody>
			  	<?php foreach($faq as $data){?>	
					<tr>
					
					<td><?php echo $data->faq_id; ?></td>
					<td>
		<img src="<?php echo base_url() ?>product/<?php echo $data->prd_img1; ?>" width="90" height="100"/>
					</td>
					<td> Name: &nbsp;<?php echo $data->faq_name; ?><br />
						 Email: &nbsp;<?php echo $data->faq_email; ?><br />
						 contact:&nbsp;<?php echo $data->faq_contact; ?><hr />
						Date : <?php echo $data->faq_date; ?>
					</td>
					<td width="20"><?php echo $data->faq_que; ?></td>
					<td width="20">
					<?php if($data->faq_ans!=""){echo $data->faq_ans;?>
					<?php } ?>
					</td>
					<td>
				<a href="<?php echo site_url()?>/faqcontrol/faqstatus/<?php echo $data->faq_id?>" style="text-decoration:none"><p class="<?php if( $data->faq_status=="Active"){ ?>btn btn-raised btn-success btn-sm	<?php	}else{	?>btn btn-raised btn-danger btn-sm<?php }?>"> <?php echo $data->faq_status?></p>	</a>
					</td>
					<td> 
<a href="<?php echo site_url()?>/faqcontrol/editFaq/<?php echo $data->faq_id?>" style="text-decoration:none;text-align:center;" id="a">
							<div class="col-md-3 col-sm-4"><i class="icon-pencil"></i></div>
</a>
					<a href="<?php echo site_url()?>/faqcontrol/faqdelete/<?php echo $data->faq_id; ?>" style="text-decoration:none">	<div class="col-md-3 col-sm-4"><i class="glyphicon glyphicon-trash"></i></div></a>
					</td>
					
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
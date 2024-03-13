<!--  CONTENT  -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/footable/css/footable.core.min.css">

<section id="content">
  <div class="page page-tables-footable">
    <!-- bradcome -->
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs ">
          <div class="boxs-header">
            <h3 class="custom-font hb-cyan"> <strong> New </strong>Order</h3>
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
                  <th></th>
                 <!-- <th data-hide="phone">User</th>-->
                  <th data-hide='phone, tablet'>Email</th>
                  <th data-hide='phone, tablet'>Contact</th>
                  <th data-hide='phone, tablet'>Address</th>
                  <th data-hide='phone, tablet'>Shipping</th>
                  <th data-hide='phone, tablet'>Discount</th>
				  <th data-hide='phone, tablet'>Delivery</th>
                  <th data-hide='phone, tablet'>Status</th>
                 
                  <th data-hide='phone, tablet'>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <?php 
								foreach($order as $data)
						
										{
									?>
                <tr>
                  <td><?php echo $data->order_id ?></td>
                  <td>
<a href="<?php echo site_url() ?>/orderControl/invoice/<?php echo $data->order_no ?>" class="custom-font hb-cyan" style="text-decoration:none">
						 <strong> Invoice </strong></a>
				  </td>
                
                  <td width="5"><?php echo $data->user_email ?></td>
                  <td width="8"><?php echo $data->user_contact?></td>
                   <td width="15"><?php echo $data->shipping_address ?></td>
                  <td width="15"><?php echo $data->user_address ?></td>
                 <td width="10"><?php echo $data->cupon_amount ?></td>
                  <td width="10"><?php if( $data->deliver_charg ==0){?>Free<?php }else{?> Express<?php }?></td>

                  <td>
<a href="<?php echo site_url()?>/orderControl/status/<?php echo $data->order_id ?>" style="text-decoration:none"> <button class="<?php if( $data->order_status=="Pending"){ ?>btn btn-raised btn-success btn-sm	<?php	}	elseif($data->order_status=="Confirm"){	?>btn btn-raised btn-info btn-sm	<?php }	elseif($data->order_status=="Dispatch"){	?>btn btn-raised btn-warning btn-sm	<?php }	else{	?>btn btn-raised btn-danger btn-sm	<?php }?>"><?php echo $data->order_status ?> </button>	 </a> </td>
                <!--  <td><?php //echo substr($data->order_date,0,10); ?></td>-->
                   <td><div class="dropdown"> <a href="#" class="btn btn-simple dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </a>
                      <ul class="dropdown-menu pull-right">
                       <li> <a href="<?php echo site_url()?>/orderControl/deleteOrder/<?php echo $data->order_id?>" style="text-decoration:none"> Delete</a> </li>
                      </ul>
                    </div></td>
                </tr>
                <?php 	
										}
									?>
              </tbody>
              <tfoot class="hide-if-no-paging">
                <tr>
                  <td colspan="8" class="text-right"><ul class="pagination">
                    </ul></td>
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
<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script>
<!-- Custom Js -->
<!--  Page Specific Scripts  -->
<script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body></html>
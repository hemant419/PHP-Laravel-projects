<!--CONTENT  -->
<section id="content">
  <div class="page page-shop-invoices">
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">Invoice</h1>
          <small class="text-muted">Welcome to Webmarket</small> </div>
      </div>
    </div>
    <!-- page content -->
    <div class="pagecontent">
      <div class="row">
        <div class="col-md-12">
          <section class="boxs">
            <div class="boxs-header">
              <h3 class="custom-font hb-amber"><strong>Invoices</strong> Detail</h3>
              <ul class="controls">
                
                <li class="dropdown"> <a role="button" tabindex="0" class="dropdown-toggle" data-toggle="dropdown">Date :  <?php echo date("Y-m-d")?></a>
                 
                </li>
              </ul>
            </div>
            <div class="panel-body">
              <div class="clearfix">
                <div class="pull-left">
                  <h4 class="text-right"> <img src="<?php  echo base_url() ?>assets/images/invoice.png" width="70" alt="img"> Webmarket </h4>
                </div>
                <div class="pull-right">
                  <h4>Invoice # <br>
                    <strong>
<?php echo $this->uri->segment(3)."/".$this->uri->segment(4)."/".$this->uri->segment(5);?></strong> </h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <div class="pull-left mt-20">
                    <address>
                    <strong>Shipping Address</strong> <br>
                 <?php $add=""; $contact=""; $date=""; $status="";
						
						foreach($invoice as $invoiceData)
							{ $contact=$invoiceData->user_contact; $add=$invoiceData->shipping_address ;
								$date=$invoiceData->order_date;
								$status=$invoiceData->order_status;
							 }
						 echo $add=$invoiceData->shipping_address ;
				 ?>	 <br>
                    <abbr title="Phone">Mo No. :</abbr><?php echo $contact ?>
                    </address>
                  </div>
                  <div class="pull-right mt-20">
                    <p> <strong>Order Date: </strong> <?php echo $date ;?></p>
                    <p class="m-t-10"> <strong>Order Status: </strong> <span class="label label-pink"><?php echo $status ?></span> </p>
                    <p class="m-t-10"> <strong>Order ID: </strong> #<?php echo $this->uri->segment(3)."/".$this->uri->segment(4)."/".$this->uri->segment(5);?></strong> </h4>
</p>
                  </div>
                </div>
              </div>
              <div class="mt-40"></div>
              <div class="row">
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table class="table mt-20">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Item</th>
                          <th>Description</th>
                          <th>Quantity</th>
                          <th>Unit Cost</th>
                          <th>Discount</th>
						  <th>Offer Benefit</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
					<?php
					
					 $i=0;$total=0; $totalCupon=0;   $charges=0;$sub=0;
					 foreach($invoice as $invoiceData){  $i=$i+1;  ?>	
                        <tr>
                          <td><?php echo $i?></td>
                          <td>
<img src="<?php echo base_url()?>product/<?php echo $invoiceData->prd_img1 ?>" height="100" width="90"></td>
                          <td><?php echo $invoiceData->prd_name ?></td>
                          <td><?php echo $invoiceData->Qty ?></td>
                          <td>&#8377 <?php echo $invoiceData->prd_price ?></td>
					      <td><?php echo $invoiceData->prd_discount ?>%</td>
                          <td>&#8377 <?php 
						  $pureamt=$invoiceData->prd_price*$invoiceData->Qty;
						  echo $disamt=ceil($pureamt/$invoiceData->prd_discount);
						   
						  ?></td>
                          <td>&#8377 <?php echo $sub=$pureamt-$disamt; ?></td>
                        </tr>
                    <?php $total=$total+$sub;
						  $totalCupon=$invoiceData->cupon_amount ;
 						  $charges=$invoiceData->deliver_charg ;	
						}?>   
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row" style="border-radius: 0px;">
                <div class="col-md-3 col-md-offset-9">
                  <p class="text-right"> <b>Sub-total:</b>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $total ;?></p>
                  <p class="text-right">Cupon Discout:&nbsp;&nbsp;&nbsp;&nbsp;
				 <button class="btn btn-outline btn-default bootstrap-touchspin-down" type="button"><b>-</b></button><?php echo $totalCupon ;?></p>
                  <p class="text-right">Shipping Charge :&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-outline btn-default bootstrap-touchspin-up" type="button"><b>+</b></button><?php echo  $charges ;?></p>
                  <hr>
                  <h3 class="text-right">&#8377 <?php echo $total-$totalCupon+$charges?></h3>
                </div>
              </div>
              <hr>
              <div class="hidden-print">
                <div class="pull-right"> <a href="javascript:window.print()" class="btn btn-raised btn-primary"> <i class="fa fa-print"></i> </a> 
			 </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
<!--/ Application Content -->
<!--  Vendor JavaScripts -->
<script src="<?php  echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php  echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<!--/ vendor javascripts -->
<script src="<?php  echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<!-- Custom Js -->
</body></html>
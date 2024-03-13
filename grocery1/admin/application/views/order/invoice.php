<!--CONTENT  -->

<section id="content">
  <div class="page page-shop-invoices">
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">Invoice</h1>
          <small class="text-muted">Welcome to Falcon application</small> </div>
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
                <li> <a href="javascript:void(0);"> 
				<?php  echo date("d-M-Y") ?></a> </li>
                
              </ul>
            </div>
            <div class="panel-body">
              <div class="clearfix">
                <div class="pull-left">
                  <h4 class="text-right"> <img src="<?php echo base_url() ?>assets/images/logo-placeholder.jpg" width="70" alt="img"> </h4>
                </div>
                <div class="pull-right">
                  <h4>Invoice # <br>
                    <strong><?php echo $invoicepro->orderno ?></strong> </h4>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <div class="pull-left mt-20">
                    <address>
                    <strong>Falcon, Inc.</strong> <br>
                     <?php echo $invoicepro->userfname ?> <?php echo $invoicepro->userlname ?><br>
                    <?php echo $invoicepro->paramanentaddress ?> <br>
                    <abbr >IDN:</abbr> (+91) <?php echo $invoicepro->contactno ?>
                    </address>
                  </div>
                  <div class="pull-right mt-20">
                    <p> <strong>Order Date: </strong><?php echo $invoicepro->date_register ?></p>
                    <p class="m-t-10"> <strong>Order Status: </strong>
					 <span class="label label-pink"><?php echo $invoicepro->o_statas ?></span> </p>
                    <p class="m-t-10"> <strong>Order ID: </strong> #<?php echo $invoicepro->orderno ?></p>
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
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
						$total=0;
						foreach($invoiceus as $row)
						{
							
							$this->db->where('product_id',$row->product_id);
							$product=$this->db->get('product_master')->row();
						
						?>
                        <tr>
                          <td><?php echo $row->sc_id ?></td>
                          <td><?php echo $product->product_name ?></td>
                          <td><?php echo $product->product_description ?></td>
                          <td><?php echo $row->qty ?></td>
                          <td><?php echo $row->product_price ?></td>
                         <td><?php echo $price=$row->qty*$row->product_price ?></td>

                         </tr>
                       <?php
					   $total=$total+$price;
						}
					   ?>
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row" style="border-radius: 0px;">
                <div class="col-md-3 col-md-offset-9">
                  <p class="text-right"> <b>Sub-total:</b> <?php echo $total ?></p>
                  <p class="text-right"> <b>Delivery Charge:</b> <?php echo $invoicepro->deliverycharg ?></p>
                  
                  <hr>
                  <h3 class="text-right">&#8377; <?php echo $total+$invoicepro->deliverycharg ?></h3>
                </div>
              </div>
              <hr>
              <div class="hidden-print">
                <div class="pull-right"> <a href="javascript:window.print()" class="btn btn-raised btn-primary"> <i class="fa fa-print"></i> </a> <a  href="javascript:void(0);" class="btn btn-raised btn-default">Submit</a> </div>
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
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<!--/ vendor javascripts -->
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<!-- Custom Js -->
</body><!-- Mirrored from thememakker.com/templates/falcon/html/invoices.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:59:20 GMT -->
</html>
<script>

function loadMoreData(data)
{
	$.ajax({
		
				url:"<?php echo site_url() ?>/productc/showdata/"+data,
				success:function(showdata)
				{
					$("#showMore").html(showdata);
				}
				
		
	});
}
</script>
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
	<!-- vendor css files -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/animsition.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/footable/css/footable.core.min.css">
	<!-- project main css files -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
		<!--  CONTENT  -->
		<section id="content">
			<div class="page page-tables-footable">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Product Table</h1>
							<small class="text-muted"></small>
						</div>
					</div>
				</div>

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<section class="boxs ">
							<div class="boxs-header">
								<h3 class="custom-font hb-cyan">
									<strong></strong></h3>

							</div>
							<div class="boxs-body">
                             <a href="<?php echo site_url() ?>/productc/addproduct"  class="btn btn-raised btn-warning"><i class="glyphicon glyphicon-plus"></i>Add Product</a>
								<div class="form-group">
                               
									<label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th>#</th>
											<th data-hide='phone,tablet'>Product</th>
											<th>category</th>
											<th data-hide="phone">Sub Categoey</th>
										<!--	<th data-hide='phone, tablet'>Brand</th>
                                            -->
                                            <th data-hide='phone, tablet'>Product Name</th>
											<th data-hide='phone, tablet'>Price</th>
                                            <th data-hide='phone, tablet'>Discount</th>
                                           <th data-hide='phone, tablet'>status</th>
                                            <th data-hide='phone, tablet'>Action</th>
                                            <th></th>
										</tr>
									</thead>
									<tbody>
                                    <?php 

										foreach($getdata as $row)
										{
											
										$this->db->where('product_id',$row->product_id);
										$rr=$this->db->get('productimage')->row();
										
									?>
                                    <tr>
                                    <td><?php echo $row->product_id ?>  </td>
                                    <td>
            <img src="<?php echo base_url()?>./images/<?php echo $rr->image ?>" width="70"></td>
									<td><?php echo $row->categery_name ?> </td>
                                    <td> <?php echo $row->s_name ?></td>
									<!--<td> ?php echo $row->brand_name ?></td>
                                    -->
                                    <td> <?php echo $row->product_name ?></td>
                                    <td><i class="fa fa-inr"><?php echo $row->product_price ?></i></td>
                                    <td><?php echo $row->product_discount ?></td>
                                     <th><a href="<?php echo site_url() ?>/productc/statas/<?php echo $row->product_id; ?>">
                                     <button class="<?php if($row->status=="Active"){ ?>btn btn-raised btn-warning btn-xs<?php }else {?>btn btn-raised btn-danger btn-xs<?php } ?>"><?php echo $row->status; ?></button></a></th>

                                  
                                 	<td> <a href="<?php echo site_url() ?>/productc/editproduct/<?php echo $row->product_id?>"><i class="glyphicon glyphicon-edit"></i></a> 
                                    | 
                                    
                                    <a href="<?php echo site_url() ?>/productc/deleteda/<?php echo $row->product_id ?>" ><i class="fa fa-trash-o"></i> </a>  
                                </td>
                                <td>   <a class="" data-toggle="modal" data-target="#myModal2" onclick="loadMoreData(<?php echo $row->product_id?>)" style="text-decoration:none;cursor:pointer" >more</a></td>
                                  <?php
									}
									?>
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
 <!-- Modal -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Product Detail</h4>
                </div>
                <div class="modal-body">
                 <table id="showMore"  border="0" height="350" width="800" cellpadding="20" cellspacing="30">
                 
                 
                 </table>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->   
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
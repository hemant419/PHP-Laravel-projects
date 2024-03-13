<head>
	<!-- vendor css files -->
<?php //	<link rel="stylesheet" href=" echo base_url()?><?php //assets/js/vendor/footable/css/footable.core.min.css"> ?>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/weather-icons.min.css">
</head>

<!--  CONTENT  -->
<section id="content">
  <div class="page page-tables-footable">
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">Main Category</h1>
        </div>
      </div>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs ">
          <div class="boxs-header">
         <!--   <h3 class="custom-font hb-cyan"> <strong>FooTable</strong> Example</h3>-->
          </div>
          <div class="boxs-body">
             <div class="form-group">
					<a href="<?php echo site_url() ?>/workcontrol/addCategory" role="button" tabindex="0">
                    <button class="btn btn-primary btn-raised">
					 <i class="fa fa-plus-square"></i>  Add New Category</button></a>
		    </div>
		    <div class="form-group">
              <label for="filter" style="padding-top: 5px">Search:</label>
              <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
            </div>
<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
              <thead>
                <tr>
                  <th>Sr No.</th>
				  <th>Category</th>
                  <th data-hide='phone, tablet'>Status</th>
                  
				  <th colspan="2">Action</th>
                  <th data-hide='phone, tablet'>Email</th>
				  
				  
                </tr>
              </thead>
              <tbody>
               <?php $id=1; foreach($maincategory as $data){?>
			    <tr>
                  <td><?php  echo $id; $id++;?></td>
				  <td><?php echo $data->cat_name; ?></td>
                  <td><a href="<?php echo site_url()?>/workcontrol/editmaincat/<?php echo $data->cat_id; ?>" 
				  		style="text-decoration:none">
				  		<i class="icon-pencil"></i></a>
				  </td>
				  <td>&nbsp;</td>
				  <td><a href="<?php echo site_url()?>/workcontrol/deletemaincat/<?php echo $data->cat_id; ?>"
				  		style="text-decoration:none">
				  			<i class="fa fa-times"></i></a>
				  </td>
                 
				  <td>&nbsp;</td>
				  
                </tr>
               <?php }?>
			   </tbody>
              <tfoot class="hide-if-no-paging">
                <tr>
                  <td colspan="5" class="text-right"><ul class="pagination">
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
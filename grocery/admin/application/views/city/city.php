<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>:: Falcon - Admin Dashboard ::</title>
<link rel="icon" type="image/ico" href="<?php echo base_url() ?>assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
<!-- vendor css files -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/footable/css/footable.core.min.css">
<!-- project main css files -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
<!--/ stylesheets -->
</head>
<!--  CONTENT  -->

<section id="content">
  <div class="page page-tables-footable">
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">City Table</h1>
          <small class="text-muted"></small> </div>
      </div>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs ">
          <div class="boxs-header">
            <h3 class="custom-font hb-cyan"> <strong></strong> </h3>
          </div>
          <div class="boxs-body"> <a href="<?php echo site_url()?>/cityControl/addcity" class="btn btn-raised btn-primary"><i class="fa fa-plus-square"></i> Add city</a>
            <div class="form-group">
              <label for="filter" style="padding-top: 5px">Search:</label>
              <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
            </div>
              <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>State_name</th>
                    <th>city_name</th>
                    <th>statas</th>
                    <th>date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
					foreach($citydata as $dataget){
				?>
                  <tr>
                    <th><?php echo $dataget->city_id; ?></th>
                    <th><?php echo $dataget->state_name; ?></th>
                    <th><?php echo $dataget->city_name; ?></th>
                    <th><a href="<?php echo site_url() ?>/cityControl/statas/<?php echo $dataget->city_id; ?>">
                    <button class="<?php if($dataget->city_statas=="Active"){ ?>btn btn-raised btn-warning btn-xs<?php }else {?>btn btn-raised btn-danger btn-xs<?php } ?>"><?php echo $dataget->city_statas; ?></button> </a></th>
                    <th><?php echo $dataget->city_date; ?></th>
                    <th>  <a href="<?php echo site_url() ?>/cityControl/deletecity/<?php echo $dataget->city_id; ?>"> <i class="glyphicon glyphicon-trash"></i></a>
					<a href="<?php echo site_url() ?>/cityControl/editcity/<?php echo $dataget->city_id; ?>"> <i class="glyphicon glyphicon-edit"></i></a>   
                   </th>
                  </tr>
                  <?php }	?>
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
</body>
<!-- Mirrored from thememakker.com/templates/falcon/html/tables-footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:58:06 GMT -->
</html>
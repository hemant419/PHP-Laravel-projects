<!-- CONTENT  -->
		<section id="content">
			<div class="page page-gallery">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Gallery</h1>
							<small class="text-muted">Welcome to YoG valleY</small>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<section class="boxs">
							<div class="boxs-body">
								<div class="leftmenu-widget">
									<h3>Tags</h3>
									<div class="tag-list">
										<a href="#">Animals</a>
										<a href="#">fashion</a>
										<a href="#">Lifestyle</a>
										<a href="#">bootstrap</a>
										<a href="#">politics</a>
										<a href="#">photography</a>
										<a href="#">Music</a>
										<a href="#">Food &amp; drink</a>
										<a href="#">Car</a>
									</div>
								</div>
							</div>
						</section>
					</div>
					<div class="col-md-12 gallery-col">
						<section class="boxs">
							<div class="boxs-body">
							<?php foreach($image as $gallery){?>
								<a href="assets/images/image-gallery/1.jpg" class="show-image">
<img src="<?php echo base_url() ?><?php echo $gallery?>" alt="" class="img-responsive">
								</a>
							<?php } ?>	
							</div>
						</section>
					</div>
				</div>

			</div>
		</section>
		<!--/ CONTENT -->
	</div>
	<!--/ Application Content -->

	<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script>

	<!-- Custom JavaScripts  -->
	<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script>	<!-- Custom Js -->	
</body>
</html>
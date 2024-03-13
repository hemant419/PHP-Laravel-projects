<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themewinter.com/html/news247-bs4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jun 2021 08:52:26 GMT -->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>News247 - News Magazine Newspaper HTML Template</title>

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!--Favicon-->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="{{url('client/images/favicon.ico')}}" type="image/x-icon">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{url('client/css/bootstrap.min.css')}}">
	<!-- Template styles-->
	<link rel="stylesheet" href="{{url('client/css/style.css')}}">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{url('client/css/responsive.css')}}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{url('client/css/font-awesome.min.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{url('client/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{url('client/css/owl.theme.default.min.css')}}">
	<!-- Colorbox -->
	<link rel="stylesheet" href="{{url('client/css/colorbox.css')}}">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    @yield('head')
</head>
	
<body>

	<div class="body-inner">

	<div class="trending-bar d-md-block d-lg-block d-none">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="trending-title">Trending Now</h3>
					<div id="trending-slide" class="owl-carousel owl-theme trending-slide">
						<div class="item">
						   <div class="post-content">
						      <h2 class="post-title title-small">
						         <a href="#">The best MacBook Pro alternatives in 2017 for Apple users</a>
						      </h2>
						   </div><!-- Post content end -->
						</div><!-- Item 1 end -->
						<div class="item">
						   <div class="post-content">
						      <h2 class="post-title title-small">
						         <a href="#">Soaring through Southern Patagonia with the Premium Byrd drone</a>
						      </h2>
						   </div><!-- Post content end -->
						</div><!-- Item 2 end -->
						<div class="item">
						   <div class="post-content">
						      <h2 class="post-title title-small">
						         <a href="#">Super Tario Run isn’t groundbreaking, but it has Mintendo charm</a>
						      </h2>
						   </div><!-- Post content end -->
						</div><!-- Item 3 end -->
					</div><!-- Carousel end -->
				</div><!-- Col end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</div><!--/ Trending end -->

	<div id="top-bar" class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="ts-date">
						<i class="fa fa-calendar-check-o"></i>May 29, 2017
					</div>
					<ul class="unstyled top-nav">
						<li><a href="#">About</a></li>
						<li><a href="#">Write for Us</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div><!--/ Top bar left end -->

				<div class="col-md-4 top-social text-lg-right text-md-center">
					<ul class="unstyled">
						<li>
							<a title="Facebook" href="#">
								<span class="social-icon"><i class="fa fa-facebook"></i></span>
							</a>
							<a title="Twitter" href="#">
								<span class="social-icon"><i class="fa fa-twitter"></i></span>
							</a>
							<a title="Google+" href="#">
								<span class="social-icon"><i class="fa fa-google-plus"></i></span>
							</a>
							<a title="Linkdin" href="#">
								<span class="social-icon"><i class="fa fa-linkedin"></i></span>
							</a>
							<a title="Rss" href="#">
								<span class="social-icon"><i class="fa fa-rss"></i></span>
							</a>
							<a title="Skype" href="#">
								<span class="social-icon"><i class="fa fa-skype"></i></span>
							</a>
						</li>
					</ul><!-- Ul end -->
				</div><!--/ Top social col end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</div><!--/ Topbar end -->

	<!-- Header start -->
	<header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="logo">
						 <a href="index.html">
							<img src="{{url('client/images/logos/logo.png')}}"" alt="">
						 </a>
					</div>
				</div><!-- logo col end -->

				<div class="col-md-9 col-sm-12 header-right">
					<div class="ad-banner float-right">
						<a href="#"><img src="{{url('client/images/banner-ads/ad-top-header.png')}}"" class="img-fluid" alt=""></a>
					</div>
				</div><!-- header right end -->
			</div><!-- Row end -->
		</div><!-- Logo and banner area end -->
	</header><!--/ Header end -->

	<div class="main-nav clearfix">
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg col">
					<div class="site-nav-inner float-left">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <!-- End of Navbar toggler -->

						<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav">
								<li class="nav-item dropdown active">
									<a href="#" class="nav-link" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li class="active"><a href="index.html">Home 1</a></li>
										<li><a href="index-2.html">Home 2</a></li>
										<li><a href="index-3.html">Home 3</a></li>
										<li><a href="index-4.html">Home 4</a></li>
										<li><a href="index-5.html">Home 5</a></li>
									</ul>
								</li>

								<li class="nav-item dropdown mega-dropdown">
									<a href="category-style1.html" class="nav-link dropdown-toggle" data-toggle="dropdown"
       								role="button" aria-haspopup="true" aria-expanded="false">Lifestyle <i class="fa fa-angle-down"></i></a>
									<div class="dropdown-menu mega-menu-content clearfix">
										<div class="menu-tab">
											<div class="row">
												<ul class="nav nav-tabs flex-column col-2" data-toggle="tab-hover">
											  	<li class="nav-item">
											  		<a class= "nav-link animated fadeIn active " href="#tab-A" data-toggle="tab" aria-selected="true">
											  			<span class="tab-head">
															<span class="tab-text-title">Health</span>					
														</span>
											  		</a>
											  	</li>
											  	<li class="nav-item">
												  	<a class="nav-link animated fadeIn" href="#tab-B" data-toggle="tab"  aria-selected="false">
												  		<span class="tab-head">
															<span class="tab-text-title">Travel</span>					
														</span>
												  	</a>
												</li>
											 	<li class="nav-item">
												  	<a class="nav-link animated fadeIn" href="#tab-C" data-toggle="tab" aria-selected="false">
												  		<span class="tab-head">
															<span class="tab-text-title">Food</span>					
														</span>
												  	</a>
												</li>
												<li class="nav-item">
												  	<a class="nav-link animated fadeIn" href="#tab-D" data-toggle="tab" aria-selected="false">
												  		<span class="tab-head">
															<span class="tab-text-title">Architecture</span>					
														</span>
												  	</a>
												</li>
											</ul>

											<div class="tab-content col-10">
										      <div class="tab-pane fade show active" id="tab-A">
										      	<div class="row">
										      		<div class="col-md-3">
										      			
											      		<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/health1.jpg')}}" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Health</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">That wearable on your wrist could soon track your…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
										      		</div>
										      		<div class="col-md-3">
											      		<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/health2.jpg')}}" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Health</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Can't shed those Gym? The problem might be in your…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end --></div>
										      		<div class="col-md-3">
											      		<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/health3.jpg')}}" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Health</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Deleting fears from the brain means you might neve…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end --></div>
										      		<div class="col-md-3">
											      		<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/health4.jpg')}}" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Health</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Smart packs parking sensor tech and beeps when col…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end --></div>
										      	</div>
										      </div><!-- Tab pane 1 end -->

									        <div class="tab-pane animated fadeIn" id="tab-B">
									        	<div class="row">
									        		<div class="col-md-3">
									        			<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/travel1.jpg')}}" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Travel</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">That wearable on your wrist could soon track your…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
									        		</div>
									        		<div class="col-md-3">
									        			<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/travel2.jpg')}}" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Travel</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Can't shed those Gym? The problem might be in your…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
									        		</div>
									        		<div class="col-md-3">
									        			<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/travel3.jpg')}}" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Travel</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Deleting fears from the brain means you might neve…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
									        		</div>
									        			
									      		<div class="col-md-3">
									      			<div class="post-block-style clearfix">
														<div class="post-thumb">
															<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/travel4.jpg')}}" alt="" /></a>
														</div>
														<a class="post-cat" href="#">Travel</a>
														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Smart packs parking sensor tech and beeps when col…</a>
												 			</h2>
											 			</div><!-- Post content end -->
													</div><!-- Post Block style end -->
									      		</div>
									        		</div><!-- Row end -->
									        	</div><!-- tab B end -->
									        	  <div class="tab-pane animated fadeIn" id="tab-C">
											     <div class="row">
											     		<div class="col-md-3">
											     			<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/food1.jpg')}}" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Food</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">That wearable on your wrist could soon track your…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
											      		
											      		
											     		</div>
											     		<div class="col-md-3">
											     			<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/food2.jpg')}}" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Food</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Can't shed those Gym? The problem might be in your…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
											     		</div>
											     		<div class="col-md-3">
											     			<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/food3.jpg')}}" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Food</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Deleting fears from the brain means you might neve…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
											     		</div>
											     		<div class="col-md-3">
											     			
											      		<div class="post-block-style clearfix">
																<div class="post-thumb">
																	<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/food4.jpg')}}" alt="" /></a>
																</div>
																<a class="post-cat" href="#">Food</a>
																<div class="post-content">
														 			<h2 class="post-title title-small">
														 				<a href="#">Smart packs parking sensor tech and beeps when col…</a>
														 			</h2>
													 			</div><!-- Post content end -->
															</div><!-- Post Block style end -->
											     		</div>
											     </div> 		
									        </div><!-- Tab pane 3 end -->

									        </div> <!-- Tab pane 2 end -->
											</div>
										</div><!-- Menu tab end -->
									</div><!-- Mega menu end -->
								</li><!-- Tab menu end -->

								<li>
									<a href="category-style2.html">Technology</a>
								</li>

								<li class="dropdown nav-item mega-dropdown">
									<a href="#" class="nav-link dropdown-toggler" data-toggle="dropdown">Video <i class="fa fa-angle-down"></i></a>
									<div class="dropdown-menu mega-menu-content clearfix">
										<div class="mega-menu-content-inner">
											<div class="row">
								      		<div class="col-md-3">
									      		<div class="post-block-style clearfix">
														<div class="post-thumb">
															<img class="img-fluid" src="{{url('client/images/news/video/video4.jpg')}}" alt="" />
															<a class="popup" href="https://www.youtube.com/embed/XhveHKJWnOQ?autoplay=1&amp;loop=1">
										                  <div class="video-icon">
										                  	<i class="fa fa-play"></i>
										               	</div>
										            	</a>
													   </div><!-- Post thumb end -->
														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Netcix cuts out the chill with an integrated...</a>
												 			</h2>
											 			</div><!-- Post content end -->
													</div><!-- Post Block style end -->
								      		</div><!-- Col 1 end -->

								      		<div class="col-md-3">
									      		<div class="post-block-style clearfix">
														<div class="post-thumb">
														   <img class="img-fluid" src="{{url('client/images/news/video/video3.jpg')}}" alt="" />
															<a class="popup" href="https://www.youtube.com/embed/wJF5NXygL4k?autoplay=1&amp;loop=1">
														      <div class="video-icon">
														      	<i class="fa fa-play"></i>
														   	</div>
															</a>
														</div><!-- Post thumb end -->
														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Netcix cuts out the chill with an integrated...</a>
												 			</h2>
											 			</div><!-- Post content end -->
													</div><!-- Post Block style end -->
								      		</div><!-- Col 2 end -->

								      		<div class="col-md-3">
									      		<div class="post-block-style clearfix">
														<div class="post-thumb">
														   <img class="img-fluid" src="{{url('client/images/news/video/video2.jpg')}}" alt="" />
															<a class="popup" href="https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&amp;loop=1">
														      <div class="video-icon">
														      	<i class="fa fa-play"></i>
														   	</div>
															</a>
														</div><!-- Post thumb end -->
														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">TG G6 will have dual 13-megapixel cameras...</a>
												 			</h2>
											 			</div><!-- Post content end -->
													</div><!-- Post Block style end -->
								      		</div><!-- Col 3 end -->
								      		<div class="col-md-3">
									      		<div class="post-block-style clearfix">
														<div class="post-thumb">
														   <img class="img-fluid" src="{{url('client/images/news/video/video1.jpg')}}" alt="" />
															<a class="popup" href="https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&amp;loop=1">
														      <div class="video-icon">
														      	<i class="fa fa-play"></i>
														   	</div>
															</a>
														</div><!-- Post thumb end -->
														<div class="post-content">
												 			<h2 class="post-title title-small">
												 				<a href="#">Netcix cuts out the chill with an integrated...</a>
												 			</h2>
											 			</div><!-- Post content end -->
													</div><!-- Post Block style end -->
								      		</div><!-- Col 4 end -->
								      	</div><!-- Post block row end -->
										</div> 
										
									</div><!-- Mega menu content end -->
								</li><!-- Video menu end -->

								<li>
									<a href="category-style4.html">Travel</a>
								</li>

								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li class="dropdown-submenu">
											<a href="#.">Category Layouts</a>
											<ul class="dropdown-menu">
												<li><a href="category-style1.html">Category Style 1</a></li>
												<li><a href="category-style2.html">Category Style 2</a></li>
												<li><a href="category-style3.html">Category Style 3</a></li>
												<li><a href="category-style4.html">Category Style 4</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#.">Post Formates</a>
											<ul class="dropdown-menu">
												<li><a href="single-post1.html">Single Post 1</a></li>
												<li><a href="single-post2.html">Single Post 2</a></li>
												<li><a href="single-post3.html">Single Post 3</a></li>
												<li><a href="single-post4.html">Single Post 4</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#.">Sidebar</a>
											<ul class="dropdown-menu">
												<li><a href="left-sidebar.html">Left Sidebar</a></li>
												<li><a href="single-post1.html">Right Sidebar</a></li>
												<li><a href="no-sidebar.html">No Sidebar</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#.">Shortcodes</a>
											<ul class="dropdown-menu">
												<li><a href="typography.html">Typography</a></li>
												<li><a href="blockquote.html">Blockquotes</a></li>
												<li><a href="tabs.html">Tabs</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#.">Pages</a>
											<ul class="dropdown-menu">
												<li><a href="author.html">Author</a></li>
												<li><a href="404.html">404</a></li>
												<li><a href="contact.html">Contact</a></li>
											</ul>
										</li>
									</ul><!-- End dropdown -->
								</li><!-- Features menu end -->
							</ul><!--/ Nav ul end -->
						</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->
				</nav><!--/ Navigation end -->

				<div class="nav-search">
					<span id="search"><i class="fa fa-search"></i></span>
				</div><!-- Search end -->
				
				<div class="search-block" style="display: none;">
					<input type="text" class="form-control" placeholder="Type what you want and enter">
					<span class="search-close">&times;</span>
				</div><!-- Site search end -->

			</div><!--/ Row end -->
		</div><!--/ Container end -->

	</div><!-- Menu wrapper end -->

	<div class="gap-40"></div>

	@yield('content')

	<footer id="footer" class="footer">
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-12 footer-widget">
						<h3 class="widget-title">Trending Now</h3>
						<div class="list-post-block">
							<ul class="list-post">
								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="{{url('client/images/news/lifestyle/health2.jpg')}}" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Can't shed those Gym? The problem might...</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Mar 13, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 1 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="{{url('client/images/news/lifestyle/health3.jpg')}}" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Deleting fears from the brain means you…</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Jan 11, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 2 end -->

								<li class="clearfix">
									<div class="post-block-style post-float clearfix">
										<div class="post-thumb">
											<a href="#">
												<img class="img-fluid" src="{{url('client/images/news/lifestyle/health4.jpg')}}" alt="" />
											</a>
										</div><!-- Post thumb end -->

										<div class="post-content">
								 			<h2 class="post-title title-small">
								 				<a href="#">Smart packs parking sensor tech...</a>
								 			</h2>
								 			<div class="post-meta">
								 				<span class="post-date">Feb 19, 2017</span>
								 			</div>
							 			</div><!-- Post content end -->
									</div><!-- Post block style end -->
								</li><!-- Li 3 end -->
							</ul><!-- List post end -->
						</div><!-- List post block end -->
						
					</div><!-- Col end -->

					<div class="col-lg-3 col-sm-12 footer-widget widget-categories">
						<h3 class="widget-title">Hot Categories</h3>
						<ul>
							<li>
								<a href="#"><span class="catTitle">Robotics</span><span class="catCounter"> (5)</span></a>
							</li>
							<li>
								<a href="#"><span class="catTitle">Games</span><span class="catCounter"> (6)</span></a>
							</li>
							<li>
								<a href="#"><span class="catTitle">Gadgets</span><span class="catCounter"> (5)</span></a>
							</li>
							<li>
								<a href="#"><span class="catTitle">Travel</span><span class="catCounter"> (5)</span></a>
							</li>
							<li>
								<a href="#"><span class="catTitle">Health</span><span class="catCounter"> (5)</span></a>
							</li>
							<li>
								<a href="#"><span class="catTitle">Architecture</span><span class="catCounter"> (5)</span></a>
							</li>
							<li>
								<a href="#"><span class="catTitle">Food</span><span class="catCounter"> (5)</span></a>
							</li>
						</ul>
						
					</div><!-- Col end -->

					<div class="col-lg-3 col-sm-12 footer-widget twitter-widget">
						<h3 class="widget-title">Latest Tweets</h3>
						<ul>
							<li>
								<div class="tweet-text">
								<span>About 13 days ago</span>
								Please, Wait for the next version of our templates to update #Joomla 3.7 
								<a href="#">https://t.co/LlEv8HgokN</a>
								</div>
							</li>
							<li>
								<div class="tweet-text">
								<span>About 15 days ago</span>
								#WordPress 4.8 is here!
								<a href="#">https://t.co/uDjRH4Gya9</a>
								</div>
							</li>
							<li>
								<div class="tweet-text">
								<span>About 1 month ago</span>
								Please, Wait for the next version of our templates to update #Joomla 3.7 
								<a href="#">https://t.co/LlEv8HgokN</a>
								</div>
							</li>
						</ul>
					</div><!-- Col end -->

					<div class="col-lg-3 col-sm-12 footer-widget">
						<h3 class="widget-title">Post Gallery</h3>
						<div class="gallery-widget">
							<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/health1.jpg')}}" alt="" /></a>
							<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/food3.jpg')}}" alt="" /></a>
							<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/travel4.jpg')}}" alt="" /></a>
							<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/architecture1.jpg')}}" alt="" /></a>
							<a href="#"><img class="img-fluid" src="{{url('client/images/news/tech/gadget1.jpg')}}" alt="" /></a>
							<a href="#"><img class="img-fluid" src="{{url('client/images/news/tech/gadget2.jpg')}}" alt="" /></a>
							<a href="#"><img class="img-fluid" src="{{url('client/images/news/tech/game2.jpg')}}" alt="" /></a>
							<a href="#"><img class="img-fluid" src="{{url('client/images/news/tech/robot5.jpg')}}" alt="" /></a>
							<a href="#"><img class="img-fluid" src="{{url('client/images/news/lifestyle/travel5.jpg')}}" alt="" /></a>
						</div>
					</div><!-- Col end -->

				</div><!-- Row end -->
			</div><!-- Container end -->
		</div><!-- Footer main end -->

		<div class="footer-info text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-info-content">
							<div class="footer-logo">
								<img class="img-fluid" src="{{url('client/images/logos/footer-logo.png')}}"" alt="" />
							</div>
							<p>News247 Worldwide is a popular online newsportal and going source for technical and digital content for its influential audience around the globe. You can reach us via email or phone.</p>
							<p class="footer-info-phone"><i class="fa fa-phone"></i> +(785) 238-4131</p>
							<p class="footer-info-email"><i class="fa fa-envelope-o"></i> editor@news247.com</p>
							<ul class="unstyled footer-social">
								<li>
									<a title="Rss" href="#">
										<span class="social-icon"><i class="fa fa-rss"></i></span>
									</a>
									<a title="Facebook" href="#">
										<span class="social-icon"><i class="fa fa-facebook"></i></span>
									</a>
									<a title="Twitter" href="#">
										<span class="social-icon"><i class="fa fa-twitter"></i></span>
									</a>
									<a title="Google+" href="#">
										<span class="social-icon"><i class="fa fa-google-plus"></i></span>
									</a>
									<a title="Linkdin" href="#">
										<span class="social-icon"><i class="fa fa-linkedin"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-skype"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-dribbble"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-pinterest"></i></span>
									</a>
									<a title="Skype" href="#">
										<span class="social-icon"><i class="fa fa-instagram"></i></span>
									</a>
								</li>
							</ul>
						</div><!-- Footer info content end -->
					</div><!-- Col end -->
				</div><!-- Row end -->
			</div><!-- Container end -->
		</div><!-- Footer info end -->

	</footer><!-- Footer end -->

	<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="copyright-info">
							<span>Copyright © 2018 News247 All Rights Reserved. Designed By Tripples</span>
						</div>
					</div>

					<div class="col-sm-12 col-md-6">
						<div class="footer-menu">
							<ul class="nav unstyled">
								<li><a href="#">Site Terms</a></li>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Advertisement</a></li>
								<li><a href="#">Cookies Policy</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Row end -->

				<div id="back-to-top" class="back-to-top">
					<button class="btn btn-primary" title="Back to Top">
						<i class="fa fa-angle-up"></i>
					</button>
				</div>

			</div><!-- Container end -->
   </div><!-- Copyright end -->


	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="{{url('client/js/jquery.js')}}"></script>
	<!-- Popper Jquery -->
	<script type="text/javascript" src="{{url('client/js/popper.min.js')}}"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="{{url('client/js/bootstrap.min.js')}}"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="{{url('client/js/owl.carousel.min.js')}}"></script>
	<!-- Color box -->
	<script type="text/javascript" src="{{url('client/js/jquery.colorbox.js')}}"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{url('client/js/smoothscroll.js')}}"></script>


	<!-- Template custom -->
	<script type="text/javascript" src="{{url('client/js/custom.js')}}"></script>
	
    @yield('script')
	</div><!-- Body inner end -->
</body>

<!-- Mirrored from demo.themewinter.com/html/news247-bs4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Jun 2021 08:56:33 GMT -->
</html>
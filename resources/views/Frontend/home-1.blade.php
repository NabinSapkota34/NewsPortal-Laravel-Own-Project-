


@extends('frontend.layouts.main')
@section('main-container')
<!-- Headers-4 block -->
<!--w3l-banner-slider-main-->
<section class="w3l-banner-slider-main">
	<div class="container">
		<div class="content-baner-inf">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="carousel-caption">
							<h3>A New Report Shows That Fashion Ads Are Still Overwhelmingly White Dresses</h3>
							<p>Lorem ipsum dolor sit amet,Vestibulum orci justo, vehicula vel sapien sit amet.</p>
							<div class="date-caption">
								 20.Dec.2019
							</div>
						</div>
					</div>
					<div class="carousel-item item2">
							<div class="carousel-caption">
									<h3>Santorini, Greece white and blue painted buildings near body of water</h3>
									<p>Lorem ipsum dolor sit amet,Vestibulum orci justo, vehicula vel sapien sit amet.</p>
									<div class="date-caption">
										 22.Dec.2019
										</div>
								</div>
					</div>
					<div class="carousel-item item3">
							<div class="carousel-caption">
									<h3>Penguins on snow covered ground,Looking Awesome to see</h3>
									<p>Lorem ipsum dolor sit amet,Vestibulum orci justo, vehicula vel sapien sit amet.</p>
									<div class="date-caption">
											23.Dec.2019
									</div>
								</div>
					</div>
					<div class="carousel-item item4">
							<div class="carousel-caption">
									<h3>7 Ways Amazon Whole Foods Is Catering to Every Millennial’s Whims</h3>
									<p>Lorem ipsum dolor sit amet,Vestibulum orci justo, vehicula vel sapien sit amet.</p>
									<div class="date-caption">
											25.Dec.2019
										</div>
								</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<script src="{{url('frontend/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
	
</section>
<!-- //w3l-banner-slider-main -->
<section class="w3l-mag-main">
	<!--/mag-content-->
	<div class="mag-content-inf py-5">
		<div class="container">
			<div class="banner-bottom-sechny py-md-4">
				<h3 class="hny-title text-center">Recent <span>News</span></h3>
				<div class="ban-content-inf row py-lg-3">
					<div class="maghny-gd-1 col-lg-6">
						<div class="maghny-grid">
							<figure class="effect-lily">
								<img class="img-fluid" src="assets/images/grid20.jpg" alt="">
								<figcaption class="w3set-hny">
									<div>
										<h4 class="top-text">Man in black jacket and brown hat standing on rock
											<span>near lake</span></h4>
										<p>Jan.20.2020 </p>
									</div>

								</figcaption>
							</figure>
						</div>
					</div>
					<div class="maghny-gd-1 col-lg-6">
						<div class="row">
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="assets/images/grid7.jpg">
										<figcaption>
											<div>
												<h4>woman near <span>pigeons</span></h4>
												<p>Jan.20.2020 </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5 class="top-title"><a href="#">There are many variations that focuses on
										presenting</a></h5>

								<div class="mag-post-meta mt-3"><span
										class="meta-author text-uppercase"><span>By&nbsp;</span><a href="#"
											class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<a href="#" class="read-more btn mt-3">Read More</a>
							</div>
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="assets/images/grid8.jpg">
										<figcaption>
											<div>
												<h4>Man standing on railroad near <span>plants</span></h4>
												<p>Jan.20.2020 </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5 class="top-title"><a href="#">
										There are many variations that focuses on presenting</a></h5>
								<div class="mag-post-meta mt-3"> <span
										class="meta-author text-uppercase"><span>By&nbsp;</span><a href="#"
											class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<a href="#" class="read-more btn mt-3">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="blog-inner-grids py-md-4 row">
				<div class="mag-content-left-hny col-lg-8">
					<!--/mag-hny-content-1-->
					<div class="mag-hny-content">
						<h3 class="hny-title">Latest <span>Articles</span></h3>
						<!--/mag-left-grid-1-->
						<div class="maghny-grids-inf row">
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="assets/images/grid1.jpg" alt="">
										<figcaption>
											<div>
												<h4>Man holding camera and woman playing <span>violin</span></h4>
												<p>Jan.20.2020 </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>

								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="{{url('frontend/images/grid2.jpg')}}" alt="">
										<figcaption>
											<div>
												<h4>Adult beautiful breakfast <span>brunette</span></h4>
												<p>Jan.20.2020 </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>

								<div class="mag-post-meta mt-3"> <a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img" alt=""></a><span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="{{url('frontend/images/grid3.jpg')}}" alt="">
										<figcaption>
											<div>
												<h4>Man in black shorts on <span>boat end</span></h4>
												<p>Jan.20.2020 </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
						</div>
					</div>
					<!--//mag-hny-content-1-->
					<!--//mag-left-grid-1-->
					<div class="mag-hny-content my-lg-5">
						<h3 class="hny-title">Great <span>lifestyle</span></h3>
						<!--/mag-left-grid-1-->
						<div class="maghny-grids-inf row">
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="{{url('frontend/images/grid4.jpg')}}" alt="">
										<figcaption>
											<div>
												<h4>Sittin people beside table inside <span> room</span></h4>
												<p>Jan.20.2020 </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="{{url('frontend/images/grid5.jpg')}}">
										<figcaption>
											<div>
												<h4>Tidy Room Filled with <span>furniture</span></h4>
												<p>Jan.20.2020 </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a><span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
						</div>
						<!--/mag-sub-grids-->
						<div class="row mng-front-cont mt-5">
							<div class="mag-small-post col-md-6">
								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m1.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a> </h4>
										<div class="mag-post-meta mt-3"> <span
												class="meta-author"><span>By&nbsp;</span><a href="#"
													class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m2.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a>
										</h4>
										<div class="mag-post-meta mt-3"> <span
												class="meta-author"><span>By&nbsp;</span><a href="#"
													class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m3.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a> </h4>

										<div class="mag-post-meta"> <span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m4.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a>
										</h4>


										<div class="mag-post-meta"> <span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>


							</div>
							<div class="mag-small-post col-md-6">
								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m12.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a> </h4>

										<div class="mag-post-meta"> <span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="{{url('frontend/images/m9.jpg')}}" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a>
										</h4>

										<div class="mag-post-meta"> <span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="{{url('frontend/images/m10.jpg')}}" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a> </h4>


										<div class="mag-post-meta"> <span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="{{url('frontend/images/m11.jpg')}}" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a>
										</h4>


										<div class="mag-post-meta"> <span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name"> John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--//mag-sub-grids-->
					</div>
					<!--//mag-left-grid-2-->
					<!--/mag-hny-content-1-->
					<div class="mag-hny-content my-lg-5 mt-5">
						<h3 class="hny-title">From <span>Beatuty</span></h3>
						<!--/mag-left-grid-1-->
						<div class="maghny-grids-inf row">
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="{{url('frontend/images/grid6.jpg')}}">
										<figcaption>
											<div>
												<h4>Person lying down on white <span>surface</span></h4>
												<p>Jan.20.2020 </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>

								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="{{url('frontend/images/grid7.jpg')}}">
										<figcaption>
											<div>
												<h4>woman near <span>pigeons</span></h4>
												<p>Jan.20.2020 </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5><a href="#">There are many variations that focuses on presenting</a></h5>

								<div class="mag-post-meta mt-3"><a href="#"><img src="{{url('frontend/images/admin.jpg')}}"
											class="img-fluid rounded-circle admin-img" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="{{url('frontend/images/grid8.jpg')}}">
										<figcaption>
											<div>
												<h4>Man standing on railroad near <span>plants</span></h4>
												<p>Jan.20.2020 </p>
											</div>

										</figcaption>
									</figure>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>
								<div class="mag-post-meta mt-3"><a href="#"><img src="{{url('frontend/images/admin.jpg')}}"
											class="img-fluid rounded-circle admin-img" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
						</div>
					</div>
					<!--//mag-hny-content-1-->
					<!--/mag-hny-content-3-->
					<div class="mag-hny-content mb-5">
						<h3 class="hny-title">Tech and <span>Gadgets</span></h3>
						<div class="maghny-grids-inf row">
							<div class="mag-post-thumb col-md-6">
								<a href="#"><img src="assets/images/grid9.jpg" class="img-fluid" alt=""></a>

							</div>
							<div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
								<a href="#" class="link-mag">
									<h4 class="mag-post-head">
										There are many variations that focuses on presenting</h4>
								</a>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"> <span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<p class="para my-3">Nulla quis lorem neque, mattis venenatis lectus. In interdum
									ullamcorper dolor eu
									mattis.Nulla quis lorem neque, mattis venenatis lectus. </p>
								<a href="#" class="read-more btn">Read More</a>

							</div>


						</div>
						<div class="maghny-grids-inf row my-5">
							<div class="mag-post-thumb col-md-6">
								<a href="#"><img src="assets/images/grid10.jpg " class="img-fluid" alt=""></a>

							</div>
							<div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
								<a href="#" class="link-mag">
									<h4 class="mag-post-head">
										There are many variations that focuses on presenting</h4>
								</a>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<p class="para my-3">Nulla quis lorem neque, mattis venenatis lectus. In interdum
									ullamcorper dolor eu
									mattis.Nulla quis lorem neque, mattis venenatis lectus. </p>
								<a href="#" class="read-more btn">Read More</a>

							</div>


						</div>
						<div class="maghny-grids-inf row">
							<div class="mag-post-thumb col-md-6">
								<a href="#"><img src="assets/images/grid5.jpg" class="img-fluid" alt=""></a>

							</div>
							<div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
								<a href="#" class="link-mag">
									<h4 class="mag-post-head">
										There are many variations that focuses on presenting</h4>
								</a>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<p class="para my-3">Nulla quis lorem neque, mattis venenatis lectus. In interdum
									ullamcorper dolor eu
									mattis.Nulla quis lorem neque, mattis venenatis lectus. </p>
								<a href="#" class="read-more btn">Read More</a>

							</div>


						</div>

					</div>
					<!--//mag-hny-content-3-->
					<!--/mag-left-grid-6-->
					<div class="mag-hny-content my-lg-5 mb-5">
						<h3 class="hny-title">Top <span>Categories</span></h3>
						<div class="fashny-grids-inf row">
							<div class="fashion-gd-1 col-lg-4 col-6">
								<div class="fas-gallery-grid">
									<a href="#">
										<div class="content">
											<div class="content-overlay"></div>
											<img src="assets/images/grid11.jpg" class="img-fluid" alt="">
											<div class="content-details fadeIn-bottom">
												<h4 class="content-title">Food</h4>

											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="fashion-gd-1 col-lg-4 col-6">
								<div class="fas-gallery-grid">
									<a href="#">
										<div class="content">
											<div class="content-overlay"></div>
											<img src="assets/images/grid12.jpg" class="img-fluid" alt="">
											<div class="content-details fadeIn-bottom">
												<h4 class="content-title">Fashion</h4>

											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="fashion-gd-1 col-lg-4 col-6">
								<div class="fas-gallery-grid">
									<a href="#">
										<div class="content">
											<div class="content-overlay"></div>
											<img src="assets/images/grid13.jpg" class="img-fluid" alt="">
											<div class="content-details fadeIn-bottom">
												<h4 class="content-title">Celebrities</h4>

											</div>
										</div>
									</a>
								</div>
							</div>

						</div>

					</div>
					<!--//mag-hny-content-6-->

					<!--/mag-hny-content-3-->
					<div class="mag-hny-content my-lg-5 mb-5">
						<h3 class="hny-title">Trendy <span>Fashion</span></h3>
						<div class="maghny-grids-inf row">
							<div class="mag-post-thumb col-md-6">
								<a href="#"><img src="assets/images/grid16.jpg" class="img-fluid" alt=""></a>

							</div>
							<div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
								<a href="#" class="link-mag">
									<h4 class="mag-post-head">
										There are many variations that focuses on presenting</h4>
								</a>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"> <span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<p class="para my-3">Nulla quis lorem neque, mattis venenatis lectus. In interdum
									ullamcorper dolor eu
									mattis.Nulla quis lorem neque, mattis venenatis lectus. </p>
								<a href="#" class="read-more btn">Read More</a>

							</div>


						</div>
						<div class="maghny-grids-inf row my-5">
							<div class="mag-post-thumb col-md-6">
								<a href="#"><img src="assets/images/grid17.jpg " class="img-fluid" alt=""></a>

							</div>
							<div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
								<a href="#" class="link-mag">
									<h4 class="mag-post-head">
										There are many variations that focuses on presenting</h4>
								</a>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<p class="para my-3">Nulla quis lorem neque, mattis venenatis lectus. In interdum
									ullamcorper dolor eu
									mattis.Nulla quis lorem neque, mattis venenatis lectus. </p>
								<a href="#" class="read-more btn">Read More</a>

							</div>


						</div>
						<div class="maghny-grids-inf row">
							<div class="mag-post-thumb col-md-6">
								<a href="#"><img src="assets/images/grid13.jpg" class="img-fluid" alt=""></a>

							</div>
							<div class="mag-post-fashion-details col-md-6 mt-md-0 mt-4">
								<a href="#" class="link-mag">
									<h4 class="mag-post-head">
										There are many variations that focuses on presenting</h4>
								</a>
								<div class="mag-post-meta mt-3"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
								<p class="para my-3">Nulla quis lorem neque, mattis venenatis lectus. In interdum
									ullamcorper dolor eu
									mattis.Nulla quis lorem neque, mattis venenatis lectus. </p>
								<a href="#" class="read-more btn">Read More</a>

							</div>


						</div>

					</div>
					<!--//mag-hny-content-3-->
					<!--//mag-left-grid-5-->
					<div class="mag-hny-content my-5">
						<h3 class="hny-title">Tasty <span>Food</span></h3>
						<!--/mag-left-grid-1-->
						<div class="maghny-grids-inf row">
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid mb-3">
									<a href="#"><img class="img-fluid" src="assets/images/grid14.jpg" alt=""></a>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid mb-3">
									<a href="#"><img class="img-fluid" src="assets/images/grid15.jpg" alt=""></a>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a><span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
						</div>
					</div>
					<!--//mag-left-grid-5-->
					<!--/social-->
					<div class="mag-hny-content my-5">
						<h3 class="hny-title">Stay <span>Connected</span></h3>
						<!--/social-media-->
						<div class="mag-small-post my-lg-3">
							<div class="social-media-icons row">
								<div class="grid-social-box col-lg-3 col-sm-6">
									<a href="#" class="sub-facebook"><span class="fa fa-facebook"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>

									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-6 ">
									<a href="#" class="sub-facebook twitter"><span class="fa fa-twitter"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-6 ">
									<a href="#" class="sub-facebook google"><span class="fa fa-google"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>
									</a>


								</div>
								<div class="grid-social-box col-lg-3 col-sm-6 ">
									<a href="#" class="sub-facebook dribble"><span class="fa fa-dribbble"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>
									</a>
								</div>
								<!--/social-media-->
							</div>
						</div>
					</div>
					<!--//social-->
					<!--/health-->
					<div class="mag-hny-content my-5">
						<h3 class="hny-title">Be <span>Health</span></h3>
						<!--/mag-left-grid-1-->
						<div class="maghny-grids-inf row">
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid mb-3">
									<a href="#"><img class="img-fluid" src="assets/images/grid18.jpg" alt=""></a>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
							<div class="maghny-gd-1 col-md-6">
								<div class="maghny-grid mb-3">
									<a href="#"><img class="img-fluid" src="assets/images/grid19.jpg" alt=""></a>
								</div>
								<h5><a href="#">
										There are many variations that focuses on presenting</a></h5>
								<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.</p>
								<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
											class="img-fluid rounded-circle admin-img admin-img1" alt=""></a><span
										class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name"> John
											Brain</a> </span>
									<span class="author-date">Jan 5, 2020</span>
								</div>
							</div>
						</div>
					</div>
					<!--//health-->
					<!--/mag-hny-content-4-->
					<div class="mag-hny-content my-lg-5">
						<h3 class="hny-title">We're on <span>Instagram</span></h3>
						<!--  Demos -->
						<div id="demos">
							<div class="owl-carousel owl-theme grid-col-4">
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="{{url('frontend/images/grid1.jpg')}}" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid2.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="{{url('frontend/images/grid3.jpg')}}" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid6.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid7.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid8.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid1.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid3.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
								<div class="item">
									<a href="#link">
										<div class="gallery-grid">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid2.jpg" class="image-two img-fluid">

											</div>
										</div>

									</a>
								</div>
							</div>
						</div>
					</div>
					<!--//mag-hny-content-4-->
				</div>

				<div class="mag-content-right-hny col-lg-4">
					<aside>
						<div class="side-bar-hny-recent mb-5">
							<h4 class="mag-side-title">Must <span>Read</span></h4>
							<div class="mag-small-post">
								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m1.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Group of women dancing on stage</a> </h4>

										<div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name">John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m2.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Photo of man wearing astronaut suit hanging near cameras</a>
										</h4>

										<div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name">John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m3.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">Pancake with chocolate syrup on ceramic plate</a> </h4>


										<div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name">John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-4">
										<a href="#"><img src="assets/images/m4.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-8">
										<h4 class="mag-post-title">
											<a href="#">White and pink petaled flowers on metal fence near
												concrete</a>
										</h4>


										<div class="mag-post-meta"><span class="meta-author"><span>By&nbsp;</span><a
													href="#" class="author-name">John Brain</a> </span>
											<span class="author-date">Jan 5, 2020</span>
										</div>
									</div>
								</div>



							</div>
						</div>
						<div class="side-bar-hny-recent mb-5">
							<h4 class="mag-side-title">Top <span>Categories</span></h4>
							<div class="mag-small-post">
								<div class="post-item-grid align-items-center row mb-4">
									<div class="mag-post-thumb col-3 pl-0">

										<a href="#"><img src="assets/images/m11.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate">
											<a href="#">Fashion</a> </h4>


									</div>
								</div>



								<div class="post-item-grid align-items-center row mb-4">
									<div class="mag-post-thumb col-3 pl-0">
										<a href="#"><img src="assets/images/m10.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details align-items-center col-9">
										<h4 class="mag-post-cate">
											<a href="#">Culture</a>
										</h4>

									</div>
								</div>



								<div class="post-item-grid align-items-center row mb-4">
									<div class="mag-post-thumb col-3 pl-0">

										<a href="#"><img src="assets/images/m12.jpg" class="img-fluid" alt=""></a>
									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate">
											<a href="#">LifeStyle</a>
										</h4>

									</div>
								</div>
								<div class="post-item-grid align-items-center row mb-4">
									<div class="mag-post-thumb col-3 pl-0">
										<a href="#"><img src="assets/images/m9.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate">
											<a href="#">Food</a>
										</h4>



									</div>
								</div>


								<div class="post-item-grid align-items-center row mb-4">
									<div class="mag-post-thumb col-3 pl-0">
										<a href="#"><img src="assets/images/m13.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate">
											<a href="#">Business</a>
										</h4>
									</div>
								</div>

							</div>
						</div>
						<div class="side-bar-hny-recent mb-5">
							<div class="mag-small-post">
								<div class="mag-add-post">
									<a href="#"><img src="assets/images/add.jpg" alt=""
											class="img-fluid"></a>
								</div>
							</div>
						</div>

						<div class="side-bar-hny-recent mb-5">
							<h4 class="mag-side-title">Latest <span>Videos</span></h4>
							<div class="mag-small-post">
								<div class="post-video-grid">
									<div class="video-content mb-3">
										<a href="#notify" class="play-button btn"><span class="fa fa-play"
												aria-hidden="true">

											</span></a>

										<!-- notify-popup-->
										<div id="notify" class="notify-pop-overlay">
											<div class="notify-popup">
												<h5>Watch Our Video</h5>
												<iframe src="https://player.vimeo.com/video/156953364" frameborder="0"
													allow="autoplay; fullscreen" allowfullscreen></iframe>
												<a class="close" href="#coming-s">&times;</a>
											</div>
										</div>
										<!-- //notify-popup -->
									</div>
									<h4 class="mag-post-title">
										<a href="#">A New Report Shows That Fashion Ads Are Still Overwhelmingly
											White
											Dresses</a> </h4>
								</div>
								<div class="post-video-grid mt-5 mb-lg-5">
									<div class="video-content video-content2 mb-3">
										<a href="#notify1" class="play-button btn"><span class="fa fa-play"
												aria-hidden="true">

											</span></a>

										<!-- notify-popup-->
										<div id="notify1" class="notify-pop-overlay">
											<div class="notify-popup">
												<h5>Watch Our Video</h5>
												<iframe src="https://player.vimeo.com/video/42638891" frameborder="0"
													allow="autoplay; fullscreen" allowfullscreen></iframe>
												<a class="close" href="#coming-s">&times;</a>
											</div>
										</div>
										<!-- //notify-popup -->
									</div>
									<h4 class="mag-post-title">
										<a href="#">Penguins on snow covered gound,Looking Awesome to see</a> </h4>
								</div>
							</div>
						</div>
						<div class="side-bar-hny-recent mb-5">
							<h4 class="mag-side-title">Popular <span>Posts</span></h4>
							<div class="mag-small-post">
								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">

										<h6 class="num-text">01</h6>
									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a>
										</h4>


									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">
										<h6 class="num-text">02</h6>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a>
										</h4>

									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">

										<h6 class="num-text">03</h6>
									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a>
										</h4>

									</div>
								</div>



								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">
										<h6 class="num-text">04</h6>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a>
										</h4>



									</div>
								</div>


								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">
										<h6 class="num-text">05</h6>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a>
										</h4>



									</div>
								</div>

								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">
										<h6 class="num-text">06</h6>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a>
										</h4>



									</div>
								</div>

								<div class="post-item-grid row mb-4">
									<div class="mag-post-thumb col-3">
										<h6 class="num-text">07</h6>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-title">
											<a href="#">There are many variations that focuses on presenting</a>
										</h4>



									</div>
								</div>

							</div>
						</div>
						<div class="side-bar-hny-recent mb-5">
							<h4 class="mag-side-title">Recent <span>Comments</span></h4>
							<div class="mag-small-post">
								<div class="post-item-grid row mb-3">
									<div class="mag-post-thumb-img col-3">
										<a href="#"><img src="assets/images/t4.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate mb-2">
											<a href="#">Anna Delpan</a> </h4>

										<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit.</p>
									</div>
								</div>



								<div class="post-item-grid row mb-3">
									<div class="mag-post-thumb-img col-3">
										<a href="#"><img src="assets/images/t1.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate mb-2">
											<a href="#"> Daniel Doe</a>
										</h4>
										<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit.</p>

									</div>
								</div>



								<div class="post-item-grid row mb-3">
									<div class="mag-post-thumb-img col-3">
										<a href="#"><img src="assets/images/t2.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate mb-2">
											<a href="#">Steve Smith</a> </h4>

										<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit.</p>

									</div>
								</div>



								<div class="post-item-grid row mb-3">
									<div class="mag-post-thumb-img col-3">
										<a href="#"><img src="assets/images/t3.jpg" class="img-fluid" alt=""></a>

									</div>
									<div class="mag-post-details col-9">
										<h4 class="mag-post-cate mb-2">
											<a href="#">John Smith</a>
										</h4>

										<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit.</p>

									</div>
								</div>



							</div>
						</div>
						<div class="side-bar-hny-recent mb-5">
							<div class="mag-small-post">
								<div class="mag-add-post">
									<a href="#"><img src="assets/images/add1.jpg" alt=""
											class="img-fluid"></a>
								</div>
							</div>
						</div>
						<div class="side-bar-hny-recent mb-5">
							<h4 class="mag-side-title">Don't <span>Miss</span></h4>
							<div class="mag-small-post dont-miss-grids-inf">
								<div class="maghny-gd-1">
									<div class="maghny-grid mb-3 dont-miss">
										<a href="#"><img class="img-fluid" src="assets/images/m5.jpg" alt=""></a>
									</div>
									<h5><a href="#">
											There are many variations that focuses on presenting</a></h5>
									<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.
									</p>
									<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
												class="img-fluid rounded-circle admin-img admin-img1" alt=""></a> <span
											class="meta-author"><span>By&nbsp;</span><a href="#"
												class="author-name">John
												Brain</a> </span>
										<span class="author-date">Jan 5, 2020</span>
									</div>
								</div>
								<div class="maghny-gd-1 my-lg-5">
									<div class="maghny-grid mb-3 dont-miss">
										<a href="#"><img class="img-fluid" src="assets/images/m6.jpg" alt=""></a>
									</div>
									<h5><a href="#">
											There are many variations that focuses on presenting</a></h5>
									<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.
									</p>
									<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
												class="img-fluid rounded-circle admin-img admin-img1" alt=""></a><span
											class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">
												John
												Brain</a> </span>
										<span class="author-date">Jan 5, 2020</span>
									</div>
								</div>
								<div class="maghny-gd-1">
									<div class="maghny-grid mb-3 dont-miss">
										<a href="#"><img class="img-fluid" src="assets/images/m7.jpg" alt=""></a>
									</div>
									<h5><a href="#">
											There are many variations that focuses on presenting</a></h5>
									<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.
									</p>
									<div class="mag-post-meta"><a href="#"><img src="assets/images/admin.jpg"
												class="img-fluid rounded-circle admin-img admin-img1" alt=""></a><span
											class="meta-author"><span>By&nbsp;</span><a href="#" class="author-name">
												John
												Brain</a> </span>
										<span class="author-date">Jan 5, 2020</span>
									</div>
								</div>

							</div>
						</div>
						<div class="side-bar-hny-recent mb-5">
							<div class="mag-small-post">
								<div class="mag-add-post">
									<a href="#"><img src="assets/images/add3.jpg" alt=""
											class="img-fluid"></a>
								</div>
							</div>
						</div>
					</aside>
				</div>
			</div>
			<!--/newsletter-->
			<div class="form-inner-newsletter py-lg-5">

				<div class="newsletter-infhny p-md-5 p-4">
					<div class="newsletter-inn-con p-lg-5">
						<p>WE LIKE TO SHARE LATEST NEWS OF WEBZINE</p>
						<h2>SUBSCRIBE NOW !</h2>

						<form action="#" method="post" class="newsletter-form mt-md-5">
							<div class="form-input">
								<input type="email" name="email" class="form-control"
									placeholder="Enter your email address" required="">
							</div>
							<div class="form-input mt-md-4 mt-3"><button class="btn">Subscribe</button></div>
						</form>
					</div>
				</div>
			</div>
			<!--//newsletter-->
		</div>
	</div>
	<!--//mag-content-->
	<!-- /slider -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/grids.owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 0,
				responsiveClass: true,
				autoplay: true,
				autoplayTimeout: 2000,
				autoplaySpeed: 1000,
				autoplayHoverPause: true,
				responsive: {
					0: {
						items: 1,
						nav: false
					},
					480: {
						items: 2,
						nav: true,
						margin: 20
					},
					667: {
						items: 3,
						nav: true,
						margin: 20
					},
					1000: {
						items: 5,
						nav: true,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- /slider -->
</section>

@endsection

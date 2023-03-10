@extends('frontend.layouts.main')
@section('main-container')
<!--w3l-banner-slider-main-->
<section class="w3l-banner-slider2-main">
	<div class="container-fluid">
			<div id="example2" class="slider-pro">
					<div class="sp-slides">
						<div class="sp-slide">
								<a href="#">
									<img class="sp-image" src="assets/images/grid13.jpg" class="img-fluid" alt="" 
									data-src="assets/images/grid13.jpg" 
									data-retina="assets/images/grid13.jpg"/>
							</a>
							<p class="sp-caption">Lorem ipsum dolor sit amet.</p>
						</div>
			
						<div class="sp-slide">
								<a href="#">
										<img class="sp-image" src="assets/images/grid10.jpg" class="img-fluid" alt="" 
										data-src="assets/images/grid10.jpg" 
										data-retina="assets/images/grid10.jpg"/>
								</a>
								<p class="sp-caption">Lorem ipsum dolor sit amet.</p>
						</div>
			
						<div class="sp-slide">
								<a href="#">
										<img class="sp-image" src="assets/images/grid11.jpg" class="img-fluid" alt="" 
										data-src="assets/images/grid11.jpg" 
										data-retina="assets/images/grid11.jpg"/>
								</a>
								<p class="sp-caption">Lorem ipsum dolor sit amet.</p>
						</div>
			
						<div class="sp-slide">
								<a href="#">
										<img class="sp-image" src="assets/images/grid5.jpg" class="img-fluid" alt="" 
										data-src="assets/images/grid5.jpg" 
										data-retina="assets/images/grid5.jpg"/>
								</a>
								<p class="sp-caption">Lorem ipsum dolor sit amet.</p>
						</div>
			
						<div class="sp-slide">
								<a href="#">
										<img class="sp-image" src="assets/images/grid16.jpg" class="img-fluid" alt="" 
										data-src="assets/images/grid16.jpg" 
										data-retina="assets/images/grid16.jpg"/>
								</a>
								<p class="sp-caption">Lorem ipsum dolor sit amet.</p>
						</div>
			
						<div class="sp-slide">
								<a href="#">
										<img class="sp-image" src="assets/images/grid18.jpg" class="img-fluid" alt="" 
										data-src="assets/images/grid18.jpg" 
										data-retina="assets/images/grid18.jpg"/>
								</a>
								<p class="sp-caption">Lorem ipsum dolor sit amet.</p>
						</div>
			
						<div class="sp-slide">
								<a href="#">
										<img class="sp-image" src="assets/images/grid4.jpg" class="img-fluid" alt="" 
										data-src="assets/images/grid4.jpg" 
										data-retina="assets/images/grid4.jpg"/>
								</a>
								<p class="sp-caption">Lorem ipsum dolor sit amet.</p>
						</div>
			
						<div class="sp-slide">
								<a href="#">
										<img class="sp-image" src="assets/images/grid12.jpg" class="img-fluid" alt="" 
										data-src="assets/images/grid12.jpg" 
										data-retina="assets/images/grid12.jpg"/>
								</a>
								<p class="sp-caption">Lorem ipsum dolor sit amet.</p>
						</div>
						<div class="sp-slide">
								<a href="#">
										<img class="sp-image" src="assets/images/grid5.jpg" class="img-fluid" alt="" 
										data-src="assets/images/grid5.jpg" 
										data-retina="assets/images/grid5.jpg"/>
								</a>
								<p class="sp-caption">Lorem ipsum dolor sit amet.</p>
						</div>
			
						<div class="sp-slide">
								<a href="#">
										<img class="sp-image" src="assets/images/grid16.jpg" class="img-fluid" alt="" 
										data-src="assets/images/grid16.jpg" 
										data-retina="assets/images/grid16.jpg"/>
								</a>
								<p class="sp-caption">Lorem ipsum dolor sit amet.</p>
						</div>
	
			

					</div>
				</div>
	</div>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/sliderPro.min.js"></script>
	<script type="text/javascript">
		$( document ).ready(function( $ ) {
			$( '#example2' ).sliderPro({
				width: '50%',
				height: 500,
				aspectRatio: 1.5,
				visibleSize: '100%',
				forceSize: 'fullWidth'
			});
	
			// instantiate fancybox when a link is clicked
			$( '#example2 .sp-image' ).parent( 'a' ).on( 'click', function( event ) {
				event.preventDefault();
	
				// check if the clicked link is also used in swiping the slider
				// by checking if the link has the 'sp-swiping' class attached.
				// if the slider is not being swiped, open the lightbox programmatically,
				// at the correct index
				if ( $( '#example2' ).hasClass( 'sp-swiping' ) === false ) {
					$.fancybox.open( $( '#example2 .sp-image' ).parent( 'a' ), { index: $( this ).parents( '.sp-slide' ).index() } );
				}
			});
		});
	</script>
</section>
<!-- //w3l-banner-slider-main -->
<section class="w3l-mag-main">
	<!--/mag-content-->
	<div class="mag-content-inf py-5">
		<div class="container">
			<div class="banner-bottom-sechny py-md-4">
				<h3 class="hny-title text-center">Recent <span>News</span></h3>
				<div class="ban-content-inf row py-lg-3">

					<div class="maghny-gd-1 col-md-6">
						<div class="maghny-grid">
							<figure class="effect-lily">
								<img class="img-fluid" src="assets/images/grid19.jpg">
								<figcaption>


								</figcaption>
							</figure>
						</div>
						<h5 class="top-title mb-3"><a href="#">Unique Pack of Magazine News for Your Website,There are
								many variations that focuses on presenting</a></h5>
						<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis
							lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis
							lorem neque</p>
						<div class="mag-post-meta mt-3"><span class="meta-author text-uppercase"><span>By&nbsp;</span><a
									href="#" class="author-name"> John
									Brain</a> </span>
							<span class="author-date">Jan 5, 2020</span>
						</div>
						<a href="blog-single" class="read-more btn mt-3">Read More</a>
					</div>
					<div class="maghny-gd-1 col-md-6">
						<div class="maghny-grid">
							<figure class="effect-lily">
								<img class="img-fluid" src="assets/images/grid14.jpg">
								<figcaption>


								</figcaption>
							</figure>
						</div>
						<h5 class="top-title mb-3"><a href="#">Unique Pack of Magazine News for Your Website,There are
								many variations that focuses on presenting</a></h5>
						<p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Duis feugiat tortor sed.Nulla quis
							lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.Nulla quis
							lorem neque</p>
						<div class="mag-post-meta mt-3"> <span
								class="meta-author text-uppercase"><span>By&nbsp;</span><a href="#" class="author-name">
									John
									Brain</a> </span>
							<span class="author-date">Jan 5, 2020</span>
						</div>
						<a href="blog-single" class="read-more btn mt-3">Read More</a>
					</div>
				</div>
			</div>
			<div class="blog-inner-grids py-md-4">
				<div class="mag-content-left-hny">
					<!--//mag-left-grid-1-->
					<div class="mag-hny-content mb-lg-5">
						<h3 class="hny-title">Great <span>lifestyle</span></h3>
						<!--/mag-left-grid-1-->
						<div class="maghny-grids-inf row">
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="assets/images/grid9.jpg" alt="">

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
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="assets/images/grid5.jpg">

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
							<div class="maghny-gd-1 col-lg-4 col-md-6">
								<div class="maghny-grid">
									<figure class="effect-lily">
										<img class="img-fluid" src="assets/images/grid12.jpg" alt="">

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

							<div class="maghny-gd-1 col-lg-4 col-md-6 my-lg-5">
									<div class="maghny-grid">
										<figure class="effect-lily">
											<img class="img-fluid" src="assets/images/grid17.jpg" alt="">
	
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

								<div class="maghny-gd-1 col-lg-4 col-md-6 my-lg-5">
										<div class="maghny-grid">
											<figure class="effect-lily">
												<img class="img-fluid" src="assets/images/grid14.jpg" alt="">
		
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
									<div class="maghny-gd-1 col-lg-4 col-md-6 my-lg-5">
											<div class="maghny-grid">
												<figure class="effect-lily">
													<img class="img-fluid" src="assets/images/grid18.jpg" alt="">
			
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
						</div>
					</div>
					<!--//mag-left-grid-2-->

					<!--/mag-left-grid-6-->
					<div class="mag-hny-content my-lg-5">
						<h3 class="hny-title">Top <span>Categories</span></h3>
						<div class="fashny-grids-inf row">
							<div class="fashion-gd-1 col-lg-3">
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
							<div class="fashion-gd-1 col-lg-3">
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
							<div class="fashion-gd-1 col-lg-3">
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
							<div class="fashion-gd-1 col-lg-3">
									<div class="fas-gallery-grid">
										<a href="#">
											<div class="content">
												<div class="content-overlay"></div>
												<img src="assets/images/grid19.jpg" class="img-fluid" alt="">
												<div class="content-details fadeIn-bottom">
													<h4 class="content-title">Health</h4>
	
												</div>
											</div>
										</a>
									</div>
								</div>
						</div>

					</div>
					<!--//mag-hny-content-6-->
					<!--/social-->
					<div class="mag-hny-content my-lg-5 pt-lg-5">
						<h3 class="hny-title">Stay <span>Connected</span></h3>
						<!--/social-media-->
						<div class="mag-small-post my-lg-3 my-4">
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
								<div class="grid-social-box col-lg-3 col-sm-6">
									<a href="#" class="sub-facebook twitter"><span class="fa fa-twitter"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>
									</a>
								</div>
								<div class="grid-social-box col-lg-3 col-sm-6">
									<a href="#" class="sub-facebook google"><span class="fa fa-google"
											aria-hidden="true"></span>
										<div class="soc-info">
											<span class="sub_social_info sub_social_info_counter">14,507</span>
											<span class="sub_social_info sub_social_info_name">Followers</span>
										</div>
									</a>


								</div>
								<div class="grid-social-box col-lg-3 col-sm-6">
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
				</div>
			</div>
			<!--/newsletter-->
			<div class="form-inner-newsletter py-lg-5">

				<div class="newsletter-infhny p-5 mt-lg-0 mt-5">
					<div class="newsletter-inn-con p-lg-5">
						<p>WE LIKE TO SHARE LATEST NEWS OF WEBZINE</p>
						<h2>SUBSCRIBE NOW !</h2>

						<form action="#" method="post" class="newsletter-form mt-md-5">
							<div class="form-input">
								<input type="email" name="email" class="form-control"
									placeholder="Enter your email address" required="">
							</div>
							<div class="form-input mt-4"><button class="btn">Subscribe</button></div>
						</form>
					</div>
				</div>
			</div>
			<!--//newsletter-->
		</div>
	</div>
	<!--//mag-content-->
</section>
@extends('frontend.layouts.main')
@section('main-container')
@extends('layouts.master')

@section('content')

	<!-- Slider -->

	<div id="demo" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ul class="carousel-indicators">
		<li data-target="#demo" data-slide-to="0" class="active"></li>
		<li data-target="#demo" data-slide-to="1"></li>
		<li data-target="#demo" data-slide-to="2"></li>
		<li data-target="#demo" data-slide-to="3"></li>
		<li data-target="#demo" data-slide-to="4"></li>
		<li data-target="#demo" data-slide-to="5"></li>
		<li data-target="#demo" data-slide-to="6"></li>
	</ul>
	
	<!-- The slideshow -->
	<div class="carousel-inner">
		<div class="carousel-item active">
		<!-- <img src="images/c1.jpeg" alt="Los Angeles" width="1100" height="500"> -->
			<div class="main_slider" style="background-image:url(images/slider2.png)">
				<div class="container fill_height">
					<div class="row align-items-center fill_height">
						<div class="col">
							<div class="main_slider_content">
								<h4><b>We Are Serving Telecommunication Device Testing <br> <br> With Internatonal Quality Standard</b></h4>
							</div>
							<div class="white_button shop_now_button"><a href="about">About Us</a></div>
							<div class="red_button regist_now_button"><a href="register">Register Now</a></div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="carousel-item">
		<!-- <img src="images/c2.jpeg" alt="Chicago" width="1100" height="500"> -->
			<div class="main_slider" style="background-image:url(images/c1.jpeg)"></div>
		</div>
		<div class="carousel-item">
		<!-- <img src="images/c3.jpeg" alt="New York" width="1100" height="500"> -->
			<div class="main_slider" style="background-image:url(images/c2.jpeg)"></div>
		</div>
		<div class="carousel-item">
		<!-- <img src="images/c3.jpeg" alt="New York" width="1100" height="500"> -->
			<div class="main_slider" style="background-image:url(images/c3.jpeg)"></div>
		</div>
		<div class="carousel-item">
		<!-- <img src="images/c3.jpeg" alt="New York" width="1100" height="500"> -->
			<div class="main_slider" style="background-image:url(images/c4.jpeg)"></div>
		</div>
		<div class="carousel-item">
		<!-- <img src="images/c3.jpeg" alt="New York" width="1100" height="500"> -->
			<div class="main_slider" style="background-image:url(images/c5.jpeg)"></div>
		</div>
		<div class="carousel-item">
		<!-- <img src="images/c3.jpeg" alt="New York" width="1100" height="500"> -->
			<div class="main_slider" style="background-image:url(images/c6.jpeg)"></div>
		</div>
	</div>
	
	<!-- Left and right controls -->
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
	</div>

	<!-- Article -->

	<div class="blogs">
		<div class="container">
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/1.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<span class="blog_meta">Testing Process</span>
							<h4 class="blog_title">Choose your type testing that suits your company needs.</h4>
							<a class="blog_more" href="process">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/2.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<span class="blog_meta">Buy STELL</span>
							<h4 class="blog_title">Click button bellow, and you'll find out how easy it is to buy STELL documents.</h4>
							<a class="blog_more" href="buy_stel">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our Partner -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Best Sellers</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

						<!-- Slide 1 -->

						<div class="owl-item product_slider_item">
							<div class="product_image">
								<div class="embed-responsive embed-responsive-21by9">
									<iframe 
										width="438" 
										height="250"         
										src="https://www.youtube.com/embed?listType=playlist&list=PLl3Z5rVQaSyXdmOjIJ2pKhBAIAEOno63C&index=0" 
										frameborder="0" 
										allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
										allowfullscreen="1"
										id="iframe_yt"
									></iframe>
								</div>
							</div>
						</div>
										

						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Our Partner</h2>
					</div>
				</div>
			</div>
			<div class="row banner_container">
				<div class="col-lg-3">
					<div class="blog_item">
						<div class="banner_background" style="background-image:url(images/p3.png)"></div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="banner_item">
						<div class="banner_background" style="background-image:url(images/p2.png)"></div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="banner_item">
						<div class="banner_background" style="background-image:url(images/p1.png)"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

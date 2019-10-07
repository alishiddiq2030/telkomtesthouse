@extends('layouts.master')

@section('content')

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(images/slider1.png)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h4>We Are Serving Telecommunication Device Testing With Internatonal Quality Standard</h4>
			<!-- 			<div class="red_button shop_now_button"><a href="#">About Us</a></div>
						<div class="red_button shop_now_button"><a href="#">Our Services</a></div> -->
					</div>
				</div>
			</div>
		</div>
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
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(images/2.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<span class="blog_meta">Buy STELL</span>
							<h4 class="blog_title">Click button bellow, and you'll find out how easy it is to buy STELL documents.</h4>
							<a class="blog_more" href="#">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our Partner -->

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

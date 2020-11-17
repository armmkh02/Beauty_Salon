<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>@yield('title')</title>
		<!-- Loading third party fonts -->
		<link href="{{ asset('them-forth/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('them-forth/fonts/novecento-font/novecento-font.css') }}" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ asset('them-forth/style.css') }}">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body class="homepage header-collapse">

		<div id="site-content">

			<header class="site-header">
				<div class="container">
					<a id="branding" href="{{ url('/them4')}}">
						<img src="{{ asset('them-forth/images/logo.png') }}" alt="Company name" class="logo">
						<div class="logo-copy">
							<h1 class="site-title">Company Name</h1>
							<small class="site-description">Slogan goes here</small>
						</div>
					</a> <!-- #branding -->


					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item @if(!Request::segment(2)) current-menu-item  @endif"><a href="{{ url('/them4')}}">Home</a></li>
							<li class="menu-item @if(Request::segment(2) == 'categories')  current-menu-item  @endif"><a href="{{ route('categories4') }}">Services</a></li>
							<li class="menu-item @if(Request::segment(2) == 'specialists') current-menu-item  @endif"><a href="{{ route('specialists4') }}">Specialists</a></li>
							<li class="menu-item @if(Request::segment(2) == 'about')       current-menu-item  @endif"><a href="{{ route('about4') }}">About Us</a></li>
							<li class="menu-item @if(Request::segment(2) == 'booking')     current-menu-item  @endif"><a href="{{ route('booking4') }}">Booking</a></li>
							<li class="menu-item @if(Request::segment(2) == 'contact')     current-menu-item  @endif"><a href="{{ route('contact4') }}">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>

			<div class="hero hero-slider">
				<ul class="slides">
					<li data-bg-image="{{ asset('them-forth/dummy/slider-1.jpg') }}">
						<div class="container">
							<h3 class="slider-subtitle">Your header goes here</h3>
							<h2 class="slider-title">Professional</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa molestiae necessitatibus possimus ducimus facere, error, nostrum. Quos sapiente ducimus maxime odio alias dolor consequuntur, maiores commodi exercitationem veniam. Id, ex?</p>
							<a href="#" class="button large">Read more</a>
						</div>
					</li>
					<li data-bg-image="dummy/slider-2.jpg">
						<div class="container">
							<h3 class="slider-subtitle">Your header goes here</h3>
							<h2 class="slider-title">Professional</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In maiores illo eligendi obcaecati reiciendis, vel perspiciatis aliquid esse architecto deleniti asperiores, laboriosam nemo rerum! Ipsam numquam delectus minus iure sit!</p>
							<a href="#" class="button large">Read more</a>
						</div>
					</li>
					<li data-bg-image="dummy/slider-3.jpg">
						<div class="container">
							<h3 class="slider-subtitle">Your header goes here</h3>
							<h2 class="slider-title">Professional</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam iure, alias error suscipit porro quidem minus, autem repellendus rerum labore corrupti! Quia quas, architecto, quis non pariatur quisquam nisi magnam.</p>
							<a href="#" class="button large">Read more</a>
						</div>
					</li>
				</ul>
            </div>

                @yield('content')

            <footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="widget contact-widget">
								<h3 class="widget-title">Contact</h3>
								<div class="contact-info">
									<address>
										<img src="{{ asset('them-forth/images/icon-map-small.png') }}" class="icon">
										<p><strong>Company name</strong> 563 Avenue Street, New York</p>
									</address>
									<a href="mailto:contact@companyname.com" class="mail"><img src="{{ asset('them-forth/images/icon-envelope-small.png') }}" class="icon">contact@companyname.com</a>
									<a href="tel:(500)942042259" class="phone"><img src="{{ asset('them-forth/images/icon-phone-small.png') }}" class="icon">(500)942042259</a>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Social Media</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident et praesentium </p>
								<div class="social-links">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident et praesentium </p>
								<form action="#" class="subscribe-form">
									<input type="email" placeholder="Enter our email...">
									<input type="submit" value="Sign up">
								</form>
							</div>
						</div>
					</div>

					<div class="colophon" style="color:white;">
					    	All rights reserved | This template is made with
                            <i class="ti-heart" aria-hidden="true"></i> by
                            <a href="http://amoriltd.co.uk/" target="_blank">Amori: LTD</a>
					</div>
				</div>
			</footer>
		</div>




		<script src="{{ asset('them-forth/js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('them-forth/js/plugins.js') }}"></script>
		<script src="{{ asset('them-forth/js/app.js') }}"></script>

	</body>

</html>

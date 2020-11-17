<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
	<link rel="icon" href="{{ asset('them-nine/img/Fevicon.png') }}" type="image/png">

  <link rel="stylesheet" href="{{ asset('them-nine/vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('them-nine/vendors/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('them-nine/vendors/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('them-nine/vendors/flat-icon/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('them-nine/vendors/nice-select/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('them-nine/vendors/Magnific-Popup/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('them-nine/vendors/OwlCarousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('them-nine/vendors/OwlCarousel/owl.carousel.min.css') }}">

  <link rel="stylesheet" href="{{ asset('them-nine/css/style.css') }}">
</head>
<body>
  <!-- ================ start header Area ================= -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{ url('/them9') }}"><img src="{{ asset('them-nine/img/logo.png') }}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item @if(!Request::segment(2)) active  @endif"><a class="nav-link" href="{{ url('/them9')}}">Home</a></li>
							<li class="nav-item @if(Request::segment(2) == 'categories')  active  @endif"><a class="nav-link" href="{{ route('categories9') }}">Services</a></li>
							<li class="nav-item @if(Request::segment(2) == 'specialists') active  @endif"><a class="nav-link" href="{{ route('specialists9') }}">Specialists</a></li>
							<li class="nav-item @if(Request::segment(2) == 'about')       active  @endif"><a class="nav-link" href="{{ route('about9') }}">About</a></li>
							<li class="nav-item @if(Request::segment(2) == 'contact')     active  @endif"><a class="nav-link" href="{{ route('contact9') }}">Contact</a></li>
							<li class="nav-item @if(Request::segment(2) == 'booking')     active  @endif"><a class="nav-link" href="{{ route('booking9') }}">Booking</a></li>
							<li class="nav-item @if(Request::segment(2) == 'contact')     active  @endif"><a class="nav-link" href="{{ route('contact9') }}">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
  <!-- ================ end header Area ================= -->

        @yield('content')

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Top Products</h4>
					<ul>
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Features</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">Guides</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Experts</a></li>
						<li><a href="#">Agencies</a></li>
					</ul>
				</div>
				<div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
					<h4>Newsletter</h4>
					<p>You can trust us. we only send promo offers,</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
						 method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" type="email">
							<button class="click-btn btn btn-default">subscribe</button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom row align-items-center text-center text-lg-left" style="color: white;">
				All rights reserved | This template is made with
                <i class="ti-heart" aria-hidden="true"></i> by
                <a href="http://amoriltd.co.uk/" target="_blank">Amori: LTD</a>
				<div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-dribbble"></i></a>
					<a href="#"><i class="fab fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->

  <script src="{{ asset('them-nine/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('them-nine/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('them-nine/vendors/OwlCarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('them-nine/vendors/sticky/jquery.sticky.js') }}"></script>
  <script src="{{ asset('them-nine/js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('them-nine/js/mail-script.js') }}"></script>
  <script src="{{ asset('them-nine/vendors/Magnific-Popup/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('them-nine/js/main.js') }}"></script>
</body>
</html>

<!doctype html>
<html lang="en">

  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('them-three/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('them-three/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('them-three/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('them-three/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('them-three/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('them-three/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('them-three/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('them-three/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('them-three/css/style.css') }}">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a  href="{{ url('/them3') }}">Barbers</a>
              </div>
            </div>

            <div class="col-9  text-right">


              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto" >
                  <li class="@if(!Request::segment(2)) active  @endif"><a style="color: gray !important;" href="{{ url('/them3')}}" class="nav-link">Home</a></li>
                  <li class=" @if(Request::segment(2) == 'categories')  active  @endif"><a style="color: gray !important;" href="{{ route('categories3') }}"   class="nav-link">Services</a></li>
                  <li class=" @if(Request::segment(2) == 'specialists') active  @endif"><a style="color: gray !important;" href="{{ route('specialists3') }}"  class="nav-link">Specialists</a></li>
                  <li class=" @if(Request::segment(2) == 'about')       active  @endif"><a style="color: gray !important;" href="{{ route('about3') }}"        class="nav-link">About Us</a></li>
                  <li class=" @if(Request::segment(2) == 'booking')     active  @endif"><a style="color: gray !important;" href="{{ route('booking3') }}"      class="nav-link">Booking</a></li>
                  <li class=" @if(Request::segment(2) == 'contact')     active  @endif"><a style="color: gray !important;" href="{{ route('contact3') }}"      class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>


          </div>
        </div>

      </header>

        @yield('content')

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <img src="images/img_1.jpg" alt="Image" class="img-fluid mb-5">
            <h2 class="footer-heading mb-3">About Us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-6 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
              </div>

            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5" style="color: white;">
                All rights reserved | This template is made with
                <i class="ti-heart" aria-hidden="true"></i> by
                <a href="http://amoriltd.co.uk/" target="_blank">Amori: LTD</a>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="{{ asset('them-three/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('them-three/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('them-three/js/popper.min.js') }}"></script>
    <script src="{{ asset('them-three/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('them-three/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('them-three/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('them-three/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('them-three/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('them-three/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('them-three/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('them-three/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('them-three/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('them-three/js/aos.js') }}"></script>
    <script src="{{ asset('them-three/js/main.js') }}"></script>

  </body>

</html>


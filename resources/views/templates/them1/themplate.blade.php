
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('them-one/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('them-one/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('them-one/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('them-one/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('them-one/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('them-one/css/style.css') }}">
  </head>
  <body>
    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-wrap">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-center">
                                <p class="mb-0 phone pl-md-2">
                                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a>
                                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
                                </p>
                            </div>
                            <div class="col-md-6 d-flex justify-content-md-end">
                                <div class="social-media">
                                <p class="mb-0 d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                                </p>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/them1')}}">Accounting</a>
        <form action="#" class="searchform order-sm-start order-lg-last">
      <div class="form-group d-flex">
        <input type="text" class="form-control pl-3" placeholder="Search">
        <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
      </div>
    </form>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav m-auto">
            <li class="nav-item @if(!Request::segment(2)) active  @endif "><a href="{{ url('/them1')}}" class="nav-link">Home</a></li>
            <li class="nav-item @if(Request::segment(2) == 'about')       active  @endif"><a href="{{ route('about1') }}" class="nav-link">About Us</a></li>
            <li class="nav-item @if(Request::segment(2) == 'categories')  active  @endif"><a href="{{ route('categories1') }}" class="nav-link">Services</a></li>
            <li class="nav-item @if(Request::segment(2) == 'specialists') active  @endif"><a href="{{ route('specialists1') }}" class="nav-link">Specialists</a></li>
            <li class="nav-item @if(Request::segment(2) == 'booking')     active  @endif"><a href="{{ route('booking1') }}" class="nav-link">Booking</a></li>
            <li class="nav-item @if(Request::segment(2) == 'contact')     active  @endif"><a href="{{ route('contact1') }}" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

      @yield('content')

<script src="{{ asset('them-one/js/jquery.min.js') }}"></script>
<script src="{{ asset('them-one/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('them-one/js/popper.min.js') }}"></script>
<script src="{{ asset('them-one/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('them-one/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('them-one/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('them-one/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('them-one/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('them-one/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('them-one/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('them-one/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('them-one/js/google-map.js') }}"></script>
<script src="{{ asset('them-one/js/main.js') }}"></script>

</body>
<footer class="footer">
    <div class="container-fluid px-lg-5">
        <div class="row">
            <div class="col-md-9 py-5">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">About us</h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10">
                                <div class="row">
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <h2 class="footer-heading">Services</h2>
                                        <ul class="list-unstyled">
                              <li><a href="#" class="py-1 d-block">Market Analysis</a></li>
                              <li><a href="#" class="py-1 d-block">Accounting Advisor</a></li>
                              <li><a href="#" class="py-1 d-block">General Consultancy</a></li>
                              <li><a href="#" class="py-1 d-block">Structured Assestment</a></li>
                            </ul>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <h2 class="footer-heading">Discover</h2>
                                        <ul class="list-unstyled">
                              <li><a href="#" class="py-1 d-block">About us</a></li>
                              <li><a href="#" class="py-1 d-block">Contract us</a></li>
                              <li><a href="#" class="py-1 d-block">Terms &amp; Conditions</a></li>
                              <li><a href="#" class="py-1 d-block">Policies</a></li>
                            </ul>
                                    </div>
                                    <div class="col-md-4 mb-md-0 mb-4">
                                        <h2 class="footer-heading">Resources</h2>
                                        <ul class="list-unstyled">
                              <li><a href="#" class="py-1 d-block">Security</a></li>
                              <li><a href="#" class="py-1 d-block">Global</a></li>
                              <li><a href="#" class="py-1 d-block">Charts</a></li>
                              <li><a href="#" class="py-1 d-block">Privacy</a></li>
                            </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-md-5">
                    <div class="col-md-12">
                            All rights reserved | This template is made with
                            <i class="ti-heart" aria-hidden="true"></i> by
                            <a href="http://amoriltd.co.uk/" target="_blank">Amori: LTD</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
                <h2 class="footer-heading">Free consultation</h2>
                <form action="#" class="form-consultation">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Your Name">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Your Email">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Subject">
      </div>
      <div class="form-group">
        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
      </div>
      <div class="form-group">
          <button type="submit" class="form-control submit px-3">Send A Message</button>
      </div>
    </form>
            </div>
        </div>
    </div>
</footer>



</html>


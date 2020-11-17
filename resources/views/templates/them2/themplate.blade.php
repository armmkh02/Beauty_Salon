<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="{{ asset('them-two/img/favicon.ico') }}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('them-two/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('them-two/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('them-two/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('them-two/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-bar-left">
                            <div class="text">
                                <h2>8:00 - 9:00</h2>
                                <p>Opening Hour Mon - Fri</p>
                            </div>
                            <div class="text">
                                <h2>+123 456 7890</h2>
                                <p>Call Us For Appointment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="{{ url('/them2')}}" class="navbar-brand">Barber <span>X</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{ url('/them2')}}" class="nav-item nav-link @if(!Request::segment(2)) active  @endif">Home</a>
                        <a href="{{ route('about2') }}" class="nav-item nav-link       @if(Request::segment(2) == 'about')       active  @endif">About Us</a>
                        <a href="{{ route('categories2') }}" class="nav-item nav-link  @if(Request::segment(2) == 'categories')  active  @endif">Services</a>
                        <a href="{{ route('specialists2') }}" class="nav-item nav-link @if(Request::segment(2) == 'specialists') active  @endif">Specialists</a>
                        <a href="{{ route('booking2') }}" class="nav-item nav-link     @if(Request::segment(2) == 'booking')     active  @endif">Booking</a>
                        <a href="{{ route('contact2') }}" class="nav-item nav-link     @if(Request::segment(2) == 'contact')     active  @endif">Contact</a>
                        {{-- <a href="portfolio.html" class="nav-item nav-link">Gallery</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Blog Page</a>
                                <a href="single.html" class="dropdown-item">Single Page</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
             @yield('content')
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Salon Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                    <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                    <p><i class="fa fa-envelope"></i>info@example.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="">Terms of use</a>
                                    <a href="">Privacy policy</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo dictum nec non quam. Tortor eu placerat rhoncus, lorem quam iaculis felis, sed lacus neque id eros.
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div style="margin-left:60%;">
                            All rights reserved | This template is made with
                            <i class="ti-heart" aria-hidden="true"></i> by
                            <a href="http://amoriltd.co.uk/" target="_blank">Amori: LTD</a>
            </div>
        </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('them-two/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('them-two/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('them-two/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('them-two/lib/lightbox/js/lightbox.min.js') }}"></script>

        <!-- Contact Javascript File -->
        <script src="{{ asset('them-two/mail/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{ asset('them-two/mail/contact.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('them-two/js/main.js') }}"></script>
    </body>
</html>

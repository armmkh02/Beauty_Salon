<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('them-six/img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('them-six/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('them-six/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('them-six/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('them-six/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('them-six/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('them-six/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('them-six/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('them-six/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('them-six/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('them-six/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('them-six/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <a href="{{ url('/them6')}}">
                                    <img src="{{ asset('them-six/img/logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="menu_wrap d-none d-lg-block">
                                <div class="menu_wrap_inner d-flex align-items-center justify-content-end">
                                    <div class="main-menu">
                                        <nav>
                                            <ul id="navigation">
                                                <li class="@if(!Request::segment(2)) active  @endif"><a href="{{ url('/them6')}}">home</a></li>
                                                <li class="@if(Request::segment(2) == 'categories')  active  @endif"><a href="{{ route('categories6') }}">Services</a></li>
                                                <li class="@if(Request::segment(2) == 'spcialists')  active  @endif"><a href="{{ route('specialists6') }}">Specialists</a></li>
                                                <li class="@if(Request::segment(2) == 'about')       active  @endif"><a href="{{ route('about6') }}">About Us</a></li>
                                                <li class="@if(Request::segment(2) == 'booking')     active  @endif"><a href="{{ route('booking6') }}">Booking</a></li>
                                                <li class="@if(Request::segment(2) == 'contact')     active  @endif"><a href="{{ route('contact6') }}">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="book_room">
                                        <div class="book_btn">
                                            <a class="popup-with-form" href="#test-form">Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
            @yield('content')


    <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-md-6 col-lg-5 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="{{ asset('them-six/img/logo.png') }}" alt="">
                                </a>
                            </div>
                            <p class="address_text">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. <br> Quis ipsum suspendisse.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Information
                            </h3>
                            <ul class="links">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Testimonial</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2  col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Smooth Shave </a></li>
                                <li><a href="#">Beard Triming</a></li>
                                <li><a href="#"> Haircut Styles</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2  col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Follow Us
                            </h3>
                            <ul class="links">
                                <li><a href="#">FaceBook</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#"> Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12" style="margin-left: 30%; color:white;">
                            All rights reserved | This template is made with
                            <i class="ti-heart" aria-hidden="true"></i> by
                            <a href="http://amoriltd.co.uk/" target="_blank">Amori: LTD</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->


    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
            <div class="popup_box ">
                    <div class="popup_inner">
                        <h3>Make an Appointment</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <input id="datepicker" placeholder="Date">
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <input id="timepicker" placeholder="time">
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <select class="form-select wide" id="default-select" class="">
                                        <option data-display="Choose services">Choose services 1</option>
                                        <option value="1">Choose services 2</option>
                                        <option value="2">Choose services 3</option>
                                        <option value="3">Choose services 4</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <select class="form-select wide" id="default-select" class="">
                                        <option data-display="Choose Barbers">Choose Barbers</option>
                                        <option value="1">Zaki</option>
                                        <option value="2">Ronky</option>
                                        <option value="3">kalu</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <input type="text" placeholder="Your name">
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <input type="text" placeholder="Phone no">
                                </div>
                                <div class="col-xl-12">
                                    <input type="email" placeholder="Your email">
                                </div>
                                <div class="col-xl-12">
                                    <button type="submit" class="boxed-btn3">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </form>
<!-- form itself end -->

    <!-- JS here -->
    <script src="{{ asset('them-six/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('them-six/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('them-six/js/popper.min.js') }}"></script>
    <script src="{{ asset('them-six/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('them-six/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('them-six/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('them-six/js/ajax-form.js') }}"></script>
    <script src="{{ asset('them-six/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('them-six/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('them-six/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('them-six/js/scrollIt.js') }}"></script>
    <script src="{{ asset('them-six/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('them-six/js/wow.min.js') }}"></script>
    <script src="{{ asset('them-six/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('them-six/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('them-six/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('them-six/js/plugins.js') }}"></script>
    <script src="{{ asset('them-six/js/gijgo.min.js') }}"></script>

    <!--contact js-->
    <script src="{{ asset('them-six/js/contact.js') }}"></script>
    <script src="{{ asset('them-six/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('them-six/js/jquery.form.js') }}"></script>
    <script src="{{ asset('them-six/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('them-six/js/mail-script.js') }}"></script>

    <script src="{{ asset('them-six/js/main.js') }}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon"       href="{{ asset('them-seven/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('them-seven/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('them-seven/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('them-seven/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('them-seven/css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('them-seven/css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('them-seven/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('them-seven/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('them-seven/css/gijgo.min.css') }}">
    <link rel="stylesheet" href="{{ asset('them-seven/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('them-seven/css/all.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('them-seven/css/style.css') }}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ url('/them7')}}"> <img src="{{ asset('them-seven/img/logo.png') }}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/them7')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('categories7') }}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('specialists7') }}">specialists</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about7') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('booking7') }}">Booking</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contact7') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
            @yield('content')
    <!-- blog_part part end-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-sm-6 col-lg-4">
                    <div class="single-footer-widget footer_1">
                        <h4>About Us</h4>
                        <p>Do you want to be even more successful? Learn to love learning and growth.
                            The more effort you put into improving your skills, the bigger the payoff you
                             will get. Realize that things </p>
                        <p class="mt-3" >The more effort you put into improving your skills, the bigger the stil now</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <span class="ti-home"></span>
                            <h5>Los angeles, United States</h5>
                            <p>659, Rocky beach bullevard, santa monica, Rocky beach, USA.</p>
                        </div>
                        <div class="contact_info">
                            <span class="ti-headphone-alt"></span>
                            <h5>+44 6532 986 652</h5>
                            <p>Mon to Fri 9am to 6 pm.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-sm-8 col-lg-4">
                    <div class="single-footer-widget footer_3">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends The more effort you put into improving your skills, the bigger the payoff you will get realize that things.</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="btn btn-default text-uppercase"><i class="ti-angle-right"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center" style="color: white;">
                            All rights reserved | This template is made with
                            <i class="ti-heart" aria-hidden="true"></i> by
                            <a href="http://amoriltd.co.uk/" target="_blank">Amori: LTD</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="{{ asset('them-seven/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('them-seven/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('them-seven/js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('them-seven/js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('them-seven/js/swiper.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('them-seven/js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('them-seven/js/owl.carousel.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('them-seven/js/slick.min.js') }}"></script>
    <script src="{{ asset('them-seven/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('them-seven/js/jquery.nice-select.min.js') }}"></script>
    <!-- contact js -->
    <script src="{{ asset('them-seven/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('them-seven/js/jquery.form.js') }}"></script>
    <script src="{{ asset('them-seven/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('them-seven/js/mail-script.js') }}"></script>
    <script src="{{ asset('them-seven/js/contact.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('them-seven/js/custom.js') }}"></script>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('front/assets/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">

</head>
<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="/"> <img src="{{ asset('front/assets/img/logo.png') }}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    {{-- @if (Auth::user()) --}}
                    {{-- <a class="nav-link" style="color:#907474;" href="{{ route('index') }}"> --}}
                       {{-- <h5> HELLO: {{ Auth::user()->name }} </h5> --}}
                    {{-- </a> --}}
                    {{-- @endif --}}

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">

                            <li class="nav-item active">
                                <a class="nav-link" style="color:#907474;" href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#907474;" href="{{ route('templates') }}">Templates</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#907474;" href="{{ route('pricing') }}">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:#907474;" href="{{ route('about-us') }}">About-Us</a>
                            </li>
                            <li class="d-none d-lg-block">
                                <a class="btn_1" href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            @if (Auth::user())
                                <li class="d-none d-lg-block">
                                    <form action="{{ route('profile' , Auth::user()->id) }}" method="get">
                                        @csrf
                                            <input type="submit" class="btn_1" name="logout" value="Profile">
                                    </form>
                                </li>
                                <li class="d-none d-lg-block">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                            <input type="submit" class="btn_1" name="logout" value="LogOut">
                                    </form>
                                </li>
                            @endif
                            @if (!Auth::user())
                                <li class="d-none d-lg-block">
                                    <a href="{{ route('login-register') }}" class="btn_1" name="login">Register/Login</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer class="footer-area" style="max-height: 40px;">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12" >
                        <p  class="footer-text m-0" >
                            <span  style="margin-left: 10px;">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </span>
                        <span style="margin-left: 170px;">
                            All rights reserved | This template is made with
                            <i class="ti-heart" aria-hidden="true"></i> by
                            <a href="http://amoriltd.co.uk/" target="_blank">Amori: LTD</a>
                        </span>
                        <span style="margin-left: 170px;">
                            <span> Phone :</span> +2 36 265 (8060)
                            <span> Email : </span>info@colorlib.com
                        </span>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->
<script src="{{ asset('front/assets/js/jquery-1.12.1.min.js') }}"></script>
<!-- popper js -->
<script src="{{ asset('front/assets/js/popper.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
<!-- easing js -->
<script src="{{ asset('front/assets/js/jquery.magnific-popup.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('front/assets/js/swiper.min.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('front/assets/js/masonry.pkgd.js') }}"></script>
<!-- particles js -->
<script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
{{-- <script src="{{ asset('front/assets/js/jquery.nice-select.min.js') }}"></script> --}}
<!-- swiper js -->
<script src="{{ asset('front/assets/js/slick.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('front/assets/js/waypoints.min.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('front/assets/js/custom.js') }}"></script>


</html>

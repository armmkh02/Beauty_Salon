<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->

<!DOCTYPE html>
<html class="no-js" prefix="og: http://ogp.me/ns#"  lang="en-IN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('title')</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description" content="Salon Bootstrap Themes & Templates Salon bootstrap themes and templates will help you create an amazing website for your beauty salon of any kind in no time." />
        <link href="img/beauty-salon_logo_96dp.png" rel="apple-touch-icon" sizes="96x96">
        <link href="img/beauty-salon_logo_96dp.png" rel="icon" sizes="96x96" type="image/png">
        <meta content="img/beauty-salon_logo_96dp.png" name="msapplication-TileImage">

        <meta property="og:url" content="https://www.boostraptheme.com/demo/index.html" />
        <meta property="og:title" content="Beauty and Salon - Free Bootstrap 4 Template | Boostraptheme" />
        <meta property="og:locale" content="en_IN" />
        <meta property="og:site_name" content="Boostraptheme" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="BoostrapTheme" />
        <meta name="twitter:creator" content="BoostrapTheme" />

		<link href="https://fonts.googleapis.com/css?family=Lobster|Roboto:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('them-ten/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('them-ten/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('them-ten/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('them-ten/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('them-ten/css/app.css') }}">

        <script src="{{ asset('them-ten/js/jquery.min.js') }}"></script>
        <script>
            $(window).on('load', function(){ $(".loader").fadeOut(2000); });
            $(function () {
                new WOW().init();
            });
        </script>

    </head>

    <body>

        {{-- <div class="loader"></div> --}}
        <!-- NAVIGATION
            =================-->
            <div class="topmenu">
              <div class="container">
                <div class="row"  id="page-top">
                  <div class="col-md-6 col-sm-6 phone">
                        <div><i class="fa fa-phone"></i> Call Now: (91) 999 9999 99</div>
                  </div>
                  <div class="col-md-6 col-sm-6 address">
                        <div><i class="fa fa-map-marker"></i> Dros Began, India 222312</div>
                  </div>
                </div>
              </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light" id="mainNav" data-toggle="affix">
              <div class="container-fluid">
              	<a class="navbar-brand js-scroll-trigger" href="{{ url('/them10') }}"><img src="{{ asset('them-ten/img/logo.png') }}" style="max-height: 60px;" alt="" class="img-fluid"></a>
                <button class="navbar-toggler navbar-toggler-center  ml-auto py-3 my-2 " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Menu
                  <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav text-uppercase ml-auto">
                  	<li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="{{ url('/them10')}}">Home</a>
                    </li>
                  	<li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="{{ route('categories10') }}">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="{{ route('specialists10') }}">Specialists</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="{{ route('about10') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="{{ route('booking10') }}">Booking</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="{{ route('contact10') }}">Contact</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

        <!-- HEADER
            =================-->
            <header id="home">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active" >
                        <div class="home-content-box">
                            <div class="home-content-box-inner text-center">
                                <div class="home-heading animated fadeInDown" >
                                    <h3>Fascinating than any <br> fashion salon</h3>
                                </div>
                                <div class="home-btn wow fadeInUp" data-wow-delay="0.3s" >
                                    <a class=" js-scroll-trigger" href="#contact" role="button" title="View Our Work"><button class="btn btn-lg btn-general btn-greenish ">Book Now</button></a>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item" >
                        <div class="home-content-box">
                            <div class="home-content-box-inner text-center">
                                <div class="home-heading animated fadeInDown" >
                                	<h3>your hair style <br> our passionate team </h3>
                                </div>
                                <div class="home-btn fadeInDown">
                                    <a class=" js-scroll-trigger" href="#contact" role="button" title="View Our Work"><button class="btn btn-lg btn-general btn-greenish ">Book Now</button></a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </header>


        <!-- SERVICES
            =================-->
                @yield('content')

              <!-- FOOTER
                   =================-->
                <footer>
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-5">
                        <span class="copyright">Copyright &copy; 2018 Design By <a href="https://boostraptheme.com/">Boostraptheme</a></span>
                      </div>
                      <div class="col-md-3">
                        <ul class="list-inline social-buttons">
                          <li class="list-inline-item">
                            <a href="#">
                              <i class="fa fa-twitter"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#">
                              <i class="fa fa-facebook"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#">
                              <i class="fa fa-linkedin"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                          <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </footer>

                <a href="#page-top" id="back-to-top" class="btn btn-sm btn-green btn-back-to-top  js-scroll-trigger hidden-sm hidden-xs" title="home" role="button">
                    <i class="fa fa-angle-double-up"></i>
                </a>

            </section>

        <script src="{{ asset('them-ten/js/popper.min.js') }}"></script>
        <script src="{{ asset('them-ten/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('them-ten/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('them-ten/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('them-ten/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('them-ten/js/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{ asset('them-ten/js/contact_me.min.js') }}"></script>
        <script src="{{ asset('them-ten/js/wow.min.js') }}"></script>
        <script src="{{ asset('them-ten/js/app.js') }}"></script>
        <!--Start of Tawk.to Script-->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5a6d77fc4b401e45400c7419/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
        <!--End of Tawk.to Script-->
    </body>
</html>

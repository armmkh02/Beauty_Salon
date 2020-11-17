@extends('templates.them10.themplate')

@section('title', 'Beauty 10')


@section('content')

<section id="services" class="services">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center mb-5">
                <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                    <h1>Services</h1>
                    <div class="bord-bot"></div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="service-cont wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{ asset('them-ten/img/service/service-1.jpg') }}" alt="" class="img-fluid">
                    <div class="service-desc">Haircut <p>₹100</p></div>

                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-cont wow fadeInUp" data-wow-delay="0.6s">
                    <img src="{{ asset('them-ten/img/service/service-2.jpg') }}" alt="" class="img-fluid">
                    <div class="service-desc">Treaming <p>₹120</p></div>

                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-cont wow fadeInUp" data-wow-delay="0.9s">
                    <img src="{{ asset('them-ten/img/service/service-3.jpg') }}" alt="" class="img-fluid">
                    <div class="service-desc">Shaving <p>₹80</p></div>

                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-cont wow fadeInUp" data-wow-delay="1.2s">
                    <img src="{{ asset('them-ten/img/service/service-4.jpg') }}" alt="" class="img-fluid">
                    <div class="service-desc">Coloring <p>₹70</p></div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT
=================-->
<section id="about" class="about">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center ">
                <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                    <h1>About Us</h1>
                    <div class="bord-bot"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 my-auto">
                <div class="body-cont mb-5 wow fadeInUp" data-wow-delay="0.6s">
                    <h3>Good Hair style Good Selfie</h3>
                    <div class="bord-bottom"></div>
                    <p>Running a salon successfully might not even seem very much managerial, but do not be fooled. Making up a winning salon simply means tying all the various aspects of luxury, style and beauty. Interior design is one of the factors that really encompass not just the layout of the salon but also the furniture of the salon as well.</p>
                    <a href="#contact" class="img-fluid js-scroll-trigger"><button class="btn btn-general btn-white">ENQUIRIES</button></a>
                </div>
            </div>
            <div class="col-md-8 m-auto text-center">
                <div class="body-img-1 wow fadeInUp" data-wow-delay="0.9s">
                    <img src="{{ asset('them-ten/img/treamer-small.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PERFECT STYLE
=================-->
<section class="perfect-style" id="perfect-style">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-auto">
                <div class="perfect-style-desc text-center  wow fadeInLeft" data-wow-delay="0.3s">
                    <h3>Perfect Style</h3>
                    <p>Its professional salon really offers a very large number of various different kinds of treatments and each and every treatment come with corresponding furniture of the salon. all, products and treatments are really important aspects of the salon experience. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM
=================-->
<section id="team" class="team pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="our-team wow fadeInUp" data-wow-delay="0.3s">
                    <div class="pic">
                        <img src="{{ asset('them-ten/img/team/team-1.jpg') }}">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Taneswar khan</h3>
                        <small class="post">Founder</small>
                    </div>
                    <div class="team-layer">
                        <a href="#">Taneswar khan</a>
                        <span class="post">Founder</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="our-team wow fadeInUp" data-wow-delay="0.6s">
                    <div class="pic">
                        <img src="{{ asset('them-ten/img/team/team-2.jpg') }}">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">krish Modi</h3>
                        <small class="post">CEO &amp; Cofounder</small>
                    </div>
                    <div class="team-layer">
                        <a href="#">krish Modi</a>
                        <span class="post">CEO &amp; Cofounder</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="our-team wow fadeInUp" data-wow-delay="0.9s">
                    <div class="pic">
                        <img src="{{ asset('them-ten/img/team/team-3.jpg') }}">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Trisca Ben</h3>
                        <small class="post">Finances</small>
                    </div>
                    <div class="team-layer">
                        <a href="#">Trisca Ben</a>
                        <span class="post">Finances</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PORTFOLIO
=================-->
<section id="portfolio" class="portfolio pb-0 pt-5">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-12 text-center mb-3">
                <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                    <h1>Our Customer Style</h1>
                    <div class="bord-bot"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 p-0">
                <div class="port-cont">
                    <a href="img/portfolio/portfolio-1.jpg" title="Salon Style">
                        <img src="{{ asset('them-ten/img/portfolio/portfolio-1.jpg') }}" alt="Salon Style" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 p-0">
                <div class="port-cont">
                    <a href="img/portfolio/portfolio-2.jpg" title="Salon Style">
                        <img src="{{ asset('them-ten/img/portfolio/portfolio-2.jpg') }}" alt="Salon Style" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 p-0">
                <div class="port-cont">
                    <a href="img/portfolio/portfolio-3.jpg" title="Salon Style">
                        <img src="{{ asset('them-ten/img/portfolio/portfolio-3.jpg') }}" alt="Salon Style" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 p-0">
                <div class="port-cont">
                    <a href="img/portfolio/portfolio-4.jpg" title="Salon Style">
                        <img src="{{ asset('them-ten/img/portfolio/portfolio-4.jpg') }}" alt="Salon Style" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 p-0">
                <div class="port-cont">
                    <a href="img/portfolio/portfolio-8.jpg" title="Salon Style">
                        <img src="{{ asset('them-ten/img/portfolio/portfolio-8.jpg') }}" alt="Salon Style" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 p-0">
                <div class="port-cont">
                    <a href="img/portfolio/portfolio-6.jpg" title="Salon Style">
                        <img src="{{ asset('them-ten/img/portfolio/portfolio-6.jpg') }}" alt="Salon Style" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 p-0">
                <div class="port-cont">
                    <a href="img/portfolio/portfolio-7.jpg" title="Salon Style">
                        <img src="{{ asset('them-ten/img/portfolio/portfolio-7.jpg') }}" alt="Salon Style" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 p-0">
                <div class="port-cont">
                    <a href="img/portfolio/portfolio-5.jpg" title="Salon Style">
                        <img src="{{ asset('them-ten/img/portfolio/portfolio-5.jpg') }}" alt="Salon Style" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS
=================-->
<section id="testimonials" class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel owl-theme">
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{ asset('them-ten/img/client/client-1.jpg') }}">
                        </div>
                        <p class="description">
                            If you are going to have a successful beauty salon, then you must have beauty salon equipment. Although there are plenty of other things that go into the making of a respectable and popular salon like competitive or affordable rates.
                        </p>
                        <h3 class="title">Rahul Singh</h3>
                        <small class="post">- india</small>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{ asset('them-ten/img/client/client-2.jpg') }}">
                        </div>
                        <p class="description">
                            style of a salon by the kind of furniture that it makes use of. Hence it is important to select the right kind of salon furniture and place it appropriately so that you are able to build an image that you are a fashionable stylist in the minds.
                        </p>
                        <h3 class="title">Bhuvan Shah</h3>
                        <small class="post">- india</small>
                    </div>
                    <div class="testimonial">
                        <div class="pic">
                            <img src="{{ asset('them-ten/img/client/client-3.jpg') }}">
                        </div>
                        <p class="description">
                            salon stock taking a crucial task for each and every owner. It is very well known by each and every person that the beauty products are very expensive and that is the reason why the salon owners know that they will get the best deal done when they go online.
                        </p>
                        <h3 class="title">Pranav Mishra</h3>
                        <small class="post">- India</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

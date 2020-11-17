@extends('templates.them9.themplate')

@section('title', 'Beauty 9')


@section('content')

<main class="site-main">

    <!-- ================ start hero banner Area ================= -->
    <section class="hero-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="hero-banner__img">
              <img class="img-fluid" src="{{ asset('them-nine/img/banner/hero-banner.png') }}" alt="">
            </div>
          </div>
          <div class="col-md-6 pl-xl-4">
            <div class="hero-banner__content">
              <h1>We Specialize In All Phase Of hair</h1>
              <p>His itself may also face is creepeth fifth over dominion whose a Bring there created greater day multipl. His itself may also face is creep fifth over dominion whose no analyze market</p>
              <button class="button button-hero">Reservation</button>
              <a class="button button--transparent hero-banner__video" href="http://www.youtube.com/watch?v=0O2aH4XLbto">Intro Video</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end hero banner Area ================= -->


    <!-- ================ start about section ================= -->
    <section class="section-margin about-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 mb-5 mb-lg-0">
            <div class="about__content">
              <div class="section-intro">
                <h4 class="section-intro__title">About Us</h4>
                <h2 class="section-intro__subtitle">We Are Artist, Hair Is My Canvas</h2>
              </div>
              <p>You will tree bearing stars moving dry our under evening there one  won't fruitful ling on appear. Their Above sixth creature hath land ehold green et can midst you will bearing stars moving dry our under evening there in won't fruit whose void  le appear their above sixth creatur stars moving dry our under</p>
              <a class="button" href="#">Learn More</a>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-2">
            <div class="about__img">
              <img class="img-fluid" src="{{ asset('them-nine/img/home/barber-frame.png') }}" alt="">
              <img src="{{ asset('them-nine/img/home/barber-work.png') }}" alt="" class="about__img--small img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end about section ================= -->


    <!-- ================ start feature section ================= -->
    <section class="section-margin--large">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Advance Feature</h4>
          <h2 class="section-intro__subtitle">Our Strength Is Your <span class="d-block">Smart beauty</span></h2>
        </div>

        <div class="row gutters-48">
          <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
            <div class="card text-center card-feature border-style">
              <div class="card-feature__icon"><i class="flaticon-barber-chair"></i></div>
              <h3 class="card-feature__title">Best Place</h3>
              <p>Moveth land fish also replenish that gathering dry whose called gathering image under rule whales two was first</p>
            </div>
          </div>

          <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
            <div class="card text-center card-feature border-style">
              <div class="card-feature__icon"><i class="flaticon-cut"></i></div>
              <h3 class="card-feature__title">Best Equipment</h3>
              <p>Moveth land fish also replenish that gathering dry whose called gathering image under rule whales two was first</p>
            </div>
          </div>

          <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
            <div class="card text-center card-feature border-style">
              <div class="card-feature__icon"><i class="flaticon-mirror"></i></div>
              <h3 class="card-feature__title">Modern Style</h3>
              <p>Moveth land fish also replenish that gathering dry whose called gathering image under rule whales two was first</p>
            </div>
          </div>

          <div class="col-md-6 col-xl-3 mb-5 mb-xl-0">
            <div class="card text-center card-feature border-style">
              <div class="card-feature__icon"><i class="flaticon-barbershop"></i></div>
              <h3 class="card-feature__title">Expert Staff</h3>
              <p>Moveth land fish also replenish that gathering dry whose called gathering image under rule whales two was first</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ end feature section ================= -->


    <!-- ================ video section start ================= -->
    <section class="video-area section-margin--large">
      <div class="container">
        <div class="row justify-content-center align-items-center flex-column text-center">
          <h3>View Our Work</h3>
          <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=vParh5wE-tM">
            <img src="{{ asset('them-nine/img/home/play-icon.png') }}" alt="">
          </a>
          <p>05:35</p>
        </div>
      </div>
    </section>
    <!-- ================ video section end ================= -->

    <!-- ================ service section start ================= -->
    <section class="section-margin--large">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Our Services</h4>
          <h2 class="section-intro__subtitle">Our Strength Is Your <span class="d-block">Smart beauty</span></h2>
        </div>
        <div class="row gutters-48 card-service-wrapper">
          <div class="col-lg-4">
            <div class="card text-center card-service border-style">
              <div class="card-service__icon"><i class="flaticon-cut"></i></div>
              <h3 class="card-service__title">Stylish Hair Cut</h3>
              <p>Show wherein form yielding whala gathered wherein moved. Behold may yod winged created that Won't theya are not  second god give best </p>
              <div>
                <a class="button button-service" href="#">Book Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card text-center card-service border-style">
              <div class="card-service__icon"><i class="flaticon-wellness"></i></div>
              <h3 class="card-service__title">Cut & Hair Style</h3>
              <p>Show wherein form yielding whala gathered wherein moved. Behold may yod winged created that Won't theya are not  second god give best </p>
              <div>
                <a class="button button-service" href="#">Book Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card text-center card-service border-style">
              <div class="card-service__icon"><i class="flaticon-shower"></i></div>
              <h3 class="card-service__title">Color & Hair Wash</h3>
              <p>Show wherein form yielding whala gathered wherein moved. Behold may yod winged created that Won't theya are not  second god give best </p>
              <div>
                <a class="button button-service" href="#">Book Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ service section end ================= -->

    <!-- ================ team section start ================= -->
    <section class="section-padding--large bg-soapstone">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Our Team</h4>
          <h2 class="section-intro__subtitle">Experience Staff Change <span class="d-block">Your Look</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card card-team">
              <div class="card-team__img">
                <img class="card-img rounded-0" src="{{ asset('them-nine/img/team/team1.png') }}" alt="">
              </div>
              <div class="card-team__position">
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="card-team__bio">
                    <h4><a href="#">Daniel Mateno</a></h4>
                    <p>Hair Specialist</p>
                  </div>
                  <ul class="card-team__social">
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card card-team">
              <div class="card-team__img">
                <img class="card-img rounded-0" src="{{ asset('them-nine/img/team/team2.png') }}" alt="">
              </div>
              <div class="card-team__position">
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="card-team__bio">
                    <h4><a href="#">Julian Parsian</a></h4>
                    <p>Hair Specialist</p>
                  </div>
                  <ul class="card-team__social">
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card card-team">
              <div class="card-team__img">
                <img class="card-img rounded-0" src="{{ asset('them-nine/img/team/team3.png') }}" alt="">
              </div>
              <div class="card-team__position">
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="card-team__bio">
                    <h4><a href="#">Julian Parsian</a></h4>
                    <p>Hair Specialist</p>
                  </div>
                  <ul class="card-team__social">
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ team section end ================= -->

    <!-- ================ pricing section start ================= -->
    <section class="section-margin--large pricing-relative">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Pricing Plan</h4>
          <h2 class="section-intro__subtitle">Choose Your Favorite <span class="d-block">Package</span></h2>
        </div>
        <div class="row gutters-48">
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <div class="card text-center card-pricing border-style">
              <div class="card-pricing__header">
                <h3>Basic Hair Cut</h3>
                <p>Standard Package</p>
              </div>
              <div class="card-pricing__price">
                <h2>$79.00</h2>
              </div>
              <ul class="card-pricing__list">
                <li>Basic Hair Cut</li>
                <li>Basic Shave</li>
                <li>Basic Head Wash</li>
                <li>Basic Body Message</li>
                <li>Basic Snacks</li>
              </ul>
              <div class="mb-5">
                <a class="button button-pricing" href="#">Book Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <div class="card text-center card-pricing border-style">
              <div class="card-pricing__header">
                <h3>Standard Hair Cut</h3>
                <p>Standard Package</p>
              </div>
              <div class="card-pricing__price">
                <h2>$89.00</h2>
              </div>
              <ul class="card-pricing__list">
                <li>Basic Hair Cut</li>
                <li>Basic Shave</li>
                <li>Basic Head Wash</li>
                <li>Basic Body Message</li>
                <li>Basic Snacks</li>
              </ul>
              <div class="mb-5">
                <a class="button button-pricing" href="#">Book Now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
            <div class="card text-center card-pricing border-style">
              <div class="card-pricing__header">
                <h3>Ultimate Hair Cut</h3>
                <p>Standard Package</p>
              </div>
              <div class="card-pricing__price">
                <h2>$99.00</h2>
              </div>
              <ul class="card-pricing__list">
                <li>Basic Hair Cut</li>
                <li>Basic Shave</li>
                <li>Basic Head Wash</li>
                <li>Basic Body Message</li>
                <li>Basic Snacks</li>
              </ul>
              <div class="mb-5">
                <a class="button button-pricing" href="#">Book Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ pricing section end ================= -->


    <!-- ================ testimonial section start ================= -->
    <section class="testimonial testimonial-position">
      <div class="container">
        <div class="testi_slider owl-carousel owl-theme">
          <div class="item">
            <div class="testi_item">
              <img src="{{ asset('them-nine/img/home/testimonial1.png') }}" alt="">
              <div class="testi_item_content">
                <p>
                  <i class="fas fa-quote-left"></i>
                  At quis et morbi. Dolor at augue convallis luctus mi arcu urna ultricies ad fames risus bibendum curabitur integer maecenas ullamcorper dictum hymenaeos penatibus hendrerit malesuada dui consequat.
                </p>
                <h4>Nihare Edersen</h4>
                <p>Founder, Trade</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testi_item">
              <img src="{{ asset('them-nine/img/home/testimonial1.png') }}" alt="">
              <div class="testi_item_content">
                <p>
                  <i class="fas fa-quote-left"></i>
                  At quis et morbi. Dolor at augue convallis luctus mi arcu urna ultricies ad fames risus bibendum curabitur integer maecenas ullamcorper dictum hymenaeos penatibus hendrerit malesuada dui consequat.
                </p>
                <h4>Nihare Edersen</h4>
                <p>Founder, Trade</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testi_item">
              <img src="{{ asset('them-nine/img/home/testimonial1.png') }}" alt="">
              <div class="testi_item_content">
                <p>
                  <i class="fas fa-quote-left"></i>
                  At quis et morbi. Dolor at augue convallis luctus mi arcu urna ultricies ad fames risus bibendum curabitur integer maecenas ullamcorper dictum hymenaeos penatibus hendrerit malesuada dui consequat.
                </p>
                <h4>Nihare Edersen</h4>
                <p>Founder, Trade</p>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- ================ testimonial section end ================= -->


    <!-- ================ blog section start ================= -->
    <section class="section-margin--large">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Our Blog</h4>
          <h2 class="section-intro__subtitle">Read The Latest Hair <span class="d-block">Style News</span></h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-blog">
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="{{ asset('them-nine/img/home/blog1.png') }}" alt="">
              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>18/01/2019</a></li>
                </ul>
                <h3 class="card-blog__title"><a href="#">Make The Most Of Your Locks</a></h3>
                <p>Nibh turpis Dictumst litora curae imperdiet an aelementum proin parturient torquent.</p>
                <a class="card-blog__link" href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-blog">
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="{{ asset('them-nine/img/home/blog2.png') }}" alt="">
              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>18/01/2019</a></li>
                </ul>
                <h3 class="card-blog__title"><a href="#">Chic They Work Any Occassion</a></h3>
                <p>Nibh turpis Dictumst litora curae imperdiet an aelementum proin parturient torquent.</p>
                <a class="card-blog__link" href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-blog">
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="{{ asset('them-nine/img/home/blog3.png') }}" alt="">
              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>18/01/2019</a></li>
                </ul>
                <h3 class="card-blog__title"><a href="#">Easy Hairstyles For GirlHair</a></h3>
                <p>Nibh turpis Dictumst litora curae imperdiet an aelementum proin parturient torquent.</p>
                <a class="card-blog__link" href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ blog section end ================= -->




  </main>

@endsection

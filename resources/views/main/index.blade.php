@extends('layouts.front')

@section('title', 'Beauty Templates')


@section('content')


<body>
    <!--::header part start::-->

    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Every child yearns to learn</h5>
                            <h1>Making Your Childs
                                World Better</h1>
                            <p>Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales
                                his void unto last session for bite. Set have great you'll male grass yielding yielding
                                man</p>
                            <a href="{{ route('templates') }}" class="btn_1">View Templates </a>
                            <a href="{{ route('contact')  }}" class="btn_2">Get Contact </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->

    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="{{ asset('front/assets/img/learning_img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>About us</h5>
                        <h2>Learning with Love
                            and Laughter</h2>
                        <p>Fifth saying upon divide divide rule for deep their female all hath brind Days and beast
                            greater grass signs abundantly have greater also
                            days years under brought moveth.</p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span>Him lights given i heaven second yielding seas
                                gathered wear</li>
                            <li><span class="ti-ruler-pencil"></span>Fly female them whales fly them day deep given
                                night.</li>
                        </ul>
                    <a href="{{ route('about-us') }}" class="btn_1">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!-- member_counter counter start -->

    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top" style="margin-top: 100px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>popular templates</p>
                        <h2>Special Templates</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ asset('front/assets/them-img/them4.png') }}" style="max-height: 600px;width:360px;" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="{{ route('index4') }}" class="btn_4">View Demo</a>
                            <a href="{{ route('order' , '4') }}"  class="btn_4">To Order</a>
                            <h4>$130.00</h4>
                            <a href="course-details.html"><h3>Web Development</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="{{ asset('front/assets/img/author/author_1.png') }}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/star.svg') }}" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ asset('front/assets/them-img/them9.png') }}" style="max-height: 600px;width:360px;" class="special_img" alt="">                        <div class="special_cource_text">
                            <a href="{{ route('index9') }}" class="btn_4">View Demo</a>
                            <a href="{{ route('order' , '9') }}"  class="btn_4">To Order</a>
                            <h4>$130.00</h4>
                            <a href="course-details.html"><h3>Web Development</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="{{ asset('front/assets/img/author/author_1.png') }}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/star.svg') }}" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="{{ asset('front/assets/them-img/them3.png') }}" style="max-height: 600px;width:360px;" class="special_img" alt="">                        <div class="special_cource_text">
                            <a href="{{ route('index3') }}" class="btn_4">View Demo</a>
                            <a href="{{ route('order' , '3') }}"  class="btn_4">To Order</a>
                            <h4>$160.00</h4>
                            <a href="course-details.html"> <h3>Web UX/UI Design </h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="{{ asset('front/assets/img/author/author_2.png') }}" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/color_star.svg') }}" alt=""></a>
                                        <a href="#"><img src="{{ asset('front/assets/img/icon/star.svg') }}" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->


    <!--::review_part start::-->
    <section class="learning_part testimonial_part" style="margin-top: 100px;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ asset('front/assets/img/testimonial_img_1.png') }}" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img  src="{{ asset('front/assets/img/testimonial_img_1.png') }}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ asset('front/assets/img/testimonial_img_2.png') }}" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ asset('front/assets/img/testimonial_img_1.png') }}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ asset('front/assets/img/testimonial_img_3.png') }}" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="{{ asset('front/assets/img/testimonial_img_1.png') }}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- footer part start-->
</body>

@endsection

@extends('templates.them7.themplate')

@section('title', 'Beauty 7')


@section('content')

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>about us</h2>
                        <p>home <span class="ti-angle-double-right"></span>about us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- about part start-->
<section class="about_part single_about_padding">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-4 col-lg-6">
                <div class="about_img ">
                    <img src="{{ asset('them-seven/img/about_us_1.png') }}" class="about_img_1" alt="">
                    <img src="{{ asset('them-seven/img/about_us_2.png') }}" class="about_img_2" alt="">
                    <img src="{{ asset('them-seven/img/about_us_3.png') }}" class="about_img_3" alt="">
                </div>
            </div>
            <div class="col-md-7 offset-md-1 col-lg-3 offset-lg-1">
                <div class="about_text">
                    <h5>About us</h5>
                    <h2>Connect with your dream style</h2>
                    <p>Seed spirit replenish cattle one moved air created. Them fill dont be fed isnt to he
                        shall god good spirit they are the. Hath Itself their second ifruitful a moving
                        their creature living every i replenish land and had hen lesser for their good
                        quality products</p>
                    <p>Seed spirit replenish cattle one moved air created. Them fill dont be fed isnt to he shall
                        god good spirit they are the. Hath Itself their second ifruitful a moving their creature
                        living every</p>
                    <a href="#" class="btn_3">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--:: about part end ::-->

<!--::review_part start::-->
<section class="review_part gray_bg section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="client_review_part owl-carousel">
                    <div class="client_review_single">
                        <img src="{{ asset('them-seven/img/Quote.png') }}" class="Quote" alt="quote">
                        <div class="client_review_text">
                            <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                god dea earth light for life may itself shall whales made they're blessed whales
                                also made from give
                                may saying meat. There from heaven it lights face had amazing place</p>
                        </div>
                        <div class="client_img">
                            <img src="{{ asset('them-seven/img/client/client_1.png') }}" alt="">
                        </div>
                        <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                    </div>
                    <div class="client_review_single">
                        <img src="{{ asset('them-seven/img/Quote.png') }}" class="Quote" alt="quote">
                        <div class="client_review_text media-body">
                            <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                god dea earth light for life may itself shall whales made they're blessed whales
                                also made from give
                                may saying meat. There from heaven it lights face had amazing place</p>
                        </div>
                        <div class="client_img">
                            <img src="{{ asset('them-seven/img/client/client_1.png') }}" alt="">
                        </div>
                        <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                    </div>
                    <div class="client_review_single">
                        <img src="{{ asset('them-seven/img/Quote.png') }}" class="Quote" alt="quote">
                        <div class="client_review_text">
                            <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                god dea earth light for life may itself shall whales made they're blessed whales
                                also made from give
                                may saying meat. There from heaven it lights face had amazing place</p>
                        </div>
                        <div class="client_img">
                            <img src="{{ asset('them-seven/img/client/client_1.png') }}" alt="">
                        </div>
                        <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                    </div>
                    <div class="client_review_single">
                        <img src="{{ asset('them-seven/img/Quote.png') }}" class="Quote" alt="quote">
                        <div class="client_review_text">
                            <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                god dea earth light for life may itself shall whales made they're blessed whales
                                also made from give
                                may saying meat. There from heaven it lights face had amazing place</p>
                        </div>
                        <div class="client_img">
                            <img src="{{ asset('them-seven/img/client/client_1.png') }}" alt="">
                        </div>
                        <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

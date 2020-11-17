@extends('templates.them7.themplate')

@section('title', 'Beauty 7')


@section('content')

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Services</h2>
                        <p>home <span class="ti-angle-double-right"></span>Service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- Service part start-->
<section class="service_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-lg-6 col-sm-10">
                <div class="section_tittle">
                    <img src="{{ asset('them-seven/img/section_tittle_icon.png') }}" alt="icon">
                    <h2>Service Expectation</h2>
                    <p>Good morning forth gathering doesn't god gathering man and had moveth there dry sixth
                        dominion
                        rule divided behold after had he did not move .</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="single_service_part">
                    <img src="{{ asset('them-seven/img/service/single_service_1.png') }}" alt="">
                    <div class="single_service_text">
                        <h4>Stylish Hair Cut</h4>
                        <p>Good morning forth gathering does god gathering man and had moveth there
                            dry so dominion rule divided had</p>
                        <a href="#" class="btn_3">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single_service_part">
                    <img src="{{ asset('them-seven/img/service/single_service_2.png') }}" alt="">
                    <div class="single_service_text">
                        <h4>Wedding Hair</h4>
                        <p>Good morning forth gathering does god gathering man and had moveth there
                            dry so dominion rule divided had</p>
                        <a href="#" class="btn_3">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="single_service_part">
                    <img src="{{ asset('them-seven/img/service/single_service_3.png') }}" alt="">
                    <div class="single_service_text">
                        <h4>Color & Hair Wash</h4>
                        <p>Good morning forth gathering does god gathering man and had moveth there
                            dry so dominion rule divided had</p>
                        <a href="#" class="btn_3">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service part end-->

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

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

@endsection

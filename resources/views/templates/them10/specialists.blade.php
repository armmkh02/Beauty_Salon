@extends('templates.them10.themplate')

@section('title', 'Beauty 10')


@section('content')

<section id="team" class="team pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center ">
                    <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                        <h1>About Us</h1>
                        <div class="bord-bot"></div>
                    </div>
            </div>
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

@endsection

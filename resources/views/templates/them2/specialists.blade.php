@extends('templates.them2.themplate')

@section('title', 'Beauty 2')


@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Barber Specialists</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">Barber Specialists</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Barber Specialists Team</p>
            <h2>Meet Our Hair Cut Expert Barber Specialists</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('them-two/img/team-1.jpg') }}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Adam Phillips</h2>
                        <p>Master Barber Specialists</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('them-two/img/team-2.jpg') }}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Dylan Adams</h2>
                        <p>Hair Expert</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('them-two/img/team-3.jpg') }}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Gloria Edwards</h2>
                        <p>Beard Expert</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ asset('them-two/img/team-4.jpg') }}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Josh Dunn</h2>
                        <p>Color Expert</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

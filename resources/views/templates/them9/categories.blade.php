@extends('templates.them9.themplate')

@section('title', 'Beauty 9')


@section('content')


<section class="banner-area service" id="service">
    <div class="container h-100">
        <div class="banner-area__content text-center">
    <h1>Our Service</h1>
    <nav aria-label="breadcrumb" class="banner-breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Our Service</li>
      </ol>
    </nav>
        </div>
</div>
</section>
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

  <!-- ================ pricing section start ================= -->
  <section class="section-margin--large">
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

@endsection

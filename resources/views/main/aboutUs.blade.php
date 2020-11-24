
@extends('layouts.front')

@section('title', 'Beauty Templates')


@section('content')
<style>

</style>
<body>

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>About Us</h2>
                        <p>Home<span>/</span>About Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="Mycontainer">

<div class="section section-about">
	<div class="shell">
        <h2 class="h2">Concept</h2>
		<div class="row">
			<div class="col-md-5">
				<p class="lead">We created VEVS to help small and medium-sized companies to get online quickly and painlessly and start serving their clients right after launch.</p>
			</div>

			<div class="col-md-6 col-md-offset-1">
				<p>The web abounds with great looking website templates but very few of them come with the key functionalities necessary to manage particular industry niches
                    and their daily operations. That's why we decided to focus on what a website <strong>can do</strong> rather than how it looks.
                    Of course, we offer a variety of layout designs. Still, we want VEVS to stand for <strong>simplicity and enhanced usability.</strong>
                </p>
        </div>
    </div>
	</div>
</div>

<div class="section-about-images d-flex">
	<div class="about-grid-1 about-grid-overlay">
		<picture>
			<source srcset="{{ asset('front/assets/img/1.jpg') }}" type="image/webp">
			<source srcset="{{ asset('front/assets/img/1.jpg') }}" type="image/jpeg">
			<img src="{{ asset('front/assets/img/1.jpg') }}"   alt="VEVS CFO">
		</picture>
	</div>

	<div class="about-grid-2">
		<picture>
			<source srcset="{{ asset('front/assets/img/2.jpg') }}" type="image/webp">
			<source srcset="{{ asset('front/assets/img/2.jpg') }}" type="image/jpeg">
			<img src="{{ asset('front/assets/img/img2.webp') }}"   alt="The boys working on a team event">
		</picture>
	</div>

	<div class="about-grid-3 about-grid-overlay">
		<picture>
			<source srcset="{{ asset('front/assets/img/3.jpg') }}" type="image/webp">
			<source srcset="{{ asset('front/assets/img/3.jpg') }}" type="image/jpeg">
			<img src="{{ asset('front/assets/img/img3.webp') }}"   alt="The girls work hard too">
		</picture>
	</div>
</div>

<div class="section section-about">
	<div class="shell">
		<h2 class="h2">Roots</h2>

		<div class="row">
			<div class="col-md-5">
				<p class="lead">Establishing VEVS Website Builder was a logical and well-prepared step in STIVASOFT's evolutionary path.</p>
			</div>

			<div class="col-md-6 col-md-offset-1">
				<p>Our decade-long experience in developing comprehensive online business solutions and web tools has taught us how to identify and respond to diverse customers' needs. We pride ourselves on a great team of experts who complement each other perfectly and work together towards one unified goal - delivering high-value products and excellent customer services. </p>
			</div>
		</div>
	</div>
</div>

        <div class="section-about-images d-flex">
            <div class="about-grid-4">
                <picture style="height:350px; padding:2%;" class="d-flex">
                    <source srcset="{{ asset('front/assets/img/5.jpeg') }}" type="image/webp">
                    <source srcset="{{ asset('front/assets/img/5.jpeg') }}" type="image/jpeg">
                    <img src="{{ asset('front/assets/img/5.jpeg') }}" alt="Time for fun">
                </picture>
            </div>
            <div class="about-grid-6">
                <picture style="height:350px; padding:2%;" class="d-flex">
                    <source srcset="{{ asset('front/assets/img/9.jpg') }}" type="image/webp">
                    <source srcset="{{ asset('front/assets/img/9.jpg') }}" type="image/jpeg">
                    <img src="{{ asset('front/assets/img/9.jpg') }}" alt="Team go rafting">
                </picture>
            </div>
            <div class="about-grid-8">
                <picture style="height:350px; padding:2%;" class="d-flex">
                    <source srcset="{{ asset('front/assets/img/10.jpeg') }}" type="image/webp">
                    <source srcset="{{ asset('front/assets/img/10.jpeg') }}" type="image/jpeg">
                    <img src="{{ asset('front/assets/img/10.jpeg') }}" alt="On a walk">
                </picture>
            </div>
        </div>
        <div class="section-about-images d-flex">
            <div class="about-grid-4">
                <picture style="height:350px; padding:2%;" class="d-flex">
                    <source srcset="{{ asset('front/assets/img/10.jpeg') }}" type="image/webp">
                    <source srcset="{{ asset('front/assets/img/10.jpeg') }}" type="image/jpeg">
                    <img src="{{ asset('front/assets/img/10.jpeg') }}" alt="Time for fun">
                </picture>
            </div>
            <div class="about-grid-6">
                <picture style="height:350px; padding:2%;" class="d-flex">
                    <source srcset="{{ asset('front/assets/img/5.jpeg') }}" type="image/webp">
                    <source srcset="{{ asset('front/assets/img/5.jpeg') }}" type="image/jpeg">
                    <img src="{{ asset('front/assets/img/5.jpeg') }}" alt="Team go rafting">
                </picture>
            </div>
            <div class="about-grid-8">
                <picture style="height:350px; padding:2%;" class="d-flex">
                    <source srcset="{{ asset('front/assets/img/9.jpg') }}" type="image/webp">
                    <source srcset="{{ asset('front/assets/img/9.jpg') }}" type="image/jpeg">
                    <img src="{{ asset('front/assets/img/9.jpg') }}" alt="On a walk">
                </picture>
            </div>
        </div>
</div>
</div>
</body>
@endsection



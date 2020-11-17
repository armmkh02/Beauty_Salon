@extends('layouts.front')

@section('title', 'Beauty Templates')


@section('content')
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
<!-- breadcrumb start-->

<!-- feature_part start-->




	<style>
@font-face {
  font-family: 'Raleway';
  font-display: swap;
  font-style: normal;
  font-weight: 300;
  src: url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-300.eot');
  src: local(''),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-300.eot?#iefix') format('embedded-opentype'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-300.woff2') format('woff2'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-300.woff') format('woff'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-300.ttf') format('truetype'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-300.svg#Raleway') format('svg');
}
@font-face {
  font-family: 'Raleway';
  font-display: swap;
  font-style: normal;
  font-weight: 400;
  src: url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-regular.eot');
  src: local(''),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-regular.eot?#iefix') format('embedded-opentype'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-regular.woff2') format('woff2'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-regular.woff') format('woff'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-regular.ttf') format('truetype'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-regular.svg#Raleway') format('svg');
}
@font-face {
  font-family: 'Raleway';
  font-display: swap;
  font-style: normal;
  font-weight: 600;
  src: url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-600.eot');
  src: local(''),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-600.eot?#iefix') format('embedded-opentype'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-600.woff2') format('woff2'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-600.woff') format('woff'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-600.ttf') format('truetype'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-600.svg#Raleway') format('svg');
}
@font-face {
  font-family: 'Raleway';
  font-display: swap;
  font-style: normal;
  font-weight: 500;
  src: url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-500.eot');
  src: local(''),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-500.eot?#iefix') format('embedded-opentype'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-500.woff2') format('woff2'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-500.woff') format('woff'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-500.ttf') format('truetype'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-500.svg#Raleway') format('svg');
}
@font-face {
  font-family: 'Raleway';
  font-display: swap;
  font-style: normal;
  font-weight: 700;
  src: url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-700.eot');
  src: local(''),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-700.eot?#iefix') format('embedded-opentype'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-700.woff2') format('woff2'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-700.woff') format('woff'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-700.ttf') format('truetype'),
       url('https://www.vevs.com/app/web/fonts/raleway-v18-latin-700.svg#Raleway') format('svg');
}
@font-face {
  font-family: 'Rubik';
  font-display: swap;
  font-style: normal;
  font-weight: 300;
  src: url('https://www.vevs.com/app/web/fonts/rubik-v11-latin-300.eot');
  src: local(''),
       url('https://www.vevs.com/app/web/fonts/rubik-v11-latin-300.eot?#iefix') format('embedded-opentype'),
       url('https://www.vevs.com/app/web/fonts/rubik-v11-latin-300.woff2') format('woff2'),
       url('https://www.vevs.com/app/web/fonts/rubik-v11-latin-300.woff') format('woff'),
       url('https://www.vevs.com/app/web/fonts/rubik-v11-latin-300.ttf') format('truetype'),
       url('https://www.vevs.com/app/web/fonts/rubik-v11-latin-300.svg#Rubik') format('svg');
}
@font-face {
  font-family: 'Rubik';
  font-display: swap;
  font-style: normal;
  font-weight: 500;
  src: url('https://www.vevs.com/app/web/fonts/rubik-v11-latin-500.eot');
  src: local(''),
       url('https://www.vevs.com/app/web/fonts/rubik-v11-latin-500.eot?#iefix') format('embedded-opentype'),
       url('https://www.vevs.com/app/web/fonts/rubik-v11-latin-500.woff2') format('woff2'),
       url('https://www.vevs.com/app/web/fonts/rubik-v11-latin-500.woff') format('woff'),
       url('https://www.vevs.com/app/web/fonts/rubik-v11-latin-500.ttf') format('truetype'),
       url('https://www.vevs.com/app/web/fonts/rubik-v11-latin-500.svg#Rubik') format('svg');
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front/assets/css/main2.css')}}">




<div class="section section-about">
	<div class="shell">
		<h2 class="h2">Concept</h2>

		<div class="row">
			<div class="col-md-5">
				<p class="lead">We created VEVS to help small and medium-sized companies to get online quickly and painlessly and start serving their clients right after launch.</p>
			</div>

			<div class="col-md-6 col-md-offset-1">
				<p>The web abounds with great looking website templates but very few of them come with the key functionalities necessary to manage particular industry niches and their daily operations. That's why we decided to focus on what a website <strong>can do</strong> rather than how it looks. Of course, we offer a variety of layout designs. Still, we want VEVS to stand for <strong>simplicity and enhanced usability.</strong></p>
			</div>
		</div>
	</div>
</div>

<div class="section-about-images">
	<div class="about-grid-1 about-grid-overlay">
		<picture>
			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp-image-1.webp" type="image/webp">
			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp-image-1.webp" type="image/jpeg">
			<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp-image-1.webp" alt="VEVS CFO">
		</picture>
	</div>

	<div class="about-grid-2">
		<picture>
			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp-image-1.webp" type="image/webp">
			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp-image-1.webp" type="image/jpeg">
			<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp-image-1.webp" alt="The boys working on a team event">
		</picture>
	</div>

	<div class="about-grid-3 about-grid-overlay">
		<picture>
			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp-image-1.webp" type="image/webp">
			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp-image-1.webp" type="image/jpeg">
			<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp-image-1.webp" alt="The girls work hard too">
		</picture>
	</div>
</div>

<div class="section section-about">
	<div class="shell">
		<h2 class="h2">Roots</h2>

		<div class="row">
			<div class="col-md-5">
				<p class="lead">Establishing VEVS Website Builder was a logical and well-prepared step in <a href="https://www.stivasoft.com/">STIVASOFT's</a> evolutionary path.</p>
			</div>

			<div class="col-md-6 col-md-offset-1">
				<p>Our decade-long experience in developing comprehensive online business solutions and web tools has taught us how to identify and respond to diverse customers' needs. We pride ourselves on a great team of experts who complement each other perfectly and work together towards one unified goal - delivering high-value products and excellent customer services. </p>
			</div>
		</div>
	</div>
</div>

<div class="section-about-images">
	<div class="about-grid-4">
		<picture>
			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/webp">
			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/jpeg">
			<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" alt="Time for fun">
		</picture>
	</div>

	<div class="about-grid-5">
		<div>
			<div class="about-grid-6">
				<picture>
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/webp">
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/jpeg">
					<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" alt="Team go rafting">
        		</picture>
			</div>

			<div class="about-grid-7">
				<div class="about-grid-content">
					<p>
						<strong>Today, 35,000+ <br> people and companies</strong>

						of all sizes and industries rely on us to empower their websites and make their lives easier.
					</p>
				</div>
			</div>

			<div class="about-grid-8">
				<picture>
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/webp">
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/jpeg">
					<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" alt="On a walk">
        		</picture>
			</div>
		</div>

		<div>
			<div class="about-grid-9 about-grid-overlay">
				<picture>
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/webp">
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/jpeg">
					<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" alt="On our way to the party">
        		</picture>
			</div>

			<div class="about-grid-10">
				<picture>
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/webp">
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/jpeg">
					<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" alt="StivaSoft Team">
        		</picture>
			</div>
		</div>
	</div>
</div>

<div class="section section-dark">
	<div class="shell">
		<h3 class="h3">We've got a lot more to show. Want to help us grow?</h3>

		<div class="section-actions">
			<a href="/invest.php" class="btn btn-quaternary">invest in vevs</a>
		</div>
	</div>
</div>

<div class="section section-featured">
	<h4 class="h4">VEVS is featured on:</h4>

	<ul class="feature-on-list">
		<li>
    		<a href="https://howtogetonline.com/website-builders" target="_blank">
        		<picture>
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp.webp" type="image/webp">
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp.jpg" type="image/jpeg">
        			<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp.png" alt="How to get online">
        		</picture>
    		</a>
		</li>
		<li>
			<a href="http://superbwebsitebuilders.com/vevs-review/" target="_blank">
				<picture>
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/webp">
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/jpeg">
					<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" alt="Superb website builders">
        		</picture>
			</a>
		</li>
		<li>
			<a href="http://www.anblik.com/review-category/best-online-website-builders-software-to-create-free-websites/" target="_blank">
				<picture>
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/webp">
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/jpeg">
					<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" alt="Anblik">
        		</picture>
			</a>
		</li>
		<li>
			<a href="http://startupbeat.com/2016/03/16/featured-startup-pitch-vevs-smart-website-builder-businesses-get-online-quickly-affordably/" target="_blank">
				<picture>
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/webp">
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/jpeg">
					<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" alt="Startup beat">
        		</picture>
			</a>
		</li>
		<li>
			<a href="https://www.launchingnext.com/s/vevs/20112/" target="_blank">
				<picture>
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/webp">
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/jpeg">
					<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" alt="Launching next">
        		</picture>
			</a>
		</li>
		<li>
			<a href="http://thestartuppitch.com/pitches/pitch-for-vevs/" target="_blank">
				<picture>
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp="image/webp">
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp="image/jpeg">
					<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp="The startup pitch">
        		</picture>
			</a>
		</li>
		<li>
			<a href="http://www.geekycorner.com/software-as-a-service/vevs-69.html" target="_blank">
				<picture>
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/webp">
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/jpeg">
					<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" alt="Geeky Corner">
        		</picture>
			</a>
		</li>
		<li>
			<a href="https://reviewsquirrel.com/best-drag-drop-website-builders/" target="_blank">
				<picture>
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/webp">
        			<source srcset="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" type="image/jpeg">
					<img src="https://www.vevs.com/app/web/img/site/media/about-image-1.webp" alt="Review Squirrel">
        		</picture>
			</a>
		</li>
	</ul>
</div>
		<div class="push"></div>
</div>




@endsection

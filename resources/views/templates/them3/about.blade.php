@extends('templates.them3.themplate')

@section('title', 'Beauty 3')


@section('content')


<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('/them-three/images/hero_1.jpg')">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-7">
            <h1 class="mb-3">About Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
            <p><a href="#" class="btn btn-primary">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="img-years">
            <img src="{{ asset('them-three/images/img_1.jpg') }}" alt="Image" class="img-fluid">
            <div class="year">
              <span>3 <span>years in <br>excellent service</span></span>
            </div>
          </div>

        </div>
        <div class="col-lg-5 ml-auto pl-lg-5 text-center">
          <h3 class="scissors text-center">High Quality Hair Styles</h3>
          <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
          <p><a href="#" class="btn btn-primary">Learn More</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5 section-2-title">
        <div class="col-md-6">
          <h3 class="scissors text-center">Meet Our Team</h3>
          <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
        </div>
      </div>
      <div class="row align-items-stretch">

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1">

              <img src="{{ asset('them-three/images/person_1.jpg') }}" alt="Image"
               class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Founder</span>
              <h2>James Doe</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1">

              <img src="{{ asset('them-three/images/person_2.jpg') }}" alt="Image"
               class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Founder</span>
              <h2>James Doe</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1">

              <img src="{{ asset('them-three/images/person_3.jpg') }}" alt="Image"
               class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Founder</span>
              <h2>James Doe</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1">

              <img src="{{ asset('images/person_4.jpg') }}" alt="Image"
               class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Founder</span>
              <h2>James Doe</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1">

              <img src="{{ asset('images/person_5.jpg') }}" alt="Image"
               class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Founder</span>
              <h2>James Doe</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <div class="post-entry-1 h-100 person-1">

              <img src="{{ asset('images/person_1.jpg') }}" alt="Image"
               class="img-fluid">

            <div class="post-entry-1-contents">
              <span class="meta">Founder</span>
              <h2>James Doe</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>




  <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2 class="text-white scissors primary-color-icon text-center">Quality Haircut</h2>
          <p class="lead text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam quo doloribus, suscipit libero, voluptate aliquam.</p>
          <p><a href="#" class="btn btn-primary">Contact Us Now</a></p>
        </div>
      </div>
    </div>
  </div>

@endsection

@extends('layouts.front')

@section('title', 'Beauty Templates')


@section('content')

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>To Order</h2>
                        <p>Home<span>/<span>To Order</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- ================ contact section start ================= -->
<section class="contact-section section_padding">
<div class="container">
  {{-- <div class="d-none d-sm-block mb-5 pb-4">
    <div id="map" style="height: 480px;"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var grayStyles = [
          {
            featureType: "all",
            stylers: [
              { saturation: -90 },
              { lightness: 50 }
            ]
          },
          {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
        ];
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -31.197, lng: 150.744},
          zoom: 9,
          styles: grayStyles,
          scrollwheel:  false
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

  </div> --}}


  <div class="row">
    <div class="col-12">
      <h2 class="contact-title">To Order</h2>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif

    <form class="form-contact contact_form" action="{{ route('sendEmail') }}" method="post" id="contactForm" novalidate="novalidate">
        @csrf
    <p class="contact-title" style="font-size: 17px;">Template № {{ $template->id }}</p>
                
    </div>
    <div class="col-lg-8">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <input class="form-control" name="first_name" id="first_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your First Name'" placeholder = 'Enter Your First Name'>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input class="form-control" name="last_name" id="last_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Last Name'" placeholder = 'Enter Your Last Name'>
            </div>
          </div>
          <div class="col-sm-6">
              <div class="form-group">
                  <input class="form-control" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Phone Number'" placeholder = 'Enter Your Phone Number(+1)'>
                </div>
            </div>
        <div class="col-sm-6">
            <div class="form-group">
            <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
            </div>
        </div>
          <div class="col-12">
            <div class="form-group">
                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
            </div>
          </div>
        </div>
        <div class="form-group mt-3">
          <button type="submit" class="button button-contactForm btn_1">Send Message</button>
        </div>
      </form>
    </div>
    <div class="col-lg-3 offset-lg-1">
        <div class="media contact-info">
            <span class="contact-info__icon">
            <div class="media-body">
                <h3>
                    <img src="{{ asset($template->path) }}" style=" margin-left:26%; width:60%;height:600px;" alt="Avatar" class="avatar">
                </h3>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-info"></i></span>
            <div class="media-body">
                <h3>Template Name:{{ $template->name }}</h3>
                <p>Type:Beauty Salon</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-gallery"></i></span>
            <div class="media-body">
                <h3>Template №:{{ $template->id }}</h3>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-money"></i></span>
            <div class="media-body">
                <h3>Price:130$</h3>
                <p>Free Debuging</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
                <h3>Contact:+1 253 565 2365</h3>
                <p>Admin Name:Arman Mkh</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
                <h3>Admin Email:</h3>
                <p>support@colorlib.com</p>
            </div>
        </div>
    </div>

  </div>
</div>
</section>

@endsection

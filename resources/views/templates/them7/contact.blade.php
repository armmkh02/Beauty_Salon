@extends('templates.them7.themplate')

@section('title', 'Beauty 7')


@section('content')

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
              <h2>Contact Us</h2>
              <p>home <span class="ti-angle-double-right"></span>Contact us</p>
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
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {
              lat: -25.363,
              lng: 131.044
            };
            var grayStyles = [{
                featureType: "all",
                stylers: [{
                    saturation: -90
                  },
                  {
                    lightness: 50
                  }
                ]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{
                  color: '#ccdee9'
                }]
              }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {
                lat: -31.197,
                lng: 150.744
              },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
          }
        </script>
        <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
        </script>

      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Contact Us</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your full name'" placeholder='Enter your full name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="phone" id="phone" type="phone" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter phone number'" placeholder='Enter Phone(+1)'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Enter Message'></textarea>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon">
            <div class="media-body">
                <h3>
                    <img src="{{ asset('barber.jpg') }}" style="border-radius: 50%; margin-left:26%; width:40%;" alt="Avatar" class="avatar">
                </h3>

            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-user"></i></span>
            <div class="media-body">
                <h3>Full Name:Fabio Marquez</h3>
                <p>Service:Barber</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
                <h3>Buttonwood, California.</h3>
                <p>Rosemead, CA 91770</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
                <h3>+1 253 565 2365</h3>
                <p>Mon to Fri 9am to 6pm</p>
            </div>
        </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

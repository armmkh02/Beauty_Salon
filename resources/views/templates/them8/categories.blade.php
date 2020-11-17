@extends('templates.them8.themplate')

@section('title', 'Beauty 8')


@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex mb-3"><span class="flaticon-facial-treatment"></span></div>
          <div class="media-body">
            <h3 class="heading">Skin &amp; Beauty Care</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex mb-3"><span class="flaticon-cosmetics"></span></div>
          <div class="media-body">
            <h3 class="heading">Makeup Pro</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex mb-3"><span class="flaticon-curl"></span></div>
          <div class="media-body">
            <h3 class="heading">Hair Style</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>


<section class="ftco-section ftco-discount img" style="background-image: url(/them-eight/images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-5 discount ftco-animate">
                    <h3>Save up to 25% Off</h3>
                    <h2 class="mb-4">Student Discount</h2>
                    <p class="mb-4">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p><a href="#" class="btn btn-white btn-outline-white px-4 py-3">Book Now</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/them-eight/images/bg_4.jpg);">
        <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-flower"></span></div>
                      <span>Makeup Over Done</span>
                    <strong class="number" data-number="3500">0</strong>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-flower"></span></div>
                      <span>Procedure</span>
                    <strong class="number" data-number="1000">0</strong>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-flower"></span></div>
                      <span>Happy Client</span>
                    <strong class="number" data-number="3000">0</strong>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-flower"></span></div>
                      <span>Skin Treatment</span>
                    <strong class="number" data-number="900">0</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</section>

@endsection
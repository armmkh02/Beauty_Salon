@extends('templates.them1.themplate')

@section('title', 'Beauty 1')


@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('/them-one/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ url('/them1') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Booking<i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">Booking</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
      <div class="container">
          <div class="row justify-content-center">
                  <div class="col-md-12">
                      <div class="wrapper">
                          <div class="row no-gutters">
                              <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                  <div class="contact-wrap w-100 p-md-5 p-4">
                                      <h3 class="mb-4">Booking Page</h3>
                                      <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                     Your message was sent, thank you!
                                </div>
                                      <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                          <div class="row">
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="label" for="name">Full Name</label>
                                                      <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="label" for="phone">Phone Number</label>
                                                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone(+1)">
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                      <label class="label" for="subject">Choose a Service</label> <br>
                                                      <select class="col-lg-6" name="service" id="service">
                                                        <option value="volvo">Volvo</option>
                                                        <option value="saab">Saab</option>
                                                        <option value="opel">Opel</option>
                                                        <option value="audi">Audi</option>
                                                      </select>
                                                    <br><br>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
                                                  <div class="form-group">
                                                    <label class="label" for="subject">Choose a Specialist</label> <br>
                                                     <select class="col-lg-6" name="specialist" id="specialist">
                                                      <option value="volvo">Volvo</option>
                                                      <option value="saab">Saab</option>
                                                      <option value="opel">Opel</option>
                                                      <option value="audi">Audi</option>
                                                    </select>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <label class="label" for="#">Message</label>
                                                      <textarea name="message"  class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <input type="submit" value="Send Message" class="btn btn-primary">
                                                      <div class="submitting"></div>
                                                  </div>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>


                              <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                  <div class="info-wrap bg-primary  p-md-3">
                                      <h3>
                                          <img src="{{ asset('barber.jpg') }}" style="border-radius: 50%; margin-left:26%; width:40%;" alt="Avatar" class="avatar">
                                      </h3>
                                      <h5 class="mb-4" style="color: white; margin-left:25%;"> Fabio Marquez</h5>
                              <div class="dbox w-150 d-flex align-items-start" style="padding: 15px;">
                                  <div class="icon d-flex align-items-center justify-content-center">
                                      <span class="fa fa-certificate"></span>
                                  </div>
                                  <div class="text pl-3">
                                  <p><span>Service:</span>Barber</p>
                                </div>
                            </div>
                              <div class="dbox w-150 d-flex align-items-start" style="padding: 15px;">
                                  <div class="icon d-flex align-items-center justify-content-center">
                                      <span class="fa fa-map-marker"></span>
                                  </div>
                                  <div class="text pl-3">
                                  <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                </div>
                            </div>
                              <div class="dbox w-100 d-flex align-items-center" style="padding: 15px;">
                                  <div class="icon d-flex align-items-center justify-content-center">
                                      <span class="fa fa-phone"></span>
                                  </div>
                                  <div class="text pl-3">
                                  <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                </div>
                            </div>
                              <div class="dbox w-100 d-flex align-items-center" style="padding: 15px;">
                                  <div class="icon d-flex align-items-center justify-content-center">
                                      <span class="fa fa-paper-plane"></span>
                                  </div>
                                  <div class="text pl-3">
                                  <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                </div>
                            </div>

                        </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      </div>
  </section>

@endsection

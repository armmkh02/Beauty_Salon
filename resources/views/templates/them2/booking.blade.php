@extends('templates.them2.themplate')

@section('title', 'Beauty 2')


@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Booking</h2>
            </div>
            <div class="col-12">
                <a href="{{ url('/them2') }}">Home</a>
                <a href="{{ route('booking2') }}">Booking</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="section-header text-center" style="margin-top: 40px;">
    <h2>Booking Page</h2>
</div>
<div class="contact" style="margin-bottom: 90px;">
    <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                            <h3>
                                <img src="{{ asset('barber.jpg') }}" style="border-radius: 50%; margin-left:26%; width:40%;" alt="Avatar" class="avatar">
                            </h3>
                            <div class="dbox w-100 d-flex align-items-center" style="padding: 15px;">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="text pl-3">
                                <p><span>Full Name:</span>Fabio Marquez</a></p>
                              </div>
                          </div>
                            <div class="dbox w-100 d-flex align-items-center" style="padding: 15px;">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-certificate"></span>
                                </div>
                                <div class="text pl-3">
                                <p><span>Service:</span>Barber</a></p>
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
                <div class="col-md-8">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                   <h4>ada</h4>
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Full Name" required="required" data-validation-required-message="Please enter your Full Name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="phone" placeholder="Your Phone Number(+1)" required="required" data-validation-required-message="Please enter your phone number" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 control-group" >
                                    <label class="label" for="subject">Choose a Service</label> <br>
                                    <select class="col-lg-6" name="service" id="service">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="opel">Opel</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-lg-6 control-group">
                                    <label class="label" for="subject">Choose a Specialist</label> <br>
                                    <select class="col-lg-6" name="service" id="service">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="opel">Opel</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <p class="help-block text-danger"></p>
                                </div>
                        </div>
                            <div class="control-group">
                                <textarea class="form-control"  id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

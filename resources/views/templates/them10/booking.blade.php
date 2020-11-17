@extends('templates.them10.themplate')

@section('title', 'Beauty 10')


@section('content')

    <!-- CONTACT FORM
=================-->
<section id="contact" class="contact pb-0">
    <div class="container">
      <div class="row mb-5">
          <div class="col-md-12 text-center">
              <div class="heading">
                  <h1>Booking Page</h1>
                  <div class="bord-bot"></div>
                  <p class="desc">We would love to hear from you!</p>
              </div>
          </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Your Full Name *" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" name="phone" id="phone" type="text" placeholder="Your Phone Number(+1) *" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="row">
                    <div  class="col-sm-6 form-group" style="height:2%;">
                    <label  class="label" for="subject">Choose a Service</label> <br>
                    <select  name="service" id="service">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                        <option value="audi">asdaa</option>
                    </select>
                    <p class="help-block text-danger"></p>
                </div>
                <div class="col-sm-6 form-group" style="height:2%;">
                    <label class="label" for="subject">Choose a Specialist</label> <br>
                    <select   name="specialist" id="specialist">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                    <p class="help-block text-danger"></p>
                </div>
           </div>
                <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
              </div>
              <div class="col-lg-4 ml-auto">
                <div class="bg-white " style="padding: 15px 30px 8px 30px;margin-inline-end: auto;margin-top: 50px;">
                      <img src="{{ asset('barber.jpg') }}" style="border-radius: 50%; margin-left:26%; width:40%;" alt="Avatar" class="avatar">
                  <ul class="list-unstyled footer-link">
                    <li class="d-block mb-3"><span class="d-block text-black">Full Name:Fabio Marquez</span></li>
                    <li class="d-block mb-3"><span class="d-block text-black">Service:Barber</span></li>
                      <span class="d-block text-black">Address:</span>
                      <span>34 Street Name, City Name Here, United States</span></li>
                    <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
                    <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
                  </ul>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-general btn-greenish btn-xl text-uppercase" type="submit"  style="color:white; border-color: white;">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

@endsection

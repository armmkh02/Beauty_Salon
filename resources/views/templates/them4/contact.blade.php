@extends('templates.them4.themplate')

@section('title', 'Beauty 4')


@section('content')

<main class="main-content">
    <div class="page">
        <div class="container">
            <p>Omnis iste natus error sit voluptatem doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto Omnis iste natus error sit voluptatem doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto iste natus error sit voluptatem doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto</p>

            <div class="row">
                <div class="col-md-5">
                    <form action="#" class="contact-form">
                        <input type="text" name="name" id="name" placeholder="Full Name...">
                        <input type="text" name="phone" id="name" placeholder="Phone Number(+1)...">
                        <textarea name="" id="message" placeholder="Message..."></textarea>
                        <div class="text-right">
                            <button class="button large" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 ml-auto">
                    <div class="bg-white p-3 p-md-5">
                      <h3 class="text-black mb-4">Contact Info</h3>
                      <h3>
                          <img src="{{ asset('barber.jpg') }}" style="border-radius: 50%; margin-left:26%; width:40%;" alt="Avatar" class="avatar">
                      </h3>
                      <ul class="list-unstyled footer-link">
                        <li class="d-block mb-3"><span class="d-block text-black">Full Name:Fabio Marquez</span></li>
                        <li class="d-block mb-3"><span class="d-block text-black">Service:Barber</span></li>
                        <li class="d-block mb-3">
                          <span class="d-block text-black">Address:</span>
                          <span>34 Street Name, City Name Here, United States</span></li>
                        <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
                        <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
                      </ul>
                    </div>
                  </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="map-container">
                        <div class="address-info">
                            <address>
                                <img src="{{ asset('them-forth/images/icon-map-small.png') }}" class="icon">
                                <p><strong>Company name</strong> 563 Avenue Street, New York</p>
                            </address>
                            <div class="contact-info">
                                <a href="mailto:contact@companyname.com" class="mail"><img src="{{ asset('them-forth/images/icon-envelope-small.png') }}" class="icon">contact@companyname.com</a>
                                <a href="tel:(500)942042259" class="phone"><img src="{{ asset('them-forth/images/icon-phone-small.png') }}" class="icon">(500)942042259</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

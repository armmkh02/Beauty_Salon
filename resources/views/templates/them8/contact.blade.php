@extends('templates.them8.themplate')

@section('title', 'Beauty 8')


@section('content')

<section class="ftco-section contact-section">
    <div class="container mt-5">
      <div class="row block-9">
                    <div class="col-md-4 contact-info ftco-animate">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                  <h2 class="h4">Contact Information</h2>
                </div>
                <div class="col-md-12 mb-3">
                    <h3>
                        <img src="{{ asset('barber.jpg') }}" style="border-radius: 50%; margin-left:26%; width:40%;" alt="Avatar" class="avatar">
                    </h3>
                </div>
                <div class="col-md-12 ">
                    <p><span>Full Name:</span> <a href="#">Fabio Marquez</a></p>
                  </div>
                <div class="col-md-12 ">
                    <p><span>Service:</span> <a href="#">Barber</a></p>
                  </div>
                <div class="col-md-12 ">
                  <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
                <div class="col-md-12 ">
                  <p><span>Phone:</span> <a href="#">+ 1235 2355 98</a></p>
                </div>
                <div class="col-md-12 ">
                  <p><span>Email:</span> <a href="#">info@yoursite.com</a></p>
                </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
        <div class="col-md-6 ftco-animate">
          <form action="#" class="contact-form">
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Your Full Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="phone" class="form-control" placeholder="Your Phone Number(+1)">
                    </div>
                    </div>
            </div>

            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <div id="map"></div>

@endsection

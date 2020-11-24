@extends('layouts.front')

@section('title', 'Beauty Templates')


@section('content')

</style>
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Contact Us </h2>
                        <p>Home<span></span>Contact Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!-- ================ contact section start ================= -->
<section class="contact-section section_padding" style="margin-bottom: -17%;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <h2 class="contact-title">Contact Us </h2>
                    <div style="margin-left: 139px;
                    color: #040404;
                    font-style: oblique;
                    font-family: monospace;">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <form class="" action="{{ route('sendEmail') }}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf
                            <input type="hidden" name="image_id" id="image_id">
                            @if (Auth::user())
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            @endif
                        <div class="row">
                            <div class="col-6">
                                <p class="contact-title" style="font-size: 17px;">Template  </p>
                            </div>

                            <div class="col-6">
                                <button style="margin-left: -312px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    №
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 300px;height:500px; overflow-y:auto">
                                    @foreach ($images as $image)
                                        <div  class="dropdown-item d-flex justify-content-between align-items-center" style="width: 100%">
                                        <img data-name="{{ $image->name }}" data-id="{{ $image->id }}"  class="check-them" src="{{ asset($image->path) }}" style="width:100px;height:300px;" alt="">
                                        <strong >{{ $image->name }}</strong>
                                        </div>
                                    @endforeach

                                </div>
                            </div>


                        </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <input class="form-control" name="first_name" id="first_name" type="text"  placeholder = 'Enter Your First Name'>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <input class="form-control" name="last_name" id="last_name" type="text"  placeholder = 'Enter Your Last Name'>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Phone Number'" placeholder = 'Enter Your Phone Number(+1)'>
                                        </div>
                                    </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder = 'Enter email address'>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"  placeholder = 'Enter Message'></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-group mt-3">
                                    <button type="submit" class="button button-contactForm btn_1">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="them-wrapper col-lg-4 ">
                        <div  class="them-img media contact-info">

                        </div>
                        <div class="media contact-info">
                            <h3 class="them-title"></h3>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection


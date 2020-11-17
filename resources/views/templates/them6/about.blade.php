@extends('templates.them6.themplate')

@section('title', 'Beauty 6')


@section('content')

        <div class="bradcam_area breadcam_bg overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_area ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="about_thumbs">
                            <div class="large_img_1">
                                <img src="{{ asset('them-six/img/about/about_lft.png') }}" alt="">
                            </div>
                            <div class="small_img_1">
                                <img src="{{ asset('them-six/img/about/about_right.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="about_info">
                            <div class="section_title mb-20px">
                                <h3>About Us</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliteiusmod tempor incididunt ut labore et dolore magna aliqua. Qpsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Quis ipsum suspendisse ultr.</p>
                            </div>
                            <p class="opening_hour">
                                Opening Hour
                                <span>10:00 am - 10:00 pm</span>
                            </p>
                            <a href="about.html" class="boxed-btn3">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="make_apppointment_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title pl-68">
                            <h3>Make an Appointment</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="appoint_ment_form pl-68">
                            <form action="#">
                                <div class="single_field">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="single_field">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="single_field m-0">
                                    <textarea id="" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <p>I’m available for commissions and collaborations, and i’m <br>
                                    excited to hear from you about new projects.</p>
                                <div class="form_btn">
                                    <button class="boxed-btn3" type="submit">Send message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <div class="appointMent_info">
                            <div class="single_appontment">
                                <h4>Visit our studio at</h4>
                                <p>221B Baker Street, P. O Box 3 Park Road,
                                    USA - 215852</p>
                            </div>
                            <div class="single_appontment">
                                <h4>Message us</h4>
                                <p>Support@colorlib.net <br>
                                    (+68) 120034509</p>
                            </div>
                            <div class="single_appontment">
                                <h4>Working Hours</h4>
                                <p class="d-flex justify-content-between">
                                    <span>Monday - Friday</span>
                                    <span>:  09.00 - 23.00</span>
                                </p>
                                <p class="d-flex justify-content-between">
                                    <span>Sunday</span>
                                    <span>:  09.00 - 16.00s</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

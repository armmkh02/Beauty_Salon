@extends('layouts.front')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<div class="container register">
                <div class="row">
                    <div class="col-md-2 register-left" style = "margin-top: 108px;">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are in Beauty Salon WebPage!</p>
                        {{-- <input type="submit" name="" value="Login"/><br/> --}}
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Pleace Register</h3>
                                <form method="POST" action="{{ route('register') }}"  class="row register-form">
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" required autocomplete="name" autofocus  class="form-control  @error('name') is-invalid @enderror" placeholder="Full Name *">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                        </div>
                                        <div class="form-group">
                                            <input  placeholder="Password *"  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input  placeholder="Confirm Password *" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" required autocomplete="name" autofocus  class="form-control  @error('phone') is-invalid @enderror" placeholder="Phone Number(+1)">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                        </div>

                                        <input type="submit" class="btnRegister"  value="Register"/>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email *">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Pleace Login</h3>
                                <form method="POST" action="{{ route('login') }}" class="row register-form">
                                    @csrf
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input placeholder="Email *" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email *">
                                            @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password *">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Login"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @endsection

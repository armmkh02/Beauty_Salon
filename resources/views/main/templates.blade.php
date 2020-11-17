@extends('layouts.front')

@section('title', 'Beauty Products')


@section('content')

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Templates</h2>
                        <p>Home<span>/</span>Templates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<style>

.ggg {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.template:hover .img-responsive {
  opacity: 0.5;
}

.template:hover .ggg {
  opacity: 1;
}
</style>
<!--::review_part start::-->
<div class="col-xl-5">
    <div class="section_tittle text-center">
        {{-- <p>All Templates</p> --}}
        <h2>All Templates</h2>
    </div>
</div>

@foreach ($templates as $template)

<div class="row container">
    <div class="template col-3">
        <div class="wsk-cp-product">
          <div class="wsk-cp-img">
              <img src="{{ asset($template->path) }}" style="max-height: 420px" alt="Product" class="img-responsive" />
          </div>
          <div class="ggg" style="width:100%; margin-top:150px;" >

            <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
              <a style="color: white;" href="{{ route('index1') }}">View Demo</a>
            </div>
            <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
              <a style="color: white;" href="{{ route('order' , '1') }}">To Order</a>
            </div>
          </div>
        </div>
    </div>
</div>


@endforeach

<br><br><br><br><br><br><br>


@endsection

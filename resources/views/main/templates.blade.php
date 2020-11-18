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
{{-- <div class="col-xl-5"> --}}
    <div class="section_tittle text-center" style="margin-top:3%;">
        <h2>All Templates</h2>
    </div>
{{-- </div> --}}

<div class="container">
    <div class="row">
        <div class="template col-3">
            <div class=" wsk-cp-product ">
            <div class="wsk-cp-img">
                <img src="{{ asset('front/assets/them-img/them1.png') }}" style="max-height: 420px" alt="Product" class="img-responsive" />
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
        <div class="template col-3">
            <div class=" wsk-cp-product ">
            <div class="wsk-cp-img">
                <img src="{{ asset('front/assets/them-img/them2.png') }}" style="max-height: 420px" alt="Product" class="img-responsive" />
            </div>
            <div class="ggg" style="width:100%; margin-top:150px;" >
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('index2') }}">View Demo</a>
                </div>
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('order' , '2') }}">To Order</a>
                </div>
            </div>
            </div>
        </div>
        <div class="template col-3">
            <div class=" wsk-cp-product ">
            <div class="wsk-cp-img">
                <img src="{{ asset('front/assets/them-img/them3.png') }}" style="max-height: 420px" alt="Product" class="img-responsive" />
            </div>
            <div class="ggg" style="width:100%; margin-top:150px;" >
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('index3') }}">View Demo</a>
                </div>
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('order' , '3') }}">To Order</a>
                </div>
            </div>
            </div>
        </div>
        <div class="template col-3">
            <div class=" wsk-cp-product ">
            <div class="wsk-cp-img">
                <img src="{{ asset('front/assets/them-img/them4.png') }}" style="max-height: 420px" alt="Product" class="img-responsive" />
            </div>
            <div class="ggg" style="width:100%; margin-top:150px;" >
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('index4') }}">View Demo</a>
                </div>
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('order' , '4') }}">To Order</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="template col-3">
            <div class=" wsk-cp-product ">
            <div class="wsk-cp-img">
                <img src="{{ asset('front/assets/them-img/them5.png') }}" style="max-height: 420px" alt="Product" class="img-responsive" />
            </div>
            <div class="ggg" style="width:100%; margin-top:150px;" >
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('index5') }}">View Demo</a>
                </div>
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('order' , '5') }}">To Order</a>
                </div>
            </div>
            </div>
        </div>
        <div class="template col-3">
            <div class=" wsk-cp-product ">
            <div class="wsk-cp-img">
                <img src="{{ asset('front/assets/them-img/them6.png') }}" style="max-height: 420px" alt="Product" class="img-responsive" />
            </div>
            <div class="ggg" style="width:100%; margin-top:150px;" >
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('index6') }}">View Demo</a>
                </div>
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('order' , '6') }}">To Order</a>
                </div>
            </div>
            </div>
        </div>
        <div class="template col-3">
            <div class=" wsk-cp-product ">
            <div class="wsk-cp-img">
                <img src="{{ asset('front/assets/them-img/them7.png') }}" style="max-height: 420px" alt="Product" class="img-responsive" />
            </div>
            <div class="ggg" style="width:100%; margin-top:150px;" >
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('index7') }}">View Demo</a>
                </div>
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('order' , '7') }}">To Order</a>
                </div>
            </div>
            </div>
        </div>
        <div class="template col-3">
            <div class=" wsk-cp-product ">
            <div class="wsk-cp-img">
                <img src="{{ asset('front/assets/them-img/them8.png') }}" style="max-height: 420px" alt="Product" class="img-responsive" />
            </div>
            <div class="ggg" style="width:100%; margin-top:150px;" >
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('index8') }}">View Demo</a>
                </div>
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('order' , '8') }}">To Order</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="template col-3">
            <div class=" wsk-cp-product ">
            <div class="wsk-cp-img">
                <img src="{{ asset('front/assets/them-img/them9.png') }}" style="max-height: 420px" alt="Product" class="img-responsive" />
            </div>
            <div class="ggg" style="width:100%; margin-top:150px;" >
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('index9') }}">View Demo</a>
                </div>
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('order' , '9') }}">To Order</a>
                </div>
            </div>
            </div>
        </div>
        <div class="template col-3">
            <div class=" wsk-cp-product ">
            <div class="wsk-cp-img">
                <img src="{{ asset('front/assets/them-img/them10.png') }}" style="max-height: 420px" alt="Product" class="img-responsive" />
            </div>
            <div class="ggg" style="width:100%; margin-top:150px;" >
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('index10') }}">View Demo</a>
                </div>
                <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                <a style="color: white;" href="{{ route('order' , '10') }}">To Order</a>
                </div>
            </div>
            </div>
        </div>

    </div>
</div>





@endsection

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


    <div class="section_tittle text-center" style="margin-top:3%;">
        <h2>All Templates</h2>
    </div>

<div class="container" style="margin-bottom: 25%;">
    <div class="row">
        @foreach ($templates1 as $template)
            <div class="template col-3">
                <div class=" wsk-cp-product ">
                <div class="wsk-cp-img">
                    <img src="{{ asset($template->path) }}" style="max-height: 420px" alt="Product" class="img-responsive" />
                </div>
                <div class="ggg" style="width:100%; margin-top:150px;" >
                    <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                    <a style="color: white;" href="{{ route('index' . $template->id) }}">View Demo</a>
                    </div>
                    <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                    <a style="color: white;" href="{{ route('order' ,  $template->id) }}">To Order</a>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="container" style="margin-bottom: 25%;">
    <div class="row">
        @foreach ($templates2 as $template)
            <div class="template col-3">
                <div class=" wsk-cp-product ">
                <div class="wsk-cp-img">
                    <img src="{{ asset($template->path) }}" style="max-height: 420px" alt="Product" class="img-responsive" />
                </div>
                <div class="ggg" style="width:100%; margin-top:150px;" >
                    <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                    <a style="color: white;" href="{{ route('index' . $template->id) }}">View Demo</a>
                    </div>
                    <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                    <a style="color: white;" href="{{ route('order' , $template->id) }}">To Order</a>
                    </div>
                </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

<div class="container" style="margin-bottom: 15%;">
    <div class="row">
        @foreach ($templates3 as $template)
            <div class="template col-3">
                <div class=" wsk-cp-product ">
                <div class="wsk-cp-img">
                    <img src="{{ asset($template->path) }}" style="max-height: 420px" alt="Product" class="img-responsive" />
                </div>
                <div class="ggg" style="width:100%; margin-top:150px;" >
                    <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                    <a style="color: white;" href="{{ route('index' . $template->id) }}">View Demo</a>
                    </div>
                    <div class="btn_1"  style="margin-block-end:11px;margin-left:10px;background-image:linear-gradient(to left, #ee390f 0%, #f9b700 51%, #ee390f 100%);">
                    <a style="color: white;" href="{{ route('order' , $template->id) }}">To Order</a>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>





@endsection

@extends('layouts.admin')

@section('title', 'Admin Beauty Templates')

@section('content')
<div class="row" style="width: 70%; margin-left:20%;">

    <div class="col-lg-6">
        <img src="{{ asset($image->path) }}" style="width: 600px; height:920px" alt="">
    </div>

    <div class="col-lg-6">
        <form action="{{ route('admin-update-template-image-db' ) }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="item form-group" style="width: 70%; margin-left:20%;">
                   <br> Update Template Image * <br><br>
                    <div class="col-md-6 col-sm-6 ">
                        <input name="posters" type="file" class="form-control filestyle" data-buttonName="btn-primary"
                            id="product-posters" multiple>
                            <input type="hidden" value="{{ $image->id }}" name="id" id="">
                    </div>
                </div>
                <button type="submit" style=" margin-left:47%;" class="btn btn-success">Update</button>
        </form>
    </div>
</div>

@endsection

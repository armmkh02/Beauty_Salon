@extends('layouts.front')

@section('content')
    {{-- <div class="container" > --}}
    <div class="main-body" style="padding: 40px; margin-top:120px">

          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->

          <div class="row gutters-sm">
            <div class="col-md-4 ">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $user->name }}</h4>
                      <p class="text-secondary mb-1">User For Beauty Salon</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <form action="{{ route('user-update' ) }}" method="POST" class="card-body">
                    @csrf
                    <input type="hidden" name="id" value="{{ $user->id }}">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div  class="col-sm-9 text-secondary">
                       <input type="text" style="border-radius:10%;" value="{{ $user->name }}" name="name">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" style="border-radius:10%; width:300px;" value="{{ $user->email }}" name="email">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" style="border-radius:10%;" value="{{ $user->phone }}" name="phone">
                    </div>
                  </div>
                  <hr>
                  <input type="submit" name="submit" value="Save" class="btn btn-success" style="margin-left:15%;">
                </form>
              </div>
            </div>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Message</th>
                    <th scope="col">Image_Name</th>
                    <th scope="col">Image</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td scope="row">{{ $order->firstName }} {{ $order->lastName }} </td>
                            <td scope="row">{{ $order->email }}</td>
                            <td scope="row">{{ $order->phone }}</td>
                            <td scope="row">{{ $order->message }}</td>
                            <td>{{ $order->name }}</td>
                            <td><img src="{{ $order->path }}"  width="100px; height:170px" alt=""></td>
                        </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
          <div class="d-flex justify-content-center">
            {{ $orders->links() }}
           </div>
        </div>

    </div>
@endsection

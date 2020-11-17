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
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user->name }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user->phone }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user->phone }}
                    </div>
                  </div>
                  <hr>
                </div>
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
                    @foreach ($array as $arr)
                        <tr>
                            <td scope="row">{{ $arr['lastName'] }}</td>
                            <td scope="row">{{ $arr['email'] }}</td>
                            <td scope="row">{{ $arr['phone'] }}</td>
                            <td scope="row">{{ $arr['message'] }}</td>
                            <td>{{ $arr['images']->name }}</td>
                            <td><img src="{{ $arr['images']->path }}"  width="100px; height:170px" alt=""></td>
                        </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
          <div class="d-flex justify-content-center">
            {{ $array->links() }}
           </div>
        </div>

    </div>
@endsection

@extends('layouts.admin')

@section('title', 'Admin Beauty Templates')

@section('content')

    <table class="table" style="width: 70%; margin-left:20%;">
        <thead class="thead-dark">
        <tr>

            <th scope="col">#ID</th>
            <th scope="col">Image_Path</th>
            <th scope="col">Image_Name</th>
            <th scope="col">Image</th>
            <th scope="col">Update</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($images as $image)
        <form action="{{ route( 'admin-update-template-image-view') }}" method="POST">
                @csrf
            <tr>

                <td>{{ $image->id }}</td>
                <td>{{ $image->path }}</td>
                <td>{{ $image->name }}</td>
                <td><img src="{{ asset($image->path) }}"  width="50px; height:85px" alt=""></td>
                <td><input type="submit" value="Update" class="btn btn-warning"></td>
            <td><input type="hidden" name="id" value="{{ $image->id }}"></td>

            </tr>
        </form>

        @endforeach
        </tbody>
    </table>

@endsection

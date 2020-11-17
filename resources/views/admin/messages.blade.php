@extends('layouts.admin')
@php
use App\Models\Order;
@endphp
@section('content')

<form action="{{ route('admin-delete-template-message') }}" method="POST">
    @csrf
    <button class="btn btn-danger" style="margin-left:83.722%">Delete All</button>

    <table class="table" style="width: 70%; margin-left:20%;">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">TemplateNumber</th>
            <th scope="col">TemplateImage</th>
            <th scope="col">Status</th>
            <th scope="col">X</th>
        </tr>
        </thead>
        <tbody>
    @foreach ($orders as $order)
    {{-- @if ($order->status == Order::STATUS[0])  style="background-color: aqua;" @endif --}}
        <tr >
            <th>{{ $order->id             }}</th>
            <td>{{ $order->firstName      }}</td>
            <td>{{ $order->lastName       }}</td>
            <td>{{ $order->email          }}</td>
            <td>{{ $order->phone          }}</td>
            <td>{{ $order->image_id       }}</td>
            <td><img src="{{ asset($order->path) }}" width="50px; height:85px" alt=""></td>
            <td>
                    <div class="checkbox">
                    <label>
                    <input data-id="{{ $order->id }}" class="checking" type="checkbox" @if ($order->status != Order::STATUS[0])  checked @endif data-toggle="toggle" data-onstyle="success" data-offstyle="danger" value="Disabled">
                    </label>
                     </div>

            </td>
            <td><input type="checkbox" name="ids[]" class="selectall" value="{{ $order->id }}" /></td>
        </tr>
    @endforeach
        </tbody>
    </table>
</form>


@endsection

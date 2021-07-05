@extends('admin.layout.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-primary">
                    <div class="card-body text-center">
                        <h3 class="text-white">Total Order</h3>
                        <b class="rounded-circle btn btn-sm btn-dark text-white">{{$user_count}}</b>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning">
                    <div class="card-body text-center">
                        <h3 class="text-white">Pending Order</h3>
                        <b class="rounded-circle btn btn-sm btn-dark text-white">{{$pending_count}}</b>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success">
                    <div class="card-body text-center">
                        <h3 class="text-white">Complete Order</h3>
                        <b class="rounded-circle btn btn-sm btn-dark text-white">{{$complete_count}}</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h4> Latest Order </h4>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">User</th>
                    <th scope="col">Product</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $o)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$o->user->name}}</td>
                    <td>{{$o->product->name}}</td>
                    <td>{{$o->qty}}</td>
                    <td>{{$o->qty*$o->price}}</td>
                    <td>
                        @if($o->status == 'pending')
                            <b class="badge badge-waring">Pending</b>
                        @else
                            <b class="badge badge-success">Complete</b>
                        @endif
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

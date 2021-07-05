@extends('admin.layout.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <p class="bg-info d-inline-block p-1 rounded text-black-50">Complete Order</p>
        </div>
        <div class="card-body">
            <div class="card">
                <form class="row mt-3" >
                    <div class="form-group col-md-4">
                        <input type="date" name="start_date">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="date" name="end_date">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="submit" name="" value="Filter">
                    </div>
                </form>
                @if(isset(request()->start_date))
                    <h4 class="text text-warning">
                        Between
                        <b>
                            {{request()->start_date}}
                        </b>
                        to
                        <b>
                          {{request()->end_date}}
                        </b>
                        <a href="{{url('admin/order/complete')}}" class="badge badge-primary">Show All</a>
                    </h4>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>User</th>
                        <th>Qty</th>
                        <th>Total Price</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($order as $o)
                <tr>
                    <td>{{$o->product->name}}</td>
                    <td>{{$o->user->name}}</td>
                    <td>{{$o->qty}}</td>
                    <td>
                    {{$o->qty*$o->product->price}}
                    </td>
                    <td>
                    {{$o->status}}
                    </td>
                </tr>
                 @endforeach
                </tbody>
            </table>
            {{$order->links()}}
        </div>
    </div>
@endsection

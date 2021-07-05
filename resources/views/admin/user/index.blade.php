@extends('admin.layout.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>All User</h4>
        </div>
        <div class="card_body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Emial</th>
                        <th>Image</th>
                        <th>Order Count</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($user as $u)
                    <tr>
                        <td>{{$u->name}}</td>
                        <td>{{$u->email}}</td>
                        <td>
                            <img src="{{asset($u->image)}}" style="width:50px;border-radius: 10px;"alt="">
                        </td>
                        <td>{{$u->order_count}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <a href="{{route('admin.category.create')}}" class="btn btn-sm btn-primary">Create Category</a>

@endsection

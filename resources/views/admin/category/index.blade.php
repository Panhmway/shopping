@extends('admin.layout.master')

@section('content')
    <a href="{{route('admin.category.create')}}" class="btn btn-sm btn-primary">Create Category</a>
    <table class="table table-striped">
        <thread>
            <tr>
                <th>Name</th>
                <th> Option</th>
            </tr>
        </thread>
        <tbody>
        @foreach($categories as $c)
        <tr>
            <td>{{$c->name}}</td>
            <td>
                <a href="{{route('admin.category.edit',$c->id)}}" class="badge badge-success">Update</a>
                <form action="{{route('admin.category.destroy',$c->id)}}" class="d-inline" id="delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="#" onclick="confirm('Delete?')?document.getElementById('delete').submit():false;" class="badge badge-danger">Delete</a>
                </form>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endsection

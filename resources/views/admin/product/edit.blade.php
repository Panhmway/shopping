@extends('admin.layout.master')

@section('content')
    <a href="{{route('admin.product.index')}}" class="btn btn-sm btn-primary">All Product</a>
    <form action="{{route('admin.product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Enter Name</label>
            <label>
                <input type="text" name="name" value="{{$product->name}}" class="form-control">
            </label>
        </div>
        <div class="form-group">
            <label for="">Enter Price</label>
            <label>
                <input type="number" value="{{$product->price}}" name="price" class="form-control">
            </label>
        </div>
        <div class="form-group">
            <label for="">Choose Category</label>
            <select name="cat_id" class="form-control" id="">
                @foreach($cat as $c)
                    <option value="{{$c->id}}"
                    @if($c->id==$product->category_id)
                        selected
                        @endif
                    >{{$c->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Enter Description</label>
            <textarea name="description" class="form-control" id="" cols="30" rows="10">
                {{$product->description}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="">Choose Image</label>
            <input type="file" name="image" class="form-control">
            <img src="{{asset($product->image)}}" style="width:30%;border-radius:20px"alt="">
        </div>
        <input type="submit" name="" value="Update" class="btn btn-primary">
    </form>
@endsection

@extends('layouts.template')
@section('title', 'Edit Products')
@section('content')

    <h2 class="text-center">Edit Product</h2>
    <div class="container">
        <form method="POST" action="{{route('products.editing', $product)}}">
        @csrf
        @method('PUT')

            <div class="form-group">
              <label for="exampleInputEmail1">Product Name</label>
              <input type="text" class="form-control" id="" name="name" value="{{$product->name}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Description</label>
              <select class="form-control" id="" name="description" value="{{$product->description}}"> 
                <option>Capsule</option>
                <option>In Bulk</option>
              </select>            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Stock</label>
              <input type="text" class="form-control" id="" name="value" value="{{$product->value}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Detailed Product Description</label>
              <textarea class="form-control" id="" name="long_description" rows="3">{{$product->long_description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
    </div>

@endsection

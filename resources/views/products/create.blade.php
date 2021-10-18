@extends('layouts.template')
@section('title', 'Products Page')
@section('content')
    <div class="container">
        <form method="post" actions="{{route('products.insert')}}">
            <div class="form-group">
              <label for="exampleInputEmail1">Product Name</label>
              <input type="text" class="form-control" id="" name="name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">in Stock</label>
              <input type="text" class="form-control" id="" name="name">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" id="" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection

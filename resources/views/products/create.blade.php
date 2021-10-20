@extends('layouts.template')
@section('title', 'Products Page')
@section('content')

    <h2 class="text-center">Insert a Product</h2>
    <div class="container">
        <form method="POST" action="{{route('insert.products')}}">
        @csrf
            
            <div class="form-group">
              <label for="exampleInputEmail1">Product Name</label>
              <input type="text" class="form-control" id="" name="name" placeholder="Name (ex.: Arabica)">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Description</label>
              <select class="form-control" id="" name="description"> 
                <option>Capsule</option>
                <option>In Bulk</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Stock</label>
              <input type="text" class="form-control" id="" name="value" placeholder="Quantity in stock (ex.: 10)">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Detailed Product Description</label>
              <textarea class="form-control" id="" name="long_description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
          </form>
    </div>

@endsection

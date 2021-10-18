@extends('layouts.template')
@section('title', 'Products Page')
@section('content')

<div class="container">

<a href="{{route('products.insert')}}" button type="button" class="mt-4 mb-4 btn btn-primary">Insert Product</button></a>

<!-- DataTales -->
<div class="card shadow mb-4">

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Stock</th>
              <th>Actions</th>
            </tr>
          </thead>
    
          <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->value}}</td>
                <td>
                <a href="{{route('products.description', $product->id)}}"><i class="fas fa-eye text-primary"></i>
                <a href="{{route('products.description', $product->id)}}"><i class="fas fa-edit text-info"></i>
                <a href="{{route('products.description', $product->id)}}"><i class="fas fa-trash-alt text-danger"></i>
                </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
    </div>
    </div>

    {{-- {{$products->links()}} --}}

</div>

@endsection

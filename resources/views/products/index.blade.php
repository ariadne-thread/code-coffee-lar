@extends('layouts.template')
@section('title', 'Products Page')
@section('content')

<h2 class="text-center">Coffee List ☕️</h2>
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
                <a title="Show Product" href="{{route('products.description', $product->id)}}"><i class="fas fa-eye text-primary mr-2"></i>
                <a title="Edit Product" href="{{route('products.edit', $product)}}"><i class="fas fa-edit text-info mr-2"></i>
                <a title="Delete Product" data-toggle="modal" data-target="#exampleModal" href=""><i class="fas fa-trash-alt text-danger mr-2"></i>
                </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
    </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Do you really want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form method="POST" action="{{route('products.delete', $product)}}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection

@extends('layouts.template')
@section('title', 'Products Page')
@section('content')
<div class="container">
    <h1 class="text-center">CodeCoffeeLar</h1>
    <h4 class="text-center">👩🏼‍💻 CRUD Laravel ☕️</h4>
    <hr>
    <a href="products/insert" button type="button" class="mt-4 mb-4 btn btn-primary">Insert</button></a>
    <hr>
    @foreach($products as $product)
    <p>{{$product->name}}</p>
    @endforeach
    {{$products->links()}}
</div>
@endsection

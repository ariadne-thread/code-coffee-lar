@extends('layouts.template')
@section('title', 'Show Product')
@section('content')
    <div class="jumbotron">
        <h1 class="display-4"><?php echo $product->name; ?></h1>
        <p class="lead"><?php echo $product->description; ?> - <?php echo $product->value; ?> in your home stock.</p>
        <hr class="my-4">
        <p><?php echo $product->long_description; ?></p>
        <a class="btn btn-primary btn-lg" href="{{route('products')}}" role="button">Products</a>
      </div>
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){  
        $products = product::paginate();
        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function show($id){
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }
}

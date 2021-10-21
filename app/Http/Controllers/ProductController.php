<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){  
        $products = product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function insert(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->value = $request->value;
        $product->long_description = $request->long_description;
        $product->save();
        return redirect()->route('products');
    } 

    public function show($id){
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }

    public function edit(product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function editing(Request $request, product $product){
        $product->name = $request->name;
        $product->description = $request->description;
        $product->value = $request->value;
        $product->long_description = $request->long_description;
        $product->save();
        return redirect()->route('products');
    } 

    public function delete(product $product){
        $product->delete();
        return redirect()->route('products');
    }
}

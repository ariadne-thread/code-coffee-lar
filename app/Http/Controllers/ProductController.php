<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){  
        return view('products.index');
    }

    public function create(){
        return view('products.create');
    }

    public function show($name, $value){
        return view('products.show', ['name' => $name, 'value' => $value]);
            // return "This is your $name coffee, and has $value capsules in your home stock.";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){  
        return "Products Page";
    }

    public function create(){
        return "Products Insert Page";
    }

    public function show($name, $value){
            return "This is your $name coffee, and has $value capsules in your home stock.";
    }
}

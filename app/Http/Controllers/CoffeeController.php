<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function __invoke(){
        return view('home');
    }
}

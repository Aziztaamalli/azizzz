<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class aziz extends Controller
{
    public function showProduct(){
        return view('products');
    }
    public function showHome(){
        return view('welcome');
    }
    public function showListProduct(){
        $products= Product::all();
        return view('products',[
            'product' => $products
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show ($id) {
    	$product = App\Product::where('id', $id)->get();
    	return view('product', ['product' => 'product']);
    }

    public function showAll () {
    	$products = App\Product::all();
    	return view('allProducts', ['products' => 'products']);
    }
}

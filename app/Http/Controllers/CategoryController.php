<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show () {
    	$products = App\Product::all();
    	return view('allProducts', ['products' => 'products']);
    }

    public function list () {
    	$list = App\Category::all();
    	return $list;
    }
}

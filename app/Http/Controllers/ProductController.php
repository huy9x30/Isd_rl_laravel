<?php

namespace App\Http\Controllers;

use App\Product;
use App\Sub_category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($productId)
    {
        $product = Product::find($productId);

        return view('productDetail', compact('product'));
    }

    public function showBySubCategory($sub_category_id)
    {
        $products = Product::where('sub_category_id', $sub_category_id)->get();
        $sub_category = Sub_category::where('id', $sub_category_id)->first()->name;
        
        return view('product', compact('products', 'sub_category'));
    }
}

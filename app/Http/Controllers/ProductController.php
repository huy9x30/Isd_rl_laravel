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

    public function showBySubCategory($subCategoryId)
    {
        $products = Product::where('sub_category_id', $subCategoryId)->get();
        $sub_category = Sub_category::where('id', $subCategoryId)->first()->name;
        
        return view('product', compact('products', 'sub_category'));
    }
}

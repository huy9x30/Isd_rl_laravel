<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sub_category;

class SubCategoryController extends Controller
{
	/**
     * Auth guard before calling controller functions.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show() {
        $subCategories = Sub_category::paginate(10);

        return view('admin.subCategories', compact('subCategories'));
    }

    // public function show($subCategoryId) 
    // {
    //     $products = Product::where("sub_category_id", $subCategoryId);

    //     return view("admin.allProductBySubCategory", compact('products'));
    // }
}

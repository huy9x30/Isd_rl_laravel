<?php

namespace App\Http\Controllers\Admin;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = App\Product::all();

        return view('admin.admin', compact('products'));
    }

    public function show($productId) 
    {

    }

    public function create(Request $request)
    {

    }

    public function edit($productId, Request $request)
    {

    }

    public function delete($productId)
    {

    }


}

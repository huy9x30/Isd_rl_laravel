<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Sub_category;
use Validator;
use Carbon\Carbon;

class ProductController extends Controller
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

    public function showAll()
    {
        $products = Product::paginate(10);

        return view('admin.products', compact('products'));
    }

    public function show($productId) 
    {
        $product = Product::find($productId);
        $subCategories = Sub_category::all();

        return view('admin.productDetail', compact('product', 'subCategories'));
    }

    public function showCreateForm() {
        $subCategories = Sub_category::all();

        return view('admin.productsCreate', compact('subCategories'));
    }

    public function showEditForm($productId) {
        $product = Product::find($productId);
        $subCategories = Sub_category::all();

        return view('admin.productsEdit', compact('product', 'subCategories'));
    }

    public function create(Request $request)
    {

         $rule = [
            'name' => 'required',
            'sub_category_id' => 'required',
            'image' => 'required',
            'description' => 'required',
        ];

        $messages = [
            'name.required' => 'Tên sản phẩm là trường bắt buộc',
            'sub_category_id.required' => 'Sub category là trường bắt buộc',
            'image.required' => 'Ảnh sản phẩm là trường bắt buộc',
            'description.required' => 'Mô tả sản phẩm là trường bắt buộc'
        ];

        $validator = Validator::make($request->all(), $rule, $messages);
        
        if ($validator->fails()) {
            return redirect('/admin/products/')
                        ->withErrors($validator)
                        ->withInput();
        }

        try{
            $name = $request->input('name');
            $sub_category_id = $request->input('sub_category_id');
            $image = $request->input('image');
            $description = $request->input('description');
            DB::insert('insert into products (sub_category_id, name, image, description, created_at, updated_at) values (:sub_category_id, :name, :image, :description, now(), now())', array(
                'sub_category_id' => $sub_category_id,
                'name' => $name,
                'image' => $image,
                'description' => $description
            ));

        } catch (Exception $e){
            Log::error($e->getMessage());
        }

        $pros = Product::paginate(10);
        $sales = Sale::all();
        $product_types = Product_type::all();
        return view('admin.manage_product', compact('pros','sales', 'product_types'))->with('status', 'Tạo mới sản phẩm "' .$request->input('name'). '" thành công');
        
    }

    public function edit($productId, Request $request)
    {

    }

    public function delete($productId)
    {

    }
}

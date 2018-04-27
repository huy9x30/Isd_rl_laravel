<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Sub_category;
use Validator;
use Carbon\Carbon;
use Image as ImageUpload;
use Illuminate\Support\Facades\DB;

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

    public function index()
    {
        $products = Product::paginate(10);

        return view('admin.products', compact('products'));
    }

    public function create() {
        $subCategories = Sub_category::all();

        return view('admin.productsCreate', compact('subCategories'));
    }

    public function edit($productId) {
        $product = Product::find($productId);
        $subCategories = Sub_category::all();

        return view('admin.productsEdit', compact('product', 'subCategories'));
    }

    public function store(Request $request)
    {
            try{

             $rule = [
                'name' => 'required',
                'subCategoryId' => 'required',
                'image' => 'required',
                'description' => 'required',
            ];

            $messages = [
                'name.required' => 'Tên sản phẩm là trường bắt buộc',
                'subCategoryId.required' => 'Sub category là trường bắt buộc',
                'image.required' => 'Ảnh sản phẩm là trường bắt buộc',
                'description.required' => 'Mô tả sản phẩm là trường bắt buộc'
            ];

            $validator = Validator::make($request->all(), $rule, $messages);
            
            if ($validator->fails()) {
                return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
            }

            if($request->image){
                $file = $request->image;
                $fileExtension = $file->getClientOriginalExtension();

                if(!in_array($fileExtension, array('jpeg', 'jpg','png'))){
                    return redirect()
                            ->back()
                            ->withInput()
                            ->with('error', 'Chỉ hỗ trợ định dạng ảnh jpg, jpeg, png');
                }

                $name = $request->name;
                $time = Carbon::now()->micro;
                ImageUpload::make($file)
                        ->resizeCanvas(500,500)
                        ->save('images/'.$time.'-'.$file->getClientOriginalName());

                $imagePath = 'images/'.$time.'-'.$file->getClientOriginalName();
            }
                $subCategoryId = $request->subCategoryId;
                $description = $request->description;
                DB::insert('insert into products (sub_category_id, name, image, description, created_at, updated_at) values (:sub_category_id, :name, :image, :description, now(), now())', array(
                    'sub_category_id' => $subCategoryId,
                    'name' => $name,
                    'image' => $imagePath,
                    'description' => $description
                ));

                return redirect()
                        ->back()
                        ->with('success', 'Tạo mới thành công');

            } catch (Exception $e){
                Log::error($e->getMessage());
            }
    }

    public function update($productId, Request $request)
    {
            try{

            $rule = [
                'name' => 'required',
                'description' => 'required',
            ];

            $messages = [
                'name.required' => 'Tên sản phẩm là trường bắt buộc',
                'description.required' => 'Mô tả sản phẩm là trường bắt buộc'
            ];

            $validator = Validator::make($request->all(), $rule, $messages);
            
            if ($validator->fails()) {
                return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
            }
                $product = Product::find($productId);

            if ($request->image){
                $file = $request->image;
                $fileExtension = $file->getClientOriginalExtension();

                if(!in_array($fileExtension, array('jpeg', 'jpg','png'))){
                        return redirect()
                                ->back()
                                ->withInput()
                                ->with('error', 'Chỉ hỗ trợ định dạng ảnh jpg, jpeg, png');
                }
                $time = Carbon::now()->micro;
                ImageUpload::make($file)
                        ->resizeCanvas(500,500)
                        ->save('images/'.$time.'-'.$file->getClientOriginalName());

                $product->image = 'images/'.$time.'-'.$file->getClientOriginalName();
            }

                $product->sub_category_id = $request->subCategoryId;
                $product->name = $request->name;

                $product->description = $request->description;
                $product->created_at = Carbon::now();
                $product->updated_at = Carbon::now();
                $product->save();

                return redirect()
                        ->back()
                        ->with('success', 'Cập nhật thành công');

            } catch (Exception $e){
                Log::error($e->getMessage());
            }
    }

    public function destroy(Request $request, $productId)
    {
        try {
                $product = Product::find($productId);
                $productName = $product->name;
                $product->delete();

                return back()->with('success', 'Xóa sản phẩm "' . $productName . '" thành công');
        } catch(Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra trong quá trình xóa. Vui lòng thử lại');
        }  
    }
}

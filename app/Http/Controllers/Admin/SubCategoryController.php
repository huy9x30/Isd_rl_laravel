<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sub_category;
use Validator;
use Carbon\Carbon;
use App\Category;
use App\Product;

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

    public function index(Sub_category $subCategory) {
        $subCategories = $subCategory->sortable(['id', 'asc'])->paginate(10);

        return view('admin.subCategories', compact('subCategories'));
    }

    public function create() {
        $categories = Category::all();

        return view('admin.subCategoriesCreate', compact('categories'));
    }

    public function edit($subCategoryId) 
    {
        $subCategory = Sub_category::find($subCategoryId);
        $categories = Category::all();

        return view('admin.subCategoriesEdit', compact('subCategory', 'categories'));
    }

    public function store(Request $request) {
            try {
                $rule = [
                    'name' => 'required'
                ];

                $messages = [
                    'name.required' => 'Tên nhóm sản phẩm phụ là bắt buộc'
                ];

                $validator = Validator::make($request->all(), $rule, $messages);
                
                if ($validator->fails()) {
                    return redirect()
                                ->back()
                                ->withErrors($validator)
                                ->withInput();
                }
                if (Sub_category::where('name', strtolower($request->name))->first())
                {
                    return back()->with('error', 'Tên nhóm phụ đã tồn tại.');
                }

                $sub_category = new Sub_category;
                $sub_category->category_id = $request->categoryId;
                $sub_category->name = strtolower($request->name);
                $sub_category->created_at = Carbon::now();
                $sub_category->updated_at = Carbon::now();
                $sub_category->save();

                return back()->with('success', 'Tạo mới thành công');
            } catch (Exception $e){
                return back()->with('error', 'Có lỗi xảy ra trong quá trình tạo mới. Vui lòng thử lại');
            }
    }

    public function update(Request $request, $subCategoryId) {
        try {
            $rule = [
                'name' => 'required'
            ];

            $messages = [
                'name.required' => 'Tên nhóm sản phẩm là bắt buộc'
            ];

            $validator = Validator::make($request->all(), $rule, $messages);
            
            if ($validator->fails()) {
                return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput();
                }          

                $sub_category = Sub_category::find($subCategoryId);

                $sub_category->name = $request->name;
                $sub_category->save();
                
                return back()->with('success', 'Cập nhật thành công.');
        } catch(Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra trong quá trình cập nhật. Vui lòng thử lại');
        }        
    }

    public function destroy(Request $request, $subCategoryId) {
        try {
            $productExist = Product::where('sub_category_id', $subCategoryId);
            if ($productExist) {
                return back()->with('error', 'Hãy xóa sản phẩm trước khi xóa nhóm phụ.');;
            } else {
                $sub_category = Sub_category::find($subCategoryId);
                $sub_categoryName = $sub_category->name;
                $sub_category->delete();
            }
                return back()->with('success', 'Xóa "' . $sub_categoryName . '" thành công');
        } catch(Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra trong quá trình cập nhật. Vui lòng thử lại');
        }  
    }
}

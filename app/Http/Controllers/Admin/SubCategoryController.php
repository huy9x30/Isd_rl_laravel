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

    public function showCreateForm() {
        return view('admin.subCategoriesCreate');
    }

    public function create(Request $request) {
        if ($request->isMethod('post')) {
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
                if (Category::where('name', strtolower($request->name))->first())
                {
                    return back()->with('error', 'Tên nhóm chính đã tồn tại.');
                }

                $category = new Sub_category;
                $category->name = strtolower($request->name);
                $category->created_at = Carbon::now();
                $category->updated_at = Carbon::now();
                $category->save();

                return back()->with('success', 'Tạo mới thành công');
            } catch (Exception $e){
                return back()->with('error', 'Có lỗi xảy ra trong quá trình tạo mới. Vui lòng thử lại');
            }
        }
    }
}

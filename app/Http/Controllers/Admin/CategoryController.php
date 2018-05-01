<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Carbon\Carbon;
use Validator;
use App\Sub_category;
use Illuminate\Support\Facades\Log;
use App\Exception\Handler;
use Exception;

class CategoryController extends Controller
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

    public function index(Category $category) {
    	$categories = $category->sortable(['id', 'asc'])->paginate(10);

    	return view('admin.categories', compact('categories'));
    }


    public function create() {
        return view('admin.categoriesCreate');
    }


    public function edit($categoryId) {
        $category = Category::find($categoryId);

        return view('admin.categoriesEdit', compact('category'));
    }

    public function store(Request $request) {
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

                $category = new Category;
                $category->name = strtolower($request->name);
                $category->created_at = Carbon::now();
                $category->updated_a = Carbon::now();
                $category->save();

                return back()->with('success', 'Tạo mới thành công');
            } catch (Exception $e){
                Log::error('Không lưu được category');
                Log::error($e->getMessage());
                abort(500);
            }
    }

    public function update(Request $request, $categoryId) {
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

                $category = Category::find($categoryId);

                $category->name = $request->name;
                $category->save();
                
                return back()->with('success', 'Cập nhật thành công.');
        } catch(Exception $e) {
            Log::error('Cập nhật không thành công');
            Log::error($e->getMessage());
            abort(500);    
        }        
    }

    public function destroy(Request $request, $categoryId) {
        try {
            $subExist = Sub_category::where('category_id', $categoryId)->first();
            if ($subExist) {
                return back()->with('error', 'Hãy xóa nhóm phụ trước khi xóa nhóm chính.');;
            } else {
                $category = Category::find($categoryId);
                $categoryName = $category->name;
                $category->delete();

                return back()->with('success', 'Xóa nhóm "' . $categoryName . '" thành công');
            }
        } catch(Exception $e) {
            Log::error('Xóa không thành công');
            Log::error($e->getMessage());
            abort(500);
        }  
    }
}

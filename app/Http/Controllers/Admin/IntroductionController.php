<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Introduction;
use Carbon\Carbon;

class IntroductionController extends Controller
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

    public function index() {
    	$introduction = Introduction::first();

    	return view('admin.introductions', compact('introduction'));
    }

    public function edit() {
        $introduction = Introduction::first();
        return view('admin.introductionsEdit', compact('introduction'));
    }

    public function update(Request $request) {
         try{

             $rule = [
                'content' => 'required'
            ];

            $messages = [
                'content.required' => 'Tên sản phẩm là trường bắt buộc'
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
            $introduction = Introduction::first();
            $introduction->content = $request->content;

            $introduction->updated_at = Carbon::now();
            $introduction->save();

            return redirect()->back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e){
            Log::error($e->getMessage());
        }
    }
}

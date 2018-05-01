<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Introduction;
use Carbon\Carbon;
use Validator;
use Illuminate\Support\Facades\Log;
use App\Exception\Handler;
use Exception;

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
            if ($request->content == '<p>&nbsp;</p>') {
                return redirect()
                        ->back()
                        ->with('error', 'Nội dung là trường bắt buộc.');
            }

            $introduction = Introduction::first();
            $introduction->content = $request->content;

            $introduction->updated_at = Carbon::now();
            $introduction->save();

            return redirect()->back()->with('success', 'Cập nhật thành công');
        } catch (Exception $e){
            Log::error('Cập nhật không thành công');
            Log::error($e->getMessage());
            abort(500);
        }
    }
}

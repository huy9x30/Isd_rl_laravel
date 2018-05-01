<?php

namespace App\Http\Controllers;

use App\Feedback;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Validator;
use App\Exception\Handler;
use Illuminate\Support\Facades\Log;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback');
    }

    public function store(Request $request)
    {

        $rule = [
            'title'   => 'required',
            'content' => 'required',
        ];

        $messages = [
            'title.required'   => 'Tiêu đê là bắt buộc',
            'content.required' => 'Nội dung là bắt buộc',
        ];

        $validator = Validator::make($request->all(), $rule, $messages);

        if ($validator->fails()) {
            return redirect('feedback')
                ->withErrors($validator)
                ->withInput()->with('error', 'Phản hồi không thành công');
        }

        try {
        	
            $feedbacks             = new Feedback;
            $feedbacks->title      = $request->title;
            $feedbacks->content    = $request->content;
            $feedbacks->created_at = Carbon::now();
            $feedbacks->updated_a = Carbon::now();

            $feedbacks->save();

            return back()->with('success', 'Phản hồi của bạn đã được ghi nhận.');

        } catch (Exception $e) {   
            Log::error('Không lưu được feedback');   
            Logg::error($e->getMessage());      
            abort(500);
        }
    }
}

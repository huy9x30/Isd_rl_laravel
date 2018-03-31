<?php

namespace App\Http\Controllers;

use App\Feedback;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Log\Logger;
use Validator;

class FeedbackController extends Controller
{
    public function send(Request $request)
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
            $feedbacks->updated_at = Carbon::now();

            $feedbacks->save();

            return redirect('feedback')->with('success', 'Phản hồi của bạn đã được ghi nhận.');

        } catch (Exception $e) {            
            abort(500, 'Internal Server Error has occurred. Contact admin for more info ');
        }
    }

    public function show()
    {
        return view('feedback');
    }
}

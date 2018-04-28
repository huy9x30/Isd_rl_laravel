<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;

class FeedbackController extends Controller
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

    public function show(Feedback $feedback) {
    	$feedbacks = $feedback->sortable(['id', 'asc'])->paginate(10);

    	return view('admin.feedbacks', compact('feedbacks'));
    }
}

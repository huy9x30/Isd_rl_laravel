<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Introduction;

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

    public function show() {
    	$introduction = Introduction::first();

    	return view('admin.introduction', compact('introduction'));
    }
}

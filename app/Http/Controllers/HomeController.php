<?php

namespace App\Http\Controllers;
use App\Introduction;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showHome()
    {
        return view('index');
    }

    public function showIntroduction()
    {
        $introduction = Introduction::all()->first();
        return view('introduction', compact('introduction'));
    }

    public function showContact()
    {
        return view('contact');
    }
}

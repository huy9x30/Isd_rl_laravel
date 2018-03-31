<?php

namespace App\Http\Controllers;

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
        return view('introduction');
    }

    public function showContact()
    {
        return view('contact');
    }
}

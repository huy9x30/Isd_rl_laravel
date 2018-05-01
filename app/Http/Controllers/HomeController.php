<?php

namespace App\Http\Controllers;
use App\Introduction;
use App\Category;
use App\Sub_category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showHome()
    {   
        $categories = Category::all();
        return view('index', compact('categories'));
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

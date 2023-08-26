<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function whoWho()
    {
        return view('aboutPages.who-who'); 
    }
    public function aboutUS()
    {
        return view('aboutPages.about-us'); 
    }
    public function activities()
    {
        return view('aboutPages.activities'); 
    }
}

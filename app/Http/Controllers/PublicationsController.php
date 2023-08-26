<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationsController extends Controller
{
    public function publications()
    {
        return view('publicationsPages.publications'); 
    }
}

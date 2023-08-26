<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function downloads()
    {
        return view('downloadPages.downloads'); 
    }
}

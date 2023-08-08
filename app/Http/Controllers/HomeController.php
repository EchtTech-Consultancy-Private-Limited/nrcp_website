<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        return view('home'); 
    }
    public function anumalHealth()
    {
        return view('animal-health'); 
    }public function comingSoon()
    {
        return view('coming-soon'); 
    }public function contactUs()
    {
        return view('contact-us'); 
    }public function events()
    {
        return view('events.event-list'); 
    }public function humanHealth()
    {
        return view('human-health'); 
    }
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
    public function mediaalerts()
    {
        return view('media-alerts'); 
    }
    public function vaccination_dose()
    {
        return view('vaccination_dose'); 
    }
}

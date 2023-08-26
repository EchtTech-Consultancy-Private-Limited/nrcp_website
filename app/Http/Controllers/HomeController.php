<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App, Route, DB;

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
    }
    
    
//event state and national   
    public function event_state()
    {
        $data= DB::table('events_management')->where('event_type','1')->where('soft_delete',0)->get();
        return view('events.event-state',['data'=>$data]); 
    }

    public function event_national()
    {
        $data= DB::table('events_management')->where('event_type','2')->where('soft_delete',0)->get();
        return view('events.event-national',['data'=>$data]); 
    }
//event state and national    
    
    
    
    
    
    
    public function humanHealth()
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
 
    public function events(){
        return view('events.event'); 
    }


    public function downloads()
    {
        return view('downloadPages.downloads'); 
    }
    public function publications()
    {
        return view('publicationsPages.publications'); 
    }

    public function screen_reader_access()
    {
        return view('Screen_reader_access'); 
    }
}

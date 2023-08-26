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
        //news
        $news= DB::table('news_management')->where('soft_delete','0')->get();
        return view('home',['news'=>$news]); 
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
    
    public function humanHealth()
    {
        return view('human-health'); 
    }
    
    public function mediaalerts()
    {
        return view('media-alerts'); 
    }
    public function vaccination_dose()
    {
        return view('vaccination_dose'); 
    }
    public function privacyPolicy()
    {
        return view('privacy-policy'); 
    }
    
   
//language
    public function SetLang(Request $request){
        //dd($request->data);
        session()->put('Lang',$request->data);
        App::setLocale($request->data);
        return response()->json(['data'=>$request->data,True]);
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

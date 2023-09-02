<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App, Route, DB;

class EventController extends Controller
{
    public function index(){
        return view('events.event'); 
    }
    public function event_state($slug)
    {
        $data= DB::table('events_management')->where('event_type','1')->where('soft_delete',0)->get();

        $menus = DB::table('website_menu_management')->whereurl($slug)->first();
        if($menus->url == $slug){
            $breadcrumbs = $menus->name_en;
        }else{
            $breadcrumbs = '';
        }
        return view('events.event-state',['data'=>$data, 'breadcrumbs'=> $breadcrumbs]); 
    }
    public function event_national($slug)
    {
        $data= DB::table('events_management')->where('event_type','2')->where('soft_delete',0)->get();

        $menus = DB::table('website_menu_management')->whereurl($slug)->first();
        if($menus->url == $slug){
            $breadcrumbs = $menus->name_en;
        }else{
            $breadcrumbs = '';
        }
        return view('events.event-national',['data'=>$data, 'breadcrumbs'=> $breadcrumbs]); 
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App, Route, DB;

class EventController extends Controller
{
    public function index(){
        return view('events.event'); 
    }
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
}

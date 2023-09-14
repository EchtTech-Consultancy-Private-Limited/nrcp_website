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
        $type="state";
        return view('events.event-state',
            ['data'=>$data,'type'=>$type]
        ); 
    }
    public function event_national()
    {
        $data= DB::table('events_management')->where('event_type','2')->where('soft_delete',0)->get();
        $type="national";
        return view('events.event-national',['data'=>$data,'type'=>$type]); 
    }

    public function getStateEventDetails($slug, $id){

            if($slug == 'state'){
                $data= DB::table('events_management')->where('event_type','1')->where('uid',$id)->where('soft_delete',0)->first();
                $breadcrumbs = 'State Event';
            }elseif($slug == 'national'){
                $data= DB::table('events_management')->where('event_type','2')->where('uid',$id)->where('soft_delete',0)->first();
                $breadcrumbs = 'National Event';
            }else{
                abort(404);
            }
            
        return view('events.event-details',['data'=>isset($data)?$data:'', 'breadcrumbs'=> $breadcrumbs]);
    }
}

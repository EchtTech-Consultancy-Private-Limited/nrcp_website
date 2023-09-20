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
        
        $events= DB::table('events_management')->where('event_type','1')->where('soft_delete',0)->get();
        $objectdata = new \stdclass;
        //$data =[];
        foreach($events as $datas){
            $objectdata->event = $datas;
            $eventImag= DB::table('events_details')->where('events_id',$datas->uid)->where('soft_delete',0)->get();
            if($eventImag){
                $objectdata->eventImags = $eventImag;
            }
            $data[] =$objectdata;
        }
        
        $objectpass = new \stdclass;
        $objectpass->eventContent = $data;
        $type="state";

        return view('events.event-state',
            ['data'=>$objectpass,'type'=>$type]
        ); 
    }
    public function event_national()
    {
        $events= DB::table('events_management')->where('event_type','2')->where('soft_delete',0)->get();
        $objectdata = new \stdclass;
        //$data =[];
        foreach($events as $datas){
            $objectdata->event = $datas;
            $eventImag= DB::table('events_details')->where('events_id',$datas->uid)->where('soft_delete',0)->get();
            if($eventImag){
                $objectdata->eventImags = $eventImag;
            }
            $data[] =$objectdata;
        }
        
        $objectpass = new \stdclass;
        $objectpass->eventContent = $data;
        $type="national";

        return view('events.event-national',['data'=>$objectpass,'type'=>$type]); 
    }

    public function getStateEventDetails($slug, $id){

            if($slug == 'state'){
                $events= DB::table('events_management')->where('event_type','1')->where('uid',$id)->where('soft_delete',0)->first();
                $eventImag= DB::table('events_details')->where('events_id',$id)->where('soft_delete',0)->get();
                $breadcrumbs = 'State Event';
            }elseif($slug == 'national'){
                $events= DB::table('events_management')->where('event_type','2')->where('uid',$id)->where('soft_delete',0)->first();
                //$data =[];
                $eventImag= DB::table('events_details')->where('events_id',$id)->where('soft_delete',0)->get();
                $breadcrumbs = 'National Event';
            }else{
                abort(404);
            }
        return view('events.event-details',[
            'data'=>isset($events)?$events:'', 
            'eventImag' => isset($eventImag)?$eventImag:'',
            'breadcrumbs'=> $breadcrumbs]);
    }
}

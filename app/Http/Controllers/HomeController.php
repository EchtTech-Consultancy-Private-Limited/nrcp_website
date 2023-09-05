<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\feedback;
use App\Models\contactUs;
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

    public function siteMap(){
        
        return view('site-map');
    }


    public function feedbackForm(Request $request){
        
        return view('feedback');
    }
    public function feedbackStore(Request $request){
        
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required','string','email','max:50','regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'designation' => 'required',
            'phone' => 'required',
            'organization' => 'required',
            'address' => 'required',
            'message' => 'required',
        ]);

        $data=new feedback; 
        $data->name=$request->name;
        $data->email=$request->email;
        $data->designation=$request->designation;
        $data->phone=$request->phone;
        $data->organization=$request->organization;
        $data->address=$request->address;
        $data->message=$request->message;
        $data->save();      
        return back()->with('success', 'Record Add Successfully');
    }
    public function contactForm($slug=''){

        
        return view('contact-us'); 
    }

    public function contactStroe(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required','string','email','max:50','regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $data=new contactUs; 
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->phone=$request->phone;
        $data->message=$request->message;
        $data->save();
        return back()->with('success', 'Record Add Successfully');
    } 

    public function getFAQ(){

        $faq = DB::table('faq')->where('soft_delete','0')->get();

        return view('faq-page',['faqdata'=>$faq ]); 
    }

    public function commonPagesContent($slug){
       
        $menus = DB::table('website_menu_management')->whereurl($slug)->first();
        if(!empty($menus->uid)){
            $metacontent = DB::table('dynamic_content_page_metatag')->where('menu_uid',$menus->uid)->get();

        }else{
            abort(404);
        }
        if($menus->url == $slug){
            $breadcrumbs = $menus->name_en;
        }else{
            $breadcrumbs = '';
        }
          //dd($metacontent);
       $data1 = [];
       $datas1 = [];
        foreach($metacontent as $metacontents){
            $newData = new \stdclass;
            $newData->pageTitle = $metacontents;
                $content_page= DB::table('dynamic_page_content')->where('dcpm_id',$metacontents->uid)->get();
                if($content_page){
                    $newData->content_page = $content_page;
                }

               $content_pdf= DB::table('dynamic_content_page_pdf')->where('dcpm_id',$metacontents->uid)->get();
                if($content_pdf){
                    $newData->content_pdf = $content_pdf;
                }
                $content_gallery= DB::table('dynamic_content_page_gallery')->where('dcpm_id',$metacontents->uid)->get();
                if($content_gallery){
                    $newData->content_gallery = $content_gallery;
                }
           $datas1[] = $newData;
        }
        $objectpass = new \stdclass;
        $objectpass->pageContent = $datas1;
        //dd($objectpass);
        
        return view('master_layout',['objectpass'=>$objectpass, 'breadcrumbs'=> $breadcrumbs ]); 

     }



}

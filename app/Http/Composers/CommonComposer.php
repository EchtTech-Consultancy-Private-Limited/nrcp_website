<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App, Route, DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

// Call Helper

class CommonComposer
{
    protected $request;

    /**
     * Create a new common composer.
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $social_media = DB::table('social_links')->first();
        $visitCounter = DB::table('visiting_counters')->count();
        $footerMenu = DB::table('website_menu_management')->where('menu_place','1')->where('soft_delete','0')->orderby('sort_order','Asc')->get();   
        $toogleMenu = DB::table('website_menu_management')->where('menu_place','2')->where('soft_delete','0')->orderby('sort_order','Asc')->get();   
        $logo = DB::table('website_core_settings')->where('soft_delete', 0)->first();
  //    dd($logo);
        $pageSlug = DB::table('website_menu_management')->where('url',request()->path())->first();
        if(!empty($pageSlug->uid)){
        $pageSlug1 = DB::table('website_menu_management')->where('uid',$pageSlug->parent_id)->first();
        }
         if(!empty($pageSlug1->uid)){
          $commonsideMenu = DB::table('website_menu_management')->where('parent_id',$pageSlug1->uid)->orderby('sort_order','Asc')->get();
         }

         $human_activite= DB::table('recent_activities')->where('notification_others',1)->where('soft_delete', 0)->latest('created_at')->get();
         $animal_activite= DB::table('recent_activities')->where('notification_others',2)->where('soft_delete', 0)->latest('created_at')->get();

       // dd($commonsideMenu);
        $menus = DB::table('website_menu_management')->where('menu_place','0')->where('soft_delete','0')->orderby('sort_order','Asc')->get();   
        $menuName = $this->getMenuTree($menus, 0);   

        $view->with(['headerMenu' => $menuName,
        'logo'=>$logo,
        'human_activite'=> $human_activite,
        'animal_activite'=> $animal_activite,
        'social_media'=>$social_media,
        'footerMenu'=>$footerMenu,
        'toogleMenu'=>$toogleMenu,
        'time'=>$this->getLocalTime(),
        'visitCounter'=>isset($visitCounter)?$visitCounter:'0',
        'commonsideMenu'=>isset($commonsideMenu)?$commonsideMenu:'']);

    }

    function getMenuTree($menus,$parentId){
        $branch = array();
        foreach ($menus as $menu){
            if($menu->parent_id == $parentId) {
                $children = $this->getMenuTree($menus,$menu->uid);
                if ($children) {
                    $menu->children = $children;
                }
                $branch[] = $menu;
            }
        }
        return $branch;
    }
    function getLocalTime(){
        return Carbon::now()->timezone('Asia/Kolkata')->format('H:m:s');
    }

}

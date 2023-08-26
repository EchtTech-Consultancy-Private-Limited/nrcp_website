<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

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
        

        

        $menus = DB::table('website_menu_management')->orderby('sort_order','Asc')->get();   
        $menuName = $this->getMenuTree($menus, 0);   
        $view->with(['headerMenu' => $menuName,'social_media'=>$social_media]);

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


 
}

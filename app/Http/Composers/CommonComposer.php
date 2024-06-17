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
        $social_media = DB::table('social_links')->where('status', 3)->first();
        $visitCounter = DB::table('visiting_counters')->count();
        $footerMenu = DB::table('website_menu_management')->where('menu_place','1')->where('status', 3)->where('soft_delete','0')->orderby('sort_order','Asc')->get();   
        $toogleMenu = DB::table('website_menu_management')->where('menu_place','2')->where('status', 3)->where('soft_delete','0')->orderby('sort_order','Asc')->get();   
        $logo = DB::table('website_core_settings')->where('status', 3)->where('soft_delete', 0)->first();
  //    dd($logo);
        $pageSlug = DB::table('website_menu_management')->where('status', 3)->where('url',request()->path())->first();
        if(!empty($pageSlug->uid)){
        $pageSlug1 = DB::table('website_menu_management')->where('status', 3)->where('uid',$pageSlug->parent_id)->first();
        }
         if(!empty($pageSlug1->uid)){
          $commonsideMenu = DB::table('website_menu_management')->where('parent_id',$pageSlug1->uid)->where('status', 3)->orderby('sort_order','Asc')->get();
         }

         $human_activite= DB::table('recent_activities')->where('notification_others',1)->where('status', 3)->where('soft_delete', 0)->latest('created_at')->get();
         $animal_activite= DB::table('recent_activities')->where('notification_others',2)->where('status', 3)->where('soft_delete', 0)->latest('created_at')->get();

       // dd($commonsideMenu);
        $menus = DB::table('website_menu_management')->where('menu_place','0')->where('status', 3)->where('soft_delete','0')->orderby('sort_order','Asc')->get();   
        $menuName = $this->getMenuTree($menus, 0);   


        //photo gallery managment
            $galleryData = []; 

            $gallery = DB::table('gallery_management')
                ->where('type', 0)
                ->where('status', 3)
                ->where('soft_delete', 0)
                ->latest('created_at')
                ->get();

            if (count($gallery) > 0) {
                foreach ($gallery as $images) {
                    $gallay_images = DB::table('gallery_details')
                        ->where('soft_delete', 0)
                        ->where('gallery_id', $images->uid)
                        ->latest('created_at')
                        ->get();

                    if (count($gallay_images) > 0) {
                        $galleryData[] = [
                            'gallery' => $images,
                            'gallery_details' => $gallay_images
                        ];
                    }
                }
            }

            // gallery video
            $galleryVideo = [];
            $videoGallery = DB::table('gallery_management')
                ->where('type', 1)
                ->where('status', 3)
                ->where('soft_delete', 0)
                ->latest('created_at')
                ->get();

            if (count($videoGallery) > 0) {
                foreach ($videoGallery as $images) {
                    $gallay_video = DB::table('gallery_details')
                        ->where('soft_delete', 0)
                        ->where('gallery_id', $images->uid)
                        ->latest('created_at')
                        ->get();

                    if (count($gallay_video) > 0) {
                        $galleryVideo[] = [
                            'gallery' => $images,
                            'gallery_details' => $gallay_video
                        ];
                    }
                }
            }

            // dd($galleryVideo);

        
        $view->with(['headerMenu' => $menuName,
        'logo'=>$logo,
        'galleryData'=>$galleryData,
        'galleryVideo' => $galleryVideo,
        'human_activite'=> $human_activite,
        'animal_activite'=> $animal_activite,
        'social_media'=>$social_media,
        'footerMenu'=>$footerMenu,
        'toogleMenu'=>$toogleMenu,
        'time'=>$this->getLocalTime(),
        'visitCounter'=>isset($visitCounter)?$visitCounter:'0',
        'commonsideMenu'=>isset($commonsideMenu)?$commonsideMenu:'',
        'LastUpdateRecordDate'=> $this->getLastUpdateRecordDate()??'00-00-0000'
        ]);

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

    public function getLastUpdateRecordDate(){

        $tables = DB::select("SHOW TABLES");
        $latestUpdate = null;

        foreach ($tables as $table) {
            $tableName = array_values((array)$table)[0];

            // Check if the table has an 'updated_at' column
            $columns = DB::getSchemaBuilder()->getColumnListing($tableName);
            if (in_array('updated_at', $columns)) {
                $tableUpdate = DB::table($tableName)->max('updated_at');
                if ($tableUpdate) {
                    $tableUpdate = new Carbon($tableUpdate);
                    if (!$latestUpdate || $tableUpdate->greaterThan($latestUpdate)) {
                        $latestUpdate = $tableUpdate;
                    }
                }
            }
        }
        return $latestUpdate;
    }

}

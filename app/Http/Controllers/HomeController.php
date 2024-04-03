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
    public function welcomePage(){
        $news = DB::table('news_management')->where('status', 3)->where('soft_delete', '0')->orderBy('created_at', 'desc')->get();
        $homebanner = DB::table('home_page_banner_management')->where('status', 3)->where('soft_delete', '0')->orderby('sort_order', 'Asc')->get();
        $photoGallery = DB::table('gallery_management as gm')
            ->join('gallery_details as ged', 'ged.gallery_id', '=', 'gm.uid')
            ->select('gm.*', 'ged.*')
            ->where('gm.soft_delete', '0')
            ->get();
        if(isset($_COOKIE['welcome_cookies']) && $_COOKIE['welcome_cookies'] == 'false'){
            return view('home', ['news' => $news, 'homebanner' => $homebanner, 'photogallery' => $photoGallery]);
        }
        if(isset($_COOKIE['welcome_cookies']) && $_COOKIE['welcome_cookies'] !='true' && $_COOKIE['welcome_cookies'] !='false'){
            setcookie('welcome_cookies','false');
            return view('home', ['news' => $news, 'homebanner' => $homebanner, 'photogallery' => $photoGallery]);
            
        }else{
            setcookie('welcome_cookies','true');
            return view('welcomepage');
        }
        
    }
    public function index()
    {
       // setcookie('welcome_cookies','false');
        $news = DB::table('news_management')->where('status', 3)->where('soft_delete', '0')->orderBy('created_at', 'desc')->get();
        $homebanner = DB::table('home_page_banner_management')->where('status', 3)->where('soft_delete', '0')->orderby('sort_order', 'Asc')->get();
        $photoGallery = DB::table('gallery_management as gm')
            ->join('gallery_details as ged', 'ged.gallery_id', '=', 'gm.uid')
            ->select('gm.*', 'ged.*')
            ->where('gm.soft_delete', '0')
            ->get();
        return view('home', ['news' => $news, 'homebanner' => $homebanner, 'photogallery' => $photoGallery]);
    }
    public function anumalHealth()
    {
        return view('animal-health');
    }
    public function photoGalleryDetails($id)
    {
        $photogallery = DB::table('gallery_details')
            ->where('soft_delete', 0)
            ->where('gallery_id', $id)
            ->latest('created_at')
            ->get();
        $gallery = DB::table('gallery_management')
            ->where('status', 3)
            ->where('soft_delete', 0)
            ->where('uid', $id)
            ->latest('created_at')
            ->first();
        $breadcrumbs = 'Photo Gallery Images';
        return view('photo-gallery-details', ['gallery' => $gallery, 'photogallery' => $photogallery, 'breadcrumbs' => $breadcrumbs]);
    }
    public function comingSoon()
    {
        return view('coming-soon');
    }
    public function humanHealth()
    {
        return view('human-health');
    }
    public function videoDetail()
    {
        $titleName = 'Video Gallery';
        return view('videos', ['title', $titleName]);
    }
    public function mediaalerts()
    {
        return view('media-alerts');
    }
    public function vaccination_dose()
    {
        $rabies_clinics_data_states = DB::table('model_anti_rabies_clinic')
            ->select('state_name')
            ->groupBy('state_name')
            ->get();
        $human_rabies_labs_data_states = DB::table('human_rabies_labs')
            ->select('state_name')
            ->groupBy('state_name')
            ->get();
        $animal_rabies_labs_data_states = DB::table('animal_rabies_labs')
            ->select('state_name')
            ->groupBy('state_name')
            ->get();
        return view('vaccination_dose', ['state' => $rabies_clinics_data_states, 'human_labs_state' => $human_rabies_labs_data_states, 'animal_labs_state' => $animal_rabies_labs_data_states]);
    }
    public function privacyPolicy()
    {
        return view('privacy-policy');
    }
    //language
    public function SetLang(Request $request)
    {
        session()->put('Lang', $request->data);
        App::setLocale($request->data);
        return response()->json(['data' => $request->data, True]);
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
    public function siteMap()
    {
        return view('site-map');
    }
    public function newsDetails()
    {
        $news = DB::table('news_management')->where('status', 3)->where('soft_delete', '0')->orderBy('created_at', 'desc')->get();
        return view('news-details', ['newsList' => $news]);
    }
    public function feedbackForm(Request $request)
    {
        return view('feedback');
    }
    public function feedbackStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:50', 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'designation' => 'required',
            'phone' => 'required',
            'organization' => 'required',
            'address' => 'required',
            'message' => 'required',
            'CaptchaCode' => 'required|valid_captcha',
        ]);
        $data = new feedback;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->designation = $request->designation;
        $data->phone = $request->phone;
        $data->organization = $request->organization;
        $data->address = $request->address;
        $data->message = $request->message;
        $data->save();
        return back()->with('success', 'Record Add Successfully');
    }
    public function contactForm($slug = '')
    {
        return view('contact-us');
    }
    public function contactStroe(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:50', 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'CaptchaCode' => 'required|valid_captcha',
        ]);
        $data = new contactUs;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->save();
        return back()->with('success', 'Thanks for contacting us, We have received your query and will get back to you shortly!');
    }
    public function getFAQ()
    {
        $faq = DB::table('faq')->where('status', 3)->where('soft_delete', '0')->orderBy('short_order', 'asc')->get();
        return view('faq-page', ['faqdata' => $faq]);
    }
    public function commonPagesContent($slug)
    {
        $menus = DB::table('website_menu_management')->where('status', 3)->whereurl($slug)->first();
        if (!empty($menus->uid)) {
            $metacontent = DB::table('dynamic_content_page_metatag')->where(['status' => 3, 'soft_delete' => 0])->where('menu_uid', $menus->uid)->orderBy('sort_order', 'ASC')->get();
        } else {
            abort(404);
        }
        if ($menus->url == $slug) {
            $breadcrumbs = $menus->name_en;
        } else {
            $breadcrumbs = '';
        }
        $data1 = [];
        $datas1 = [];
        foreach ($metacontent as $metacontents) {
            $newData = new \stdclass;
            $newData->pageTitle = $metacontents;
            $content_page = DB::table('dynamic_page_content')->where('dcpm_id', $metacontents->uid)->get();
            if ($content_page) {
                $newData->content_page = $content_page;
            }
            $content_pdf = DB::table('dynamic_content_page_pdf')->where('dcpm_id', $metacontents->uid)->get();
            if ($content_pdf) {
                $newData->content_pdf = $content_pdf;
            }
            $content_gallery = DB::table('dynamic_content_page_gallery')->where('dcpm_id', $metacontents->uid)->get();
            if ($content_gallery) {
                $newData->content_gallery = $content_gallery;
            }
            $datas1[] = $newData;
        }
        //  @dd($content_page);   
        $objectpass = new \stdclass;
        $objectpass->pageContent = $datas1;
        return view('master_layout', ['objectpass' => $objectpass, 'breadcrumbs' => $breadcrumbs]);
        $metaDetails = DB::table('dynamic_content_page_metatag')->where('status', 3)->where('menu_uid', $menus->uid)->orderBy('sort_order', 'ASC')->first();
        return view('master_layout', ['objectpass' => $objectpass, 'breadcrumbs' => $breadcrumbs, 'metaDetails' => $metaDetails]);

    }

    public function getDistricts(Request $request)
    {
        $statename = $request->state_name;
        $cities = DB::table('model_anti_rabies_clinic')
            ->select('district_name')
            ->where('state_name', 'LIKE', $statename)
            ->groupBy('district_name')
            ->get();
        $cityDropDown = '<option value="">Select District</option>';
        foreach ($cities as $city) {
            $cityDropDown .= '<option value="' . $city->district_name . '">' . $city->district_name . '</option>';
        }
        return $cityDropDown;
    }
    public function getDistrictsHuman(Request $request)
    {
        $statename = $request->state_name;
        $cities = DB::table('human_rabies_labs')
            ->select('district_name')
            ->where('state_name', 'LIKE', $statename)
            ->groupBy('district_name')
            ->get();
        $cityDropDown = '<option value="">Select District</option>';
        foreach ($cities as $city) {
            $cityDropDown .= '<option value="' . $city->district_name . '">' . $city->district_name . '</option>';
        }
        return $cityDropDown;
    }
    public function getDistrictsAnimal(Request $request)
    {
        $statename = $request->state_name;
        $cities = DB::table('animal_rabies_labs')
            ->select('district_name')
            ->where('state_name', 'LIKE', $statename)
            ->groupBy('district_name')
            ->get();
        $cityDropDown = '<option value="">Select District</option>';
        foreach ($cities as $city) {
            $cityDropDown .= '<option value="' . $city->district_name . '">' . $city->district_name . '</option>';
        }
        return $cityDropDown;
    }
    public function vaccinationSearch(Request $request)
    {
        $statename = $request->state_name;
        $cityname = $request->city_name;
        $data = DB::table('model_anti_rabies_clinic')
            ->select(['district_name', 'state_name', 'address'])
            ->where('state_name', 'LIKE', $statename)->where('district_name', 'LIKE', $cityname)
            ->get();
        $resultsData = '<table>'
            . '<tbody>'
            . '<tr>'
            . '<th>State Name</th>'
            . '<th>District Name</th>'
            . '<th>Facility Name</th>'
            . '</tr>';
        foreach ($data as $searchData) {
            $resultsData .= '<tr><td>' . $searchData->state_name . '</td><td>' . $searchData->district_name . '</td><td>' . $searchData->address . '</td></tr>';
        }
        $resultsData .= '</tbody></table>';
        return $resultsData;
    }
    public function vaccinationSearchH(Request $request)
    {
        $statename = $request->state_name;
        $cityname = $request->city_name;
        $data = DB::table('human_rabies_labs')
            ->select(['district_name', 'state_name', 'address'])
            ->where('state_name', 'LIKE', $statename)->where('district_name', 'LIKE', $cityname)
            ->get();
        $resultsData = '<table>'
            . '<tbody>'
            . '<tr>'
            . '<th>State Name</th>'
            . '<th>District Name</th>'
            . '<th>Facility Name</th>'
            . '</tr>';
        foreach ($data as $searchData) {
            $resultsData .= '<tr><td>' . $searchData->state_name . '</td><td>' . $searchData->district_name . '</td><td>' . $searchData->address . '</td></tr>';
        }
        $resultsData .= '</tbody></table>';
        // dd($data);
        return $resultsData;
    }
    public function vaccinationSearchA(Request $request)
    {
        $statename = $request->state_name;
        $cityname = $request->city_name;
        $data = DB::table('animal_rabies_labs')
            ->select(['district_name', 'state_name', 'address'])
            ->where('state_name', 'LIKE', $statename)->where('district_name', 'LIKE', $cityname)
            ->get();
        $resultsData = '<table>'
            . '<tbody>'
            . '<tr>'
            . '<th>State Name</th>'
            . '<th>District Name</th>'
            . '<th>Facility Name</th>'
            . '</tr>';
        foreach ($data as $searchData) {
            $resultsData .= '<tr><td>' . $searchData->state_name . '</td><td>' . $searchData->district_name . '</td><td>' . $searchData->address . '</td></tr>';
        }
        $resultsData .= '</tbody></table>';
        // dd($data);
        return $resultsData;
    }
    public function getmap()
    {
        $data = DB::table('animal_rabies_labs')->get();
        return view('map', ['data' => $data]);
    }
    public function mapAnimalCenter(Request $request)
    {
        try {
            if (($request->stateValue) && ($request->cityValue)) {
                $data = DB::table('animal_rabies_labs')->wherestate_name($request->stateValue)->Where('district_name', '=', $request->cityValue)->get();
                return response()->json(['data' => $data], 201);
            } else if (!empty($request->stateValue)) {
                $data = DB::table('animal_rabies_labs')->wherestate_name($request->stateValue)->get();
                return response()->json(['data' => $data], 201);
            }
            return response()->json(['data' => $data], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
    public function mapHumanCenter(Request $request)
    {
        try {
            if (($request->stateValue) && ($request->cityValue)) {
                $data = DB::table('human_rabies_labs')->wherestate_name($request->stateValue)->Where('district_name', '=', $request->cityValue)->get();
                return response()->json(['data' => $data], 201);
            } else if (!empty($request->stateValue)) {
                $data = DB::table('human_rabies_labs')->wherestate_name($request->stateValue)->get();
                return response()->json(['data' => $data], 201);
            }
            return response()->json(['data' => $data], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
    public function mapClientCenter(Request $request)
    {
        try {
            if ($request->stateValue && $request->cityValue) {
                $data = DB::table('model_anti_rabies_clinic')
                    ->where('state_name', $request->stateValue)
                    ->where('district_name', '=', $request->cityValue)
                    ->get();
            } else if (!empty($request->stateValue)) {
                $data = DB::table('model_anti_rabies_clinic')
                    ->where('state_name', $request->stateValue)
                    ->get();
            }
            return response()->json(['data' => $data], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
    public function onloadClientCenter()
    {
        try {
            $data = DB::table('model_anti_rabies_clinic')->get();
            return response()->json(['data' => $data], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
    public function onloadAnimalCenter()
    {
        try {
            $data = DB::table('animal_rabies_labs')->get();
            return response()->json(['data' => $data], 201);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
    public function onloadHumanCenter()
    {
        try {
            $data = DB::table('human_rabies_labs')->get();
            return response()->json(['data' => $data], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
    public function photoGalleryCategory()
    {
        try {
            $galleryData = [];
            $gallery = DB::table('gallery_management')
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
            return view('galleryCategory', ['galleryData' => $galleryData]);
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return abort(404);
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return abort(404);
        } catch (\Throwable $e) {
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return abort(404);;
        }
    }
}

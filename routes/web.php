<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\SearchController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['visitingcounter'])->group(function () {

 Route::get('/',[HomeController::class,'index'])->name('/');


Route::get('/video',[HomeController::class,'videoDetail'])->name('video');
Route::get('/anumal-health',[HomeController::class,'anumalHealth'])->name('anumal-health');
Route::get('/coming-soon',[HomeController::class,'comingSoon'])->name('coming-soon');
Route::get('/human-health',[HomeController::class,'humanHealth'])->name('human-health');
Route::get('/who-who',[AboutController::class,'whoWho'])->name('who-who');
// Route::get('/about-us',[AboutController::class,'aboutUS'])->name('about-us');
Route::get('/activities',[AboutController::class,'activities'])->name('activities');
Route::get('/media-alerts',[HomeController::class,'mediaalerts'])->name('media-alerts');
Route::get('/vaccination_dose',[HomeController::class,'vaccination_dose'])->name('vaccination-dose');
// Route::get('/downloads',[HomeController::class,'downloads'])->name('downloads');
// Route::get('/publications',[PublicationsController::class,'publications'])->name('publications');

Route::get('/photo-gallery',[HomeController::class,'photoGalleryDetails'])->name('photo-gallery');

Route::get('/news-details',[HomeController::class,'newsDetails'])->name('news-details');

//event
Route::get('/event',[EventController::class,'index'])->name('event');
Route::get('/event-state',[EventController::class,'event_state'])->name('event-state');
Route::get('/national-event',[EventController::class,'event_national'])->name('national-event');
Route::any('/{slug}/event-details/{id}',[EventController::class,'getStateEventDetails'])->name('state/event-details');

//form
Route::get('/screen-reader-access',[HomeController::class,'screen_reader_access'])->name('screen-reader-access');
Route::get('/site-map',[HomeController::class,'siteMap'])->name('sitemap');
Route::get('/feedback',[HomeController::class,'feedbackForm'])->name('feedback');
Route::post('/feedback-submit',[HomeController::class,'feedbackStore'])->name('feedback-submit');

Route::get('/contact-us',[HomeController::class,'contactForm'])->name('contact-us');
Route::post('/contact-us',[HomeController::class,'contactStroe'])->name('contact-Stroe');
Route::get('/faq',[HomeController::class,'getFAQ'])->name('faq');
Route::get('/search',[SearchController::class,'getSearchData'])->name('search');


//language
Route::get('/set-language',[HomeController::class,'SetLang']);

//content slug
Route::get('{slug}',[HomeController::class,'commonPagesContent']);

Route::post('/get-districts-list',[HomeController::class,'getDistricts']);

Route::post('/get-districts-list-human',[HomeController::class,'getDistrictsHuman']);

Route::post('/get-districts-list-animal',[HomeController::class,'getDistrictsAnimal']);

Route::post('/get-vaccination-center',[HomeController::class,'vaccinationSearch']);

});


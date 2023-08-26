<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PublicationsController;



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

Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/anumal-health',[HomeController::class,'anumalHealth'])->name('anumal-health');
Route::get('/coming-soon',[HomeController::class,'comingSoon'])->name('coming-soon');
Route::get('/contact-us',[HomeController::class,'contactUs'])->name('contact-us');
Route::get('/human-health',[HomeController::class,'humanHealth'])->name('human-health');
Route::get('/who-who',[AboutController::class,'whoWho'])->name('who-who');
Route::get('/about-us',[AboutController::class,'aboutUS'])->name('about-us');
Route::get('/activitie',[AboutController::class,'activities'])->name('activitie');
Route::get('/media-alerts',[HomeController::class,'mediaalerts'])->name('media-alerts');
Route::get('/vaccination_dose',[HomeController::class,'vaccination_dose'])->name('vaccination-dose');
Route::get('/downloads',[HomeController::class,'downloads'])->name('downloads');
Route::get('/publications',[PublicationsController::class,'publications'])->name('publications');
Route::get('/privacy-policy',[HomeController::class,'privacyPolicy'])->name('privacypolicy');


/************ API Call ********************************/
 

//event
Route::get('/event',[EventController::class,'index'])->name('event');
Route::get('/event-state',[EventController::class,'event_state'])->name('event-state');
Route::get('/event-national',[EventController::class,'event_national'])->name('event-national');



Route::get('/site-map',[HomeController::class,'site_map']);


//language
Route::get('/set-language',[HomeController::class,'SetLang']);


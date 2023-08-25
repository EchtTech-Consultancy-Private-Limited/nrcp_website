<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



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
Route::get('/event',[HomeController::class,'events'])->name('event');
Route::get('/human-health',[HomeController::class,'humanHealth'])->name('human-health');
Route::get('/who-who',[HomeController::class,'whoWho'])->name('who-who');
Route::get('/about-us',[HomeController::class,'aboutUS'])->name('about-us');
Route::get('/activitie',[HomeController::class,'activities'])->name('activitie');
Route::get('/media-alerts',[HomeController::class,'mediaalerts'])->name('media-alerts');
Route::get('/vaccination_dose',[HomeController::class,'vaccination_dose'])->name('vaccination-dose');


Route::get('/downloads',[HomeController::class,'downloads'])->name('downloads');
Route::get('/publications',[HomeController::class,'publications'])->name('publications');


/************ API Call ********************************/
 


Route::get('/event-state',[HomeController::class,'event_state'])->name('event-state');
Route::get('/event-national',[HomeController::class,'event_national'])->name('event-national');



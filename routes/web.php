<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customController;
use App\Http\Controllers\home_controller;
use App\Http\Controllers\about_controller;
use App\Http\Controllers\gallery_controller;
use App\Http\Controllers\services_controller;
use App\Http\Controllers\contact_controller;
use App\Http\Controllers\singleAction;


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

// Route::get('/home',[home_controller::class,'index']);
// Route::get('/about',[about_controller::class,'about']);
// Route::get('/contact',[contact_controller::class,'contact']);
// Route::get('/services',[services_controller::class,'services']);
// Route::get('/gallery',[gallery_controller::class,'gallery']);


// new work


// Route::get('/home',[customcontroller::class,'index']);
// Route::get('/about',[customcontroller::class,'about']);



// grouping controller

// Route::controller(customController::class)->group(function(){
    
//     route::get('/','index')->name('home');
//     route::get('/about','about')->name('about');
//     route::get('/gallery','gallery')->name('gallery');
//     route::get('/services','services')->name('services');
//     route::get('/contact','contact')->name('contact');

// }); 

// singleaction work

// Route::get('/contact',singleAction::class)->name('contact');
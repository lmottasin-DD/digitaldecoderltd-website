<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::get('about', 'FrontController@about')->name('about');
Route::get('services', 'FrontController@service')->name('service');
Route::get('testimonials', 'FrontController@testimonial')->name('testimonial');
Route::get('portfolio', 'FrontController@portfolio')->name('portfolio');
Route::get('contact', 'FrontController@contact')->name('contact');
Route::get('blog', 'FrontController@blog')->name('blog');
// Route::get('about', 'FrontController@about')->name('about');

//===================  Backend Part for Digital Decoder Ltd.    =========================

    Route::get('/', function () {
        return view('auth.login');
    });

    
    Auth::routes(['register' => false]);
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['middleware' => 'auth'],function(){

        Route::get('dashboard',[DashboardController::class,'admin_dashboard']);

        //Slider Route Here.....

        Route::get('home-slider',[SliderController::class,'index'])->name('home.slider');

        Route::get('add-slider',[SliderController::class,'create'])->name('add.slider');

        Route::get('store-slider',[SliderController::class,'store'])->name('slider.store');


    });

    





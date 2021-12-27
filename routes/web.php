<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/admin',function (){
   return view('backend.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('manual-logout', function (){
        Auth::logout();
        return redirect('/login');
        })->name('manual.logout');

/*slider routes*/
Route::resource('slider','SliderController');

Route::get('welcome',function (){
   return view('welcome');
});


// slider delete route
Route::delete('/delete/{id}','SliderController@delete')->name('slider.delete');
Route::get('/status/change/{id}','SliderController@statusChange')->name('slider.status.change');



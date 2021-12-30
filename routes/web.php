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
Route::get('welcome',function (){
    return view('welcome');
});

// front end routes
Route::group([], function()
{
    Route::get('/','FrontController@index')->name('frontend.index');
});



/*Route::get('/', function () {
    return view('front.index');
});*/
Route::post('get/contact/info','FrontController@getContactInfo')->name('contact.info');

Route::get('about', 'FrontController@about')->name('about');
Route::get('services', 'FrontController@service')->name('service');
Route::get('testimonials', 'FrontController@testimonial')->name('testimonial');
Route::get('portfolio', 'FrontController@portfolio')->name('portfolio');
Route::get('contactPage', 'FrontController@contact')->name('contact.page');
Route::get('blog', 'FrontController@blog')->name('blog');
// Route::get('about', 'FrontController@about')->name('about');


/*Route::get('/admin',function (){
   return view('backend.dashboard');
});*/

Auth::routes();

Route::group(['namespace'=>'App\Http\Controllers\HomeController'], function(){

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


// logout route
Route::get('manual-logout', function (){
        Auth::logout();
        return redirect('/login');
        })->name('manual.logout')->middleware('auth');



/*slider routes*/
Route::group(['middleware'=>'auth'], function(){
    Route::resource('slider','SliderController');
    Route::delete('/delete/{id}','SliderController@delete')->name('slider.delete');
    Route::get('/status/change/{id}','SliderController@statusChange')->name('slider.status.change');

});
/*Route::resource('slider','SliderController')->middleware('auth');
Route::delete('/delete/{id}','SliderController@delete')->name('slider.delete')->middleware('auth');
Route::get('/status/change/{id}','SliderController@statusChange')->name('slider.status.change')->middleware('auth');*/


/*cta section*/
Route::group(['middleware'=>'auth'], function(){
    Route::resource('cta','CtaController');
    Route::get('cta/status-change/{id}','CtaController@statusChange')->name('cta.status.change');
    Route::delete('cta/delete/{id}','CtaController@delete')->name('cta.delete');
});

/*service section*/
Route::group(['middleware'=>'auth'], function(){
    Route::resource('service','ServiceController');
    Route::get('service/status-change/{id}','ServiceController@statusChange')->name('service.status.change');

});

/*contact page*/
Route::group(['middleware'=>'auth'], function(){
    Route::resource('contact','ContactController');
    Route::get('contact/status-change/{id}','ContactController@statusChange')->name('contact.status.change');


});



<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');

});
Route::group(['middleware' => ['auth','admin']],function(){
  Route::get('/laravel-admin',function(){
    return view('admin.laravel-admin');
  });
});
  Route::group(['namespace' => 'frontend'], function () {
    Route:: any('/', 'ApplicationController@index')->name('Home');
    Route:: any('AboutUs','ApplicationController@AboutUs')->name('AboutUs');
    Route:: any('Contact','ApplicationController@Contact')->name('Contact');
    Route:: any('Services','ApplicationController@Services')->name('Services');
    Route:: any('slider','SliderController@slider')->name('slider');
    Route:: any('Graphicdesigner','ApplicationController@Graphicdesigner')->name('Graphicdesigner');
    Route:: any('Motiondesigner','ApplicationController@Motiondesigner')->name('Motiondesigner');
    Route:: any('Webdevelopment','ApplicationController@Webdevelopment')->name('Webdevelopment');

  });
 

      Route::group(['namespace' => 'backend', 'prefix' =>'laravel-admin'], function () {
          Route::any('/', 'DashboardController@index')->name('admin')->middleware('auth');
         
          Route::group(['prefix' => 'slider'], function () {
            Route::any('add_slider', 'SliderController@add_slider')->name('add_slider');
            Route::any('edit_slider/{id?}', 'SliderController@edit_slider')->name('edit_slider');
            Route::any('show', 'SliderController@show')->name('show');
            Route::get('delete-show/{id}', 'SliderController@delete_show')->name('delete-show');
          

          });
          

      Route::any('admin-logout', 'AdminController@logout')->name('admin-logout');

          });

      Route::group(['middleware' => 'prevent-back-history'],function(){
            Auth::routes();
            Route::get('/home', 'HomeController@index')->name('home');
          });

<?php

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
          Route::any('/', 'DashboardController@index')->name('admin');
         
          Route::group(['prefix' => 'slider'], function () {
            Route::any('add_slider', 'SliderController@add_slider')->name('add_slider');

          });

          Route::group(['namespace'=> 'backend'],function(){
              Route::any('admin-login','AdminController@login')->name('admin-login');

});
      Route::any('admin-logout', 'AdminController@logout')->name('admin-logout');

          });

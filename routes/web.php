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
    Route:: any('Graphicdesigner','ApplicationController@Graphicdesigner')->name('Graphicdesigner');
    Route:: any('Motiondesigner','ApplicationController@Motiondesigner')->name('Motiondesigner');
    Route:: any('Webdevelopment','ApplicationController@Webdevelopment')->name('Webdevelopment');

  });

      Route::group(['namespace' => 'backend', 'prefix' =>'laravel-admin'], function () {
          Route::any('/', 'DashboardController@index')->name('admin');
          //route for admin-users start

          Route::group(['prefix' => 'admin-users'], function () {
              Route::any('/', 'AdminController@index')->name('admin-users');
              Route::any('add-admin', 'AdminController@add')->name('add-admin');
          });
              //route for admin-users end
          Route::group(['prefix' => 'slider-show'], function () {
              Route::any('/', 'SliderController@index')->name('slider-show');
              Route::any('slider-show-add','SliderController@add')->name('slider-show-add');

          });


          });

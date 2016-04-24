<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {

  Route::get('/', function () {
      return view('welcome');
  });




    Route::auth();
    Route::get('/home', 'HomeController@index');
//  Route::get('articles/create', 'PagesController@create');
//  Route::get('articles', 'PagesController@index');
//  Route::get('/articles/{id}', 'PagesController@show');
//  Route::post('/articles', 'PagesController@store');
Route::resource('articles', 'PagesController');

    Route::get('/schedule', 'PagesController@schedule');
    Route::post('/schedule', 'PagesController@saveevent');
    Route::get('/progress', 'PagesController@progress');
    Route::get('/calfeed', 'PagesController@calfeed');

});

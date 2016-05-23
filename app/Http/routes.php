<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/admin', function () {
    return view('admin');
    
});
    
   Route::get('manage', ['middleware' => 'auth', function() {
   return view('manage');
   }]);

Route::get('/logout', function() {

    Auth::logout();
    return view('/index');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('posts', 'postsController@index');



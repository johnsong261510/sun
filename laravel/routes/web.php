<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//后端页面
Route::get('/admin/login',function(){
	return view('admin.login');
});
Route::post('/contact','ContactController@sendContactInfo');
Route::get('/contact','ContactController@showForm');
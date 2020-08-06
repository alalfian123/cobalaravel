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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', 'HomeController@get_index');

Route::get('/home', 'HomeController@get_index');
Route::get('/blog', 'BlogController@get_index');

        Route::get('/contact', 'ContactController@get_index');
	Route::post('/contact/post_save_message/', 'ContactController@post_save_message');
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


Route::group(['middleware' => ['web']], function(){ //Middleware acts as a bridge between a request and a response. 

    // Route::get('/home', 'PagesController@getContact');//in youtube not work?

    Route::get('contact', 'App\Http\Controllers\PagesController@getContact');
    Route::get('about', 'App\Http\Controllers\PagesController@getAbout');
    Route::get('/', 'App\Http\Controllers\PagesController@getIndex');

    // route for resources controller
    Route::resource('posts', 'App\Http\Controllers\PostController');

});